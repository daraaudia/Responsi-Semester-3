-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2021 pada 12.17
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `coloring`
--

CREATE TABLE `coloring` (
  `warna` varchar(25) NOT NULL,
  `hargaColoring` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `coloring`
--

INSERT INTO `coloring` (`warna`, `hargaColoring`) VALUES
('Ash Brown', 250000),
('Pink', 200000),
('Red', 150000),
('Blue', 150000),
('Grey', 300000),
('Brown', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cutting`
--

CREATE TABLE `cutting` (
  `modelCut` varchar(50) NOT NULL,
  `hargaCut` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cutting`
--

INSERT INTO `cutting` (`modelCut`, `hargaCut`) VALUES
('Under Cut', 35000),
('Fringe', 35000),
('Comma Hair', 35000),
('Line UP Hair Cut', 35000),
('Faux Hawk', 40000),
('Side Part', 35000),
('Buzz Cut', 35000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `namaService` varchar(50) NOT NULL,
  `hargaService` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`namaService`, `hargaService`) VALUES
('Creambath', 60000),
('Styling Pomade', 15000),
('Smoothing', 100000),
('Pijat Refleksi Kepala', 25000),
('Manicure', 60000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `noTransaksi` int(20) NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `namaCust` varchar(50) NOT NULL,
  `modelCUt` varchar(50) NOT NULL,
  `coloring` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `tanggalTransaksi` date NOT NULL,
  `totalHarga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`noTransaksi`, `cabang`, `namaCust`, `modelCUt`, `coloring`, `service`, `tanggalTransaksi`, `totalHarga`) VALUES
(7, 'Jl. Malioboro', 'Raihan', 'Under Cut', '.-', 'Creambath', '2021-06-28', 95000),
(8, 'Jl. Rasuna Indah', 'Sagita Rama', 'Faux Hawk', 'Red', 'Smoothing', '2021-06-28', 290000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`noTransaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `noTransaksi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
