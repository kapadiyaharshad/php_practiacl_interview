<?php 
$str = 'ABCD';
$strReversed = '';
$length = strlen($str);
for($i=$length; $i >= 0; $i--){
    $strReversed .= $str[$i];
}
echo $strReversed;

?>