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

        $insert_id = $this->db->insertID();

        return $insert_id;
    }

    public function getMyBest($token = 0)
    {
        $this->builder->select('(SELECT MIN(score) as score FROM user WHERE token = ' . $token . ' limit 1) AS score', false);
        $query = $this->builder->get();

        return $query->getRowArray();
    }
}
?>