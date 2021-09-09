<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TEST HUMIDUR</title>
</head>
<body>
	<a href="logout.php">Logout</a>
	<h1>HUMIDUR TEST</h1>

</body>
</html>
