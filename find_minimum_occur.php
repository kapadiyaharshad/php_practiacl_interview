<?php
// Your code here!
$arr = [1,3,4,5,1,2,1,3,4,5,5,6,6];
$itemCountArray = [];
foreach($arr as $val)
{       
    if($itemCountArray[$val]){
        $itemCountArray[$val] += 1;
    }
    else{
        $itemCountArray[$val] = 1;
    }
	
}
asort($itemCountArray);
$arry_key= array_keys($itemCountArray);
    // $output = reset($key_value);
    echo "<pre>";
    print_r($itemCountArray);

    print_r(reset($arry_key));


?>
