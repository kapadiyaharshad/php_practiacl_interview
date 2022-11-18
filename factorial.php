<?php 
// // 4 * 3 * 2 * 1
// $factorial = 4;
// // $factorial = 0;
// for($i=1;$i<4;$i++){
//     $factorial = $factorial * $i; 
// }
// echo $factorial;

echo factorial_number(5);
// $count = 1;
function factorial_number($number){
    $count++;
    if($number < $count){
        return true;
    }
    return factorial_number($number -1) * $number;
}