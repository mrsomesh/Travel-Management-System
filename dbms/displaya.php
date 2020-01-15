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
	<title>Agent</title>
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
		The Agent Details Are As Follows
	</h1>
<?php
include("connection.php");
$query = "SELECT * FROM agent";

$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

if($total!=0)
{
	?>
	<table>
		<tr>
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
				 <td>".$result['ANAME']."</td>
				 <td>".$result['ADDRESS']."</td>
				 <td>".$result['ANO']."</td>
				 <td><a href='updatea.php?ana=$result[ANAME]&ad=$result[ADDRESS]&ano=$result[ANO]'>Edit</a></td>
				 <td><a href='deletea.php?ano=$result[ANO]' onclick='return checkdelete()'>Delete</a></td>
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