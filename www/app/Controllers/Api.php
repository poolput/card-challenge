<?php
namespace App\Controllers;

use App\Models\UsersModel;

class Api extends BaseController
{

    public function __construct()
    {
        $this->config = new \Config\App();
        $this->session = \Config\Services::session();
        $this->users_model = new UsersModel();
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
                $user_id = $this->users_model->setUser($token);
                $this->session->set('user_id', $user_id);
                echo true;
            } else {
                echo false;
            }
        } else {
            echo false;
        }
    }

    public function getCardNumber($token = 0, $key = 0)
    {
        if (! empty($token)) {

            $hash = csrf_hash();

            if ($token == $hash) {

                $number = $this->session->get('number');
                $user_id = $this->session->get('user_id');
                $this->data['user'] = $this->users_model->getUser($this->data['token'], $user_id);

                echo $number[$key];
            } else {
                echo false;
            }
        } else {
            echo false;
        }
    }
}
