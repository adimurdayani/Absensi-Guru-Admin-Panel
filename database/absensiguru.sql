-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2021 pada 11.45
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensiguru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(128) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `jam_masuk` varchar(100) DEFAULT NULL,
  `jam_pulang` varchar(100) DEFAULT NULL,
  `absen_masuk` varchar(100) DEFAULT NULL,
  `absen_pulang` varchar(100) DEFAULT NULL,
  `terlambat` varchar(100) DEFAULT NULL,
  `pulang_cepat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_absen`
--

INSERT INTO `tb_absen` (`id`, `tanggal`, `id_guru`, `jam_masuk`, `jam_pulang`, `absen_masuk`, `absen_pulang`, `terlambat`, `pulang_cepat`) VALUES
(1, '20 Dec 2021', 10, '07:30', '15:30', '20:25', '05:57', '12:55:0', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akses_menu`
--

CREATE TABLE `tb_akses_menu` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_akses_menu`
--

INSERT INTO `tb_akses_menu` (`id`, `user_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 2),
(7, 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_grup`
--

CREATE TABLE `tb_grup` (
  `user_id` int(11) NOT NULL,
  `nama_grup` varchar(128) NOT NULL,
  `created_at` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_grup`
--

INSERT INTO `tb_grup` (`user_id`, `nama_grup`, `created_at`) VALUES
(1, 'Administrator', '31 Oct 2021'),
(2, 'User', '31 Oct 2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` int(11) NOT NULL,
  `nip` int(30) DEFAULT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kelamin` varchar(123) DEFAULT NULL,
  `t_lahir` varchar(100) DEFAULT NULL,
  `tgl_lahir` varchar(100) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `pendidikan` varchar(123) DEFAULT NULL,
  `jabatan` varchar(123) DEFAULT NULL,
  `status_kepegawaian` varchar(123) DEFAULT NULL,
  `mapel` varchar(128) DEFAULT NULL,
  `sertifikasi` varchar(123) DEFAULT NULL,
  `created_at` varchar(128) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `nip`, `nama`, `email`, `password`, `kelamin`, `t_lahir`, `tgl_lahir`, `agama`, `alamat`, `pendidikan`, `jabatan`, `status_kepegawaian`, `mapel`, `sertifikasi`, `created_at`, `image`) VALUES
(7, NULL, 'Adi Murdayani', 'adimurdayani@gmail.com', '538ccb720c36e5991c7cbe07092497e56100869c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 12412312, 'Agus', 'agus@gmail.com', '4bf4ecd26cf4c251f1aa80d8f9c0997d0004df4e', 'Perempuan', 'Asdfsd', '19/12/2021', 'Budha', 'Asdfasd', 'S1', 'Sdfasd', 'Asdfasd', 'Asdf', 'Sudah', '19 Dec 2021', 'fc5b10931a5d03534241151f8955ca69.jpg'),
(9, NULL, 'Ali', 'ali@gmail.com', '792faa46d69a0d0fc1afcdd037694d67a92590bd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19 Dec 2021', NULL),
(10, 2147483647, 'Dani', 'dani@gmail.com', '6d9b5e81aaeeb5cbf26bc4d73f7a4b22efe736c9', 'Perempuan', 'Ajksdhfk', '19/12/2021', 'Budha', 'Asdfsd', 'S1', 'Asdfsdf', 'Asdfasd', 'Fasdfasd', 'Belum', '19 Dec 2021', NULL),
(11, NULL, 'Irfan', 'irfan@gmail.com', 'a63e64bf1307aa1dffdbb75e2007e614e577af59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19 Dec 2021', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` int(11) NOT NULL,
  `jam_masuk` varchar(100) NOT NULL,
  `jam_pulang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id`, `jam_masuk`, `jam_pulang`) VALUES
(1, '07:30', '15:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `menu`) VALUES
(1, 'Admin'),
(2, 'Modul'),
(3, 'User'),
(4, 'Menu'),
(5, 'Setting');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sub_menu`
--

CREATE TABLE `tb_sub_menu` (
  `sub_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sub_menu`
--

INSERT INTO `tb_sub_menu` (`sub_id`, `menu_id`, `judul`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'backend/admin', 'feather icon-home', 1),
(2, 4, 'Menu Manajemen', 'backend/menu', 'feather icon-folder', 1),
(3, 4, 'Submenu Manajemen', 'backend/menu/submenu', 'feather icon-folder', 1),
(4, 5, 'User Grup', 'backend/setting/grup', 'feather icon-users', 1),
(5, 5, 'User Setting', 'backend/setting', 'feather icon-user', 1),
(6, 3, 'Profile', 'backend/user', 'feather icon-user', 1),
(7, 2, 'Data Guru', 'backend/modul', 'feather icon-list', 1),
(8, 2, 'Absen', 'backend/modul/absen', 'feather icon-book', 1),
(10, 2, 'Jadwal', 'backend/modul/jadwal', 'feather icon-calendar', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_active` int(1) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `user_id`, `user_active`, `nama`, `email`, `username`, `phone`, `alamat`, `password`, `created_at`) VALUES
(1, 1, 1, 'Administrator', 'admin@gmail.com', 'admin', '01826381728', 'Palopo', 'f865b53623b121fd34ee5426c792e5c33af8c227', '15 Dec 2021'),
(2, 2, 1, 'Admin', 'admin2@gmail.com', 'admin2', '0812736172', 'Palopo', '7b902e6ff1db9f560443f2048974fd7d386975b0', '15 Dec 2021');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_akses_menu`
--
ALTER TABLE `tb_akses_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_grup`
--
ALTER TABLE `tb_grup`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `tb_sub_menu`
--
ALTER TABLE `tb_sub_menu`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_akses_menu`
--
ALTER TABLE `tb_akses_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_grup`
--
ALTER TABLE `tb_grup`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_sub_menu`
--
ALTER TABLE `tb_sub_menu`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
