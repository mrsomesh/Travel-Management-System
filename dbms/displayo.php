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
	<title>Owners</title>
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
		The Owner List Is As Follows
	</h1>
<?php
include("connection.php");
$query = "SELECT * FROM owner";

$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

if($total!=0)
{
	?>
	<table>
		<tr>
			<th>Owner Number</th>
			<th>Owner Name</th>
			<th>Owner Address</th>
			<th>Mobile Number</th>
			<th>Bus Number</th>			
			<th>Update</th>
			<th>Remove</th>
		</tr>

	<?php
	while($res = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				 <td>".$res['OWNERNO']."</td>
				 <td>".$res['NAME']."</td>
				 <td>".$res['ADDRESS']."</td>
				 <td>".$res['MOBILENO']."</td>
				 <td>".$res['BUSNO']."</td>
				 <td><a href='updateo.php?on=$res[OWNERNO]&nm=$res[NAME]&ad=$res[ADDRESS]&mn=$res[MOBILENO]&bn=$res[BUSNO]'>Edit</a></td>
				 <td><a href='deleteo.php?on=$res[OWNERNO]' onclick='return checkdelete()'>Delete</a></td>
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