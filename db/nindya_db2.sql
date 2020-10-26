-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2020 pada 01.33
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nindya_db2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_produksi`
--

CREATE TABLE `laporan_produksi` (
  `no` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `wilayah` int(3) NOT NULL,
  `produksi` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_create` int(3) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan_produksi`
--

INSERT INTO `laporan_produksi` (`no`, `tanggal`, `wilayah`, `produksi`, `create_date`, `user_create`, `status`) VALUES
(1, '2020-10-20', 1, 100000, '2020-10-25 22:18:13', 1, 0),
(2, '2020-10-21', 2, 150000, '2020-10-25 22:18:13', 1, 0),
(3, '2020-10-22', 3, 200000, '2020-10-25 22:18:13', 1, 0),
(4, '2020-10-21', 4, 300000, '2020-10-25 22:18:13', 1, 0),
(5, '2020-10-22', 5, 300000, '2020-10-25 22:18:13', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_user`
--

CREATE TABLE `m_user` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_user`
--

INSERT INTO `m_user` (`id`, `username`, `email`, `password`, `create_date`, `update_date`) VALUES
(1, 'rinizaharani', 'rini.zaharani@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2020-10-25 19:33:07', '2020-10-25 19:33:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan_produksi`
--
ALTER TABLE `laporan_produksi`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan_produksi`
--
ALTER TABLE `laporan_produksi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
