<!DOCTYPE html>
<?php
include 'connection.php';
error_reporting(0);
?>
<html>
<head>
<title>Bus Insert</title>
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
	</style></head>
<body background="red-yellow-lines-wave-shape-beautiful-background-web-texture-use-website-ui-ux-designs-best-mobile-application-145059904.jpg">
		<a href="index.html"><h4>Go Back To Home Page</h4></a>
	<center>
		<h1>
			Enter The Bus Details
		</h1>
<form action="" method="GET">
	BUS NO <input type="number" name="busno" value=""/><br><br>
	BODY NO <input type="number" name="bodyno" value=""/><br><br>
	ROUTE NAME <input type="text" name="routename" value=""/><br><br>
	<input type="submit" name="Submit" value="Submit">
	
</form>

<?php

if($_GET['Submit'])
{
	$bn = $_GET['busno'];
	$bon = $_GET['bodyno'];
    $rn = $_GET['routename'];
	if($bn != "" && $bon != "" && $rn != "")
	{
		$query = "INSERT INTO BUS VALUES ('$bn','$bon','$rn')";
		$data = mysqli_query($conn,$query);

		if($data)
		{
			echo "Data inserted successfully";
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