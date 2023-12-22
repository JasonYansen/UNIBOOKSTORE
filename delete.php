<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($conn,"DELETE FROM buku WHERE id_buku = '$id'");

if ($sql) {
    header("location: admin.php");
}

?>