<?php 
function setPercent($number=0,$total=0, $decimal=2){
    $percent = ($number/$total)*100;
    $percent = number_format($percent, $decimal, '.','');
    
    return $percent;
}
?>