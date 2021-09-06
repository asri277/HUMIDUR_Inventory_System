<?php

	session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (!empty($username) && !empty($password) && !is_numeric($username))
		{
			//read from database
			$query = "select * from users where username = '$username' limit 1";
			
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}

			echo "Incorrect username or password!";
			
		}else{
			echo "Please enter valid information!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>

	<style type="text/css">

		#text{

			height: 25px;
			border-radius: 5px;
			padding: 0px;
			border: solid thin #aaa;
			width: 100%;
		}

		#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

		#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>
			<input placeholder="Username" id="text" type="text" name="username"><br><br>
			<input placeholder="Password" id="text" type="password" name="password"><br><br>

			<input id="button"type="submit" value="Login"><br><br>

			<a href="signup.php">Register new account!</a><br><br>
			<a href="home.php">Back to Home</a>
		</form>
	</div>
	

</body>
</html>