<?php

// $array = [1,80,3,4];
// $array2 = [5,60,7,8];
// // echo 
//  print_r(array_merge($array,$array2));
//  echo "<br>";
// $arr_merge = [];

// $count_array = count($array);
// $count_array2 = count($array2);
// $max = max($count_array,$count_array);

// for($i=0;$i<=$max;$i++){
//     if($array[$i] != ''){
//         $arr_merge[] = $array[$i];
//     }
//     if($array2[$i] != ''){
//         $arr_merge[] = $array2[$i];
//     }
// }

// // echo "<pre>";
// print_r($arr_merge);
// $arr = [1,4,5,0,8,0,1,0];
// $number = $original= 151;
// $rev = 0;
// while($number > 1){
//     $rem = $number % 10;
//     $rev = $rem + $rev * 10; // 3 + 0 = 3
//     $number = $number / 10;
// }
// if($rev === $original){
//     echo "pandroiom";
// }
// else{
//     echo "not pandroiom";
// }
// *
// **

// $size = 5;
// for($i=1;$i<=$size;$i++){
//     for($j=1;$j<=$size-$i;$j++){
//         echo "&nbsp;&nbsp;";
//     }
//     for($k=1;$k<=$i;$k++){
//                 echo "* &nbsp";
//     }
// echo "<br />";
// }

// $str = "harshad";
// $index = 0;
// $rev = '';
// while(!empty($str[$index])){
//     $rev = $str[$index].$rev; 
//     $index++;
// }
// echo $rev;
// $table = 5;
// for($i=1;$i<=10;$i++){
//     echo $table * $i;
//     echo "<br>";
// }
// table(1);
// function table($number){
//     $table = 10;
//     if($table >= $number){
//         echo $number * $table;
//         echo "<br>";
//     }
//         return table($number +1);

// }
// table(10,1);
// function table($tablleNumber,$index){
//     if($tablleNumber >= $index){
//         echo $tablleNumber * $index;
//         echo "<br>";
//     }
//     table($tablleNumber,++$index);
// }
// 5*4
// 5*3
// 5*2;
// $fac = 5;
// $sum = 1;
// for($i=$fac;$i>1;$i--){
//         $sum = $sum * $i;
// echo "<br>";
// $sum = $fac * $i;
// }
// echo $sum;
// echo fact(5);

// function fact($num){
//     if($num < 1){
//         return 1;
//     }
//     return($num * fact($num - 1));
// }

//minimum occur
// $arr = [1,3,6,1,2,4,7,8,9,3,4,7,8,6,2];
// $countArray = [];
// foreach($arr as $val){
//     if($countArray[$val]){
//         $countArray[$val] += 1;
//     }
//     else{
//         $countArray[$val] = 1;
//     }
// }
// asort($countArray);
// $val = array_keys($countArray);
// echo "<pre>";
// print_r($val[0]);

// $str1 = 'harshad';
// $str2 = 'kapadiya';
// $cnt1 = strlen($str1);
// $cnt2 = strlen($str2);
// $max = max($cnt1,$cnt2);
// $newString = '';
// for($i=0;$i<=$max;$i++){
//     if(!empty($str1[$i])){
//         $newString .=$str1[$i];
//     }
//     if(!empty($str2[$i])){
//         $newString .=$str2[$i];
//     }
// }
// echo $newString;

// 0 1 1 2 3 5 8 ....
// 
// $primeNumber = [];
// $check = true;

// if ($check) {
//     echo "prime";
// } else {
//     echo "not prime";
// }
// if($primeNumber % 2 == 0){
//     echo "Not prime";
// }
// else{
//     echo "prime";
// }
// $number = 50;
// for($i=2;$i<$number;$i++){
//     $isPrime = true;
//     for($j=2;$j<($i/2);$j++){
//         if($i%$j == 0){
//             $isPrime=false;
//         }
//     }
//     if($isPrime){
//         $primeNumber[] = $i;
//     }
// }
// echo "<pre>";
// print_r($primeNumber);
// $number =  $original = 153;
// $sum = 0;
// 1+125+1
// while($number>1){
//     $rem = $number % 10;
//     $sum = $sum + $rem * $rem * $rem;
//     $number = $number /10;
// }
// echo $sum;
// if($original == $sum){
//     echo "armostorng";
// }
// else{
//     echo "not artostrong";
// }

// $str = "parshappd";
// $len = strlen($str);
// $count = $max = 0;
// $storeArray = [];
// $repeatStr = '';

// for ($i = 0; $i < $len; $i++) {
//     $count = 0;
//     for($j=0;$j<$len;$j++){
//         if($str[$i] == $str[$j]){
//             $count++;
//         }
//     }
//     if($max < $count){
//         $max = $count;
//         // echo $max;
//         $repeatStr = $str[$i];
//     }
// }
// echo $repeatStr;
// echo $max;

// $arr = [1,3,5,1,4,5,5];
// $storeArray = [];
// foreach($arr as $val){
//     $storeArray[$val] = $storeArray[$val] ? $storeArray[$val] + 1 : 1;
// }
// asort($storeArray);
// $value = array_keys($storeArray);
// echo "<pre>";
// print_r($value[0]);
// $countArray = count($arr);
// $count = $max = 0;
// for($i=0;$i<$countArray;$i++){
//     $count = 0;
//     for($j=0;$j<$countArray;$j++){
//         if($arr[$i] == $arr[$j]){
//             $count++;
//         }
//     }
//     if($max < $count){
//         $max = $count;
//         $output = $arr[$i];
//     }
// }
// echo $output;
// echo "repeated:".$max;
// $arr = [1,3,5,1,4,5,5,4];
// $length = count($arr);
// $count =0;
// for($i=0;$i<$length;$i++){
//     $count=0;
//     for($j=0;$j<$length;$j++){
//         if($arr[$i] == $arr[$j]){
//             $count++;
//         }
//     }
//     if($count > 1){
//         $newArray[$arr[$i]] = $arr[$i];
//     }
// }
// echo "<pre>";
// print_r($newArray);
//  nxti7o

// $number = 6;
// if(($number/2) *2 === $number){
//     echo "even number";
// }
// else{
//     echo "odd number";
// }
// $arr = [1,2,3,4,5,6,9,10,44];
// for($i=1;$i<=max($arr);$i++){
//     if(!in_array($i,$arr)){
//         $newArray[] = $i; 
//     }
// }
// echo "<pre>";
// print_r($newArray);
$string="ali is good by";
$len = strlen($string);

$vowels = array('a','e','i','o','u');
$count = 0;
for($i=0;$i<=$len;$i++){
    if(in_array($string[$i],$vowels))
    {
        $count++;
        // $newArray[$string] = $count;
    }
}
echo $count;
?>
<!-- <body>
<div onclick="alert('div1')">
    <div onclick="alert('div 2')">
    <span onclick="alert('span')">span bubble click</span>
</div>
</div>
</body>
<script>
   
</script> -->