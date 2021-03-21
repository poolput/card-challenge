<?php
namespace App\Models;

use CodeIgniter\Model;

class HeatmapRangeModel extends Model
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getBranch(){
      $sql = "SELECT
                  branch.branch_id,
                  branch.branch_name
              FROM
                branch
              RIGHT JOIN
              (
              	SELECT
                  branch_id
                FROM
                  auth_role_branch
                WHERE
                  role_id = '".$this->session->user_role_id."'
              ) b_id
              ON b_id.branch_id = branch.branch_id";

      $query = $this->db->query($sql);
      $data = array();

      foreach ($query->getResult() as $key => $row) {
        $data[$key]['branch_id'] = $row->branch_id;
        $data[$key]['branch_name'] = $row->branch_name;
      }

      return $data;
    }

    public function getRange($branch_id=0){
      $sql = "SELECT
                *
              FROM
                heatmap
              WHERE branch_id = '". $branch_id ."' ";

      $query = $this->db->query($sql);
      $data = array();
      foreach ($query->getResult() as $row) {
        $data['min_value'] = $row->min;
        $data['max_value'] = $row->max;
        $data['branch_id'] = $row->branch_id;
      }
      
      return $data;
    }

    public function saveRange($params = array()){
      $sql = "SELECT
                *
              FROM
                heatmap
              WHERE
               branch_id = '".$params['branch']."'";

      $query = $this->db->query($sql);
      $row = $query->getRow();

      if(empty($row)){
          $sql = " INSERT INTO heatmap (min,max,branch_id)
                   VALUES ('".$params['min_value']."','".$params['max_value']."','".$params['branch']."')";
      }else{
          $sql = "UPDATE
                    heatmap
                  SET
                    min = '".$params['min_value']."',
                    max = '".$params['max_value']."',
                  WHERE branch_id = '".$params['branch']."'";
      }

      $query = $this->db->query($sql);
    }


};
