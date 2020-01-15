<?php
include 'connection.php';
error_reporting(0);
?>
<html>
<head>
	<title>Owner Insert</title>
	<style>
		h1
		{
			padding: 40px;
		}
		form
		{
			padding: 40px;
		}
		input
		{
			margin: 10px;
		}
	</style>
</head>
<body background="red-yellow-lines-wave-shape-beautiful-background-web-texture-use-website-ui-ux-designs-best-mobile-application-145059904.jpg">
		<a href="index.html"><h4>Go Back To Home Page</h4></a>
	<center>
		<h1>
			Enter The Owner Details
		</h1>
<form action="" method="GET">
	OWNER NUMBER <input type="number" name="onum" value=""/><br><br>
	OWNER NAME <input type="text" name="oname" value=""/><br><br>
	OWNER ADDRESS <input type="text" name="oaddr" value=""/><br><br>
	OWNER MOBILE <input type="text" name="omobile" value=""/><br><br>
	BUS NUMBER <input type="number" name="busno" value=""/><br><br>

	<input type="submit" name="Submit" value="Submit">
	
</form>

<?php

if($_GET['Submit'])
{
	$on = $_GET['onum'];
	$ona = $_GET['oname'];
    $oad = $_GET['oaddr'];
    $omb = $_GET['omobile'];
    $bno = $_GET['busno'];


	if($on != "" && $ona != "" && $oad != "" && $omb != "" && $bno != "")
	{
		$query = "INSERT INTO owner VALUES ('$on','$ona','$oad','$omb','$bno')";
		$data = mysqli_query($conn,$query);

		if($data)
		{
			echo "Data inserted successfully";
		}
		else
		{
			error_get_last();
		}

	}
	else
	{
		echo "All Fields Are Required";
	}
}
?>
</center>
</body>
</html>