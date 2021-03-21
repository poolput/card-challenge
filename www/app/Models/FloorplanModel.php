<?php
namespace App\Models;

use CodeIgniter\Model;

class FloorplanModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function addFloorplan($post)
    {
        if(!empty($post)){
            //check duplicate floorplan name
            $duplicate_name = $this->checkFloorplanName($post);
            if($post['branch_id'] == 'all'){
                $branch_id = "0";
                $chk_all_branch_exist_sql = "SELECT 
                                                    map_id 
                                                FROM 
                                                    maps 
                                                WHERE 
                                                    (branch_id IS NULL OR branch_id = '' OR branch_id = 0) 
                                                    AND company_id = ".$this->session->get('company_id');
                $chk_all_branch_exist_query = $this->db->query($chk_all_branch_exist_sql);
                if(count($chk_all_branch_exist_query->getResultArray()) > 1){
                    return false;
                }
            }else{
                $branch_id = $post['branch_id'];
            }

            if(!$duplicate_name){
                $sql = "INSERT INTO maps 
                            SET
                                map_name = ".$this->db->escape(trim($post['map_name'])).",
                                map_filename = ".$this->db->escape($post['file_name']).",
                                map_path = ".$this->db->escape($post['map_path']).",
                                map_size = ".$post['map_size'].",
                                map_width = ".$post['map_width'].",
                                map_height = ".$post['map_height'].",
                                map_type = '".$post['map_type']."',
                                company_id = ".$this->session->get('company_id').",
                                branch_id = ".$branch_id.",
                                map_status = 1,
                                create_date = NOW(),
                                create_user = ".$this->session->user_id."
                        ";

                $this->db->transBegin();
                $query = $this->db->query($sql);
                if($query){
                    $map_id = $this->db->insertID();
                    $post['map_id'] = $map_id;
                    $add_map_process = $this->addMapArea($post);
                    if($add_map_process){
                        $move_file = $this->moveFileFloorplan($post);
                        if($move_file){
                            return true;
                        }
                    }
                }else{
                    $this->db->transRollback();
                }
            }
        }
    }

    public function updateFloorplan($post)
    {
        //check duplicate floorplan name
        $duplicate_name = $this->checkFloorplanName($post, true);
        if(!$duplicate_name){
            $extra_update = "";
            if(!empty($post['map_path'])){
                $extra_update = "map_filename = ".$this->db->escape($post['file_name']).",
                                map_path = ".$this->db->escape($post['map_path']).",
                                map_size = ".$post['map_size'].",
                                map_width = ".$post['map_width'].",
                                map_height = ".$post['map_height'].",
                                map_type = '".$post['map_type']."',
                                ";
            }
            $sql = "UPDATE maps 
                        SET
                            map_name = ".$this->db->escape(trim($post['map_name'])).",
                            ".$extra_update."
                            update_date = NOW(),
                            update_user = ".$this->session->user_id."
                        WHERE
                            map_id = ".$post['map_id']."
                    ";

            $this->db->transBegin();
            $query = $this->db->query($sql);
            if($query){
                $add_map_process = $this->addMapArea($post);
                if($add_map_process){
                    if(empty($post['map_path'])){
                        $this->db->transCommit();
                    }else{
                        $move_file = $this->moveFileFloorplan($post);
                    }
                    return true;
                }
            }
        }
    }

    public function deleteFloorplan($map_id)
    {
        $sql = "UPDATE 
                        maps 
                    SET 
                        map_status = 0 
                    WHERE 
                        map_id =".$map_id;

        $query = $this->db->query($sql);
        if($query){
            $this->deleteOldRecords($map_id);
        }
    }

    public function addMapArea($post)
    {
        $delete_record = $this->deleteOldRecords($post['map_id']);
        if(!empty($post['positions'])){
            $add_success = false;
            foreach ($post['positions'] as $area_key => $area_data) {
                $sql = "INSERT INTO map_area 
                                SET
                                    map_area_name = ".$this->db->escape($area_data['area_name']).",
                                    map_id = ".$post['map_id'].",
                                    camera_group_id = ".$area_data['camera_group_id'].",
                                    label_top = ".$area_data['label_top'].",
                                    label_left = ".$area_data['label_left'].",
                                    label_width = ".$area_data['label_width'].",
                                    label_height = ".$area_data['label_height'].",
                                    create_date = NOW(),
                                    create_user = ".$this->session->user_id."
                        ";
                $query = $this->db->query($sql);
                if($query){
                    $area_id = $this->db->insertID();
                    $area_data['map_id'] = $post['map_id'];
                    $area_data['area_id'] = $area_id;
                    $add_success = $this->addCoordinations($area_data);
                }else{
                    $this->db->transRollback();
                }
            }

            return $add_success;
        }
    }

    public function addCoordinations($area_data)
    {
        if(!empty($area_data['camera_group_id'])){
            $has_error = false;

            if(!empty($area_data['coordinates'])){
                foreach ($area_data['coordinates'] as $key => $coord) {
                    $sql = "INSERT INTO map_area_position
                                    SET
                                        map_area_id = ".$area_data['area_id'].",
                                        map_x_axis = ".$coord['x'].",
                                        map_y_axis = ".$coord['y']."
                            ";  
                    $query = $this->db->query($sql);
                    if(!$query){
                        $has_error = true;
                    }
                }

            }
        
            if(!$has_error){
                return true;
            }else{
                $this->db->transRollback();
                return false;
            }
        }
        
    }

    public function deleteOldRecords($map_id)
    {  

        $del_sql = "DELETE 
                            map_area, 
                            map_area_position 
                        FROM 
                            map_area
                        JOIN
                            map_area_position ON map_area.map_area_id = map_area_position.map_area_id
                        WHERE 
                            map_area.map_id = ".$map_id;

        $del_query = $this->db->query($del_sql);
        if(!$del_query){
            return false;
        }
        return true;
    }

    public function checkFloorplanName($post, $is_update = '')
    {
        $extrawhere = '';
        if($is_update){
            $extrawhere = " AND map_id != ".$post['map_id'];
        }
        $sql = "SELECT 
                        map_name
                    FROM 
                        maps
                    WHERE
                        map_name = ".$this->db->escape(trim($post['map_name']))."
                        AND map_status = 1
                        ".$extrawhere."
                ";
        $query = $this->db->query($sql);
        if($query){
            $cnt_row = count($query->getResultArray());
            if($cnt_row > 0){
                return true;
            }
        }

        return false;

    }

    public function moveFileFloorplan($post, $is_update='')
    {
        $branch_directory = 'uploads/floorplan/branch_'.$post['branch_id'].'/';
        $filename = pathinfo($post['map_path'])['basename'];
        $old_path = WRITEPATH.$post['map_path'];
        $new_name = $branch_directory.$filename;
        $destination = WRITEPATH.$branch_directory.$filename;

        if(!is_dir(WRITEPATH.$branch_directory)){
            mkdir(WRITEPATH.$branch_directory, 0755, true);
        }
        if(copy($old_path, $destination)){
            $sql = "UPDATE maps
                        SET
                            map_path = '".$new_name."'
                        WHERE
                            map_id = ".$post['map_id']."
                    ";
            $query = $this->db->query($sql);
            if($query){
                $this->db->transCommit();
                unlink($old_path);
                return true;
            }else{
                $this->db->transRollback();
                return false;
            }
        }

    }
    
    public function floorplanTable($post)
    {
        if(!empty($post['branch_id'])){

            $columns = array(
                '0' => 'map_id',
                '1' => 'map_name',
                '2' => 'branch.branch_name',
                '3' => 'cnt_camera_group'
            );

            $where_branch = '';
            if($post['branch_id'] == 'all'){
                $where_branch = "AND (maps.branch_id = '' OR maps.branch_id = null OR maps.branch_id = 0)";
            }else{
                $where_branch = "AND maps.branch_id = ".$post['branch_id'];
            }

             $total_sql = "SELECT 
                            map_id,
                            map_name,
                            branch_id,
                            company_id
                        FROM
                            maps
                        WHERE
                            map_status = 1 
                            ".$where_branch."
                    ";

            $total_query = $this->db->query($total_sql);

            $totalData = count($total_query->getResultArray());
            $totalFiltered = $totalData;
            $extrawhere = "";

            if(!empty($post['search']['value'])){
                $extrawhere .= " AND    (
                                            map_name LIKE '%".$post['search']['value']."%'
                                        )";
            }

            $sql = "SELECT 
                            map_id,
                            map_name,
                            maps.branch_id,
                            branch.branch_name,
                            maps.company_id,
                            (
                                SELECT 
                                    COUNT(camera_group_id)
                                FROM 
                                    map_area
                                WHERE 
                                    map_id = maps.map_id 
                                GROUP BY 
                                    map_id
                            ) cnt_camera_group
                        FROM
                            maps
                        LEFT JOIN
                            branch ON maps.branch_id = branch.branch_id
                        WHERE
                            map_status = 1
                            AND maps.company_id = ".$post['company_id']."      
                            ".$where_branch."
                            ".$extrawhere."
                    ";

            $sql .= " ORDER BY ".$columns [$post['order'][0]['column']]." ".$post['order'][0]['dir']." LIMIT ".$post['start'].",".$post['length'];

            $query = $this->db->query($sql);
            $totalFiltered = count($query->getResultArray());
            $data = array();

            if($query){
                foreach ($query->getResult() as $key => $row) {
                    $nested_data = array ();
                    $nested_data[] = $row->map_id;
                    $nested_data[] = $row->map_name;
                    $nested_data[] = empty($row->branch_id)? 'All Branchs' : $row->branch_name;
                    $nested_data[] = empty($row->cnt_camera_group)?0:$row->cnt_camera_group;
                    $nested_data[] = "<a class='btn btn-secondary' href='".base_url()."/floorplan/edit/".$row->branch_id."/".$row->map_id."'>
                                            <span>Edit</span>
                                        </a>
                                        <a onclick='deleteFloorplan(".$row->map_id.");' class='btn btn-outline-secondary' >
                                            <span>Del</span>
                                        </a>";

                    $data[] = $nested_data;
                }

                $json_data = array (
                    "draw" => intval ( $post ['draw'] ),
                    "recordsTotal" => intval ( $totalData ),
                    "recordsFiltered" => intval ( $totalFiltered ),
                    "data" => $data
                );
                
                return $json_data;
            }
            
        }
    }

    public function getFloorplanData($params)
    {
        $where = '';
        if(empty($where)){
            if(!empty($params['map_id'])){
                $where = " AND map_id = ".$params['map_id'];
            }
            if(!empty($params['branch_id'])){
                $where = " AND branch_id = ".$params['branch_id'];
            }
        }
        
        $sql = "SELECT 
                        map_id,
                        map_name,
                        map_filename,
                        map_path,
                        map_size,
                        map_width,
                        map_height,
                        branch_id
                    FROM
                        maps
                    WHERE
                        map_status = 1
                        ".$where."
                ";
        $query = $this->db->query($sql);
        if($query){
            $result = $query->getResult();
            foreach ($result as $key => $row) {
                if(!empty($row->map_path)){
                    $row->map_path = base_url()."/writable/".$row->map_path;
                }
            }

            return $result;
        }
    }

    public function getAreaData($post)
    {
        $area_data = array();
        $count_data = array(
                        'present' => 0,
                        'past'  => 0
                    );

        $sql = "SELECT
                        map_area_id,
                        map_area_name,
                        map_id,
                        camera_group_id,
                        label_top,
                        label_left,
                        label_width,
                        label_height
                    FROM
                        map_area
                    WHERE
                        map_id = ".$post['map_id']."
                ";
        $query = $this->db->query($sql);

        if($query){
            foreach ($query->getResult() as $key => $row) {
                $perimeter = array();
                $post['map_id'] = $row->map_id;
                $camera_group_id = $row->camera_group_id;
                $area_id = $row->map_area_id;
                $area_name = $row->map_area_name;
                $label_top = $row->label_top;
                $label_left = $row->label_left;
                $label_width = $row->label_width;
                $label_height = $row->label_height;

                $coord_sql = "SELECT 
                                    map_position_id,
                                    map_area_id,
                                    map_x_axis,
                                    map_y_axis
                                FROM
                                    map_area_position
                                WHERE
                                    map_area_id = ".$area_id."
                            ";
                $coord_query = $this->db->query($coord_sql);
                if($coord_query){
                    foreach ($coord_query->getResult() as $coord_key => $coord) {
                        $perimeter[] = array(
                                            'x' => floatval($coord->map_x_axis),
                                            'y' => floatval($coord->map_y_axis)
                                        );
                    }
                }


                $area_data[$camera_group_id] = array(
                                    'area_name' => $area_name,
                                    'camera_group_id' => $camera_group_id,
                                    'label_top' => $label_top,
                                    'label_left' => $label_left,
                                    'label_width' => $label_width,
                                    'label_height' => $label_height,
                                    'coordinates' => $perimeter,
                                    'count_data' => $count_data
                                );
            }

            if(isset($post['option_group_date'])){
                // echo "<pre>";
                // print_r($post);
                $count_data =  $this->getCountingByCameragroup($post);
                $group_array = array();

                foreach ($count_data as $key => $item) {
                   $group_array[$item->camera_group_id][] = $item;
                }

                ksort($group_array, SORT_NUMERIC);
                foreach ($group_array as $group_id => $group_cnt) {
                    $area_data[$group_id]['count_data']['present'] = $group_cnt[1]->totalIn;
                    $area_data[$group_id]['count_data']['past'] = $group_cnt[0]->totalIn;
                }
            }
            return $area_data;
        }

    }

    public function getUnavailableCameraGroup($map_id ='')
    {
        $where = '';
        if(!empty($map_id)){
            $where = ' WHERE map_id = '.$map_id;
        }
        $return = array();
        $sql = "SELECT 
                        camera_group_id
                    FROM
                        map_area
                    ".$where."
                ";
        $query = $this->db->query($sql);
        if($query){
            $result = $query->getResult();
            foreach ($result as $key => $row) {
                $return[] = $row->camera_group_id;
            }
            return $return;
        }
    }

    public function getFloorplanCameraGroup($map_id)
    {
        $return = array();
        if(!empty($map_id)){
            $sql = "SELECT 
                            camera_group_id
                        FROM
                            map_area
                        WHERE
                            map_id = ".$map_id;
            $query = $this->db->query($sql);
            if($query){
                foreach($query->getResult() as $key => $row){
                    $return[] = $row->camera_group_id;
                }
            }
        }
        return $return;
    }

    public function getCountingByCameragroup($post)
    {
        $start_time = "00:00:00";
        $end_time = "23:59:59";

        if(!empty($post['option_time_start'])){
            $start_time = $post['option_time_start'].":00";
        }
        if(!empty($post['option_time_end'])){
            $end = $post['option_time_end'].":00";
        }
        
        $branch_id = $post['option_branch'][0];
        $count_data_table = "count_data_".$branch_id;

        $camera_group = '';
        $camera_names = '';
        if(!empty($post['option_camera_group'])){
            $camera_group = implode(',', $post['option_camera_group']);
            $camera_names = $this->getCameraNames($post['option_camera_group']);
        }

        $where_period = '';
        switch ($post['option_group_date']) {
            case 1:
                $period_start = date('Y-m-d', strtotime($post['option_date_start'].' - 1 days'));
                $period_end = date('Y-m-d', strtotime($post['option_date_end']));
                $group_by = "GROUP BY
                                    cnt_date,
                                    locations
                            ";
                break;
            case 2:
                $year_end = $post['option_week_year_end'];
                $week_end = $post['option_week_end'];

                $end_week_array = getWeekByDayStart($post['config_week_start'], $year_end, 2);
                foreach ($end_week_array as $key => $end_day) {
                    if($week_end == $key){
                        $period_end = $end_day;
                    }   
                }

                if(!empty($period_end)){
                    $period_start = date('Y-m-d', strtotime($period_end.' -13 days'));
                }

                $group_by = "GROUP BY
                                    DATEDIFF(cnttime, '".$period_start."' ) DIV 7,
                                    locations
                            ";
                break;
            case 3:
                $year_start = $post['option_month_year_start'];
                $month_start = ($post['option_month_start']-1 == 0)? 12 : $post['option_month_start']-1;
                $year_end = $post['option_month_year_end'];
                $month_end = $post['option_month_end'];

                if($post['option_month_start'] == 1){
                    $year_start -= 1;
                }

                $period_start = $year_start . '-' . sprintf("%02d", $month_start) . '-01';
                $period_end = date ( "Y-m-t", strtotime ( $year_end . "-" . $month_end . "-01" ) );
                $group_by = "GROUP BY
                                    month_num,
                                    locations
                            ";
                break;
            
            default:
                $period_start = '';
                $period_end = '';
                $group_by = '';
                break;
        }

        $period_start .= ' '.$start_time;
        $period_end .= ' '.$end_time;
        $sql = "SELECT  
                        branch_id,
                        _cnt_date AS cnt_date,
                        _week_number AS week_num,
                        _month_num AS month_num,
                        _cnttime AS cnttime ,
                        SUM(_cnt_3) AS totalIn ,
                        SUM(_cnt_4) AS totalOut,
                        camera_group_name AS locations,
                        camera_group_id
                    FROM
                        (  
                            SELECT 
                                branch.branch_id AS branch_id ,
                                branch.branch_name AS branch_name, 
                                ".$count_data_table.".cnttime AS _cnttime, 
                                SUM(".$count_data_table.".cnt_3) AS _cnt_3, 
                                SUM(".$count_data_table.".cnt_4) AS _cnt_4,
                                ".$count_data_table.".cntlocation, 
                                camera_relationship.camera_group_name,
                                camera_relationship.camera_group_id,
                                DATE(".$count_data_table.".cnttime) AS _cnt_date,
                                1+DATEDIFF(cnttime,'".$period_start."'  ) DIV 7 AS _week_number,
                                MONTH(".$count_data_table.".cnttime) AS _month_num
                            FROM 
                                ".$count_data_table."  
                            JOIN 
                                camera_relationship ON ".$count_data_table.".cntlocation = camera_relationship.camera_name 
                            RIGHT JOIN 
                                branch ON branch.branch_id = ".$branch_id."  
                            WHERE  
                                cnttime >='".$period_start."'  AND cnttime <= '".$period_end."'
                                AND camera_relationship.camera_group_id IN (".$camera_group.") 
                                AND ".$count_data_table.".cntlocation IN ('".implode('\',\'', $camera_names)."') 
                            GROUP BY
                                 _cnttime ,camera_group_name 
                        ) AS tbl 
                    ".$group_by."
                    ORDER BY
                        locations,
                        cnt_date
                ";
        
        $query = $this->db->query($sql);
        if($query){
            $result = $query->getResult();
            return $result;
        }
    }


    public function getCameraNames($cam_groups)
    {
        $camera_names = array();
        if(!empty($cam_groups)){
            $camera_groups = implode(',', $cam_groups);
            $sql = "SELECT 
                            camera_id,
                            camera_group_id,
                            camera_name,
                            camera_group_name
                        FROM 
                            camera_relationship 
                        WHERE 
                            camera_group_id IN (".$camera_groups.")
                    ";
            $query = $this->db->query($sql);
            if($query){
                foreach ($query->getResult() as $key => $row) {
                    $camera_names[] = $row->camera_name;
                }
            }
        }
        return $camera_names;
    }


}
?>