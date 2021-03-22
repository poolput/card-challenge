<?php
namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
        $this->builder = $this->db->table('users');
    }

    public function getUser($token = 0)
    {
        $this->builder->getWhere([
            'token' => $token
        ]);
        $query = $this->builder->get();

        return $query->getRowArray();
    }

    public function setUser($token = 0)
    {
        $data = [
            'token' => $token,
            'score' => 0,
            'click' => 0
        ];

        $this->builder->insert($data);

        return true;
    }
}
?>