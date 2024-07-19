/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.32-MariaDB : Database - sekolah
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sekolah` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `sekolah`;

/*Table structure for table `tbl_about` */

DROP TABLE IF EXISTS `tbl_about`;

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_content` varchar(111) DEFAULT NULL,
  `content` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_about` */

insert  into `tbl_about`(`id`,`judul_content`,`content`) values 
(1,'Ekstra Kurikuler','<ol>\r\n	<li>\r\n	<p><strong><img alt=\"\" src=\"http://localhost/sekolah/assets/images/c84699910e575238632662a3fc163f58.jpg\" style=\"float:right; height:200px; width:200px\" />Pramuka:</strong> Pramuka di MIN 3 Pontianak tidak hanya mengajarkan siswa keterampilan survival dan orientasi di alam, tetapi juga nilai-nilai kepemimpinan, kerjasama, dan kepedulian sosial melalui kegiatan seperti kemah dan kegiatan bakti sosial.<br />\r\n	<br />\r\n	<br />\r\n	<br />\r\n	<br />\r\n	<br />\r\n	<br />\r\n	&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong><img alt=\"\" src=\"https://www.blibli.com/friends-backend/wp-content/uploads/2021/08/Tari-Klasik.jpeg\" style=\"float:right; height:112px; width:200px\" />Seni Tradisional :</strong> Ekskul seni tradisional di MIN 3 Pontianak memberi siswa kesempatan untuk mempelajari dan melestarikan budaya lokal melalui tarian tradisional atau belajar bermain alat musik tradisional seperti gamelan atau sasando.<br />\r\n	<br />\r\n	&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong><img alt=\"\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQy962dRjdsdjqeZ6HtvmqL181_qZDANO3y_g&amp;s\" style=\"float:right; height:148px; width:200px\" />Pencak Silat:</strong> MIN 3 Pontianak juga memiliki ekskul olahraga yang beragam, seperti sepak bola atau bulu tangkis, yang tidak hanya untuk meningkatkan kesehatan fisik siswa tetapi juga untuk membangun semangat kompetisi dan kerjasama tim.<br />\r\n	<br />\r\n	<br />\r\n	<br />\r\n	&nbsp;</p>\r\n	</li>\r\n</ol>\r\n\r\n<p><strong><em>Ekskul-ekskul ini tidak hanya memberi siswa kesempatan untuk mengembangkan keterampilan khusus, tetapi juga membantu dalam pembentukan karakter dan kepribadian yang positif melalui pengalaman di luar lingkungan akademik.</em></strong></p>\r\n');

/*Table structure for table `tbl_agenda` */

DROP TABLE IF EXISTS `tbl_agenda`;

CREATE TABLE `tbl_agenda` (
  `agenda_id` int(11) NOT NULL AUTO_INCREMENT,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `agenda_deskripsi` text DEFAULT NULL,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` varchar(30) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`agenda_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_agenda` */

insert  into `tbl_agenda`(`agenda_id`,`agenda_nama`,`agenda_tanggal`,`agenda_deskripsi`,`agenda_mulai`,`agenda_selesai`,`agenda_tempat`,`agenda_waktu`,`agenda_keterangan`,`agenda_author`) values 
(4,'Malam Minggu yang Syahdu di Jungkat','2024-07-18 13:24:35','19.00 - 20.00: Pemanasan\r\n\r\n    Live Music Acoustic: Nikmati suasana yang tenang dengan penampilan musik akustik untuk meredakan penat dari rutinitas sehari-hari.\r\n\r\n20.00 - 21.30: Berbuka dengan Kuliner Khas\r\n\r\n    Buffet Makanan: Lezatnya makan malam dengan berbagai pilihan hidangan khas lokal dan internasional.\r\n    Lounge Area: Nikmati minuman kesukaan Anda sambil menikmati pemandangan malam yang indah.\r\n\r\n21.30 - 22.30: Hiburan Khusus\r\n\r\n    Stand-Up Comedy: Tertawa bersama dengan penampilan komedian-komedi terkenal yang akan membuat malam Minggu Anda semakin berkesan.\r\n    Quiz Interaktif: Ikuti quiz menarik dengan hadiah-hadiah menarik untuk pemenangnya.\r\n\r\n22.30 - Selesai: Party Time!\r\n\r\n    DJ Performance: Hentakkan malam Anda dengan musik dari DJ terkenal yang akan memutar musik dari berbagai genre untuk menghangatkan suasana.\r\n\r\nCatatan Penting:\r\n\r\n    Dress Code: Smart Casual untuk menciptakan suasana yang nyaman dan santai.\r\n    Reservasi Dini: Pastikan untuk melakukan reservasi meja terlebih dahulu karena tempat terbatas.\r\n    Ketentuan Kesehatan: Patuhi protokol kesehatan yang berlaku selama acara untuk keamanan bersama','2024-07-16','2024-07-16','Rumah Aqil','19.30 - 20.00','Jadikan malam Minggu Anda semakin istimewa','Aqil Ramadhan');

/*Table structure for table `tbl_album` */

DROP TABLE IF EXISTS `tbl_album`;

CREATE TABLE `tbl_album` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `album_pengguna_id` int(11) DEFAULT NULL,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT 0,
  `album_cover` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`album_id`),
  KEY `album_pengguna_id` (`album_pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_album` */

insert  into `tbl_album`(`album_id`,`album_nama`,`album_tanggal`,`album_pengguna_id`,`album_author`,`album_count`,`album_cover`) values 
(11,'Koleksi','2024-07-18 13:34:51',1,'Aqil Ramadhan',2,'6e47bc90f288db22439a6c1eb9c70b13.jpg'),
(12,'Kepala Sekolah','2024-07-19 14:39:04',1,'Aqil Ramadhan',1,'60de6c4d3454e5911bf0ee11a6763a3a.png');

/*Table structure for table `tbl_files` */

DROP TABLE IF EXISTS `tbl_files`;

CREATE TABLE `tbl_files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text DEFAULT NULL,
  `file_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `file_oleh` varchar(60) DEFAULT NULL,
  `file_download` int(11) DEFAULT 0,
  `file_data` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_files` */

insert  into `tbl_files`(`file_id`,`file_judul`,`file_deskripsi`,`file_tanggal`,`file_oleh`,`file_download`,`file_data`) values 
(14,'Modul Rock and roll','ini adalah modul rock and roll','2024-07-18 13:33:03','Tidak Di ketahui',0,'a5861bd938bce5106101e478f3fd2c5c.pdf');

/*Table structure for table `tbl_galeri` */

DROP TABLE IF EXISTS `tbl_galeri`;

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL AUTO_INCREMENT,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`galeri_id`),
  KEY `galeri_album_id` (`galeri_album_id`),
  KEY `galeri_pengguna_id` (`galeri_pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_galeri` */

insert  into `tbl_galeri`(`galeri_id`,`galeri_judul`,`galeri_tanggal`,`galeri_gambar`,`galeri_album_id`,`galeri_pengguna_id`,`galeri_author`) values 
(19,'Volly','2021-07-03 16:04:29','43cf0ea0958e519ff48ac166ae15f654.jpg',5,1,'Tata'),
(20,'Bulu Tangkis','2021-07-03 16:04:44','8bb6c86e9211429b859d0d1e36fe6ff3.jpg',5,1,'Tata'),
(21,'English Club','2021-07-03 16:04:57','fb14a4fa84dcde29e6f3ab8e7a19347c.jpg',5,1,'Tata'),
(22,'Futsal','2021-07-03 16:05:08','5c5349a6639f6f1430d297c4b73809da.jpg',5,1,'Tata'),
(23,'Marawis','2021-07-03 16:05:21','f68fe3819e381ff45f1f53d7a7af46b9.jpg',5,1,'Tata'),
(24,'Pencak Silat','2021-07-03 16:05:34','78cb35580574de808985ada5b3dc8011.jpg',5,1,'Tata'),
(25,'Pramuka','2021-07-03 16:05:46','2ac38843ee6f9f488f21b7c85c71161d.jpg',5,1,'Tata'),
(26,'Gedung 1','2021-07-03 16:06:08','da474c022a4a7e3e498051c3b12dcdb2.jpg',6,1,'Tata'),
(27,'Gedung 2','2021-07-03 16:06:19','bf6b075209995dbb536f80facd0b9b1e.jpg',6,1,'Tata'),
(28,'Gedung 3','2021-07-03 16:06:30','7960684dbb68c66b114c8e784457a0ea.jpg',6,1,'Tata'),
(29,'Lab. Komputer','2021-07-03 16:06:48','0bf6fc4ad0c3b463c568c25674c537cd.jpg',6,1,'Tata'),
(30,'Perpustakaan','2021-07-03 16:06:59','3f368a5ba07ea3cc4b7ff4ce038b8952.jpg',6,1,'Tata'),
(31,'Ruang Guru','2021-07-03 16:07:12','050f5f33380203539f15fa5c47d127da.jpg',6,1,'Tata'),
(32,'Ruang Kelas 1','2021-07-03 16:07:26','f55b768048bb3b04e22b5ba4864b1eb3.jpg',6,1,'Tata'),
(33,'Ruang Kelas 2','2021-07-03 16:07:36','b2427481c101e33e55dd5624d04f7bb5.jpg',6,1,'Tata'),
(34,'Guru 1','2021-07-03 16:08:01','890e0b51d5e828287fb3f301e6e347c3.jpg',8,1,'Tata'),
(35,'Guru 2','2021-07-03 16:08:25','27f28396ea78f5ff224194fb9eb82703.jpg',8,1,'Tata'),
(36,'Kegiatan 1','2021-07-03 16:08:43','4bcbb711c035b90c309f2ce2da800b79.jpeg',7,1,'Tata'),
(37,'Kegiatan 2','2021-07-03 16:08:58','d1569da8f7533c7fd23fbf600ed97875.jpeg',7,1,'Tata'),
(38,'Kegiatan 3','2021-07-03 16:09:17','8c1a101ef98c54e995ca3862e0c6214b.jpeg',7,1,'Tata'),
(39,'Kegiatan 4','2021-07-03 16:09:34','36fceaa39c39d3e6334e9b7a73b4cf8b.jpeg',7,1,'Tata'),
(40,'Kegiatan 5','2021-07-03 16:09:48','83dfff70187beb9e9a797d50cc49964b.jpeg',7,1,'Tata'),
(41,'Osis 1','2021-07-03 16:10:07','3083ba967ecb72ca923df5f8f00bea47.jpeg',9,1,'Tata'),
(42,'Osis 2','2021-07-03 16:10:24','2680a71699323269e44453eda972c71c.jpeg',9,1,'Tata'),
(43,'Osis 3','2021-07-03 16:10:35','a1b4d922caf5c8e9263ef484301c11a0.jpeg',9,1,'Tata'),
(44,'Osis 4','2021-07-03 16:10:45','d5ae017b08165bc0679d2d079a13e02b.jpeg',9,1,'Tata'),
(45,'Osis 5','2021-07-03 16:10:55','8f8896490a2d94526643c21d049ee7dd.jpeg',9,1,'Tata'),
(46,'Osis 6','2021-07-03 16:11:05','fb90ba0d9710fff685cc424780125f59.jpeg',9,1,'Tata'),
(47,'LDKS 1','2021-07-03 16:11:20','edc0bd8c9ec68d00129ba8012b0d71ef.jpeg',10,1,'Tata'),
(48,'LDKS 2','2021-07-03 16:11:32','fd46cd9b7f718cb383b08f69bd9bb230.jpeg',10,1,'Tata'),
(49,'LDKS 3','2021-07-03 16:11:43','50331c3c727d48ec8e372e49e5887aac.jpeg',10,1,'Tata'),
(50,'LDKS 4','2021-07-03 16:11:57','e4d22b82dfa7c98dc416df80f1f4a838.jpeg',10,1,'Tata'),
(51,'LDKS 5','2021-07-03 16:12:13','2d6058a1b8618457d4a7ca49078ad124.jpeg',10,1,'Tata'),
(52,'Osis 6','2021-07-03 16:38:29','16d489fb1ecbdc0651e147102a994f31.jpg',9,1,'Tata'),
(53,'Osis 7','2021-07-03 16:38:46','160a90b5b46689e8412cd1c6b9cd729f.jpg',9,1,'Tata'),
(54,'Osis 8','2021-07-03 16:38:59','0cde8a049f75f37bfce0ac0b6ce07414.jpg',9,1,'Tata'),
(55,'Osis 9','2021-07-03 16:39:17','9aabb8c19da3e243b818fe6314236e9f.jpg',9,1,'Tata'),
(56,'Osis 10','2021-07-03 16:39:32','5f382dd4920a5e9c9bd452bda393d34b.jpg',9,1,'Tata'),
(57,'Lets Rock n Roll!','2024-07-18 13:35:19','f4830aa2e1cb27489e47166658f046ee.jpg',11,1,'Aqil Ramadhan'),
(58,'ghfhgf','2024-07-18 13:35:48','c84699910e575238632662a3fc163f58.jpg',11,1,'Aqil Ramadhan'),
(59,'arifim','2024-07-19 14:42:14','c2e42d8f4a7fcc25144aa831f36c7f7e.png',12,1,'Aqil Ramadhan');

/*Table structure for table `tbl_guru` */

DROP TABLE IF EXISTS `tbl_guru`;

CREATE TABLE `tbl_guru` (
  `guru_id` int(11) NOT NULL AUTO_INCREMENT,
  `guru_nip` varchar(30) DEFAULT NULL,
  `guru_nama` varchar(70) DEFAULT NULL,
  `guru_jenkel` varchar(2) DEFAULT NULL,
  `guru_tmp_lahir` varchar(80) DEFAULT NULL,
  `guru_tgl_lahir` varchar(80) DEFAULT NULL,
  `guru_mapel` varchar(120) DEFAULT NULL,
  `guru_photo` varchar(40) DEFAULT NULL,
  `guru_tgl_input` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`guru_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_guru` */

insert  into `tbl_guru`(`guru_id`,`guru_nip`,`guru_nama`,`guru_jenkel`,`guru_tmp_lahir`,`guru_tgl_lahir`,`guru_mapel`,`guru_photo`,`guru_tgl_input`) values 
(9,'12233221','Salsh','L','jungkat','25 September 2023','Matematika','7e0faaa16cec8281677c5a980053329e.jpg','2024-07-18 12:54:46'),
(10,'124321','Steve Ray Vaughan','L','jungkat','24 agustus 2021','PPKN','981fb345a3235f8d63fc95bb5c00e95d.jpg','2024-07-18 12:55:57'),
(11,'12374635','Jimmy Hendrix','L','jungak','23 Agustus 9328','Biologi','c117b0f5201f6177de0c17041b365f79.jpg','2024-07-18 12:56:59'),
(12,'1899928','Jimmy Page','L','jungkat','27 Agustus 43832','Kimia','12496c8bfa7e62f96ce15e18e153e04b.jpg','2024-07-18 12:57:41');

/*Table structure for table `tbl_home` */

DROP TABLE IF EXISTS `tbl_home`;

CREATE TABLE `tbl_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_content` varchar(123) DEFAULT NULL,
  `content` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_home` */

insert  into `tbl_home`(`id`,`judul_content`,`content`) values 
(4,'Kata Pengantar','<p><img alt=\"\" src=\"http://localhost/sekolah/assets/images/c2e42d8f4a7fcc25144aa831f36c7f7e.png\" style=\"border-style:solid; border-width:0px; float:left; height:304px; width:203px\" /><strong><cite>Assalamu&#39;alaikum Warahmatullahi Wabarakatuh</cite></strong><br />\r\n<cite>Puji syukur ke hadirat Allah SWT, karena atas limpahan rahmat-Nya, kami dapat menyusun kata pengantar ini untuk seluruh keluarga besar Madrasah Ibtidaiyah Negeri (MIN) 3 Pontianak. Sebagai kepala Madrasah, saya merasa terhormat dapat berbicara dalam kesempatan yang berharga ini. MIN 3 Pontianak telah menjadi wadah bagi para siswa untuk mengembangkan potensi mereka secara optimal, baik dari segi akademik maupun pembentukan karakter Islami. Kami berterima kasih kepada seluruh tenaga pendidik, karyawan, dan siswa yang telah bersama-sama membentuk komunitas pendidikan yang harmonis dan berprestasi. Kita telah mengalami berbagai pencapaian gemilang, yang tidak terlepas dari dedikasi serta kerja keras semua pihak. Marilah kita terus mempertahankan semangat kebersamaan dan meningkatkan kualitas pembelajaran di MIN 3 Pontianak. Dengan kerjasama dan doa dari semua pihak, saya yakin kita akan mencapai lebih banyak prestasi dan keberhasilan di masa yang akan datang. Terima kasih kepada seluruh komunitas MIN 3 Pontianak atas dukungan dan partisipasinya. Semoga Allah SWT senantiasa memberkahi usaha kita dalam mengejar ilmu yang bermanfaat. Wassalamu&#39;alaikum Warahmatullahi Wabarakatuh. Hormat saya, [Nama Kepala MIN 3 Pontianak]</cite></p>\r\n');

/*Table structure for table `tbl_inbox` */

DROP TABLE IF EXISTS `tbl_inbox`;

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL AUTO_INCREMENT,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text DEFAULT NULL,
  `inbox_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `inbox_status` int(11) DEFAULT 1 COMMENT '1=Belum dilihat, 0=Telah dilihat',
  PRIMARY KEY (`inbox_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_inbox` */

/*Table structure for table `tbl_kategori` */

DROP TABLE IF EXISTS `tbl_kategori`;

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_kategori` */

insert  into `tbl_kategori`(`kategori_id`,`kategori_nama`,`kategori_tanggal`) values 
(1,'Pendidikan','2016-09-06 12:49:04'),
(2,'Politik','2016-09-06 12:50:01'),
(3,'Sains','2016-09-06 12:59:39'),
(5,'Penelitian','2016-09-06 13:19:26'),
(6,'Prestasi','2016-09-07 09:51:09'),
(13,'Olah Raga','2017-01-13 20:20:31');

/*Table structure for table `tbl_kelas` */

DROP TABLE IF EXISTS `tbl_kelas`;

CREATE TABLE `tbl_kelas` (
  `kelas_id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas_nama` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`kelas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_kelas` */

insert  into `tbl_kelas`(`kelas_id`,`kelas_nama`) values 
(1,'Kelas X.1'),
(2,'Kelas X.2'),
(3,'Kelas X.3'),
(4,'Kelas X.4'),
(5,'Kelas X.5'),
(6,'Kelas X.6'),
(7,'Kelas X.7'),
(8,'Kelas XI IPA.1'),
(9,'Kelas XI IPA.2'),
(10,'Kelas XI IPA.3'),
(11,'Kelas XI IPA.4'),
(12,'Kelas XI IPA.5'),
(13,'Kelas XI IPA.6'),
(14,'Kelas XI IPA.7'),
(15,'Kelas XI IPS.1'),
(16,'Kelas XI IPS.2'),
(17,'Kelas XI IPS.3'),
(18,'Kelas XI IPS.4'),
(19,'Kelas XI IPS.5'),
(20,'Kelas XI IPS.6'),
(21,'Kelas XI IPS.7');

/*Table structure for table `tbl_komentar` */

DROP TABLE IF EXISTS `tbl_komentar`;

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL AUTO_INCREMENT,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `komentar_status` varchar(2) DEFAULT NULL,
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_parent` int(11) DEFAULT 0,
  PRIMARY KEY (`komentar_id`),
  KEY `komentar_tulisan_id` (`komentar_tulisan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_komentar` */

insert  into `tbl_komentar`(`komentar_id`,`komentar_nama`,`komentar_email`,`komentar_isi`,`komentar_tanggal`,`komentar_status`,`komentar_tulisan_id`,`komentar_parent`) values 
(6,'esi','esi@gmail.com','asdkjasdkl ','2024-07-18 13:20:49','1',26,0),
(7,'asflj','adflkj@alshf.asd','lkadjfak ','2024-07-18 16:23:07','0',32,0),
(8,'Aqil Ramadhan','','terima kasih','2024-07-18 16:56:00','1',26,6),
(9,'asd','asdlkj@kajsf.asd','ntaps','2024-07-18 20:29:48','1',29,0),
(11,'Esi','','iyaa','2024-07-19 21:23:59','1',29,9);

/*Table structure for table `tbl_log_aktivitas` */

DROP TABLE IF EXISTS `tbl_log_aktivitas`;

CREATE TABLE `tbl_log_aktivitas` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_nama` text DEFAULT NULL,
  `log_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `log_ip` varchar(20) DEFAULT NULL,
  `log_pengguna_id` int(11) DEFAULT NULL,
  `log_icon` blob DEFAULT NULL,
  `log_jenis_icon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`log_id`),
  KEY `log_pengguna_id` (`log_pengguna_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_log_aktivitas` */

/*Table structure for table `tbl_pengguna` */

DROP TABLE IF EXISTS `tbl_pengguna`;

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL AUTO_INCREMENT,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_tentang` text DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_facebook` varchar(35) DEFAULT NULL,
  `pengguna_twitter` varchar(35) DEFAULT NULL,
  `pengguna_linkdin` varchar(35) DEFAULT NULL,
  `pengguna_google_plus` varchar(35) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT 1,
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT current_timestamp(),
  `pengguna_photo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_pengguna` */

insert  into `tbl_pengguna`(`pengguna_id`,`pengguna_nama`,`pengguna_moto`,`pengguna_jenkel`,`pengguna_username`,`pengguna_password`,`pengguna_tentang`,`pengguna_email`,`pengguna_nohp`,`pengguna_facebook`,`pengguna_twitter`,`pengguna_linkdin`,`pengguna_google_plus`,`pengguna_status`,`pengguna_level`,`pengguna_register`,`pengguna_photo`) values 
(1,'Aqil Ramadhan','Just do it','L','aqil','9414cd9ba54114b227f5c39bd10ee567','I am a mountainner. to me mountainerring is a life','aqilr834@gmail.com','0899938472','facebook.com/','twitter.com/','','',1,'1','2016-09-03 13:07:55','044223939aee49cbb18c4fe51d1c4cfb.png'),
(5,'Esi',NULL,'L','esi','36dbc2a12d8162070240f8d586b6726d',NULL,'esi@gmail.com','08997366255',NULL,NULL,NULL,NULL,1,'2','2024-07-18 13:01:56','1066fed027dfe8163585efa81c211ec3.JPG'),
(6,'abraham',NULL,'L','abraham','248706c023957db08d14f39749879207',NULL,'ajasdlkj@kasdjl.asd','091823098',NULL,NULL,NULL,NULL,1,'2','2024-07-18 20:07:48','0d030424d383a42306f462ef44630a0b.jpg');

/*Table structure for table `tbl_pengumuman` */

DROP TABLE IF EXISTS `tbl_pengumuman`;

CREATE TABLE `tbl_pengumuman` (
  `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT,
  `pengumuman_judul` varchar(150) DEFAULT NULL,
  `pengumuman_deskripsi` text DEFAULT NULL,
  `pengumuman_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengumuman_author` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`pengumuman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_pengumuman` */

insert  into `tbl_pengumuman`(`pengumuman_id`,`pengumuman_judul`,`pengumuman_deskripsi`,`pengumuman_tanggal`,`pengumuman_author`) values 
(6,'Lets Rock n Roll!','Hai Saudara-saudara Rockers!\r\n\r\nDi tengah gelegar gitar dan dentuman drum, kami mengajak Anda semua untuk merayakan semangat Rock \'n Roll yang selalu berkobar di hati kita! Berikut beberapa hal yang perlu kita perhatikan untuk memastikan kita tetap menjaga keharmonisan dalam merayakan rock and roll:\r\n\r\n    Spirit Rock n Roll: Mari tunjukkan semangat dan energi rock \'n roll kita dengan sikap yang positif dan penuh semangat dalam setiap aktivitas.\r\n\r\n    Kebebasan Berekspresi: Tetaplah berekspresi dengan bebas namun tetap menghormati satu sama lain dan lingkungan sekitar.\r\n\r\n    Pakaian dan Gaya: Pilihlah pakaian dan gaya yang mencerminkan jiwa rock \'n roll, tetapi tetap mematuhi ketentuan yang berlaku untuk menjaga suasana yang nyaman bagi semua.\r\n\r\n    Keselamatan dan Kesejahteraan: Prioritaskan keselamatan dan kesejahteraan diri sendiri serta orang lain dalam setiap tindakan dan kegiatan.\r\n\r\n    Hormati Musik dan Seni: Nikmatilah musik dan seni dalam segala bentuknya, sambil tetap menghargai karya dan kreativitas sesama penggemar rock.\r\n\r\nAyo kita jaga semangat rock n roll ini tetap berkobar dan membawa kebahagiaan bagi kita semua! Terima kasih atas partisipasi dan kerjasama Anda.\r\n\r\nRock on!','2024-07-18 13:29:23','Aqil Ramadhan');

/*Table structure for table `tbl_pengunjung` */

DROP TABLE IF EXISTS `tbl_pengunjung`;

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT,
  `pengunjung_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pengunjung_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1006 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_pengunjung` */

insert  into `tbl_pengunjung`(`pengunjung_id`,`pengunjung_tanggal`,`pengunjung_ip`,`pengunjung_perangkat`) values 
(1002,'2024-07-18 14:08:56','::1','Chrome'),
(1003,'2024-07-18 14:09:12','127.0.0.1','Firefox'),
(1004,'2024-07-19 00:16:51','::1','Chrome'),
(1005,'2024-07-19 06:06:48','127.0.0.1','Firefox');

/*Table structure for table `tbl_sekolah` */

DROP TABLE IF EXISTS `tbl_sekolah`;

CREATE TABLE `tbl_sekolah` (
  `id_sekolah` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(111) DEFAULT NULL,
  `alamat` varchar(111) DEFAULT NULL,
  `handphone` int(11) DEFAULT NULL,
  `email` varchar(111) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `facebook` varchar(111) DEFAULT NULL,
  `instagram` varchar(111) DEFAULT NULL,
  `youtube` varchar(111) DEFAULT NULL,
  `background` text DEFAULT NULL,
  PRIMARY KEY (`id_sekolah`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_sekolah` */

insert  into `tbl_sekolah`(`id_sekolah`,`nama_sekolah`,`alamat`,`handphone`,`email`,`logo`,`facebook`,`instagram`,`youtube`,`background`) values 
(1,'Sma 1 Pontianak','Jl. asdasd  Pontianak, Kecamatan Pontianak Tenggara, Kota Pontianak, Kalimantan Barat',2147483647,'Sma1ptk@gmail.com','006db6c865c3133f04cd46cf80f0478f.png','https://web.facebook.com/aqilRM/?_rdc=1&_rdr','https://www.instagram.com/aqlrmdhnn_/','https://www.youtube.com/channel/UCL2Y8zjEoZX9ZwQ2QjhXuBw','4d31f279f62869b5cd90f24ca465c78a.png');

/*Table structure for table `tbl_siswa` */

DROP TABLE IF EXISTS `tbl_siswa`;

CREATE TABLE `tbl_siswa` (
  `siswa_id` int(11) NOT NULL AUTO_INCREMENT,
  `siswa_nis` varchar(20) DEFAULT NULL,
  `siswa_nama` varchar(70) DEFAULT NULL,
  `siswa_jenkel` varchar(2) DEFAULT NULL,
  `siswa_kelas_id` int(11) DEFAULT NULL,
  `siswa_photo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`siswa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_siswa` */

insert  into `tbl_siswa`(`siswa_id`,`siswa_nis`,`siswa_nama`,`siswa_jenkel`,`siswa_kelas_id`,`siswa_photo`) values 
(14,'983471','Freedy Mercury','L',10,'ecdc25752d54682a32531152459c5eeb.jpg'),
(15,'21321','asdad','L',13,'31f93709f26e4b320a161fbb7f9decaa.JPG');

/*Table structure for table `tbl_slider` */

DROP TABLE IF EXISTS `tbl_slider`;

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(111) DEFAULT NULL,
  `kalimat` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_slider` */

insert  into `tbl_slider`(`slider_id`,`judul`,`kalimat`,`gambar`) values 
(10,'guru pahlawanku','Guru adalah pahlawanku','7fd38b49972cf2f318fec5e1b204c556.jpg'),
(11,'Guru Bersinergi','Guru sangat bersinergi sekali','fdff5d4daaefd9f261698c31e6af8806.jpg');

/*Table structure for table `tbl_testimoni` */

DROP TABLE IF EXISTS `tbl_testimoni`;

CREATE TABLE `tbl_testimoni` (
  `testimoni_id` int(11) NOT NULL AUTO_INCREMENT,
  `testimoni_nama` varchar(30) DEFAULT NULL,
  `testimoni_isi` varchar(120) DEFAULT NULL,
  `testimoni_email` varchar(35) DEFAULT NULL,
  `testimoni_tanggal` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`testimoni_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_testimoni` */

/*Table structure for table `tbl_tulisan` */

DROP TABLE IF EXISTS `tbl_tulisan`;

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL AUTO_INCREMENT,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT 0,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT 0,
  `tulisan_slug` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`tulisan_id`),
  KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tbl_tulisan` */

insert  into `tbl_tulisan`(`tulisan_id`,`tulisan_judul`,`tulisan_isi`,`tulisan_tanggal`,`tulisan_kategori_id`,`tulisan_kategori_nama`,`tulisan_views`,`tulisan_gambar`,`tulisan_pengguna_id`,`tulisan_author`,`tulisan_img_slider`,`tulisan_slug`) values 
(26,'Guns N Roses: Rock Legends of the Modern Era','<p>Dikenal sebagai salah satu band rock paling ikonik sepanjang masa, Guns N&#39; Roses telah membangun warisan yang tak terlupakan dalam industri musik. Diformasikan di Los Angeles pada tahun 1985, band ini segera menjadi pionir gerakan glam metal yang meledak pada era 1980-an. Namun, mereka dengan cepat mengubah arahnya ke arah rock &#39;n&#39; roll yang lebih kasar dan autentik yang mencerminkan semangat kota besar di mana mereka berasal.</p>\r\n\r\n<h2 style=\"font-style:italic\"><strong>Keberhasilan Awal dan Album Breakthrough</strong></h2>\r\n\r\n<p>Guns N&#39; Roses merilis album debut mereka yang ikonik, &quot;Appetite for Destruction,&quot; pada tahun 1987. Album ini langsung mencatat keberhasilan besar dengan lagu-lagu seperti &quot;Welcome to the Jungle,&quot; &quot;Sweet Child o&#39; Mine,&quot; dan &quot;Paradise City,&quot; yang semuanya menjadi hits nomor satu dan memperkenalkan gaya mereka yang energetik dan bertenaga kepada dunia.</p>\r\n\r\n<h2 style=\"font-style:italic\"><strong>Perjalanan Tur dan Kontroversi</strong></h2>\r\n\r\n<p>Salah satu ciri khas band ini adalah kehadiran panggung yang memukau dan energik, yang sebagian besar ditandai dengan vokal khas Axl Rose dan kemampuan gitar dari Slash yang legendaris. Namun, popularitas mereka juga disertai dengan kontroversi dan konflik internal, termasuk ketegangan antara anggota band, kecanduan narkoba, dan perilaku yang kontroversial di atas panggung.</p>\r\n\r\n<h2 style=\"font-style:italic\"><strong>Evolution and Lineup Changes</strong></h2>\r\n\r\n<p>Guns N&#39; Roses mengalami beberapa pergantian anggota selama karir mereka, tetapi dua figur sentral, Axl Rose dan Slash, tetap sebagai pilar utama dalam identitas mereka. Meskipun vakum panjang antara album, mereka tetap relevan di industri musik dan kembali ke sorotan dengan album &quot;Use Your Illusion I &amp; II&quot; pada awal 1990-an.</p>\r\n\r\n<h2 style=\"font-style:italic\"><strong>Legacy and Influence</strong></h2>\r\n\r\n<p>Pengaruh Guns N&#39; Roses terasa luas dalam genre rock, dengan gaya mereka yang kuat dan kontroversial mempengaruhi banyak band dan musisi setelah mereka. Mereka diakui sebagai salah satu band rock terbesar sepanjang masa, dengan penjualan album yang mencapai lebih dari 100 juta kopi di seluruh dunia.</p>\r\n\r\n<h2 style=\"font-style:italic\"><strong>Kesimpulan</strong></h2>\r\n\r\n<p>Guns N&#39; Roses bukan hanya sekadar band, tetapi ikon budaya pop yang menetapkan standar bagi performa panggung yang energik dan suara rock yang otentik. Meskipun lika-liku perjalanan mereka, warisan mereka tetap abadi dalam sejarah musik rock. Dengan lagu-lagu yang masih populer hingga saat ini, mereka terus menjadi simbol keberanian dan ekspresi dalam musik rock &#39;n&#39; roll.</p>\r\n','2024-07-18 13:19:22',1,'Pendidikan',11,'5fadba1dd9c50ed0b2bf914abff02010.jpg',1,'Aqil Ramadhan',0,'guns-n-roses:-rock-legends-of-the-modern-era'),
(29,'Led Zeppelin: Legenda Rock yang Menggetarkan Dunia','<p>Led Zeppelin, sebuah ikon dalam sejarah musik rock, telah memberikan pengaruh yang mendalam dan tak terlupakan sejak mereka pertama kali muncul di panggung pada tahun 1968. Grup ini terdiri dari empat anggota utama: Jimmy Page sebagai gitaris utama, Robert Plant sebagai vokalis utama, John Paul Jones sebagai bassis dan keyboardis, serta John Bonham sebagai drummer. Kehadiran mereka membawa sentuhan baru yang revolusioner dalam genre rock, menggabungkan elemen-elemen blues, rock &#39;n&#39; roll, dan folk dengan improvisasi yang mengagumkan dan energi panggung yang luar biasa.</p>\r\n\r\n<p><strong>Perjalanan Karir yang Gemilang</strong></p>\r\n\r\n<p>Led Zeppelin merilis album debutnya, berjudul &quot;Led Zeppelin&quot;, pada tahun 1969, yang dengan cepat membangun reputasi mereka sebagai inovator musik. Dikenal dengan lagu-lagu seperti &quot;Good Times Bad Times&quot; dan &quot;Dazed and Confused&quot;, album ini menandai awal dari serangkaian rilis yang mengejutkan dan mendefinisikan kembali standar dalam musik rock. Album-album berikutnya seperti &quot;Led Zeppelin II&quot;, &quot;Led Zeppelin III&quot;, dan &quot;Led Zeppelin IV&quot; (dikenal juga sebagai &quot;Untitled&quot; atau &quot;Four Symbols&quot;) mengukuhkan posisi mereka sebagai salah satu band rock terbesar sepanjang masa. Lagu-lagu ikonis seperti &quot;Whole Lotta Love&quot;, &quot;Stairway to Heaven&quot;, dan &quot;Immigrant Song&quot; tidak hanya menjadi lagu hit global tetapi juga menjadi bagian integral dari sejarah musik rock.</p>\r\n\r\n<p><strong>Pengaruh dan Warisan</strong></p>\r\n\r\n<p>Pengaruh Led Zeppelin tidak hanya terasa dalam musik rock tetapi juga mencakup berbagai genre musik. Mereka dianggap sebagai pelopor heavy metal, hard rock, dan banyak subgenre musik rock lainnya. Karakteristik unik dari setiap anggota band, mulai dari kepiawaian musikal Jimmy Page, kekuatan vokal Robert Plant, keterampilan multi-instrumental John Paul Jones, hingga kekuatan drum John Bonham, menjadikan Led Zeppelin sebagai entitas yang tak tertandingi.</p>\r\n\r\n<p>Meskipun karir mereka berakhir pada tahun 1980 setelah kematian tragis John Bonham, pengaruh Led Zeppelin tetap berlanjut. Mereka diakui secara luas oleh kritikus musik dan penggemar sebagai salah satu band paling penting dan berpengaruh dalam sejarah musik rock. Kehadiran mereka di Rock and Roll Hall of Fame pada tahun 1995 menegaskan warisan mereka yang tak terbantahkan.</p>\r\n\r\n<p><strong>Kesimpulan</strong></p>\r\n\r\n<p>Led Zeppelin bukan hanya sebuah band, tetapi sebuah fenomena musik yang melampaui batas generasi. Dengan kombinasi unik dari bakat musikal yang luar biasa, inovasi tak kenal lelah, dan performa panggung yang memukau, mereka telah menetapkan standar baru dalam dunia musik rock. Hingga hari ini, Led Zeppelin tetap menjadi simbol dari kekuatan dan kebrutalan rock &#39;n&#39; roll yang murni dan tak terkalahkan.</p>\r\n','2024-07-18 15:46:45',2,'Politik',8,'3919fa48c659c561964aac4099213302.jpg',5,'Esi',0,'led-zeppelin:-legenda-rock-yang-menggetarkan-dunia'),
(34,'berita','<p><img alt=\"\" src=\"data:image/jpeg;base64,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\" style=\"height:188px; width:281px\" />apakah ini</p>\r\n','2024-07-19 05:35:15',1,'Pendidikan',1,'9a859196d81429139f62260ac8628454.jpg',1,'Aqil Ramadhan',0,'berita');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
