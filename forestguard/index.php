<?php
include 'koneksi.php';

// 1. AMBIL DATA LAPORAN (Untuk Peta & List Laporan)
$query_lapor = mysqli_query($conn, "SELECT * FROM laporan_kerusakan ORDER BY id_lapor DESC");
$data_laporan = [];
while($row = mysqli_fetch_assoc($query_lapor)) {
    $data_laporan[] = $row;
}

// 2. AMBIL DATA BERITA (Untuk Bagian Berita)
$query_news = mysqli_query($conn, "SELECT * FROM articles ORDER BY tanggal DESC LIMIT 3");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForestGuard - Pemantauan</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <style>
        /* --- TEMA: HIJAU ORIGINAL --- */
        :root { --primary: #006838; --bg-light: #f4f6f8; }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Open Sans', sans-serif; color: #333; line-height: 1.6; background-color: #fff; }
        h1, h2, h3 { font-family: 'Merriweather', serif; }
        a { text-decoration: none; color: inherit; transition: 0.3s; }
        img { width: 100%; display: block; }

        /* Navbar */
        .navbar { display: flex; justify-content: space-between; align-items: center; padding: 15px 5%; background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.05); position: sticky; top: 0; z-index: 1000; }
        .logo { font-size: 22px; font-weight: 700; color: var(--primary); display: flex; align-items: center; gap: 8px; }
        .nav-menu { display: flex; gap: 25px; font-weight: 600; font-size: 14px; text-transform: uppercase; }
        .btn-lapor { background-color: var(--primary); color: white; padding: 10px 20px; font-weight: bold; font-size: 13px; border-radius: 4px; }
        .btn-lapor:hover { background-color: #004d2a; }

        /* Hero */
        .hero { 
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
            background-size: cover; background-position: center; height: 80vh; display: flex; align-items: center; padding: 0 5%; color: white; 
        }
        .hero h1 { font-size: 48px; margin-bottom: 20px; font-weight: 700; }
        .btn-hero { background: white; color: var(--primary); padding: 12px 30px; font-weight: bold; border-radius: 5px; }

        /* Berita Section */
        .news-section { padding: 60px 5%; background: white; }
        .section-header { display: flex; justify-content: space-between; align-items: end; margin-bottom: 30px; border-bottom: 2px solid #eee; padding-bottom: 15px; }
        .section-header h2 { color: var(--primary); font-size: 28px; }
        .link-all { color: #666; font-size: 14px; font-weight: 600; }
        
        .news-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .news-card { background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08); transition: transform 0.3s; }
        .news-card:hover { transform: translateY(-5px); }
        .news-img { height: 200px; object-fit: cover; }
        .news-body { padding: 20px; }
        .news-date { font-size: 12px; color: #888; margin-bottom: 8px; display: block; }
        
        .news-title a { color: #222; font-weight: 700; line-height: 1.4; text-decoration: none; }
        .news-title a:hover { color: var(--primary); }
        
        .news-desc { font-size: 14px; color: #555; margin-bottom: 15px; }
        .read-more { color: var(--primary); font-weight: bold; font-size: 13px; text-transform: uppercase; }

        /* Data Section */
        .data-section { padding: 60px 5%; background-color: var(--bg-light); }
        .section-title { text-align: center; margin-bottom: 40px; }
        #map { height: 450px; width: 100%; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 50px; border: 4px solid white; z-index: 1; }
        .report-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; }
        .card { background: white; padding: 25px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 5px solid var(--primary); transition: transform 0.2s; }
        .card:hover { transform: translateY(-5px); }
        .badge { background: #e8f5e9; color: var(--primary); padding: 5px 10px; border-radius: 20px; font-size: 11px; font-weight: 800; text-transform: uppercase; }

        @media (max-width: 768px) { .navbar { flex-direction: column; gap: 15px; } .hero h1 { font-size: 32px; } }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="index.php" class="logo">🌳 ForestGuard</a>
        <div class="nav-menu">
            <a href="tentang.php">Tentang Kami</a>
            <a href="program.php">Program</a>
            <a href="#">Mitra</a>
        </div>
        <div class="nav-actions">
            <a href="lapor.php" class="btn-lapor">LAPOR KERUSAKAN</a>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-content">
            <h1>Lindungi Hutan, Lestarikan Kehidupan</h1>
            <p style="font-size: 18px; margin-bottom: 30px;">Mari bersama memantau dan melaporkan kerusakan alam demi masa depan.</p>
            <a href="#news" class="btn-hero">Baca Berita</a>
        </div>
    </header>

    <section id="news" class="news-section">
        <div class="section-header">
            <h2>Kabar Hutan Terkini</h2>
            <a href="#" class="link-all">Lihat Semua Berita →</a>
        </div>

        <div class="news-grid">
            <?php while($news = mysqli_fetch_assoc($query_news)) : ?>
            <div class="news-card">
                <a href="detail.php?id=<?= $news['id_article']; ?>">
                    <img src="<?= trim($news['gambar']); ?>" alt="Berita" class="news-img">
                </a>
                
                <div class="news-body">
                    <span class="news-date">📅 <?= date('d M Y', strtotime($news['tanggal'])); ?></span>
                    
                    <h3 class="news-title">
                        <a href="detail.php?id=<?= $news['id_article']; ?>">
                            <?= $news['judul']; ?>
                        </a>
                    </h3>
                    
                    <div style="margin-top: 15px;">
                        <a href="detail.php?id=<?= $news['id_article']; ?>" class="read-more">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </section>

    <section id="data" class="data-section">
        <div class="section-title">
            <h2>Pantauan Kerusakan Hutan</h2>
            <p>Laporan terkini dari masyarakat (Real-time map).</p>
        </div>

        <div id="map"></div>

        <div class="report-grid">
            <?php foreach($data_laporan as $row) : ?>
            <div class="card">
                <h3><?= $row['jenis_kerusakan']; ?></h3>
                <div style="margin-bottom: 15px;">
                    <span class="badge"><?= $row['tingkat_kerusakan']; ?></span>
                </div>
                <p style="font-size: 13px; color: #555; line-height: 1.8;">
                    📍 <strong>Lokasi:</strong> <?= $row['lokasi_kejadian']; ?><br>
                    📝 <strong>Ket:</strong> "<?= $row['deskripsi']; ?>"<br>
                    📅 <strong>Tanggal:</strong> <?= date('d M Y', strtotime($row['tanggal_lapor'])); ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([-2.5, 118], 5);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        var dangerIcon = L.icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/markers/marker-icon-2x-red.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            iconSize: [25, 41], iconAnchor: [12, 41], popupAnchor: [1, -34], shadowSize: [41, 41]
        });

        var reports = <?php echo json_encode($data_laporan); ?>;
        reports.forEach(function(lapor) {
            if(lapor.latitude && lapor.longitude) {
                L.marker([lapor.latitude, lapor.longitude], {icon: dangerIcon}).addTo(map)
                .bindPopup(`<b>${lapor.jenis_kerusakan}</b><br>${lapor.lokasi_kejadian}`);
            }
        });
    </script>
</body>
</html>