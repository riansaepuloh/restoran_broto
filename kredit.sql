/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.20 : Database - kredit
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kredit` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `kredit`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `nf` varchar(8) DEFAULT NULL,
  `kd_barang` int(8) NOT NULL AUTO_INCREMENT,
  `namabarang1` varchar(255) DEFAULT NULL,
  `merkbarang1` varchar(255) DEFAULT NULL,
  `typebarang1` varchar(100) DEFAULT NULL,
  `unitbarang1` int(8) DEFAULT NULL,
  `noseribarang1` varchar(8) DEFAULT NULL,
  `namabarang2` varchar(255) DEFAULT NULL,
  `merkbarang2` varchar(255) DEFAULT NULL,
  `typebarang2` varchar(100) DEFAULT NULL,
  `unitbarang2` int(8) DEFAULT NULL,
  `noseribarang2` varchar(8) DEFAULT NULL,
  `namabarang3` varchar(255) DEFAULT NULL,
  `merkbarang3` varchar(255) DEFAULT NULL,
  `typebarang3` varchar(100) DEFAULT NULL,
  `unitbarang3` int(8) DEFAULT NULL,
  `noseribarang3` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`kd_barang`),
  KEY `barang_ibfk_1` (`nf`),
  CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`nf`) REFERENCES `faktur` (`nf`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

/*Table structure for table `barang_keluar` */

DROP TABLE IF EXISTS `barang_keluar`;

CREATE TABLE `barang_keluar` (
  `kd_barang` varchar(8) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `unit` int(8) DEFAULT NULL,
  `no_seri` varchar(8) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `id_konsumen` varchar(10) DEFAULT NULL,
  KEY `kd_barang` (`kd_barang`),
  KEY `id_konsumen` (`id_konsumen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `barang_keluar` */

insert  into `barang_keluar`(`kd_barang`,`nama_barang`,`merk`,`type`,`unit`,`no_seri`,`harga`,`id_konsumen`) values ('H01','HOME THEATER','POLYTRON','USB BESAR',1,'00001',4620000,NULL);

/*Table structure for table `faktur` */

DROP TABLE IF EXISTS `faktur`;

CREATE TABLE `faktur` (
  `nf` varchar(8) NOT NULL,
  `no_faktur` varchar(13) DEFAULT NULL,
  `tahun` varchar(20) DEFAULT NULL,
  `jt` int(3) DEFAULT NULL,
  `tgl_faktur` varchar(20) DEFAULT NULL,
  `surveyor` varchar(50) DEFAULT NULL,
  `sales` varchar(50) DEFAULT NULL,
  `supervisor` varchar(50) DEFAULT NULL,
  `penjamin` varchar(50) DEFAULT NULL,
  `sumber` varchar(10) DEFAULT NULL,
  `tpb` varchar(10) DEFAULT NULL,
  `tglangsur1` varchar(10) DEFAULT NULL,
  `tglangsur2` varchar(10) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `banyakangsuran1` double DEFAULT NULL,
  `nominalangsuran1` double DEFAULT NULL,
  `saldo1` double DEFAULT NULL,
  `banyakangsuran2` double DEFAULT NULL,
  `nominalangsuran2` double DEFAULT NULL,
  `saldo2` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `id_konsumen` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`nf`),
  KEY `username` (`username`),
  KEY `faktur_ibfk_1` (`id_konsumen`),
  CONSTRAINT `faktur_ibfk_1` FOREIGN KEY (`id_konsumen`) REFERENCES `konsumen` (`id_konsumen`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `faktur` */

/*Table structure for table `konsumen` */

DROP TABLE IF EXISTS `konsumen`;

CREATE TABLE `konsumen` (
  `id_konsumen` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tgl_lahir` varchar(40) DEFAULT NULL,
  `jalan` varchar(255) DEFAULT NULL,
  `dp` double DEFAULT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `tlp` varchar(15) DEFAULT NULL,
  `kantor` varchar(255) DEFAULT NULL,
  `alamatkantor` varchar(255) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `telp_kantor` varchar(15) DEFAULT NULL,
  `agama` enum('Islam','Hindu','Budha','Kong Hu Cu','Katolik','Protestan') DEFAULT NULL,
  `wilayah` varchar(50) DEFAULT NULL,
  `spa` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_konsumen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `konsumen` */

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `nf` varchar(8) DEFAULT NULL,
  `angsuranke` int(3) DEFAULT NULL,
  `tgl_transaksi` varchar(50) DEFAULT NULL,
  `no_bukti_kas` varchar(8) DEFAULT NULL,
  `no_bukti_kwitansi` varchar(8) DEFAULT NULL,
  `in` varchar(50) DEFAULT NULL,
  `out` varchar(50) DEFAULT NULL,
  `nilai_angsuran` double DEFAULT NULL,
  `saldo_piutang` double DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `kd_angsuran` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`kd_angsuran`),
  KEY `transaksi_ibfk_1` (`nf`),
  KEY `angsuranke` (`angsuranke`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`nf`) REFERENCES `faktur` (`nf`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` varchar(30) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`username`,`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`nama`,`alamat`,`jenis_kelamin`,`jabatan`,`username`,`password`,`hak_akses`,`no_hp`) values ('admin','admin','Laki-Laki','admin','admin','admin','administrator','08877777'),('Rusdi','Karawang                                                                                                                                                                                                                                                       ','Laki-Laki','Pemiliktoko','rusdinoor','rusdi','user','08678487263424'),('user','user                                                                                        ','Laki-Laki','user','user','user','user','1234');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
