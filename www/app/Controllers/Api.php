<?php
namespace App\Controllers;

use App\Models\UsersModel;

class Api extends BaseController
{

    public function __construct()
    {
        $this->config = new \Config\App();
        $this->session = \Config\Services::session();
    }

    public function setNewGame($token)
    {
        if (! empty($token)) {

            $hash = csrf_hash();

            if ($token == $hash) {

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
                $this->users_model->setUser($this->data['token']);
                echo true;
            } else {
                echo false;
            }
        } else {
            echo false;
        }
    }
}
