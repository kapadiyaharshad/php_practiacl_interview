<?php 
// class Animal{
//     public function get_detail(){
//         echo "parent details method";
//     }
// }
// class Dog extends Animal{
//     public function get_detail()
//     {
//         parent::get_detail();
//         echo "<br>";
//         echo "child details method";
//     }
// }
// $obj = new Dog();
// $obj->get_detail();
$arr = [5,1,10,3,20];
for($i=0;$i<count($arr)-1;$i++){
    for($j=$i;$j<=count($arr)-1;$j++){
        if($arr[$i]>$arr[$j]){
            $temp = $arr[$j];
            $arr[$j]=$arr[$i];
            $arr[$i] = $temp ;
        }
    }
}
echo "<pre>";
print_r($arr);
?>