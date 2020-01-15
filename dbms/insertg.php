<?php
include 'connection.php';
error_reporting(0);
?>
<html>
<head>
<title>Government Insert</title>
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
			Enter The Government Details
		</h1>
<form action="" method="GET">
	DEPARTMENT NAME <input type="text" name="deptname" value=""/><br><br>
	OWNER NUMBER <input type="number" name="ownerno" value=""/><br><br>
	TAX NUMBER <input type="number" name="taxno" value=""/><br><br>
	<input type="submit" name="Submit" value="Submit">
	
</form>

<?php

if($_GET['Submit'])
{
	$dn = $_GET['deptname'];
	$on = $_GET['ownerno'];
    $tn = $_GET['taxno'];
	if($dn != "" && $on != "" && $tn != "")
	{
		$query = "INSERT INTO government VALUES ('$dn','$on','$tn')";
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