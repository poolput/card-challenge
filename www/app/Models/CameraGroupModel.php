<?php
namespace App\Models;

use CodeIgniter\Model;

class CameraGroupModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }
    public function add($params = array())
    {        
        $cnt_camera_chk = count($params["camera_list"]);

        $this->db->transBegin();
        $sql_insert = "    INSERT INTO 
                                            camera_group
                                        SET 
                                            camera_group_name = '". $params["group_name"] ."',
                                            camera_group_desc = '". $params["description"] ."',
                                            camera_group_count = '".$cnt_camera_chk."',
                                            branch_id = '". $params["branch_id"] ."' ";        
        
        $this->db->query($sql_insert);        
        $camera_group_id = $this->db->insertID();
        
        for($ii=0; $ii<$cnt_camera_chk; $ii++)
        {                        
            list($cam_id,$cam_name) = explode("|",$params["camera_list"][$ii]);
            
            $sql_insert_relation = "INSERT INTO
                                                            camera_relationship
                                                        SET
                                                            camera_id = '".$cam_id."',
                                                            camera_name ='".$cam_name."' ,
                                                            camera_group_id = '".$camera_group_id."' ,                            
                                                            camera_group_name = '".$params["group_name"]."'  
                                                        ";            
            $this->db->query($sql_insert_relation);                       
        }
        
        if($params["transportation"]!=""){
            
            $sql_insert_transportation = "INSERT INTO
                                                                            camera_group_type
                                                                        SET
                                                                            camera_group_id = '".$camera_group_id."' ,
                                                                            camera_group_name = '".$params["group_name"]."',
                                                                            transportation = '".$params["transportation"]."',
                                                                            location ='".$params["location"]."',
                                                                            branch_id ='".$params["branch_id"]."'
                                                                         ";            
            $this->db->query($sql_insert_transportation);                              
        }
 
         if ($this->db->transStatus() === FALSE) {
            $this->db->transRollback();
            return false;
        } else {
            $this->db->transCommit();
            return true;
        }
          
    }
    
    public function remove($camera_group_id = 0)
    {        
        $this->db->transBegin();
        
        # delete relation
        $sql_delete_relation = " DELETE FROM
                                                            camera_relationship
                                                        WHERE
                                                            camera_group_id = '". $camera_group_id ."'  ";
        $this->db->query($sql_delete_relation);
        
        # delete camera type
        $sql_delete_camera_type = " DELETE FROM
                                                                        camera_group_type
                                                                    WHERE
                                                                        camera_group_id = '". $camera_group_id ."'  ";
        $this->db->query($sql_delete_camera_type);
      
        # delete camera_group
        $sql_delete = " DELETE FROM
                                            camera_group
                                        WHERE
                                            camera_group_id = '" . $camera_group_id ."' ";
        $query = $this->db->query($sql_delete);
        
        if ($this->db->transStatus() === FALSE) {
            $this->db->transRollback();
            return false;
        } else {
            $this->db->transCommit();
            return true;
        }
        
    }
    
    public function edit($params = array())
    {
        $cnt_camera_chk = count($params["camera_list"]);
        
        $this->db->transBegin();
        $sql_update = "  UPDATE
                                                camera_group
                                          SET
                                                camera_group_name = '". $params["group_name"] ."',
                                                camera_group_desc = '". $params["description"] ."',
                                                camera_group_count = '".$cnt_camera_chk."',
                                                branch_id = '". $params["branch_id"] ."'         
                                            WHERE 
                                                camera_group_id = '". $params["camera_group_id"] ."'  ";        
        $this->db->query($sql_update);
           
        # delete old data
        $sql_delete = " DELETE FROM 
                                            camera_relationship 
                                        WHERE 
                                            camera_group_id = '". $params["camera_group_id"] ."'  ";
        $this->db->query($sql_delete);
        
        #insert new data 
        for($ii=0; $ii<$cnt_camera_chk; $ii++)
        {
            list($cam_id,$cam_name) = explode("|",$params["camera_list"][$ii]);
            
            $sql_insert_relation = "INSERT INTO
                                                            camera_relationship
                                                        SET
                                                            camera_id = '".$cam_id."',
                                                            camera_name ='".$cam_name."' ,
                                                            camera_group_id = '".$params["camera_group_id"]."' ,
                                                            camera_group_name = '".$params["group_name"]."'  ";
            $this->db->query($sql_insert_relation);
        }
        
        #update transportation/location
        if($params["transportation"]!=""){
            
                $sql_insert_transportation = "UPDATE
                                                                                camera_group_type
                                                                            SET
                                                                                camera_group_name = '".$params["group_name"]."',
                                                                                transportation = '".$params["transportation"]."',
                                                                                location ='".$params["location"]."',
                                                                                branch_id ='".$params["branch_id"]."'
                                                                            WHERE
                                                                                camera_group_id = '".$params["camera_group_id"]."'  ";
                $this->db->query($sql_insert_transportation);
        }else{            
                # delete camera type
                $sql_delete_camera_type = " DELETE FROM
                                                                            camera_group_type
                                                                        WHERE
                                                                            camera_group_id = '".$params["camera_group_id"]."'  ";
                $this->db->query($sql_delete_camera_type);            
        }
        
        if ($this->db->transStatus() === FALSE) {
            $this->db->transRollback();
            return false;
        } else {
            $this->db->transCommit();
            return true;
        }
        
    }
    
    public function getCameraData($camera_id){
        $sql = "  SELECT 
                            camera_id,camera_name,camera_ip,camera_entrance,camera_serial,camera_type,floor,branch_id
                        FROM 
                            camera
                        WHERE 
                            camera_id = '". $camera_id ."'  ";
        
        $query = $this->db->query($sql);
        
        $data = array();
        foreach ($query->getResult() as $key => $row)
        {
            $data['camera_id'] = $row->camera_id;
            $data['camera_name'] = $row->camera_name;
            $data['camera_ip'] = $row->camera_ip;
            $data['camera_entrance'] = $row->camera_entrance;
            $data['camera_serial'] = $row->camera_serial;
            $data['camera_type'] = $row->camera_type;
            $data['floor'] = $row->floor;
            $data['branch_id'] = $row->branch_id;
        }
        return $data;
        
    }
    
    public function getCameraGroup($role_id)
    { 
        $sql = "  SELECT 
                        	auth_role_branch.branch_id,branch_name,camera_group.camera_group_id,camera_group.camera_group_name,
                        	camera_group_count AS amount,camera_group_desc,transportation,location
                        FROM 
                        	camera_group 
                        JOIN 
                        	auth_role_branch 
                        	ON auth_role_branch.branch_id = camera_group.branch_id	
                        JOIN	
                        	branch 
                        	ON branch.branch_id = auth_role_branch.branch_id
                        LEFT JOIN 
                        	camera_group_type
                        	ON camera_group_type.camera_group_id = camera_group.camera_group_id 
                        WHERE 
                        	auth_role_branch.role_id = '".$role_id."'	
                        ORDER BY
                        	auth_role_branch.branch_id,camera_group.camera_group_name";
 
        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row)
        {
            $data[$key]['branch_id'] = $row->branch_id;
            $data[$key]['branch_name'] = $row->branch_name;
            $data[$key]['camera_group_id'] = $row->camera_group_id; 
            $data[$key]['camera_group_name'] = $row->camera_group_name; 
            $data[$key]['amount'] = $row->amount; 
            $data[$key]['camera_group_desc'] = $row->camera_group_desc; 
            $data[$key]['transportation'] = $row->transportation; 
            $data[$key]['location'] = $row->location; 
        }
        return $data;
    }

    public function getCameraGroupByBranch($branch_id)
    {
        $sql = "SELECT 
                        camera_group_id,
                        camera_group_name
                    FROM 
                        camera_group 
                    WHERE 
                        branch_id = ".$branch_id."
                    ORDER BY
                        camera_group_name
                ";
        $query = $this->db->query($sql);
        $data = array();
        if($query){
            $result = $query->getResult();
            foreach ($result as $key => $row) {
                $data[$key]['camera_group_id'] = $row->camera_group_id;
                $data[$key]['camera_group_name'] = $row->camera_group_name;
            }
        }
        return $data;
    }

    public function getCameraGroupByCompany($company_id)
    {
        $sql = "SELECT
                        c.company_id,
                        b.branch_id,
                        b.branch_name,
                        cg.camera_group_id,
                        cg.camera_group_name
                    FROM    
                        company c
                    LEFT JOIN
                        branch b ON c.company_id = b.company_id
                    LEFT JOIN
                        camera_group cg ON b.branch_id = cg.branch_id
                    WHERE
                        cg.camera_group_id > 0
                        AND c.company_id = ".$company_id."
                    ORDER BY
                        camera_group_name
                ";
        $query = $this->db->query($sql);
        $data = array();
        if($query){
            $result = $query->getResult();
            foreach ($result as $key => $row) {
                $data[$key]['camera_group_id'] = $row->camera_group_id;
                $data[$key]['camera_group_name'] = $row->camera_group_name;
            }
        }
        return $data;
    }
    
    public function getCameraChoose($camera_group_id)
    {
        $sql = "SELECT 
                            *
                        FROM 
                        	camera_relationship
                        WHERE                         
                        	camera_group_id ='".$camera_group_id."' ";
        
        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row)
        {
            $data[$key]['camera_id'] = $row->camera_id;
            $data[$key]['camera_name'] = $row->camera_name;  
        }
        return $data;
    }
    
    public function getCameraGroupData($camera_group_id)
    {
        $sql = "  SELECT
                        	auth_role_branch.branch_id,branch_name,camera_group.camera_group_id,camera_group.camera_group_name,
                        	camera_group_count AS amount,camera_group_desc,transportation,location
                        FROM
                        	camera_group
                        JOIN
                        	auth_role_branch
                        	ON auth_role_branch.branch_id = camera_group.branch_id
                        JOIN
                        	branch
                        	ON branch.branch_id = auth_role_branch.branch_id
                        LEFT JOIN
                        	camera_group_type
                        	ON camera_group_type.camera_group_id = camera_group.camera_group_id
                        WHERE
                            camera_group.camera_group_id = '".$camera_group_id."' 
                        ORDER BY
                        	auth_role_branch.branch_id,camera_group.camera_group_name";
        
        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row)
        {
            $data['branch_id'] = $row->branch_id;
            $data['branch_name'] = $row->branch_name;
            $data['camera_group_id'] = $row->camera_group_id;
            $data['camera_group_name'] = $row->camera_group_name;
            $data['amount'] = $row->amount;
            $data['camera_group_desc'] = $row->camera_group_desc;
            $data['transportation'] = $row->transportation;
            $data['location'] = $row->location;
        }
        return $data;
    }
    
    public function getCameraBranchData($branch_id)
    {
        $sql = "  select 
                            camera_id,camera_name
                        from
                            camera
                        where
                            branch_id = '".$branch_id."'  
                        order by camera_name";
        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row)
        {
            $data[$key]['camera_id'] = $row->camera_id;
            $data[$key]['camera_name'] = $row->camera_name;        
        }
        return $data;
    }
    
    public function checkDuplicateGroupName($params = array())
    {
        $sql = "select 
                            *
                        from 
                            camera_group
                        where   
                            camera_group_name = '".$params["group_name"]."' 
                            and branch_id = '".$params["branch_id"]."' 
                    ";  
        $query = $this->db->query($sql);
        return count($query->getResultArray());
        
    }
    
}
?>