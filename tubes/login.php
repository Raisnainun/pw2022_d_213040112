<?php 
session_start();
require 'functions.php';



if(isset($_SESSION['login'])){
	header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
	$user = mysqli_fetch_assoc($user);

	if($user){
		$_SESSION['username'] = $user['password'];
		header('Location: index.php');
	}else{
		echo "username / Password salah";
	}
}





?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Halaman login</title>
</head>
<body>
	<div class="container">
		
		<form action="" method="post">
			<h1 align="center">Login</h1>
			<div class="input-group">
				<label for="username">Username</label>
				<input type="text" name="username" required>
			</div>
			<div class="input-group">
				<label for="username">Password</label>
				<input type="password" name="password" required>
			</div>
			<div>
				<button name="submit" class="btn btn-primary" style="margin-top:5px">Login</button>
			</div>
			<p class="login-register-text">kamu tidak punya akun? <a href="registrasi.php" class="btn btn-primary">Register Disini</a>.</p>
		</form>
		
	</div>
</body>
</html>
