<?php 
// $table_number = 5;
// for($i=1;$i<=10;$i++){
//     echo "$table_number"."*". $i."=".$table_number * $i;
//     echo "<br>";
// }
$table_number = 5;
$from_start = 1;
print_table($table_number,$from_start);

function print_table($table_number,$from_start){
    if($from_start <= 10){
        echo $table_number * $from_start;
        echo "<br>";
    }
    
    print_table($table_number, $from_start + 1);
}