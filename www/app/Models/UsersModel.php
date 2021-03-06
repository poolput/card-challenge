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
        $sql = "    SELECT
                        MIN(score) as score
                    FROM
                        users
                    where
                        token = '" . $token . "'
                        and score <> 0
                    limit 1
        ";
        $query = $this->db->query($sql);

        return $query->getRowArray();
    }

    public function getGlobalBest()
    {
        $sql = "    SELECT
                        MIN(score) as score
                    FROM
                        users
                    where
                        score <> 0
                    limit 1
        ";
        $query = $this->db->query($sql);

        return $query->getRowArray();
    }

    public function setScore($token = 0, $user_id = 0, $score = 0)
    {
        $data = [
            'score' => $score
        ];
        $this->builder->set($data);
        $this->builder->where('token', $token);
        $this->builder->where('id', $user_id);
        $this->builder->update();

        return true;
    }
}
?>