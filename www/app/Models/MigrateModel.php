<?php
namespace App\Models;

use CodeIgniter\Model;

class MigrateModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getCountStaff()
    {
        $sql = "SELECT * FROM count_staffs ";
        $query = $this->db->query($sql);
        $data = array();

        foreach ($query->getResult() as $key => $row) {
            $data[$key]['date'] = $row->date;
            $data[$key]['branch_id'] = $row->branch_id;
            $data[$key]['h0_in'] = $row->h0_in;
            $data[$key]['h0_out'] = $row->h0_out;
            $data[$key]['h1_in'] = $row->h1_in;
            $data[$key]['h1_out'] = $row->h1_out;
            $data[$key]['h2_in'] = $row->h2_in;
            $data[$key]['h2_out'] = $row->h2_out;
            $data[$key]['h3_in'] = $row->h3_in;
            $data[$key]['h3_out'] = $row->h3_out;
            $data[$key]['h4_in'] = $row->h4_in;
            $data[$key]['h4_out'] = $row->h4_out;
            $data[$key]['h5_in'] = $row->h5_in;
            $data[$key]['h5_out'] = $row->h5_out;
            $data[$key]['h6_in'] = $row->h6_in;
            $data[$key]['h6_out'] = $row->h6_out;
            $data[$key]['h7_in'] = $row->h7_in;
            $data[$key]['h7_out'] = $row->h7_out;
            $data[$key]['h8_in'] = $row->h8_in;
            $data[$key]['h8_out'] = $row->h8_out;
            $data[$key]['h9_in'] = $row->h9_in;
            $data[$key]['h9_out'] = $row->h9_out;
            $data[$key]['h10_in'] = $row->h10_in;
            $data[$key]['h10_out'] = $row->h10_out;
            $data[$key]['h11_in'] = $row->h11_in;
            $data[$key]['h11_out'] = $row->h11_out;
            $data[$key]['h12_in'] = $row->h12_in;
            $data[$key]['h12_out'] = $row->h12_out;
            $data[$key]['h13_in'] = $row->h13_in;
            $data[$key]['h13_out'] = $row->h13_out;
            $data[$key]['h14_in'] = $row->h14_in;
            $data[$key]['h14_out'] = $row->h14_out;
            $data[$key]['h15_in'] = $row->h15_in;
            $data[$key]['h15_out'] = $row->h15_out;
            $data[$key]['h16_in'] = $row->h16_in;
            $data[$key]['h16_out'] = $row->h16_out;
            $data[$key]['h17_in'] = $row->h17_in;
            $data[$key]['h17_out'] = $row->h17_out;
            $data[$key]['h18_in'] = $row->h18_in;
            $data[$key]['h18_out'] = $row->h18_out;
            $data[$key]['h19_in'] = $row->h19_in;
            $data[$key]['h19_out'] = $row->h19_out;
            $data[$key]['h20_in'] = $row->h20_in;
            $data[$key]['h20_out'] = $row->h20_out;
            $data[$key]['h21_in'] = $row->h21_in;
            $data[$key]['h21_out'] = $row->h21_out;
            $data[$key]['h22_in'] = $row->h22_in;
            $data[$key]['h22_out'] = $row->h22_out;
            $data[$key]['h23_in'] = $row->h23_in;
            $data[$key]['h23_out'] = $row->h23_out;
        }
        return $data;
    }

    public function addStaff($data)
    {
        $this->db->transBegin();
 
        foreach ($data['staff'] as $value) {

            for ($i = 0; $i < 24; $i ++) {
                if (! empty($value['h' . $i . '_in']) ) {
                    $sql = "  INSERT INTO
                                    staff
                                SET
                                    branch_id = '" . $value["branch_id"] . "',
                                    staff_time = '" . $value["date"] . " " . sprintf("%'.02d", $i) . ":00:00',
                                    staff_type = 1,
                                    staff_total = '" . $value['h' . $i . '_in'] . "'
                    ";
                    $this->db->query($sql);
                }
                if (! empty($value['h' . $i . '_out']) ) {
                    $sql = "  INSERT INTO
                                    staff
                                SET
                                    branch_id = '" . $value["branch_id"] . "',
                                    staff_time = '" . $value["date"] . " " . sprintf("%'.02d", $i) . ":00:00',
                                    staff_type = 2,
                                    staff_total = '" . $value['h' . $i . '_out'] . "'
                    ";
                    $this->db->query($sql);
                }
            }
        }

        if ($this->db->transStatus() === FALSE) {
            $this->db->transRollback();
            return false;
        } else {
            $this->db->transCommit();
            return true;
        }
    }

    public function getBranchGroupsFromBranch()
    {
        $sql = "SELECT
              branch_id,
              groups
            FROM
              branch";
        $query = $this->db->query($sql);

        $data = array();
        $i = 0;

        foreach ($query->getResult() as $key => $group) {
            if (! empty($group->groups)) {
                $data[$i]['branch_id'] = $group->branch_id;
                $data[$i]['groups'] = $group->groups;
                $i ++;
            }
        }

        return $data;
    }

    public function processor($groups)
    {
        $this->db->transBegin();
        $cntGroups = count($groups);
        for ($i = 0; $i < $cntGroups; $i ++) {
            if (! empty($groups[$i]['groups'])) {
                $branch_id = $groups[$i]['branch_id'];
                $groupData = explode("|", $groups[$i]['groups']);
                foreach ($groupData as $key => $data) {
                    if (strpos($data, ">") > 0) {
                        $group = explode(">", $data);
                        $cnt_group = count($group);
                        $uniq_arr = array();
                        $group_arr = 0;

                        $group_arr = $this->addBranchGroup($group[0]);

                        for ($idx = 0; $idx < $cnt_group; $idx ++) {
                            $uniq_arr[$idx] = uniqid();

                            if ($idx >= 1) {
                                $idx1 = $idx - 1;
                                $res = $this->addBranchLevel($group[$idx], $group_arr, $uniq_arr[$idx], $uniq_arr[$idx1]);
                            } else {
                                $res = $this->addBranchLevel($group[$idx], $group_arr, $uniq_arr[$idx]);
                            }

                            if (! empty($res) && ($idx == ($cnt_group - 1))) {
                                $this->addBranchMapping($uniq_arr[$idx], $branch_id);
                            }
                        }
                    } else {}
                }
            }
        }
        if ($this->db->transStatus() === FALSE) {
            $this->db->transRollback();
            return false;
        } else {
            $this->db->transCommit();
            return true;
        }
    }

    public function addBranchGroup($group_name)
    {
        $user_id = $this->session->get('user_id');

        $sql = "INSERT INTO branch_group (
              group_name,
              create_date,
              create_by
            )
            VALUES(
                '" . $group_name . "',
                now(),
                '" . $user_id . "'
            )";
        $query = $this->db->query($sql);

        $group_id = $this->db->insertID();

        // echo $group_id;
        // echo $sql;
        // echo "\n";
        return $group_id;
    }

    public function addBranchLevel($group_name, $group_id, $uniq_id, $parent_id = null)
    {
        $user_id = $this->session->get('user_id');

        $sql = "INSERT INTO branch_group_level (
              `group_level_name`,
              `parent_id`,
              `group_id`,
              `reference_id`,
              `create_date`,
              `create_by`
            ) VALUE (
              '" . $group_name . "',
              '" . $parent_id . "',
              '" . $group_id . "',
              '" . $uniq_id . "',
              NOW(),
              '" . $user_id . "'
            )";

        $query = $this->db->query($sql);
        $group_id = $this->db->insertID();

        return $group_id;
    }

    public function addBranchMapping($group_id = null, $branch_id = null)
    {
        $user_id = $this->session->get('user_id');

        $sql = "INSERT INTO `branch_group_mapping` (
              `branch_id`,
              `reference_id`,
              `create_date`,
              `create_by`
            ) VALUE (
              '" . $branch_id . "',
              '" . $group_id . "',
              NOW(),
              '" . $user_id . "'
            )";
        $query = $this->db->query($sql);

        return $query;
    }

    public function getConversionRate()
    {
        $sql = "SELECT * FROM conversion_rate";
        $query = $this->db->query($sql);
        $data = array();
        
        foreach ($query->getResult() as $key => $row) {
            $data[$key]['date'] = $row->date;
            $data[$key]['branch_id'] = $row->branch_id;           
            $data[$key]["sales_amount_h0"] = $row->sales_amount_h0;
            $data[$key]["receipt_count_h0"] = $row->receipt_count_h0;
            $data[$key]["sales_amount_h1"] = $row->sales_amount_h1;
            $data[$key]["receipt_count_h1"] = $row->receipt_count_h1;
            $data[$key]["sales_amount_h2"] = $row->sales_amount_h2;
            $data[$key]["receipt_count_h2"] = $row->receipt_count_h2;
            $data[$key]["sales_amount_h3"] = $row->sales_amount_h3;
            $data[$key]["receipt_count_h3"] = $row->receipt_count_h3;
            $data[$key]["sales_amount_h4"] = $row->sales_amount_h4;
            $data[$key]["receipt_count_h4"] = $row->receipt_count_h4;
            $data[$key]["sales_amount_h5"] = $row->sales_amount_h5;
            $data[$key]["receipt_count_h5"] = $row->receipt_count_h5;
            $data[$key]["sales_amount_h6"] = $row->sales_amount_h6;
            $data[$key]["receipt_count_h6"] = $row->receipt_count_h6;
            $data[$key]["sales_amount_h7"] = $row->sales_amount_h7;
            $data[$key]["receipt_count_h7"] = $row->receipt_count_h7;
            $data[$key]["sales_amount_h8"] = $row->sales_amount_h8;
            $data[$key]["receipt_count_h8"] = $row->receipt_count_h8;
            $data[$key]["sales_amount_h9"] = $row->sales_amount_h9;
            $data[$key]["receipt_count_h9"] = $row->receipt_count_h9;
            $data[$key]["sales_amount_h10"] = $row->sales_amount_h10;
            $data[$key]["receipt_count_h10"] = $row->receipt_count_h10;
            $data[$key]["sales_amount_h11"] = $row->sales_amount_h11;
            $data[$key]["receipt_count_h11"] = $row->receipt_count_h11;
            $data[$key]["sales_amount_h12"] = $row->sales_amount_h12;
            $data[$key]["receipt_count_h12"] = $row->receipt_count_h12;
            $data[$key]["sales_amount_h13"] = $row->sales_amount_h13;
            $data[$key]["receipt_count_h13"] = $row->receipt_count_h13;
            $data[$key]["sales_amount_h14"] = $row->sales_amount_h14;
            $data[$key]["receipt_count_h14"] = $row->receipt_count_h14;
            $data[$key]["sales_amount_h15"] = $row->sales_amount_h15;
            $data[$key]["receipt_count_h15"] = $row->receipt_count_h15;
            $data[$key]["sales_amount_h16"] = $row->sales_amount_h16;
            $data[$key]["receipt_count_h16"] = $row->receipt_count_h16;
            $data[$key]["sales_amount_h17"] = $row->sales_amount_h17;
            $data[$key]["receipt_count_h17"] = $row->receipt_count_h17;
            $data[$key]["sales_amount_h18"] = $row->sales_amount_h18;
            $data[$key]["receipt_count_h18"] = $row->receipt_count_h18;
            $data[$key]["sales_amount_h19"] = $row->sales_amount_h19;
            $data[$key]["receipt_count_h19"] = $row->receipt_count_h19;
            $data[$key]["sales_amount_h20"] = $row->sales_amount_h20;
            $data[$key]["receipt_count_h20"] = $row->receipt_count_h20;
            $data[$key]["sales_amount_h21"] = $row->sales_amount_h21;
            $data[$key]["receipt_count_h21"] = $row->receipt_count_h21;
            $data[$key]["sales_amount_h22"] = $row->sales_amount_h22;
            $data[$key]["receipt_count_h22"] = $row->receipt_count_h22;
            $data[$key]["sales_amount_h23"] = $row->sales_amount_h23;
            $data[$key]["receipt_count_h23"] = $row->receipt_count_h23;
        }

        return $data; 
    }

    public function addConversionRate($data)
    {
        $this->db->transBegin();

        foreach ($data['conversion_rates'] as $value) {
            for ($i = 0; $i < 24; $i ++) {
                if (! empty($value['sales_amount_h' . $i]) || ! empty($value['receipt_count_h' . $i])) {
                    $sql = "INSERT INTO
                                    conversion_rate_new
                                SET
                                    cnttime = '".$value['date']." ".sprintf('%02d', $i).":00:00',
                                    branch_id = '" . $value["branch_id"] . "',
                                    sale_amount = '" . $value['sales_amount_h' . $i] . "',
                                    receipt = '" . $value['receipt_count_h' . $i] . "',
                                    create_date = NOW(),
                                    create_user = ".$data['user_id']."
                    ";
                    $this->db->query($sql);
                }
            }
        }

        if ($this->db->transStatus() === FALSE) {
            $this->db->transRollback();
            return false;
        } else {
            $this->db->transCommit();
            echo "Migrate complete.";
            return true;
        }
    }
}

?>
