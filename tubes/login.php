<?php 
session_start();

if( isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}

require 'functions.php';

if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			// set session
			$_SESSION["login"] = true;

			header("Location: index.php");
			exit;
		}
	}

	$error = true;

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
				<input type="text" name="username" required >
			</div>
			<div class="input-group">
				<label for="password">Password</label>
				<input type="password" name="password" required>
			</div>
			<div>
				<button type="submit" name="login" class="btn btn-primary" style="margin-top:5px">Login</button>
			</div>
			<p class="login-register-text">kamu tidak punya akun? <a href="registrasi.php" class="btn btn-primary">Register Disini</a>.</p>
		</form>
		
	</div>
</body>
</html>
