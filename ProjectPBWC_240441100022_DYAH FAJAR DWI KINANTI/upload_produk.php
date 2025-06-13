<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'] ?? '';
    $deskripsi = $_POST['deskripsi'] ?? '';
    $harga = $_POST['harga'] ?? '';
    $gambar = $_FILES['gambar']['name'] ?? '';
    $tmp_name = $_FILES['gambar']['tmp_name'] ?? '';

    if (!empty($gambar) && !empty($tmp_name)) {
        $folder = "uploads/";
        if (!is_dir($folder)) {
            mkdir($folder, 0755, true);
        }
        $gambar = time() . '_' . basename($gambar);
        $target_file = $folder . $gambar;
        if (move_uploaded_file($tmp_name, $target_file)) {
            $query = "INSERT INTO produk (nama, deskripsi, harga, gambar)
                      VALUES ('$nama', '$deskripsi', '$harga', '$gambar')";
            if (mysqli_query($conn, $query)) {
                echo "<script>
                    alert('Produk berhasil ditambahkan!');
                    window.location.href = 'daftar_produk.php';
                </script>";
                exit;
            } else {
                echo "<script>alert('Gagal menyimpan ke database.');</script>";
            }
        } else {
            echo "<script>alert('Gagal upload gambar.');</script>";
        }
    } else {
        echo "<script>alert('Gambar tidak ditemukan.');</script>";
    }
}
?>
