<?php
$str = "harshad";
$str2 = "kapadiya";
$str_split = str_split($str);
$str_2_split = str_split($str2);
$str_len = strlen($str);
$str_2_len = strlen($str2);
$max_len = max($str_len,$str_2_len);
$output = '';

 for($i=0;$i<=$max_len;$i++){
    if(array_key_exists($i,$str_split)){
        $output .= $str_split[$i];
    }
    if(array_key_exists($i,$str_2_split)){
        $output .= $str_2_split[$i];
    }
 }
 echo $output;