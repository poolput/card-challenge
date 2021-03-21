<?php
namespace App\Controllers;

use App\Models\PermissionModel;
use App\Models\RoleModel;
use App\Models\AuthenticationModel;

class Permission extends BaseController
{

    public function __construct()
    {
        $this->permission_model = new PermissionModel();
        $this->role_model = new RoleModel();
        $this->authentication_model = new AuthenticationModel();
        $this->data['incurrect_message'] = INCURRECT_MESSAGE;
    }

    public function index()
    {
        $this->data['roles'] = $this->role_model->getRoles($this->session->get('branch_id'));

        return \Twig::instance()->display("pages/permission/list.twig", $this->data);
    }

    public function edit($role_id = 0)
    {
        if (! empty($this->request->getPost())) {
            $params = $this->request->getPost();
            $params['role_id'] = $role_id;
            $params['company_id'] = $this->session->get('company_id');
            $params['user_id'] = $this->session->get('user_id');
            $result = $this->permission_model->edit($params);
            if (! empty($result)) {
                return redirect()->route('permission');
            }
        }
        $this->data['role'] = $this->role_model->getRole($role_id);
        $this->data['pages'] = $this->authentication_model->getResourceOnceByRoleId($role_id);

        $this->data['pages_all'] = $this->authentication_model->getResource();
        return \Twig::instance()->display("pages/permission/form.twig", $this->data);
    }
}
