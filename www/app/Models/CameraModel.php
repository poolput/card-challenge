<?php
namespace App\Models;

use CodeIgniter\Model;

class CameraModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function add($params = array())
    {
        $sql = "    INSERT INTO 
                            camera
                          SET 
                            camera_name = '" . $params["camera_name"] . "',    
                            camera_ip = '" . $params["camera_ip"] . "',  
                            camera_type = '" . $params["camera_type"] . "',  
                            camera_entrance = '" . $params["camera_entrance"] . "',  
                            camera_serial = '" . $params["camera_serial"] . "',  
                            floor = '" . $params["floor"] . "',  
                            branch_id = '" . $params["branch_id"] . "' ";

        $query = $this->db->query($sql);
        return $query;
    }

    public function remove($camera_id = 0)
    {
        $sql = " DELETE FROM
                          camera
                        WHERE
                          camera_id = " . $camera_id;
        $query = $this->db->query($sql);

        return $query;
    }

    public function edit($params = array())
    {
        $sql = "    UPDATE
                            camera
                          SET
                            camera_name = '" . $params["camera_name"] . "',    
                            camera_ip = '" . $params["camera_ip"] . "',  
                            camera_type = '" . $params["camera_type"] . "',  
                            camera_entrance = '" . $params["camera_entrance"] . "',  
                            camera_serial = '" . $params["camera_serial"] . "',  
                            floor = '" . $params["floor"] . "',  
                            branch_id = '" . $params["branch_id"] . "' 
                        WHERE 
                            camera_id = '" . $params["camera_id"] . "' ";

        $query = $this->db->query($sql);
        return $query;
    }

    public function getCameraData($camera_id)
    {
        $sql = "  SELECT
                            camera_id,camera_name,camera_ip,camera_entrance,camera_serial,camera_type,floor,branch_id
                        FROM
                            camera
                        WHERE
                            camera_id = '" . $camera_id . "'  ";

        $query = $this->db->query($sql);

        $data = array();
        foreach ($query->getResult() as $key => $row) {
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

    public function getCameraByCameraGroup($camera_group_id = null, $branch = null)
    {
        $data = array();
            $sql = "  SELECT 
                          camera.camera_name
                        FROM 
                            camera left join camera_relationship on camera.camera_id = camera_relationship.camera_id
                        WHERE 
                            camera_relationship.camera_group_id in (" . $camera_group_id . ") 
            ";
            $query = $this->db->query($sql);
            
            foreach ($query->getResult() as $row) {
                $data [] = $row->camera_name;
            }
 
        return $data;
    }

    public function getCamera($role_id)
    {
        $sql = "  SELECT 
                        camera_id,camera_name,camera_ip,camera_entrance,camera_type, floor,branch_name
                    FROM 
                        branch 
                    JOIN 
                        auth_role_branch ON branch.branch_id = auth_role_branch.branch_id
                    JOIN 
                        camera ON branch.branch_id = camera.branch_id
                    WHERE 
                        auth_role_branch.role_id = '" . $role_id . "'	
                    ORDER BY 
                        camera.branch_id,camera_name";

        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row) {
            $data[$key]['camera_id'] = $row->camera_id;
            $data[$key]['camera_name'] = $row->camera_name;
            $data[$key]['camera_ip'] = $row->camera_ip;
            $data[$key]['camera_entrance'] = $row->camera_entrance;
            $data[$key]['camera_type'] = $row->camera_type;
            $data[$key]['floor'] = $row->floor;
            $data[$key]['branch_name'] = $row->branch_name;
        }
        return $data;
    }

    public function getCameraOfBranch($role_id, $branch_id)
    {
        $sql = "  SELECT
                        camera_id,camera_name,camera_ip,camera_entrance,camera_type, floor,branch_name
                    FROM
                        branch
                    JOIN
                        auth_role_branch ON branch.branch_id = auth_role_branch.branch_id
                    JOIN
                        camera ON branch.branch_id = camera.branch_id
                    WHERE
                        auth_role_branch.role_id = '" . $role_id . "'	
                        and auth_role_branch.branch_id = '" . $branch_id . "'                            
                    ORDER BY
                        camera.branch_id,camera_name";

        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row) {
            $data[$key]['camera_id'] = $row->camera_id;
            $data[$key]['camera_name'] = $row->camera_name;
            $data[$key]['camera_ip'] = $row->camera_ip;
            $data[$key]['camera_entrance'] = $row->camera_entrance;
            $data[$key]['camera_type'] = $row->camera_type;
            $data[$key]['floor'] = $row->floor;
            $data[$key]['branch_name'] = $row->branch_name;
        }
        return $data;
    }

    public function checkDuplicateCameraName($params = array())
    {
        $sql = "select
                            *
                        from
                            camera
                        where
                            camera_name = '" . $params["group_name"] . "'
                            and branch_id = '" . $params["branch_id"] . "'
                    ";
        $query = $this->db->query($sql);
        return count($query->getResultArray());
    }
}
?>