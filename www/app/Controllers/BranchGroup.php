<?php
namespace App\Controllers;

use App\Models\BranchGroupModel;
use App\Models\BranchModel;

class BranchGroup extends BaseController
{

    public function __construct()
    {
        $this->branchgroup_model = new BranchGroupModel();
        $this->branch_model = new BranchModel();
        $this->data['incurrect_message'] = INCURRECT_MESSAGE;
    }

    public function index()
    {
        $this->data['title_body'] = "Branch Group";
        $this->data['branch_groups'] = $this->branchgroup_model->getBranchGroups();

        return \Twig::instance()->display("pages/company/branchgroup/list.twig", $this->data);
    }

    public function add()
    {
        if (! empty($this->request->getPost())) {
            $params = $this->request->getPost();
            $params['rold_id'] = $this->session->get('user_role_id');
            $params['user_id'] = $this->session->get('user_id');
            $result = $this->branchgroup_model->add($params);
            if (! empty($result)) {
                return redirect()->route('branch-group');
            } else {
                $this->data['warning_exist'] = WARNING_EMAIL_EXIST;
            }
        }
        $this->data['group']['reference_id'] = uniqid();
        $this->data['branchs'] = $this->branch_model->getBranchLocation();
        return \Twig::instance()->display("pages/company/branchgroup/form.twig", $this->data);
    }

    public function edit($id = null)
    {
        if (! empty($this->request->getPost())) {
            $params = $this->request->getPost();
            $params['rold_id'] = $this->session->get('user_role_id');
            $params['user_id'] = $this->session->get('user_id');
            $result = $this->branchgroup_model->edit($params);
            if (! empty($result)) {
                return redirect()->route('branch-group');
            } else {
                $this->data['warning_exist'] = WARNING_EMAIL_EXIST;
            }
        }
        $this->data['group'] = $this->branchgroup_model->getBranchGroups($id)[0];
        $this->data['branchs'] = $this->branch_model->getBranchLocation();
        return \Twig::instance()->display("pages/company/branchgroup/form.twig", $this->data);
    }

    public function getGroupBlock()
    {
        $this->data['params'] = $this->request->getPost();
        // if click owner
        $this->data['params']['owner'] = $this->data['params']['level'];
        $this->data['params']['child'] = $this->data['params']['level'] + 1;

        $this->data['group_id'] = uniqid();
        $this->data['parent_id'] = empty($this->data['params']['parent_id']) ? '' : $this->data['params']['parent_id'];

        return \Twig::instance()->display("pages/company/branchgroup/block.twig", $this->data, true);
    }
    
    public function delete($group_id = 0)
    {
    	if (! empty($group_id)) {
    		$result = $this->branchgroup_model->deleteBranchGroup($group_id);
    		if (! empty($result)) {
    			return redirect()->route('branch-group');
    		}
    	}
    }
}
