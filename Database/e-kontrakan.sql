-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Mei 2017 pada 21.43
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-kontrakan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `tgl_booking` date NOT NULL,
  `id_rumah` int(11) NOT NULL,
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `owner`
--

CREATE TABLE `owner` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `owner`
--

INSERT INTO `owner` (`username`, `password`, `nama_lengkap`, `email`, `alamat`, `no_hp`) VALUES
('Crashed16', 'b1d1a04595683400accb8e251bfcfd11', 'Stiawan Danu', 'stiawandanu16@gmail.com', 'Permata Buah Batu Blok C67', '085956526225'),
('CruthOver', 'ced82c7204ff64deac0914de25764faa', 'Bambang Stiawan', 'b3ng.b3ng16@gmail.com', 'Ciganitri', '085956526225');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perumahan`
--

CREATE TABLE `perumahan` (
  `id_perum` int(11) NOT NULL,
  `nama_perum` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perumahan`
--

INSERT INTO `perumahan` (`id_perum`, `nama_perum`) VALUES
(1, 'Permata Buah Batu'),
(2, 'Permata Buah Batu 2'),
(3, 'Pesona Bali'),
(4, 'Palem 1'),
(5, 'Palem 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_kontrakan`
--

CREATE TABLE `rumah_kontrakan` (
  `id_rumah` int(11) NOT NULL,
  `id_perum` int(11) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `harga` int(10) NOT NULL,
  `kmr_tidur` int(10) NOT NULL,
  `kmr_mandi` int(10) NOT NULL,
  `air` varchar(35) NOT NULL,
  `fasilitas` varchar(40) NOT NULL,
  `gambar` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rumah_kontrakan`
--

INSERT INTO `rumah_kontrakan` (`id_rumah`, `id_perum`, `alamat`, `harga`, `kmr_tidur`, `kmr_mandi`, `air`, `fasilitas`, `gambar`, `username`) VALUES
(1, 1, 'Blok I No.20', 22000000, 2, 1, 'Jetpam', '', 'rumah1', 'CruthOver'),
(2, 1, 'Blok C No.46', 24000000, 2, 1, 'Jetpam', '', 'rumah2', 'CruthOver'),
(3, 1, 'Blok D No.26', 30000000, 3, 2, 'Jetpam', '', 'rumah3', 'CruthOver'),
(4, 1, 'Blok F No.36', 40000000, 2, 1, 'Jetpam', 'TV32in, 4 Lemari, 4 Kasur, Dispenser, AC', 'rumah4', 'CruthOver'),
(5, 1, 'Blok I No 48', 32000000, 4, 2, 'Jetpam', '', 'rumah5', 'CruthOver'),
(6, 2, 'Blok A No.5', 24000000, 2, 1, 'Jetpam', '', 'rumah6', 'Crashed16'),
(7, 2, 'Blok A No.2', 33000000, 3, 1, 'Jetpam', 'Dispenser, TV32in', 'rumah7', 'Crashed16'),
(8, 2, 'Blok C No.67', 22000000, 2, 1, 'Jetpam', '', 'rumah8', 'Crashed16'),
(9, 2, 'Blok C No.69', 18000000, 2, 1, 'Jetpam', '', 'rumah9', 'Crashed16'),
(10, 2, 'Blok D No.8', 27000000, 3, 1, 'Jetpam', '', 'rumah10', 'Crashed16'),
(11, 3, 'Blok B No.10', 40000000, 6, 6, 'Jetpam', '', 'rumah11', 'CruthOver'),
(12, 3, 'Blok F No. 45', 26000000, 2, 1, 'Jetpam', '', 'rumah12', 'CruthOver'),
(13, 3, 'Blok F No.32', 30000000, 2, 1, 'Jetpam', '', 'rumah13', 'CruthOver'),
(14, 3, 'Blok E No.19', 29000000, 3, 1, 'Jetpam', '', 'rumah14', 'CruthOver'),
(15, 3, 'Blok J No.15', 33000000, 3, 1, 'Jetpam', '', 'rumah15', 'CruthOver'),
(16, 4, 'Blok A No.30', 24000000, 2, 1, 'Jetpam', '', 'rumah16', 'Crashed16'),
(17, 4, 'Blok A No.22', 33000000, 2, 1, 'Jetpam', '2 Lemari, 2 Kasur, Dispenser, TV32in', 'rumah1', 'Crashed16'),
(18, 4, 'Blok B No.21', 22000000, 2, 1, 'Jetpam', '', 'rumah2', 'Crashed16'),
(19, 4, 'Blok C No.29', 40000000, 3, 2, 'Jetpam', 'Kompor Gas, Dispenser, AC', 'rumah3', 'Crashed16'),
(20, 4, 'Blok E No.31', 24500000, 2, 1, 'Jetpam', '', 'rumah4', 'Crashed16'),
(21, 5, 'Blok F No.16', 30000000, 2, 1, 'Jetpam', 'Dispenser, Sofa, Kompor Gas', 'rumah5', 'CruthOver'),
(22, 5, 'Blok D No.8', 35000000, 4, 2, 'Jetpam', '', 'rumah6', 'CruthOver'),
(23, 5, 'Blok D No.32', 29000000, 3, 1, 'Jetpam', 'rumah7', '', 'CruthOver'),
(24, 5, 'Blok H No.46', 37000000, 4, 2, 'Jetpam', '', 'rumah8', 'CruthOver'),
(25, 5, 'Blok E No.11', 23500000, 2, 1, 'Jetpam', '', 'rumah9', 'CruthOver');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama_lengkap`, `email`, `alamat`, `no_hp`) VALUES
('Crash_Override', '20ae488145df742c19c31e98890a4722', 'Alexander Stiawan', 'xdamn.xd@gmail.com', 'Sepatan Tangerang', '08788968678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_rumah` (`id_rumah`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `perumahan`
--
ALTER TABLE `perumahan`
  ADD PRIMARY KEY (`id_perum`);

--
-- Indexes for table `rumah_kontrakan`
--
ALTER TABLE `rumah_kontrakan`
  ADD PRIMARY KEY (`id_rumah`),
  ADD KEY `id_perum` (`id_perum`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perumahan`
--
ALTER TABLE `perumahan`
  MODIFY `id_perum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rumah_kontrakan`
--
ALTER TABLE `rumah_kontrakan`
  MODIFY `id_rumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_rumah`) REFERENCES `rumah_kontrakan` (`id_rumah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rumah_kontrakan`
--
ALTER TABLE `rumah_kontrakan`
  ADD CONSTRAINT `rumah_kontrakan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `owner` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rumah_kontrakan_ibfk_2` FOREIGN KEY (`id_perum`) REFERENCES `perumahan` (`id_perum`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
