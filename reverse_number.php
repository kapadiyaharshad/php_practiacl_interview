<?php 
$number = 12345;
$rev = 0;
while($number > 1){
    $rem = $number % 10;
    $rev = $rev * 10 + $rem;
    $number = $number / 10;
}
echo $rev;