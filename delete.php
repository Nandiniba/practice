<?php 

include 'config.php';
$id=$_GET['id'];
$sql="DELETE FROM inserted WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if ($result) {
	echo "deleted";
	?>
	<meta http-equiv="refresh" content="1; url='main.php'">
	<?php
} else {
	echo "error";
}

 ?>