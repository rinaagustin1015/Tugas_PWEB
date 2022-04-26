-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2022 pada 06.18
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_film`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `judul_film` varchar(25) NOT NULL,
  `tahun_rilis` varchar(4) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `rating` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id_film`, `judul_film`, `tahun_rilis`, `gambar`, `rating`) VALUES
(1, 'Habibie dan Ainun 3', '2019', 'img/habibiedanainun.jpg', 'BO-R/R'),
(2, 'PHOTOCOPIER', '2021', 'img/Photocopier.jpg', 'BO-R/R'),
(3, 'KuKira Kau Rumah', '2021', 'img/KKR.jpg', 'BO-R/R'),
(4, 'Yo Wis Ben 3', '2021', 'img/Yo wis ben 3.jpg', 'BO-R/R'),
(5, 'Milea', '2020', 'img/milea.jpg', 'BO-R/R'),
(6, 'Dilan 1990', '2018', 'img/dilan.jpg', 'BO-R/R'),
(7, 'Dilan 1991', '2019', 'img/Dilan 1991.jpg', 'BO-R/R'),
(8, 'GUNDALA', '2019', 'img/Gundala.jpg', 'BO-R/R'),
(9, 'IMPERFECT', '2019', 'img/Imperfect.jpg', 'BO-R/R'),
(10, 'SWEET 20', '2017', 'img/Sweet 20.jpg', 'BO-R/R'),
(11, 'Ada Apa Dengan Cinta 2', '2016', 'img/Ada_Apa_Denga_Cinta_2.jpg', 'BO-R/R'),
(12, '5cm', '2012', 'img/5cm.jpg', 'BO-R/R');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
