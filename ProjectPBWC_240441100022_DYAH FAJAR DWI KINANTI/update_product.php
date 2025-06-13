<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$sql = "UPDATE produk SET nama='$nama', deskripsi='$deskripsi', harga='$harga' WHERE id=$id";
mysqli_query($conn, $sql);
header("Location: daftar_produk.php");
?>