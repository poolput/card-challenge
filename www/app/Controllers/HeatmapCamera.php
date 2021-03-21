<?php
namespace App\Controllers;

use App\Models\HeatmapCameraModel;
use CodeIgniter\HTTP\Files\UploadedFile;

class HeatmapCamera extends BaseController
{

    public function __construct()
    {
		    $this->heatmapcamera_model = new HeatmapCameraModel();
        $this->data['incurrect_message'] = INCURRECT_MESSAGE;
        $this->data['incurrect_select_message'] = INCURRECT_SELECT_MESSAGE;
    }

    public function index()
    {
        $this->data['branchs'] = $this->heatmapcamera_model->getBranch(1);
        $this->data['cameras'] = $this->heatmapcamera_model->getCameraList();

        return \Twig::instance()->display("pages/heatmap/camera/list.twig", $this->data);
    }

    public function add()
    {
      if (! empty($this->request->getPost())) {
          $result = $this->heatmapcamera_model->add($this->request->getPost());

          if (!empty($result)) {
              return redirect()->route('heatmap-camera');
          }
      }
      $this->data['branchs'] = $this->heatmapcamera_model->getBranch(1);

      return \Twig::instance()->display("pages/heatmap/camera/form.twig", $this->data);
    }

    public function edit($camera_id)
    {
      if (! empty($this->request->getPost())) {
          $result = $this->heatmapcamera_model->edit($this->request->getPost());

          if (!empty($result)) {
              return redirect()->route('heatmap-camera');
          }
      }
      $this->data['camera'] = $this->heatmapcamera_model->getCamera($camera_id);
      $this->data['branchs'] = $this->heatmapcamera_model->getBranch(1);

      return \Twig::instance()->display("pages/heatmap/camera/form.twig", $this->data);
    }

    public function delete($camera_id){
      $result = $this->heatmapcamera_model->deleteCamera($camera_id);
      if (!empty($result)) {
          return redirect()->route('heatmap-camera');
      }
    }
};
