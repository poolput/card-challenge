<?php
namespace App\Controllers;

use App\Models\CameraModel;
use App\Models\BranchModel; 

class Camera extends BaseController
{

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->camera_model = new CameraModel();
        $this->branch_model = new BranchModel();         
        $this->data['incurrect_message'] = INCURRECT_MESSAGE;
        $this->data['incurrect_select_message'] = INCURRECT_SELECT_MESSAGE;
    }
    
    public function index()
    {
        $this->data['title_body'] = "Camera";
        $this->data['cameras'] = $this->camera_model->getCamera($this->session->get('user_role_id'));

        return \Twig::instance()->display("pages/camera/camera/list.twig", $this->data);
    }
    
    public function add()
    {
        $this->data['title_body'] = "Camera";
        $this->data['branchs'] = $this->branch_model->getAllowBranch($this->session->get('user_role_id'));
        $post = $this->request->getPost();
        
        if (! empty( $post)) {            
            
            $chk = $this->camera_model->checkDuplicateCameraName($post);
            if(!$chk){
                $result = $this->camera_model->add($post);
                
                if (!empty($result)) {                
                    return redirect()->route('camera');        
                } else {
                    $this->data['warning_exist'] = WARNING_INSERT_DATA;
                }           
            }else{
                $this->data['warning_exist'] = WARNING_INSERT_DATA . ", Duplicate Camera Name";
            }
        }
     
        return \Twig::instance()->display("pages/camera/camera/form.twig", $this->data);
    }
    
    public function delete($camera_id = 0)
    {
        if (! empty($camera_id)) {
            $result = $this->camera_model->remove($camera_id);
            if (! empty($result)) {
                return redirect()->route('camera');
            }
        }
    }
    
    public function edit($camera_id)
    { 
        $post = $this->request->getPost();
        $this->data['title_body'] = "Camera";
        $this->data['branchs'] = $this->branch_model->getAllowBranch($this->session->get('user_role_id'));        
        $this->data['type'] = 'edit';       
        $this->data['camera'] = $this->camera_model->getCameraData($camera_id);
                
        if (! empty( $post)) {
            $result = $this->camera_model->edit($post);
            
            if (!empty($result)) {
                return redirect()->route('camera');
            } else {
                $this->data['warning_exist'] = WARNING_UPDATE_DATA; 
            }
            
        }
        
        return \Twig::instance()->display("pages/camera/camera/form.twig", $this->data);
    }

    public function status()
    {
        $this->data['title_body'] = "Camera";
        $this->data['branchs'] = $this->branch_model->getBranchList();
        
        return \Twig::instance()->display("pages/camera/status/list.twig", $this->data);

    }
    
}
