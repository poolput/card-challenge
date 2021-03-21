<?php
namespace App\Models;

use CodeIgniter\Model;

class ConfigurationModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getCompanies()
    {
        $sql = "SELECT
                    company_id,
                    company_name
                FROM
                    company
                ";

        $query = $this->db->query($sql);
        foreach ($query->getResult() as $key => $row) {
            $data[$key]['company_id'] = $row->company_id;
            $data[$key]['company_name'] = $row->company_name;
        }

        return $data;
    }

    public function getCompany()
    {
        $sql = "SELECT
                    company_id,
                    company_name
                FROM
                    company
                WHERE 
                    company_id = ".$this->session->company_id;

        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row) {
            $data['company_id'] = $row->company_id;
            $data['company_name'] = $row->company_name;
        }

        return $data;
    }

    public function getDateFormats()
    {
        $format = [
            "Y-m-d",
            "Y/m/d",
            "d-m-Y",
            "d/m/Y",
            "d M, Y",
            "d F Y"
        ];
        $convertFormat = [
            date("Y-m-d"),
            date("Y/m/d"),
            date("d-m-Y"),
            date("d/m/Y"),
            date("d M, Y"),
            date("d F Y")
        ];

        foreach ($format as $key => $row) {
            $data[$key]['format'] = $row;
            $data[$key]['convertFormat'] = $convertFormat[$key];
        }

        return $data;
    }

    public function getSession()
    {
        $data['sess_company_id'] = $this->session->company_id;
        $data['sess_role_id'] = $this->session->user_role_id;

        return $data;
    }

    public function getSettingChart()
    {
        $sql = "SELECT
                    param
                FROM
                    setting_charts
                WHERE 
                    company_id = ".$this->session->company_id;
        $query = $this->db->query($sql);

        $res = array();

        foreach ($query->getResult() as $key => $row) {
            $split1 = explode(";", $row->param);
            $split2 = array();
            
            foreach ($split1 as $key => $row) {
                if (strpos($row, ':"')) {
                    $split2[$key] = explode(':', $row);
                }
            }
            
            $cnt_arr = count($split2);
            $cnt_split2 = count($split2);

            for ($i = 0; $i < $cnt_split2; $i ++) {
                $cnt_sub = count($split2[$i]);
                $sub = $cnt_sub - 1;
                
                if ($i % 2 != 0) {
                    if ($i == 5 && count($split2[5]) > 3) {
                        $res[$i] = str_replace('"', '', $split2[$i][$sub - 1] . ':' . $split2[$i][$sub]);
                    } else {
                        $res[$i] = str_replace('"', '', $split2[$i][$sub]);
                    }
                }
            }
        }

        return $res;
    }

    public function getTimeFormats()
    {
        $time = [
            "H:i",
            "H"
        ];
        $convertTime = [
            date("H:i"),
            date("H")
        ];

        foreach ($time as $key => $row) {
            $data[$key]['time'] = $row;
            $data[$key]['convertTime'] = $convertTime[$key];
        }

        return $data;
    }

    public function getWeekStart()
    {
        $data = array(
                    "1" => "Monday",
                    "7" => "Sunday"
                );


        return $data;
    }

    public function changeCompany($params = array())
    {
        if (! empty($params)) {
            $chk = 0;

            $sql = "SELECT
                        company_id,
                        company_name
                    FROM
                        company
                    WHERE 
                        company_id = ".$params['company_id'];

            $query = $this->db->query($sql);

            $row = $query->getRow();
            if (isset($row)) {
                $this->session->set('company_id', $row->company_id);
                $this->session->set('company_name', $row->company_name);

                $chk ++;
            }

            return $this->session->company_id;
        }
    }

    public function add($params = array())
    {
        $type = 'date';
        $lib_type = 'jsDate';
        $attr_len = count($params);
        $type_len = strlen($type);
        $lib_len = strlen($lib_type);
        $date_len = strlen($params['date_format']);
        $time_len = strlen($params['time_format']);
        $week_len = strlen($params['week_start']);

        if ($params['date_format'] == 'Y-m-d') {
            $format = "YY-mm-dd";
            $format_len = strlen($format);
        } else if ($params['date_format'] == 'Y/m/d') {
            $format = "yy/mm/dd";
            $format_len = strlen($format);
        } else if ($params['date_format'] == 'd-m-Y') {
            $format = "dd-mm-yy";
            $format_len = strlen($format);
        } else if ($params['date_format'] == 'd/m/Y') {
            $format = "dd/mm/yy";
            $format_len = strlen($format);
        } else if ($params['date_format'] == 'd M, Y') {
            $format = "d M, yy";
            $format_len = strlen($format);
        } else if ($params['date_format'] == 'd F Y') {
            $format = "d MM yy";
            $format_len = strlen($format);
        }

        $json = 'a:' . ($attr_len + 1) . ':{s:' . $type_len . ':"' . $type . '";s:' . $date_len . ':"' . $params['date_format'] . '";s:' . $lib_len . ':"' . $lib_type . '";s:' . $format_len . ':"' . $format . '";s:4:"time";s:' . $time_len . ':"' . $params['time_format'] . '";s:9:"weekStart";s:' . $week_len . ':"' . $params['week_start'] . '";}';

        $chkSql = "SELECT
                        *
                    FROM
                        setting_charts
                    WHERE 
                        company_id = ".$this->session->company_id;

        $query = $this->db->query($chkSql);

        $cnt = count($query->getResultArray());

        if ($cnt > 0) {
            $sql = "UPDATE
                        `setting_charts`
                    SET
                        param = '" . $json . "'
                    WHERE
                        company_id = ".$this->session->company_id."
                        AND module = 'chart'
                    ";
        } else {
            $sql = "INSERT INTO
                            setting_charts (module,param,created_date,company_id)
                        VALUES
                            ( 'chart', '" . $json . "', NOW(), ".$this->session->company_id." )";
        }

        $query = $this->db->query($sql);

        //set new session for date, time format
        // $this->data['week_format'] = $params['week_start'];

        return $query;
    }

    public function getFormatDate($company_id = 0)
    {
        $sql = "SELECT
                        *
                    FROM
                        setting_charts
                    WHERE 
                        company_id = ".$company_id;

        $query = $this->db->query($sql);
        $result = $query->getRowArray();
        if (! empty($result)) {
            return unserialize($result['param']);
        }

        return false;
    }
}
?>
