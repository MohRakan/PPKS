<?php
require 'functions.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM registrasi WHERE email = '$email'");

    if(mysqli_num_rows($result)===1){
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])){
            header("Location:home2.html");
            exit;
        }

        $error = true;

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> login </title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<div class="container">
		<div class="login">
			<form action="" method="post">
				<h1> Login Account</h1>
				<input type="email" placeholder="Email" name="email">
				<input type="password" placeholder="password" name="password">
				<button type="submit" name="login"> login </a></button>
				<p> Belum punya akun?<a href="register.php">Register</a></p>
			</form>
		</div>
		<div class="right">
			<img src="gambar/gambar 1.png" alt="">
		</div>
	</div>

</body>
</html>