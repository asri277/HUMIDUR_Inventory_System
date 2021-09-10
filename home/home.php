<?php
session_start();

	include("../login/connection.php");
	include("../login/functions.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>HOME</title>
		<link rel="stylesheet" type="text/css" href="homestyle.css">
	</head>

	<nav class="home_navbar">
		<div class="div_top_navbar_link">
			<a class="top_navbar_link" href="../login/logout.php">Logout</a>
			<a class="top_navbar_link" href="#">Report</a>
			<a class="top_navbar_link" href="#">Expiry Information</a>
	    <a class="top_navbar_link" href="#">Order Movement</a>
	    <a class="top_navbar_link" href="../home/home.php">Home</a>
	  </div>
	</nav>

	<body>

		<h2 class="any_title" >Humidur Stock Summary</h2>

		<div class="information_container">
			<h3 class="any_subtitle" > Date: </h3>
			<?php include("table_content/stock_summary.php") ?>
		</div>

	</body>
</html>
