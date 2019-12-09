-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2019 pada 05.41
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apl_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(150) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggalmasuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_buku`, `judul_buku`, `penerbit`, `tahun_terbit`, `kategori`, `kuantitas`, `harga`, `tanggalmasuk`) VALUES
(1, 'Ilmu Fisika & Biologi', 'PT Gramedia', 2019, 'Pendidikan', 10, 80000, '2019-12-02 14:41:06'),
(2, 'Motivated Yourself', 'PT Sinar Jaya', 2018, 'Inspirasi', 10, 65000, '2019-12-02 14:53:37'),
(3, 'Hujan Bulan Juni', 'PT Buku', 2017, 'Novel', 10, 75000, '2019-12-02 14:58:28'),
(4, 'Antara Kita', 'PT Novelia', 2019, 'Novel', 10, 70000, '2019-12-02 15:40:14'),
(5, 'CodeIgniter Master Edition', 'PT Code Farm', 2019, 'Pendidikan', 10, 100000, '2019-12-02 15:42:12'),
(6, 'Indonesia Berjuang', 'PT Gramedia', 2018, 'Sejarah', 10, 80000, '2019-12-02 15:43:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_terjual`
--

CREATE TABLE `barang_terjual` (
  `id_transaksi` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(150) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggalterjual` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_terjual`
--

INSERT INTO `barang_terjual` (`id_transaksi`, `id_buku`, `judul_buku`, `penerbit`, `tahun_terbit`, `kategori`, `kuantitas`, `harga`, `tanggalterjual`) VALUES
(1, 1, 'Ilmu Fisika & Biologi', 'PT Gramedia', 2019, 'Pendidikan', 1, 80000, '2019-12-02 20:04:13'),
(2, 2, 'Motivated Yourself', 'PT Sinar Jaya', 2018, 'Inspirasi', 1, 65000, '2019-12-02 20:07:56'),
(3, 3, 'Hujan Bulan Juni', 'PT Buku', 2017, 'Novel', 2, 75000, '2019-12-02 20:12:03'),
(4, 2, 'Motivated Yourself', 'PT Sinar Jaya', 2018, 'Inspirasi', 2, 65000, '2019-12-02 20:13:19'),
(5, 3, 'Hujan Bulan Juni', 'PT Buku', 2017, 'Novel', 3, 225000, '2019-12-03 01:44:26'),
(6, 6, 'Indonesia Berjuang', 'PT Gramedia', 2018, 'Sejarah', 3, 240000, '2019-12-03 01:44:53'),
(7, 1, 'Ilmu Fisika & Biologi', 'PT Gramedia', 2019, 'Pendidikan', 3, 240000, '2019-12-03 02:06:25'),
(8, 5, 'CodeIgniter Master Edition', 'PT Code Farm', 2019, 'Pendidikan', 2, 200000, '2019-12-03 02:36:41'),
(9, 5, 'CodeIgniter Master Edition', 'PT Code Farm', 2019, 'Pendidikan', 1, 100000, '2019-12-03 02:41:24'),
(10, 5, 'CodeIgniter Master Edition', 'PT Code Farm', 2019, 'Pendidikan', 1, 100000, '2019-12-03 02:43:01'),
(11, 5, 'CodeIgniter Master Edition', 'PT Code Farm', 2019, 'Pendidikan', 3, 300000, '2019-12-03 03:13:34'),
(12, 5, 'CodeIgniter Master Edition', 'PT Code Farm', 2019, 'Pendidikan', 3, 300000, '2019-12-03 03:14:11'),
(13, 5, 'CodeIgniter Master Edition', 'PT Code Farm', 2019, 'Pendidikan', 1, 100000, '2019-12-03 03:14:17'),
(14, 5, 'CodeIgniter Master Edition', 'PT Code Farm', 2019, 'Pendidikan', 1, 100000, '2019-12-03 03:15:41'),
(15, 4, 'Antara Kita', 'PT Novelia', 2019, 'Novel', 2, 140000, '2019-12-03 03:18:03'),
(16, 3, 'Hujan Bulan Juni', 'PT Buku', 2017, 'Novel', 2, 150000, '2019-12-03 03:19:22'),
(17, 2, 'Motivated Yourself', 'PT Sinar Jaya', 2018, 'Inspirasi', 1, 65000, '2019-12-03 03:21:43'),
(18, 2, 'Motivated Yourself', 'PT Sinar Jaya', 2018, 'Inspirasi', 1, 65000, '2019-12-03 03:23:09'),
(19, 2, 'Motivated Yourself', 'PT Sinar Jaya', 2018, 'Inspirasi', 1, 65000, '2019-12-03 03:24:29'),
(20, 2, 'Motivated Yourself', 'PT Sinar Jaya', 2018, 'Inspirasi', 1, 65000, '2019-12-03 03:26:22'),
(21, 2, 'Motivated Yourself', 'PT Sinar Jaya', 2018, 'Inspirasi', 1, 65000, '2019-12-03 03:28:30'),
(22, 2, 'Motivated Yourself', 'PT Sinar Jaya', 2018, 'Inspirasi', 1, 65000, '2019-12-03 03:29:05'),
(23, 2, 'Motivated Yourself', 'PT Sinar Jaya', 2018, 'Inspirasi', 1, 65000, '2019-12-03 03:33:20'),
(24, 2, 'Motivated Yourself', 'PT Sinar Jaya', 2018, 'Inspirasi', 1, 65000, '2019-12-03 03:36:09'),
(25, 2, 'Motivated Yourself', 'PT Sinar Jaya', 2018, 'Inspirasi', 1, 65000, '2019-12-03 03:38:23'),
(26, 2, 'Motivated Yourself', 'PT Sinar Jaya', 2018, 'Inspirasi', 1, 65000, '2019-12-03 03:38:58'),
(27, 2, 'Motivated Yourself', 'PT Sinar Jaya', 2018, 'Inspirasi', 1, 65000, '2019-12-03 03:39:50'),
(28, 2, 'Motivated Yourself', 'PT Sinar Jaya', 2018, 'Inspirasi', 1, 65000, '2019-12-03 03:42:50'),
(29, 2, 'Motivated Yourself', 'PT Sinar Jaya', 2018, 'Inspirasi', 1, 65000, '2019-12-03 03:43:26'),
(30, 3, 'Hujan Bulan Juni', 'PT Buku', 2017, 'Novel', 1, 75000, '2019-12-03 03:44:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(150) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggalmasuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`id_buku`, `judul_buku`, `penerbit`, `tahun_terbit`, `kategori`, `kuantitas`, `harga`, `tanggalmasuk`) VALUES
(1, 'Ilmu Fisika & Biologi', 'PT Gramedia', 2019, 'Pendidikan', 10, 80000, '2019-12-02 14:41:06'),
(2, 'Motivated Yourself', 'PT Sinar Jaya', 2018, 'Inspirasi', 10, 65000, '2019-12-02 14:53:37'),
(3, 'Hujan Bulan Juni', 'PT Buku', 2017, 'Novel', 10, 75000, '2019-12-02 14:58:28'),
(4, 'Antara Kita', 'PT Novelia', 2019, 'Novel', 10, 70000, '2019-12-02 15:40:14'),
(5, 'CodeIgniter Master Edition', 'PT Code Farm', 2019, 'Pendidikan', 10, 100000, '2019-12-02 15:42:12'),
(6, 'Indonesia Berjuang', 'PT Gramedia', 2018, 'Sejarah', 10, 80000, '2019-12-02 15:43:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(150) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `waktupenambahan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `barang_terjual`
--
ALTER TABLE `barang_terjual`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `barang_terjual`
--
ALTER TABLE `barang_terjual`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
