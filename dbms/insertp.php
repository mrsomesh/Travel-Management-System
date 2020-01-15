<?php
include 'connection.php';
error_reporting(0);
?>
<html>
<head>
	<title>Passengers</title>
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
		<h1>Enter the Passenger Details</h1>
<form action="" method="GET">
	PASSENGER NUMBER <input type="number" name="pnum" value=""/><br><br>
	PASSENGER NAME <input type="text" name="pname" value=""/><br><br>
	PASSENGER ADDRESS <input type="text" name="paddr" value=""/><br><br>
	PASSENGER MOBILE <input type="text" name="pmobile" value=""/><br><br>
	BUS NUMBER <input type="number" name="busno" value=""/><br><br>
	ROUTE NAME <input type="text" name="rname" value=""/><br><br>
	
	<input type="submit" name="Submit" value="Submit">
	
</form>

<?php

if($_GET['Submit'])
{
	$pn = $_GET['pnum'];
	$pna = $_GET['pname'];
    $pad = $_GET['paddr'];
    $pmb = $_GET['pmobile'];
    $bno = $_GET['busno'];
    $rn = $_GET['rname'];


	if($pn != "" && $pna != "" && $pad != "" && $pmb != "" && $bno != "" && $rn != "")
	{
		$query = "INSERT INTO PASSENGER VALUES ('$pn','$pna','$pad','$pmb','$bno','$rn')";
		$data = mysqli_query($conn,$query);

		if($data)
		{
			echo "<font color='green'>Data inserted successfully";
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