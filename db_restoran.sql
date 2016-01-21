/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.20 : Database - db_restoran
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_restoran` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_restoran`;

/*Table structure for table `bagian_kerja` */

DROP TABLE IF EXISTS `bagian_kerja`;

CREATE TABLE `bagian_kerja` (
  `kd_bagian` varchar(2) NOT NULL,
  `nama_bagian` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kd_bagian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bagian_kerja` */

insert  into `bagian_kerja`(`kd_bagian`,`nama_bagian`) values ('A1','Admin'),('C1','Customer Service'),('K1','Koki'),('K2','Kasir'),('P1','Pelayan'),('P2','Pantry');

/*Table structure for table `bahan_baku` */

DROP TABLE IF EXISTS `bahan_baku`;

CREATE TABLE `bahan_baku` (
  `kd_bahan_baku` varchar(5) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `tanggal_kadaluarsa` date DEFAULT NULL,
  PRIMARY KEY (`kd_bahan_baku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bahan_baku` */

/*Table structure for table `detail_kuesioner` */

DROP TABLE IF EXISTS `detail_kuesioner`;

CREATE TABLE `detail_kuesioner` (
  `kd_pertanyaan` varchar(4) DEFAULT NULL,
  `jawaban` enum('Sangat Puas','Puas','Kurang Puas','Tidak Puas') DEFAULT NULL,
  `point_kuesioner` int(3) DEFAULT NULL,
  `no_order` int(6) DEFAULT NULL,
  KEY `fk_keisioner_kd_pertanyaan` (`kd_pertanyaan`),
  KEY `fk_kuesioner_no_order` (`no_order`),
  CONSTRAINT `fk_keisioner_kd_pertanyaan` FOREIGN KEY (`kd_pertanyaan`) REFERENCES `kuisioner` (`kd_pertanyaan`),
  CONSTRAINT `fk_kuesioner_no_order` FOREIGN KEY (`no_order`) REFERENCES `order` (`no_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_kuesioner` */

/*Table structure for table `detail_order` */

DROP TABLE IF EXISTS `detail_order`;

CREATE TABLE `detail_order` (
  `no_order` int(6) DEFAULT NULL,
  `kd_menu` varchar(4) DEFAULT NULL,
  `kd_meja` varchar(5) DEFAULT NULL,
  `qty` int(3) DEFAULT NULL,
  `diskon` double DEFAULT NULL,
  `total_harga` double DEFAULT NULL,
  KEY `fk_no_order_detil_orderan` (`no_order`),
  KEY `fk_kd_menu_detil_orderan` (`kd_menu`),
  KEY `fk_kd_meja_detil_orderan` (`kd_meja`),
  CONSTRAINT `fk_kd_meja_detil_orderan` FOREIGN KEY (`kd_meja`) REFERENCES `meja` (`kd_meja`),
  CONSTRAINT `fk_kd_menu_detil_orderan` FOREIGN KEY (`kd_menu`) REFERENCES `menu` (`kd_menu`),
  CONSTRAINT `fk_no_order_detil_orderan` FOREIGN KEY (`no_order`) REFERENCES `order` (`no_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_order` */

/*Table structure for table `detail_resep` */

DROP TABLE IF EXISTS `detail_resep`;

CREATE TABLE `detail_resep` (
  `kd_resep` varchar(4) DEFAULT NULL,
  `kd_bahan_baku` varchar(5) DEFAULT NULL,
  `qty` int(4) DEFAULT NULL,
  `cara_memasak` varchar(1000) DEFAULT NULL,
  KEY `fk_kd_resep_detail_resep` (`kd_resep`),
  KEY `fk_kd_bahan_detail_resep` (`kd_bahan_baku`),
  CONSTRAINT `fk_kd_bahan_detail_resep` FOREIGN KEY (`kd_bahan_baku`) REFERENCES `bahan_baku` (`kd_bahan_baku`),
  CONSTRAINT `fk_kd_resep_detail_resep` FOREIGN KEY (`kd_resep`) REFERENCES `resep` (`kd_resep`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_resep` */

/*Table structure for table `karyawan` */

DROP TABLE IF EXISTS `karyawan`;

CREATE TABLE `karyawan` (
  `id_karyawan` varchar(5) NOT NULL,
  `nama_karyawan` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `kd_bagian` varchar(2) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`),
  KEY `fk_bagian_kerja_karyawan` (`kd_bagian`),
  KEY `username` (`username`),
  CONSTRAINT `fk_bagian_kerja_karyawan` FOREIGN KEY (`kd_bagian`) REFERENCES `bagian_kerja` (`kd_bagian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `karyawan` */

insert  into `karyawan`(`id_karyawan`,`nama_karyawan`,`alamat`,`jenis_kelamin`,`kd_bagian`,`username`,`password`) values ('K001','Panji','Jl. Ir H. Juanda No. 78','Laki-laki','K1','panji','panji'),('K002','Candra','Jl. Sukarasri No. 75 A','Laki-laki','P2','candra','candra'),('K004','Rizqi Raf','Jl. Cisitu Lama No. 90','Laki-laki','P2','rizqi','rizqi'),('K005','Rusdi Noor','Jl. Sekeloa Selatan No. 56 A','Laki-laki','P1','rusdi','rusdi'),('K006','Adi Adrian','Jl. Ciparay No. 24 Kab','Laki-laki','P2','adiadrian','adiadrian'),('K007','Rizky','Jl. Cianjur No. 14 A','Laki-laki','P1','rizky','rizky'),('K008','Rismawanti','Jl. Kubangsari Timur No. 151','Perempuan','K1','rismawanti','rismawanti'),('K009','Rahmad','Jl. Tubagus Ismail Raya No. 155','Laki-laki','P1','rahmad','rahmad'),('K011','Febriani','Jl. Suci No. 54','Perempuan','K2','Febriani','febritaher'),('K012','Rians','Jl. Tubagus Ismail Dalam No.','Laki-laki','K2','Rian','rian'),('K013','Boby','Purwakrata','Laki-laki','A1','arif','arif'),('K014','Ajeng','Jl. Tanjungsari No. 114','Laki-laki','A1','ajeng','ajeng');

/*Table structure for table `kuisioner` */

DROP TABLE IF EXISTS `kuisioner`;

CREATE TABLE `kuisioner` (
  `kd_pertanyaan` varchar(4) NOT NULL,
  `pertanyaan` varchar(50) NOT NULL,
  `total_point` int(4) NOT NULL,
  PRIMARY KEY (`kd_pertanyaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kuisioner` */

/*Table structure for table `meja` */

DROP TABLE IF EXISTS `meja`;

CREATE TABLE `meja` (
  `kd_meja` varchar(5) NOT NULL,
  `kapasitas` int(2) DEFAULT NULL,
  `status_meja` enum('terisi','kosong') DEFAULT NULL,
  PRIMARY KEY (`kd_meja`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `meja` */

insert  into `meja`(`kd_meja`,`kapasitas`,`status_meja`) values ('001',4,'kosong'),('002',5,'terisi'),('003',3,'kosong');

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `kd_menu` varchar(4) NOT NULL,
  `nama_menu` varchar(30) DEFAULT NULL,
  `jenis` enum('makanan','minuman') DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `stok` int(3) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `diskon` int(11) DEFAULT '0',
  PRIMARY KEY (`kd_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

/*Table structure for table `order` */

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `no_order` int(6) NOT NULL,
  `status` enum('selesai','proses','gagal') DEFAULT NULL,
  `tanggal_order` date DEFAULT NULL,
  `total_harga_order` double DEFAULT NULL,
  PRIMARY KEY (`no_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `order` */

/*Table structure for table `resep` */

DROP TABLE IF EXISTS `resep`;

CREATE TABLE `resep` (
  `kd_resep` varchar(4) NOT NULL,
  `kd_menu` varchar(4) DEFAULT NULL,
  `kd_bagian` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`kd_resep`),
  KEY `fk_kd_bagian_resep` (`kd_bagian`),
  KEY `fk_kd_menu_resep` (`kd_menu`),
  CONSTRAINT `fk_kd_bagian_resep` FOREIGN KEY (`kd_bagian`) REFERENCES `bagian_kerja` (`kd_bagian`),
  CONSTRAINT `fk_kd_menu_resep` FOREIGN KEY (`kd_menu`) REFERENCES `menu` (`kd_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `resep` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
