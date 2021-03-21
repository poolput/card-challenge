<?php
namespace App\Models;

use CodeIgniter\Model;

class TaskSchedulerModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }
    
    public function add($params = array())
    {     
        
        echo "<pre>";
        print_r($params);
        exit;
        
    }
    public function checkDuplicateName($params)
    {
        $sql = "select
                            *
                        from
                            schedules
                        where
                            schedule_name = '".$params["schedule_name"]."'
                            and role_id = '".$params["role_id"]."'
                            and company_id = '".$params["company_id"]."'
                    ";
        $query = $this->db->query($sql);
        return count($query->getResultArray());
    }
    public function getReportName()
    {
        $sql = " SELECT
                            *
                        FROM
                            schedule_reports
                        WHERE
                            schedule_report_enabled = 1
                        ORDER BY
                            schedule_report_name ";
        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row) {
            $data[$key]['schedule_report_id'] = $row->schedule_report_id;
            $data[$key]['schedule_report_name'] = $row->schedule_report_name;
        }
        
        return $data;
    }
    

    public function remove($schedule_id = 0)
    {
        $sql_delete = "  DELETE FROM
                                            schedules
                                        WHERE
                                            schedule_id = " . $schedule_id;
        $query = $this->db->query($sql_delete);
        
        return $query;
    }
    

    
}
?>