<style>
	h1
	{
		padding: 10px;
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
			padding: 0px;
		}
	</style>
</head>
<body background="red-yellow-lines-wave-shape-beautiful-background-web-texture-use-website-ui-ux-designs-best-mobile-application-145059904.jpg">
		<a href="index.html"><h4>Go Back To Home Page</h4></a>
<center>
	<h1>
		BUS AND GOV DEPARTMENTS UNION IS AS FOLLOWS
	</h1>
<?php
include("connection.php");
$query = "SELECT * FROM BUS UNION SELECT * FROM GOVERNMENT";

$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

if($total!=0)
{
	?>
	<table>

	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				 <td>".$result['BUSNO']."</td>
				 <td>".$result['BODYNO']."</td>
				 <td>".$result['ROUTENAME']."</td>
			 </tr>";
	}
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