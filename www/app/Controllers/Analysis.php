<?php
namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\BranchModel;
use App\Models\BranchGroupModel;
use App\Models\EventModel;

class Analysis extends BaseController
{

    public function __construct()
    {
        $this->users_model = new UsersModel();
        $this->branch_model = new BranchModel();
        $this->branch_group_model = new BranchGroupModel();
        $this->event_model = new EventModel();
        $this->config = new \Config\App();
    }

    public function comparison()
    {
        $this->data['branchs_groups'] = $this->branch_group_model->getBranchGroups();
        $this->data['events'] = $this->event_model->getEvents();
        $this->data['users'] = $this->users_model->getUsers();
        $this->data['page_title'] = "Comparison";
        $this->data['branchs'] = $this->branch_model->getBranchLocation();

        return \Twig::instance()->display("pages/analysis/comparison/view.twig", $this->data);
    }

    public function conversionRate()
    {
        $this->data['branchs_groups'] = $this->branch_group_model->getBranchGroups();
        $this->data['events'] = $this->event_model->getEvents();
        $this->data['users'] = $this->users_model->getUsers();
        $this->data['page_title'] = "Conversion Rate";
        $this->data['branchs'] = $this->branch_model->getBranchLocation();

        return \Twig::instance()->display("pages/analysis/conversion_rate/view.twig", $this->data);
    }

    public function conversionRateSummary()
    {
        $this->data['branchs_groups'] = $this->branch_group_model->getBranchGroups();
        $this->data['events'] = $this->event_model->getEvents();
        $this->data['users'] = $this->users_model->getUsers();
        $this->data['page_title'] = "Conversion Rate Summary";
        $this->data['branchs'] = $this->branch_model->getBranchLocation();

        return \Twig::instance()->display("pages/analysis/conversion_rate_summary/view.twig", $this->data);
    }

    public function timeInside()
    {
        $this->data['branchs_groups'] = $this->branch_group_model->getBranchGroups();
        $this->data['events'] = $this->event_model->getEvents();
        $this->data['users'] = $this->users_model->getUsers();
        $this->data['page_title'] = "Time Inside";
        $this->data['branchs'] = $this->branch_model->getBranchLocation();

        return \Twig::instance()->display("pages/analysis/timeinside/view.twig", $this->data);
    }
}
