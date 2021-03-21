<?php
namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\AuthenticationModel;
use App\Models\CompanyModel;
use App\Models\BranchModel;
use App\Models\BranchGroupModel;
use App\Models\EventModel;
use App\Models\SummaryModel;
use App\Models\CameraModel;
use App\Models\StaffModel;
use App\Models\AnalysisModel;
use App\Models\DashboardModel;

class Api extends BaseController
{

    public function __construct()
    {
        $this->users_model = new UsersModel();
        $this->authentication_model = new AuthenticationModel();
        $this->company_model = new CompanyModel();
        $this->branch_model = new BranchModel();
        $this->branch_group_model = new BranchGroupModel();
        $this->event_model = new EventModel();
        $this->summary_model = new SummaryModel();
        $this->camera_model = new CameraModel();
        $this->staff_model = new StaffModel();
        $this->analysis_model = new AnalysisModel();
        $this->dashboard_model = new DashboardModel();
        $this->config = new \Config\App();
    }

    public function getLocation()
    {
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();
            $result = $this->branch_model->getLocation($post);
            if (empty($result)) {
                return false;
            }
            $html = '';
            $total = 0;
            foreach ($result as $province_name => $province) {
                $html .= '<span class="location-title">' . $province_name . '</span>';
                foreach ($province as $branch_name => $branch) {
                    $html .= '<span class="location-title pl-3">-' . $branch_name . '</span>';
                    $group = array();
                    $total = $total + 1;
                    foreach ($branch as $group_name) {
                        $group[] = $group_name['camera_group_name'];
                    }
                    $group_split = implode(', ', $group);
                    $html .= '<span class="location-title pl-5">' . $group_split . '</span>';
                }
            }
            $data['location'] = $html;
            $data['total'] = '<a class="btn pl-0" data-toggle="collapse" data-target="#collapse_location"><span><b>Location :</b>&nbsp; View All ' . $total . ' Branchs</span>';
            echo json_encode($data);
        } else {
            echo false;
        }
    }

    public function getTotalLocation()
    {
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();
            $result = $this->branch_model->getLocation($post);
            if (empty($result)) {
                return false;
            }
            $total = 0;
            foreach ($result as $province) {
                foreach ($province as $branch) {
                    $total ++;
                }
            }
            echo json_encode($total);
        } else {
            echo false;
        }
    }

    public function getPeriod()
    {
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();
            $result = prepareOption($post);
            $period = date('d F Y', strtotime($result['date_start'])) . ' - ' . date('d F Y', strtotime($result['date_end']));
            echo json_encode($period);
        } else {
            echo false;
        }
    }

    public function getSummaryStaff()
    {
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();

            $params_all = prepareOption($post);
            $params_staff = getOptionStaff($params_all);

            $branch = $this->branch_model->getBranchByCameraGroup($params_all['camera_group']);
            $params_staff['branch'] = implode(',', $branch);
            $result = $this->staff_model->getSummaryStaff($params_staff);

            echo json_encode($result);
        } else {
            echo false;
        }
    }

    public function getSummaryVisitor()
    {
        $result = array();
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();
            if (! empty($post['option_right']) && $post['option_right'] == 2) {
                if (! empty($post['option_event'])) {
                    foreach ($post['option_event'] as $event) {
                        $post['event_time'][] = $this->event_model->getEventPeriod($event);
                    }
                }
            }
            $params = prepareOption($post);
            $branch = $this->branch_model->getBranchByCameraGroup($params['camera_group']);
            $camera_name = $this->camera_model->getCameraByCameraGroup($params['camera_group'], $branch);
            if(!empty($branch)){
                $params['branch'] = implode(',', $branch);
                $params['camera_name'] = implode('","', $camera_name);
                $result = $this->summary_model->getVisitor($params);
            }

        }
        echo json_encode($result);
    }

    public function getSummaryLocation()
    {
        $result = array();
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();
            if (! empty($post['option_right']) && $post['option_right'] == 2) {
                if (! empty($post['option_event'])) {
                    foreach ($post['option_event'] as $event) {
                        $post['event_time'][] = $this->event_model->getEventPeriod($event);
                    }
                }
            }

            $params = prepareOption($post);
            $branch = $this->branch_model->getBranchByCameraGroup($params['camera_group']);
            $camera_name = $this->camera_model->getCameraByCameraGroup($params['camera_group'], $branch);
            if(!empty($branch)){
                $params['branch'] = implode(',', $branch);
                $params['camera_name'] = implode(',', $camera_name);

                $result = $this->summary_model->getLocation($params);
            }

        }
        return json_encode($result);
    }

    public function getSummaryDensityDate()
    {
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();
            if (! empty($post['option_right']) && $post['option_right'] == 2) {
                if (! empty($post['option_event'])) {
                    foreach ($post['option_event'] as $event) {
                        $post['event_time'][] = $this->event_model->getEventPeriod($event);
                    }
                }
            }

            $params = prepareOption($post);
            $branch = $this->branch_model->getBranchByCameraGroup($params['camera_group']);
            $camera_name = $this->camera_model->getCameraByCameraGroup($params['camera_group'], $branch);

            $params['branch'] = implode(',', $branch);
            $params['camera_name'] = implode(',', $camera_name);

            $result = $this->summary_model->getDensityDate($params);

            return json_encode($result);
        } else {
            echo false;
        }
    }

    public function getSummaryDensityLocation()
    {
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();
            if (! empty($post['option_right']) && $post['option_right'] == 2) {
                if (! empty($post['option_event'])) {
                    foreach ($post['option_event'] as $event) {
                        $post['event_time'][] = $this->event_model->getEventPeriod($event);
                    }
                }
            }
            $params = prepareOption($post);

            $branch = $this->branch_model->getBranchByCameraGroup($params['camera_group']);
            $camera_name = $this->camera_model->getCameraByCameraGroup($params['camera_group'], $branch);

            $params['branch'] = implode(',', $branch);
            $params['camera_name'] = implode(',', $camera_name);

            $result = $this->summary_model->getDensityLocation($params);
            $result['color']['lessthan'] = $this->config->densityLessthan;
            $result['color']['between'] = $this->config->densityBetween;
            $result['color']['greaterthan'] = $this->config->densityGreaterthan;

            return json_encode($result);
        } else {
            echo false;
        }
    }

    public function getWeek()
    {
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();

            $company_id = $this->session->get('company_id');
            $this->data['format_date'] = self::loadFormatDate($company_id);
            if (empty($this->data['format_date'])) {
                $week_start = 1;
            } else {
                $week_start = $this->data['format_date']['weekStart'];
            }

            $this->data['week_format'] = getWeekByDayStart($week_start, $post['year']);

            if (empty($this->data['week_format'])) {
                return false;
            }
            echo json_encode($this->data['week_format']);
        } else {
            echo false;
        }
    }

    public function getAnalysisComparison()
    {
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();

            $params = prepareOptionComparison($post);

            $branch = $this->branch_model->getBranchByCameraGroup($params['camera_group']);
            $camera_name = $this->camera_model->getCameraByCameraGroup($params['camera_group'], $branch);

            $params['branch'] = implode(',', $branch);
            $params['camera_name'] = implode(',', $camera_name);

            $result = $this->analysis_model->getComparison($params);

            return json_encode($result);
        } else {
            echo false;
        }
    }

    public function getAnalysisTimeInside()
    {
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();

            $params = prepareOption($post);

            $branch = $this->branch_model->getBranchByCameraGroup($params['camera_group']);
            $camera_name = $this->camera_model->getCameraByCameraGroup($params['camera_group'], $branch);

            $params['branch'] = implode(',', $branch);
            $params['camera_name'] = implode(',', $camera_name);
            $params['config_range'] = $this->config->timeInsideRange;

            $result = $this->analysis_model->getTimeInside($params);

            return json_encode($result);
        } else {
            echo false;
        }
    }

    public function getAnalysisConversionRate()
    {
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();
            if (! empty($post['option_right']) && $post['option_right'] == 2) {
                if (! empty($post['option_event'])) {
                    foreach ($post['option_event'] as $event) {
                        $post['event_time'][] = $this->event_model->getEventPeriod($event);
                    }
                }
            }
            $company_id = $this->session->get('company_id');
            $params = prepareOption($post);
            $branch = $this->branch_model->getBranchByCameraGroup($params['camera_group']);
            $camera_name = $this->camera_model->getCameraByCameraGroup($params['camera_group'], $branch);
            $params['branch'] = '';
            $this->data['format_date'] = self::loadFormatDate($company_id);

            if (empty($this->data['format_date'])) {
                $params['config_week_start'] = 1;
            } else {
                $params['config_week_start'] = $this->data['format_date']['weekStart'];
            }
            $params['camera_name'] = implode('","', $camera_name);

            $result = $this->analysis_model->getConversionRate($params, $branch);

            echo json_encode($result);
        } else {
            echo false;
        }
    }

    public function getBranchBox()
    {
        $branch_data = array();
        if (! empty($this->request->getPost())) {

            $post = $this->request->getPost();
            foreach ($post['option_branch'] as $key => $branch_id) {
                $branch_data[] = $this->branch_model->getBranchData($branch_id);
            }
        }
        echo json_encode($branch_data);
    }

    public function getAnalysisConversionRateSummary()
    {
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();
            if (! empty($post['option_right']) && $post['option_right'] == 2) {
                if (! empty($post['option_event'])) {
                    foreach ($post['option_event'] as $event) {
                        $post['event_time'][] = $this->event_model->getEventPeriod($event);
                    }
                }
            }
            $company_id = $this->session->get('company_id');
            $params = prepareOption($post);
            $branch = $this->branch_model->getBranchByCameraGroup($params['camera_group']);
            $camera_name = $this->camera_model->getCameraByCameraGroup($params['camera_group'], $branch);
            $params['branch'] = '';
            $this->data['format_date'] = self::loadFormatDate($company_id);

            if (empty($this->data['format_date'])) {
                $params['config_week_start'] = 1;
            } else {
                $params['config_week_start'] = $this->data['format_date']['weekStart'];
            }
            $params['camera_name'] = implode('","', $camera_name);

            $result = $this->analysis_model->getConversionRateSummary($params, $branch);

            echo json_encode($result);
        } else {
            echo false;
        }
    }

    public function getSummaryPassing()
    {
        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();
            if (! empty($post['option_right']) && $post['option_right'] == 2) {
                if (! empty($post['option_event'])) {
                    foreach ($post['option_event'] as $event) {
                        $post['event_time'][] = $this->event_model->getEventPeriod($event);
                    }
                }
            }
            $company_id = $this->session->get('company_id');
            $prepare = prepareOption($post);
            $params = array();

            $branch = $this->branch_model->getBranchByCameraGroup($prepare['camera_group']);
            $params['branch'] = implode(",", $branch);
            $params['camera_group'] = $prepare['camera_group'];
            $params['category_type'] = $prepare['category_type'];
            $this->data['format_date'] = self::loadFormatDate($company_id);
            if (empty($this->data['format_date'])) {
                $params['config_week_start'] = 1;
            } else {
                $params['config_week_start'] = $this->data['format_date']['weekStart'];
            }
            $params['date_start'] = $prepare['date_start'];
            $params['date_end'] = $prepare['date_end'];
            $params['time_start'] = $prepare['time_start'];
            $params['time_end'] = $prepare['time_end'];
            $params['recurrence'] = $prepare['recurrence'];
            $params['event_id'] = $prepare['event_id'];

            $result = $this->summary_model->getPassing($params);

            echo json_encode($result);
        } else {
            echo false;
        }
    }

    public function getVisitor7Days()
    {
        $result = array();
        $post = $this->request->getPost();
        $prepare = prepareOption($post);
        $branch = $this->branch_model->getBranchByCameraGroup($prepare['camera_group']);
       
        if(!empty($branch)){
            $params['branch_id'] = implode(",", $branch);
            $params['_date'] = date('Y-m-d');
            $result = $this->dashboard_model->getVisitor7Days($params);
        }

        echo json_encode($result);
    }

    public function getVisitorTopEvent()
    {
        $result = array();
        $post = $this->request->getPost();
        $prepare = prepareOption($post);
        $branch = $this->branch_model->getBranchByCameraGroup($prepare['camera_group']);
        
        if(!empty($branch)){
            $params['branch_id'] = implode(",", $branch);
            $params['_date_ago'] = $post['cfgday'];
            $params['_limit'] = 10;
            $result = $this->dashboard_model->getVisitorTopEvent($params);
        }

        echo json_encode($result);
    }

    public function getDayPart()
    {
        $result = array();
        $params = array();

        if (! empty($this->request->getPost())) {
            $post = $this->request->getPost();
            
            $prepare = prepareOption($post);
            

            $branch = $this->branch_model->getBranchByCameraGroup($prepare['camera_group']);

            if(!empty($branch)){
                $params['branch'] = implode(',', $branch);
                $params['date_start'] = $prepare['date_start'];
                $params['date_end'] = $prepare['date_end'];
                $params['time_start'] = $prepare['time_start'];
                $params['time_end'] = $prepare['time_end'];
                $params['recurrence'] = $prepare['recurrence'];
                $params['entrance'] = $prepare['entrance'];
                
                $result = $this->summary_model->getDayPart($params);
            }

        }
        return json_encode($result);
    }
}
