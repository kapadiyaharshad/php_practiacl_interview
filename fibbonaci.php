<?php
$num = 0;
$num_2 = 1;
$number = 8;
$count = 0;
while($number > $count){
    $count++;
    echo $num." "; // 0 1 1 2
    $nub_3 = $num + $num_2; // 3 
    $num = $num_2; // 2 
    $num_2 = $nub_3; // 1 2 3 
}