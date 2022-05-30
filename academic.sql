-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2022 pada 05.02
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` int(255) NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `alamat`, `nohp`, `email`, `waktu`) VALUES
(1, 1903040012, 'Jeri Riswanto', 'Cilacap', '054565465464', 'jeriririri@gmail.com', '2022-05-23 08:01:57'),
(2, 1903040001, 'Aldiyansyah', 'pemalang', '085254875461', 'aldiyansyah@gmail.com', '2022-05-23 09:08:49'),
(8, 1903040020, 'Resta Ananda', 'Cilacap', '08547124578', 'restaananda@gmail.com', '2022-05-23 09:49:48'),
(9, 1903040020, 'Resta Ananda', 'Cilacap', '08547124578', 'restaananda@gmail.com', '2022-05-23 10:11:56'),
(10, 1903040020, 'Resta Ananda', 'Cilacap', '08547124578', 'restaananda@gmail.com', '2022-05-23 10:12:00'),
(11, 1903040020, 'Resta Ananda', 'Cilacap', '08547124578', 'restaananda@gmail.com', '2022-05-23 10:13:00'),
(12, 1903040013, 'Mahendra', 'ciamis', '08254657845', 'Mahendra@gmai.com', '2022-05-23 10:16:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
