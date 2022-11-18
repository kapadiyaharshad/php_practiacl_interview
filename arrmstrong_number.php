<?php 
$number = $oringal_number = 152;
$armstrong_number = 0;
while($number > 1){
    $rem = $number % 10; // 3
    $armstrong_number = $armstrong_number + ($rem * $rem * $rem); // 27 + 125 
    $number = $number / 10; // 15
}

if($armstrong_number === $oringal_number){
    echo "Armestorong number";
}
else{
    echo "Not Armestorong number";
}
