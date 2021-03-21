<?php
namespace App\Models;

use CodeIgniter\Model;
use App\Models\RoleModel;

class BranchGroupModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function add($params = array())
    {
        $this->db->transBegin();
        $sql = "insert into
        					branch_group
        				set
                            group_name = '" . $params['branch_group_name'] . "',
                            create_by = '" . $params['user_id'] . "',
                            create_date = NOW()
    	";
        $this->db->query($sql);
        $group_id = $this->db->insertID();

        foreach ($params['name'] as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $k => $v) {
                    $parent_id = '';
                    if ($key != $k) {
                        $parent_id = $key;
                    }
                    $sql = "insert into
        					branch_group_level
        				set
                            group_id = '" . $group_id . "',
                            group_level_name = '" . $v . "',
                            reference_id = '" . $k . "',
                            parent_id = '" . $parent_id . "',
                            create_by = '" . $params['user_id'] . "',
                            create_date = NOW()
    	               ";
                    $this->db->query($sql);
                }
            }
        }
        if (! empty($params['group_branch'])) {
            foreach ($params['group_branch'] as $key => $value) {

                foreach ($value['camera_group'] as $k => $v) {
                    $sql = "insert into
	        					branch_group_mapping
	        				set
	                            branch_id = '" . $key . "',
	                            reference_id = '" . $v . "',
								camera_group_id = '" . $k . "',
	                            create_by = '" . $params['user_id'] . "',
	                            create_date = NOW()
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

    public function edit($params = array())
    {
        $this->db->transBegin();
        $sql = "update
					branch_group
				set
                    group_name = '" . $params['branch_group_name'] . "'
                where
                    group_id = '" . $params['branch_group_id'] . "'
    	";
        $this->db->query($sql);
        $group_id = $params['branch_group_id'];

        $sql_del = "delete from branch_group_level where  group_id = '" . $group_id . "'";
        $this->db->query($sql_del);

        foreach ($params['name'] as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $k => $v) {
                    $parent_id = '';
                    if ($key != $k) {
                        $parent_id = $key;
                    }
                    $row_level = $this->getGroupLevelByReferenceID($k);
                    if (! empty($row_level)) {
                        $sql = "update
                					branch_group_level
                				set
                                    group_level_name = '" . $v . "'
                                where   
                                    reference_id = '" . $k . "'
    	                ";
                        $this->db->query($sql);
                    } else {
                        $sql = "insert into
                					branch_group_level
                				set
                                    group_id = '" . $group_id . "',
                                    group_level_name = '" . $v . "',
                                    reference_id = '" . $k . "',
                                    parent_id = '" . $parent_id . "',
                                    create_by = '" . $params['user_id'] . "',
                                    create_date = NOW()
    	                ";

                        $this->db->query($sql);
                    }
                }
            }
        }
        // delete all

        // new insert by select
        if (! empty($params['group_branch'])) {
            foreach ($params['group_branch'] as $key => $value) {

                $sql_del = "delete from branch_group_mapping where  reference_id = '" . $value . "'";
                $this->db->query($sql_del);

                $sql = "insert into
	        					branch_group_mapping
	        				set
	                            branch_id = '" . $key . "',
	                            reference_id = '" . $value . "',
	                            create_by = '" . $params['user_id'] . "',
	                            create_date = NOW()
	    	               ";
                $this->db->query($sql);
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

    public function getGroupLevelByReferenceID($reference_id = null)
    {
        $sql = " select * from branch_group_level where reference_id = '" . $reference_id . "' ";
        $query = $this->db->query($sql);
        $row = $query->getRow();

        return $row;
    }

    public function getBranchGroups($id = null)
    {
        $role_id = $this->session->get('user_role_id');
        $role_model = new RoleModel();
        $row_role = $role_model->getBranchByRole($role_id);
        $array_branch = array();
        foreach ($row_role as $value) {
            $array_branch[] = $value['branch_id'];
        }
        $branch = implode(',', array_values($array_branch));

        $and = '';
        if (! empty($id)) {
            $and = "and bg.group_id = '" . $id . "' ";
        }

        $sql = " select 
                        bg.group_id, 
                        bg.group_name, 
                        bg.create_date 
                   from 
                        branch_group_mapping bm 
                        left join branch_group_level bl on bm.reference_id = bl.reference_id
                        left join branch_group bg on bg.group_id = bl.group_id
                        left join branch b on b.branch_id = bm.branch_id
                    where 
                        bm.branch_id in (" . $branch . ") 
                        and b.company_id = '" . $this->session->get('company_id') . "' 
                        $and
                    group by bg.group_id";

        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $group) {

            $sql = " select bl.* from
                                branch_group_level bl
                                left join branch_group_mapping bm on (bm.reference_id = bl.reference_id and bm.branch_id in (" . $branch . ") )
                            where
                                group_id = '" . $group->group_id . "'
                                and parent_id = ''
                                order by group_level_name ";
            $query = $this->db->query($sql);
            if (! empty($query->getRow())) {
                $data[$key]['id'] = $group->group_id;
                $data[$key]['name'] = $group->group_name;
                $data[$key]['date'] = $group->create_date;
                $data[$key]['group_branch'] = array();

                foreach ($query->getResult() as $group_branch) {
                    $data[$key]['group_branch'][$group_branch->group_level_id]['id'] = $group_branch->group_level_id;
                    $data[$key]['group_branch'][$group_branch->group_level_id]['name'] = $group_branch->group_level_name;
                    $data[$key]['group_branch'][$group_branch->group_level_id]['parent_id'] = $group_branch->parent_id;
                    $data[$key]['group_branch'][$group_branch->group_level_id]['reference_id'] = $group_branch->reference_id;
                    $data[$key]['group_branch'][$group_branch->group_level_id]['group_branch'] = self::getRecursiveBranchGroups($group_branch->reference_id, $branch);
                }
            }
        }

        return $data;
    }

    public function getRecursiveBranchGroups($reference_id = 0, $branch_id = 0)
    {
        $sql = " select 
                        bl.*, bm.branch_id, b.branch_name 
                    from 
                        branch_group_level bl
                        left join branch_group_mapping bm on bm.reference_id = bl.reference_id
                        left join branch b on b.branch_id = bm.branch_id
                    where
                        bm.branch_id in (" . $branch_id . ")
                        and bl.parent_id = '" . $reference_id . "' 
                    order by
                        bl.group_level_name
        ";
        $query = $this->db->query($sql);
        $data = array();
        $row = $query->getRow();
        if (! empty($row)) {
            foreach ($query->getResult() as $group) {
                $data[$group->group_level_id]['id'] = $group->group_level_id;
                $data[$group->group_level_id]['name'] = $group->group_level_name;
                $data[$group->group_level_id]['branch_id'] = $group->branch_id;
                $data[$group->group_level_id]['branch_name'] = $group->branch_name;
                $data[$group->group_level_id]['parent_id'] = $group->parent_id;
                $data[$group->group_level_id]['reference_id'] = $group->reference_id;
                if (! empty($group->branch_id)) {
                    $sql = "
                            select
                                g.camera_group_id,
                                g.camera_group_name
                            from
                                auth_role_branch r
                                left join branch b on r.branch_id = b.branch_id
                                left join camera_group g on b.branch_id = g.branch_id
                            where
                                b.branch_id = '" . $group->branch_id . "'
                            group by
                                g.camera_group_id
                        ";

                    $query = $this->db->query($sql);
                    foreach ($query->getResult() as $value) {
                        if (! empty($value->camera_group_id)) {
                            $data[$group->group_level_id]['group_camera'][$value->camera_group_id]['id'] = $value->camera_group_id;
                            $data[$group->group_level_id]['group_camera'][$value->camera_group_id]['name'] = $value->camera_group_name;
                        }
                    }
                }
                if (! empty($group->reference_id) || ! empty($branch_id)) {
                    $data[$group->group_level_id]['group_level'] = self::getRecursiveBranchGroups($group->reference_id, $branch_id);
                }
            }
            return $data;
        }
        return false;
    }

    public function deleteBranchGroup($group_id = 0)
    {
        $this->db->transBegin();

        $sql = "delete FROM branch_group WHERE group_id = '" . $group_id . "'";
        $query = $this->db->query($sql);

        $sql = "
                        select
                                reference_id
                        from
                                branch_group_level
                        where
                                group_id = '" . $group_id . "'
         ";
        $query = $this->db->query($sql);

        foreach ($query->getResult() as $value) {
            $sql = "delete FROM branch_group_mapping WHERE reference_id = '" . $value->reference_id . "'";
            $query = $this->db->query($sql);
        }

        $sql = "delete FROM branch_group_level WHERE group_id = '" . $group_id . "'";
        $query = $this->db->query($sql);

        if ($this->db->transStatus() === FALSE) {
            $this->db->transRollback();
            return false;
        } else {
            $this->db->transCommit();
            return true;
        }
    }
}
?>