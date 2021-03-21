<?php
namespace App\Models;

use CodeIgniter\Model;

class BranchModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getAllowBranch($role_id)
    {
        $sql = "  SELECT
                        branch.branch_id,branch.branch_name
                    FROM
                        auth_role_branch JOIN branch
                    ON
                         auth_role_branch.branch_id = branch.branch_id
                    WHERE
                        auth_role_branch.role_id = '" . $role_id . "'
                    ORDER BY
                        branch.branch_name ";

        $query = $this->db->query($sql);

        $data = array();
        foreach ($query->getResult() as $key => $row) {
            $data[$key]['branch_id'] = $row->branch_id;
            $data[$key]['branch_name'] = $row->branch_name;
        }

        return $data;
    }

    public function getBranchByCameraGroup($camera_group = 0)
    {
        $sql = "  SELECT
                        branch.branch_id
                    FROM
                        branch join camera_group on branch.branch_id = camera_group.branch_id
                    WHERE
                        camera_group.camera_group_id in (" . $camera_group . ")
                    group by branch.branch_id
        ";
        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $row) {
            $data[] = $row->branch_id;
        }

        return $data;
    }

    public function getBranchList($params = array())
    {
        $and = '';
        if (! empty($params['company_id'])) {
            $and = " and company_id = " . $params['company_id'] . " ";
        } else if (! empty($this->session->get('company_id'))) {
            $and = " and company_id = " . $this->session->get('company_id');
        }
        $sql = "SELECT 
                   *
                FROM 
                   branch
                   LEFT JOIN provinces on provinces.province_id = branch.province_id
                where   
                   branch_active = 1
                   $and
        ";

        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row) {
            $data[$key]['branch_id'] = $row->branch_id;
            $data[$key]['branch_name'] = $row->branch_name;
            $data[$key]['branch_phone'] = $row->branch_phone;
            $data[$key]['province_name_eng'] = $row->province_name_eng;
        }
        return $data;
    }

    public function getBranchData($branch_id)
    {
        $sql = "SELECT 
                   *
                FROM 
                   branch
                where   
                   branch_id = " . $branch_id . "
        ";

        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row) {
            $data['branch_id'] = $row->branch_id;
            $data['branch_name'] = $row->branch_name;
            $data['branch_phone'] = $row->branch_phone;
            $data['company_id'] = $row->company_id;
            $data['province_id'] = $row->province_id;
            $data['country_code'] = $row->country_code;
            $data['module_heatmap'] = $row->module_heatmap;
            $data['branch_remark'] = $row->branch_remark;
        }
        return $data;
    }

    public function getBranchByRole()
    {
        $role_id = $this->session->get('user_role_id');
        $sql = "SELECT
                    b.branch_id,
                    b.branch_name
                FROM
                    auth_role_branch r
                    LEFT JOIN branch b ON r.branch_id = b.branch_id
                WHERE
                    r.role_id = '" . $role_id . "'
                    AND branch_active = 1
        ";

        $query = $this->db->query($sql);
        if ($query) {
            $result = $query->getResult();
            return $result;
        }
    }

    public function getBranchLocation()
    {
        $role_id = $this->session->get('user_role_id');
        $company_id = $this->session->get('company_id');
        $this->session->is_root;
        if (! empty($this->session->is_root)) {
            $result = self::getBranchLocationRoot();

            return $result;
        }
        $sql = "
                select 
                    p.province_id,
                    p.province_name_eng
                from 
                    auth_role_branch r 
                    left join branch b on r.branch_id = b.branch_id 
                    left join provinces p on b.province_id = p.province_id
                where 
                    r.role_id = '" . $role_id . "'
                    and b.company_id = '" . $company_id . "' 
                group by 
                    p.province_id
        ";

        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $province) {
            $data[$province->province_id]['id'] = $province->province_id;
            $data[$province->province_id]['name'] = $province->province_name_eng;
            $data[$province->province_id]['branch'] = array();
            $sql = "
                select
                    b.branch_id,
                    b.branch_name
                from
                    auth_role_branch r
                    left join branch b on r.branch_id = b.branch_id
                    left join provinces p on b.province_id = p.province_id
                where
                    r.role_id = '" . $role_id . "'
                    and b.province_id = '" . $province->province_id . "'
                    and b.company_id = '" . $company_id . "' 
                group by
                    b.branch_id
            ";

            $query = $this->db->query($sql);
            foreach ($query->getResult() as $branch) {
                $data[$province->province_id]['branch'][$branch->branch_id]['id'] = $branch->branch_id;
                $data[$province->province_id]['branch'][$branch->branch_id]['name'] = $branch->branch_name;
                $data[$province->province_id]['branch'][$branch->branch_id]['group'] = array();
                $sql = "
                            select
                                g.camera_group_id,
                                g.camera_group_name
                            from
                                auth_role_branch r
                                left join branch b on r.branch_id = b.branch_id
                                left join camera_group g on b.branch_id = g.branch_id
                            where
                                b.branch_id = '" . $branch->branch_id . "' 
                                and b.company_id = '" . $company_id . "' 
                            group by
                                g.camera_group_id
                        ";

                $query = $this->db->query($sql);
                foreach ($query->getResult() as $group) {
                    $data[$province->province_id]['branch'][$branch->branch_id]['group'][$group->camera_group_id]['id'] = $group->camera_group_id;
                    $data[$province->province_id]['branch'][$branch->branch_id]['group'][$group->camera_group_id]['name'] = $group->camera_group_name;
                }
            }
        }

        return $data;
    }

    public function getBranchLocationRoot()
    {
        $company_id = $this->session->get('company_id');
        $sql = "
                select
                    p.province_id,
                    p.province_name_eng
                from
                    branch b
                    left join provinces p on b.province_id = p.province_id
                where
                    b.company_id = '" . $company_id . "'
                group by
                    p.province_id
        ";
        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $province) {
            $data[$province->province_id]['id'] = $province->province_id;
            $data[$province->province_id]['name'] = $province->province_name_eng;
            $data[$province->province_id]['branch'] = array();
            $sql = "
                select
                    b.branch_id,
                    b.branch_name
                from
                    branch b 
                    left join provinces p on b.province_id = p.province_id
                where
                    b.province_id = '" . $province->province_id . "'
                    and b.company_id = '" . $company_id . "'
                group by
                    b.branch_id
            ";

            $query = $this->db->query($sql);
            foreach ($query->getResult() as $branch) {
                $data[$province->province_id]['branch'][$branch->branch_id]['id'] = $branch->branch_id;
                $data[$province->province_id]['branch'][$branch->branch_id]['name'] = $branch->branch_name;
                $data[$province->province_id]['branch'][$branch->branch_id]['group'] = array();
                $sql = "
                            select
                                g.camera_group_id,
                                g.camera_group_name
                            from
                                branch b 
                                left join camera_group g on b.branch_id = g.branch_id
                            where
                                b.branch_id = '" . $branch->branch_id . "'
                                and b.company_id = '" . $company_id . "'
                            group by
                                g.camera_group_id
                        ";

                $query = $this->db->query($sql);
                foreach ($query->getResult() as $group) {
                    $data[$province->province_id]['branch'][$branch->branch_id]['group'][$group->camera_group_id]['id'] = $group->camera_group_id;
                    $data[$province->province_id]['branch'][$branch->branch_id]['group'][$group->camera_group_id]['name'] = $group->camera_group_name;
                }
            }
        }

        return $data;
    }

    public function getLocation($params)
    {
        if (empty($params['option_camera_group'])) {
            return false;
        }
        $camera_groups = implode(',', $params['option_camera_group']);
        $data = array();
        $sql = "
             select
				p.province_name_eng,b.branch_name,g.camera_group_name
            from
                camera_group g 
                left join branch b on g.branch_id = b.branch_id
                left join provinces p on p.province_id = b.province_id
            where
                g.camera_group_id in (" . $camera_groups . ")			
			order by 
				p.province_id,b.branch_name,g.camera_group_name
        ";
        $query = $this->db->query($sql);
        foreach ($query->getResult() as $row) {
            $data[$row->province_name_eng][$row->branch_name][] = array(
                "province_name_eng" => $row->province_name_eng,
                "branch_name" => $row->branch_name,
                "camera_group_name" => $row->camera_group_name
            );
        }

        return $data;
    }

    public function getProvinces()
    {
        $sql = "
                select 
                    *
                from 
                    provinces
        ";

        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row) {
            $data[$key]['province_id'] = $row->province_id;
            $data[$key]['province_name_eng'] = $row->province_name_eng;
        }
        return $data;
    }

    public function getCountries()
    {
        // default ไว้ 3 ประเทศที่เปิดใช้งาน
        $sql = "
                    SELECT
                        * 
                    FROM
                        country 
                    WHERE
                        country_code IN (
                            'THA',
                        'SGP',
                        'MYS') ";

        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row) {
            $data[$key]['country_code'] = $row->country_code;
            $data[$key]['country_name'] = $row->country_name;
        }
        return $data;
    }

    public function add($params = array())
    {
        if (empty($result)) {
            $sql = "insert into
        					branch
        				set
                            branch_code = '" . $params['branch_code'] . "',
                            branch_name = '" . $params['branch_name'] . "',
                            branch_phone = '" . $params['branch_phone'] . "',
                            branch_remark = '" . $params['branch_remark'] . "',
                            branch_active = '1',
                            company_id = '" . $params['company_id'] . "',
                            province_id = '" . $params['province_id'] . "',
                            country_code = '" . $params['country_code'] . "',
                            module_heatmap = '" . $params['module_heatmap'] . "'
    	    ";
            $this->db->query($sql);
            return true;
        } else {
            return false;
        }
    }

    public function edit($params = array())
    {
        if (empty($result)) {
            $sql = "UPDATE
                        branch
                    SET
                        `branch_code` = '" . $params['branch_code'] . "',
                        `branch_name` = '" . $params['branch_name'] . "',
                        `branch_phone` = '" . $params['branch_phone'] . "',
                        `branch_remark` = '" . $params['branch_remark'] . "',
                        `branch_active` = '1',
                        `company_id` = '" . $params['company_id'] . "',
                        `province_id` = '" . $params['province_id'] . "',
                        `country_code` = '" . $params['country_code'] . "',
                        `module_heatmap` = '" . $params['module_heatmap'] . "'
                    WHERE
                        branch_id = " . $params['branch_id'];
            $result = $this->db->query($sql);
            return true;
        } else {
            return false;
        }
    }

    public function remove($branch_id)
    {
        if (! empty($branch_id)) {
            $sql = "DELETE 
            FROM
                branch 
            WHERE
                branch_id = " . $branch_id;
            $this->db->query($sql);
            return true;
        } else {
            return false;
        }
    }

    public function getBranchOpenTime($branch_id)
    {
        if (! empty($branch_id)) {
            $sql = "SELECT 
                        id,
                        branch_id,
                        open_time,
                        close_time
                    FROM
                        branch_open_time
                    WHERE
                        is_active = 1
                    ";
            $query = $this->db->query($sql);
            if ($query) {
                $result = $query->getResult();

                return $result();
            }
        }
    }
}
?>