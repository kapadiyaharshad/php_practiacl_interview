<?php 
$number = 23;
$check_prime_number = check_number($number);
if($check_prime_number == 1){
    echo "Prime Number";
}
else{
    echo "Not Prime Number";
}

function check_number($number){
    for($i=2;$i<$number/2;$i++){
        if($number % $i == 0){
            return 0;
        }
    }
    return 1;
   
}