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
	<title>Passengers</title>
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
			The Passenger List Is As Follows
		</h1>
<?php
include("connection.php");
$query = "SELECT * FROM passenger";

$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

if($total!=0)
{
	?>
	<table>
		<tr>
			<th>Passenger Number</th>
			<th>Passenger Name</th>
			<th>Passenger Address</th>
			<th>Mobile Number</th>
			<th>Bus Number</th>			
			<th>Route Name</th>
			<th>Update</th>
			<th>Remove</th>
		</tr>

	<?php
	while($r = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				 <td>".$r['PNO']."</td>
				 <td>".$r['PNAME']."</td>
				 <td>".$r['ADDRESS']."</td>
				 <td>".$r['MOBILENO']."</td>
				 <td>".$r['BUSNO']."</td>
				 <td>".$r['ROUTENAME']."</td>				 
				 <td><a href='updatep.php?pn=$r[PNO]&nm=$r[PNAME]&ad=$r[ADDRESS]&mn=$r[MOBILENO]&bn=$r[BUSNO]&r=$r[ROUTENAME]'>Edit</a></td>
				 <td><a href='deleteo.php?pn=$r[PNO]' onclick='return checkdelete()'>Delete</a></td>
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