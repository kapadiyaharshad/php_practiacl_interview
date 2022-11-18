<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
interface test
{
    function demo();
   //  function user();
}
interface test2{
   public function demo2();
}
class test3 implements test,test2
{
   
   public function demo()
   {
      
      echo "demo for interface extend";
   }
   public function demo2()
   {
      echo "demo 2 another interface";
   }
}

$obj = new test3();
$obj->demo();
