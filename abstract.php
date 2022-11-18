<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
abstract class test{
    private $name;
    public function user($name){
      return $this->name = "My name is ".$name;
    }
    abstract function demo();
}
abstract class test2{
    public function demo2(){
        
    }
}
class test1 extends test{

    public function demo(){
        echo "abstract method call";
    }
}
$obj = new test1();
echo $data = $obj->user('Harshad');
// $obj->demo();
?>