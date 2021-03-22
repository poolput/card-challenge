<?php
namespace App\Controllers;

use App\Models\UsersModel;

class Home extends BaseController
{

    public function __construct()
    {
        // $security = \Config\Services::security();
        $this->users_model = new UsersModel();
    }

    public function index()
    {
        $this->data['token'] = csrf_hash();

        $number = array(
            1,
            2,
            3,
            4,
            5,
            6,
            1,
            2,
            3,
            4,
            5,
            6
        );
        shuffle($number);
        $this->session->set('number', $number);

        // $this->data['user'] = $this->users_model->getUser($this->data['token']);

        return \Twig::instance()->display("pages/dashboard/view.twig", $this->data);
    }
}
