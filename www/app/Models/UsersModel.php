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
        $sql = "    SELECT
                        *
                    FROM
                        user
                    where
                        token = '" . $token . "'
        ";
        $query = $this->db->query($sql);

        return $query->getRowArray();
    }
}
?>