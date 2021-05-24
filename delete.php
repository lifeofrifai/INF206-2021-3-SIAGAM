<?php
include 'koneksi.php';
$id = $_GET['id'];
    $delete = mysqli_query($conn, "DELETE FROM antrian WHERE id = '$id' ");
    header('location:../index-admin.php');
?>