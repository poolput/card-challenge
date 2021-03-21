<?php
namespace App\Models;

use CodeIgniter\Model;
use App\Models\HeatmapRangeModel;
use App\Models\BranchModel;

class SummaryModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
        $this->branch_model = new BranchModel();
    }

    public function getLocation($params = array())
    {
        $params['camera_name'] = '';
        $arg = implode("','", $params);
        $query = "CALL getSummaryLocation('" . $arg . "');";
        $query = $this->db->query($query);
        $rows = $query->getResult();
        $data = array();
        $result = array();
        $series = array();
        $location = array();
        $category = array();
        $in = array();
        $total = 0;
        $total_in = 0;
        $result['table'] = null;
        switch ($params['category_type']) {
            case 1:
                // hour
                foreach ($rows as $row) {
                    $data[$row->location][] = array(
                        "category" => empty($row->category) ? '' : $row->category,
                        "in" => $row->totalIn,
                        "out" => $row->totalOut
                    );
                    $total = $total + $row->totalIn;
                }
                foreach ($data as $key => $value) {
                    $location[] = $key;
                    $total_in = 0;
                    for ($i = 0; $i < 24; $i ++) {
                        $category[$i] = sprintf("%'.02d", $i) . '.00';
                        $in[$key][] = 0;
                        $result['table'][$key]['column'][$i] = array(
                            "category" => sprintf("%'.02d", $i) . '.00',
                            "in" => 0,
                            "out" => 0
                        );
                        foreach ($value as $val) {
                            if ($val['category'] == $i) {
                                $total_in = $total_in + $val['in'];
                                $result['table'][$key]['column'][$i] = array(
                                    "category" => sprintf("%'.02d", $i) . '.00',
                                    "in" => (int) $val['in'],
                                    "out" => (int) $val['out']
                                );
                                $in[$key][$i] = (int) $val['in'];
                            }
                        }
                    }

                    $percent = setPercent($total_in, $total, 2);

                    $result['table'][$key]['percent'] = $percent;
                    $result['table'][$key]['total_in'] = number_format($total_in);
                    $result['table'][$key]['location'] = $key;

                    $series[] = array(
                        'name' => $key,
                        'marker' => array(
                            'symbol' => 'circle'
                        ),
                        'data' => $in[$key]
                    );
                }
                break;
            case 2:
                // date
                foreach ($rows as $row) {
                    $cat = date('d F Y (D)', strtotime($row->category));
                    $data[$row->location][] = array(
                        "location" => $row->location,
                        "category" => $cat,
                        "in" => $row->totalIn,
                        "out" => $row->totalOut
                    );
                    $total = $total + $row->totalIn;
                }
                foreach ($data as $key => $value) {
                    $location[] = $key;
                    $total_in = 0;
                    for ($i = 0; $i < count($value); $i ++) {
                        $category[$i] = $value[$i]['category'];
                        $total_in = $total_in + $value[$i]['in'];
                        $result['table'][$key]['column'][$i] = array(
                            "category" => $value[$i]['category'],
                            "in" => (int) $value[$i]['in'],
                            "out" => (int) $value[$i]['out']
                        );
                        $in[$key][$i] = (int) $value[$i]['in'];
                    }
                    $series[] = array(
                        'name' => $key,
                        'marker' => array(
                            'symbol' => 'circle'
                        ),
                        'data' => $in[$key]
                    );
                    $percent = setPercent($total_in, $total, 2);
                    $result['table'][$key]['percent'] = $percent;
                    $result['table'][$key]['total_in'] = number_format($total_in);
                    $result['table'][$key]['location'] = $key;
                }
                break;
            case 3:
                // week

                foreach ($rows as $row) {
                    $week = date('W', strtotime("+6 day", strtotime($row->week_date)));
                    $cat = 'Week (' . $week . ') ' . date('d M Y', strtotime($row->actual_first_date)) . ' - ' . date('d M Y', strtotime($row->actual_last_date));
                    $data[$row->location][] = array(
                        "location" => $row->location,
                        "category" => $cat,
                        "in" => $row->totalIn,
                        "out" => $row->totalOut
                    );
                    $total = $total + $row->totalIn;
                }
                foreach ($data as $key => $value) {
                    $location[] = $key;
                    $total_in = 0;
                    for ($i = 0; $i < count($value); $i ++) {
                        $category[$i] = $value[$i]['category'];

                        $total_in = $total_in + $value[$i]['in'];
                        $result['table'][$key]['column'][$i] = array(
                            "category" => $value[$i]['category'],
                            "in" => (int) $value[$i]['in'],
                            "out" => (int) $value[$i]['out']
                        );
                        $in[$key][$i] = (int) $value[$i]['in'];
                    }
                    $series[] = array(
                        'name' => $key,
                        'marker' => array(
                            'symbol' => 'circle'
                        ),
                        'data' => $in[$key]
                    );
                    $percent = setPercent($total_in, $total, 2);
                    $result['table'][$key]['percent'] = $percent;
                    $result['table'][$key]['total_in'] = number_format($total_in);
                    $result['table'][$key]['location'] = $key;
                }
                break;
            case 4:
                // month
                foreach ($rows as $row) {
                    $total_in = $total_in + $row->totalIn;
                    $cat = date('F Y', strtotime($row->year . '-' . $row->category . '-01'));
                    $data[$row->location][] = array(
                        "location" => $row->location,
                        "category" => $cat,
                        "in" => $row->totalIn,
                        "out" => $row->totalOut
                    );
                    $total = $total + $row->totalIn;
                }
                foreach ($data as $key => $value) {
                    $location[] = $key;
                    $total_in = 0;
                    for ($i = 0; $i < count($value); $i ++) {
                        $category[$i] = $value[$i]['category'];
                        $total_in = $total_in + $value[$i]['in'];
                        $result['table'][$key]['column'][$i] = array(
                            "category" => $value[$i]['category'],
                            "in" => (int) $value[$i]['in'],
                            "out" => (int) $value[$i]['out']
                        );
                        $in[$key][$i] = (int) $value[$i]['in'];
                    }
                    $series[] = array(
                        'name' => $key,
                        'marker' => array(
                            'symbol' => 'circle'
                        ),
                        'data' => $in[$key]
                    );
                    $percent = setPercent($total_in, $total, 2);
                    $result['table'][$key]['percent'] = $percent;
                    $result['table'][$key]['total_in'] = number_format($total_in);
                    $result['table'][$key]['location'] = $key;
                }
                break;
            case 5:
                // quarter
                foreach ($rows as $row) {
                    $cat = 'Quarter' . ($row->category) . '-' . $row->year;
                    $data[$row->location][] = array(
                        "location" => $row->location,
                        "category" => $cat,
                        "in" => $row->totalIn,
                        "out" => $row->totalOut
                    );
                    $total = $total + $row->totalIn;
                }
                $total_in = 0;
                foreach ($data as $key => $value) {
                    $location[] = $key;
                    for ($i = 0; $i < count($value); $i ++) {
                        $category[$i] = $value[$i]['category'];
                        $total_in = $total_in + $value[$i]['in'];
                        $result['table'][$key]['column'][$i] = array(
                            "category" => $value[$i]['category'],
                            "in" => (int) $value[$i]['in'],
                            "out" => (int) $value[$i]['out']
                        );
                        $in[$key][$i] = (int) $value[$i]['in'];
                    }
                    $series[] = array(
                        'name' => $key,
                        'marker' => array(
                            'symbol' => 'circle'
                        ),
                        'data' => $in[$key]
                    );
                    $percent = setPercent($total_in, $total, 2);
                    $result['table'][$key]['percent'] = $percent;
                    $result['table'][$key]['total_in'] = number_format($total_in);
                    $result['table'][$key]['location'] = $key;
                }
                break;
            case 6:
                // year
                $total_in = 0;
                foreach ($rows as $row) {
                    $cat = $row->category;
                    $data[$row->location][] = array(
                        "location" => $row->location,
                        "category" => $cat,
                        "in" => $row->totalIn,
                        "out" => $row->totalOut
                    );
                    $total = $total + $row->totalIn;
                }
                $total_in = 0;
                foreach ($data as $key => $value) {
                    $location[] = $key;
                    for ($i = 0; $i < count($value); $i ++) {
                        $category[$i] = $value[$i]['category'];
                        $total_in = $total_in + $value[$i]['in'];
                        $result['table'][$key]['column'][$i] = array(
                            "category" => $value[$i]['category'],
                            "in" => (int) $value[$i]['in'],
                            "out" => (int) $value[$i]['out']
                        );
                        $in[$key][$i] = (int) $value[$i]['in'];
                    }
                    $series[] = array(
                        'name' => $key,
                        'marker' => array(
                            'symbol' => 'circle'
                        ),
                        'data' => $in[$key]
                    );
                    $percent = setPercent($total_in, $total, 2);
                    $result['table'][$key]['percent'] = $percent;
                    $result['table'][$key]['total_in'] = number_format($total_in);
                    $result['table'][$key]['location'] = $key;
                }
                break;
            default:

                break;
        }

        $summary = self::getRowTotal($result['table'], $params['category_type']);
        $result['table']['total'] = array(
            "location" => "Total",
            "total_in" => number_format($summary['sum_in']),
            "percent" => ""
        );
        $result['table']['total'] = $result['table']['total'] + $summary['sum'];
        $result['table'] = array_values($result['table']);

        $result['location'] = implode(',', $location);
        $result['categories'] = implode(',', $category);
        $result['series'] = json_encode($series);
        $result['sum_in'] = number_format($summary['sum_in']);
        $result['sum_out'] = number_format($summary['sum_out']);
        return $result;
    }

    public function getRowTotal($data = null)
    {
        $result = array();
        $sum = array();
        $sum_in = 0;
        $sum_out = 0;
        $category = '';
        if (! empty($data)) {
            foreach ($data as $key => $value) {
                foreach ($value['column'] as $k => $val) {
                    if (empty($sum[$k])) {
                        $sum[$k]['category'] = '';
                        $sum[$k]['in'] = 0;
                        $sum[$k]['out'] = 0;
                    } else {
                        continue;
                    }
                }
                foreach ($value['column'] as $k => $val) {
                    $sum[$k]['category'] = $category;
                    $sum[$k]['in'] = $sum[$k]['in'] + (int) $val['in'];
                    $sum[$k]['out'] = 0;
                    $sum_in = $sum_in + $val['in'];
                    $sum_out = $sum_out + $val['out'];
                }
            }
        }
        $result['sum_in'] = $sum_in;
        $result['sum_out'] = $sum_out;
        $result['sum']['column'] = $sum;

        return $result;
    }

    public function getVisitor($params = array())
    {
        $arg = implode("','", $params);
        
        $query = "CALL getSummaryVisitor('" . $arg . "');";
        $query = $this->db->query($query);
        $rows = $query->getResult();
        
        $result = array();
        // print_r($rows);
        // exit();
        $category = array();
        $in = array();
        $trend = array();
        $out = array();

        // ---display type---//
        // 1.hour
        // 2.date
        // 3.week
        // 4.month
        // 5.quarter
        // 6.year
        if(!empty($rows)){
        
            switch ($params['category_type']) {
                case 1:
                    // hour
                    for ($i = 0; $i < 24; $i ++) {
                        $category[$i] = sprintf("%'.02d", $i) . '.00';
                        $in[$i] = 0;
                        $out[$i] = 0;
                        $trend[$i] = 0;
                        foreach ($rows as $row) {
                            if ($row->category == $i) {
                                $in[$i] = $row->totalIn;
                                if (empty($in[$i - 1])) {
                                    $trend[$i] = 0;
                                } else {
                                    $trend[$i] = number_format((float) (($row->totalIn * 100) / $in[$i - 1]) - 100, 2, '.', '');
                                }
                                $out[$i] = $row->totalOut;
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
                        if (empty($in[$i - 1])) {
                            $trend[$i] = 0;
                        } else {
                            $trend[$i] = number_format((float) (($row->totalIn * 100) / $in[$i - 1]) - 100, 2, '.', '');
                        }
                        $out[$i] = $row->totalOut;
                    }
                    break;
                case 3:
                    // week
                    foreach ($rows as $i => $row) {
                        $week = date('W', strtotime("+6 day", strtotime($row->week_date)));
                        $cat = 'Week (' . (int) $week . ') ' . date('d M Y', strtotime($row->week_date)) . ' - ' . date('d M Y', strtotime("+6 day", strtotime($row->week_date)));
                        $category[$i] = $cat;
                        $in[$i] = $row->totalIn;
                        if (empty($in[$i - 1])) {
                            $trend[$i] = 0;
                        } else {
                            $trend[$i] = number_format((float) (($row->totalIn * 100) / $in[$i - 1]) - 100, 2, '.', '');
                        }
                        $out[$i] = $row->totalOut;
                    }
                    break;
                case 4:
                    // month
                    foreach ($rows as $i => $row) {
                        $month_name = date('F', strtotime($row->year . '-' . $row->month . '-01'));
                        $category[$i] = $month_name . ' ' . $row->year;
                        $in[$i] = $row->totalIn;
                        if (empty($in[$i - 1])) {
                            $trend[$i] = 0;
                        } else {
                            $trend[$i] = number_format((float) (($row->totalIn * 100) / $in[$i - 1]) - 100, 2, '.', '');
                        }
                        $out[$i] = $row->totalOut;
                    }
                    break;
                case 5:
                    // quarter
                    foreach ($rows as $i => $row) {
                        $month_name = date('F', strtotime($row->year . '-' . $row->quarter . '-01'));
                        $category[$i] = 'Quarter' . ($i + 1) . '-' . $row->year;
                        $in[$i] = $row->totalIn;
                        if (empty($in[$i - 1])) {
                            $trend[$i] = 0;
                        } else {
                            $trend[$i] = number_format((float) (($row->totalIn * 100) / $in[$i - 1]) - 100, 2, '.', '');
                        }
                        $out[$i] = $row->totalOut;
                    }
                    break;
                case 6:
                    // year
                    foreach ($rows as $i => $row) {
                        $category[$i] = $row->year;
                        $in[$i] = $row->totalIn;
                        if (empty($in[$i - 1])) {
                            $trend[$i] = 0;
                        } else {
                            $trend[$i] = number_format((float) (($row->totalIn * 100) / $in[$i - 1]) - 100, 2, '.', '');
                        }
                        $out[$i] = $row->totalOut;
                    }
                    break;
                default:
                // empty
            }
            $result['categories'] = implode(',', $category);
            $result['data_in'] = implode(',', $in);
            $result['data_trend'] = implode(',', $trend);
            $result['data_out'] = implode(',', $out);
        }
        return $result;
    }

    public function getDensityDate($params = array())
    {
        $params['camera_name'] = '';

        $arg = implode("','", $params);
        $sql = "CALL getSummaryDensityDate('" . $arg . "');";
        $query = $this->db->query($sql);
        $rows = $query->getResult();

        $data = array();
        $result = array();
        $total = 0;
        $total_in = 0;
        $result['table'] = null;

        foreach ($rows as $row) {

            $data[$row->branch_id][$row->date][$row->hour] = array(
                "location" => empty($row->location) ? '' : $row->location,
                "date" => empty($row->date) ? '' : $row->date,
                "hour" => empty($row->hour) ? '' : $row->hour,
                "in" => $row->totalIn,
                "out" => $row->totalOut,
                "branch_id" => $row->branch_id,
                "min" => $row->min,
                "max" => $row->max
            );
            $total = $total + $row->totalIn;
        }

        $_location = 0;
        foreach ($data as $key => $value) {
            $total_in = 0;
            $_date = 0;
            $branch_id = 0;
            $branch_name = '';
            $min = 0;
            $max = 0;
            foreach ($value as $k => $v) {
                $result['table'][$_location]['date'][$_date]['name'] = date('d F Y', strtotime($k));
                for ($i = 0; $i < 24; $i ++) {
                    $result['table'][$_location]['date'][$_date]['column'][$i] = array(
                        "category" => sprintf("%'.02d", $i) . '.00',
                        "in" => 0,
                        "out" => 0
                    );
                    if (! empty($v[$i]['hour']) && $v[$i]['hour'] == $i) {
                        $total_in = $total_in + $v[$i]['in'];
                        $percent = setPercent($total_in, $total, 2);
                        $min = $v[$i]['min'];
                        $max = $v[$i]['max'];
                        $result['table'][$_location]['date'][$_date]['column'][$i] = array(
                            "category" => sprintf("%'.02d", $i) . '.00',
                            "in" => (int) $v[$i]['in'],
                            "out" => (int) $v[$i]['out']
                        );
                        $branch_id = $v[$i]['branch_id'];
                        $branch_name = $v[$i]['location'];
                    }
                }

                $percent = setPercent($total_in, $total, 2);
                $result['table'][$_location]['date'][$_date]['percent'] = $percent;
                $result['table'][$_location]['date'][$_date]['total_in'] = number_format($total_in);
                $result['table'][$_location]['date'][$_date]['location'] = $key;
                $result['table'][$_location]['branch_id'] = $branch_id;
                $result['table'][$_location]["location"] = $branch_name;
                $result['table'][$_location]['config'] = array(
                    'min' => $min,
                    'max' => $max
                );
                $_date ++;
            }

            $summary = self::getRowTotal($result['table'][$_location]['date'], $params['category_type']);
            $result['table'][$_location]['total'] = array(
                "location" => "Total",
                "total_in" => number_format($summary['sum_in']),
                "percent" => ""
            );

            $result['table'][$_location]['total'] = $result['table'][$_location]['total'] + $summary['sum'];

            $_location ++;
        }

        return $result;
    }

    public function getDensityLocation($params = array())
    {
        $params['camera_name'] = '';
        $arg = implode("','", $params);
        $query = "CALL getSummaryDensityLocation('" . $arg . "');";
        $query = $this->db->query($query);
        $rows = $query->getResult();
        $data = array();
        $result = array();
        $series = array();
        $location = array();
        $category = array();
        $in = array();
        $total = 0;
        $total_in = 0;
        $result['table'] = null;
        switch ($params['category_type']) {
            case 1:
                // hour
                foreach ($rows as $row) {
                    $data[$row->location][] = array(
                        "category" => empty($row->category) ? '' : $row->category,
                        "in" => $row->totalIn,
                        "out" => $row->totalOut,
                        "min" => $row->min,
                        "max" => $row->max
                    );
                    $total = $total + $row->totalIn;
                }
                $min = 0;
                $max = 0;
                foreach ($data as $key => $value) {
                    $location[] = $key;
                    $total_in = 0;
                    for ($i = 0; $i < 24; $i ++) {
                        $category[$i] = sprintf("%'.02d", $i) . '.00';
                        $in[$key][] = 0;
                        $result['table'][$key]['column'][$i] = array(
                            "category" => sprintf("%'.02d", $i) . '.00',
                            "in" => 0,
                            "out" => 0
                        );
                        foreach ($value as $val) {
                            if ($val['category'] == $i) {
                                $total_in = $total_in + $val['in'];
                                $percent = setPercent($total_in, $total, 2);
                                $result['table'][$key]['column'][$i] = array(
                                    "category" => sprintf("%'.02d", $i) . '.00',
                                    "in" => (int) $val['in'],
                                    "out" => (int) $val['out']
                                );
                                $in[$key][$i] = (int) $val['in'];
                                $min = $val['min'];
                                $max = $val['max'];
                            }
                        }
                    }
                    $percent = setPercent($total_in, $total, 2);
                    $result['table'][$key]['percent'] = $percent;
                    $result['table'][$key]['total_in'] = number_format($total_in);
                    $result['table'][$key]['location'] = $key;
                    $result['table'][$key]['config'] = array(
                        'min' => (! empty($min) ? $min : 0),
                        'max' => (! empty($max) ? $max : 0)
                    );

                    $series[] = array(
                        'name' => $key,
                        'marker' => array(
                            'symbol' => 'circle'
                        ),
                        'data' => $in[$key]
                    );
                }
                break;
            case 2:
                // date
                foreach ($rows as $row) {
                    $cat = date('d F Y (D)', strtotime($row->category));
                    $data[$row->location][] = array(
                        "location" => $row->location,
                        "category" => $cat,
                        "in" => $row->totalIn,
                        "out" => $row->totalOut,
                        "min" => $row->min,
                        "max" => $row->max
                    );
                    $total = $total + $row->totalIn;
                }
                $min = 0;
                $max = 0;
                foreach ($data as $key => $value) {
                    $location[] = $key;
                    $total_in = 0;
                    for ($i = 0; $i < count($value); $i ++) {
                        $min = $value[$i]['min'];
                        $max = $value[$i]['max'];
                        $category[$i] = $value[$i]['category'];
                        $total_in = $total_in + $value[$i]['in'];
                        $result['table'][$key]['column'][$i] = array(
                            "category" => $value[$i]['category'],
                            "in" => (int) $value[$i]['in'],
                            "out" => (int) $value[$i]['out']
                        );
                        $in[$key][$i] = (int) $value[$i]['in'];
                        $min = $value[$i]['min'];
                        $max = $value[$i]['max'];
                    }
                    $series[] = array(
                        'name' => $key,
                        'marker' => array(
                            'symbol' => 'circle'
                        ),
                        'data' => $in[$key]
                    );
                    $percent = setPercent($total_in, $total, 2);
                    $result['table'][$key]['percent'] = $percent;
                    $result['table'][$key]['total_in'] = number_format($total_in);
                    $result['table'][$key]['location'] = $key;
                    $result['table'][$key]['config'] = array(
                        'min' => (! empty($min) ? $min : 0),
                        'max' => (! empty($max) ? $max : 0)
                    );
                }
                break;
            case 3:
                // week
                foreach ($rows as $row) {
                    $cat = 'Week (' . $row->week_number . ') ' . date('d M Y', strtotime($row->actual_first_date)) . ' - ' . date('d M Y', strtotime($row->actual_last_date));
                    $data[$row->location][] = array(
                        "location" => $row->location,
                        "category" => $cat,
                        "in" => $row->totalIn,
                        "out" => $row->totalOut,
                        "min" => $row->min,
                        "max" => $row->max
                    );
                    $total = $total + $row->totalIn;
                }
                $min = 0;
                $max = 0;
                foreach ($data as $key => $value) {
                    $location[] = $key;
                    $total_in = 0;
                    for ($i = 0; $i < count($value); $i ++) {
                        $category[$i] = $value[$i]['category'];

                        $total_in = $total_in + $value[$i]['in'];
                        $result['table'][$key]['column'][$i] = array(
                            "category" => $value[$i]['category'],
                            "in" => (int) $value[$i]['in'],
                            "out" => (int) $value[$i]['out']
                        );
                        $in[$key][$i] = (int) $value[$i]['in'];
                        $min = $value[$i]['min'];
                        $max = $value[$i]['max'];
                    }
                    $series[] = array(
                        'name' => $key,
                        'marker' => array(
                            'symbol' => 'circle'
                        ),
                        'data' => $in[$key]
                    );
                    $percent = setPercent($total_in, $total, 2);
                    $result['table'][$key]['percent'] = $percent;
                    $result['table'][$key]['total_in'] = number_format($total_in);
                    $result['table'][$key]['location'] = $key;
                    $result['table'][$key]['config'] = array(
                        'min' => (! empty($min) ? $min : 0),
                        'max' => (! empty($max) ? $max : 0)
                    );
                }
                break;
            case 4:
                // month
                foreach ($rows as $row) {
                    $total_in = $total_in + $row->totalIn;
                    $cat = date('F Y', strtotime($row->year . '-' . $row->category . '-01'));
                    $data[$row->location][] = array(
                        "location" => $row->location,
                        "category" => $cat,
                        "in" => $row->totalIn,
                        "out" => $row->totalOut,
                        "min" => $row->min,
                        "max" => $row->max
                    );
                    $total = $total + $row->totalIn;
                }
                $min = 0;
                $max = 0;
                foreach ($data as $key => $value) {
                    $location[] = $key;
                    $total_in = 0;
                    for ($i = 0; $i < count($value); $i ++) {
                        $category[$i] = $value[$i]['category'];
                        $total_in = $total_in + $value[$i]['in'];
                        $result['table'][$key]['column'][$i] = array(
                            "category" => $value[$i]['category'],
                            "in" => (int) $value[$i]['in'],
                            "out" => (int) $value[$i]['out']
                        );
                        $in[$key][$i] = (int) $value[$i]['in'];
                        $min = $value[$i]['min'];
                        $max = $value[$i]['max'];
                    }
                    $series[] = array(
                        'name' => $key,
                        'marker' => array(
                            'symbol' => 'circle'
                        ),
                        'data' => $in[$key]
                    );
                    $percent = setPercent($total_in, $total, 2);
                    $result['table'][$key]['percent'] = $percent;
                    $result['table'][$key]['total_in'] = number_format($total_in);
                    $result['table'][$key]['location'] = $key;
                    $result['table'][$key]['config'] = array(
                        'min' => (! empty($min) ? $min : 0),
                        'max' => (! empty($max) ? $max : 0)
                    );
                }
                break;
            case 5:
                // quarter
                foreach ($rows as $row) {
                    $cat = 'Quarter' . ($row->category) . '-' . $row->year;
                    $data[$row->location][] = array(
                        "location" => $row->location,
                        "category" => $cat,
                        "in" => $row->totalIn,
                        "out" => $row->totalOut,
                        "min" => $row->min,
                        "max" => $row->max
                    );
                    $total = $total + $row->totalIn;
                }
                $total_in = 0;
                $min = 0;
                $max = 0;
                foreach ($data as $key => $value) {
                    $location[] = $key;
                    for ($i = 0; $i < count($value); $i ++) {
                        $category[$i] = $value[$i]['category'];
                        $total_in = $total_in + $value[$i]['in'];
                        $result['table'][$key]['column'][$i] = array(
                            "category" => $value[$i]['category'],
                            "in" => (int) $value[$i]['in'],
                            "out" => (int) $value[$i]['out']
                        );
                        $in[$key][$i] = (int) $value[$i]['in'];
                        $min = $value[$i]['min'];
                        $max = $value[$i]['max'];
                    }
                    $series[] = array(
                        'name' => $key,
                        'marker' => array(
                            'symbol' => 'circle'
                        ),
                        'data' => $in[$key]
                    );
                    $percent = setPercent($total_in, $total, 2);
                    $result['table'][$key]['percent'] = $percent;
                    $result['table'][$key]['total_in'] = number_format($total_in);
                    $result['table'][$key]['location'] = $key;
                    $result['table'][$key]['config'] = array(
                        'min' => (! empty($min) ? $min : 0),
                        'max' => (! empty($max) ? $max : 0)
                    );
                }
                break;
            case 6:
                // year
                $total_in = 0;
                foreach ($rows as $row) {
                    $cat = $row->category;
                    $data[$row->location][] = array(
                        "location" => $row->location,
                        "category" => $cat,
                        "in" => $row->totalIn,
                        "out" => $row->totalOut,
                        "min" => $row->min,
                        "max" => $row->max
                    );
                    $total = $total + $row->totalIn;
                }
                $total_in = 0;
                $min = 0;
                $max = 0;
                foreach ($data as $key => $value) {
                    $location[] = $key;
                    for ($i = 0; $i < count($value); $i ++) {
                        $category[$i] = $value[$i]['category'];
                        $total_in = $total_in + $value[$i]['in'];
                        $result['table'][$key]['column'][$i] = array(
                            "category" => $value[$i]['category'],
                            "in" => (int) $value[$i]['in'],
                            "out" => (int) $value[$i]['out']
                        );
                        $in[$key][$i] = (int) $value[$i]['in'];
                        $min = $value[$i]['min'];
                        $max = $value[$i]['max'];
                    }
                    $series[] = array(
                        'name' => $key,
                        'marker' => array(
                            'symbol' => 'circle'
                        ),
                        'data' => $in[$key]
                    );
                    $percent = setPercent($total_in, $total, 2);
                    $result['table'][$key]['percent'] = $percent;
                    $result['table'][$key]['total_in'] = number_format($total_in);
                    $result['table'][$key]['location'] = $key;
                    $result['table'][$key]['config'] = array(
                        'min' => (! empty($min) ? $min : 0),
                        'max' => (! empty($max) ? $max : 0)
                    );
                }
                break;
            default:

                break;
        }

        $summary = self::getRowTotal($result['table'], $params['category_type']);
        $result['table']['total'] = array(
            "location" => "Total",
            "total_in" => number_format($summary['sum_in']),
            "percent" => ""
        );
        $result['table']['total'] = $result['table']['total'] + $summary['sum'];
        $result['table'] = array_values($result['table']);
        $result['location'] = implode(',', $location);
        $result['categories'] = implode(',', $category);
        $result['series'] = json_encode($series);
        $result['sum_in'] = number_format($summary['sum_in']);
        $result['sum_out'] = number_format($summary['sum_out']);
        return $result;
    }

    public function getPassing($params = array())
    {
        $arg = implode("','", $params);

        $query = "CALL getPassing('" . $arg . "');";
        $query = $this->db->query($query);
        $rows = $query->getResult();
        // echo "<pre>"; print_r($rows); die;
        $category = array();
        $data_passing = array();
        $data_entrace = array();
        $data_percentage = array();

        // ---display type---//
        // 1.hour
        // 2.date
        // 3.week
        // 4.month
        // 5.quarter
        // 6.year

        $result = array();
        foreach ($rows as $key => $row) {

            switch ($params['category_type']) {
                case 1:
                    // hour
                    $result[$row->branch_id]['categories'][] = sprintf("%'.02d", $row->_hour) . '.00';
                    break;
                case 2:
                    // date
                    $display_date = date('d F Y (D)', strtotime($row->_date));
                    $result[$row->branch_id]['categories'][] = $display_date;
                    break;
                case 3:
                    // week
                    $week_date = getStartAndEndDate($row->_week, $row->_year)['week_start'];
                    $week = date('W', strtotime($week_date." +6 day"));
                    $cat = 'Week (' . (int) $week . ') ' . date('d M Y', strtotime($week_date)) . ' - ' . date('d M Y', strtotime($week_date . " +6 day"));
                    $result[$row->branch_id]['categories'][] = $cat;
                    break;
                case 4:
                    // month
                    $month_name = date('F', strtotime($row->_year . '-' . $row->_month . '-01'));
                    $result[$row->branch_id]['categories'][] = $month_name . ' ' . $row->_year;
                    break;
                case 5:
                    // quarter
                    $month_name = date('F', strtotime($row->_year . '-' . $row->_quarter . '-01'));
                    $result[$row->branch_id]['categories'][] = 'Quarter' . ($i + 1) . '-' . $row->_year;
                    break;
                case 6:
                    // year
                    $result[$row->branch_id]['categories'][] = $row->_year;
                    break;
                default:
                // empty
            }

            $result[$row->branch_id]['data_passing_in'][] = $row->sum_passing_in;
            $result[$row->branch_id]['data_passing_out'][] = $row->sum_passing_out;
            $result[$row->branch_id]['data_passing'][] = $row->sum_passing;
            $result[$row->branch_id]['data_entrance'][] = $row->sum_entrance;
            $result[$row->branch_id]['data_percentage'][] = $row->percentage;
        }

        $result['total'] = array();
        $result['total']['data_passing_in'] = array();
        $result['total']['data_passing_out'] = array();
        $result['total']['data_passing'] = array();
        $result['total']['data_entrance'] = array();
        $result['total']['data_percentage'] = array();

        if (! empty($result)) {
            $sum_passing_in = array();
            $sum_passing_out = array();
            $sum_passing = array();
            $sum_entrance = array();
            foreach ($result as $key => $rs) {
                if ($key != 'total') {
                    foreach ($rs as $key2 => $node) {
                        foreach ($node as $key3 => $value) {
                            if ($key2 == 'categories') {
                                $result['total']['categories'][$key3] = $value;
                            }

                            if ($key2 == 'data_passing_in') {
                                if (! isset($sum_passing_in[$key3])) {
                                    $sum_passing_in[$key3] = $value;
                                } else {
                                    $sum_passing_in[$key3] += $value;
                                }
                            }
                            if ($key2 == 'data_passing_out') {
                                if (! isset($sum_passing_out[$key3])) {
                                    $sum_passing_out[$key3] = $value;
                                } else {
                                    $sum_passing_out[$key3] += $value;
                                }
                            }

                            if ($key2 == 'data_passing') {
                                if (! isset($sum_passing[$key3])) {
                                    $sum_passing[$key3] = $value;
                                } else {
                                    $sum_passing[$key3] += $value;
                                }
                            }
                            if ($key2 == 'data_entrance') {
                                if (! isset($sum_entrance[$key3])) {
                                    $sum_entrance[$key3] = $value;
                                } else {
                                    $sum_entrance[$key3] += $value;
                                }
                            }
                        }
                    }
                }
            }

            $result['total']['data_passing_in'] = $sum_passing_in;
            $result['total']['data_passing_out'] = $sum_passing_out;
            $result['total']['data_passing'] = $sum_passing;
            $result['total']['data_entrance'] = $sum_entrance;

            if (! empty($sum_passing) && ! empty($sum_entrance)) {
                foreach ($sum_passing as $key => $passing) {
                    if (empty($passing)) {
                        $result['total']['data_percentage'][] = 0;
                    } else {
                        $result['total']['data_percentage'][] = round(($sum_entrance[$key] / $passing) * 100, 2);
                    }
                }
            }
        }

        foreach ($result as $key => $rs) {
            foreach ($rs as $key2 => $node) {
                $result[$key][$key2] = implode(',', $node);
            }
        }

        return $result;
    }

    public function getDayPart($params = array())
    {
        $arg = implode("','", $params);
        $rows = array();
        $query = "CALL getDayPart('" . $arg . "');";
        $query = $this->db->query($query);

        $result = array();
        $category = array();
        $weekday_in = array();
        $weekend_in = array();
        $total_in = array();
        $series = array();

        if($query){
            $rows = $query->getResult();
        }

        if(!empty($rows)){
            foreach ($rows as $key => $row) {
                $category[] = "<b>".$row->daypart_name."</b>\n(".$row->period.")";
                $weekday_in['visitor'][] = $row->cnt_weekday;
                $weekend_in['visitor'][] = $row->cnt_weekend;
                $total_in['visitor'][] = $row->cnt_total;
            }

            $weekday_sum = array_sum($weekday_in['visitor']);
            $weekend_sum = array_sum($weekend_in['visitor']);
            $total_sum = array_sum($total_in['visitor']);

            foreach ($rows as $key => $row) {
                $weekday_in['percentage'][$key] = empty($weekday_sum)? 0 : round(($row->cnt_weekday/$weekday_sum)*100, 2);
                $weekend_in['percentage'][$key] = empty($weekend_sum)? 0 : round(($row->cnt_weekend/$weekend_sum)*100, 2);
                $total_in['percentage'][$key] = empty($total_sum)? 0 : round(($row->cnt_total/$total_sum)*100, 2);

                $series[$key] = array(
                                'name' => $row->daypart_name,
                                'data' => array($weekday_in['percentage'][$key], $weekend_in['percentage'][$key]),
                                'tooltip'=> array(
                                    'valueSuffix' => ' %'
                                )
                            );
            }
        }

        $result['categories'] = implode(',', $category);
        $result['weekday'] = json_encode($weekday_in);
        $result['weekend'] = json_encode($weekend_in);
        $result['total'] = json_encode($total_in);
        $result['series'] = json_encode($series);

        return $result;
    }
}

?>
