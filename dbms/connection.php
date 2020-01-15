<?php
$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "dbms";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "";
}
else
{
	echo "Connection Failed";
}
?>