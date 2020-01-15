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
	<title>Government</title>
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
		The Government Details Are As Follows
	</h1>
<?php
include("connection.php");
$query = "SELECT * FROM GOVERNMENT";

$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

if($total!=0)
{
	?>
	<table>
		<tr>
			<th>Department Name</th>
			<th>Owner Number</th>
			<th>Tax Number</th>
			<th>Update</th>
			<th>Remove</th>
		</tr>

	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				 <td>".$result['DEPTNAME']."</td>
				 <td>".$result['OWNERNO']."</td>
				 <td>".$result['TAXNO']."</td>
				 <td><a href='updateg.php?dn=$result[DEPTNAME]&on=$result[OWNERNO]&tn=$result[TAXNO]'>Edit</a></td>
				 <td><a href='deleteg.php?tn=$result[TAXNO]' onclick='return checkdelete()'>Delete</a></td>
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