<?php
namespace App\Controllers;

use App\Models\TaskSchedulerModel;
use App\Models\BranchModel;
use App\Models\RoleModel;

class TaskScheduler extends BaseController
{

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->taskscheduler_model = new TaskSchedulerModel();
        $this->branch_model = new BranchModel();
        $this->role_model = new RoleModel();
        
        $this->data['incurrect_message'] = INCURRECT_MESSAGE;
        $this->data['incurrect_select_message'] = INCURRECT_SELECT_MESSAGE;
    }
    
    public function index()
    {
        $this->data['title_body'] = "Task Scheduler";
 
        return \Twig::instance()->display("pages/task/list.twig", $this->data);
    }
    
    public function add()
    {
        $post = $this->request->getPost();
        $this->data['title_body'] = "Task Scheduler";        
        $this->data['roledata'] = $this->role_model->getRoleByCompany($this->session->get('company_id'));        
        $this->data['reportdata'] = $this->taskscheduler_model->getReportName();

        if (! empty( $post))
        {
            $post["company_id"] = $this->session->get('company_id');
            
            $chk = $this->taskscheduler_model->checkDuplicateName($post);
            
            if(!$chk)
            {
                $result = $this->taskscheduler_model->add($post);

                if (!empty($result)) {
                    return redirect()->route('task-scheduler');
                } else {
                    $this->data['warning_exist'] = WARNING_INSERT_DATA;
                }
            }else{
                $this->data['warning_exist'] = WARNING_INSERT_DATA . ", Duplicate Name";
            }
        }
        
        $this->data['branchs'] = $this->branch_model->getBranchLocation();
        
        return \Twig::instance()->display("pages/task/form.twig", $this->data);
    }

}
