<?php 
$a = [3,2,5,3,7];
$b = [10,500,20,59];
for($i=0;$i<count($b);$i++){
    $a[] = $b[$i];
}
echo "<pre>";
print_r($a);