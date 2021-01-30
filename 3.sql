-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu Pembuatan : 30 Januari 2021
-- Versi Server : 10.4.13-MariaDB
-- Versi PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: 'db_pendidikan'
--

-- --------------------------------------------------------

--
-- Struktur dari tabel 'user'
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel 'user'
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1001, 'Bagus Dwi Tarsono', 'bagus@gmail.com', 'bagus123'),
(1002, 'Satria Putra Simba', 'satria@yahoo.com', 'satria123');

--
-- Struktur dari tabel 'school_tb'
--

CREATE TABLE `school_tb` (
  `id` int(11) NOT NULL,
  `NPSN` int(8) NOT NULL,
  `name_school` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `logo_school` text NOT NULL,
  `school_level` varchar(10) NOT NULL,
  `status_school` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel 'school_tb'
--

INSERT INTO `school_tb` ('id', 'NPSN', 'name_school', 'address', 'logo_school', 'school_level', 'status_school', 'user_id') VALUES
(1001, 20218369, 'SMKN 1 CIKARANG BARAT', 'JL. TEUKU UMAR', 'smk1cikbar.jpg', 'Menengah', 'Negeri', 1),
(1002, 20218377, 'SMKN 2 CIKARANG BARAT', 'JL. FATAHILAH', 'smk2cikbar.jpg', 'Menengah', 'Negeri', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel 'user'
--

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel `user`
--

ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Indeks untuk tabel 'school_tb'
--

ALTER TABLE `school_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel 'school_tb'
--

ALTER TABLE `school_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;