<style>
	h1
	{
		padding: 40px;
	}
	td
	{
		padding: 10px;
	}
</style>
<!DOCTYPE html>
<html>
<head>
<title>Bus</title>
	<style>
		table
		{
			padding: 50px;
		}
	</style>
</head>
<body background="red-yellow-lines-wave-shape-beautiful-background-web-texture-use-website-ui-ux-designs-best-mobile-application-145059904.jpg">
		<a href="index.html"><h4>Go Back To Home Page</h4></a>
<center>
	<h1>
		The Database Count Details Are As Follows
	</h1>
<?php
include("connection.php");
$query = "SELECT * FROM BUS";

$query1 = "SELECT * FROM PASSENGER";

$query2 = "SELECT * FROM AGENT";

$query3 = "SELECT * FROM OWNER";

$query4 = "SELECT * FROM GOVERNMENT";

$data = mysqli_query($conn,$query);

$data1 = mysqli_query($conn,$query1);

$data2 = mysqli_query($conn,$query2);

$data3 = mysqli_query($conn,$query3);

$data4 = mysqli_query($conn,$query4);

$total = mysqli_num_rows($data);

$total1 = mysqli_num_rows($data1);

$total2 = mysqli_num_rows($data2);

$total3 = mysqli_num_rows($data3);

$total4 = mysqli_num_rows($data4);

if($total!=0)
{
	echo "<br>The total number of buses currently registered in the system are : ";
	echo $total;
	echo "<br><br>The total number of passengers currently registered in the system are : ";
	echo $total1;
	echo "<br><br>The total number of agents currently registered in the system are : ";
	echo $total2;
	echo "<br><br>The total number of owners currently registered in the system are : ";
	echo $total3;
	echo "<br><br>The total number of government departments currently registered in the system are : ";
	echo $total4;
}
else{
		echo "No record found";
	}	
?>
</table>
<script >
	function checkdelete()
	{
		return confirm('Are you sure you want to delete?')
	}
</script>
</center>
</body>
</html>