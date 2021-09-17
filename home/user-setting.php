<?php
	session_start();
	include("../login/connection.php");
	include("../login/functions.php");

	$user_data = check_login($con);

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		
		//save to database
		// $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
		
			
		mysqli_query($con, $query);

		if (empty($username)){
			$tempUsername = $user_data['username'];
		}
		else{
			$tempUsername = $username;
		}

		if (empty($password)){
			$tempPassword = $user_data['password'];
		}
		else{
			$tempPassword = $password;
		}

		$tempUserID = user_data['user_id'];

		$query = "UPDATE users SET username='$tempUsername',password='$tempPassword' WHERE user_id='$tempUserID'";

		if ($con->query($query) === TRUE) {
			header("Location: user-setting.php");
  			echo "Record updated successfully";
		} else {
  		echo "Error updating record: " . $conn->error;
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Setting</title>
	<script src="https://kit.fontawesome.com/51f0440eb3.js" crossorigin="anonymous"></script>
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
	<h2 class="any_title" >USER SETTINGS</h2>
	<!-- extract data from session for each user -->
	<h4 class="current_user_session" > User ID: <?php echo $_SESSION['user_id'] ?> </h4>

	<div class="information_container">
		<h3 class="any_subtitle" >USER INFORMATION:</h3>

		<div id="box">
			<form method="post">
				<h4 class="any_subtitle" >Username: <?php echo $user_data['username'] ?></h4>
				<input class="user_setting_input" placeholder="<?php echo $user_data['username'] ?>" type="text" name="username"><br>
				<h4 class="any_subtitle" >Password</h4>
				<input class="user_setting_input" placeholder="<?php echo $user_data['password'] ?>" type="password" name="password"><br>
				<h4 class="any_subtitle" >Name</h4>
				<input class="user_setting_input" placeholder="<?php echo $user_data['name'] ?>" type="text" name="name" size="50"><br>
				<h4 class="any_subtitle" >User Type: <?php echo $user_data['user_type'] ?></h4>
				<h4 class="any_subtitle" >Phone Number</h4>
				<input class="user_setting_input" placeholder="<?php echo $user_data['phone_number'] ?>" type="text" name="phone_number"><br><br>

				<input class="user_setting_input" id="button"type="submit" value="Save"><br><br>
			</form>
		</div>

		<abbr title="Setting"> <a id="icon_home2" class="any_icon" href="table_content/TC_setting/setting_home.php"> <i class="fas fa-edit"></i> </a> </abbr>
	</div>




	
</body>
</html>