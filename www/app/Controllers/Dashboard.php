<?php
namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\BranchModel;
use App\Models\BranchGroupModel;
use App\Models\EventModel;
use App\Models\CameraModel;

class Dashboard extends BaseController
{

    public function __construct()
    {
        $this->users_model = new UsersModel();
        $this->branch_model = new BranchModel();
        $this->branch_group_model = new BranchGroupModel();
        $this->event_model = new EventModel();
        $this->camera_model = new CameraModel();

        $this->view = \Config\Services::renderer();
        $this->config = new \Config\App();
    }

    public function dashboard()
    {
        $total_users = 0;
        $total_branchs = 0;
        $total_staffs = 0;
        $total_cameras = 0;

        $total_passing = 0;
        $total_in = 0;
        $total_out = 0;
        $total_inside = 0;

    	$this->data['branchs'] = $this->branch_model->getBranchLocation();
    	$this->data['branchs_groups'] = $this->branch_group_model->getBranchGroups();
        $this->data['events'] = $this->event_model->getEvents();


        $total_branchs = count($this->data['branchs']);
        if(!empty($this->data['branchs'])){
            foreach ($this->data['branchs'] as $province_key => $branch_province) {
                foreach ($branch_province['branch'] as $branch_id => $branch_data) {
                    $total_users += count($this->users_model->getBranchUser($branch_id));
                }
            }
        }

        if(!empty($this->session->get('user_role_id'))){
            $total_cameras = count($this->camera_model->getCamera($this->session->get('user_role_id')));
        }
        $this->data['total_branchs'] = $total_branchs;
        $this->data['total_users'] = $total_users;
        $this->data['total_cameras'] = $total_cameras;
        $this->data['total_staffs'] = $total_staffs;

        $this->data['card_row_1'] = array(
                                        'icon' => '',
                                        'text' => '',
                                        'number' => 0
                                    );
        $this->data['card_row_2'] = array(
                                        'icon' => '',
                                        'text' => '',
                                        'number' => 0
                                    );

        return \Twig::instance()->display("pages/dashboard/view.twig", $this->data);
    }


}