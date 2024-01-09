<?php
$server="localhost";
$user="root";
$password="";
$db="song industry";
$con=mysqli_connect($server,$user,$password,$db);
if (!$con) {
	die("not connected".mysqli_error($con));
}
echo "connected successfully!";
	

?>