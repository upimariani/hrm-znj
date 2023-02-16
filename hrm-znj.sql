-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Feb 2023 pada 14.26
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm-znj`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_penggajian` int(11) NOT NULL,
  `tgl_absensi` varchar(20) NOT NULL,
  `stat_absensi` int(11) NOT NULL,
  `time_absensi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_karyawan`, `id_penggajian`, `tgl_absensi`, `stat_absensi`, `time_absensi`) VALUES
(1, 2, 0, '2023-02-16', 1, '16-02-2023 11:28:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tgl_cuti` varchar(15) NOT NULL,
  `alasan_cuti` text NOT NULL,
  `jml_hari` int(11) NOT NULL,
  `stat_cuti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `id_kar_daftar` int(11) NOT NULL,
  `divisi` varchar(125) NOT NULL,
  `mulai_bekerja` varchar(15) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `id_kar_daftar`, `divisi`, `mulai_bekerja`, `jabatan`) VALUES
(2, 2, 'Chef', '2023-02-19', 'Ketua divisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan_daftar`
--

CREATE TABLE `karyawan_daftar` (
  `id_kar_daftar` int(11) NOT NULL,
  `nama_lengkap` varchar(125) NOT NULL,
  `jk_kar` varchar(20) NOT NULL,
  `tempat_tl` varchar(30) NOT NULL,
  `kewarganegaraan` varchar(10) NOT NULL,
  `pend_terakhir` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `stat_kawin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `stat_daftar` int(11) NOT NULL,
  `username_kar` varchar(125) NOT NULL,
  `password_kar` varchar(125) NOT NULL,
  `surat_lamaran` text NOT NULL,
  `foto` text NOT NULL DEFAULT '0',
  `tgl_daftar` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan_daftar`
--

INSERT INTO `karyawan_daftar` (`id_kar_daftar`, `nama_lengkap`, `jk_kar`, `tempat_tl`, `kewarganegaraan`, `pend_terakhir`, `agama`, `stat_kawin`, `alamat`, `no_hp`, `stat_daftar`, `username_kar`, `password_kar`, `surat_lamaran`, `foto`, `tgl_daftar`) VALUES
(2, 'Salsabilla', 'Perempuan', 'Kuningan, 03 April 1998', 'WNI', 'S1', 'Islam', 'Belum Kawin', 'Purwawinangun, Kuningan', '0875698745633', 1, 'salsa', 'salsa', '1373-3096-1-PB.pdf', 'photo4.jpg', '2023-02-16 09:33:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggajian`
--

CREATE TABLE `penggajian` (
  `id_penggajian` int(11) NOT NULL,
  `tgl_gajian` varchar(20) NOT NULL,
  `tot_gajian` varchar(15) NOT NULL,
  `status_gajian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `alamat_user` text NOT NULL,
  `no_hp_user` varchar(15) NOT NULL,
  `jk_user` varchar(20) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat_user`, `no_hp_user`, `jk_user`, `username`, `password`, `level_user`) VALUES
(1, 'Syarif', 'kuningan', '089876765676', 'Laki - Laki', 'admin', 'admin', 1),
(2, 'owner', 'kuningan', '089765112312', 'Laki - Laki', 'owner', 'owner', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `karyawan_daftar`
--
ALTER TABLE `karyawan_daftar`
  ADD PRIMARY KEY (`id_kar_daftar`);

--
-- Indeks untuk tabel `penggajian`
--
ALTER TABLE `penggajian`
  ADD PRIMARY KEY (`id_penggajian`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `karyawan_daftar`
--
ALTER TABLE `karyawan_daftar`
  MODIFY `id_kar_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penggajian`
--
ALTER TABLE `penggajian`
  MODIFY `id_penggajian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
