<?php
include 'trait_example.php';
class A
{
    use user;
}

$obj = new A();
$obj->userDetails();
