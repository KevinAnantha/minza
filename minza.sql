-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2023 pada 11.04
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minza`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `costumer`
--

CREATE TABLE `costumer` (
  `id_costumer` int(11) NOT NULL,
  `nama_costumer` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_tlp` char(13) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `id_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `costumer`
--

INSERT INTO `costumer` (`id_costumer`, `nama_costumer`, `email`, `alamat`, `no_tlp`, `username`, `password`, `id_beli`) VALUES
(8, 'aiko', 'aikohendry.7@gmail.com', 'Yogyakarta', '23456789', 'aiko', 'aiko123', 0),
(9, 'isma', 'isma@gmail.com', 'Plosokuning 5', '23456789', 'isma', 'isma', 0),
(10, 'salsa', 'salsa@gmail.com', 'Plosokuning 5', '123456789', 'salsa', 'salsa', 0),
(11, 'khoiriyah', 'riya@gmail.com', 'condong catur', '1234567', 'riya', 'riya', 0),
(12, 'Yuditiya Astri Kanira', 'yuditiyaast@gmail.com', 'Godean, Sleman, Yogyakarta.', '123456789', 'yuditiyast', 'tiyak', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_beli`
--

CREATE TABLE `detail_beli` (
  `id_detail_beli` int(11) NOT NULL,
  `jml_beli` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `id_beli` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_beli`
--

INSERT INTO `detail_beli` (`id_detail_beli`, `jml_beli`, `sub_total`, `id_beli`, `id_produk`) VALUES
(10, 1, 159000, 10, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dibeli`
--

CREATE TABLE `dibeli` (
  `id_beli` int(11) NOT NULL,
  `tgl_beli` datetime NOT NULL,
  `total_beli` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dibeli`
--

INSERT INTO `dibeli` (`id_beli`, `tgl_beli`, `total_beli`, `id_pembeli`) VALUES
(10, '2023-12-06 16:36:00', 159000, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telepon` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `alamat`, `telepon`) VALUES
(7, 'riya', 'condong catur', 1234560),
(8, 'riya', 'condong catur', 1234560),
(9, 'Yuditiya Astri Kanira', 'Godean, Sleman, Yogyakarta.', 123456789),
(10, 'Yuditiya Astri Kanira', 'Godean, Sleman, Yogyakarta.', 123456789);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `deskripsi`, `qty`, `gambar`) VALUES
(14, 'Alina Top Black', 159000, 'Wudhu Friendly', 4, 'Alina Top Black-gambar.jpg'),
(15, 'Alina Top Cream', 159000, 'Wudhu Friendly', 3, 'Alina Top Cream-gambar.jpg'),
(16, 'Alina Top Baby Blue', 159000, 'Wudhu Friendly', 3, 'Alina Top Baby Blue-gambar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`id_costumer`),
  ADD KEY `id_beli` (`id_beli`),
  ADD KEY `id_beli_2` (`id_beli`);

--
-- Indeks untuk tabel `detail_beli`
--
ALTER TABLE `detail_beli`
  ADD PRIMARY KEY (`id_detail_beli`),
  ADD KEY `id_beli` (`id_beli`),
  ADD KEY `fk_tanaman_id` (`id_produk`);

--
-- Indeks untuk tabel `dibeli`
--
ALTER TABLE `dibeli`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `costumer`
--
ALTER TABLE `costumer`
  MODIFY `id_costumer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `detail_beli`
--
ALTER TABLE `detail_beli`
  MODIFY `id_detail_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `dibeli`
--
ALTER TABLE `dibeli`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_beli`
--
ALTER TABLE `detail_beli`
  ADD CONSTRAINT `detail_beli_ibfk_1` FOREIGN KEY (`id_beli`) REFERENCES `dibeli` (`id_beli`),
  ADD CONSTRAINT `fk_tanaman_id` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `dibeli`
--
ALTER TABLE `dibeli`
  ADD CONSTRAINT `fk_pembeli_id` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
