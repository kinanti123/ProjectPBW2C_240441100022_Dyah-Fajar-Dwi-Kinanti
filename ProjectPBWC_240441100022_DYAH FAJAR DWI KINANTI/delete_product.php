<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM produk WHERE id=$id");
header("Location: daftar_produk.php");
?>