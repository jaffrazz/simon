-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Jan 2017 pada 02.43
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

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
  `id_dana_inf` int(16) NOT NULL,
  `nama_dana` text NOT NULL,
  `jumlah` bigint(19) NOT NULL,
  `rencana_penggunaan` text NOT NULL,
  `id_admin` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dana_infrastruktur`
--

INSERT INTO `tbl_dana_infrastruktur` (`id_dana_inf`, `nama_dana`, `jumlah`, `rencana_penggunaan`, `id_admin`) VALUES
(2147483647, 'tes dana', 1000000, 'buat tes', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_user`
--

CREATE TABLE `tbl_detail_user` (
  `nik` int(16) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tempat_lahir` varchar(16) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `dusun` varchar(16) NOT NULL,
  `desa` int(32) NOT NULL,
  `agama` int(16) NOT NULL,
  `status_perkawinan` int(16) NOT NULL,
  `pekerjaan` int(32) NOT NULL,
  `id_admin` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id_laporan_aduan` int(16) NOT NULL,
  `nik` int(16) NOT NULL,
  `id_admin` int(16) NOT NULL,
  `laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembangunan`
--

CREATE TABLE `tbl_pembangunan` (
  `id_pembangunan` int(16) NOT NULL,
  `id_dana_inf` int(16) NOT NULL,
  `nama_pembanguna` text NOT NULL,
  `foto` blob NOT NULL,
  `lat` varchar(16) NOT NULL,
  `lng` varchar(16) NOT NULL,
  `anggaran` int(9) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `progres` smallint(4) NOT NULL,
  `keterangan` text NOT NULL,
  `id_admin` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembangunan`
--

INSERT INTO `tbl_pembangunan` (`id_pembangunan`, `id_dana_inf`, `nama_pembanguna`, `foto`, `lat`, `lng`, `anggaran`, `tgl_mulai`, `tgl_selesai`, `progres`, `keterangan`, `id_admin`) VALUES
(2147483647, 2147483647, 'bikin tes input', 0x6b6164736e663b736c, '-7.9429562659992', '111.499557495117', 900000, '2016-12-20', '2016-12-31', 30, 'sek lekas', 1);

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
