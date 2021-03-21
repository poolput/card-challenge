<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsersModel;
use App\Models\MigrateModel;
use App\Models\AuthenticationModel;
use App\Models\CompanyModel;
use App\Models\BranchModel;

class Migration extends Controller
{

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->users_model = new UsersModel();
        $this->authentication_model = new AuthenticationModel();
        $this->company_model = new CompanyModel();  
        
        $this->branch_model = new BranchModel();         
        $this->migrate_model = new MigrateModel();
    }

    public function staff()
    {
        $this->data["user_id"] = $this->session->get('user_id');        
        //$this->data["branch_id"] = $this->session->get('branch_id');        
        $this->data["staff"] = $this->migrate_model->getCountStaff();
 
        $this->migrate_model->addStaff( $this->data );
    }

    public function conversionRate()
    {
        $this->data["user_id"] = $this->session->get('user_id');        
        $this->data["conversion_rates"] = $this->migrate_model->getConversionRate();
        $this->migrate_model->addConversionRate( $this->data );
    }
}
