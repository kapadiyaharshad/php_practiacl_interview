<?php 
$str = "my name is harshad";
//output maia
$str_array = explode(" ",$str);
$output = '';
foreach($str_array as $val){
    // echo strlen($val);die;
    if(strlen($val) == 2){
        $output .= substr($val,0,1);
    }
    else{
        $output .= substr($val,1,1);
    }
}
echo $output;

