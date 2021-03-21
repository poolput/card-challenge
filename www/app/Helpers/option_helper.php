<?php

function prepareOption($option = array())
{
    $params = array();
    $params['camera_group'] = 0;
    $params['date_start'] = '';
    $params['date_end'] = '';
    $params['time_start'] = '00:00:00';
    $params['time_end'] = '23:59:59';
    $params['recurrence'] = 0;
    $params['staff'] = 0;
    $params['entrance'] = 0;
    $params['event_id'] = 0;
    $params['category_type'] = 1;
    // camera_group
    if ($option['option_left'] == 1) {
        if (! empty($option['option_camera_group'])) {
            $params['camera_group'] = implode(',', $option['option_camera_group']);
        }
    } else if ($option['option_left'] == 2) {
        if (! empty($option['option_group_camera'])) {
            $params['camera_group'] = implode(',', $option['option_group_camera']);
        }
    }

    // ---display type---//
    // 1.hour
    // 2.date
    // 3.week
    // 4.month
    // 5.quarter
    // 6.year

    // ---option selector---//
    // 1.date
    // 2.week
    // 3.month
    // 4.quarter
    // 5.year
    switch ($option['option_group_date']) {
        case 1:
            // hour and date
            $params['date_start'] = $option['option_date_start'];
            $params['date_end'] = empty($option['option_date_end']) ? $option['option_date_start'] : $option['option_date_end'];

            if (! empty($params['date_start']) && ! empty($params['date_end'])) {
                $date_start = new DateTime($params['date_start']);
                $date_end = new DateTime($params['date_end']);
                $day = $date_start->diff($date_end)->days;
                if ($day < 1) {
                    $params['category_type'] = 1;
                } else if ($day >= 1 && $day < 60) {
                    $params['category_type'] = 2;
                } else if ($day >= 60 && $day <= 730) {
                    $params['category_type'] = 4;
                } else if ($day >= 730) {
                    $params['category_type'] = 6;
                }
            }
            break;
        case 2:
            // week
            $year_start = $option['option_week_year_start'];
            $week_start = $option['option_week_start'];

            $year_end = $option['option_week_year_end'];
            $week_end = $option['option_week_end'];

            $date_start = new DateTime();
            $date_start->setISODate($year_start, $week_start);

            $date_end = new DateTime();
            $date_end->setISODate($year_end, $week_end);

            $params['date_start'] = $date_start->format('Y-m-d');
            $end = $date_end->format('Y-m-d');
            $params['date_end'] = date('Y-m-d', strtotime($end . ' +6 day'));

            if ($year_start . $week_start == $year_end . $week_end) {
                $params['category_type'] = 2;
            } else {
                $params['category_type'] = 3;
            }
            break;
        case 3:
            // 3.month
            $year_start = $option['option_month_year_start'];
            $month_start = $option['option_month_start'];

            $year_end = $option['option_month_year_end'];
            $month_end = $option['option_month_end'];

            $date_start = $year_start . '-' . $month_start . '-01';
            $date_end = date("Y-m-t", strtotime($year_end . "-" . $month_end . "-01"));

            if ($year_start . $month_start == $year_end . $month_end) {
                $params['category_type'] = 2;
            } else {
                $params['category_type'] = 4;
            }

            $params['date_start'] = $date_start;
            $params['date_end'] = $date_end;
            break;

        case 4:
            // quarter
            $year_start = $option['option_quarter_year_start'];
            $quarter_start = $option['option_quarter_start'];

            $year_end = $option['option_quarter_year_end'];
            $quarter_end = $option['option_quarter_end'];

            if ($year_start . $quarter_start == $year_end . $quarter_end) {
                $params['category_type'] = 4;
            } else {
                $params['category_type'] = 5;
            }

            if ($quarter_start == 1) {
                $date_start = $year_start . "-01-01";
            } else if ($quarter_start == 2) {
                $date_start = $year_start . "-04-01";
            } else if ($quarter_start == 3) {
                $date_start = $year_start . "-07-01";
            } else if ($quarter_start == 4) {
                $date_start = $year_start . "-10-01";
            }

            if ($quarter_end == 1) {
                $date_end = $year_end . "-03-31";
            } else if ($quarter_end == 2) {
                $date_end = $year_end . "-06-30";
            } else if ($quarter_end == 3) {
                $date_end = $year_end . "-09-30";
            } else if ($quarter_end == 4) {
                $date_end = $year_end . "-12-31";
            }

            $params['date_start'] = $date_start;
            $params['date_end'] = $date_end;
            break;
        case 5:
            // year
            $year_start = $option['option_year_start'];
            $year_end = $option['option_year_end'];

            if ($year_start == $year_end) {
                $params['category_type'] = 4;
            } else {
                $params['category_type'] = 6;
            }

            $params['date_start'] = $year_start . '-01-01';
            $params['date_end'] = $year_end . '-12-31';
            break;
    }

    if (! empty($option['option_event'])) {
        if (! empty($option['option_event'])) {
            $day = 0;
            if (! empty($option['event_time'])) {
                foreach ($option['event_time'] as $event_time) {
                    foreach ($event_time as $event_row) {
                        if (! empty($event_row)) {
                            $date1 = new DateTime($event_row['date_start']);
                            $date2 = new DateTime($event_row['date_end']);
                            $interval = $date1->diff($date2);
                            $day = $day + $interval->days;
                        }
                    }
                }
            }
            if ($day < 1) {
                $params['category_type'] = 1;
            } else if ($day >= 1 && $day < 60) {
                $params['category_type'] = 2;
            } else if ($day >= 60 && $day <= 730) {
                $params['category_type'] = 4;
            } else if ($day >= 730) {
                $params['category_type'] = 6;
            }
            $params['date_start'] = $params['date_start'];
            $params['date_end'] = $params['date_end'];
        }
    }

    // time
    if (! empty($option['option_time'])) {
        $params['time_start'] = $option['option_time_start'].":00";
        $params['time_end'] = $option['option_time_end'].":59";
    }
    // recurrence
    if (! empty($option['option_recurrence'])) {
        $params['recurrence'] = implode(',', $option['option_day']);
    }
    // staff
    if (! empty($option['option_staff'])) {
        $params['staff'] = 1;
    }
    // entrance
    if (! empty($option['option_entrance'])) {
        $params['entrance'] = 1;
    }

    // event
    if (! empty($option['option_event'])) {
        $params['date_start'] = '';
        $params['date_end'] = '';
        if (! empty($option['option_event'])) {
            $event_id = array();
            foreach ($option['option_event'] as $event) {
                if (! empty($event)) {
                    $event_id[] = $event;
                }
            }
            $params['event_id'] = implode(',', $event_id);
        }
    }

    return $params;
}

function prepareOptionComparison($option = array())
{
    $params = array();
    $params['camera_group'] = 0;
    $params['date_range'] = 0;
    $params['multiple_date'] = array();
    $params['time_start'] = '00:00:00';
    $params['time_end'] = '23:59:59';
    $params['recurrence'] = 0;
    $params['staff'] = 0;
    $params['entrance'] = 0;
    $params['category_type'] = 1;
    // camera_group
    if ($option['option_left'] == 1) {
        if (! empty($option['option_camera_group'])) {
            $params['camera_group'] = implode(',', $option['option_camera_group']);
        }
    } else if ($option['option_left'] == 2) {
        if (! empty($option['option_group_camera'])) {
            $params['camera_group'] = implode(',', $option['option_group_camera']);
        }
    }

    // ---display type---//
    // 1.hour
    // 2.date
    // 3.week
    // 4.month
    // 5.quarter
    // 6.year

    // ---option selector---//
    // 1.date
    // 2.week
    // 3.month
    // 4.quarter
    // 5.year

    // option_compare_date
    $day = 0;

    switch ($option['option_group_date']) {
        case 1:
            // hour and date
            // eg. 2021-01-01
            if (! empty($option['option_compare_date'])) {
                foreach ($option['option_compare_date'] as $value) {
                    $params['multiple_date'][] = $value;
                }
                $day = count($option['option_compare_date']);
                if ($day == 1) {
                    $params['category_type'] = 1;
                } else if ($day > 1 && $day < 59) {
                    $params['category_type'] = 2;
                } else if ($day >= 59 && $day <= 730) {
                    $params['category_type'] = 4;
                } else if ($day >= 730) {
                    $params['category_type'] = 6;
                }
            }
            break;
        case 2:
            // week
            // eg. 2021-52
            $date = array();
            foreach ($option['option_compare_date'] as $value) {
                $pdate = explode('-', $value);
                $date = getStartAndEndDate($pdate[1], $pdate[0]);
                $params['multiple_date'][] = $date['week_start'] . '|' . $date['week_end'];
            }
            $day = count($option['option_compare_date']);
            if ($day == 1) {
                $params['category_type'] = 2;
            } else {
                $params['category_type'] = 3;
            }
            break;
        case 3:
            // 3.month
            // eg. 2021-12
            foreach ($option['option_compare_date'] as $value) {
                $query_date = $value . '-01';
                // First day of the month.
                $date['month_start'] = date('Y-m-01', strtotime($query_date));
                // Last day of the month.
                $date['month_end'] = date('Y-m-t', strtotime($query_date));
                $params['multiple_date'][] = $date['month_start'] . '|' . $date['month_end'];
            }
            $day = count($option['option_compare_date']);
            if ($day == 1) {
                $params['category_type'] = 2;
            } else {
                $params['category_type'] = 4;
            }

            break;
        case 4:
            // quarter
            // eg. 2021-4
            foreach ($option['option_compare_date'] as $value) {
                $pdate = explode('-', $value);
                $year = $pdate[0];
                $quarter = $pdate[1];
                if ($quarter == 1) {
                    $date['quarter_start'] = $year . "-01-01";
                    $date['quarter_end'] = $year . "-03-31";
                } else if ($quarter == 2) {
                    $date['quarter_start'] = $year . "-04-01";
                    $date['quarter_end'] = $year . "-06-30";
                } else if ($quarter == 3) {
                    $date['quarter_start'] = $year . "-07-01";
                    $date['quarter_end'] = $year . "-09-30";
                } else if ($quarter == 4) {
                    $date['quarter_start'] = $year . "-10-01";
                    $date['quarter_end'] = $year . "-12-31";
                }
                $params['multiple_date'][] = $date['quarter_start'] . '|' . $date['quarter_end'];
            }
            $day = count($option['option_compare_date']);
            if ($day == 1) {
                $params['category_type'] = 4;
            } else {
                $params['category_type'] = 5;
            }
            break;
        case 5:
            // year
            // eg. 2021
            foreach ($option['option_compare_date'] as $value) {

                $params['multiple_date'][] = $value . '-01-01|' . $value . '-12-31';
            }
            $day = count($option['option_compare_date']);
            if ($day == 1) {
                $params['category_type'] = 4;
            } else {
                $params['category_type'] = 6;
            }
            break;
    }
    $params['date_range'] = $day;
    $params['multiple_date'] = implode(',', $params['multiple_date']);

    // time
    if (! empty($option['option_time'])) {
        $params['time_start'] = $option['option_time_start'].":00";
        $params['time_end'] = $option['option_time_end'].":59";
    }
    // recurrence
    if (! empty($option['option_recurrence'])) {
        $params['recurrence'] = implode(',', $option['option_day']);
    }
    // staff
    if (! empty($option['option_staff'])) {
        $params['staff'] = 1;
    }
    // entrance
    if (! empty($option['option_entrance'])) {
        $params['entrance'] = 1;
    }

    return $params;
}

function getAllCameraGroup($branchs = array())
{
    $camera_group = array();
    foreach ($branchs as $branch) {
        foreach ($branch['branch'] as $value) {
            foreach ($value['group'] as $v) {
                if (! empty($v['id'])) {
                    $camera_group[] = $v['id'];
                }
            }
        }
    }

    return $camera_group;
}

function getOptionDefault($branchs = array())
{
    $params = array();
    $params['camera_group'] = 0;
    $params['option_date_start'] = date('Y-m-d', time());
    $params['option_date_end'] = date('Y-m-d', time());
    $params['time_start'] = '00:00:00';
    $params['time_end'] = '23:59:59';
    $params['recurrence'] = 0;
    $params['staff'] = 0;
    $params['entrance'] = 0;
    $params['event_id'] = 0;
    $params['category_type'] = 1;
    $params['option_left'] = 1;
    $params['option_group_date'] = 1;
    $camera_group = getAllCameraGroup($branchs);

    $params['option_camera_group'] = $camera_group;

    return $params;
}

function getOptionStaff($option = array())
{
    $params = array();
    $params['branch'] = 0;
    $params['date_start'] = $option['date_start'];
    $params['date_end'] = $option['date_end'];

    return $params;
}