-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 06:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer_study`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` enum('sistem informasi','sistem informasi akuntansi','teknologi informasi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_lulus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `nim`, `nik`, `nama`, `prodi`, `telepon`, `email`, `tahun_lulus`) VALUES
(1, '22132478', '3574041245738000', 'Ahmad Yudi', 'sistem informasi', '081334278443', 'yudi@gmail.com', '2020'),
(2, '22132455', '357406354627000', 'Budi Purmomo', 'sistem informasi akuntansi', '089643728945', 'budi@gmail.com', '2019'),
(3, '22132469', '3574045467384500', 'Nurul Azizah', 'sistem informasi akuntansi', '085312457546', 'azizah@gmail.com', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_alumni` bigint(20) UNSIGNED NOT NULL,
  `id_pertanyaan` bigint(20) UNSIGNED NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `id_alumni`, `id_pertanyaan`, `jawaban`) VALUES
(1, 1, 1, 'Bekerja (full time / part time)'),
(2, 1, 2, ''),
(3, 1, 3, 'Iya'),
(4, 1, 4, '3 bulan'),
(5, 1, 5, '3.500.000'),
(6, 1, 6, 'jalan suroyo'),
(7, 1, 7, 'Intansi pemerintah'),
(8, 1, 8, ''),
(9, 1, 9, 'kantor polisi'),
(10, 1, 10, 'anggota'),
(11, 1, 11, ''),
(12, 1, 12, 'Nasional / Wiraswasta Berbadan Hukum'),
(13, 1, 13, 'Biaya Sendiri'),
(14, 1, 14, 'Universitaa Malang'),
(15, 1, 15, 'Informatika'),
(16, 1, 16, '2024-07-12'),
(17, 1, 17, 'Biaya Sendiri/Keluarga'),
(18, 1, 18, ''),
(19, 1, 19, 'Erat'),
(20, 1, 20, 'Tingkat yang Sama'),
(21, 1, 21, 'Rendah'),
(22, 1, 22, 'Cukup'),
(23, 1, 23, 'Cukup'),
(24, 1, 24, 'Tinggi'),
(25, 1, 25, 'Tinggi'),
(26, 1, 26, 'Cukup'),
(27, 1, 27, 'Cukup'),
(28, 1, 28, 'Cukup'),
(29, 1, 29, 'Cukup Besar'),
(30, 1, 30, 'Cukup Besar'),
(31, 1, 31, 'Cukup Besar'),
(32, 1, 32, 'Cukup Besar'),
(33, 1, 33, 'Cukup Besar'),
(34, 1, 34, 'Cukup Besar'),
(35, 1, 35, 'Cukup Besar'),
(36, 1, 36, '2 bulan setelah lulus'),
(37, 1, 37, 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada|Dihubungi oleh perusahaan|Menghubungi agen tenaga kerja komersial/swasta'),
(38, 1, 38, ''),
(39, 1, 39, '2'),
(40, 1, 40, '2'),
(41, 1, 41, '2'),
(42, 1, 42, 'Tidak'),
(43, 1, 43, ''),
(44, 1, 44, 'Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya'),
(45, 1, 45, ''),
(46, 2, 1, 'Bekerja (full time / part time)'),
(47, 2, 2, ''),
(48, 2, 3, 'Tidak'),
(49, 2, 4, '7 bulan'),
(50, 2, 5, '2.000.000'),
(51, 2, 6, 'jalan mastrip'),
(52, 2, 7, 'Perusahaan swasta'),
(53, 2, 8, ''),
(54, 2, 9, 'barbershop'),
(55, 2, 10, 'karyawan'),
(56, 2, 11, ''),
(57, 2, 12, 'Lokal /wilayah / Wiraswasta Tidak Berbadan Hukum'),
(58, 2, 13, ''),
(59, 2, 14, ''),
(60, 2, 15, ''),
(61, 2, 16, ''),
(62, 2, 17, 'Biaya Sendiri/Keluarga'),
(63, 2, 18, ''),
(64, 2, 19, 'Kurang Erat'),
(65, 2, 20, 'Setingkat Lebih Rendah'),
(66, 2, 21, 'Cukup'),
(67, 2, 22, 'Cukup'),
(68, 2, 23, 'Cukup'),
(69, 2, 24, 'Cukup'),
(70, 2, 25, 'Cukup'),
(71, 2, 26, 'Cukup'),
(72, 2, 27, 'Cukup'),
(73, 2, 28, 'Cukup'),
(74, 2, 29, 'Cukup Besar'),
(75, 2, 30, 'Cukup Besar'),
(76, 2, 31, 'Cukup Besar'),
(77, 2, 32, 'Cukup Besar'),
(78, 2, 33, 'Cukup Besar'),
(79, 2, 34, 'Cukup Besar'),
(80, 2, 35, 'Cukup Besar'),
(81, 2, 36, '7 bulan'),
(82, 2, 37, 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada|Pergikebursa/pamerankerja'),
(83, 2, 38, ''),
(84, 2, 39, '4'),
(85, 2, 40, '2'),
(86, 2, 41, '2'),
(87, 2, 42, 'Tidak'),
(88, 2, 43, ''),
(89, 2, 44, 'Saya belum mendapatkan pekerjaan yang lebih sesuai.'),
(90, 2, 45, ''),
(91, 3, 1, 'Melanjutkan Pendidikan'),
(92, 3, 2, ''),
(93, 3, 3, 'Tidak'),
(94, 3, 4, '-'),
(95, 3, 5, '-'),
(96, 3, 6, '-'),
(97, 3, 7, ''),
(98, 3, 8, '-'),
(99, 3, 9, '-'),
(100, 3, 10, '-'),
(101, 3, 11, ''),
(102, 3, 12, ''),
(103, 3, 13, 'Beasiswa'),
(104, 3, 14, 'Universitas Malang'),
(105, 3, 15, 'Informatika'),
(106, 3, 16, '2024-07-04'),
(107, 3, 17, 'Biaya Sendiri/Keluarga'),
(108, 3, 18, ''),
(109, 3, 19, ''),
(110, 3, 20, ''),
(111, 3, 21, 'Tinggi'),
(112, 3, 22, 'Tinggi'),
(113, 3, 23, 'Tinggi'),
(114, 3, 24, 'Tinggi'),
(115, 3, 25, 'Tinggi'),
(116, 3, 26, 'Tinggi'),
(117, 3, 27, 'Tinggi'),
(118, 3, 28, 'Tinggi'),
(119, 3, 29, 'Besar'),
(120, 3, 30, 'Besar'),
(121, 3, 31, 'Besar'),
(122, 3, 32, 'Besar'),
(123, 3, 33, 'Besar'),
(124, 3, 34, 'Besar'),
(125, 3, 35, 'Besar'),
(126, 3, 36, 'saya tidak mencari kerja'),
(127, 3, 37, 'Lainnya'),
(128, 3, 38, 'belum mencari kerja'),
(129, 3, 39, '-'),
(130, 3, 40, '-'),
(131, 3, 41, '-'),
(132, 3, 42, 'Tidak'),
(133, 3, 43, ''),
(134, 3, 45, '');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `pertanyaan`) VALUES
(1, 'Jelaskan status Anda saat ini?'),
(2, 'Jika jawaban diatas memilih lainnya tuliskan jawaban disini!'),
(3, 'Apakah Anda telah mendapatkan pekerjaan dalam waktu kurang dari 6 bulan, termasuk pekerjaan yang diperoleh sebelum lulus?'),
(4, 'Dalam berapa bulan Anda mendapatkan pekerjaan?'),
(5, 'Berapa rata-rata pendapatan Anda per bulan? (take home pay)?'),
(6, 'Dimana lokasi tempat Anda bekerja? (Alamat Lengkap)'),
(7, 'Apa jenis perusahaan/intansi/institusi tempat anda bekerja sekarang?'),
(8, 'Jika jawaban diatas memilih lainnya tuliskan jawaban disini!'),
(9, 'Apa nama perusahaan/kantor tempat Anda bekerja?'),
(10, 'jabatan Anda saat ini?'),
(11, 'Bila berwiraswasta, apa posisi/jabatan Anda saat ini? (Apabila menjawab wiraswasta)'),
(12, 'Apa tingkat tempat kerja Anda?'),
(13, 'Apa saja sumber biaya untuk studi lanjut?'),
(14, 'Nama Perguruan Tinggi?'),
(15, 'Program studi apa yang Anda pilih?'),
(16, 'Kapan tanggal masuk untuk program studi tersebut?'),
(17, 'Sebutkan sumberdana dalam pembiayaan saat kuliah di amik taruna?'),
(18, 'Jika jawaban diatas memilih lainnya tuliskan jawaban disini!'),
(19, 'Seberapa erat hubungan bidang studi dengan pekerjaan Anda?'),
(20, 'Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?'),
(21, 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai?'),
(22, 'Keahlian berdasarkan bidang ilmu'),
(23, 'Kemampuan bahasa inggris'),
(24, 'Penggunaan Teknologi Informasi'),
(25, 'Kemampuan berkomunikasi'),
(26, 'Kerja sama tim'),
(27, 'Pengembangan'),
(28, 'Pengembangan Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan?'),
(29, 'Menurut anda seberapa besar penekanan pada metode pembelajaran dibawah ini dilaksanakan di program studi anda?'),
(30, 'Demonstrasi'),
(31, 'Partisipasi dalam proyek riset'),
(32, 'Magang'),
(33, 'Praktikum'),
(34, 'Kerja Lapangan'),
(35, 'Diskusi'),
(36, 'Kapan anda mulai mencari pekerjaan? Mohon pekerjaan sambilan tidak dimasukkan? Berapa Bulan Sebelum Lulus (Jika Tidak Mencari Kerja jawab \" Saya tidak mencari kerja\"'),
(37, 'Bagaimana anda mencari pekerjaan tersebut? Jawaban bisa lebih dari satu'),
(38, 'Jika jawaban diatas memilih lainnya tuliskan jawaban disini!'),
(39, 'Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?'),
(40, 'Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda?'),
(41, 'Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?'),
(42, 'Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir? Pilihlah satu jawaban'),
(43, 'Jika jawaban diatas memilih lainnya tuliskan jawaban disini!'),
(44, 'Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? Jawaban bisa lebih dari satu'),
(45, 'Jika jawaban diatas memilih lainnya tuliskan jawaban disini!');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawaban_id_alumni_foreign` (`id_alumni`),
  ADD KEY `jawaban_id_pertanyaan_foreign` (`id_pertanyaan`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_id_alumni_foreign` FOREIGN KEY (`id_alumni`) REFERENCES `alumni` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jawaban_id_pertanyaan_foreign` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
