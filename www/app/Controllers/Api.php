<?php
namespace App\Controllers;

class Api extends BaseController
{

    public function __construct()
    {
        $this->config = new \Config\App();
    }

    public function getPeriod()
    {
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();
            $result = prepareOption($post);
            $period = date('d F Y', strtotime($result['date_start'])) . ' - ' . date('d F Y', strtotime($result['date_end']));
            echo json_encode($period);
        } else {
            echo false;
        }
    }
}
