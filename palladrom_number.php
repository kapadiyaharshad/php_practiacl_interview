<?php 
$number = $original = 1235321;
$rev = 0;
while($number > 1){
    $rem = $number % 10;
    $rev = $rev * 10 + $rem;
    $number = $number / 10;
}

if($rev == $original){
    echo "Yes paladrom";
}else{
    echo "Not  paladrom";
}
