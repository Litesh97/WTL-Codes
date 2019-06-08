<?php

$server = 'localhost';
$username = 'root';
$pass = 'ac21';
$db = 'test';

$connection = new mysqli($server,$username,$pass,$db); //improved

if($connection->connect_error)
{
	die("Connection error".$connection->connect_error);
}







?>
