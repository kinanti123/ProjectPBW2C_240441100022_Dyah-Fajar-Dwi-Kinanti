<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Katalog Produk Handmade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-size: 1.2rem;
        }
        .katalog-container {
            padding: 3rem 1rem;
        }
        .product-card {
            background: #fff;
            padding: 2rem;
            border-radius: 1.25rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            height: 100%;
            transition: transform 0.2s ease;
        }
        .product-card:hover {
            transform: translateY(-5px);
        }
        .product-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 0.75rem;
            margin-bottom: 1.5rem;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
        }
        .product-description {
            font-size: 1.2rem;
            color: #555;
        }
        .product-price {
            font-size: 1.3rem;
            font-weight: 600;
            margin-top: 1rem;
            color: #000;
        }
    </style>
</head>
<body>

<div class="container katalog-container">
    <h1 class="mb-5 text-center fw-bold display-5">Katalog Produk Handmade</h1>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="col">
                <div class="product-card">
                    <img src="uploads/<?= $row['gambar'] ?>" alt="<?= $row['nama'] ?>" class="product-img">
                    <h5 class="card-title"><?= $row['nama'] ?></h5>
                    <p class="product-description"><?= $row['deskripsi'] ?></p>
                    <p class="product-price">Rp <?= number_format($row['harga'], 0, ',', '.') ?></p>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <div class="text-center mt-5">
        <a href='daftar_produk.php' class='btn btn-outline-secondary btn-lg'>→ Masuk Admin</a>
    </div>
</div>

</body>
</html>
