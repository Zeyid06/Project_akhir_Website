-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2025 at 03:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forestguard_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `ringkasan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_article`, `judul`, `gambar`, `ringkasan`, `tanggal`) VALUES
(1, 'Penanaman 1000 Pohon Bakau di Pesisir Jawa', 'https://images.unsplash.com/photo-1619260284857-89417830b42f?auto=format&fit=crop&w=600&q=80', 'Relawan ForestGuard berhasil menanam bibit mangrove untuk mencegah abrasi pantai.', '2024-05-10'),
(2, 'Kebakaran Hutan di Sumatera Berhasil Padam', 'https://images.unsplash.com/photo-1541620246210-99c565a50742?auto=format&fit=crop&w=600&q=80', 'Tim gabungan dan masyarakat setempat bahu membahu memadamkan titik api.', '2024-06-15'),
(3, 'Kerusakan Hutan Lindung Rimbo Aneh di Agam, Sumatera Barat: Kepedulian Masyarakat dan Tindakan Tegas Dibutuhkan', 'assets/hutan_limbo.webp', 'Hutan Lindung Rimbo Aneh yang berada di Nagari Tigo Koto Silungkang, Kecamatan Palembayan, Kabupaten Agam, Sumatera Barat, saat ini menghadapi ancaman serius akibat aktivitas pembabatan hutan secara ilegal oleh pihak-pihak yang tidak bertanggung jawab. Kawasan yang berperan penting sebagai penyangga ekosistem dan sumber kehidupan masyarakat ini perlahan mengalami kerusakan, sehingga menimbulkan kekhawatiran di tengah warga setempat.\r\n\r\nBerdasarkan laporan yang ada, luas hutan lindung yang telah mengalami kerusakan diperkirakan mencapai sekitar 0,55 hektare atau setara dengan 5.500 meter persegi. Aktivitas pembabatan tersebut tidak hanya merusak kawasan hutan lindung, tetapi juga berdampak langsung pada kawasan karst di sekitarnya. Karst merupakan sistem hidrologi yang unik dan sangat sensitif terhadap perubahan lingkungan. Menurut Dr. Osronita, pemerhati lingkungan hidup dan kawasan karst, keberadaan hutan di kawasan karst memiliki peran krusial dalam menjaga keseimbangan ekosistem serta kelestarian sumber daya alam. Kawasan karst berfungsi sebagai penyimpan air alami dan sumber air bagi wilayah sekitarnya. Penebangan hutan dapat mengganggu siklus hidrologi karena mengurangi kemampuan tanah dan permukaan lahan dalam menyerap dan menyimpan air.\r\n\r\nSelain itu, kawasan karst juga menjadi habitat bagi berbagai jenis flora dan fauna endemik yang langka dan memiliki nilai ekologis tinggi. Kerusakan hutan berpotensi mengancam kelangsungan hidup spesies-spesies tersebut. Lebih jauh, kawasan karst memiliki jaringan lorong bawah tanah serta ornamen geologi atau speleothem yang terbentuk selama ratusan juta tahun. Penebangan hutan di permukaan dapat mengganggu kestabilan tanah dan proses resapan air, sehingga berisiko merusak kekayaan geologi yang ada di bawah permukaan, sebagaimana dijelaskan oleh Kepala Pusat Penelitian dan Pengembangan Geopark dan Lingkungan Hidup Unitas Padang.\r\n\r\nPembabatan liar di Hutan Lindung Rimbo Aneh berpotensi menimbulkan berbagai dampak negatif, di antaranya kerusakan ekosistem hutan lindung, hilangnya keanekaragaman hayati flora dan fauna, meningkatnya risiko erosi, tanah longsor, dan banjir bandang, menurunnya kualitas air serta terganggunya sumber daya alam lainnya. Selain itu, kerusakan hutan juga mengancam keberlanjutan pengembangan pariwisata di Nagari Tigo Koto Silungkang, khususnya potensi geowisata seperti Guo Pacualan.\r\n\r\nKelompok tani dan Pokdarwis setempat telah berupaya menyuarakan kepedulian terhadap kondisi hutan lindung ini kepada pihak-pihak terkait, namun hingga kini belum mendapatkan respons yang memadai. Kesatuan Pengelolaan Hutan Nagari (KPHN) Kabupaten Agam dinilai lamban dalam menangani permasalahan tersebut. Sementara itu, Lembaga Pengelolaan Hutan Nagari (LPHN) di Nagari Tigo Koto Silungkang juga memiliki keterbatasan dalam sumber daya dan kewenangan, sehingga belum mampu mengambil tindakan yang optimal.\r\n\r\nOleh karena itu, diperlukan langkah tegas berupa penegakan hukum, pemberian sanksi kepada pelaku pembabatan liar, serta solusi jangka panjang yang berkelanjutan dari pihak-pihak berwenang untuk menghentikan praktik perusakan hutan lindung ini. Kerusakan yang terjadi tidak hanya mengancam ekosistem, tetapi juga menggerus potensi alam dan kesejahteraan masyarakat Nagari Tigo Koto Silungkang. Aparat terkait perlu segera melakukan investigasi dan penindakan secara serius terhadap para pelaku.\r\n\r\nHutan lindung memiliki peranan vital dalam menjaga keseimbangan lingkungan dan menopang kehidupan masyarakat. Oleh sebab itu, upaya pelestarian hutan lindung harus menjadi tanggung jawab bersama. Pemerintah, masyarakat, akademisi, serta organisasi lingkungan perlu bersinergi dalam melindungi Hutan Lindung Rimbo Aneh agar kerusakan tidak semakin meluas. Dengan adanya kesadaran dan komitmen bersama, keseimbangan ekosistem dapat terjaga, sumber daya alam dapat dilestarikan, serta keunikan dan keindahan alam yang ada di kawasan tersebut tetap terpelihara untuk generasi mendatang.', '2025-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_kerusakan`
--

CREATE TABLE `laporan_kerusakan` (
  `id_lapor` int(11) NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `lokasi_kejadian` varchar(150) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `jenis_kerusakan` varchar(100) NOT NULL,
  `tingkat_kerusakan` varchar(50) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal_lapor` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan_kerusakan`
--

INSERT INTO `laporan_kerusakan` (`id_lapor`, `nama_pelapor`, `lokasi_kejadian`, `latitude`, `longitude`, `jenis_kerusakan`, `tingkat_kerusakan`, `deskripsi`, `tanggal_lapor`) VALUES
(1, 'Warga Desa', 'Hutan Lindung A', -6.20000000, 106.81660000, 'Penebangan Liar', 'Parah', 'Banyak pohon ditebang malam hari.', '2025-12-28 20:14:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `laporan_kerusakan`
--
ALTER TABLE `laporan_kerusakan`
  ADD PRIMARY KEY (`id_lapor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporan_kerusakan`
--
ALTER TABLE `laporan_kerusakan`
  MODIFY `id_lapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
