<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "humidur_inventory_system";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("Failed to connect!");
}
