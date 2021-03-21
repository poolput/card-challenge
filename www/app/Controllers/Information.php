<?php
namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\AuthenticationModel;
use App\Models\CompanyModel;
use App\Models\BranchModel;
use App\Models\InformationModel;
use CodeIgniter\HTTP\Files\UploadedFile;

class Information extends BaseController
{

    public function __construct()
    {
        $this->users_model = new UsersModel();
        $this->authentication_model = new AuthenticationModel();
        $this->company_model = new CompanyModel();
        $this->branch_model = new BranchModel();
		    $this->information_model = new InformationModel();
        $this->data['incurrect_message'] = INCURRECT_MESSAGE;
        $this->data['incurrect_select_message'] = INCURRECT_SELECT_MESSAGE;
    }

    public function index()
    {
        $this->data['informations'] = $this->information_model->getCompanyList();

        return \Twig::instance()->display("pages/company/information/list.twig", $this->data);
    }

    public function add()
    {

        if (! empty($this->request->getPost())) {

            $company_logo_result = '';
            $company_mobile_logo_result = '';
            $post = $this->request->getPost();

            //getfile
            $company_logo = $this->request->getFile('company_logo');
            $company_mobile_logo = $this->request->getFile('company_mobile_logo');

            //upload_file
            if(!empty($company_logo->getClientName())){
              $company_logo_result = $this->information_model->uploadImage($company_logo,'pc');
              $post['company_logo'] = $company_logo_result;
            }
            if(!empty($company_mobile_logo->getClientName())){
              $company_mobile_logo_result = $this->information_model->uploadImage($company_mobile_logo,'mb');
              $post['company_mobile_logo'] = $company_mobile_logo_result;
            }

            $result = $this->information_model->add($post);

            if (!empty($result)) {
                return redirect()->route('information');
            } else {
                $this->data['warnging_exist'] = WARNING_NAME_EXIST;
            }
        }
        $this->data['countries'] = $this->information_model->getCountries();
        $this->data['provinces'] = $this->getProvinces();

        return \Twig::instance()->display("pages/company/information/form.twig", $this->data);
    }

    public function edit($company_id)
    {
        if (! empty($this->request->getPost())) {
            $company_logo_result = '';
            $company_mobile_logo_result = '';
            $post = $this->request->getPost();

            //getfile
            $company_logo = $this->request->getFile('company_logo');
            $company_mobile_logo = $this->request->getFile('company_mobile_logo');

            //upload_file
            if(!empty($company_logo->getClientName())){
              $company_logo_result = $this->information_model->uploadImage($company_logo,'pc');
              $post['company_logo'] = $company_logo_result;
            }
            if(!empty($company_mobile_logo->getClientName())){
              $company_mobile_logo_result = $this->information_model->uploadImage($company_mobile_logo,'mb');
              $post['company_mobile_logo'] = $company_mobile_logo_result;
            }

            $result = $this->information_model->edit($post);
            if (! empty($result)) {
                return redirect()->route('information');
            }
        }

        $this->data['type'] = 'edit';
        $this->data['company'] = $this->information_model->getCompanyData($company_id);
        $this->data['countries'] = $this->information_model->getCountries();
        $this->data['provinces'] = json_decode($this->getProvinces($this->data['company']['company_country']));

        return \Twig::instance()->display("pages/company/information/form.twig", $this->data);
    }


    public function delete($company_id = 0)
    {
        if (! empty($company_id)) {
            $result = $this->information_model->remove($company_id);
            if (! empty($result)) {
                return redirect()->route('information');
            }
        }
    }

    public function getProvinces($country_code = '0'){
      if(!empty($this->request->getPost())){
        $post = $this->request->getPost();
        $country_code = $post['company_country'];
      }

      if(!empty($country_code)){
        $result = $this->information_model->getProvinces($country_code);
        return JSON_ENCODE($result);
      }
    }
}
