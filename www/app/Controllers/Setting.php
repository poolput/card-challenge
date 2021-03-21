<?php
namespace App\Controllers;
use App\Models\UsersModel;
use App\Models\BranchModel;
use App\Models\BranchGroupModel;
use App\Models\EventModel;

class Setting extends BaseController
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

    public function conversionRate()
    {
         
        $this->data['branchs_groups'] = $this->branch_group_model->getBranchGroups();
        $this->data['events'] = $this->event_model->getEvents();
        $this->data['users'] = $this->users_model->getUsers();
        $this->data['page_title'] = "Conversion Rate Setting";
        //$this->data['branchs'] = $this->branch_model->getBranchLocation();
        $this->data['branchs'] = $this->branch_model->getBranchList();

        return \Twig::instance()->display("pages/analysis/conversion_rate/setting.twig", $this->data);
        
    }

}
