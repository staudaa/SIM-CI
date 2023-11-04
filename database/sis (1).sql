-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2023 at 01:56 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id_data` int NOT NULL,
  `id_kelas` int NOT NULL,
  `id_keahlian` int NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nomer_induk` int NOT NULL,
  `nik` int NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `alamat` text NOT NULL,
  `rt_rw` varchar(10) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kode_pos` int NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tempat_lahir_ayah` varchar(50) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `pendidikan_terakhir_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `penghasilan_bulanan_ayah` varchar(50) NOT NULL,
  `no_hp_ayah` char(13) NOT NULL,
  `agama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tempat_lahir_ibu` varchar(50) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `pendidikan_terakhir_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `penghasilan_bulanan_ibu` varchar(50) NOT NULL,
  `no_hp_ibu` char(13) NOT NULL,
  `agama_ibu` varchar(50) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `tempat_lahir_wali` varchar(50) NOT NULL,
  `tanggal_lahir_wali` date NOT NULL,
  `pendidikan_terakhir_wali` varchar(50) NOT NULL,
  `pekerjaan_wali` varchar(50) NOT NULL,
  `penghasilan_bulanan_wali` varchar(50) NOT NULL,
  `no_hp_wali` char(13) NOT NULL,
  `agama_wali` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ktp_ayah` varchar(100) NOT NULL,
  `ktp_ibu` varchar(100) NOT NULL,
  `ktp_wali` varchar(100) NOT NULL,
  `kk_siswa` varchar(100) NOT NULL,
  `kk_wali` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id_data`, `id_kelas`, `id_keahlian`, `nama_siswa`, `jenis_kelamin`, `nomer_induk`, `nik`, `tempat_lahir`, `tanggal_lahir`, `agama`, `kewarganegaraan`, `no_hp`, `alamat`, `rt_rw`, `dusun`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`, `nama_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `pendidikan_terakhir_ayah`, `pekerjaan_ayah`, `penghasilan_bulanan_ayah`, `no_hp_ayah`, `agama_ayah`, `nama_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `pendidikan_terakhir_ibu`, `pekerjaan_ibu`, `penghasilan_bulanan_ibu`, `no_hp_ibu`, `agama_ibu`, `nama_wali`, `tempat_lahir_wali`, `tanggal_lahir_wali`, `pendidikan_terakhir_wali`, `pekerjaan_wali`, `penghasilan_bulanan_wali`, `no_hp_wali`, `agama_wali`, `foto`, `ktp_ayah`, `ktp_ibu`, `ktp_wali`, `kk_siswa`, `kk_wali`, `created`, `updated`) VALUES
(2, 1, 1, 'Siti Raudatul Jannah', 'Perempuan', 7845, 1245, 'Bondowoso', '2023-11-01', 'Islam', 'Warga Negara Indonesia', '031245784512', 'Sukowiryo', '13/03', 'Sukowiryo', '-', 'Bondowoso', 'Bondowoso', 'Jawa Timur', 68219, 'asdfg', 'Bondowoso', '2023-10-10', 'SLTA/Sederajat', 'sdfghn', 'sdfghj', '234567', 'Islam', 'sdfghnm', 'Bondowoso', '2023-11-01', 'sdfghj', 'fvbgnm', 'vbn', '1234567', 'fghnm', 'fgbnm', 'vbnm', '2023-10-17', 'vbn', 'vbnm', 'fghjk', '123456', 'fgbhnm', 'bnm', 'vbnm,', '68219', 'vbnm,', 'dfghj', 'dfvbn', '2023-11-01 18:52:25', '2023-11-02 01:48:04'),
(4, 1, 1, 'Ananta Widayani', 'Perempuan', 742, 0, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0', '', '', '', '2023-11-02 04:36:01', '2023-11-01 22:08:03'),
(6, 1, 1, 'Zaskia Afrina Khaliq', 'Perempuan', 7425252, 0, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0', '', '', '', '2023-11-02 04:37:04', '2023-11-01 22:02:58');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int NOT NULL,
  `id_keahlian` int NOT NULL,
  `kode_kelas` int NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `wali_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_keahlian`, `kode_kelas`, `nama_kelas`, `wali_kelas`) VALUES
(1, 1, 1, 'XII RPL 2', 'Dita Ageng Dewanti, S.Sn');

-- --------------------------------------------------------

--
-- Table structure for table `konsentrasi_keahlian`
--

CREATE TABLE `konsentrasi_keahlian` (
  `id_keahlian` int NOT NULL,
  `id_kelas` int NOT NULL,
  `nama_keahlian` varchar(50) NOT NULL,
  `kaproli` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `konsentrasi_keahlian`
--

INSERT INTO `konsentrasi_keahlian` (`id_keahlian`, `id_kelas`, `nama_keahlian`, `kaproli`, `deskripsi`) VALUES
(1, 1, 'Rekayasa Perangkat Lunak', 'Nutriyo, S.T', '');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `tempat_lahir_pegawai` varchar(50) NOT NULL,
  `tanggal_lahir_pegawai` date NOT NULL,
  `agama_pegawai` varchar(50) NOT NULL,
  `status_pegawai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `tempat_lahir_pegawai`, `tanggal_lahir_pegawai`, `agama_pegawai`, `status_pegawai`) VALUES
(1, 'Dita Ageng Dewanti, S.Sn', 'Bondowoso', '2023-11-02', 'Islam', 'Guru');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `level` int NOT NULL COMMENT '1:admin, 2:siswa\r\n\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `alamat`, `level`) VALUES
(1, 'admin', 'admin', 'Siti Raudatul Jannah', 'Sukowiryo, Bondowoso', 1),
(2, 'admin1', 'admin1', 'Zaskia Afrina Khaliq', 'Kajar, Bondowoso', 1),
(3, 'admin2', 'admin2', 'Ananta Widayani', 'Tamanan, Bondowoso', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_keahlian` (`id_keahlian`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_keahlian` (`id_keahlian`);

--
-- Indexes for table `konsentrasi_keahlian`
--
ALTER TABLE `konsentrasi_keahlian`
  ADD PRIMARY KEY (`id_keahlian`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id_data` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konsentrasi_keahlian`
--
ALTER TABLE `konsentrasi_keahlian`
  MODIFY `id_keahlian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `data_ibfk_2` FOREIGN KEY (`id_keahlian`) REFERENCES `konsentrasi_keahlian` (`id_keahlian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
