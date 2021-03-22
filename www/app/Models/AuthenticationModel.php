<?php
namespace App\Models;

use CodeIgniter\Model;

class AuthenticationModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
        $this->config = new \Config\App();
    }

    public function getToken()
    {}
}
?>