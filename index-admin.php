<?php 

include "action/koneksi.php";

?>
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
    <link rel="stylesheet" href="css/footer.css">
    <script src="js/navbar.js"></script>
    
    
    <link rel="icon" type="image/png" href="img/icons/icon-siagam.png">
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
<body>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a style = "border-bottom: 1px solid; color : #FFFFFF;">Selamat Datang</a>
    <a href="logout.php">Logout</a>
    
</div>

<div class="navbar">
    <div class="strip-btn"><span onclick="openNav()"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg></span>
    </div>
    <div id="jamSiagam" class="clock">

    </div>
</div>

        
        <form class="form-inline" style="margin-top:150px; z-index: -99 !important; margin-left: 145px; ">
            <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></span>
            </div>
            <input type="text" id="myInput" onkeyup="search()" class="form-control" placeholder="Cari..." aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </form>
        


   <div class = "container" style="margin-top:-55px !important;">
    <h2 class="p-3 mb-2 bg-dark text-white" style = "text-align : center; margin-top : 5%"> Data Antrian</h2>
    <table class="table table-dark table-hover custom " id="myTable" >
        <tr style="text-align:center;font-weight:bold;background-color:#eee;">
            <th>Nama</th>
            <th>NIK</th>
            <th>Dusun</th>
            <th>Nomor</th>
            <th>Tanggal</th>
            <th>Keperluan</th>
            <th>Opsi</th>
        </tr>
    <?php
    include 'action/koneksi.php';
    
    $data = mysqli_query($conn,"SELECT * FROM antrian ORDER BY id DESC");
    $jumlah_data = mysqli_num_rows($data);
    
    

    if(mysqli_num_rows($data) > 0) {
    while($hasil = mysqli_fetch_array($data)){
        ?>
        <tr style="text-align : center;">
            <td><?php echo $hasil['nama'] ?></td>
            <td><?php echo $hasil['nik'] ?></td>
            <td><?php echo $hasil['dusun'] ?></td>
            <td><?php echo $hasil['id'] ?></td>
            <td><?php echo $hasil['tanggal'] ?></td>
            <td><?php echo $hasil['keperluan'] ?></td>
            <td>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Hapus</button>
            </td> 

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
                            <p style="text-align: center;">Apakah Anda Yakin Ingin Menghapus Data Ini? </p>
                        </div>
                        <div class="modal-footer">
                            <a href="index-admin.php" type="button" class="btn btn-danger" data-bs-dismiss="modal" style="margin-right: 280px;">Belum</a>
                            <a href="action/delete.php  ?id=<?php echo $hasil['id'] ?>" type="submit" class="btn btn-primary" style="margin-right: 20px;" >Yakin</a>
                        </div>
                        </div>
                    </div>
                    </div>

        </tr>
        <?php }} ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            </div>
    </div>
			</tbody>
		</table>

        <br><br><br><br><br>
            <div class="footer" style=" position:fixed; ">
                <p>Made With <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="red" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                </svg> by DY3 RPL 2021</p>
            </div>
        
		
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="Js/navbar.js"></script>
    <script src="Js/search.js"></script>
</body>
</html>