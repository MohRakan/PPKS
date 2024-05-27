<?php
require 'functions.php';
if (isset($_POST['register'])){
    if(registrasi($_POST) > 0 ){
        echo "<script>alert('Berhasil membuat akun');
        window.location='login.php';</script>";
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
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="register">
            <form action="" method="post">
                <h1>Ayo buat akunmu</h1>
                <input type="email" placeholder="Masukkan Email" name="email">
                <input type="text" placeholder="Masukkan Namamu" name="nama">
                <input type="text" placeholder="Masukkan Nim" name="nim">
                <input type="password" placeholder="Masukkan password" name="password">
                <input type="password" placeholder="Konfirmasi Password" name="password2">
                <button type="submit" name="register">Register</button>
            </form>
        </div>
    </div>
    
</body>
</html>