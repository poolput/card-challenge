<?php
namespace App\Controllers;

class Home extends BaseController
{

    public function __construct()
    {
        // $security = \Config\Services::security();
    }

    public function index()
    {
        $this->data['token'] = csrf_token();
        $this->data['hash'] = csrf_hash();
        $this->data['csrf_meta'] = csrf_meta();
        $this->data['number'] = array(
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
        shuffle($this->data['number']);

        return \Twig::instance()->display("pages/dashboard/view.twig", $this->data);
    }
}
