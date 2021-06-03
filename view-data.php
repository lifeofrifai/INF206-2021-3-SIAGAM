<!DOCTYPE html>
<html>
<head>
    <title>Halaman Data View</title>

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

            background: #EEEEEE;
            box-shadow: -14px 13px 21px rgba(102, 100, 100, 0.993);
            border-radius: 5px;
            font-family: inter;
        }
        table {
            margin: auto;

            background: #a9acb1;
            border-radius: 5px;
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

<div class="navbar" style="margin-bottom: 30px;">
    <div class="strip-btn"><span onclick="openNav()"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
            class="bi bi-justify " viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
        </svg></span>
    </div>
    <div id="clockDisplay" class="clock">

    </div>
    </div>


      <br>
      <form class ="container pt-3 kotak" method="post" action="" >
        <div class="container">
            <div class="mb-3 mt-5 position-relative" style="margin-left: 10%; margin-top: 20%;"></div>
            <label for="nama" class="form-label" style="color: #464E5F; font-weight: 500; font-size: 18px; " >
                
                <br>
                <div style="text-align:justify;">
                    <p style="text-align:justify;"><img src="img/icons/GambarKartun.jpg" width="250px" style="float:left; margin:0 25px 15px 0;" />Nama &nbsp;: Suhaidi  <br>  Nik &nbsp; &nbsp;  : 17288282737377 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Dusun : Tengah <br> Keperluan : Mengurus Surat Kematian <br>  Tanggal/Hari : 10 Maret 2021/Kamis  <br> Sesi : Sesi 1(08.00 - 10.00)</p></p> 
            </br>


                </div>
                
            </br>
            </label>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end py-3" style="margin-right : 8%; font-weight: bold; font-size: 18px;">
            <a href="index-admin.php"></p><button class=" btn btn-primary " type="button ">Kembali</button></a>
          </div>
      </br>


      <script src="js/navbar.js"></script>
</body>
</html>