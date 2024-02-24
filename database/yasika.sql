-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2024 at 04:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yasika`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int(5) NOT NULL,
  `judul_artikel` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `isi_artikel` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `last_upload` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `judul_artikel`, `isi_artikel`, `last_upload`) VALUES
(38, 'Kelulusan Siswa SMKS 1 Yapim Simpang Kawat Pada 2023', '<p><img alt=\"\" src=\"img/berita/24-01-29-6-34-46.jpg\" style=\"float:right; height:300px; width:300px\" /></p>\r\n\r\n<p>Kelulusan adalah akhir dari suatu kegiatan sekolah pada jenjang tertentu. Kelulusan didasarkan pada Peraturan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor 5 Tahun 2015 tentang Kriteria Kelulusan Peserta Didik, Penyelenggaraan Ujian Nasional, dan Penyelenggaraan Ujian Sekolah/Madrasah/Pendidikan Kesetaraan Pada SMP/MTs atau yang Sederajat dan SMA/MA/SMK atau yang sederajat, peserta didik dinyatakan lulus dari satuan pendidikan jika memenuhi persyaratan sebagai berikut :</p>\r\n\r\n<p>(a) Menyelesaikan seluruh program pembelajaran, adalah apabila telah menyelesaikan pembelajaran dari kelas VII sampai dengan kelas IX; dan mengikuti Ujian sekolah.</p>\r\n\r\n<p>(b) Memperoleh nilai sikap/perilaku minimal baik, adalah apabila memperoleh nilai akhlak dan kepribadian minimal B (baik) dalam penilaian akhlak yang dilakukan oleh guru mapel Pendidikan Agama dan Pendidikan Kewarganegaraan, dan kepribadian yang dilakukan oleh wali kelas dan guru BK</p>\r\n', '2024-01-29 12:35:23'),
(39, 'Perkembangan Sumber Daya Manusia di mulai dari SMKS 1 Yapim Simpang kawat', '<p><img alt=\"\" src=\"img/berita/24-01-29-6-42-27.jpg\" style=\"float:right; height:300px; width:200px\" />SDM atau<a href=\"http://manajemen.uma.ac.id/kurikulum-2020-semester-iv-2/\">&nbsp;Sumber Daya Manusia</a>&nbsp;adalah suatu potensi yang dimiliki oleh setiap orang untuk mewujudkan sesuatu sebagai makhluk sosial. Atau sumber daya manusia yaitu kemampuan daya pikir dan daya fisik yang dimiliki seorang individu dan berprilaku dipengaruhi oleh keturunan maupun&nbsp;lingkungannya serta bekerja karena termotivasi oleh keinginannya untuk memenuhi kepuasannya.</p>\r\n\r\n<p>Sumber daya manusia merupakan satu-satunya sumber daya yang memiliki akal, perasaan, keterampilan, pengetahuan dan kretifitas. Seperti peranan setiap orang terhadap lingkungannya yang tidak lepas dari sikap pengembangan dan&nbsp;potensi yang ada dalam diri untuk mengembangkan lingkungan, membina, sekaligus meningkatkan kesejahteraan masyarakat secara&nbsp;berkelanjutan. Fungsi sumber daya manusia umumnya untuk meningkatkan produktivitas dalam menunjang organisasi supaya lebih kompetitif dan tercapainya tujuan.</p>\r\n ', '2024-01-29 12:42:40'),
(40, 'Pemberian Penghargaan Kepada Kepala Sekolah ', '<p><img alt=\"\" src=\"img/berita/24-01-29-6-44-10.jpg\" style=\"float:left; height:325px; width:241px\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pemberian Penghargaan kepada Guru dan Kepala Sekolah yang dedikatif, inovatif, dan inspiratif di lingkungan Kementerian Pendidikan dan Kebudayaan merupakan salah satu bentuk penghargaan dari pemerintah atas prestasi, kinerja yang dihasilkan. Penghargaan ini diharapkan dapat lebih memotivasi dan meningkatkan profesionalisme guru dan kepala sekolah yang pada akhirnya akan meningkatkan mutu pendidikan nasional. Tema kegiatan pemberian penghargaan bagi Guru dan Kepala Sekolah Tahun 2020 adalah &ldquo;Dengan Semangat Kegotongroyongan dalam Pendidikan, Pandemi Covid-19 Bukan Penghalang Indonesia Maju&rdquo;. Ruang lingkup kegiatan ini meliputi tugas dan fungsi guru dan kepala sekolah dalam melaksanakan budaya literasi di satuan pendidikan, meningkatkan kepemimpinan pembelajaran abad ke-21, dan mengoptimalkan peran tripusat pendidikan (sekolah, keluarga, dan masyarakat) dalam penguatan pendidikan karakter, inovasi dan integritas tata kelola di satuan pendidikan. Pedoman ini diterbitkan untuk menjadi acuan bagi penyelenggara Pemberian Penghargaan kepada Guru dan Kepala Sekolah yang dedikatif, inovatif, dan inspiratif. Kami mengharapkan kerjasama dari semua pihak terkait agar pelaksanaan kegiatan ini dapat terlaksana dengan baik.</p>\r\n', '2024-01-29 12:44:35'),
(41, 'Kelulusan Siswa SMKS 1 Yapim Simpang Kawat Pada 2023', '<p><img alt=\"\" src=\"img/berita/24-01-29-9-27-35.jpg\" style=\"float:right; height:300px; width:300px\" />Kelulusan adalah akhir dari suatu kegiatan sekolah pada jenjang tertentu. Kelulusan didasarkan pada Peraturan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor 5 Tahun 2015 tentang Kriteria Kelulusan Peserta Didik, Penyelenggaraan Ujian Nasional, dan Penyelenggaraan Ujian Sekolah/Madrasah/Pendidikan Kesetaraan Pada SMP/MTs atau yang Sederajat dan SMA/MA/SMK atau yang sederajat, peserta didik dinyatakan lulus dari satuan pendidikan jika memenuhi persyaratan sebagai berikut :</p>\r\n\r\n<p>(a) Menyelesaikan seluruh program pembelajaran, adalah apabila telah menyelesaikan pembelajaran dari kelas VII sampai dengan kelas IX; dan mengikuti Ujian sekolah.</p>\r\n\r\n<p>(b) Memperoleh nilai sikap/perilaku minimal baik, adalah apabila memperoleh nilai akhlak dan kepribadian minimal B (baik) dalam penilaian akhlak yang dilakukan oleh guru mapel Pendidikan Agama dan Pendidikan Kewarganegaraan, dan kepribadian yang dilakukan oleh wali kelas dan guru BK ;</p>\r\n\r\n<p>2. Perkembangan Sumber Daya Manusia di mulai dari SMKS 1 Yapim Simpang kawat<br />\r\n2024-01-28 11:31:38</p>\r\n\r\n<p>Alam (SDA) adalah segala sesuatu yang bisa diambil atau dimanfaatkan dari alam karena memiliki nilai manfaat untuk memenuhi kebutuhan manusia. Sumber Daya Alam di Indonesia sendiri sangat beragam dan tersebar dari Sabang sampai Merauke.</p>\r\n\r\n<p>Sumber daya alam sendiri terdiri dari beberapa jenis dan dapat dimanfaatkan untuk banyak tujuan. Meski begitu, sumber daya alam tidak boleh hanya dimanfaatkan begitu saja, tetapi juga perlu adanya pelestarian dari manusia yang bertanggungjawab.</p>\r\n', '2024-01-29 15:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `siswa_id` int(5) NOT NULL,
  `nama` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_ijazah` char(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_kelamin` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jurusan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `asal_sekolah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tahun_lulus` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`siswa_id`, `nama`, `no_ijazah`, `jenis_kelamin`, `jurusan`, `asal_sekolah`, `tahun_lulus`, `alamat`) VALUES
(1, 'larosa', '1254367', 'perempuan', 'teknik komputer dan jaringan', 'smp n 1 medan', '2019', 'medan'),
(2, 'Larosa Dwi Lestari ', '1234537', 'perempuan', 'Teknik Komputer dan Jaringan ', 'fsdcaca', '2010', 'foaidniond'),
(3, 'Sumiati Sri Ati', '1234296', 'perempuan', 'Teknik Komputer dan Jaringan ', 'SMP N 5 Balige', '2013', 'Medan Selayang'),
(10, 'Lestari ', '1233468', 'perempuan', 'Teknik Kendaraan Ringan', 'smp 6 sei kambing', '2018', 'medan'),
(12, 'Arif Fahrezi', '1234375', 'laki-laki', 'Teknik Kendaraan Ringan', 'SMP N 2 Airbatu', '2019', 'Sei Mencirim'),
(13, 'Larosa Dwi ', '1234094', 'perempuan', 'Teknik Kendaraan Ringan', 'SMP N 6', '2010', 'Medan');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `pengunjung_id` int(5) NOT NULL,
  `nama` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pesan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `last_sent` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`pengunjung_id`, `nama`, `email`, `pesan`, `last_sent`) VALUES
(24, 'Larosa Dwi Lestari ', 'larosadwilestari@gmail.com', 'sangat bagus sekali, fasilitas lengkap dan guru guru yang sangat baik', '2024-01-21 11:31:35'),
(25, 'Rahma', 'rahmayani@gmail.com', 'sangat baik sekali, saya menyukai beragam jurusan yang ada pada sekolah yapim ini', '2024-01-21 11:32:27'),
(26, 'Dana', 'dana@gmail.com', 'Sekolah yang penuh dengan kegiatan yang membuat para siswa tidak bosan dengan bidang studi yang mereka pelajari.', '2024-01-21 11:34:31'),
(27, 'Rahma', 'myself@gmail.com', 'Sekolah Baik', '2024-01-29 15:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `guru_id` int(5) NOT NULL,
  `nuptk` varchar(16) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `bidang_studi` varchar(7) NOT NULL,
  `foto` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`guru_id`, `nuptk`, `nama`, `email`, `alamat`, `bidang_studi`, `foto`, `telepon`) VALUES
(15, '0000000000000001', 'George ', 'george@gmail.com', 'medan', 'IPS', '24-01-21-5-47-31.jpg', '083125045210'),
(16, '0000000000000002', 'Rani', 'rani@gmail.com', 'medan sunggal', 'MM', '24-01-21-6-05-53.jpg', '083125045210'),
(17, '0000000000000003', 'Juliana', 'juliana@gmail.com', 'medan selayang', 'Kimia', '24-01-21-6-09-14.jpg', '083125045210'),
(18, '0000000000000004', 'Budi', 'Budi@gmail.com', 'Inggris', 'Kimia', '24-01-29-7-05-59.jpg', '083123276598'),
(19, '0000000000000005', 'Rahma', 'rosa@gmail.com', 'medan', 'Matemat', '24-01-29-9-29-38.jpg', '083125045210');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `siswa_id` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`siswa_id`, `nisn`, `nama`, `kelas`, `jurusan`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `email`, `foto`, `telepon`) VALUES
(6, '0000000001', 'cha eun woo', 'XII', 'Teknik Kendaraan Ringan', 'Laki-laki', '2003-07-18', 'Korea', 'eunwoo@gmail.com', '24-01-21-5-58-34.jpg', '083125045210'),
(7, '0000000002', 'Doyoung', 'XI', 'Teknik Kendaraan Ringan', 'Laki-laki', '2001-12-12', 'korea selatan', 'doyoung', '24-01-21-6-01-31.jpg', '083125043572'),
(8, '0000000003', 'Lucas', 'X', 'Teknik Komputer dan Jaringan', 'Laki-laki', '2002-10-23', 'Korea Selatan', 'Lucas@gmail.com', '24-01-21-6-03-42.jpg', '083125042907'),
(9, '0000000004', 'Kim yonghoon', 'XII', 'Teknik Kendaraan Ringan', 'Laki-laki', '2000-07-04', 'Seoul, Korea Selatan', 'yonghoon@gmail.com', '24-01-29-6-59-36.jpg', '083125044326');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(254) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `token` char(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `foto` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `token`, `foto`, `status`, `last_login`) VALUES
(40, 'admin', 'admin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '506cbd4086011fc5ae284c5e89dd73fb', '24-01-28-3-00-49.jpg', '1', '2024-02-23 14:33:11'),
(45, 'larosadwilestari', 'larosadwilestari5@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '7682879a3dca124bea17704e32b29e93', '24-01-28-3-20-39.jpg', '1', '2024-02-24 00:17:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`guru_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `siswa_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `pengunjung_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `guru_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
