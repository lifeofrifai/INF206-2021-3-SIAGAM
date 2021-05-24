
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
    <script src="js/navbar.js"></script>
    
    
    <title>DATA ANTRIAN</title>
    
    <style>
        body {
            background-image: url('img/bg-light.png');
            background-size: cover;
            font-family: 'Ubuntu', 'sans-serif';
        }
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

        .custom{
            
        }
    </style>
    
</head>
<body onload="renderTime();">

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a style = "border-bottom: 1px solid; color : #FFFFFF;">Halo, Asdar</a>
    <a href="#">Logout</a>
    
</div>

<div class="navbar">
    <div class="strip-btn"><span onclick="openNav()"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg></span>
    </div>
    <div id="clockDisplay" class="clock">

    </div>
</div>


   <div class = "container">
    <h2 class="p-3 mb-2 bg-dark text-white" style = "text-align : center; margin-top : 5%"> Data Antrian</h2>
    <table class="table table-dark table-hover custom">
        <tr style="text-align:center;font-weight:bold;background-color:#eee;">
            <td>Nama</td>
            <td>NIK</td>
            <td>Dusun</td>
            <td>Nomor</td>
            <td>Tanggal</td>
            <td>Sesi</td>
            <td>Opsi</td>
        </tr>
    <?php
    include 'action/koneksi.php';
    $select = mysqli_query($conn,"SELECT * FROM antrian");
    if(mysqli_num_rows($select) > 0) {
    while($hasil = mysqli_fetch_array($select)){
        ?>
        <tr style="text-align : center;">
            <td><?php echo $hasil['nama'] ?></td>
            <td><?php echo $hasil['nik'] ?></td>
            <td><?php echo $hasil['dusun'] ?></td>
            <td><?php echo $hasil['id'] ?></td>
            <td><?php echo $hasil['tanggal'] ?></td>
            <td><?php echo $hasil['sesi'] ?></td>
            <td>
                <button href="action/view.php ?id=<?php echo $hasil['id'] ?> type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >View</button>
                <a href="action/delete.php ?id=<?php echo $hasil['id'] ?> type="button" class="btn btn-danger">Hapus</a>
            </td> 
        </tr>
        <?php }} ?>

                        </tbody>
                    </table>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop ModalDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog  modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    
                </div>
                <div class="modal-body">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
                    </div>
                </div>
            </div>
            </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="Js/navbar.js"></script>
</body>
</html>