<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style-navbar.css">
    
    
    <title>DATA ANTRIAN</title>
    
    <style>
        .kotak {
            margin : auto;
            background: #f0f1f3;
            box-shadow: -14px 13px 21px rgba(102, 100, 100, 0.993);
            border-radius: 5px;
            font-family: inter;
        }
        table {
            margin: auto;

            background: #a9acb1;
            border-radius: 5px;
            font-family: inter !important;
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
    </div>


    <div class="card bg-dark text-Black">
        <img class="card-img" src="img/bg-light.png" alt="Card image">
            <div class="card-img-overlay">
            <div class="kotak" role="kotak">
                <div class= "kotak">
                    <div class="mb-3 mt-5 position-relative" style="margin-left: 3%;">
                    <h4 class="card-title">Data Antrian</h4>
                    </div>
                    <br>
                    <div class="mb-3 mt-5 position-relative" style="margin-left: 3%; margin-top: 5%; margin-right: 3%;">
                    <table class="table">
                        <thead>
                            <tr>
                                <td><h5>Nama</h5></td>
                                <td><h5>NIK</h5></td>
                                <td><h5>Dusun</h5></td>
                                <td><h5>Nomor</h5></td>
                                <td><h5>Hari</h5></td>
                                <td><h5>Tanggal</h5></td>
                                <td><h5>Sesi</h5></td>
                                <td><h5>Jam</h5></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Suhaidi</td>
                                <td>1017281636183</td>
                                <td>Tengah</td>
                                <td>10</td>
                                <td>Kamis</td>
                                <td>10 Maret 2021</td>
                                <td>Sesi 1 </td>
                                <td>08.00-10.00</td>
                                <td><a href="/view-data" type="button" class="btn btn-info">View</a></td>  
                            </tr>
                            <tr>
                                <td>Siti Aisyah</td>
                                <td>1001018192121</td>
                                <td>Samping</td>
                                <td>13</td>
                                <td>Kamis</td>
                                <td>10 Maret 2021</td>
                                <td>Sesi 1 </td>
                                <td>08.00-10.00</td>
                                <td><a href="/view-data" type="button" class="btn btn-info">View</a></td> 
                            </tr>
                            <tr>
                                <td>Burhanuddin </td>
                                <td>1001011212782</td>
                                <td>Samping</td>
                                <td>13</td>
                                <td>Kamis</td>
                                <td>10 Maret 2021</td>
                                <td>Sesi 2 </td>
                                <td>10.00-12.00</td>
                                <td><a href="/view-data" type="button" class="btn btn-info">View</a></td> 
                            </tr>
                            <tr>
                                <td>Natali Trump </td>
                                <td>10010181211211</td>
                                <td>Ujung</td>
                                <td>14</td>
                                <td>Kamis</td>
                                <td>10 Maret 2021</td>
                                <td>Sesi 3 </td>
                                <td>13.00-15.00</td>
                                <td><a href="/view-data" type="button" class="btn btn-info">View</a></td> 
                            </tr>
                            <tr>
                                <td>Muhammad Husein </td>
                                <td>1001018190942</td>
                                <td>tengah</td>
                                <td></td>
                                <td>Kamis</td>
                                <td>10 Maret 2021</td>
                                <td>Sesi 4 </td>
                                <td>15.00-17.00</td>
                                <td><a href="/view-data" type="button" class="btn btn-info">View</a></td> 
                            </tr>
                            <tr>
                                <td>Jessie Hanafiah </td>
                                <td>10010102121121</td>
                                <td>Ujung</td>
                                <td></td>
                                <td>Jumat</td>
                                <td>11 Maret 2021</td>
                                <td>Sesi 1 </td>
                                <td>08.00-10.00</td>
                                <td><a href="/view-data" type="button" class="btn btn-info">View</a></td> 
                            </tr>
                            <tr>
                                <td>Lebran Mahmud</td>
                                <td>1009921121565</td>
                                <td>Ujung</td>
                                <td></td>
                                <td>Jumat</td>
                                <td>11 Maret 2021</td>
                                <td>Sesi 2</td>
                                <td>10.00-12.00</td>
                                <td><a href="/view-data" type="button" class="btn btn-info">View</a></td> 
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            </div>
    </div>


    <script src="Js/navbar.js"></script>
</body>
</html>