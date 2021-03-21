<?php
namespace App\Controllers;

class Home extends BaseController
{

    public function __construct()
    {
        
    }
    public function index()
    {
    	
    	return \Twig::instance()->display("pages/dashboard/view.twig", $this->data);
    }
 
}
