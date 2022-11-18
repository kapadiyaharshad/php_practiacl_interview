<?php 
$start_number = 1;
number_print($start_number);

function number_print($start_number){
    
    if($start_number <=10){
        echo $start_number." ";
    }
    number_print($start_number + 1);
}