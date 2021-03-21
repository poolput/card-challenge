<?php
namespace App\Models;

use CodeIgniter\Model;

class AuthenticationModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function testUpdateRole()
    {
        for ($i = 1; $i < 58; $i ++) {
            $sql = "insert into
    					auth_permission_resource
    				set
                        role_id = '1',
                        res_id = '" . $i . "' 
    	    ";
            $this->db->query($sql);
        }
    }

    public function login($params = array())
    {
        $sql = "    SELECT  
                        u.*,
                        r.role_name,
                        c.company_name,
                        c.company_id,
                        b.branch_name
                    FROM
                        auth_user u left join auth_role r on u.role_id = r.role_id
                        left join branch b on b.branch_id = u.branch_id
                        left join company c on c.company_id = b.company_id
    				WHERE
    					u.email = '" . $this->db->escapeString($params['email']) . "'
                        and u.user_password = '" . md5($params['password'].'DA_PEOPLE_COUNTING') . "'
    	";
        $query = $this->db->query($sql);
        $result = $query->getRowArray();
        if (! empty($result)) {
            $this->session->set('isLogged', 1);
            $this->session->set('user_id', $result['user_id']);
            $this->session->set('user_name', $result['user_name']);
            $this->session->set('user_firstname', $result['first_name']);
            $this->session->set('user_lastname', $result['last_name']);
            $this->session->set('user_email', $result['email']);
            $this->session->set('user_lastlogin', $result['last_login']);
            $this->session->set('user_role_id', $result['role_id']);
            $this->session->set('branch_id', $result['branch_id']);
            $this->session->set('branch_name', $result['branch_name']);
            $this->session->set('company_id', $result['company_id']);
            $this->session->set('company_name', $result['company_name']);
            $this->session->set('is_root', ($result['company_id'] == 1 ? 1 : 0));

            return true;
        } else {
            $this->session->set('isLogged', 2);
            return false;
        }
    }

    public function sendToResetPassword($params = array())
    {
        $sql = "SELECT * FROM
    					auth_user
    				WHERE
    					email = '" . $params['email'] . "'
    	";
        $query = $this->db->query($sql);
        $result = $query->getRowArray();
        if (! empty($result)) {
            $hash = md5(uniqid());
            $sql = "update
    					auth_user
    				set
                        hash = '" . $hash . "'
                    where
    					email = '" . $params['email'] . "'
    	    ";
            $this->db->query($sql);

            $msg = "Hi " . $result['first_name'] . ",<br><br>" . "Please use the link below to set new password: ";
            $msg .= "<a href=\"" . $params['url'] . "/reset-password?email=" . $params['email'] . "&hash=" . $hash . "\" target=\"_blank\">Click here</a>" . "<br><br><br>";
            $msg .= "<hr>";
            $msg .= "Digital Associates Co., Ltd." . "<br>";
            $msg .= "3/24 Soi Phaholyothin 13, Phaholyothin Rd. Phayatai, Phayatai, Bangkok 10400" . "<br>";
            $msg .= "Telephone: 02-6182-266 Fax: 02-6182-260 Website: http://www.da.co.th" . "<br>";

            $email = \Config\Services::email();

            $email->setFrom('info@da.co.th', 'People Counting');
            $email->setTo($params['email']);
            $email->setSubject('Reset Password');
            $email->setMessage($msg);
            if ($email->send()) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function resetPassword($params = array())
    {
        $sql = "SELECT * FROM
    					auth_user
    				WHERE
    					email = '" . $params['email'] . "'
                        and hash = '" . $params['hash'] . "'
    	";
        $query = $this->db->query($sql);
        $result = $query->getRowArray();
        if (! empty($result)) {
            $sql = "update
    					auth_user
    				set
                        hash = '',
                        user_password = '" . md5($params['password']) . "'
                    where
    					email = '" . $params['email'] . "'
    	       ";
            $this->db->query($sql);

            return true;
        } else {
            return false;
        }
    }

    public function getResourceByRoleId($role_id = 0)
    {
        if (empty($role_id)) {
            return false;
        }

        $sql = "SELECT 
						cat_level_1.res_id as lvl_1_id,
                        cat_level_2.res_id as lvl_2_id,
                        cat_level_3.res_id as lvl_3_id,
                        cat_level_1.res_route as lvl_1_name,
                        cat_level_2.res_route as lvl_2_name,
                        cat_level_3.res_route as lvl_3_name,    
                        cat_level_1.res_label as lvl_1_alias_name,
                        cat_level_2.res_label as lvl_2_alias_name,
                        cat_level_3.res_label as lvl_3_alias_name,
                        cat_level_1.icon_name as lvl_1_icon_name,
                        cat_level_2.icon_name as lvl_2_icon_name,
                        cat_level_3.icon_name as lvl_3_icon_name
				FROM
						auth_permission_resource pr 
                        left join auth_resource as cat_level_1 on pr.res_id = cat_level_1.res_id
						left join auth_resource as cat_level_2 on cat_level_2.parent_id = cat_level_1.res_id
						left join auth_resource as cat_level_3 on cat_level_3.parent_id = cat_level_2.res_id
				WHERE
						pr.role_id = $role_id 
                        and cat_level_1.parent_id = 0
                order by 
			            cat_level_1.menu_order, 
                        cat_level_2.menu_order, 
                        cat_level_3.menu_order
    	";
        $query = $this->db->query($sql);

        $menu = array();
        foreach ($query->getResult() as $rows) {
            $isrole = self::checkRolePermissionById($role_id, $rows->lvl_1_id);
            if (! empty($isrole)) {
                $menu[$rows->lvl_1_id]['id'] = $rows->lvl_1_id;
                $menu[$rows->lvl_1_id]['name'] = $rows->lvl_1_name;
                $menu[$rows->lvl_1_id]['alias'] = $rows->lvl_1_alias_name;
                $menu[$rows->lvl_1_id]['icon'] = $rows->lvl_1_icon_name;
            }
            if (! empty($rows->lvl_2_id)) {
                $isrole = self::checkRolePermissionById($role_id, $rows->lvl_2_id);
                if (! empty($isrole)) {
                    $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['id'] = $rows->lvl_2_id;
                    $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['name'] = $rows->lvl_2_name;
                    $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['alias'] = $rows->lvl_2_alias_name;
                    $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['icon'] = $rows->lvl_2_icon_name;
                }
            }
            if (! empty($rows->lvl_3_id)) {
                $isrole = self::checkRolePermissionById($role_id, $rows->lvl_3_id);
                if (! empty($isrole)) {
                    $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['sub'][$rows->lvl_3_id]['id'] = $rows->lvl_3_id;
                    $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['sub'][$rows->lvl_3_id]['name'] = $rows->lvl_3_name;
                    $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['sub'][$rows->lvl_3_id]['alias'] = $rows->lvl_3_alias_name;
                    $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['sub'][$rows->lvl_3_id]['icon'] = $rows->lvl_3_icon_name;
                    $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['sub'][$rows->lvl_3_id]['group'] = $rows->lvl_2_name;
                }
            }
        }

        return $menu;
    }

    public function checkRolePermissionById($role_id = 0, $res_id = 0)
    {
        if (empty($role_id) || empty($res_id)) {
            return false;
        }
        $sql = "SELECT
						 *
				FROM
						auth_permission_resource 
				WHERE
						res_id = '" . $res_id . "'
                        and role_id = '" . $role_id . "'
    	";
        $query = $this->db->query($sql);
        $row = $query->getRow();
        if (! empty($row)) {
            return true;
        } else {
            return false;
        }
    }

    public function getResourceOnceByRoleId($role_id = 0)
    {
        if (empty($role_id)) {
            return false;
        }
        $sql = "SELECT
						 r.*
				FROM
						auth_permission_resource p
                        left join auth_resource r on p.res_id = r.res_id 
				WHERE
						p.role_id = '" . $role_id . "'
    	";
        $query = $this->db->query($sql);

        $menu = array();
        foreach ($query->getResult() as $key => $rows) {
            $menu[$key]['id'] = $rows->res_id;
            $menu[$key]['name'] = $rows->res_route;
            $menu[$key]['alias'] = $rows->res_label;
            $menu[$key]['icon'] = $rows->icon_name;
        }

        return $menu;
    }

    public function getResource()
    {
        $sql = "SELECT
						cat_level_1.res_id as lvl_1_id,
                        cat_level_2.res_id as lvl_2_id,
                        cat_level_3.res_id as lvl_3_id,
                        cat_level_1.res_route as lvl_1_name,
                        cat_level_2.res_route as lvl_2_name,
                        cat_level_3.res_route as lvl_3_name,
                        cat_level_1.res_label as lvl_1_alias_name,
                        cat_level_2.res_label as lvl_2_alias_name,
                        cat_level_3.res_label as lvl_3_alias_name,
                        cat_level_1.icon_name as lvl_1_icon_name,
                        cat_level_2.icon_name as lvl_2_icon_name,
                        cat_level_3.icon_name as lvl_3_icon_name
				FROM
						auth_permission_resource pr
                        left join auth_resource as cat_level_1 on pr.res_id = cat_level_1.res_id
						left join auth_resource as cat_level_2 on cat_level_2.parent_id = cat_level_1.res_id
						left join auth_resource as cat_level_3 on cat_level_3.parent_id = cat_level_2.res_id
				WHERE
						cat_level_1.parent_id = 0
                order by
			            cat_level_1.menu_order,
                        cat_level_2.menu_order,
                        cat_level_3.menu_order
    	";
        $query = $this->db->query($sql);

        $menu = array();
        foreach ($query->getResult() as $rows) {
            $menu[$rows->lvl_1_id]['id'] = $rows->lvl_1_id;
            $menu[$rows->lvl_1_id]['name'] = $rows->lvl_1_name;
            $menu[$rows->lvl_1_id]['alias'] = $rows->lvl_1_alias_name;
            $menu[$rows->lvl_1_id]['icon'] = $rows->lvl_1_icon_name;

            if (! empty($rows->lvl_2_id)) {
                $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['id'] = $rows->lvl_2_id;
                $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['name'] = $rows->lvl_2_name;
                $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['alias'] = $rows->lvl_2_alias_name;
                $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['icon'] = $rows->lvl_2_icon_name;
            }
            if (! empty($rows->lvl_3_id)) {
                $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['sub'][$rows->lvl_3_id]['id'] = $rows->lvl_3_id;
                $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['sub'][$rows->lvl_3_id]['name'] = $rows->lvl_3_name;
                $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['sub'][$rows->lvl_3_id]['alias'] = $rows->lvl_3_alias_name;
                $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['sub'][$rows->lvl_3_id]['icon'] = $rows->lvl_3_icon_name;
                $menu[$rows->lvl_1_id]['sub'][$rows->lvl_2_id]['sub'][$rows->lvl_3_id]['group'] = $rows->lvl_2_name;
            }
        }

        return $menu;
    }

    public function getResourceByRoute($route = 0)
    {
        if (empty($route)) {
            return false;
        }
        $sql = "SELECT
						res_id, 
                        res_route, 
                        res_label 
				FROM
						auth_resource
				WHERE
						res_route = '" . $route . "' 
    	";
        $query = $this->db->query($sql);
        return $query->getRow();
    }

    public function getResourceParentByRoute($route = 0)
    {
        if (empty($route)) {
            return false;
        }
        $sql = "				
                SELECT
						r.res_id,
                        r.res_route, 
                        r.res_label
				FROM
						auth_resource r left join 
					    (
								select * from auth_resource 
						) parent on r.res_id = parent.parent_id
				WHERE	
						parent.res_route = '" . $route . "'
    	";
        $query = $this->db->query($sql);
        return $query->getRow();
    }

    public function getRole($params = array())
    {
        if (! empty($params['role_id'])) {
            $sql = "SELECT * FROM auth_role WHERE role_id = '" . $params['role_id'] . "'";
        } else {
            $sql = "SELECT * FROM auth_role WHERE company_id = '" . $this->session->get('company_id') . "'";
        }

        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row) {
            $data[$key]['role_id'] = $row->role_id;
            $data[$key]['role_name'] = $row->role_name;
        }
        return $data;
    }
}
?>