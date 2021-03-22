<?php
namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getUser($token = 0)
    {
        print_r($this->db);
        exit();
        $builder = $this->db->table('users');
        $builder->getWhere([
            'token' => $token
        ]);
        $query = $builder->get();

        return $query->getRowArray();
    }
}
?>