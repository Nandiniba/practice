<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<style type="text/css">
		body{
			background-image: linear-gradient(to right, blue, green);
		}
		form{
			background-color:  rgba(11, 15, 13, 0.582);
			width: 50%;
			margin: 150px 0 0 350px;
			padding: 50px;
			border-radius: 40px;
		}
		form h1{
			text-align: center;
			color: wheat;
			font-size: 50px;
		}
		form label{
			font-size: 20px;
			color: white;
			margin-left: 200px;
		}
		form input{
			width: 50%;
			margin-left: 200px;
			height: 30px;
			border-radius: 20px;
		}
		.submit{
			background-color: black;
			color: white;
			border-radius: 20px;
		}
	</style>
</head>
<body>
	<form action="#" method="POST" enctype="multipart/form-data">
		<h1>login</h1>
		<label>username</label><br><br>
		<input type="text" name="username"><br><br>
		<label>password</label><br><br>
		<input type="password" name="password"><br><br><br>
		<input class="submit" type="submit" name="submit">
	</form>
</body>
</html>

<?php 

include 'config.php';
if (isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
 $sql="SELECT `id`, `username`, `password` FROM `login` WHERE username='$username' && password='$password'";
 $result=mysqli_query($conn,$sql);
 if ($result) {
 	echo "login successfully";
 	header('location:main.php');
 } else {
 	echo "login error";
 }
 
}
 ?>