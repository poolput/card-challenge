<?php
namespace App\Models;

use CodeIgniter\Model;

class InformationModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getCompanyList(){
		$sql = "SELECT
	             company_id,
	             company_name,
	             company_owner,
	             auth_user.user_name,
	             company_created_date
            FROM
	             company
            LEFT JOIN
              auth_user
            ON
              auth_user.`user_id` = company.`company_created_by`

		";
		$query = $this->db->query($sql);
		$data = array();

		foreach ($query->getResult() as $key => $row) {
      $data[$key]['company_id'] = $row->company_id;
      $data[$key]['company_name'] = $row->company_name;
      $data[$key]['company_owner'] = $row->company_owner;
      $data[$key]['user_name'] = $row->user_name;
      $data[$key]['company_created_date'] = $row->company_created_date;
    }
    return $data;
	}

  public function getCompanyData($company_id){
    $sql = "SELECT
                  company_name,
                  company_owner,
                  company_url,
                  company_email,
                  company_phone1,
                  company_phone2,
                  company_fax,
                  company_address,
                  company_city,
                  company_zip,
                  company_country,
                  company_logo,
                  company_logo_phone,
                  company_active,
                  province_id
            FROM
                company
            WHERE
                company_id = ".$company_id;
    $query = $this->db->query($sql);
    $data = array();

    foreach ($query->getResult() as $key => $row) {
      $data['company_id'] = $company_id;
      $data['company_name'] = $row->company_name;
      $data['company_owner'] = $row->company_owner;
      $data['company_website'] = $row->company_url;
      $data['company_email'] = $row->company_email;
      $data['company_phone1'] = $row->company_phone1;
      $data['company_phone2'] = $row->company_phone2;
      $data['company_fax'] = $row->company_fax;
      $data['company_address'] = $row->company_address;
      $data['company_city'] = $row->company_city;
      $data['company_zip'] = $row->company_zip;
      $data['company_country'] = $row->company_country;
      $data['company_logo'] = $row->company_logo;
      $data['company_logo_phone'] = $row->company_logo_phone;
      $data['company_active'] = $row->company_active;
      $data['province_id'] = $row->province_id;
    }
    return $data;
  }
  public function getCountries(){
    $sql = "SELECT
              country_code,
              country_name
            FROM
              country
            WHERE
              country_code != 'THA'
          ";
    $query = $this->db->query($sql);
    $data = array();

    foreach ($query->getResult() as $key => $row) {
      $data[$key]['country_code'] = $row->country_code;
      $data[$key]['country_name'] = $row->country_name;
    }
    return $data;
  }

  public function getProvinces($country_code = 'THA'){
      $sql = "SELECT
                province_id,
                province_name_th,
                province_name_eng
              FROM
                provinces
              WHERE
                country_code LIKE '".$country_code."'
              ORDER BY province_name_th ASC";
      $query = $this->db->query($sql);
      $data = array();

      foreach ($query->getResult() as $key => $row) {
        $data[$key]['province_id'] = $row->province_id;
        $data[$key]['province_name_th'] = $row->province_name_th;
        $data[$key]['province_name_eng'] = $row->province_name_eng;
      }
      return $data;
  }

    public function add($params = array())
    {
      $logo_sql = '';
      $mobile_logo_sql = '';

      if(array_key_exists('company_logo',$params)){
        $logo_ext = pathinfo($params['company_logo'],PATHINFO_EXTENSION);
        $logo_sql = " `company_logo` = '".$params['company_logo']."',
         `company_logo_type` = '".$logo_ext."',";
      }
      if(array_key_exists('company_mobile_logo',$params)){
        $mobile_logo_ext = pathinfo($params['company_mobile_logo'],PATHINFO_EXTENSION);
        $mobile_logo_sql = " `company_logo_phone` = '".$params['company_mobile_logo']."',
         `company_logo_phone_type` = '".$mobile_logo_ext."',";
      }

      $sql = "INSERT INTO company
        SET
	       `company_name` = '".$params['company_name']."',
         `company_owner` = '".$params['company_owner']."',
         `company_url` = '".$params['company_website']."',
         `company_email` = '".$params['company_email']."',
         `company_phone1` = '".$params['company_phone']."',
         `company_phone2` = '".$params['company_phone2']."',
         `company_fax` = '".$params['company_fax']."',
         `company_address` = '".$params['company_address']."',
         `company_city` = '".$params['company_state']."',
         `company_zip` = '".$params['company_zipcode']."',".
         $logo_sql.
         $mobile_logo_sql."
         `company_country` = '".$params['company_country']."',
         `company_active` = '".$params['company_status']."',
         `company_created_by` = ".$this->session->get('user_id').",
         `company_created_date` = NOW(),
         `province_id` = ".$params['company_province'];

         $query = $this->db->query($sql);

         return $query;
    }

    public function edit($params = array()){

      $logo_sql = '';
      $mobile_logo_sql = '';

      if(array_key_exists('company_logo',$params)){
        $logo_ext = pathinfo($params['company_logo'],PATHINFO_EXTENSION);
        $logo_sql = " `company_logo` = '".$params['company_logo']."',
         `company_logo_type` = '".$logo_ext."',";
      }
      if(array_key_exists('company_mobile_logo',$params)){
        $mobile_logo_ext = pathinfo($params['company_mobile_logo'],PATHINFO_EXTENSION);
        $mobile_logo_sql = " `company_logo_phone` = '".$params['company_mobile_logo']."',
         `company_logo_phone_type` = '".$mobile_logo_ext."',";
      }

      $sql = "UPDATE
                company
              SET
	               `company_name` = '".$params['company_name']."',
                 `company_owner` = '".$params['company_owner']."',
                 `company_url` = '".$params['company_website']."',
                 `company_email` = '".$params['company_email']."',
                 `company_phone1` = '".$params['company_phone']."',
                 `company_phone2` = '".$params['company_phone2']."',
                 `company_fax` = '".$params['company_fax']."',
                 `company_address` = '".$params['company_address']."',
                 `company_city` = '".$params['company_state']."',
                 `company_zip` = '".$params['company_zipcode']."',
                 `company_country` = '".$params['company_country']."',".
                 $logo_sql.
                 $mobile_logo_sql."
                 `company_active` = '".$params['company_status']."',
                 `company_created_by` = ".$this->session->get('user_id').",
                 `company_created_date` = NOW(),
                 `province_id` = ".$params['company_province']."
            WHERE
	               company_id = ".$params['company_id'];

      $query = $this->db->query($sql);
      return $query;
    }

    public function remove($user_id = 0)
    {
        $sql = "DELETE FROM
                  company
                WHERE
                  company_id = " . $user_id;
        $query = $this->db->query($sql);

        return $query;
    }

    public function uploadImage($file,$type){

      $new_name = $file->getRandomName();

      if($type == 'pc'){
        $path = '/uploads/company/information/webbrowser';
      }else if($type == 'mb'){
        $path = '/uploads/company/information/mobile';
      }

      $file = $file->move(WRITEPATH.$path,$new_name);

      if($file){
          return $new_name;
      }else{
         return false;
      }
    }
}
?>
