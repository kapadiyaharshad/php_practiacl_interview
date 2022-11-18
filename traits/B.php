<?php 
include 'trait_example.php';
Class B{
use user;
}
$obj = new B();
$obj->userDetails();