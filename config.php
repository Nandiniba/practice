<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="interview";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
	echo("connection_failed".connection_error());
} else {
	echo "connected";
}

?>