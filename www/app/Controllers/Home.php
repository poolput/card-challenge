<?php
namespace App\Controllers;

use App\Models\UsersModel;

class Home extends BaseController
{

    public function __construct()
    {
        // $security = \Config\Services::security();
    }

    public function index()
    {
        $this->data['token'] = csrf_hash();

        return \Twig::instance()->display("pages/dashboard/view.twig", $this->data);
    }
}
