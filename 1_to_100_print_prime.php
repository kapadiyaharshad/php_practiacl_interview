<?php 
$number = 100;
// $check_prime_number = check_number($number);
for($j=2;$j<=$number;$j++){
    $check_prime_number = check_number($j);
    if($check_prime_number == 1){
        $prime_number_arry[] = $j;
    }
    
}
echo "<Pre>";
print_r($prime_number_arry);
function check_number($number){
    for($i=2;$i<$number;$i++){
        if($number % $i == 0){
            return 0;
        }
    }
    return 1;
   
}