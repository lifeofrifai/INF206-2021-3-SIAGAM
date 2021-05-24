<?php 
include 'action/koneksi.php';
    if(isset($_POST['lanjut'])){
    $nama=$_POST['nama'];
    $nik=$_POST['nik'];
    $dusun=$_POST['dusun'];
    $keperluan=$_POST['keperluan'];
    $tanggal= date('Y-m-d', strtotime($_POST['tanggal']));
    $sesi=$_POST['sesi'];
    $insert = mysqli_query($conn,"INSERT INTO antrian VALUES ('','$nama', '$nik', '$dusun', '$keperluan', '$tanggal', '$sesi' )");

    header('Location: result-antrian.php');
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman sesi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style-navbar.css">
    <link rel="stylesheet" href="css/style-input-biodata.css">
    <script src="Js/navbar.js"></script>


    <style>
        body {
            background-image: url('img/bg-light.png');
            background-size: cover;
            font-family: 'Ubuntu', 'sans-serif';
        }
        .kotak {
            margin : auto;
            width: 807px;
            left: 230px;
            top: 5px;
            bottom: 50px;
            padding-bottom: 30px;

            background: #222734;
            box-shadow: -14px 13px 21px rgba(0, 0, 0, 0.25);
            border-radius: 13px;
            font-family: inter;
        }
    </style>
</head>
<body onload="renderTime();">

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">Home</a>
    <a href="https://bandaacehkota.go.id/" target = "_blank">Web Gampong</a>
    <a href="support.php">Support</a>
    
</div>

<div class="navbar">
    <div class="strip-btn"><span onclick="openNav()"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
            class="bi bi-justify " viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
        </svg></span>
    </div>
    <div id="clockDisplay" class="clock">

    </div>
</div>

    <div class = "container">
    <h2  style = "text-align : center; margin-top : 7%; font-weight: bold; font-size: 42px;"> Selamat Datang di Sistem Antrian Gampong</h2>
    <h2  style = "text-align : center; margin-top : 1% "> (SIAGAM)</h2>
    <form class ="container pt-3 kotak" method="post" action="" >
        <div class="container">
        <div class="mb-3 mt-5 position-relative" style="margin-left: 10%; margin-top: 10%;">
            <label for="nama" class="form-label" style="color: white; font-weight: 500; font-size: 18px;" >Masukkan Nama Lengkap Anda</label>
            <input type="text" class="form-control" name = "nama" id="nama" required style = "width:90%;" placeholder="Nama...">
        </div>
        <div class="mb-3 position-relative" style="margin-left: 10%" >
            <label for="nik" class="form-label" style="color: white; font-weight: 500; font-size: 18px;" >Masukkan NIK Anda</label>
            <input type="text" class="form-control" name = "nik" id="nik" required style = "width:90%;" placeholder="NIK...">
        </div>
        <div class="mb-3 position-relative" style="margin-left: 10%">
            <label for="dusun" class="form-label" style="color: white; font-weight: 500; font-size: 18px;">Masukkan Dusun Anda</label>
            <select name = "dusun" id="dusun" class="form-select" style = "width:90%;">
                <option>Pilih...</option>
                <option>Dusun 1</option>
                <option>Dusun 2</option>
                <option>Dusun 3</option>
                <option>Dusun 4</option>
            </select>
        </div>
        <div class="mb-3 position-relative" style="margin-left: 10%">
            <label for="keperluan" class="form-label" style="color: white; font-weight: 500; font-size: 18px;">Masukkan Keperluan Anda</label>
            <select name = "keperluan" id="keperluan" class="form-select" style = "width:90%;">
                <option>Pilih Keperluan</option>
                <option>Megurus Surat Pindah</option>
                <option>Mengurus Surat Masuk</option>
                <option>Mengurus Surat Miskin</option>
                <option>Mengurus Surat Kematian</option>
                <option>Mengurus Surat Pengantar</option>
                <option>Mengurus KTP</option>
                <option>Mengurus Kartu Keluarga</option>
                <option>Lainnya...</option>
            </select>
        </div>
        <div class="mb-3 position-relative" style="margin-left: 10%" >
            <label for="tanggal" class="form-label"style="color: white; font-weight: 500; font-size: 18px;" >Pilih Tanggal Kedatangan</label> 
            <br>
            <input type="date" name="tanggal" id="tanggal" class="kalender">
            </br>
        </div>
        <div class="mb-3 position-relative" style="margin-left: 10%">
            <label for="sesi" class="form-label" style="color: white; font-weight: 500; font-size: 18px;">Pilih Sesi Kedatangan Anda</label>
            <select name = "sesi" id="sesi" class="form-select" style = "width:90%; height:40px;">
                <option>Pilih sesi...</option>
                <option>Sesi 1 (08.00-10.00)</option>
                <option>Sesi 2 (10.00-12.00)</option>
                <option>Sesi 3 (13.00-15.00)</option>
                <option>Sesi 4 (15.00-17.00)</option>
        </select>
        </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end py-3" style="margin-right : 8%; font-weight: bold; font-size: 18px;">
                <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="padding-left : 18px; padding-right:18px;">Lanjut</button>
                                <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                                <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 45%; color: #DC3545;" width="40" height="40" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                            
                        </div>
                        <div class="modal-body">
                            <p style="text-align: center;">Apakah Anda Sudah Yakin Dengan Pilihan Anda? </p>
                        </div>
                        <div class="modal-footer">
                            <a href="input-biodata.php" type="button" class="btn btn-danger" data-bs-dismiss="modal" style="margin-right: 68%;">Belum</a>
                            <button type="submit" class="btn btn-primary" name="lanjut">Sudah</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
    </form>
    <br><br><br><br>



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>