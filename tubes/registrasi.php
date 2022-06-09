<?php 
require 'functions.php';


if( isset($_POST["registrasi"]) ) {
    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('Berhasil menambahkan user baru!');
            </script>";
        } else {
            echo mysqli_error($conn);
        }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Halaman Registrasi</title>
</head>
<body>
    <style>
        label {
            display: block; 
        }
    </style>
    

<form action="" method="post">
    <div class="container">
        <H1>Registrasi</H1>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="input-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" name="cpassword" id="cpassword">
            </div>
            <div class="input-group">
                <button type="submit" name="registrasi" class="btn btn-primary">Registrasi</button>
                <p class="login-register-text">Sudah punya akun? <a href="login.php" class="btn btn-primary">Login disini</a>.</p>
            </div>
    </div>
</form>
</body>
</html>
