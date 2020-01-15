<?php
include 'connection.php';
error_reporting(0);
?>
<html>
<head>
	<title>Agent Insert</title>
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
			Enter The Agent Details
		</h1>
<form action="" method="GET">
	AGENT NAME <input type="text" name="aname" value=""/><br><br>
	AGENT ADDRESS <input type="text" name="aadr" value=""/><br><br>
	AGENT NUMBER <input type="number" name="ano" value=""/><br><br>
	<input type="submit" name="Submit" value="Submit">
	
</form>

<?php

if($_GET['Submit'])
{
	$ana = $_GET['aname'];
	$aad = $_GET['aadr'];
    $ano = $_GET['ano'];
	if($ana != "" && $aad != "" && $ano != "")
	{
		$query = "INSERT INTO agent VALUES ('$ana','$aad','$ano')";
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