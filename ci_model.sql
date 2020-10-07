-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Okt 2020 pada 04.24
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_model`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ac`
--

CREATE TABLE `tb_ac` (
  `id` int(11) NOT NULL,
  `asset` varchar(100) NOT NULL,
  `wing` varchar(100) NOT NULL,
  `lantai` varchar(100) NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `kapasitas` varchar(100) NOT NULL,
  `refrigerant` varchar(100) NOT NULL,
  `negara_pembuat` varchar(50) NOT NULL,
  `status` varchar(250) NOT NULL,
  `tgl_pemasangan` varchar(50) NOT NULL,
  `tgl_maint` varchar(100) NOT NULL,
  `jenis_kerusakan` varchar(100) NOT NULL,
  `st_kompresor` varchar(100) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ac`
--

INSERT INTO `tb_ac` (`id`, `asset`, `wing`, `lantai`, `lokasi`, `merk`, `type`, `jenis`, `kapasitas`, `refrigerant`, `negara_pembuat`, `status`, `tgl_pemasangan`, `tgl_maint`, `jenis_kerusakan`, `st_kompresor`, `catatan`, `tanggal`) VALUES
(108, 'Telkom', 'Wing A', 'Lantai 1', 'Ruang Staff', 'General', 'Splite', 'Inverter', '2 PK PK', 'R410', 'Thailand', 'Rusak', '06/22/2016', '09/01/2019 - 01/24/2020', 'kompresor rusak', 'Belum Pernah Diganti', 'ganti kompresor', 1585042370),
(114, 'sasa', 'Wing C', 'Lantai 2', 'saa', 'Panasonic', 'Splite', 'Convensional', '2 PK', 'R22', 'China', 'Normal', '09/22/2020', '09/11/2020 - 10/22/2020', '', 'Sudah Diganti', '', 1599589529);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_apart`
--

CREATE TABLE `tb_apart` (
  `id` int(11) NOT NULL,
  `aset` varchar(100) NOT NULL,
  `wing` varchar(100) NOT NULL,
  `lantai` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `berat` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `no_seri` varchar(100) NOT NULL,
  `tanggal_expire` int(50) NOT NULL DEFAULT current_timestamp(),
  `catatan` varchar(300) NOT NULL,
  `tanggal_update` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_apart`
--

INSERT INTO `tb_apart` (`id`, `aset`, `wing`, `lantai`, `lokasi`, `merk`, `jenis`, `berat`, `status`, `no_seri`, `tanggal_expire`, `catatan`, `tanggal_update`) VALUES
(53, 'Telkom', 'Wing A', 'Lantai 1', 'area toilet', 'abc', 'powder', '3 kilo', 'Expire', '2312fdsfdf', 1583769600, '', 1599589079);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_chart_ac`
--

CREATE TABLE `tb_chart_ac` (
  `id` int(11) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `loker` varchar(100) NOT NULL,
  `nik` int(8) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `level` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pendidikan` varchar(300) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `skil` varchar(300) NOT NULL,
  `catatan` varchar(300) NOT NULL,
  `user_login` varchar(100) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `loker`, `nik`, `posisi`, `password`, `foto`, `level`, `status`, `pendidikan`, `alamat`, `hp`, `skil`, `catatan`, `user_login`, `tanggal`) VALUES
(2, 'Rinto Harahap', 'ryntooh@gmail.com', 'Tr7', 15920011, 'Petugas Me', '$2y$10$HO0n6qzeD3s8/fRKzV6aT.89eOYMVmVkavZwvVxGYx.I.0LVHrNEG', 'avatar51.png', 'Admin', 'Aktif', '', '', '', '', '', 'offline', 1575571688);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_ac`
--
ALTER TABLE `tb_ac`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_apart`
--
ALTER TABLE `tb_apart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_chart_ac`
--
ALTER TABLE `tb_chart_ac`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_ac`
--
ALTER TABLE `tb_ac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT untuk tabel `tb_apart`
--
ALTER TABLE `tb_apart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `tb_chart_ac`
--
ALTER TABLE `tb_chart_ac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
