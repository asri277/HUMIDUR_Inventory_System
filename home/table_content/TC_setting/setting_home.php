<?php
	session_start();
  include("../../../login/connection.php");
  include("functions.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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
        <a href="#">Color</a>
        <a href="#">Packaging Size</a>
        <a href="#">Location</a>
        <a href="#">Clients</a>
        <a href="#">Suppliers</a>
      </div>

      <div id="table_list" class="nav_container_inside">
        <span class="link_nav_top" style="cursor:pointer" onclick="openNav()">&#9776; Table List</span>
      </div>

    </nav>
  </body>
</html>

<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "#E0E0E0";
  }
</script>

<style type="text/css">

  *{
    margin: 0%;
    padding: 0%;
  }

  body{
    background-color: #E0E0E0;
    transition: background-color .5s;
  }

  nav{
    display: block;
    position: fixed;
    background-color: #3333FF;
    /* margin: top right bottom left  */
    padding: 1% 0% 1% 0%;
    width: 100%;
    box-shadow: 0px 1px 2px #404040;
    /* border: 1px solid #000000; */
  }

  .nav_container_inside{
    text-align: center;
    width: 10%;
    height: 50px;
    float: left;
  }

  .link_nav_top{
    /* border: 1px solid #000000; */
    text-decoration: none;
    font-family: arial;
    color: #FFFFFF;
    float: inherit;
    width: 100%;
    /* margin: top right bottom left  */
    padding: 11% 0% 11% 0%;
    transition: 0.3s;
  }

  .link_nav_top:hover{
    color: #FFFF33;
  }

  #back_to_home{
    /* margin: top right bottom left  */
    margin: 0% 1% 0% 1%;
    /* border: 1px solid #000000; */
  }

  #table_list{
    /* margin: top right bottom left  */
    margin: 0% 1% 0% 1%;
    /* border: 1px solid #000000; */
  }

/* -------------------------------------------------------------------------- */
/* Slide Menu Design */
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  /* margin: top right bottom left  */
  padding: 20px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #FFFFFF;
  display: block;
  font-family: arial;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #FFFF33;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

</style>
