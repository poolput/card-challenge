<?php
namespace App\Models;

use CodeIgniter\Model;

class HeatmapGroupModel extends Model
{
    public function __construct()
    {
        $this->db_default = \Config\Database::connect('default');
        $this->db_heatmap = \Config\Database::connect('heatmap_localhost');
        $this->session = \Config\Services::session();
    }

  public function getCameraGroupList(){
		$sql = "SELECT
                *
            FROM
              `heatmap_camera_groups`
            WHERE
              branch_id IN (".$this->getBranch(2).")";

		$query = $this->db_heatmap->query($sql);
    $data = array();

    foreach ($query->getResult() as $key => $row) {
      $data[$key]['camera_group_id'] = $row->camera_group_id;
      $data[$key]['camera_group_name'] = $row->camera_group_name;
      $data[$key]['camera_group_desc'] = $row->camera_group_desc;
      $data[$key]['camera_group_count'] = $row->camera_group_count;
      $data[$key]['branch_id'] = $row->branch_id;
      $data[$key]['branch_name'] = $this->getBranchName($row->branch_id)['branch_name'];
    }

    return $data;
	}

  public function getCamera($branch_id){
    $sql = "SELECT
              `camera_id`,
              `camera_name`
            FROM
              heatmap_cameras
            WHERE
              heatmap_cameras.`branch_id` = '".$branch_id."'";

    $query = $this->db_heatmap->query($sql);
    $data = array();

    foreach ($query->getResult() as $key => $row) {
      $data[$key]['camera_id'] = $row->camera_id;
      $data[$key]['camera_name'] = $row->camera_name;
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

  public function getHeatmapGroup($group_id = 0){
    $sql =
    "SELECT
      *
    FROM
      `heatmap_camera_groups`
    WHERE
      camera_group_id = '".$group_id."'";

    $query = $this->db_heatmap->query($sql);
    $data = array();

    foreach ($query->getResult() as $key => $row) {
      $data['camera_group_id'] = $row->camera_group_id;
      $data['camera_group_name'] = $row->camera_group_name;
      $data['camera_group_desc'] = $row->camera_group_desc;
      $data['camera_group_count'] = $row->camera_group_count;
      $data['branch_id'] = $row->branch_id;
      $data['branch_name'] = $this->getBranchName($row->branch_id)['branch_name'];
    }

    return $data;
  }

  public function getCameraInHeatmapGroup($group_id){
    $sql = "SELECT
              *
            FROM
              `heatmap_camera_relationships`
            WHERE
              camera_group_id = '".$group_id."'";
    $query = $this->db_heatmap->query($sql);
    $data = array();

    foreach ($query->getResult() as $key => $row) {
      $data[$key]['camera_id'] = $row->camera_id;
      //array_push($data,$row->camera_id);
    }

    return $data;
  }

  public function add($params = array()){

    $camera_count = count($params['camera']);

    $sql = "INSERT INTO
              `heatmap_camera_groups`
              (`camera_group_name`,`camera_group_desc`,`camera_group_count`,`branch_id`)
            VALUES
              ('".$params['group_name']."','".$params['group_desc']."','".$camera_count."','".$params['group_branch']."')";

      $query = $this->db_heatmap->query($sql);

      if(!empty($camera_count)){
        if($query){
          $insert_id = $this->db_heatmap->insertID();

          foreach($params['camera'] as $key => $row){
            $pos = strpos($row,"-");
            $camera_id = substr($row,0,$pos);
            $camera_name = substr($row,$pos+1);

            $sql = "INSERT INTO
                    `heatmap_camera_relationships`
                    (`camera_id`,`camera_group_id`,`camera_name`,`camera_group_name`)
                  VALUES
                  ('".$camera_id."','".$insert_id."','".$camera_name."','".$params['group_name']."')";

            $query = $this->db_heatmap->query($sql);
          }
        }
      }

      return $query;
  }

  public function edit($params = array()){

  $camera_count = count($params['camera']);

    $sql = "UPDATE
              `heatmap_camera_groups`
            SET
              `camera_group_name` = '".$params['group_name']."',
              `camera_group_desc` = '".$params['group_desc']."',
              `camera_group_count` = '".$camera_count."'
            WHERE
              `camera_group_id` = '".$params['group_id']."'";

      $query = $this->db_heatmap->query($sql);

      $delSql = "DELETE
                  FROM
                    `heatmap_camera_relationships`
                  WHERE `camera_group_id` = '".$params['group_id']."'";
      $delQuery = $this->db_heatmap->query($delSql);

      if($delQuery){
        if(!empty($camera_count)){
          if($query){
            foreach($params['camera'] as $key => $row){
              $pos = strpos($row,"-");
              $camera_id = substr($row,0,$pos);
              $camera_name = substr($row,$pos+1);

              $sql = "INSERT INTO
                      `heatmap_camera_relationships`
                      (`camera_id`,`camera_group_id`,`camera_name`,`camera_group_name`)
                    VALUES
                    ('".$camera_id."','".$params['group_id']."','".$camera_name."','".$params['group_name']."')";

              $query = $this->db_heatmap->query($sql);
            }
          }
        }
      }

      return $query;
  }

  public function deleteGroup($group_id){
    $sql = "DELETE
            FROM
              `heatmap_camera_groups`
            WHERE `camera_group_id` = '".$group_id."'";

    $query = $this->db_heatmap->query($sql);
    return $query;
  }

  public function deleteRelation($group_id){
    $sql = "DELETE
                FROM
                  `heatmap_camera_relationships`
                WHERE `camera_group_id` = '".$group_id."'";

    $query = $this->db_heatmap->query($sql);
    return $query;
  }

};
