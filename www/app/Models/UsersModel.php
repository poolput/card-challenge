<?php
namespace App\Models;

use CodeIgniter\Model;
use PDO;

class UsersModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getUser($user_id = 0)
    {
        $sql = "    SELECT
                        u.*,
                        r.role_name,
                        c.company_name,
                        c.company_id,
                        b.branch_name
                    FROM
                        auth_user u left join auth_role r on u.role_id = r.role_id
                        left join branch b on b.branch_id = u.branch_id
                        left join company c on c.company_id = b.company_id
                    where
                        u.user_id = '" . $user_id . "'
        ";
        $query = $this->db->query($sql);

        return $query->getRowArray();
    }

    public function getUsers()
    {
        $sql = "    SELECT 
                        u.*, 
                        r.role_name, 
                        c.company_name 
                    FROM 
                        auth_user u left join auth_role r on u.role_id = r.role_id 
                        left join branch b on b.branch_id = u.branch_id
                        left join company c on c.company_id = b.company_id
                    where
                        c.company_id = '" . $this->session->get('company_id') . "' 
        ";
        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row) {
            $data[$key]['user_id'] = $row->user_id;
            $data[$key]['user_name'] = $row->user_name;
            $data[$key]['name'] = $row->first_name . ' ' . $row->last_name;
            $data[$key]['email'] = $row->email;
            $data[$key]['role_name'] = $row->role_name;
            $data[$key]['company_name'] = $row->company_name;
        }
        return $data;
    }

    public function add($params = array())
    {
        $sql = "SELECT * FROM
    					auth_user
    				WHERE
    					email = '" . $params['email'] . "'
    	";
        $query = $this->db->query($sql);
        $result = $query->getRowArray();
        if (empty($result)) {
            $sql = "insert into
        					auth_user
        				set
                            user_name = '" . $params['user_name'] . "',
                            user_password = '" . md5($params['user_password']) . "',
                            first_name = '" . $params['first_name'] . "',
                            last_name = '" . $params['last_name'] . "',
                            email = '" . $params['email'] . "',
                            role_id = '" . $params['role_id'] . "',
                            branch_id = '" . $params['branch_id'] . "',
                            created_date = NOW(),
                            created_by = '" . $this->session->get('user_id') . "'
    	    ";
            $this->db->query($sql);

            return true;
        } else {
            return false;
        }
    }

    public function edit($params = array())
    {
        $sql = "update
        					auth_user
        				set
                            user_name = '" . $params['user_name'] . "',
                            user_password = '" . md5($params['user_password']) . "',
                            first_name = '" . $params['first_name'] . "',
                            last_name = '" . $params['last_name'] . "',
                            email = '" . $params['email'] . "',
                            role_id = '" . $params['role_id'] . "',
                            branch_id = '" . $params['branch_id'] . "', 
                        where   
                            user_id = '" . $this->session->get('user_id') . "'
    	    ";
        $this->db->query($sql);

        return true;
    }

    public function deleteUser($user_id = 0)
    {
        $sql = "delete FROM auth_user WHERE user_id = '" . $user_id . "'";
        $query = $this->db->query($sql);

        return $query;
    }

    public function getBranchUser($branch_id)
    {
        $result = array();
        $sql = "SELECT 
                        user_id,
                        user_name,
                        branch_id
                    FROM
                        auth_user
                    WHERE
                        branch_id = ".$branch_id."
                ";
        $query = $this->db->query($sql);
        if($query){
            $result = $query->getResult();
        }
        return $result;
    }
}
?>