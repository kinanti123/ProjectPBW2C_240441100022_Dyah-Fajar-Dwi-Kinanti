<?php
include 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM produk WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 2rem;
        }
        .form-container {
            background: #fff;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,0.05);
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>
<body>

<div class="form-container">
    <a href="daftar_produk.php" class="btn btn-outline-secondary mb-3">← Kembali</a>
    
    <form action="update_product.php" method="POST">
        <!-- Hidden ID -->
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?= $row['nama'] ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required><?= $row['deskripsi'] ?></textarea>
        </div>
        
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" name="harga" id="harga" value="<?= $row['harga'] ?>" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

</body>
</html>
