<?php 
$date = strtotime('06-08-2022');
$date_2 = strtotime('07-08-2022');
$diff_date = $date_2 - $date;
echo $days = ($diff_date / (60 * 60 * 24));