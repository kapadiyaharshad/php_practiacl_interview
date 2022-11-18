<?php 
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
ini_set('display_errors',1);
$array = [7,3,5,20,4,2];
$first = $second = $array[0];
for($i=0;$i<=count($array)-1;$i++){
    if($array[$i] > $first){  
        $second = $first;
        $first = $array[$i];
    }
    else if($array[$i] > $second && $array[$i] != $first){
        $second = $array[$i];
    }
    
}
echo $first;
echo $second;


// $array = array('2','1','200','15','300','500','69','422','399','201','299');
// $secondHighest=$highest= $array[0];
// for ($i=0; $i < count($array); $i++) { 

//     if ($array[$i] < $highest ) {
//         $secondHighest=$highest;
//         $highest=$array[$i];
//     }elseif ( $array[$i] < $secondHighest ) {
//         $secondHighest= $array[$i];
//     }
// }
// echo $secondHighest;
// echo "<br>";
// echo $highest;
?>