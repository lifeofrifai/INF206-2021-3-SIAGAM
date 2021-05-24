<?php 
include "action/koneksi.php";

$email=$_POST['email'];
$pass=$_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM admin WHERE email ='$email' and password ='$pass'");
$cek = mysqli_num_rows($query);

if ($cek >0){
    echo "selamat datang <b>$nama</b> Anda berhasil Login";
} else{
    echo "Email dan Password Anda Salah";
}

?>


<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-admin-login.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <title>Login</title>
</head>

<body class="background">
    <div class="box">
        <h1 >SIAGAM</h1>
        <h2 >Sistem Antrian Gampong</h2>
        <form action="" method="post">
            <div>
                <input type="email" name="email" class="form_login" id="exampleInputEmail1" placeholder="Email...">

                <input type="password" name="password" class="form_login" id="exampleInputPassword1" placeholder="Password...">

                <div class="mb-3 form-check rm">
                <input type="checkbox" value="" id="flexCheckDefault">
                <label class=" rm-label" for="flexCheckDefault"> Remember Me</label>
                </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary tombol_login">Login</button>
        </form>
        <p class="disini">Ingin Mengambil Antrian?<br>Ambil <a href="index.php">Disini</a></p>
    </div>

    <p class="versioncontrol">Ver Beta 1.0</p>
</body>

</html>