<?php
namespace App\Controllers;

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

                echo true;
            }
        } else {
            echo false;
        }
    }
}
