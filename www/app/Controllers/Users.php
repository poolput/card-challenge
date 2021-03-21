<?php
namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\AuthenticationModel;
use App\Models\CompanyModel;
use App\Models\BranchModel;

class Users extends BaseController
{

    public function __construct()
    {
        $this->users_model = new UsersModel();
        $this->authentication_model = new AuthenticationModel();
        $this->company_model = new CompanyModel();
        $this->branch_model = new BranchModel();
        $this->data['incurrect_message'] = INCURRECT_MESSAGE;
    }

    public function index()
    {
        $this->data['users'] = $this->users_model->getUsers();

        return \Twig::instance()->display("pages/users/list.twig", $this->data);
    }

    public function add()
    {
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();
            $result = $this->users_model->add($post);
            if (! empty($result)) {
                return redirect()->route('users');
            } else {
                $this->data['warning_exist'] = WARNING_EMAIL_EXIST;
            }
            // $this->data['user'] = $post;
        }
        $this->data['password'] = 'Password';
        $this->data['current_password'] = ' hide';
        $this->data['companies'] = $this->company_model->getCompany();
        $params['company_id'] = $this->session->get('company_id');
        $this->data['roles'] = $this->authentication_model->getRole($params);

        $this->data['branchs'] = $this->branch_model->getAllowBranch($this->data['roles'][0]['role_id']);
        return \Twig::instance()->display("pages/users/form.twig", $this->data);
    }

    public function edit($user_id)
    {
        if (! empty($this->request->getPost())) {

            $result = $this->users_model->edit($this->request->getPost());
            if (! empty($result)) {
                return redirect()->route('users');
            }
        }
        $this->data['type'] = 'edit';
        $this->data['password'] = 'New password';
        $this->data['user'] = $this->users_model->getUser($user_id);
        $this->data['companies'] = $this->company_model->getCompany();
        $branch['branch_id'] = $this->session->get('branch_id');
        $this->data['roles'] = $this->authentication_model->getRole($branch);

        $this->data['branchs'] = $this->branch_model->getAllowBranch($this->data['roles'][0]['role_id']);

        return \Twig::instance()->display("pages/users/form.twig", $this->data);
    }

    public function delete($user_id = 0)
    {
        if (! empty($user_id)) {
            $result = $this->users_model->deleteUser($user_id);
            if (! empty($result)) {
                return redirect()->route('users');
            }
        }
    }

    public function ajaxGetUser()
    {
        if (! empty($this->request->getPost())) {
            $user_id = $this->request->getPost('user_id');
            $password = $this->request->getPost('password');
            $result = $this->users_model->getUser($user_id);
            if ($result['user_password'] == md5($password)) {
                echo true;
            }
        }

        echo false;
    }
}
