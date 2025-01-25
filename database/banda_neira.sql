-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2024 pada 09.52
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banda_neira`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` longtext NOT NULL,
  `input_by` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `komentar_id` int(5) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nomor_paspor` char(20) NOT NULL,
  `nomor_ktp` char(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL DEFAULT,
  `alamat` text NOT NULL,
  `tempat_tanggal_lahir` varchar(50) NOT NULL,
  `tourguide` text NOT NULL,
  `nomor_hp_wa` char(13) NOT NULL DEFAULT,
  `alamat_email` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`komentar_id`, `nama_lengkap`,`nomor_paspor`, `nomor_ktp`, `jenis_kelamin`,`alamat`, `tempat_tanggal_lahir`, `tourguide`, `nomor_hp_wa`, `alamat_email`, `pesan`) VALUES


-- --------------------------------------------------------

--
-- Struktur dari tabel `tour`
--

CREATE TABLE `tour` (
  `tour_id` int(3) NOT NULL,
  `no` char(8) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(9) DEFAULT NULL,
  `include` text NOT NULL,
  `jasa_sewa` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tour`
--

INSERT INTO `tour` (`tour_id`, `no`, `nama`, `jenis_kelamin`, `include`, `jasa_sewa`) VALUES
(3, '1', 'MARSELINO', 'LAKI-LAKI', '1. Penginapan 1 hari\r\n2. Sarapan\r\n3. Tiket Destinasi\r\n4. Dokumentasi', '5.000.000'),
(4, '2', 'MARTIN', 'Laki-laki', '1. Penginapan 2 hari\r\n2. Sarapan pagi dan makan siang\r\n3. Tiket Destinasi\r\n4. Dokumentasi', '7.000.000'),
(5, '3', 'ANJANY', 'PEREMPUAN', '1. Penginapan 3 hari\r\n2. Sarapan, makan siang dan makan malam\r\n3. Tiket destinasi\r\n4. Dokumentasi', '10.000.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` char(128) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `foto` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `token`, `status`, `foto`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'roberto.kakaban@yahoo.com', 'c0e024d9200b5705bc4804722636378a', '1', '2023-12-13-2-15-06.png', '2023-12-18 08:59:58'),
(2, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'admin@local', '00f453a6842f1883ca3be7b31a6626f0', '1', '-', '2023-12-13 09:30:00'),
(3, 'admin2', '315f166c5aca63a157f7d41007675cb44a948b33', 'dsafsdf@sdgsg', 'f', NULL, '', '2023-12-13 10:23:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`komentar_id`);

--
-- Indeks untuk tabel `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `komentar_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tour`
--
ALTER TABLE `tour`
  MODIFY `tour_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
