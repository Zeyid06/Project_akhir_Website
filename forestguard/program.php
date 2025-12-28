<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Kami - ForestGuard</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* --- 1. STYLE DASAR (Sama dengan Index/Tentang) --- */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Open Sans', sans-serif; color: #333; line-height: 1.6; background-color: #f4f6f8; }
        h1, h2, h3 { font-family: 'Merriweather', serif; }
        a { text-decoration: none; transition: 0.3s; }

        /* --- 2. NAVBAR --- */
        .navbar { background: white; padding: 15px 5%; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05); position: sticky; top: 0; z-index: 100; }
        .logo { font-size: 22px; font-weight: 700; color: #006838; display: flex; align-items: center; gap: 8px; }
        .btn-kembali { color: #555; font-weight: 600; font-size: 14px; }
        .btn-kembali:hover { color: #006838; }

        /* --- 3. HERO SECTION (Header) --- */
        .hero-program {
            /* Gambar orang menanam/kegiatan lapangan */
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1591195853828-11db59a44f6b?auto=format&fit=crop&w=1200&q=80');
            background-size: cover; background-position: center;
            padding: 80px 5%; text-align: center; color: white;
        }
        .hero-program h1 { font-size: 3rem; margin-bottom: 10px; }
        .hero-program p { font-size: 1.1rem; max-width: 700px; margin: 0 auto; opacity: 0.9; }

        /* --- 4. GRID PROGRAM (Kartu-Kartu) --- */
        .container { max-width: 1200px; margin: 50px auto; padding: 0 20px; }
        
        .program-grid {
            display: grid;
            /* Grid Responsif: Otomatis menyesuaikan jumlah kolom */
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .program-card {
            background: white; border-radius: 10px; overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease; border-bottom: 4px solid transparent;
        }

        .program-card:hover {
            transform: translateY(-10px); /* Efek naik saat di-hover */
            border-bottom: 4px solid #006838;
        }

        .card-img {
            height: 200px; width: 100%; object-fit: cover;
        }

        .card-body { padding: 25px; }
        .card-body h3 { color: #006838; margin-bottom: 10px; font-size: 1.4rem; }
        .card-body p { color: #666; font-size: 0.95rem; margin-bottom: 20px; }

        .btn-detail {
            display: inline-block; padding: 8px 0;
            color: #006838; font-weight: bold; font-size: 0.9rem;
            border-bottom: 2px solid #e8f5e9;
        }
        .btn-detail:hover { border-bottom: 2px solid #006838; }

        /* --- 5. FOOTER --- */
        footer { text-align: center; padding: 30px; color: #888; font-size: 13px; margin-top: 50px; }

        /* Responsif HP */
        @media (max-width: 768px) {
            .hero-program h1 { font-size: 2rem; }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="index.php" class="logo">🌳 ForestGuard</a>
        <a href="index.php" class="btn-kembali">← Kembali ke Beranda</a>
    </nav>

    <header class="hero-program">
        <h1>Program Unggulan</h1>
        <p>Bergabunglah dalam berbagai aksi nyata kami untuk memulihkan ekosistem dan memberdayakan masyarakat sekitar hutan.</p>
    </header>

    <div class="container">
        <div class="program-grid">

            <div class="program-card">
                <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb7d5fa5?auto=format&fit=crop&w=600&q=80" alt="Wali Pohon" class="card-img">
                <div class="card-body">
                    <h3>Wali Pohon (Adopsi)</h3>
                    <p>Program donasi dimana Anda bisa mengadopsi satu pohon. Kami akan menanam dan merawatnya atas nama Anda selama 3 tahun.</p>
                    <a href="#" class="btn-detail">Lihat Detail →</a>
                </div>
            </div>

            <div class="program-card">
                <img src="https://images.unsplash.com/photo-1504280509243-484638d0199d?auto=format&fit=crop&w=600&q=80" alt="Ekspedisi" class="card-img">
                <div class="card-body">
                    <h3>Ekspedisi Hutan</h3>
                    <p>Ikuti perjalanan menyusuri hutan lindung bersama para ahli biologi untuk mendata flora dan fauna langka yang tersisa.</p>
                    <a href="#" class="btn-detail">Lihat Detail →</a>
                </div>
            </div>

            <div class="program-card">
                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=600&q=80" alt="Edukasi" class="card-img">
                <div class="card-body">
                    <h3>Forest Goes to School</h3>
                    <p>Tim edukasi kami berkunjung ke sekolah-sekolah untuk mengajarkan pentingnya konservasi sejak usia dini.</p>
                    <a href="#" class="btn-detail">Lihat Detail →</a>
                </div>
            </div>

            <div class="program-card">
                <img src="https://images.unsplash.com/photo-1621961458348-f013d1e9b977?auto=format&fit=crop&w=600&q=80" alt="Masyarakat" class="card-img">
                <div class="card-body">
                    <h3>Desa Binaan</h3>
                    <p>Memberdayakan masyarakat sekitar hutan dengan pelatihan ekonomi alternatif agar tidak merambah hutan.</p>
                    <a href="#" class="btn-detail">Lihat Detail →</a>
                </div>
            </div>

             <div class="program-card">
                <img src="https://images.unsplash.com/photo-1516937941344-00b4ec274922?auto=format&fit=crop&w=600&q=80" alt="Relawan" class="card-img">
                <div class="card-body">
                    <h3>Relawan Tanggap Api</h3>
                    <p>Pelatihan khusus bagi pemuda desa untuk menjadi garda terdepan dalam pencegahan dan penanganan kebakaran hutan.</p>
                    <a href="#" class="btn-detail">Lihat Detail →</a>
                </div>
            </div>

             <div class="program-card">
                <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=600&q=80" alt="Riset" class="card-img">
                <div class="card-body">
                    <h3>Riset & Pemetaan</h3>
                    <p>Pengumpulan data vegetasi menggunakan teknologi drone dan satelit untuk memantau deforestasi secara real-time.</p>
                    <a href="#" class="btn-detail">Lihat Detail →</a>
                </div>
            </div>

        </div>
    </div>

    <footer>
        &copy; 2024 ForestGuard Program.
    </footer>

</body>
</html>