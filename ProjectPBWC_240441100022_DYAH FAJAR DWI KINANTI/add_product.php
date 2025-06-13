<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f6f8;
            font-size: 1.2rem;
        }
        .form-container {
            max-width: 600px;
            margin: 4rem auto;
            padding: 2.5rem;
            background-color: #fff;
            border-radius: 1.5rem;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        h3 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 2rem;
            text-align: center;
        }
        label {
            font-weight: 600;
            margin-bottom: .5rem;
        }
        .form-control {
            font-size: 1.1rem;
            padding: 0.75rem;
        }
        .btn-primary {
            font-size: 1.2rem;
            padding: 0.7rem;
        }
        .btn-back {
            font-size: 1rem;
            margin-bottom: 1rem;
            background-color:rgb(235, 178, 229);
            font-size: 1.1rem;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="form-container">

    <h3>Tambah Produk Baru</h3>

    <form action="upload_produk.php" method="POST" enctype="multipart/form-data">
    <form action="katalog_product-handmate.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama">Nama Produk</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" required>
        </div>
        <div class="mb-4">
            <label for="gambar">Gambar Produk</label>
            <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Tambah Produk</button>
    </form>
    <a href="daftar_produk.php" class="btn btn-outline-secondary btn-back">Kembali ke Daftar Produk</a>
</div>

</body>
</html>
