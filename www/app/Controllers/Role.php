<?php
namespace App\Controllers;

use App\Models\RoleModel;
use App\Models\CompanyModel;
use App\Models\BranchModel;

class Role extends BaseController
{

    public function __construct()
    {
        $this->role_model = new RoleModel();
        $this->company_model = new CompanyModel();
        $this->branch_model = new BranchModel();
        $this->data['incurrect_message'] = INCURRECT_MESSAGE;
    }

    public function index()
    {
        $this->data['roles'] = $this->role_model->getRoles($this->session->get('branch_id'));

        return \Twig::instance()->display("pages/role/list.twig", $this->data);
    }

    public function add()
    {
        if (! empty($this->request->getPost())) {
            $params = $this->request->getPost();
            $params['company_id'] = $this->session->get('company_id');
            $params['user_id'] = $this->session->get('user_id');

            $result = $this->role_model->add($params);
            if (! empty($result)) {
                return redirect()->route('role');
            } else {
                $this->data['warning_exist'] = WARNING_NAME_EXIST;
            }
        }

        $this->data['roles'] = $this->role_model->getRoles($this->session->get('company_id'));

        $this->data['branchs'] = $this->branch_model->getBranchList();

        return \Twig::instance()->display("pages/role/form.twig", $this->data);
    }

    public function edit($role_id = 0)
    {
        if (! empty($this->request->getPost())) {
            $params = $this->request->getPost();
            $params['role_id'] = $role_id;
            $params['company_id'] = $this->session->get('company_id');
            $params['user_id'] = $this->session->get('user_id');
            $result = $this->role_model->edit($params);
            if (! empty($result)) {
                return redirect()->route('role');
            } else {
                $this->data['warning_exist'] = WARNING_NAME_EXIST;
            }
        }
        $this->data['roles'] = $this->role_model->getRoles($this->session->get('company_id'));
        $this->data['branchs'] = $this->branch_model->getBranchList();

        $this->data['role'] = $this->role_model->getRole($role_id);
        $this->data['role_branchs'] = $this->role_model->getBranchByRole($role_id);

        return \Twig::instance()->display("pages/role/form.twig", $this->data);
    }

    public function delete($role_id = 0)
    {
        if (! empty($role_id)) {
            $result = $this->role_model->remove($role_id);
            if (! empty($result)) {
                return redirect()->route('role');
            }
        }
    }

    public function ajaxGetUser()
    {
        if (! empty($this->request->getPost())) {
            $user_id = $this->request->getPost('user_id');
            $password = $this->request->getPost('password');
            $result = $this->users_model->getUser($user_id);

            if (md5($result['user_password']) == $password) {
                echo true;
            }
        }

        echo false;
    }
}
