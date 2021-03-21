<?php
namespace App\Controllers;

use App\Models\BranchModel;
use App\Models\CompanyModel;

class Branch extends BaseController
{

    public function __construct()
    {
        $this->branch_model = new BranchModel();
        $this->company_model = new CompanyModel();
        $this->data['incurrect_message'] = INCURRECT_MESSAGE;
    }

    public function index()
    {
        $this->data['branchs'] = $this->branch_model->getBranchList();
    
        return \Twig::instance()->display("pages/company/branchs/list.twig",$this->data);
    }

    public function ajaxGetBranch()
    {
        $result = array();

        if (! empty($this->request->getPost())) {
            $params = $this->request->getPost();
            $result = $this->branch_model->getBranch($params);

            if (! empty($result)) {
                switch ($params['type']) {

                    case 'select':
                        $option = '<option value="">---select---</option>';
                        foreach ($result as $value) {

                            $option .= '<option value="' . $value['branch_id'] . '">' . $value['branch_name'] . '</option>';
                        }
                        break;
                    case 'checkbox':
                        $option = '<option value="">---select---</option>';
                        foreach ($result as $value) {

                            $option .= '<option value="' . $value['branch_id'] . '">' . $value['branch_name'] . '</option>';
                        }
                        break;
                }
            }
        }

        echo $option;
    }

    public function add()
    {
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();
            if(empty($post['module_heatmap'])){
               $post['module_heatmap'] = '0';
            }
            $result = $this->branch_model->add($post);
            if (! empty($result)) {
                return redirect()->route('branch');
            } 
        }
        $this->data['companies'] = $this->company_model->getCompany();
        $this->data['provinces'] = $this->branch_model->getProvinces();
        $this->data['countries'] = $this->branch_model->getCountries();

        return \Twig::instance()->display("pages/company/branchs/form.twig", $this->data);
    }

    public function edit($branch_id)
    {
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();
            if(empty($post['module_heatmap'])){
               $post['module_heatmap'] = '0';
            }
            $result = $this->branch_model->edit($post);
            if (! empty($result)) {
                return redirect()->route('branch');
            } 
        }

        $this->data['branch'] = $this->branch_model->getBranchData($branch_id);
        $this->data['type'] = 'edit';
        $this->data['companies'] = $this->company_model->getCompany();
        $this->data['provinces'] = $this->branch_model->getProvinces();
        $this->data['countries'] = $this->branch_model->getCountries();

        return \Twig::instance()->display("pages/company/branchs/form.twig", $this->data);
    }

    public function delete($branch_id){
        if (! empty($branch_id)) {
            $result = $this->branch_model->remove($branch_id);
            return redirect()->route('branch');
        }
    }

    

}
