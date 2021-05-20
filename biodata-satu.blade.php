<!DOCTYPE html>
<html>
<head>
    <title>Halaman Biodata</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style-navbar.css">

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
    <a href="/">Home</a>
    <a href="https://bandaacehkota.go.id/" target = "_blank">Web Gampong</a>
    <a href="/support">Support</a>
    
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
    
    
    <div class = "container">
    <h2  style = " text-align : center ; margin-top : 100px; margin-left: 225px ; font-weight: bold; font-size: 42px;">Selamat Datang di Sistem Antrian Gampong<br>(SIAGAM)</h2>
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
                <option>Dusun 5</option>
                <option>Dusun 6</option>
            </select>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end py-3" style="margin-right : 8%; font-weight: bold; font-size: 18px;">
            <p style="font-weight: bold; font-size: 18px; margin-top: 5px;">
                <a href="/biodata-dua"></p><button class="btn btn-primary me-md-2 " type="button ">Lanjut</button></a>
          </div>
        </div>
    </form>
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
     crossorigin="anonymous"></script>

 <script src="Js/navbar.js"></script>
</body>
</html>