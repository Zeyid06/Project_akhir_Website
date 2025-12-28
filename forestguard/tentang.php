<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - ForestGuard</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    
    <style>
        /* --- STYLE DASAR --- */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Open Sans', sans-serif; color: #333; line-height: 1.8; background-color: #f9f9f9; }
        h1, h2, h3 { font-family: 'Merriweather', serif; color: #222; }
        
        /* Navbar */
        .navbar { background: white; padding: 15px 5%; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        .logo { font-size: 22px; font-weight: 700; color: #006838; text-decoration: none; }
        .btn-kembali { color: #555; text-decoration: none; font-weight: 600; font-size: 14px; }
        .btn-kembali:hover { color: #006838; }

        /* Header Halaman */
        .page-header {
            background: linear-gradient(rgba(0,104,56,0.9), rgba(0,104,56,0.9)), url('https://images.unsplash.com/photo-1542273917363-3b1817f69a2d?auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            color: white; padding: 80px 5%; text-align: center;
        }
        .page-header h1 { margin-bottom: 10px; color: white; font-size: 3rem; }
        .page-header p { font-size: 18px; opacity: 0.9; max-width: 600px; margin: 0 auto; }

        /* Konten Utama */
        .content-container { max-width: 1000px; margin: 50px auto; padding: 0 20px; }
        
        /* STYLE KHUSUS: Layout Kanan-Kiri (Zig-Zag) */
        .row-section {
            display: flex;
            align-items: center;
            gap: 50px;
            margin-bottom: 80px;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        /* Membalik urutan untuk baris genap (Gambar Kiri, Teks Kanan) */
        .row-section.reverse {
            flex-direction: row-reverse;
        }

        .text-col { flex: 1; }
        .text-col h2 { border-bottom: 3px solid #e8f5e9; padding-bottom: 10px; margin-bottom: 20px; display: inline-block; color: #006838; }
        .text-col p, .text-col li { color: #555; margin-bottom: 15px; text-align: justify; }

        .img-col { flex: 1; }
        .img-col img { 
            width: 100%; 
            border-radius: 10px; 
            box-shadow: 0 10px 20px rgba(0,0,0,0.1); 
            transition: transform 0.3s;
        }
        .img-col img:hover { transform: scale(1.02); }

        /* Tim Kami (Tetap Grid) */
        .team-section { text-align: center; margin-bottom: 60px; }
        .team-section h2 { margin-bottom: 40px; color: #006838; }
        .team-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; }
        .team-card { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 4px solid #006838; }
        .team-avatar { width: 80px; height: 80px; background: #e8f5e9; border-radius: 50%; margin: 0 auto 15px; display: flex; align-items: center; justify-content: center; font-size: 35px; }

        /* Responsif HP (Gambar jadi di atas/bawah teks) */
        @media (max-width: 768px) {
            .row-section, .row-section.reverse { flex-direction: column; gap: 30px; padding: 25px; }
            .page-header h1 { font-size: 2rem; }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="index.php" class="logo">🌳 ForestGuard</a>
        <a href="index.php" class="btn-kembali">← Kembali ke Beranda</a>
    </nav>

    <header class="page-header">
        <h1>Tentang Kami</h1>
        <p>Mengenal lebih dekat orang-orang dan semangat di balik gerakan hijau ini.</p>
    </header>

    <div class="content-container">
        
        <div class="row-section">
            <div class="text-col">
                <h2>Siapa Kami?</h2>
                <p><strong>ForestGuard</strong> adalah inisiatif berbasis komunitas yang didirikan pada tahun 2024. Kami hadir karena keresahan akan banyaknya program penanaman pohon yang "hilang kabar" setelah seremonial selesai.</p>
                <p>Kami bukan hanya menanam, tapi kami <strong>merawat dan memantau</strong>. Platform digital kami diciptakan untuk memastikan setiap donatur bisa melihat pohonnya tumbuh, lokasi tepatnya, dan kondisi terkininya secara transparan.</p>
            </div>
            <div class="img-col">
                <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb7d5fa5?auto=format&fit=crop&w=800&q=80" alt="Kegiatan Relawan">
            </div>
        </div>

        <div class="row-section reverse">
            <div class="text-col">
                <h2>Visi & Misi</h2>
                <ul>
                    <li><strong>Visi:</strong> Mewujudkan Indonesia yang hijau kembali melalui data yang terbuka, akurat, dan dapat diakses semua orang.</li>
                    <li><strong>Misi 1:</strong> Menyediakan teknologi pemantauan pohon yang mudah digunakan.</li>
                    <li><strong>Misi 2:</strong> Mengedukasi masyarakat bahwa menanam hanyalah permulaan, merawat adalah kunci.</li>
                    <li><strong>Misi 3:</strong> Berkolaborasi dengan pemerintah untuk perlindungan lahan kritis.</li>
                </ul>
            </div>
            <div class="img-col">
                <img src="https://images.unsplash.com/photo-1530268729831-4b0b9e170218?auto=format&fit=crop&w=800&q=80" alt="Bibit Pohon">
            </div>
        </div>

        <div class="team-section">
            <h2>Tim Penggerak</h2>
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-avatar">👨‍💻</div>
                    <h3>Budi Santoso</h3>
                    <p style="font-size:13px; color:#777;">Ketua Yayasan</p>
                </div>
                <div class="team-card">
                    <div class="team-avatar">👩‍🌾</div>
                    <h3>Siti Aminah</h3>
                    <p style="font-size:13px; color:#777;">Koordinator Lapangan</p>
                </div>
                <div class="team-card">
                    <div class="team-avatar">📸</div>
                    <h3>Rian Pratama</h3>
                    <p style="font-size:13px; color:#777;">Dokumentasi & Data</p>
                </div>
            </div>
        </div>

    </div>

    <footer style="text-align: center; padding: 40px; font-size: 13px; color: #666; background: white; margin-top: 50px;">
        &copy; 2024 ForestGuard Indonesia. Melindungi Alam, Melestarikan Kehidupan.
    </footer>

</body>
</html>