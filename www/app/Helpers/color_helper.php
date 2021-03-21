<?php
function setHeatmapColor($number = 0, $min = 0, $max = 0)
{
    $result = '';
    if ($number < $min) {
        //green
    } else if ($number >= $min && $number > $max) {
        //yellow
    } else if ($number >= $max) {
        //red
    }

    return $result;
}












