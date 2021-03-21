<?php
namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\BranchModel;
use App\Models\BranchGroupModel;
use App\Models\EventModel;

class Summary extends BaseController
{

    public function __construct()
    {
        $this->users_model = new UsersModel();
        $this->branch_model = new BranchModel();
        $this->branch_group_model = new BranchGroupModel();
        $this->event_model = new EventModel();
        $this->view = \Config\Services::renderer();
        $this->config = new \Config\App();
    }

    public function visitor()
    {
        $this->data['branchs_groups'] = $this->branch_group_model->getBranchGroups();
        $this->data['events'] = $this->event_model->getEvents();
        $this->data['users'] = $this->users_model->getUsers();
        $this->data['page_title'] = "Summary Visitor";
        $this->data['branchs'] = $this->branch_model->getBranchLocation();
        
        return \Twig::instance()->display("pages/summary/visitor/view.twig", $this->data);
    }

    public function daypart()
    {
        $this->data['branchs_groups'] = $this->branch_group_model->getBranchGroups();
        $this->data['events'] = $this->event_model->getEvents();
        $this->data['users'] = $this->users_model->getUsers();
        $this->data['page_title'] = "Summary Day Part";
        $this->data['branchs'] = $this->branch_model->getBranchLocation();

        return \Twig::instance()->display("pages/summary/daypart/view.twig", $this->data);
    }

    public function location()
    {
        $this->data['branchs_groups'] = $this->branch_group_model->getBranchGroups();
        $this->data['events'] = $this->event_model->getEvents();
        $this->data['users'] = $this->users_model->getUsers();
        $this->data['page_title'] = "Summary Location ";
        $this->data['branchs'] = $this->branch_model->getBranchLocation();

        return \Twig::instance()->display("pages/summary/location/view.twig", $this->data);
    }

    public function densityByDate()
    {
        $this->data['branchs_groups'] = $this->branch_group_model->getBranchGroups();
        $this->data['events'] = $this->event_model->getEvents();
        $this->data['users'] = $this->users_model->getUsers();
        $this->data['page_title'] = "Summary Density by Date";
        $this->data['branchs'] = $this->branch_model->getBranchLocation();

        $this->data['color']['lessthan'] = $this->config->densityLessthan;
        $this->data['color']['between'] = $this->config->densityBetween;
        $this->data['color']['greaterthan'] = $this->config->densityGreaterthan;

        return \Twig::instance()->display("pages/summary/density/date/view.twig", $this->data);
    }

    public function densityByLocation()
    {
        $this->data['branchs_groups'] = $this->branch_group_model->getBranchGroups();
        $this->data['events'] = $this->event_model->getEvents();
        $this->data['users'] = $this->users_model->getUsers();
        $this->data['page_title'] = "Summary Density by Location";
        $this->data['branchs'] = $this->branch_model->getBranchLocation();

        $this->data['color']['lessthan'] = $this->config->densityLessthan;
        $this->data['color']['between'] = $this->config->densityBetween;
        $this->data['color']['greaterthan'] = $this->config->densityGreaterthan;

        return \Twig::instance()->display("pages/summary/density/location/view.twig", $this->data);
    }

    public function passing()
    {
        $this->data['branchs_groups'] = $this->branch_group_model->getBranchGroups();
        $this->data['events'] = $this->event_model->getEvents();
        $this->data['users'] = $this->users_model->getUsers();
        $this->data['page_title'] = "Summary Passing";
        $this->data['branchs'] = $this->branch_model->getBranchLocation();

        return \Twig::instance()->display("pages/summary/passing/view.twig", $this->data);
    }
}
