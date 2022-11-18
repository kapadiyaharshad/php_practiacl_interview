<?php 
$array = [10,1,3,23,8];

for($i=0;$i<count($array);$i++){
    for($j= $i+1;$j<count($array);$j++){
        if($array[$i] > $array[$j]){
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
echo "<pre>";
print_r($array);