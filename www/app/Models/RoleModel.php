<?php
namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getRoleByCompany($company_id = 0)
    {
        $sql = " SELECT 
                            auth_role.*
                        FROM                        
                            auth_role 
                    WHERE
                        company_id = '" . $company_id . "' ";
        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row) {
            $data[$key]['role_id'] = $row->role_id;
            $data[$key]['role_name'] = $row->role_name;
        }
        return $data;
    }

    public function getRole($role_id = 0)
    {
        $sql = "    SELECT 
                        auth_role.*, company.company_name , company.company_id
                    FROM  
                        auth_role left join branch on branch.company_id = auth_role.company_id
                        left join company on branch.company_id = company.company_id
                    where
                        auth_role.role_id = '" . $role_id . "'
        ";
        $query = $this->db->query($sql);
        return $query->getRowArray();
    }

    public function getBranchByRole($role_id = 0)
    {
        $sql = "   SELECT
                       *
                    FROM
                        auth_role_branch
                    where
                        role_id = '" . $role_id . "'
                            
        ";
        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row) {
            $data[$key]['role_id'] = $row->role_id;
            $data[$key]['branch_id'] = $row->branch_id;
            $data[$key]['create_date'] = $row->create_date;
            $data[$key]['create_by'] = $row->create_by;
        }
        return $data;
    }

    public function getRoles($branch_id = 0)
    {
        $sql = "    
                SELECT 
                    auth_role.*, company.company_name , company.company_id 
                FROM  
                    auth_role 
                    left join company on company.company_id = auth_role.company_id
                where   
                    company.company_id = '" . $this->session->get('company_id') . "' 
        ";
        $query = $this->db->query($sql);
        $data = array();
        foreach ($query->getResult() as $key => $row) {
            $data[$key]['role_id'] = $row->role_id;
            $data[$key]['role_name'] = $row->role_name;
            $data[$key]['company_id'] = $row->company_id;
            $data[$key]['company_name'] = $row->company_name;
        }
        return $data;
    }

    public function add($params = array())
    {
        $sql = "SELECT * FROM
    					auth_role
    				WHERE
    					role_name = '" . $params['role_name'] . "' and company_id = '" . $this->session->get('company_id') . "' 
    	";
        $query = $this->db->query($sql);
        $result = $query->getRowArray();
        if (empty($result)) {
            $this->db->transBegin();
            $sql = "insert into
        					auth_role
        				set
                            role_name = '" . $params['role_name'] . "',
                            company_id = '" . $params['company_id'] . "',
                            description = '" . $params['description'] . "' 
    	    ";
            $this->db->query($sql);
            $role_id = $this->db->insertID();
            foreach ($params['branch'] as $branch) {
                $sql = "insert into
        					auth_role_branch
        				set
                            role_id = '" . $role_id . "',
                            branch_id = '" . $branch . "',
                            create_by = '" . $params['user_id'] . "',
                            create_date = NOW()
    	               ";
                $this->db->query($sql);
            }
            if ($this->db->transStatus() === FALSE) {
                $this->db->transRollback();
                return false;
            } else {
                $this->db->transCommit();
                return true;
            }
        } else {
            return false;
        }
    }

    public function edit($params = array())
    {
        if (empty($params)) {
            return false;
        }
        $this->db->transBegin();
        $sql = " update
					auth_role
				set
                    role_name = '" . $params['role_name'] . "' ,
                    description = '" . $params['description'] . "'
                where   
                    role_id = '" . $params['role_id'] . "'
    	";
        $this->db->query($sql);

        $sql = "delete from auth_role_branch where role_id = '" . $params['role_id'] . "' ";
        $this->db->query($sql);

        foreach ($params['branch'] as $branch) {
            $sql = "insert into
        					auth_role_branch
        				set
                            role_id = '" . $params['role_id'] . "',
                            branch_id = '" . $branch . "',
                            create_by = '" . $params['user_id'] . "',
                            create_date = NOW()
    	               ";
            $this->db->query($sql);
        }
        if ($this->db->transStatus() === FALSE) {
            $this->db->transRollback();
            return false;
        } else {
            $this->db->transCommit();
            return true;
        }
    }

    public function remove($role_id = 0)
    {
        if (empty($role_id)) {
            return false;
        }
        $this->db->transBegin();

        $sql = "delete FROM auth_role WHERE role_id = '" . $role_id . "'";
        $this->db->query($sql);

        $sql = "delete FROM auth_role_branch WHERE role_id = '" . $role_id . "'";
        $this->db->query($sql);

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