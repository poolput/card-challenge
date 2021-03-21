<?php
namespace App\Controllers;

class Uploads extends BaseController
{

    public function __construct()
    {
    
    }

    public function ajaxUploadFile($case)
    {
        $destination = "";
        $old_name = "";
        $new_name = "";
        $image_data = array();
        
        if($upload_files = $this->request->getFiles())
        {
           foreach($upload_files as $img)
           {
                if ($img->isValid() && !$img->hasMoved())
                {
                    switch ($case) {
                        case 'floorplan':
                            $destination = WRITEPATH.'uploads/temp';
                            $old_name = $img->getName();
                            $new_name = $img->getRandomName();
                            $image_data[$old_name] = array(
                                                        'name' => $new_name,
                                                        'type' => $img->getClientMimeType(),
                                                        'size' => $img->getSize(),
                                                        'path' => 'uploads/temp/'.$new_name
                                                    );

                            break;
                           
                        default:
                            $destination = WRITEPATH.'uploads/temp';
                            $old_name = "";
                            $new_name = "";
                            $image_data = array();

                            break;
                    }

                    
                    $img->move($destination, $new_name);
                }
            }
        }

        echo json_encode($image_data);
    }

}
