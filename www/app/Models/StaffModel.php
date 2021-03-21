<?php
namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getSummaryStaff($params = array())
    {
        $arg = implode("','", $params);
   
        $query = "CALL getSummaryStaff('" . $arg . "');";
        $query = $this->db->query($query);
        $rows = $query->getResult();

        return $rows;
    }
}
?>