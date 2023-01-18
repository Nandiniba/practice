<?php 
include 'config.php';
$sql="SELECT * FROM inserted";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>view</title>
	<style type="text/css">
		body{
			background-image: linear-gradient(to right , green , blue);
		}
		table,td,tr{
			border: 2px solid wheat;
			width: 600px;
			margin: 100px 0 0 500px;
			color: white;
			font-size: 20px;
			text-align: center;
		}

		table tr td a{
			font-size: 20px;
			text-decoration: none;
			color: whitesmoke;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<td>photo</td>
			<td>name</td>
			<td>description</td>
			<td colspan="2">operation</td>
		</tr>

<?php 
	while ($row=mysqli_fetch_assoc($result)) {
		echo "
			<tr>
				<td><img src='".$row['photo']."' height=100px width=100px></td>
				<td>".$row['name']."</td>
				<td>".$row['description']."</td>
				<td><a href='update.php?id=$row[id]'>update</a></td>
				<td><a href='delete.php?id=$row[id]'>delete</a></td>
			</tr>
		";
	}	
}
?>
		<tr><td colspan="5"><a href="insert.php">add new post</a></td></tr>
	</table>
</body>
</html>