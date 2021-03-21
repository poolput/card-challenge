<?php
namespace App\Models;

use CodeIgniter\Model;
use App\Models\SummaryModel;
use App\Models\BranchModel;

class AnalysisModel extends Model
{

    public function __construct()
    {
        parent::__construct();

        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
        $this->summary_model = new SummaryModel();
        $this->branch_model = new BranchModel();
    }

    public function getConversionRate($params = array(), $total_branch, $is_summary = false)
    {
        $result = array();

        if (! empty($total_branch)) {
            foreach ($total_branch as $branch_key => $branch_id) {
                $params['branch'] = $branch_id;

                $arg = implode("','", $params);

                $query = "CALL getConversionRate('" . $arg . "');";
                $query = $this->db->query($query);
                $rows = $query->getResult();
                $category = array();
                $in = array();
                $sale = array();
                $receipt = array();
                $percentage = array();

                switch ($params['category_type']) {
                    // ---display type---//
                    // 1.hour
                    // 2.date
                    // 3.week
                    // 4.month
                    // 5.quarter
                    // 6.year
                    case 1:
                        // hour
                        for ($i = 0; $i < 24; $i ++) {
                            $category[$i] = sprintf("%'.02d", $i) . ':00';
                            $in[$i] = 0;
                            $sale[$i] = 0;
                            $receipt[$i] = 0;
                            $percentage[$i] = 0;
                            foreach ($rows as $row) {
                                if ($row->category == $i) {
                                    $in[$i] = $row->totalIn;
                                    $sale[$i] = round($row->sale_amount, 2);
                                    $receipt[$i] = $row->receipt;
                                    if (empty($row->totalIn)) {
                                        $percentage[$i] = 0;
                                    } else {
                                        $percentage[$i] = round(($row->receipt / $row->totalIn) * 100, 2);
                                    }
                                }
                            }
                        }
                        break;
                    case 2:
                        // date
                        foreach ($rows as $i => $row) {
                            $display_date = date('d F Y (D)', strtotime($row->category));
                            $category[$i] = $display_date;
                            $in[$i] = $row->totalIn;
                            $sale[$i] = round($row->sale_amount, 2);
                            $receipt[$i] = $row->receipt;
                            if (empty($row->totalIn)) {
                                $percentage[$i] = 0;
                            } else {
                                $percentage[$i] = round(($row->receipt / $row->totalIn) * 100, 2);
                            }
                        }
                        break;
                    case 3:
                        // week
                        foreach ($rows as $i => $row) {
                            $week = date('W', strtotime("+6 day", strtotime($row->week_date)));
                            $cat = 'Week (' . (int) $week . ') ' . date('d M Y', strtotime($row->week_date)) . ' - ' . date('d M Y', strtotime($row->week_date . " +6 day"));
                            $category[$i] = $cat;
                            $in[$i] = $row->totalIn;
                            $sale[$i] = round($row->sale_amount, 2);
                            $receipt[$i] = $row->receipt;
                            if (empty($row->totalIn)) {
                                $percentage[$i] = 0;
                            } else {
                                $percentage[$i] = round(($row->receipt / $row->totalIn) * 100, 2);
                            }
                        }
                        break;
                    case 4:
                        // month
                        foreach ($rows as $i => $row) {
                            $month_name = date('F', strtotime($row->cnt_year . '-' . $row->cnt_month . '-01'));
                            $category[$i] = $month_name . ' ' . $row->cnt_year;
                            $in[$i] = $row->totalIn;
                            $sale[$i] = round($row->sale_amount, 2);
                            $receipt[$i] = $row->receipt;
                            if (empty($row->totalIn)) {
                                $percentage[$i] = 0;
                            } else {
                                $percentage[$i] = round(($row->receipt / $row->totalIn) * 100, 2);
                            }
                        }
                        break;
                    case 5:
                        // quarter
                        foreach ($rows as $i => $row) {
                            $month_name = date('F', strtotime($row->cnt_year . '-' . $row->cnt_quarter . '-01'));
                            $category[$i] = 'Quarter' . ($i + 1) . '-' . $row->cnt_year;
                            $in[$i] = $row->totalIn;
                            $sale[$i] = round($row->sale_amount, 2);
                            $receipt[$i] = $row->receipt;
                            if (empty($row->totalIn)) {
                                $percentage[$i] = 0;
                            } else {
                                $percentage[$i] = round(($row->receipt / $row->totalIn) * 100, 2);
                            }
                        }
                        break;
                    case 6:
                        // year
                        foreach ($rows as $i => $row) {
                            $category[$i] = $row->cnt_year;
                            $in[$i] = $row->totalIn;
                            $sale[$i] = round($row->sale_amount, 2);
                            $receipt[$i] = $row->receipt;
                            if (empty($row->totalIn)) {
                                $percentage[$i] = 0;
                            } else {
                                $percentage[$i] = round(($row->receipt / $row->totalIn) * 100, 2);
                            }
                        }
                        break;
                    default:
                    // empty
                }

                if ($is_summary) {
                    $result[$branch_id]['categories'] = $category;
                    $result[$branch_id]['data_in'] = $in;
                    $result[$branch_id]['data_sale'] = $sale;
                    $result[$branch_id]['data_receipt'] = $receipt;
                    $result[$branch_id]['data_percentage'] = $percentage;
                } else {
                    $result[$branch_id]['categories'] = implode(',', $category);
                    $result[$branch_id]['data_in'] = implode(',', $in);
                    $result[$branch_id]['data_sale'] = implode(',', $sale);
                    $result[$branch_id]['data_receipt'] = implode(',', $receipt);
                    $result[$branch_id]['data_percentage'] = implode(',', $percentage);
                }
            }
        }

        return $result;
    }

    public function getConversionRateSummary($params = array(), $total_branch)
    {
        $result = array();

        $result_data = $this->getConversionRate($params, $total_branch, true);

        $categories = array();
        $sum_in = array();
        $sum_receipt = array();
        $sum_sale = array();
        $sum_percentage = array();

        if (! empty($result_data)) {
            foreach ($result_data as $branch_id => $branch_data) {
                $categories[] = $this->branch_model->getBranchData($branch_id)['branch_name'];
                $sum_in[] = array_sum($branch_data['data_in']);
                $sum_receipt[] = array_sum($branch_data['data_receipt']);
                $sum_sale[] = array_sum($branch_data['data_sale']);
                $sum_percentage[] = (empty(array_sum($branch_data['data_in']))) ? 0 : round((array_sum($branch_data['data_receipt']) / array_sum($branch_data['data_in'])) * 100, 2);
            }
        }

        $result['categories'] = implode(',', $categories);
        $result['data_in'] = implode(',', $sum_in);
        $result['data_receipt'] = implode(',', $sum_receipt);
        $result['data_sale'] = implode(',', $sum_sale);
        $result['data_percentage'] = implode(',', $sum_percentage);

        return $result;
    }

    public function getComparison($params = array())
    {
        $arg = implode("','", $params);

        $query = "CALL getComparison('" . $arg . "');";
        $query = $this->db->query($query);
        $rows = $query->getResult();
        $data = array();
        $result = array();
        $total = 0;
        $total_in = 0;
        $result['table'] = null;
        $series = array();
        $in = array();
        $category = array();
        $branch_total = array();

        switch ($params['category_type']) {
            case 1:
            case 2:
                // hour and date
                foreach ($rows as $row) {
                    $data[$row->branch_id][$row->category][$row->columns] = array(
                        "location" => empty($row->location) ? '' : $row->location,
                        "category" => empty($row->category) ? '' : $row->category,
                        "columns" => empty($row->columns) ? '' : $row->columns,
                        "in" => $row->totalIn,
                        "out" => $row->totalOut,
                        "branch_id" => $row->branch_id
                    );
                    $branch_total[$row->branch_id][] = $row->totalIn;
                }
                $branch_id = 0;
                $_location = 0;

                foreach ($data as $key => $value) {

                    $total = array_sum($branch_total[$key]);
                    $_date = 0;
                    $branch_name = '';
                    foreach ($value as $k => $v) {

                        $result['table'][$_location]['date'][$_date]['name'] = date('d F Y', strtotime($k));
                        $total_in = 0;
                        for ($i = 0; $i < 24; $i ++) {
                            $category[$i] = sprintf("%'.02d", $i) . '.00';
                            $result['table'][$_location]['date'][$_date]['column'][$i] = array(
                                "category" => sprintf("%'.02d", $i) . '.00',
                                "in" => 0,
                                "out" => 0
                            );
                            $in[$key][$i] = 0;
                            if (! empty($v[$i]['columns']) && $v[$i]['columns'] == $i) {
                                $total_in = $total_in + $v[$i]['in'];
                                $percent = setPercent($total_in, $total, 2);
                                $result['table'][$_location]['date'][$_date]['column'][$i] = array(
                                    "category" => sprintf("%'.02d", $i) . '.00',
                                    "in" => (int) $v[$i]['in'],
                                    "out" => (int) $v[$i]['out']
                                );
                                $branch_id = $v[$i]['branch_id'];
                                $branch_name = $v[$i]['location'];
                                $in[$key][$i] = (int) $v[$i]['in'];
                            }
                        }
                        $percent = setPercent($total_in, $total, 2);
                        $result['table'][$_location]['date'][$_date]['percent'] = $percent;
                        $result['table'][$_location]['date'][$_date]['total_in'] = number_format($total_in);
                        $result['table'][$_location]['date'][$_date]['location'] = $key;
                        $result['table'][$_location]['branch_id'] = $branch_id;
                        $result['table'][$_location]["location"] = $branch_name;
                        $option[$k] = array(
                            'name' => $k,
                            'marker' => array(
                                'symbol' => 'circle'
                            ),
                            'data' => $in[$key]
                        );
                        $_date ++;
                    }
                    $series[$branch_id] = json_encode($option);
                    $summary = $this->summary_model->getRowTotal($result['table'][$_location]['date'], $params['category_type']);
                    $result['table'][$_location]['total'] = array(
                        "location" => "Total",
                        "total_in" => number_format($summary['sum_in']),
                        "percent" => ""
                    );
                    $result['table'][$_location]['total'] = $result['table'][$_location]['total'] + $summary['sum'];
                    $_location ++;
                }
                break;
            case 3:
                // week
                foreach ($rows as $row) {

                    $next_day = date('d M Y', strtotime(' +6 day', strtotime($row->actual_first_date)));
                    $cat = 'Week (' . $row->category . ') ' . date('d M Y', strtotime($row->actual_first_date)) . ' - ' . $next_day;

                    $head = date('l', strtotime($row->columns));
                    $data[$row->branch_id][$row->category][$row->columns] = array(
                        "location" => empty($row->location) ? '' : $row->location,
                        "category" => $head,
                        "columns" => empty($row->columns) ? '' : $row->columns,
                        "week" => $cat,
                        "in" => $row->totalIn,
                        "out" => $row->totalOut,
                        "branch_id" => $row->branch_id
                    );
                    $branch_total[$row->branch_id][] = $row->totalIn;

                    $category[$head] = $head;
                }
                $branch_id = 0;
                $_location = 0;

                foreach ($data as $key => $value) {

                    $_date = 0;
                    $branch_name = '';
                    $total = array_sum($branch_total[$key]);
                    foreach ($value as $k => $val) {
                        $week = '';
                        $total_in = 0;
                        for ($i = 0; $i < 7; $i ++) {

                            $in[$key][$i] = 0;
                            $reset_value = array_values($val)[0];
                            $week_start = date("d-m-Y", strtotime('monday this week', strtotime($reset_value['columns'])));
                            $next_day = date('d M Y', strtotime(' +6 day', strtotime($week_start)));

                            $cat = 'Week (' . $k . ') ' . date('d M Y', strtotime($week_start)) . ' - ' . $next_day;
                            $category[$i] = $k;
                            $result['table'][$_location]['date'][$_date]['column'][$i] = array(
                                "category" => $cat,
                                "in" => 0,
                                "out" => 0
                            );

                            foreach ($val as $index => $v) {
                                $week = $v['week'];
                                $result['table'][$_location]['date'][$_date]['name'] = $week;

                                $day = date('N', strtotime($index));
                                if (! empty($day) && $day == $i + 1) {
                                    $total_in = $total_in + $v['in'];
                                    $percent = setPercent($total_in, $total, 2);
                                    $result['table'][$_location]['date'][$_date]['column'][$i] = array(
                                        "category" => $v['category'],
                                        "in" => (int) $v['in'],
                                        "out" => (int) $v['out']
                                    );
                                    $branch_id = $v['branch_id'];
                                    $branch_name = $v['location'];
                                    $in[$key][$i] = (int) $v['in'];
                                }
                            }
                        }

                        $percent = setPercent($total_in, $total, 2);
                        $result['table'][$_location]['date'][$_date]['percent'] = $percent;
                        $result['table'][$_location]['date'][$_date]['total_in'] = number_format($total_in);
                        $result['table'][$_location]['date'][$_date]['location'] = $key;
                        $result['table'][$_location]['branch_id'] = $branch_id;
                        $result['table'][$_location]["location"] = $branch_name;

                        $option[$k] = array(
                            'name' => $week,
                            'marker' => array(
                                'symbol' => 'circle'
                            ),
                            'data' => $in[$key]
                        );
                        $_date ++;
                    }

                    $series[$branch_id] = json_encode($option);
                    $summary = $this->summary_model->getRowTotal($result['table'][$_location]['date'], $params['category_type']);
                    $result['table'][$_location]['total'] = array(
                        "location" => "Total",
                        "total_in" => number_format($summary['sum_in']),
                        "percent" => ""
                    );
                    $result['table'][$_location]['total'] = $result['table'][$_location]['total'] + $summary['sum'];
                    $_location ++;
                }
                break;
            case 4:
                // month
                $max_date = 28;
                foreach ($rows as $row) {
                    $month = date('F Y', strtotime($row->year . '-' . $row->category . '-01'));
                    $max_date_db = date("t", strtotime($row->year . '-' . $row->category . '-01'));
                    if ($max_date < $max_date_db) {
                        $max_date = $max_date_db;
                    }
                    $data[$row->branch_id][$row->category][$row->columns] = array(
                        "location" => empty($row->location) ? '' : $row->location,
                        "category" => empty($row->category) ? '' : $row->category,
                        "columns" => empty($row->columns) ? '' : $row->columns,
                        "month" => $month,
                        "in" => $row->totalIn,
                        "out" => $row->totalOut,
                        "branch_id" => $row->branch_id
                    );
                    $branch_total[$row->branch_id][] = $row->totalIn;
                }

                $branch_id = 0;
                $_location = 0;
                foreach ($data as $key => $value) {

                    $_date = 0;
                    $branch_name = '';
                    $total = array_sum($branch_total[$key]);
                    foreach ($value as $k => $val) {
                        $i = 0;
                        $month = '';
                        $total_in = 0;
                        foreach ($val as $v) {
                            $head = date('d F Y (D)', strtotime($v['columns']));
                            $category[] = $head;
                            $in[$key][$i] = 0;
                            if (! empty($v)) {
                                $total_in = $total_in + $v['in'];
                                $percent = setPercent($total_in, $total, 2);
                                $result['table'][$_location]['date'][$_date]['column'][$i] = array(
                                    "category" => date('d', strtotime($v['columns'])),
                                    "in" => (int) $v['in'],
                                    "out" => (int) $v['out']
                                );
                                $branch_id = $v['branch_id'];
                                $branch_name = $v['location'];
                                $in[$key][$i] = (int) $v['in'];
                            }
                            $month = $v['month'];
                            $result['table'][$_location]['date'][$_date]['name'] = $month;
                            $i ++;
                        }
                        if ($i < $max_date) {
                            for ($ii = $i; $ii < $max_date; $ii ++) {
                                $result['table'][$_location]['date'][$_date]['column'][$ii] = array(
                                    "category" => $ii + 1,
                                    "in" => 0,
                                    "out" => 0
                                );
                            }
                        }

                        $percent = setPercent($total_in, $total, 2);
                        $result['table'][$_location]['date'][$_date]['percent'] = $percent;
                        $result['table'][$_location]['date'][$_date]['total_in'] = number_format($total_in);
                        $result['table'][$_location]['date'][$_date]['location'] = $key;
                        $result['table'][$_location]['branch_id'] = $branch_id;
                        $result['table'][$_location]["location"] = $branch_name;

                        $option[$k] = array(
                            'name' => $month,
                            'marker' => array(
                                'symbol' => 'circle'
                            ),
                            'data' => $in[$key]
                        );
                        $_date ++;
                    }
                    $series[$branch_id] = json_encode($option);
                    $summary = $this->summary_model->getRowTotal($result['table'][$_location]['date'], $params['category_type']);
                    $result['table'][$_location]['total'] = array(
                        "location" => "Total",
                        "total_in" => number_format($summary['sum_in']),
                        "percent" => ""
                    );
                    $result['table'][$_location]['total'] = $result['table'][$_location]['total'] + $summary['sum'];
                    $_location ++;
                }

                break;
            case 5:
                // quarter
                foreach ($rows as $row) {
                    $month = date('F Y', strtotime($row->year . '-' . $row->columns . '-01'));
                    $data[$row->branch_id][$row->category][$row->columns] = array(
                        "location" => empty($row->location) ? '' : $row->location,
                        "category" => empty($row->category) ? '' : $row->category,
                        "columns" => empty($row->columns) ? '' : $row->columns,
                        "month" => $month,
                        "year" => $row->year,
                        "in" => $row->totalIn,
                        "out" => $row->totalOut,
                        "branch_id" => $row->branch_id
                    );
                    $branch_total[$row->branch_id][] = $row->totalIn;
                }
                $branch_id = 0;
                $_location = 0;
                foreach ($data as $key => $value) {
                    $total = array_sum($branch_total[$key]);
                    $_date = 0;
                    $branch_name = '';
                    foreach ($value as $k => $val) {
                        $i = 0;
                        $month = '';
                        $total_in = 0;
                        foreach ($val as $v) {
                            $category[] = $i + 1;
                            $in[$key][$i] = 0;
                            if (! empty($v)) {
                                $total_in = $total_in + $v['in'];
                                $percent = setPercent($total_in, $total, 2);
                                $result['table'][$_location]['date'][$_date]['column'][$i] = array(
                                    "category" => $i + 1,
                                    "in" => (int) $v['in'],
                                    "out" => (int) $v['out']
                                );
                                $branch_id = $v['branch_id'];
                                $branch_name = $v['location'];
                                $in[$key][$i] = (int) $v['in'];
                            }
                            $month = 'Quarter' . $k . '-' . $v['year'];
                            $result['table'][$_location]['date'][$_date]['name'] = $month;
                            $i ++;
                        }
                        $percent = setPercent($total_in, $total, 2);
                        $result['table'][$_location]['date'][$_date]['percent'] = $percent;
                        $result['table'][$_location]['date'][$_date]['total_in'] = number_format($total_in);
                        $result['table'][$_location]['date'][$_date]['location'] = $key;
                        $result['table'][$_location]['branch_id'] = $branch_id;
                        $result['table'][$_location]["location"] = $branch_name;

                        $option[$k] = array(
                            'name' => $month,
                            'marker' => array(
                                'symbol' => 'circle'
                            ),
                            'data' => $in[$key]
                        );
                        $_date ++;
                    }
                    $series[$branch_id] = json_encode($option);
                    $summary = $this->summary_model->getRowTotal($result['table'][$_location]['date'], $params['category_type']);
                    $result['table'][$_location]['total'] = array(
                        "location" => "Total",
                        "total_in" => number_format($summary['sum_in']),
                        "percent" => ""
                    );
                    $result['table'][$_location]['total'] = $result['table'][$_location]['total'] + $summary['sum'];
                    $_location ++;
                }
                break;
            case 6:
                // year
                foreach ($rows as $row) {
                    $data[$row->branch_id][$row->category][$row->columns] = array(
                        "location" => empty($row->location) ? '' : $row->location,
                        "category" => empty($row->category) ? '' : $row->category,
                        "columns" => empty($row->columns) ? '' : $row->columns,
                        "year" => $row->category,
                        "in" => $row->totalIn,
                        "out" => $row->totalOut,
                        "branch_id" => $row->branch_id
                    );
                    $branch_total[$row->branch_id][] = $row->totalIn;
                }
                $branch_id = 0;
                $_location = 0;
                foreach ($data as $key => $value) {

                    $total = array_sum($branch_total[$key]);
                    $_date = 0;
                    $branch_name = '';
                    foreach ($value as $k => $v) {

                        $result['table'][$_location]['date'][$_date]['name'] = $k;
                        $total_in = 0;

                        for ($i = 0; $i < 12; $i ++) {
                            $month = $i + 1;
                            $category[$i] = $month;
                            $result['table'][$_location]['date'][$_date]['column'][$i] = array(
                                "category" => $month,
                                "in" => 0,
                                "out" => 0
                            );

                            $in[$key][$i] = 0;
                            if (! empty($v[$month]['columns']) && $v[$month]['columns'] == $month) {
                                $total_in = $total_in + $v[$month]['in'];
                                $percent = setPercent($total_in, $total, 2);
                                $result['table'][$_location]['date'][$_date]['column'][$i] = array(
                                    "category" => $month,
                                    "in" => (int) $v[$month]['in'],
                                    "out" => (int) $v[$month]['out']
                                );
                                $branch_id = $v[$month]['branch_id'];
                                $branch_name = $v[$month]['location'];
                                $in[$key][$i] = (int) $v[$month]['in'];
                            }
                        }

                        $percent = setPercent($total_in, $total, 2);
                        $result['table'][$_location]['date'][$_date]['percent'] = $percent;
                        $result['table'][$_location]['date'][$_date]['total_in'] = number_format($total_in);
                        $result['table'][$_location]['date'][$_date]['location'] = $key;
                        $result['table'][$_location]['branch_id'] = $branch_id;
                        $result['table'][$_location]["location"] = $branch_name;
                        $option[$k] = array(
                            'name' => $k,
                            'marker' => array(
                                'symbol' => 'circle'
                            ),
                            'data' => $in[$key]
                        );
                        $_date ++;
                    }
                    $series[$branch_id] = json_encode($option);
                    $summary = $this->summary_model->getRowTotal($result['table'][$_location]['date'], $params['category_type']);
                    $result['table'][$_location]['total'] = array(
                        "location" => "Total",
                        "total_in" => number_format($summary['sum_in']),
                        "percent" => ""
                    );
                    $result['table'][$_location]['total'] = $result['table'][$_location]['total'] + $summary['sum'];
                    $_location ++;
                }

                break;
            default:

                break;
        }

        $result['categories'] = implode(',', $category);
        $result['series'] = $series;

        return $result;
    }

    public function getTimeInside($params = array())
    {
        $arg = implode("','", $params);

        $query = "CALL getAnalysisTimeInside('" . $arg . "');";
        $query = $this->db->query($query);
        $rows = $query->getResult();

        print_r($rows);
        exit();
    }
}
?>
