<?php
namespace App\Models;

use CodeIgniter\Model;

class CompanyModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getCompany($params = array())
    {
        $sql = "    SELECT 
                        *
                    FROM 
                        company
                    where   
                        company_active = 1 and company_id = '" . $this->session->get('company_id') . "' 
        ";
        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row) {
            $data[$key]['company_id'] = $row->company_id;
            $data[$key]['company_name'] = $row->company_name;
        }
        return $data;
    }

    public function getCompanys($params = array())
    {
        $sql = "    SELECT
                        *
                    FROM
                        company
                    where
                        company_active = 1
        ";
        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row) {
            $data[$key]['company_id'] = $row->company_id;
            $data[$key]['company_name'] = $row->company_name;
        }
        return $data;
    }
}
?>