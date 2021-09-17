<?php
	session_start();
	include("table_content/refresh_array.php");
	include("../login/connection.php");
	include("../login/functions.php");
	include("table_content/table_data_extractor.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<script src="https://kit.fontawesome.com/51f0440eb3.js" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/120a2d9fdb.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="homestyle.css">
	</head>

	<nav class="home_navbar">
		<div class="div_top_navbar_link">
			<a class="top_navbar_link" href="../login/logout.php">Logout</a>
			<a class="top_navbar_link" href="#">Report</a>
			<a class="top_navbar_link" href="#">Expiry Information</a>
			<a class="top_navbar_link" href="../home/user-setting.php">Settings</a>
	    <a class="top_navbar_link" href="#">Order Movement</a>
	    <a class="top_navbar_link" href="../home/home.php">Home</a>
	  </div>
	</nav>

	<body>

		<h2 class="any_title" >Humidur Stock Summary</h2>
		<!-- extract data from session for each user -->
		<h4 class="current_user_session" > User ID: <?php echo $_SESSION['user_id'] ?> </h4>

		<div class="information_container">
			<abbr title="Setting"> <a id="icon_home1" class="any_icon" href="table_content/TC_setting/setting_home.php"> <i class="fas fa-edit"></i> </a> </abbr>
			<h3 class="any_subtitle" >Last Stocks Date:</h3>

			<?php include("table_content/stock_summary.php"); ?>
			<?php include("table_content/stock_location_summary.php"); ?>

			<abbr title="Setting"> <a id="icon_home2" class="any_icon" href="table_content/TC_setting/setting_home.php"> <i class="fas fa-edit"></i> </a> </abbr>
		</div>

	</body>
</html>

<!-- To improve performance -->
<?php include("table_content/refresh_array.php"); ?>
