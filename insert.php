<?php 
include 'config.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>insert data</title>
	<style type="text/css">
		body{
			background-image: linear-gradient(to right , blue , green);
			font-size: 20px;
			color: white;
		}
		table{
			margin: 200px 0 0 500px;
			border: 2px solid black;
			padding: 100px;
			background-color: rgba(11, 15, 13, 0.582);
			border-radius: 30px;
		}
	</style>
</head>
<body>
	<form action="#" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td><label>photo</label></td>
				<td><input type="file" name="photo" id="images"></td>
			</tr>
			<tr>
				<td><label>name</label></td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td><label>description</label></td>
				<td><textarea name="description"></textarea></td>
			</tr>
			<tr><td><input type="submit" name="submit"></td></tr>
		</table>
	</form>
</body>
</html>

<?php 

if (isset($_POST['submit'])) {
	$photo=$_FILES['photo']['name'];
	$temp_name=$_FILES['photo']['tmp_name'];
	$folder="images/".$photo;
	move_uploaded_file($temp_name, $folder);
	$name=$_POST['name'];
	$description=$_POST['description'];

	$sql="INSERT INTO `inserted`(`photo`,`name`,`description`) VALUES ('$folder','$name','$description')";
	$result=mysqli_query($conn,$sql);
	if ($result) {
		echo "inserted";
		?>
	<meta http-equiv="refresh" content="1; url=main.php">
		<?php
	} else {
		echo "error";
	}
	
}
 ?>