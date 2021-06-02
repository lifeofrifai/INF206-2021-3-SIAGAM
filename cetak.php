<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="img/icons/icon-siagam.png">
    <title>Bukti Antrian</title>
	<link rel="icon" type="image/png" href="img/icons/icon-siagam.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

	<style>
	.line {
	position: absolute;
	width: 100%;
	left: 0px;
	top: 177px;
	border-bottom: 10px solid  #3D84C2;
	}
	.data {
		margin-top: 70px;
	}


	</style>

</head>
<body style="font-family : Ubuntu;">

	<div class="justify-content-center"><br>
            <h1 style="color: #3D84C2; text-align: center; font-size: 90px;">SIAGAM</h1>
            <h2 style="color: #3D84C2; text-align: center; font-size: 28px; margin-top: -20px;">Sistem Antrian Gampong</h2>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-center line">
            
    </div>

		<?php 
		include 'action/koneksi.php';
		$sql = mysqli_query($conn,"SELECT * FROM antrian WHERE id = (SELECT MAX(id) from antrian)");
		$data = mysqli_fetch_array($sql);
		?>
		<tr>
		<pre>
        <div class="data" style="text-align: justify; font-size: 32px; margin-top:10px">
<td>Nomor antrian <?php echo $data['id']; ?></td> 
<td>Nama 		: <?php echo $data['nama']; ?></td> 
<td>NIK     	: <?php echo $data['nik']; ?></td> 
<td>Dusun   	: <?php echo $data['dusun']; ?></td> 
<td>Keperluan 	: <?php echo $data['keperluan']; ?></td> 
<td>Tanggal 	: <?php echo $data['tanggal']; ?></td> 
<br>
<td>NOTE : </td>
<td>Silahkan Menuju Kantor<br>1 Jam Setelah Mengambil Nomor Antrian</td>
        </div>
		</pre>
		</tr>

 
	<script>
		window.print();
	</script>
 
</body>
</html>