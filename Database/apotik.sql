-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 30 Agu 2018 pada 09.17
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apotik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_obat`
--

CREATE TABLE IF NOT EXISTS `table_obat` (
  `id_obat` varchar(10) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `harga` double NOT NULL,
  `stok` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_obat`
--

INSERT INTO `table_obat` (`id_obat`, `nama_obat`, `harga`, `stok`) VALUES
('00003', 'werdtgf', 345, 3456),
('12', 'Ubah', 2345, 2345),
('2', 'Apaya', 200, 100),
('O00004', 'tfghj', 4567, 567),
('O0001', 'Paracetamol', 9000, 20),
('O0002', 'Antimoxilyn', 2000, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_user`
--

CREATE TABLE IF NOT EXISTS `table_user` (
`id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_user`
--

INSERT INTO `table_user` (`id`, `nama`, `username`, `password`, `email`, `jabatan`) VALUES
(1, 'apoteker', 'apoteker', '326dd0e9d42a3da01b50028c51cf21fc', 'apoteker@gmail.com', 'Apoteker'),
(2, 'asisten', 'asisten', 'bf3fd5c967c0fb904bf15c054e4288dd', 'asisten@gmail.com', 'Asisten Apoteker'),
(4, 'Super Admin', 'Superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 'superadmin@gmail.com', 'Super Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_vendor`
--

CREATE TABLE IF NOT EXISTS `table_vendor` (
  `id_vendor` varchar(10) NOT NULL,
  `nama_vendor` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_vendor`
--

INSERT INTO `table_vendor` (`id_vendor`, `nama_vendor`, `no_telp`, `alamat`) VALUES
('V0002', 'PT. Anayasa Martapura Group', '0821777777', 'Jl. anayasa 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id_transaksi` int(11) NOT NULL,
  `id_obat` varchar(10) NOT NULL,
  `jumlah_transaksi` double NOT NULL,
  `id_tipe_transaksi` int(2) NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_obat`
--
ALTER TABLE `table_obat`
 ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_vendor`
--
ALTER TABLE `table_vendor`
 ADD PRIMARY KEY (`id_vendor`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
