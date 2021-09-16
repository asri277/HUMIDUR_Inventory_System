<?php
	session_start();
  include("../../../login/connection.php");
  include("functions.php");

	$user_data = check_login($con);

	include("setting_home_style.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
		<script src="table_responsive.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/51f0440eb3.js" crossorigin="anonymous"></script>
    <title>Table Setting</title>
  </head>
  <body>
    <nav>

      <div id="back_to_home" class="nav_container_inside">
        <a class="link_nav_top" href="../../home.php">&#10094; Back</a>
      </div>

      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#" onclick="openColor()" >Color</a>
        <a href="#" onclick="openPackaging_size()" >Packaging Size</a>
        <a href="#" onclick="openLocation()" >Location</a>
        <a href="#" onclick="openClient()" >Clients</a>
        <a href="#" onclick="openSupplier()" >Suppliers</a>
      </div>

      <div id="table_list" class="nav_container_inside">
        <span class="link_nav_top" style="cursor:pointer" onclick="openNav()">&#9776; Table List</span>
      </div>

			<h2 id="tt1" class="table_title">Table Color</h2>
			<h2 hidden id="tt2" class="table_title">Table Packaging Size</h2>
			<h2 hidden id="tt3" class="table_title">Table Location</h2>
			<h2 hidden id="tt4" class="table_title">Table Client</h2>
			<h2 hidden id="tt5" class="table_title">Table Supplier</h2>

    </nav>

		<div id="table_color" class="container_design">
			<?php include("table_color.php"); ?>
		</div>

		<div hidden id="table_packaging_size" class="container_design">
			<?php include("table_packaging_size.php"); ?>
		</div>

		<div hidden id="table_location" class="container_design">
			<?php include("table_location.php"); ?>
		</div>

		<div hidden id="table_client" class="container_design">
			<?php include("table_client.php"); ?>
		</div>

		<div hidden id="table_supplier" class="container_design">
			<?php include("table_supplier.php"); ?>
		</div>

  </body>
</html>

<?php include("TC_refresh_array.php") ?>
