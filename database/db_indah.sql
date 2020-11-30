-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 23 Nov 2020 pada 00.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_indah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kas`
--

CREATE TABLE `tbl_kas` (
  `id_kas` int(11) NOT NULL,
  `tgl_kas_hari` date NOT NULL,
  `kas_awal` varchar(50) NOT NULL,
  `pemasukan` varchar(30) NOT NULL,
  `laba` varchar(30) NOT NULL,
  `rugi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kas`
--

INSERT INTO `tbl_kas` (`id_kas`, `tgl_kas_hari`, `kas_awal`, `pemasukan`, `laba`, `rugi`) VALUES
(5, '2020-11-22', '6000000', '252000', '-5748000', '5748000'),
(6, '2020-11-23', '6000000', '291000', '-5709000', '5709000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kas_awal`
--

CREATE TABLE `tbl_kas_awal` (
  `id_kas_awal` int(11) NOT NULL,
  `kas_awal` int(50) NOT NULL,
  `tgl_kas_awal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kas_awal`
--

INSERT INTO `tbl_kas_awal` (`id_kas_awal`, `kas_awal`, `tgl_kas_awal`) VALUES
(7, 6000000, '2020-11-22'),
(8, 6000000, '2020-11-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_m` varchar(50) NOT NULL,
  `harga_m` varchar(50) NOT NULL,
  `kategori_m` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `nama_m`, `harga_m`, `kategori_m`) VALUES
(2, 'Bakso', '15000', 'Makanan'),
(4, 'Mie Tek', '12000', 'Makanan'),
(5, 'Mie Ayam', '15000', 'Makanan'),
(6, 'Bakso Klenger', '12000', 'Makanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_menu` int(5) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `harga_m` varchar(50) NOT NULL,
  `jumlah_menu` varchar(14) NOT NULL,
  `total_transaksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_menu`, `tgl_transaksi`, `harga_m`, `jumlah_menu`, `total_transaksi`) VALUES
(1, 2, '2020-11-22', '15000', '3', '45000'),
(3, 4, '2020-11-22', '12000', '7', '84000'),
(5, 5, '2020-11-22', '15000', '1', '15000'),
(6, 6, '2020-11-22', '12000', '1', '12000'),
(7, 4, '2020-11-22', '12000', '8', '96000'),
(8, 5, '2020-11-23', '15000', '5', '75000'),
(9, 5, '2020-11-23', '15000', '8', '120000'),
(10, 6, '2020-11-23', '12000', '3', '36000'),
(11, 6, '2020-11-23', '12000', '5', '60000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` int(1) NOT NULL COMMENT '0 = admin,\r\n1 = pimpinan,'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `email`, `password`, `level`) VALUES
(11, 'Ikhlasul Amal', 'amal@gmail.com', '12345', 0),
(16, 'Wawan', 'wawan@gmail.com', '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_kas`
--
ALTER TABLE `tbl_kas`
  ADD PRIMARY KEY (`id_kas`);

--
-- Indeks untuk tabel `tbl_kas_awal`
--
ALTER TABLE `tbl_kas_awal`
  ADD PRIMARY KEY (`id_kas_awal`);

--
-- Indeks untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_kas`
--
ALTER TABLE `tbl_kas`
  MODIFY `id_kas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_kas_awal`
--
ALTER TABLE `tbl_kas_awal`
  MODIFY `id_kas_awal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
