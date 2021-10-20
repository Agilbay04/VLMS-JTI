-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2021 pada 01.12
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vlms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat`
--

CREATE TABLE `alat` (
  `id_alat` int(11) NOT NULL,
  `nama_alat` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_grup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alat`
--

INSERT INTO `alat` (`id_alat`, `nama_alat`, `jumlah`, `id_grup`) VALUES
(1, 'Miss Amiya Kulas', 3, 5),
(2, 'Aidan Macejkovic', 5, 1),
(3, 'Alexandra Beier', 6, 6),
(4, 'Kendrick Bernier', 2, 2),
(5, 'Clark Nitzsche', 0, 4),
(6, 'Myrtie Blick', 1, 3),
(7, 'Gayle Dicki', 9, 4),
(8, 'Madelynn Murray', 9, 2),
(9, 'Thad Little Sr.', 6, 1),
(10, 'Van Treutel', 7, 2),
(11, 'Naomi Stokes', 2, 2),
(12, 'Wilfredo Beahan', 6, 5),
(13, 'Liliana Farrell', 8, 4),
(14, 'Mr. Ron Cartwright Jr.', 8, 3),
(15, 'Prof. Ashly Veum DDS', 4, 3),
(16, 'Jamil Strosin', 7, 4),
(17, 'America Vandervort', 7, 5),
(18, 'Miss Irma Rippin II', 2, 5),
(19, 'Lysanne Satterfield', 9, 5),
(20, 'Antonio Gleichner', 4, 4),
(21, 'Angeline Sawayn', 8, 5),
(22, 'Mr. Barry Watsica Sr.', 5, 3),
(23, 'Miss Dana Kemmer DVM', 3, 1),
(24, 'Mayra Thiel', 4, 5),
(25, 'Mr. Ross Bergnaum', 7, 5),
(26, 'Prof. Reese Homenick V', 9, 5),
(27, 'Lisette Padberg', 0, 3),
(28, 'Elinore Christiansen', 7, 5),
(29, 'Mr. Hershel Price V', 4, 5),
(30, 'Alva Auer', 6, 5),
(31, 'Prof. Reese Fadel', 1, 4),
(32, 'Miss Lisa Hammes MD', 1, 1),
(33, 'Miss Desiree Hermann', 5, 2),
(34, 'Ethelyn Price', 5, 2),
(35, 'Ivah Gusikowski', 9, 3),
(36, 'Rubye Nolan', 9, 3),
(37, 'Angeline Ankunding', 5, 4),
(38, 'Treva Conroy', 5, 2),
(39, 'Dr. Maybelle Bauch PhD', 9, 6),
(40, 'Dulce Yundt', 4, 5),
(41, 'Mrs. Elvera Franecki', 9, 5),
(42, 'Margret Willms MD', 4, 1),
(43, 'Tara Cruickshank', 9, 2),
(44, 'Marcus Wilderman', 7, 6),
(45, 'Dessie Roberts', 5, 3),
(46, 'Jarvis Eichmann', 4, 3),
(47, 'Gregoria Borer', 4, 4),
(48, 'Rosina Heller', 8, 1),
(49, 'Kendall Satterfield', 1, 2),
(50, 'Prof. Nils Greenfelder', 8, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `no_identitas` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `id_grup` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `no_identitas`, `status`, `bidang`, `id_grup`, `gambar`, `password`, `is_active`) VALUES
(1, 'Agil Wijaya', '255', 'Mahasiswa', 'Robotika', 3, '9jBNPwYEWKmFg3U.png', '202cb962ac59075b964b07152d234b70', 0),
(2, 'Angga gumilang', '', 'Dosen', 'Robotika', 1, 'vHBa9Tqlp1khVRg.jpg', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `author` int(11) NOT NULL,
  `isi` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_grup` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `gambar` varchar(100) NOT NULL,
  `status_artikel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `author`, `isi`, `id_kategori`, `id_grup`, `tanggal`, `gambar`, `status_artikel`) VALUES
(1, 'help me tolong', 2, '<p>uifhsfhiaip <b>fkskfosof</b></p>', 2, 5, '2021-05-27 13:03:27', 'gusZyKv9Q5cfbp1.jpg', 0),
(2, 'Bio teknologi', 2, '<p>fasuygdhaskjdasdma</p>', 1, 5, '2021-10-20 22:32:46', 'HQSKTaqO8C7xNk5.jpg', 1),
(3, 'Keamanan data pada era digital', 2, '<p>asdadaff</p>', 1, 5, '2021-10-20 22:43:27', '3OWEH95lPXhTQGq.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `id_dokumentasi` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_grup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokumentasi`
--

INSERT INTO `dokumentasi` (`id_dokumentasi`, `deskripsi`, `gambar`, `id_grup`) VALUES
(1, 'UTS', '9Uko6qYlBpKdbRI.png', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `elibrary`
--

CREATE TABLE `elibrary` (
  `id_library` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `elibrary`
--

INSERT INTO `elibrary` (`id_library`, `judul`, `link`) VALUES
(1, 'Keamanan data pada era digital saat ini', 'linksurya.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`id_faq`, `pertanyaan`, `jawaban`) VALUES
(1, 'apakah website Polije Aman ?', 'sangat Aman sekali'),
(2, 'Apakah ada persyaratan khusus untuk bergabung menjadi member GARIS V ?', 'Persyaratan khusus tergantung dari masing-masing pemilik project, silahkan hubungi dosen yang bersangkutan!'),
(3, 'Bagaimana cara bergabung menjadi member GARIS V ?', 'Tinggal pilih project yang tersedia dan isi form apply'),
(4, 'Bolehkah mahasiswa mengambil lebih dari 1 projek sekaligus?', 'Bisa, namun alangkah lebih baik jika mahasiswa hanya tergabung dalam 1 project pada waktu yang bersamaan'),
(5, 'Mahasiswa semester berapa yang boleh bergabung GARIS V ?', 'Mahasiswa aktif, dari Kampus Utama Polije maupun Kampus PSDKU Polije bisa mendaftar di masing-masing lab yang tersedia di JTI Polije.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `grup_penelitian`
--

CREATE TABLE `grup_penelitian` (
  `id_grup` int(3) NOT NULL,
  `nama_grup` varchar(50) NOT NULL,
  `nama_kampus` varchar(100) NOT NULL,
  `nama_lab` varchar(100) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `fax` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `grup_penelitian`
--

INSERT INTO `grup_penelitian` (`id_grup`, `nama_grup`, `nama_kampus`, `nama_lab`, `lokasi`, `email`, `no_hp`, `fax`) VALUES
(1, 'garis 1', '', '', '', '', '', ''),
(2, 'garis 2', '', '', '', '', '', ''),
(3, 'garis 3', '', '', '', '', '', ''),
(4, 'garis 4', '', '', '', '', '', ''),
(5, 'GARIS V', 'Kampus 1 Jember', 'Rekayasa Sistem Informasi', 'Gedung Jurusan Teknologi Informasi, Politeknik Negeri Jember , Lingkungan Panji, Tegalgede, Kec. Kaliwates, Kabupaten Jember, Jawa Timur 68124\r\n', 'lab.rsi.jti@polije.ac.id', '0331-333532', '0331-333531');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Robotika'),
(2, 'Elektronik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_grup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `gambar`, `id_grup`) VALUES
(1, 'Pendeteksi virus', 'Digunakan pada rumah sakit tingkat atas', 'Z36xr8cngekLPWu.jpg', 5),
(2, 'aplikasi 2', 'adadas', 'Z36xr8cngekLPWu.jpg', 5),
(3, 'Aplikasi 3', 'siofutsfuishdfk', 'Z36xr8cngekLPWu.jpg', 5),
(4, 'Aplikasi 4', 'adhjgasdjkhajdkh', 'Z36xr8cngekLPWu.jpg', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `projek`
--

CREATE TABLE `projek` (
  `id_projek` int(11) NOT NULL,
  `cluster` varchar(20) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `status_projek` int(1) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `projek`
--

INSERT INTO `projek` (`id_projek`, `cluster`, `deskripsi`, `status_projek`, `id_dosen`, `id_mahasiswa`) VALUES
(1, '1sad', 'arduino', 1, 2, 1),
(2, 'AI', 'Vlms', 0, 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `repositori`
--

CREATE TABLE `repositori` (
  `id_repositori` int(11) NOT NULL,
  `id_grup` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `repositori`
--

INSERT INTO `repositori` (`id_repositori`, `id_grup`, `deskripsi`, `link`) VALUES
(1, 1, 'kesehatan anak dalam bermain game', 'kuyha.com'),
(2, 1, 'Hardware', 'kuyha.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id_alat`),
  ADD KEY `id_grup` (`id_grup`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_grup` (`id_grup`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_grup` (`id_grup`),
  ADD KEY `author` (`author`);

--
-- Indeks untuk tabel `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`id_dokumentasi`);

--
-- Indeks untuk tabel `elibrary`
--
ALTER TABLE `elibrary`
  ADD PRIMARY KEY (`id_library`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indeks untuk tabel `grup_penelitian`
--
ALTER TABLE `grup_penelitian`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_grup` (`id_grup`);

--
-- Indeks untuk tabel `projek`
--
ALTER TABLE `projek`
  ADD PRIMARY KEY (`id_projek`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indeks untuk tabel `repositori`
--
ALTER TABLE `repositori`
  ADD PRIMARY KEY (`id_repositori`),
  ADD KEY `id_grup` (`id_grup`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alat`
--
ALTER TABLE `alat`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `id_dokumentasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `elibrary`
--
ALTER TABLE `elibrary`
  MODIFY `id_library` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `grup_penelitian`
--
ALTER TABLE `grup_penelitian`
  MODIFY `id_grup` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `projek`
--
ALTER TABLE `projek`
  MODIFY `id_projek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `repositori`
--
ALTER TABLE `repositori`
  MODIFY `id_repositori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
