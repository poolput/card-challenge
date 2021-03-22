<?php
namespace App\Controllers;

use App\Models\AuthenticationModel;

class Authentication extends BaseController
{

    public function __construct()
    {
        $this->authentication_model = new AuthenticationModel();
    }

    public function getToken()
    {
        $token = $this->authentication_model->getToken();

        print_r($token);
    }
}