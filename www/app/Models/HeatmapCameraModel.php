<?php
namespace App\Models;

use CodeIgniter\Model;

class HeatmapCameraModel extends Model
{
    public function __construct()
    {
        $this->db_default = \Config\Database::connect('default');
        $this->db_heatmap = \Config\Database::connect('heatmap_localhost');
        $this->session = \Config\Services::session();
    }

  public function getCameraList(){
    $date = date("Y-m-d H:m:s");
		$sql = "SELECT
              heatmap_cameras.`camera_id`,
              heatmap_cameras.`camera_ip`,
              heatmap_cameras.`camera_name`,
              heatmap_cameras.`floor`,
              heatmap_cameras.`branch_id`,
              hm_config.`start_time`,
              hm_config.`end_time`
            FROM
              heatmap_cameras
            LEFT JOIN
              hm_config
            ON
              hm_config.`camera_id` = heatmap_cameras.`camera_id`
            WHERE
              heatmap_cameras.`branch_id` IN (".$this->getBranch(2).")";

		$query = $this->db_heatmap->query($sql);
    $data = array();
    
    foreach ($query->getResult() as $key => $row) {
      $data[$key]['camera_id'] = $row->camera_id;
      $data[$key]['camera_ip'] = $row->camera_ip;
      $data[$key]['camera_name'] = $row->camera_name;
      $data[$key]['floor'] = $row->floor;
      $data[$key]['branch_id'] = $row->branch_id;
      $data[$key]['branch_name'] = $this->getBranchName($row->branch_id)['branch_name'];
      $data[$key]['start_time'] = $row->start_time;
      $data[$key]['end_time'] = $row->end_time;
      $data[$key]['date'] = $date;
    }

    return $data;
	}

  public function getCamera($camera_id){
    $sql = "SELECT
              `camera_id`,
              `camera_name`,
              `camera_ip`,
              `camera_model`,
              `floor`,
              `branch_id`,
              `camera_matrix`
            FROM
              heatmap_cameras
            WHERE
              camera_id = '".$camera_id."'";

    $query = $this->db_heatmap->query($sql);
    $data = array();
    foreach ($query->getResult() as $key => $row) {
      $camera_matrix = json_decode($row->camera_matrix);
      $camera_height = $camera_matrix->CamHeight;

      $data['camera_id'] = $row->camera_id;
      $data['camera_name'] = $row->camera_name;
      $data['camera_ip'] = $row->camera_ip;
      $data['camera_model'] = $row->camera_model;
      $data['floor'] = $row->floor;
      $data['branch_id'] = $row->branch_id;
      $data['camera_height'] = $camera_height;
    }
    return $data;
  }

  public function getBranch($type = 1){
    $sql = "SELECT
                branch.branch_id,
                branch.branch_name
            FROM
              `branch`
            RIGHT JOIN
            (
            	SELECT
                branch_id
              FROM
                `auth_role_branch`
              WHERE
                role_id = '".$this->session->user_role_id."'
            ) b_id
            ON b_id.branch_id = branch.`branch_id`";

    $query = $this->db_default->query($sql);

    if($type == 1){
      $data = array();

      foreach ($query->getResult() as $key => $row) {
        $data[$key]['branch_id'] = $row->branch_id;
        $data[$key]['branch_name'] = $row->branch_name;
      }
    }else if($type == 2){
      $data  = '';
      $cnt = count($query->getResult());

      foreach($query->getResult() as $key => $row){
        if($key == ($cnt-1)){
          $data .= $row->branch_id;
        }else{
          $data .= $row->branch_id.',';
        }
      }
    }

    return $data;
  }

  public function getBranchName($branch_id){
    $sql = "SELECT
                branch_name
            FROM
                branch
            WHERE
                branch_id = ".$branch_id;

    $query = $this->db_default->query($sql);

    $data = array();
    foreach ($query->getResult() as $key => $row) {
      $data['branch_name'] = $row->branch_name;
    }
    return $data;
  }

  public function add($params = array()){
    $camera_matrix = '{"CamHeight":'.$params['camera_height'].',"D1":[[0.0028178513829870236],[-0.0043344125647008491],[0.0018986355872795579],[-0.0018514984051288441],[0],[0],[0],[0],[0],[0],[0],[0]],"IsFishEye":1,"M1":[[604.91745876366353,0,960.83291638524902],[0,604.82868224884903,954.24502554060841],[0,0,1]],"ModuleName":"'.$params['camera_model'].'","ORGHeight":1920,"ORGWidth":1920,"TiltAngle":0}';
    $sql = "INSERT INTO
                heatmap_cameras
            SET
                `camera_name` = '".$params['camera_name']."',
                `camera_model` = '".$params['camera_model']."',
                `camera_ip` = '".$params['camera_ip']."',
                `floor` = '".$params['camera_floor']."',
                `branch_id` = '".$params['cameara_branch']."',
                `camera_matrix` = '".$camera_matrix."'";

      $query = $this->db_heatmap->query($sql);

      return $query;
  }

  public function edit($params = array()){
    $camera_matrix = '{"CamHeight":'.$params['camera_height'].',"D1":[[0.0028178513829870236],[-0.0043344125647008491],[0.0018986355872795579],[-0.0018514984051288441],[0],[0],[0],[0],[0],[0],[0],[0]],"IsFishEye":1,"M1":[[604.91745876366353,0,960.83291638524902],[0,604.82868224884903,954.24502554060841],[0,0,1]],"ModuleName":"'.$params['camera_model'].'","ORGHeight":1920,"ORGWidth":1920,"TiltAngle":0}';
    $sql = "UPDATE
              heatmap_cameras
            SET
              `camera_name` = '".$params['camera_name']."',
              `camera_model` = '".$params['camera_model']."',
              `camera_ip` = '".$params['camera_ip']."',
              `floor` = '".$params['camera_floor']."',
              `branch_id` = '".$params['cameara_branch']."',
              `camera_matrix` = '".$camera_matrix."'
            WHERE `camera_id` = '".$params['camera_id']."'";

      $query = $this->db_heatmap->query($sql);

      return $query;
  }

  public function deleteCamera($camera_id){
    $sql = " DELETE
                    FROM
                      heatmap_cameras
                    WHERE 
                        camera_id = '".$camera_id."'";

    $query = $this->db_heatmap->query($sql);
    return $query;
  }
};
