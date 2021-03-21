<?php

function getWeekByDayStart($day_start = 1, $year = '', $format = '')
{
    // day_start = day start on week
    // monday = 1
    // sunday = 7
    if (empty($year)) {
        $year = date('Y', time());
    }
    if (empty($format)) {
        $format = 1;
    }
    $first_day = $year . '-01-01';
    $first_day_string = date('l', strtotime($first_day));
    $first_day_string = strtolower($first_day_string);
    $array_day = array(
        "monday" => 1,
        "tuesday" => 2,
        "wednesday" => 3,
        "thursday" => 4,
        "friday" => 5,
        "saturday" => 6,
        "sunday" => 7
    );
    $day_diff = $day_start - $array_day[$first_day_string];
    $result = date('Y-m-d', strtotime($day_diff . " day", strtotime($first_day)));
    $valid = '';
    for ($i = 0; $i < 7; $i ++) {
        $day_next = date('d', strtotime("+" . $i . " day", strtotime($result)));
        if ($day_next == 4) {
            $valid = 1;
        }
    }
    $day_next = date('d', strtotime("+6 day", strtotime($result)));
    if (empty($valid)) {
        if ($day_next < 4) {
            $result = date('Y-m-d', strtotime("+7 day", strtotime($result)));
        }
        if ($day_next > 4) {
            $result = date('Y-m-d', strtotime("-7 day", strtotime($result)));
        }
    }

    // feb is 29 day per 4 year
    $week_number = 52;
    if ($year % 4 == 0) {
        $week_number = 53;
    }

    $array_week = array();
    for ($i = 1; $i <= $week_number; $i ++) {
        $end = ($i * 7) - 1;
        if ($format == 1) {
            $date_end = date('Y-m-d', strtotime("+" . $end . " day", strtotime($result)));
            $date_end_format = date('M,d', strtotime("+" . $end . " day", strtotime($result)));
            $date_start_format = date('M,d', strtotime("-6 day", strtotime($date_end)));
            $array_week[$i] = 'W' . $i . ' (' . $date_start_format . '-' . $date_end_format . ')';
        } else if ($format == 2) {
            $array_week[$i] = date('Y-m-d', strtotime("+" . $end . " day", strtotime($result)));
        }
    }
    return $array_week;
}

function getStartAndEndDate($week, $year)
{
    $date = new DateTime();
    $date->setISODate($year, $week);
    $result['week_start'] = $date->format('Y-m-d');
    $date->modify('+6 days');
    $result['week_end'] = $date->format('Y-m-d');

    return $result;
}