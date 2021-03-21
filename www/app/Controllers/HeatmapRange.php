<?php
namespace App\Controllers;

use App\Models\HeatmapRangeModel;
use CodeIgniter\HTTP\Files\UploadedFile;

class HeatmapRange extends BaseController
{

    public function __construct()
    {
		    $this->heatmaprange_model = new HeatmapRangeModel();
        $this->data['incurrect_message'] = INCURRECT_MESSAGE;
        $this->data['incurrect_select_message'] = INCURRECT_SELECT_MESSAGE;
    }

    public function index()
    {
        $this->data['branchs'] = $this->heatmaprange_model->getBranch();

        if (! empty($this->request->getPost())) {
          $result = $this->heatmaprange_model->saveRange($this->request->getPost());
        }

        return \Twig::instance()->display("pages/heatmap/range/form.twig", $this->data);
    }

    public function getRangeByBranch(){
      if (! empty($this->request->getPost())) {
        $result = $this->heatmaprange_model->getRange($this->request->getPost()['branch_id']);

        return json_encode($result);
      }
    }
}
