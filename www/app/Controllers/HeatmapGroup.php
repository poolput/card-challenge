<?php
namespace App\Controllers;

use App\Models\HeatmapGroupModel;
use CodeIgniter\HTTP\Files\UploadedFile;

class HeatmapGroup extends BaseController
{

    public function __construct()
    {
		    $this->heatmapgroup_model = new HeatmapGroupModel();
        $this->data['incurrect_message'] = INCURRECT_MESSAGE;
        $this->data['incurrect_select_message'] = INCURRECT_SELECT_MESSAGE;
    }

    public function index()
    {
        $this->data['branchs'] = $this->heatmapgroup_model->getBranch(1);
        $this->data['camera_groups'] = $this->heatmapgroup_model->getCameraGroupList();

        return \Twig::instance()->display("pages/heatmap/group/list.twig", $this->data);
    }

    public function add()
    {

        if (! empty($this->request->getPost())) {

            $result = $this->heatmapgroup_model->add($this->request->getPost());

            if (!empty($result)) {
                return redirect()->route('heatmap-group');
            }
        }
        $this->data['branchs'] = $this->heatmapgroup_model->getBranch(1);

        return \Twig::instance()->display("pages/heatmap/group/form.twig", $this->data);
    }

    public function edit($group_id)
    {
        if (! empty($this->request->getPost())) {

          $result = $this->heatmapgroup_model->edit($this->request->getPost());

            if (! empty($result)) {
                return redirect()->route('heatmap-group');
            }
        }

        $this->data['type'] = 'edit';
        $this->data['branchs'] = $this->heatmapgroup_model->getBranch(1);
        $this->data['group'] = $this->heatmapgroup_model->getHeatmapGroup($group_id);
        $this->data['all_cameras'] = $this->heatmapgroup_model->getCamera($this->data['group']['branch_id']);
        $this->data['selected_cameras'] = $this->heatmapgroup_model->getCameraInHeatmapGroup($group_id);

        return \Twig::instance()->display("pages/heatmap/group/form.twig", $this->data);
    }


    public function delete($group_id = 0)
    {
        if (! empty($group_id)) {
            $resultGroup = $this->heatmapgroup_model->deleteGroup($group_id);
            $resultRalation = $this->heatmapgroup_model->deleteRelation($group_id);
            if (! empty($resultGroup) && !empty($resultRalation)) {
                return redirect()->route('heatmap-group');
            }
        }
    }

    public function getCameraByBranch(){
      if(!empty($this->request->getPost())){
        $branch_id = $this->request->getPost()['branch_id'];

        if(!empty($branch_id)){
          $result = $this->heatmapgroup_model->getCamera($branch_id);
          return JSON_ENCODE($result);
        }
      }
    }
}
