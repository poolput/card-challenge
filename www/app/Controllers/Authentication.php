<?php
namespace App\Controllers;

use App\Models\AuthenticationModel;

class Authentication extends BaseController
{

    public function __construct()
    {
        $this->authentication_model = new AuthenticationModel();
    }

    public function index()
    {
        
        
    }
 
    public function login()
    {
        if (! empty($this->request->getPost())) {

            $result = $this->authentication_model->login($this->request->getPost());
            if (! empty($result)) {
                return redirect()->route('dashboard');
            }
        }
        return \Twig::instance()->display("pages/authentication/login.twig", $this->data);
    }
    public function logout()
    {
        $this->session->destroy();
        return redirect()->route('login');
    }
    public function forgetPassword()
    {
        $this->data['sent_status'] = '';
        if (! empty($this->request->getPost())) {
            $params = array();
            $params = $this->request->getPost();
            $params['url'] = $this->data['base_url'];
            $this->data['email'] = $this->request->getPost('email');
            $result = $this->authentication_model->sendToResetPassword($params);
            if (! empty($result)) {
                $this->data['sent_status'] = 1;
            } else {
                $this->data['sent_status'] = 2;
            }
        }
        return \Twig::instance()->display("pages/authentication/forget_password.twig", $this->data);
    }

    public function resetPassword()
    {
        if (empty($this->request->getGet('email')) || empty($this->request->getGet('hash'))) {
            return redirect()->route('login');
        } else {
            if (! empty($this->request->getPost())) {
                $params = array();
                $params['password'] = $this->request->getPost('password');
                $params['url'] = $this->data['base_url'];
                $params['email'] = $this->request->getGet('email');
                $params['hash'] = $this->request->getGet('hash');
                
                $result = $this->authentication_model->resetPassword($params);
                if (! empty($result)) {
                    return redirect()->route('login');
                } else {
                    // not found
                }
            }
            return \Twig::instance()->display("pages/authentication/reset_password.twig", $this->data);
        }
    }
    public function ajaxGetRole(){
        $result = array();
        if (! empty($this->request->getPost())) {
            
            $result = $this->authentication_model->getRole($this->request->getPost());
            if(!empty($result)){
                $option = '<option value="">---select---</option>';
                foreach($result as $value){
                    
                    $option .= '<option value="'.$value['role_id'].'">'.$value['role_name'].'</option>';
                }
            }
        }
        
        echo $option;
    }
}