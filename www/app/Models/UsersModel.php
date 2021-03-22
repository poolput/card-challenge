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

    public function getUser($token = 0)
    {
        $builder = $this->db->table('user');
        $builder->getWhere([
            'token' => $token
        ]);
        $query = $builder->get();

        return $query->getRowArray();
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
}
?>