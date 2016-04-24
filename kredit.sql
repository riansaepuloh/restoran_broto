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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

insert  into `barang`(`nf`,`kd_barang`,`namabarang1`,`merkbarang1`,`typebarang1`,`unitbarang1`,`noseribarang1`,`namabarang2`,`merkbarang2`,`typebarang2`,`unitbarang2`,`noseribarang2`,`namabarang3`,`merkbarang3`,`typebarang3`,`unitbarang3`,`noseribarang3`) values ('0001',18,'RICE COOKER','MIYAKO','BIG',1,'200','STRIKA','MASPION','SMAL',1,'310','KULKAS','SHARP','2 PINTU',1,'244'),('0002',19,'RICE COOKER','MIYAKO','BIG',1,'200','KULKAS','MASPION','SMAL',1,'310','','','',0,''),('0003',20,'HOME THEATER','POLYTRON','USB BESAR',1,'233','','','',0,'','','','',0,''),('0005',22,'RICE COOKER','MIYAKO','BIG',1,'123','STRIKA','MASPION','SMAL',1,'323','KULKAS','SHARP','2 PINTU',1,'244');

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

insert  into `faktur`(`nf`,`no_faktur`,`tahun`,`jt`,`tgl_faktur`,`surveyor`,`sales`,`supervisor`,`penjamin`,`sumber`,`tpb`,`tglangsur1`,`tglangsur2`,`username`,`banyakangsuran1`,`nominalangsuran1`,`saldo1`,`banyakangsuran2`,`nominalangsuran2`,`saldo2`,`total`,`id_konsumen`) values ('0001','0002/01/2016','2016',1,'01/04/2016','Rusdi','Noor','Firdaus','Batur','SPA','01/04/2016','01/04/2016','01/04/2017',NULL,12,385000,4620000,0,0,0,4620000,'ks0001'),('0002','0002/01/2016','2016',1,'01/04/2016','Rusdi','Noor','Firdaus','Batur','SPA','01/04/2016','01/04/2016','01/04/2017',NULL,12,385000,4620000,12,3850000,4620000,9240000,'ks0002'),('0003','0002/02/2016','2016',2,'01/04/2016','Rusdi','Noor','Firdaus','Batur','SPA','02/04/2016','02/04/2016','02/04/2017',NULL,24,100000,2400000,0,0,0,2400000,'ks0003'),('0005','0005/04/2016','2016',5,'05/04/2016','Rusdi','Noor','Firdaus','Batur','SPA','05/04/2016','05/04/2016','05/04/2017',NULL,12,500000,6000000,0,0,0,6000000,'ks0005');

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

insert  into `konsumen`(`id_konsumen`,`nama`,`tgl_lahir`,`jalan`,`dp`,`kelurahan`,`rt`,`rw`,`kota`,`tlp`,`kantor`,`alamatkantor`,`jabatan`,`telp_kantor`,`agama`,`wilayah`,`spa`) values ('ks0001','Rian Saepuloh','15/03/1992','01/04/2016',3850000,'Sukasirnarasa','02','04','Sumedang','0855555553422','InasiaTech','Tubagus Ismail Dalam','CEO','022044444','Islam','Sumedang',30),('ks0002','Panji','10/03/1992','01/04/2016',3850000,'Gandu','02','04','Majalengka','0855555553422','InasiaTech','Tubagus Ismail Dalam','Programer','022044444','Islam','Majalengka',30),('ks0003','Candra','26/11/1994','01/04/2016',100000,'Sukamaju','','','','08535353888','Nusantara Inc','Tubagus Ismail Raya','Pemilik','0220444566','Islam','Sumedang',40),('ks0005','Rizqi','01/09/1995','Cibogo',500000,'Cipanas','05','09','Cianjur','0877777765455','InasiaTech','Tubagus Ismail Dalam','Programer','0220444566','Islam','Cianjur',20);

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
  KEY `transaksi_ibfk_1` (`nf`),
  KEY `angsuranke` (`angsuranke`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`nf`) REFERENCES `faktur` (`nf`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

insert  into `transaksi`(`nf`,`angsuranke`,`tgl_transaksi`,`no_bukti_kas`,`no_bukti_kwitansi`,`in`,`out`,`nilai_angsuran`,`saldo_piutang`,`keterangan`) values ('0001',1,'24/04/2016','304','9004','','',385000,4235000,''),('0001',2,'24/04/2016','1014','1201','','',385000,3850000,''),('0002',1,'24/04/2016','DB','','','',4235000,5005000,''),('0005',1,'24/04/2016','304','9004','','',500000,5500000,'');

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

insert  into `users`(`nama`,`alamat`,`jenis_kelamin`,`jabatan`,`username`,`password`,`hak_akses`,`no_hp`) values ('rian','sumedang                                                                                                                ','Laki-Laki','kasir','riansaepuloh','rian','administrator','08562286326'),('Rusdi','Karawang                                                                                                                                                                                                                                                       ','Laki-Laki','Pemiliktoko','rusdinoor','rusdi','user','08678487263424'),('user','user                                                                                        ','Laki-Laki','user','user','user','user','1234');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
