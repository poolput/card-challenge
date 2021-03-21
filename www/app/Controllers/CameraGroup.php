<?php
namespace App\Controllers;

use App\Models\CameraModel;
use App\Models\CameraGroupModel;
use App\Models\BranchModel; 

class CameraGroup extends BaseController
{

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->camera_model = new CameraModel();
        $this->cameragroup_model = new CameraGroupModel();
        $this->branch_model = new BranchModel();         
        
        $this->data['incurrect_message'] = INCURRECT_MESSAGE;
        $this->data['incurrect_select_message'] = INCURRECT_SELECT_MESSAGE;
    }
    
    public function index()
    {
        $this->data['title_body'] = "Camera Group";
        $this->data['cameragroups'] = $this->cameragroup_model->getCameraGroup($this->session->get('user_role_id'));

        return \Twig::instance()->display("pages/camera/group/list.twig", $this->data);
    }
    
    public function add()
    {
        $this->data['title_body'] = "Camera Group";
        $this->data['branch_id'] = $this->session->get('branch_id');
        $this->data['branch_name'] = $this->session->get('branch_name');
        $this->data['branchs'] = $this->branch_model->getAllowBranch($this->session->get('user_role_id'));
        $this->data['camera_list'] = $this->camera_model->getCameraOfBranch($this->session->get('user_role_id'),$this->data['branch_id']);
        $post = $this->request->getPost();        

        if (! empty( $post)) 
        {                                         
            $chk = $this->cameragroup_model->checkDuplicateGroupName($post);
  
            if(!$chk)
            {
                $result = $this->cameragroup_model->add($post);

                if (!empty($result)) {
                    return redirect()->route('camera-group');        
                } else {
                    $this->data['warning_exist'] = WARNING_INSERT_DATA;
                }            
            }else{
                $this->data['warning_exist'] = WARNING_INSERT_DATA . ", Duplicate Group Name";
            }
        }  
     
        return \Twig::instance()->display("pages/camera/group/form.twig", $this->data);
    }
    
    public function delete($camera_group_id = 0)
    {
        if (! empty($camera_group_id)) {
            $result = $this->camera_model->remove($camera_group_id);
            if (! empty($result)) {
                return redirect()->route('camera');
            }
        }
    }
    
    public function edit($camera_group_id)
    { 
        $post = $this->request->getPost();
        
        $this->data['type'] = 'edit';       
        $this->data['title_body'] = "Camera Group";
        $this->data['branch_id'] = $this->session->get('branch_id');
        $this->data['branch_name'] = $this->session->get('branch_name');
        $this->data['branchs'] = $this->branch_model->getAllowBranch($this->session->get('user_role_id'));
        $this->data['camera_group_data'] = $this->cameragroup_model->getCameraGroupData($camera_group_id);        
        //$this->data['camera_list'] = $this->camera_model->getCameraOfBranch($this->session->get('user_role_id'),$this->data['branch_id']);
        $this->data['camera_chooses'] = $this->cameragroup_model->getCameraChoose($camera_group_id);
      
        if (! empty( $post)) 
        {           
            echo "<pre>";
            print_r($post);
            exit;
            
            $chk = $this->cameragroup_model->checkDuplicateGroupName($post);
            
            if(!$chk)
            {
                $result = $this->cameragroup_model->edit($post);
                
                if (!empty($result)) {
                    return redirect()->route('camera-group');
                } else {
                    $this->data['warning_exist'] = WARNING_UPDATE_DATA; 
                }
            }else{
                $this->data['warning_exist'] = WARNING_UPDATE_DATA . ", Duplicate Group Name";
            }
        }
        
        return \Twig::instance()->display("pages/camera/group/form.twig", $this->data);
    }
    
    public function getCameraBranchData()
    {
        $post = $this->request->getPost();
        $this->data['camera_list'] = $this->cameragroup_model->getCameraBranchData($post["bid"]);
        return json_encode($this->data['camera_list']);
    }
}
