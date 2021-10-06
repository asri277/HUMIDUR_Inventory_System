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

		// link yg maybe membantu hg untuk settle kan proses nie
		// https://www.11zon.com/zon/php/how-to-edit-data-in-php-using-form.php
		// https://www.codemag.com/article/1511031/CRUD-in-HTML-JavaScript-and-jQuery

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

		$tempUserID = $user_data['user_id'];

		$query = "UPDATE `users` SET `username` ='$tempUsername',`password` ='$tempPassword' WHERE `users`.`user_id` ='$tempUserID'";

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
    <a class="top_navbar_link" href="../home/home.php">Home</a>
	</div>
</nav>

<body>
	<h2 class="any_title" >USER SETTINGS</h2>
	<!-- extract data from session for each user -->
	<h4 class="current_user_session" > User ID: <?php echo $_SESSION['user_id'] ?> </h4>

	<div class="information_container">
		<h3 class="any_subtitle" >User Information:</h3>

		<div id="box">
			<form method="post">

				<!-- use value instead of placeholder -->
				<!-- sbb placeholder kegunaan dia untuk display info je
				cth: nk bagitau user maklumat apa yg nk dimasukkan
						 kalau value, data yang kita nk display atau data awal yg kita anggap user masukkan melalui input tag.
					 cth: data mentah yg ditarik dari database (data betul yg bukan tujuan untuk info semata)-->

				 <!-- recommended: hg guna javaScript untuk features yg bila kita tekan edit symbol setting, input box akan available
				 untuk new input, meaning pada asalnya, input box tu disable sbb awal nye kita nk display je current data users.

			  link yg aq rasa akan membantu hg:
			 	https://www.w3schools.com/tags/att_input_disabled.asp
				https://www.w3schools.com/howto/howto_js_toggle_password.asp

				cara aq study, walaupun dua link ni ajar benda yang berbeza, kalau kita pikir balik dari cara yg dia ajar kita boleh
				combinekan dua cara nie untuk dapatkan features yang kita nk. -->

				<!-- *comment nie boleh padam nnti sbb nie aq bagi review je supaya dalam masa yg sama hg boleh belajar sekali
				dgn implement terus, kalau aq terang direct nnti fhm2 la aq susah nk susun ayat aq XD -->

				<h4 class="any_subtitle" >Username: <?php echo $user_data['username'] ?></h4>
				<input id="editUsername" class="user_setting_input" value="<?php echo $user_data['username'] ?>" type="text" name="username" disabled><br>

				<h4 class="any_subtitle" >Password:</h4>
				<input class="user_setting_input" value="<?php echo $user_data['password'] ?>" type="password" name="password" id="visiblePass" ><br>

				<input class="user_setting_input" style="margin-top: 10px;" type="checkbox" onclick="showPassword()" name="show_password" >
				<label for="show_password">Show Password</label>

				<h4 class="any_subtitle" >Name:</h4>
				<input id="editName" class="user_setting_input" value="<?php echo $user_data['name'] ?>" type="text" name="name" size="50"><br>

				<h4 class="any_subtitle" >User Type: <?php echo $user_data['user_type'] ?></h4>

				<h4 class="any_subtitle" >Phone Number:</h4>
				<input id="editPhoneNumber" class="user_setting_input" value="<?php echo $user_data['phone_number'] ?>" type="text" name="phone_number"><br><br>

				<!-- <input href="javascript:void(0)" class="user_setting_input" onclick="enableEdit()" id="button" type="submit" value="Save"><br><br> -->

				<!-- <input class="user_setting_input" id="button" type="submit" value="Edit" onclick="enableEdit()"><br><br> -->

				<input class="user_setting_input" type="submit" name="submit" value="Submit">
			</form>
			<button class="user_setting_input" onclick="enableEdit()">Edit</button>
		</div>

		<abbr title="Setting"> <a id="icon_home2" class="any_icon" href="#"> <i class="fas fa-edit"></i> </a> </abbr>
	</div>

	<script>
	function showPassword() {
	  var x = document.getElementById("visiblePass");

	  if (x.type === "password") {
	    x.type = "text";
	  }
	  else {
	    x.type = "password";
	  }
	}

	function enableEdit() {
		// var x = document.getElementsById("editUsername");
		document.getElementById("editUsername").disabled = false;
		document.getElementById("editPassword").disabled = true;
		// if (x.disabled == false) {
		// 	x.disabled = true;
		// }
		// else {
		// 	x.disabled = false;
		// }
	}
	</script>


</body>
</html>
