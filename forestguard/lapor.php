<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama      = $_POST['nama_pelapor'];
    $lokasi    = $_POST['lokasi_kejadian'];
    $lat       = $_POST['latitude'];
    $lng       = $_POST['longitude'];
    $jenis     = $_POST['jenis_kerusakan'];
    $tingkat   = $_POST['tingkat_kerusakan'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "INSERT INTO laporan_kerusakan (nama_pelapor, lokasi_kejadian, latitude, longitude, jenis_kerusakan, tingkat_kerusakan, deskripsi) 
            VALUES ('$nama', '$lokasi', '$lat', '$lng', '$jenis', '$tingkat', '$deskripsi')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Laporan Berhasil Disimpan!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Lapor Kerusakan - ForestGuard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <style>
        /* TEMA HIJAU KEMBALI */
        body { font-family: 'Open Sans', sans-serif; background-color: #f4f6f8; display: flex; justify-content: center; padding: 20px; }
        .form-container { background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 100%; max-width: 600px; border-top: 5px solid #006838; }
        h2 { text-align: center; color: #006838; margin-bottom: 20px; }
        
        label { display: block; margin-bottom: 5px; font-weight: 600; color: #333; margin-top: 15px; }
        input, select, textarea { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        
        /* Map Picker */
        #mapInput { height: 250px; width: 100%; margin-top: 10px; border-radius: 5px; border: 2px solid #ddd; }
        
        /* Tombol Hijau */
        .btn-simpan { width: 100%; background-color: #006838; color: white; padding: 12px; border: none; border-radius: 5px; font-weight: bold; cursor: pointer; margin-top: 20px; font-size: 16px; transition: 0.3s; }
        .btn-simpan:hover { background-color: #004d2a; }
        .btn-batal { display: block; text-align: center; margin-top: 15px; text-decoration: none; color: #666; }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>📢 Form Lapor Kerusakan</h2>
        <form method="POST">
            <label>Nama Pelapor</label>
            <input type="text" name="nama_pelapor" placeholder="Nama Anda / Anonim" required>

            <label>Lokasi Kejadian</label>
            <input type="text" name="lokasi_kejadian" placeholder="Nama Daerah / Hutan" required>

            <label>Titik Lokasi (Klik Peta)</label>
            <div id="mapInput"></div>
            <input type="hidden" name="latitude" id="lat" required>
            <input type="hidden" name="longitude" id="lng" required>

            <label>Jenis Kerusakan</label>
            <select name="jenis_kerusakan" required>
                <option value="Penebangan Liar">Penebangan Liar</option>
                <option value="Kebakaran Hutan">Kebakaran Hutan</option>
                <option value="Pencemaran Limbah">Pencemaran Limbah</option>
                <option value="Perburuan Liar">Perburuan Liar</option>
                <option value="Lainnya">Lainnya</option>
            </select>

            <label>Tingkat Kerusakan</label>
            <select name="tingkat_kerusakan" required>
                <option value="Rendah">Rendah</option>
                <option value="Sedang">Sedang</option>
                <option value="Parah">Parah / Kritis</option>
            </select>

            <label>Deskripsi Tambahan</label>
            <textarea name="deskripsi" rows="3" placeholder="Ceritakan detail kejadian..."></textarea>

            <button type="submit" name="simpan" class="btn-simpan">KIRIM LAPORAN</button>
            <a href="index.php" class="btn-batal">Kembali</a>
        </form>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        var map = L.map('mapInput').setView([-2.5, 118], 5);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
        var marker;
        map.on('click', function(e) {
            document.getElementById('lat').value = e.latlng.lat;
            document.getElementById('lng').value = e.latlng.lng;
            if (marker) marker.setLatLng(e.latlng);
            else marker = L.marker(e.latlng).addTo(map);
        });
    </script>
</body>
</html>