<style>
	h1
	{
		padding: 5px;
	}
	td
	{
		padding: 3px;
	}
</style>
<!DOCTYPE html>
<html>
<head>
<title>Bus</title>
	<style>
		table
		{
			padding: 10px;
		}
	</style>
</head>
<body background="red-yellow-lines-wave-shape-beautiful-background-web-texture-use-website-ui-ux-designs-best-mobile-application-145059904.jpg">
		<a href="index.html"><h4>Go Back To Home Page</h4></a>
<center>
	<h1>
		BUS AND AGENTS JOIN IS AS FOLLOWS
	</h1>
<?php
include("connection.php");
$query = "SELECT * FROM BUS NATURAL JOIN AGENT";

$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

if($total!=0)
{
	?>
	<table>
		<tr>
			<th>Bus No</th>
			<th>Body No</th>
			<th>Route Name</th>
			<th>Agent Name</th>
			<th>Agent Address</th>
			<th>Agent Number</th>
			<th>Update</th>
			<th>Remove</th>
		</tr>

	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				 <td>".$result['BUSNO']."</td>
				 <td>".$result['BODYNO']."</td>
				 <td>".$result['ROUTENAME']."</td>
				 <td>".$result['ANAME']."</td>
				 <td>".$result['ADDRESS']."</td>
				 <td>".$result['ANO']."</td>
				 <td><a href='update.php?bn=$result[BUSNO]&bon=$result[BODYNO]&rn=$result[ROUTENAME]'>Edit</a></td>
				 <td><a href='delete.php?bn=$result[BUSNO]' onclick='return checkdelete()'>Delete</a></td>
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