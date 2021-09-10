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
						header("Location: ../home/home.php");
						die;
					}
				}
			}

			?>
		    <script type="text/javascript">
			    alert(' Incorrect username or password! ');
			    window.location='../login/login.php';
		    </script>
	    <?php
			// echo "Incorrect username or password!";

		}else{
			?>
		    <script type="text/javascript">
			    alert(' Please enter valid information! ');
			    window.location='../login/login.php';
		    </script>
	    <?php
			// echo "Please enter valid information!";
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

		<div id="box">

			<form method="post">
				<div style="font-size: 20px;margin: 10px 0px 10px 0px;color: #000000;">Login</div>
				<input placeholder="Username" id="text" type="text" name="username"><br><br>
				<input placeholder="Password" id="text" type="password" name="password"><br><br>

				<input id="button"type="submit" value="Login"><br><br>

				<a class="link_button_login" href="#">Register new account!</a><br><br>
				<a class="link_button_login" href="../index.php">Back to Home</a>
			</form>
		</div>

	</body>
</html>

<style type="text/css">
	body{
		background-color: #E0E0E0;
	}

	#text{
		height: 25px;
		border-radius: 5px;
		padding: 0% 0% 0% 2%;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{
		padding: 10px;
		width: 100px;
		color: #000000;
		background-color: #FFFFFF;
		border: none;
		box-shadow: 0px 1px 2px #404040;
		transition: 0.3s;
	}

	#button:hover{
		background-color: lightblue;
	}

	#box{
		background-color: #FFFFFF;
		margin-top: 11%;
		margin-left: auto;
		margin-right: auto;
		width: 300px;
		padding: 20px;
		box-shadow: 0px 1px 2px #404040;
	}

	.link_button_login{
		text-decoration: none;
		color: #A0A0A0;
		font-size: 80%;
		transition: 0.3s;
	}

	.link_button_login:hover{
		color: blue;
	}

</style>
