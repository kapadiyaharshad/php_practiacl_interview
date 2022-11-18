<?php
// $array = array(3,5,3,2,5,3,9,9,2);
$array = array(3,5,3,2,5,3,9,9,2,1);
$temp_array = [];
foreach($array as $value){
    if(isset($temp_array[$value])){
        $temp_array[$value] = $value;
    }
    else{
        $temp_array[$value] = 0;
    }
}

// echo "<pre>";
// print_r($temp_array);die;
foreach($temp_array as $temp_value){
    if($temp_value > 0){
        echo $temp_value ." ";
    }
}