<?php

/*
	* include autoload file
*/
require ("vendor/autoload.php");

/*
	* access to user class 
*/
use Database\Model\User as User;


/*
	*create user object
	
*/
$r=new User();

/*
	* call create user method
*/
echo "Create user function ".$r->user_create()."<br>";

/*
	Use database class with namespace
*/
use Database\DB as DB;

/*
	Create DB object
*/
$db=new DB();

/*

	Call to helper function

*/
echo create_slug('vaibhav')."<br/>";

/*
	Create object of validation class

*/
$vld=new Validation();

/*
	Validate the string
*/
echo $vld->is_alphanum("wew")."<br/>";


?>
