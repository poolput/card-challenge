<?php
namespace App\Controllers;

use App\Models\ConfigurationModel;

class Configuration extends BaseController
{

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->config_model = new ConfigurationModel();

        $this->data['incurrect_message'] = INCURRECT_MESSAGE;
        $this->data['incurrect_select_message'] = INCURRECT_SELECT_MESSAGE;
    }

    public function config(){
        $this->data['session'] = $this->config_model->getSession();
        $this->data['date_formats'] = $this->config_model->getDateFormats();
        $this->data['time_formats'] = $this->config_model->getTimeFormats();
        $this->data['weeks'] = $this->config_model->getWeekStart();
        $this->data['setting'] = $this->config_model->getSettingChart();
        $this->data['companies'] = $this->config_model->getCompanies();
        $this->data['company_data'] = $this->config_model->getCompany();


        if(!empty($this->request->getPost())){
          $post = $this->request->getPost();
          $this->config_model->add($post);
          unset($post);
          return redirect()->to('configuration'); 
        }

        return \Twig::instance()->display("pages/configuration/form.twig",$this->data);
    }

    public function changeCompany(){
      if (! empty($this->request->getPost())) {
          $result = $this->config_model->changeCompany($this->request->getPost());

          if (!empty($result)) {
              return json_encode($result);
          }
      }
    }
}
