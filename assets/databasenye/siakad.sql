-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 09:27 AM
-- Server version: 5.6.24
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `ID_Dosen` int(11) NOT NULL,
  `Nama_Dosen` varchar(50) DEFAULT NULL,
  `Jurusan` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`ID_Dosen`, `Nama_Dosen`, `Jurusan`, `Email`) VALUES
(1, 'Rahman', 'Teknik Informatika', 'john.doe@example.com'),
(2, 'Joko', 'Manajemen Bisnis', 'jane.smith@example.com'),
(3, 'Anis', 'Akuntansi', 'michael.johnson@example.com'),
(4, 'Ranu', 'Psikologi', 'emily.davis@example.com'),
(5, 'Ilham', 'Arsitektur', 'david.wilson@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(10) NOT NULL,
  `namaJabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `namaJabatan`) VALUES
(1, 'Direktur'),
(2, 'Staf');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `ID_Jadwal` int(11) NOT NULL,
  `ID_MataKuliah` int(11) DEFAULT NULL,
  `ID_Dosen` int(11) DEFAULT NULL,
  `Hari` varchar(20) DEFAULT NULL,
  `Jam` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`ID_Jadwal`, `ID_MataKuliah`, `ID_Dosen`, `Hari`, `Jam`) VALUES
(1, 1, 2, 'Senin', '08:00 - 10:00'),
(2, 3, 4, 'Selasa', '13:00 - 15:00'),
(3, 2, 1, 'Rabu', '10:00 - 12:00'),
(4, 4, 3, 'Kamis', '09:00 - 11:00'),
(5, 5, 5, 'Jumat', '14:00 - 16:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `ID_Mahasiswa` int(11) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Jurusan` varchar(50) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`ID_Mahasiswa`, `Nama`, `Jurusan`, `Tanggal_Lahir`, `Alamat`, `Email`) VALUES
(1, 'John Doe', 'Teknik Informatika', '1995-05-10', 'Jl. Contoh No. 123', 'john.doe@example.com'),
(2, 'Jane Smith', 'Manajemen Bisnis', '1998-08-20', 'Jl. Sample No. 456', 'jane.smith@example.com'),
(3, 'Michael Johnson', 'Akuntansi', '1997-02-15', 'Jl. Dummy No. 789', 'michael.johnson@example.com'),
(4, 'Emily Davis', 'Psikologi', '1996-11-30', 'Jl. Test No. 987', 'emily.davis@example.com'),
(5, 'David Wilson', 'Arsitektur', '1999-04-05', 'Jl. Example No. 654', 'david.wilson@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `ID_MataKuliah` int(11) NOT NULL,
  `Nama_MataKuliah` varchar(50) DEFAULT NULL,
  `SKS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`ID_MataKuliah`, `Nama_MataKuliah`, `SKS`) VALUES
(1, 'Matematika', 3),
(2, 'Fisika', 4),
(3, 'Bahasa Inggris', 2),
(4, 'Algoritma dan Struktur Data', 3),
(5, 'Database', 3);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `ID_Nilai` int(11) NOT NULL,
  `ID_Mahasiswa` int(11) DEFAULT NULL,
  `ID_MataKuliah` int(11) DEFAULT NULL,
  `Nilai` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`ID_Nilai`, `ID_Mahasiswa`, `ID_MataKuliah`, `Nilai`) VALUES
(1, 1, 1, 85),
(2, 2, 3, 78),
(3, 3, 2, 92),
(4, 4, 4, 80),
(5, 5, 5, 88);

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `ID_Presensi` int(11) NOT NULL,
  `ID_Mahasiswa` int(11) DEFAULT NULL,
  `ID_Jadwal` int(11) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  `Status_Presensi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`ID_Presensi`, `ID_Mahasiswa`, `ID_Jadwal`, `Tanggal`, `Status_Presensi`) VALUES
(1, 1, 1, '2022-01-10', 'Hadir'),
(2, 2, 3, '2022-01-11', 'Hadir'),
(3, 3, 2, '2022-01-12', 'Hadir'),
(4, 4, 4, '2022-01-13', 'Hadir'),
(5, 5, 5, '2022-01-14', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `umur` int(25) NOT NULL,
  `hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `pekerjaan`, `umur`, `hp`) VALUES
(1, 'Andi', 'Sajingan', 'web programmer', 25, '081234567788'),
(2, 'Budi', 'jawai', 'Web Designer', 39, '085349000001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`ID_Dosen`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`ID_Jadwal`),
  ADD KEY `ID_MataKuliah` (`ID_MataKuliah`),
  ADD KEY `ID_Dosen` (`ID_Dosen`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`ID_Mahasiswa`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`ID_MataKuliah`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`ID_Nilai`),
  ADD KEY `ID_Mahasiswa` (`ID_Mahasiswa`),
  ADD KEY `ID_MataKuliah` (`ID_MataKuliah`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`ID_Presensi`),
  ADD KEY `ID_Mahasiswa` (`ID_Mahasiswa`),
  ADD KEY `ID_Jadwal` (`ID_Jadwal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`ID_MataKuliah`) REFERENCES `matakuliah` (`ID_MataKuliah`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`ID_Dosen`) REFERENCES `dosen` (`ID_Dosen`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`ID_Mahasiswa`) REFERENCES `mahasiswa` (`ID_Mahasiswa`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`ID_MataKuliah`) REFERENCES `matakuliah` (`ID_MataKuliah`);

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`ID_Mahasiswa`) REFERENCES `mahasiswa` (`ID_Mahasiswa`),
  ADD CONSTRAINT `presensi_ibfk_2` FOREIGN KEY (`ID_Jadwal`) REFERENCES `jadwal` (`ID_Jadwal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
