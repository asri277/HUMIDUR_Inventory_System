<?php
	session_start();

	include("connection.php");

	$total = 0;

	$query = "select id FROM color";
	$result = mysqli_query($con,$query);
	$row_temp = mysqli_num_rows($result);
	$countrow = $row_temp+1;
	echo $countrow;

	// //////////////////

	$query = "select id FROM color where id = '$countrow'";
			
	$result = mysqli_query($con, $query);




	if (mysqli_num_rows($result) > 0) {
	 	// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "id: " . $row["id"];
			$temp = $row["id"];

			while ($countrow == $temp)
			{
				$countrow = $countrow + 1;

				$query = "select id FROM color where id = '$countrow'";
				$result = mysqli_query($con, $query);

				if (mysqli_num_rows($result) > 0)
				{
					while ($row = mysqli_fetch_assoc($result))
					{
						echo "id: " . $row["id"]; 
						$temp = $row["id"];
					}
				}
			}

		}

	} else {
	  echo "0 results";
	}




	// if ($result)
	// {
	// 	while ($countrow == )
	// 	{	
	// 		$countrow = $countrow + 1;

	// 		$result = mysqli_query($con, $query);
	// 	}
		
	// }

	

	



	// /////////////////////

	// $query_temp = "select id FROM color where id = '$countrow'";
	// $result = mysqli_query($con, $query);
	// $row_temp = mysqli_num_rows($result);
	// echo $row_temp;
	// if ($row_temp == 1)
	// {
	// 	$countrow = $countrow+1;
	// }

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$ral_no = $_POST['ral_no'];
		$color_name = $_POST['color_name'];
		$spc = $_POST['spc'];

		if (!empty($ral_no) && !empty($color_name) && !is_numeric($color_name))
		{

		// $query = "select * from color";
			// $result = mysqli_query($con, $query);

			// $rowcount=mysqli_num_rows($result);

			// $result = mysql_query("select * FROM color");
			// $row = mysql_fetch_array($result);
			// $total = $row[0];

			//save to database
			$query = "insert into color (id, ral_no,color_name,spc) values ('$countrow','$ral_no','$color_name','$spc')" ;
			
			mysqli_query($con, $query);

			// header("Location: login.php");
			// die;
		}else{
			echo "Please enter valid information!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>COLOR</title>
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
			<div style="font-size: 20px;margin: 10px;color: white;">COLOR</div>
			<label for="id">ID : </label><?php echo $countrow ?><br><br>
			<input placeholder="RAL NUMBER" id="text" type="text" name="ral_no"><br><br>
			<input placeholder="COLOR NAME" id="text" type="text" name="color_name"><br><br>
			<input placeholder="EX. SPC123" id="text" type="text" name="spc"><br><br>

			<input id="button"type="submit" value="Add new data"><br><br>

			<a href="home.php">Back to Home</a><br><br>
		</form>
	</div>
	

</body>
</html>