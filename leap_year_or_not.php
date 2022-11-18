<?php

// $year = 2000;

// if((($year % 4) == 0) && (($year % 100 ) != 0) || (($year % 400) == 0)) {
//     // if ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0))){
//     echo "Leap Year";
// }
// else{
//     echo "Not leap year";
// }
$start_year = 1991;
$end_year = 2016;
for ($start_year = 1991; $start_year <= $end_year; $start_year++) {
    $check_year = check_year($start_year);
    if($check_year == 1){
        echo "This year is leap year".$start_year;
        echo "<br/>";
    }
    else{
        echo "This year is not leap year".$start_year;
        echo "<br/>";
    }
}

function check_year($year)
{
    if ((($year % 4) == 0) && (($year % 100) != 0) || (($year % 400) == 0)) {
        return 1;
    }
    else {
        return 0;
    }
}