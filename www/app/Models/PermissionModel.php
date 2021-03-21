<?php
namespace App\Models;

use CodeIgniter\Model;

class PermissionModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }
    
    public function edit($params=array()){
        if(empty($params)){
            return false;
        }
        $this->db->transBegin();
        
        $sql = "delete from auth_permission_resource where role_id = '" . $params['role_id'] . "' ";
        $this->db->query($sql);
        
        //select parent
        
        //add parent to permission
        
        foreach ($params['page'] as $resource) {
            $sql = "insert into
        					auth_permission_resource
        				set
                            role_id = '" . $params['role_id'] . "',
                            res_id = '" . $resource . "',
                            create_by = '" . $params['user_id'] . "',
                            create_date = NOW()
    	               ";
            $this->db->query($sql);
        }
        if ($this->db->transStatus() === FALSE) {
            $this->db->transRollback();
            return false;
        } else {
            $this->db->transCommit();
            return true;
        }
    }
}
?>