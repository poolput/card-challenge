<?php
namespace App\Controllers;

use App\Models\BranchModel;
use App\Models\FloorplanModel;
use App\Models\CameraGroupModel;

class Floorplan extends BaseController
{

    public function __construct()
    {
        $this->branch_model = new BranchModel();
        $this->floorplan_model = new FloorplanModel();
        $this->cameragroup_model = new CameraGroupModel();
    }

    public function index()
    {
        
        $this->data['page_title'] = "Floorplan";
        $this->data['branchs'] = $this->branch_model->getBranchByRole();

        $this->data['criteria_date'] = array(
                                            'start' => date('Y-m-d'),
                                            'end' => date('Y-m-d')
                                        );
        $this->data['criteria_week'] = array(
                                            'start_week' => intval(date('W')),
                                            'start_week_year' => date('Y'),
                                            'end_week' => intval(date('W')),
                                            'end_week_year' => date('Y')
                                        );
        $this->data['criteria_month'] = array(
                                            'start_month' => intval(date('m')),
                                            'start_month_year' => date('Y'),
                                            'end_month' => intval(date('m')),
                                            'end_month_year' => date('Y')
                                        );
        return \Twig::instance()->display("pages/floorplan/view.twig",$this->data);
    }


    public function list()
    {
        $this->data['page_title'] = "Floorplan Setting";

        $this->data['branchs'] = $this->branch_model->getBranchByRole();

        return \Twig::instance()->display("pages/floorplan/list.twig",$this->data);
    }

    public function floorplanTable()
    {
        $post = $this->request->getPost();

        if(empty($post['branch_id'])){
            $post['branch_id'] = $this->session->branch_id; 
        }

        $post['company_id'] = $this->session->get('company_id');

        $data = $this->floorplan_model->floorplanTable($post);

        echo json_encode($data);

    }

    public function add($branch_id){
        $this->data['page_title'] = "New Floorplan";
        $this->data['branch_id'] = $branch_id;
        $post = $this->request->getPost();

        if(!empty($post)){
            $post['branch_id'] = $branch_id;
            $create_floorplan = $this->floorplan_model->addFloorplan($post);
            if($create_floorplan){
                $message = array(
                                'type' => 'success',
                                'msg' => 'Add New Floorplan Success.'
                            );
            }else{
                $message = array(
                                'type' => 'error',
                                'msg' => 'Error Adding new Floorplan.'
                            );
            }

            echo json_encode($message);
        }else{
            if($branch_id == 'all'){
                $company_id = $this->session->get('company_id');
                $this->data['camera_groups'] = $this->cameragroup_model->getCameraGroupByCompany($company_id);
                $this->data['taken_camera_group'] = array();
            }else{
                $this->data['camera_groups'] = $this->cameragroup_model->getCameraGroupByBranch($branch_id);
                $this->data['taken_camera_group'] = $this->floorplan_model->getUnavailableCameraGroup();
            }

            foreach ($this->data['camera_groups'] as $key => $group_data) {
                if(in_array($group_data['camera_group_id'], $this->data['taken_camera_group'])){
                    $taken_array[] = $this->data['camera_groups'][$key];
                    unset($this->data['camera_groups'][$key]);
                }
            }

            return \Twig::instance()->display("pages/floorplan/setting.twig",$this->data);
        }

    }

    public function edit($branch_id,$map_id)
    {
        $this->data['page_title'] = "Edit Floorplan";
        $this->data['branch_id'] = $branch_id;
        $this->data['floorplan_data'] = $this->floorplan_model->getFloorplanData(array('map_id'=>$map_id))[0];
        if(empty($branch_id)){
            $company_id = $this->session->get('company_id');
            $this->data['camera_groups'] = $this->cameragroup_model->getCameraGroupByCompany($company_id);
            $this->data['taken_camera_group'] = array();
        }else{
            $this->data['camera_groups'] = $this->cameragroup_model->getCameraGroupByBranch($branch_id);
            $this->data['taken_camera_group'] = $this->floorplan_model->getUnavailableCameraGroup($map_id);
        }
        
        $taken_array = array();
        foreach ($this->data['camera_groups'] as $key => $group_data) {
            if(in_array($group_data['camera_group_id'], $this->data['taken_camera_group'])){
                $taken_array[] = $this->data['camera_groups'][$key];
                unset($this->data['camera_groups'][$key]);
            }
        }
        foreach ($taken_array as $key => $taken) {
            array_unshift($this->data['camera_groups'], $taken);
        }

        $this->data['json_url'] = base_url()."/floorplan/get-perimeter/".$map_id;
        $this->data['map_id'] = $map_id;

        $post = $this->request->getPost();

        if(!empty($post)){
            $post['map_id'] = $map_id;
            $update_flooplan = $this->floorplan_model->updateFloorplan($post);
            if($update_flooplan){
                $message = array(
                                'type' => 'success',
                                'msg' => 'Update Floorplan Success.'
                            );
            }else{
                $message = array(
                                'type' => 'error',
                                'msg' => 'Error Updating Floorplan.'
                            );
            }

            echo json_encode($message);
        }else{

            return \Twig::instance()->display("pages/floorplan/setting.twig",$this->data);
        }
    }

    public function delete($map_id)
    {
        $delete_floorplan = $this->floorplan_model->deleteFloorplan($map_id);
    }

    public function getAreaPerimeter($map_id)
    {
        $area_perimeters = $this->floorplan_model->getAreaData(array('map_id'=>$map_id));

        echo json_encode($area_perimeters);
    }

    public function getFloorplanByBranch($branch_id)
    {
        $floorplans = $this->floorplan_model->getFloorplanData(array('branch_id'=>$branch_id));

        echo json_encode($floorplans);
    }

    public function getCameraGroupUnderFloorplan($map_id)
    {
        $camera_groups = $this->floorplan_model->getFloorplanCameraGroup($map_id);

        echo json_encode($camera_groups);   
    }

    public function getFloorplanData($map_id)
    {
        $post = $this->request->getPost();
        $return = array();
        $post['map_id'] = $map_id;
        $company_id = $this->session->get('company_id');
        $this->data['format_date'] = self::loadFormatDate($company_id);
        if (empty($this->data['format_date'])) {
            $post['config_week_start'] = 1;
        } else {
            $post['config_week_start'] = $this->data['format_date']['weekStart'];
        }
        $return['floorplan_data'] = $this->floorplan_model->getFloorplanData($post)[0];
        $return['area_perimeters'] = $this->floorplan_model->getAreaData($post);

        echo json_encode($return);
    }

    public function export()
    {
        //get img from plain html
        $url_source = "https://dev.intensivewatch.com/pc-v3/floorplan/edit/1/4";
        $path = WRITEPATH."uploads/temp";
        $opt_name = "floorplan_img.png";
        $output=null;
        $retval=null;
        // echo 'wkhtmltoimage --width 1500 --height 800 --javascript-delay 5000 --debug-javascript "'.$url_source.'" '.$path.'/'.$opt_name;
        // die;
        exec('wkhtmltoimage --width 1500 --height 800 --javascript-delay 5000 --debug-javascript "'.$url_source.'" '.$path.'/'.$opt_name , $output, $retval);
        echo "Returned with status $retval and output:\n";
        print_r($output);
        exit();
        
    }

}
