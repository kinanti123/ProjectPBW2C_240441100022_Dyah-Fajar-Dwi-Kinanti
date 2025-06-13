<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-size: 1.15rem;
        }
        .page-title {
            font-size: 2rem;
            font-weight: bold;
        }
        .product-card {
            background: #fff;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            height: 100%;
        }
        .product-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }
        .card-title {
            font-size: 1.4rem;
            font-weight: 600;
        }
        .product-description {
            font-size: 1rem;
            color: #555;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="page-title">Manajemen Produk</h1>
        <a href='add_product.php' class='btn btn-success btn-lg'>+ Tambah Produk Baru</a>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM produk");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='col'>";
            echo "<div class='product-card'>";
            echo "<img src='uploads/{$row['gambar']}' alt='{$row['nama']}' class='product-img'>";
            echo "<h3 class='card-title'>{$row['nama']}</h3>";
            echo "<p class='product-description'>{$row['deskripsi']}</p>";
            echo "<p><strong>Rp " . number_format($row['harga'], 0, ',', '.') . "</strong></p>";
            echo "<div class='d-flex gap-2'>";
            echo "<a href='edit_product.php?id={$row['id']}' class='btn btn-primary btn-sm'>Edit</a>";
            echo "<a href='delete_product.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>

    <div class="text-center mt-5">
        <a href='katalog_product_handmate.php' class='btn btn-outline-secondary btn-lg'>← Kembali ke Katalog</a>
    </div>
</div>

</body>
</html>
