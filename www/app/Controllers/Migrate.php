<?php
namespace App\Controllers;

use App\Models\MigrateModel;

class Migrate extends BaseController
{

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->migrate_model = new MigrateModel();
        $this->data['incurrect_message'] = INCURRECT_MESSAGE;
        $this->data['incurrect_select_message'] = INCURRECT_SELECT_MESSAGE;
    }

    public function group(){
      $groups = $this->migrate_model->getBranchGroupsFromBranch();
      $res = $this->migrate_model->processor($groups);

      return $res;
    }
}
