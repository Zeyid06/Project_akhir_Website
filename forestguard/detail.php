<?php
include 'koneksi.php';

// 1. Ambil ID dari URL (misal: detail.php?id=1)
$id_artikel = $_GET['id'];

// 2. Ambil data berita berdasarkan ID tersebut
$query = mysqli_query($conn, "SELECT * FROM articles WHERE id_article = '$id_artikel'");
$data  = mysqli_fetch_assoc($query);

// Jika berita tidak ditemukan (misal ID ngawur)
if (!$data) {
    echo "<script>alert('Berita tidak ditemukan!'); window.location='index.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?> - ForestGuard</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* --- COPY STYLE DASAR AGAR SENADA --- */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Merriweather', serif; color: #222; line-height: 1.8; background-color: #fff; }
        h1, h2, h3 { font-family: 'Merriweather', serif; }
        
        /* Navbar Simple */
        .navbar { background: white; padding: 15px 5%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #ddd; font-family: 'Open Sans', sans-serif; }
        .logo { font-size: 22px; font-weight: 700; color: #006838; text-decoration: none; }
        .btn-kembali { text-decoration: none; color: #555; font-size: 14px; font-weight: 600; }
        .btn-kembali:hover { color: #006838; }

        /* Container Berita */
        .container { max-width: 800px; margin: 0 auto; padding: 40px 20px; }
        
        /* Judul & Meta */
        .news-header { margin-bottom: 30px; text-align: center; }
        .news-category { color: #006838; font-weight: bold; text-transform: uppercase; font-size: 13px; font-family: 'Open Sans', sans-serif; letter-spacing: 1px; }
        .news-title { font-size: 36px; line-height: 1.3; margin: 10px 0 20px; color: #111; }
        .news-date { color: #777; font-size: 14px; font-family: 'Open Sans', sans-serif; }

        /* Gambar Utama */
        .news-img { width: 100%; height: auto; border-radius: 8px; margin-bottom: 40px; }

        /* Isi Berita */
        .news-content { font-size: 18px; color: #333; }
        .news-content p { margin-bottom: 20px; }
        
        /* Drop Cap (Huruf pertama besar) */
        .news-content p:first-child::first-letter {
            float: left; font-size: 3.5rem; line-height: 0.8; font-weight: bold; margin-right: 10px; color: #006838;
        }

        /* Footer Berita */
        .news-footer { margin-top: 50px; padding-top: 30px; border-top: 1px solid #eee; text-align: center; }
        .btn-share { background: #006838; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-family: 'Open Sans', sans-serif; font-size: 14px; }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="index.php" class="logo">🌳 ForestGuard</a>
        <a href="index.php" class="btn-kembali">← Kembali ke Beranda</a>
    </nav>

    <div class="container">
        <div class="news-header">
            <span class="news-category">BERITA & UPDATE</span>
            <h1 class="news-title"><?= $data['judul']; ?></h1>
            <div class="news-date">
                Diposting pada: <?= date('d F Y', strtotime($data['tanggal'])); ?>
            </div>
        </div>

        <img src="<?= trim($data['gambar']); ?>" alt="Gambar Berita" class="news-img">

        <div class="news-content">
            <p><?= nl2br($data['ringkasan']); ?></p>
        </div>

        <div class="news-footer">
            <p style="margin-bottom: 20px; font-family:'Open Sans', sans-serif; color:#666;">Bagikan informasi ini untuk menyebarkan kepedulian.</p>
            <a href="index.php" class="btn-share">Baca Berita Lainnya</a>
        </div>
    </div>

</body>
</html>