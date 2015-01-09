-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 09. Agustus 2013 jam 14:12
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jif`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_peserta`
--

CREATE TABLE IF NOT EXISTS `data_peserta` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime DEFAULT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `nama_peserta` varchar(100) DEFAULT NULL,
  `no_telp` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `alamat` varchar(800) DEFAULT NULL,
  `jenis_kel` varchar(100) DEFAULT NULL,
  `gambar` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`,`no_pendaftaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=143 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_peserta`
--

CREATE TABLE IF NOT EXISTS `detail_peserta` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(20) DEFAULT NULL,
  `no_pendaftaran` varchar(100) NOT NULL DEFAULT '',
  `nama_peserta` varchar(100) DEFAULT NULL,
  `rekening` varchar(200) DEFAULT NULL,
  `bank` varchar(100) DEFAULT NULL,
  `w_transfer` varchar(30) DEFAULT NULL,
  `jumlah` varchar(100) DEFAULT NULL,
  `keterangan` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`no_pendaftaran`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `username`, `password`) VALUES
(11, 'admin', 'garuda123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
