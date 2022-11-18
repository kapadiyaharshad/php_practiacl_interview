<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require "test.php";
    require "test1.php";
    $obj_test1 = new test\Test();
    echo "<br>";
    $obj_test2 = new test1\Test1();
?>