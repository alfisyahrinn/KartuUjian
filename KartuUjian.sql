-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table kartuujian.akun
CREATE TABLE IF NOT EXISTS `akun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table kartuujian.akun: ~2 rows (approximately)
/*!40000 ALTER TABLE `akun` DISABLE KEYS */;
INSERT INTO `akun` (`id`, `username`, `password`, `status`) VALUES
	(1, 'udin', '123', 'user'),
	(2, 'salam33', '123', 'user');
/*!40000 ALTER TABLE `akun` ENABLE KEYS */;

-- Dumping structure for table kartuujian.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `tempatLahir` varchar(50) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `jenisKelamin` varchar(50) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nohp` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB AUTO_INCREMENT=2021573010069 DEFAULT CHARSET=latin1;

-- Dumping data for table kartuujian.mahasiswa: ~8 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` (`nim`, `nama`, `tempatLahir`, `tgl`, `jenisKelamin`, `nik`, `nohp`, `jurusan`, `prodi`, `kelas`) VALUES
	(1, 'Amru', 'Lhokseumawe', '2003-10-22', 'L', '1104052210030011', '082110924022', 'TIK', 'TI', 'TI-2C'),
	(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(5, 'Siti', 'Lhokseumawe', '2003-07-20', 'P', '1105022007030021', '082167318004', 'TIK', 'TI', 'TI-2A'),
	(6, 'Dinda', 'Lhokseumawe', '2002-03-15', 'P', '1104051503020092', '082248901022', 'TIK', 'TI', 'TI-2A'),
	(2021573010042, 'Alfi Syahrin', 'Takengon', '2003-05-18', 'L', '1108021805030040', '089517201982', 'TIK', 'TI', 'TI-2B'),
	(2021573010065, 'ahmad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(2021573010066, 'udin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(2021573010068, 'Rizki Saputra Sarma', 'Krukuh', '2003-09-28', 'L', '1108022809030012', '085269971395', 'TIK', 'TI', 'TI-2B');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;

-- Dumping structure for table kartuujian.persyaratan
CREATE TABLE IF NOT EXISTS `persyaratan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `ukt` varchar(50) DEFAULT NULL,
  `pembimbing` varchar(50) DEFAULT NULL,
  `perpus` int(11) DEFAULT NULL,
  `kehadiran` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table kartuujian.persyaratan: ~0 rows (approximately)
/*!40000 ALTER TABLE `persyaratan` DISABLE KEYS */;
/*!40000 ALTER TABLE `persyaratan` ENABLE KEYS */;

-- Dumping structure for table kartuujian.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` bigint(20) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT '202cb962ac59075b964b07152d234b70',
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK_user_mahasiswa` (`nim`),
  CONSTRAINT `FK_user_mahasiswa` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- Dumping data for table kartuujian.user: ~5 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `nim`, `nama`, `username`, `password`, `level`) VALUES
	(25, NULL, 'admin', 'admin', '202cb962ac59075b964b07152d234b70', 1),
	(26, 2021573010042, 'alfi syahrin', 'sahrin', '202cb962ac59075b964b07152d234b70', 2),
	(27, 2021573010068, 'riski saputra sarma', 'salam', '202cb962ac59075b964b07152d234b70', 2),
	(28, NULL, 'petugas', 'petugas', '202cb962ac59075b964b07152d234b70', 3),
	(29, NULL, 'kariyawan', 'kari', '202cb962ac59075b964b07152d234b70', 2);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
