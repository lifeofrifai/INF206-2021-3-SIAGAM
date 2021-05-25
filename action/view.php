<?php
include 'koneksi.php';
$id = $_GET['id'];
    $view = mysqli_query($conn, "SELECT * FROM antrian WHERE id = '$id' ");
?>