<?php
namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getVisitor7Days($params = array())
    {
        $arg = implode("','", $params);
        $query = "CALL getVisitorLast7days('" . $arg . "');";
        $query = $this->db->query($query);
        $rows = $query->getResult();
        $in = array();
        $category = array();
        $result['categories'] = '';
        $result['data_in'] = '';

        if(!empty($rows)){
        	foreach ($rows as $key => $row) {
        		$category[] = date('d F Y (D)', strtotime($row->_date));
        		$in[] = $row->_in;
        	}
        }
        
        $result['categories'] = implode(',', $category);
        $result['data_in'] = implode(',', $in);

        return $result;
    }

    public function getVisitorTopEvent($params = array())
    {
    	$arg = implode("','", $params);
        $query = "CALL getVisitorTopEvent('" . $arg . "');";
        $query = $this->db->query($query);
        $rows = $query->getResult();
        $in = array();
        $category = array();
        $result['categories'] = '';
        $result['data_in'] = '';

        if(!empty($rows)){
        	foreach ($rows as $key => $row) {
        		$category[] = $row->event_name;
        		$in[] = $row->_in;
        	}
        }
        
        $result['categories'] = implode(',', $category);
        $result['data_in'] = implode(',', $in);
        
        return $result;
    }
}
