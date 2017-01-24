-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Jan 2017 pada 14.48
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dana_desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1479526611),
('m130524_201442_init', 1479526623);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dana_infrastruktur`
--

CREATE TABLE `tbl_dana_infrastruktur` (
  `id_dana_inf` varchar(16) NOT NULL,
  `nama_dana` text NOT NULL,
  `jumlah` bigint(19) NOT NULL,
  `rencana_penggunaan` text NOT NULL,
  `id_admin` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dana_infrastruktur`
--

INSERT INTO `tbl_dana_infrastruktur` (`id_dana_inf`, `nama_dana`, `jumlah`, `rencana_penggunaan`, `id_admin`) VALUES
('1654564621', 'yutrumzncoka', 23564521, 'vmopkjopqdoq', 32),
('20161220053939', 'caoba3', 231564, 'coba3', 1),
('20161220060127', 'coba5', 123000000, 'coba5', 1),
('2147483647', 'coba1', 1654654, 'coba1', 2),
('56484752', 'alokasi khusus', 1, 'gawe mbangun kretek', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_user`
--

CREATE TABLE `tbl_detail_user` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tempat_lahir` varchar(16) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `dusun` varchar(16) NOT NULL,
  `desa` varchar(32) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `status_perkawinan` varchar(16) NOT NULL,
  `pekerjaan` varchar(32) NOT NULL,
  `id_admin` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_detail_user`
--

INSERT INTO `tbl_detail_user` (`nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `rt`, `rw`, `dusun`, `desa`, `agama`, `status_perkawinan`, `pekerjaan`, `id_admin`) VALUES
('231465465423121', 'jo', 'ajshfklajso', '2016-12-22', 0, '03', '04', 'Taman Asri', 'Karanggebang', 'Islam', 'Belum Menikah', 'Swasta', 1),
('3502090710940002', 'Jaafar', 'Ponorogo', '1994-10-24', 0, '02', '01', 'Taman Asri', 'Karanggebang', 'Islam', 'Belum Menikah', 'Swasta', 1),
('545345342453465', 'nkjansjkfaf', 'asuu', '2016-12-15', 0, '54', '65', 'dfhe', 'rth', 'wrjhr', 'jwrs', 'wsrthj', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_isi_aduan`
--

CREATE TABLE `tbl_isi_aduan` (
  `id_isi_aduan` varchar(16) NOT NULL,
  `id_laporan_aduan` varchar(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `pengirim` tinyint(1) NOT NULL COMMENT '0 = admin, 1 = warga',
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_laporan_aduan`
--

CREATE TABLE `tbl_laporan_aduan` (
  `id_laporan_aduan` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `id_admin` tinyint(1) NOT NULL,
  `laporan` text NOT NULL,
  `waktu_tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_laporan_aduan`
--

INSERT INTO `tbl_laporan_aduan` (`id_laporan_aduan`, `nik`, `id_admin`, `laporan`, `waktu_tgl`) VALUES
('20161222150636', '350209071094000', 1, 'tes neh', '2016-12-22 15:06:36'),
('2147483647', '2147483647', 1, 'tes', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembangunan`
--

CREATE TABLE `tbl_pembangunan` (
  `id_pembangunan` varchar(16) NOT NULL,
  `id_dana_inf` varchar(16) NOT NULL,
  `nama_pembanguna` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `lat` varchar(24) NOT NULL,
  `lng` varchar(24) NOT NULL,
  `anggaran` int(9) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `progres` smallint(4) NOT NULL,
  `keterangan` text NOT NULL,
  `id_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembangunan`
--

INSERT INTO `tbl_pembangunan` (`id_pembangunan`, `id_dana_inf`, `nama_pembanguna`, `foto`, `lat`, `lng`, `anggaran`, `tgl_mulai`, `tgl_selesai`, `progres`, `keterangan`, `id_admin`) VALUES
('420170124104435', '56484752', 'Coba Lagi', 'images/poprogbfb9a032de0810d5a3da112ffd38be42.jpg', '-7.882150347024325', '111.41690254211426', 150000000, '2017-01-10', '2017-01-28', 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius arcu id nisl faucibus bibendum. Nullam orci neque, interdum vel arcu quis, volutpat tempor diam. Proin in tortor sed odio.', 1),
('420170124130109', '20161220053939', 'Cek', 'images/poprog043fd58697ccffbbb2db2eb40ade9097.jpg', '-7.881161990899194', '111.41181707382202', 100000000, '2017-01-01', '2017-03-17', 10, 'https://www.youtube.com/watch?v=1qf9aanrzQg', 1),
('420170124130533', '20161220053939', 'Tes Alias Uji Coba', 'images/poprog9fd6cf375f500415f59f8482770040dd.jpg', '-7.880279907633161', '111.40945672988892', 3221325, '2016-12-27', '2016-12-31', 30, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec lorem ac lorem ornare suscipit eu in augue. Vestibulum ligula orci, accumsan a velit at, maximus tincidunt orci. Sed nec porttitor arcu. Vestibulum vehicula justo ac quam tincidunt, sit amet posuere ante luctus. Pellentesque imperdiet vehicula metus non egestas. Nunc malesuada turpis quis orci gravida ultrices. In ac feugiat lectus. Sed gravida nunc ullamcorper ipsum facilisis lacinia. Pellentesque sem sapien, vulputate sed tristique et, iaculis quis leo. Praesent posuere lacus dui, ut mollis orci laoreet nec.', 1),
('420170124130621', '20161220060127', 'ewgagv', 'images/poprog6d50e2edb3d4b6d5cc111632b665a9d9.jpg', '-7.902830891387254', '111.46110534667969', 131231215, '2016-12-31', '2017-01-07', 90, 'meh sampe yoo', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `nik` int(16) NOT NULL,
  `pin` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_admin`
--

CREATE TABLE `tbl_user_admin` (
  `id_admin` int(16) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(16) NOT NULL,
  `level` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'mimin', 'o0KZp1tRwnv7eCLvaX1U026EgcnN65m2', '$2y$13$hcPJJkHoePfxJosAPzmzRuA5Z5FQbxWFUkd/jcrCtsMvolclg82Nq', NULL, 'mimin@admin.com', 10, 1479728921, 1479728921);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `tbl_dana_infrastruktur`
--
ALTER TABLE `tbl_dana_infrastruktur`
  ADD PRIMARY KEY (`id_dana_inf`);

--
-- Indexes for table `tbl_detail_user`
--
ALTER TABLE `tbl_detail_user`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tbl_laporan_aduan`
--
ALTER TABLE `tbl_laporan_aduan`
  ADD PRIMARY KEY (`id_laporan_aduan`);

--
-- Indexes for table `tbl_pembangunan`
--
ALTER TABLE `tbl_pembangunan`
  ADD PRIMARY KEY (`id_pembangunan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`pin`);

--
-- Indexes for table `tbl_user_admin`
--
ALTER TABLE `tbl_user_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
