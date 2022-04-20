/*
SQLyog Ultimate v12.5.1 (32 bit)
MySQL - 8.0.28-0ubuntu0.20.04.3 : Database - poker
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`poker` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `poker`;

/*Table structure for table `account` */

DROP TABLE IF EXISTS `account`;

CREATE TABLE `account` (
  `pkey` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`pkey`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `account` */

insert  into `account`(`pkey`,`username`,`name`,`password`,`role`,`img`) values 
(1,'admin','yayan','0192023a7bbd73250516f069df18b500',1,''),
(5,'yayan1','Guru','0192023a7bbd73250516f069df18b500',2,''),
(7,'raizo','raizo','902ebfbccd83ac60b75894acd99a0758',1,'');

/*Table structure for table `ads` */

DROP TABLE IF EXISTS `ads`;

CREATE TABLE `ads` (
  `pkey` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` int DEFAULT '0',
  `createon` int DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  KEY `pkey` (`pkey`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `ads` */

insert  into `ads`(`pkey`,`name`,`status`,`createon`,`time`,`img`,`link`) values 
(5,'aaaaaaaaaaaaa',1,1,'1648805375','1648805375.gif','https://94.237.75.152/account/register/hantam999'),
(6,'testing',1,1,'1648654080','1648562017.gif','https://94.237.75.152/account/register/hantam999'),
(8,'11111',1,1,'1649140240','1649140240.gif','11222222222'),
(9,'x ',1,1,'1649141759','1649141759.gif','x z s za s');

/*Table structure for table `banner` */

DROP TABLE IF EXISTS `banner`;

CREATE TABLE `banner` (
  `pkey` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `createon` int DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `status` int DEFAULT '0',
  KEY `pkey` (`pkey`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `banner` */

/*Table structure for table `content` */

DROP TABLE IF EXISTS `content`;

CREATE TABLE `content` (
  `pkey` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` int DEFAULT '0',
  `createon` int DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `content` longtext,
  `privacy` longtext,
  `about` longtext,
  KEY `pkey` (`pkey`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `content` */

insert  into `content`(`pkey`,`name`,`status`,`createon`,`time`,`content`,`privacy`,`about`) values 
(3,'bodynya',1,1,'1648562390','<h2 style=\"text-align: center;\"><span style=\"color: #ff0000;\"><strong>LASKAR138 Point Reward</strong></span></h2>\r\n<p style=\"text-align: center;\"><strong>Seluruh member LASKAR138 akan mendapatkan Point Reward sebagai Loyalty apresiasi dari LASKAR138</strong> <strong>Dengan Minimal Deposit 100rb Rupiah Pemain akan mendapatkan Point Reward yang dapat ditukar dengan Hadiah</strong></p>\r\n<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3c53e48 animated-fast animated fadeInUp\" data-id=\"3c53e48\" data-element_type=\"column\" data-settings=\"{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:1000}\">\r\n<div class=\"elementor-widget-wrap elementor-element-populated\">\r\n<div class=\"elementor-element elementor-element-689e4fe elementor-widget elementor-widget-image\" data-id=\"689e4fe\" data-element_type=\"widget\" data-widget_type=\"image.default\">\r\n<div class=\"elementor-widget-container\"><strong><img class=\" lazyloaded\" title=\"\" src=\"https://bookingmarketplace.getdokan.com/wp-content/uploads/2019/08/icon3.png\" alt=\"\" data-src=\"https://bookingmarketplace.getdokan.com/wp-content/uploads/2019/08/icon3.png\" /></strong></div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-0ed1b4b elementor-widget elementor-widget-heading\" data-id=\"0ed1b4b\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<div class=\"elementor-heading-title elementor-size-default\" style=\"text-align: center;\"><strong>Pemain juga mendapatkan akses Deposit dan Withdraw yang khusus dengan VIP Laskar138</strong></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><strong>LASKAR POINT REWARD</strong>&nbsp;adalah Point Royalti yang diberikan untuk para pemain&nbsp;<strong>LASKAR138</strong>&nbsp;yang setia. Yang selalu mendapatkan Point Reward Dari setiap deposit Minimal 100.000,- Rupiah.&nbsp;<strong>LASKAR POINT REWARD</strong>&nbsp;dapat ditukarkan dengan Hadiah hadiah yang menarik yang ditawarkan oleh&nbsp;<strong>LASKAR138</strong>. Oleh sebab itu seluruh pemain di&nbsp;<strong>LASKAR138</strong>&nbsp;dapat menukarkan Point Tersebut dengan Hadiah hadiah yang ditawarkan TANPA HARUS DIUNDI</p>\r\n<p>Dengan melakukan deposit minimal 100.000 Pemain akan dilayani secara VIP oleh Costumer Service&nbsp;<strong>LASKAR138</strong>&nbsp;yang memiliki keuntungan Prioritas dalam Deposit, Withdraw maupun gangguan dalam permaianan. Nikmatilah Prioritas dalam bermain di situs&nbsp;<strong>LASKAR138</strong></p>\r\n<ul>\r\n<li>Deposit Rp 100.000,-&nbsp; mendapatkan Point&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style=\"color: #ff0000;\"><strong>25 POINT&nbsp;</strong></span></li>\r\n<li>Deposit Rp 500.000,- mendapatkan Point&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style=\"color: #ff0000;\"><strong>150 POINT</strong></span></li>\r\n<li>Deposit Rp 1.000.000,- mendapatkan Point &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"color: #ff0000;\"><strong>350 POINT</strong></span></li>\r\n</ul>\r\n<div>\r\n<p><em>Syarat Dan Ketentuan sebagai berikut :</em></p>\r\n<ol>\r\n<li>Deposit untuk mendapatkan point</li>\r\n<li>Hanya cukup melakukan deposit dengan nominal yang sesuai dan VIP chat akan membantu anda dalam mendapatkan Point LASKAR138 Reward</li>\r\n<li>Deposit Via Pulsa tidak bisa klaim Point Reward</li>\r\n<li>Untuk penukaran POINT REWARD harap Klaim melalui Livechat VIP kami</li>\r\n<li>Untuk pengiriman hadiah paling lamban 3 x 24 jam ( Hari Kerja )</li>\r\n<li>Untuk pengklaiman Wajib mengisi Formulir Data diri</li>\r\n<li>Promo ini dapat berubah kapan saja tanpa pemberitahuan terlebih dahulu</li>\r\n<li>Semua keputusan LASKAR138 bersifat mutlak dan tidak bisa diganggu gugat</li>\r\n</ol>\r\n</div>','AAAAAAAAAAA','VVVVVVVVVV');

/*Table structure for table `head` */

DROP TABLE IF EXISTS `head`;

CREATE TABLE `head` (
  `pkey` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `createon` int DEFAULT NULL,
  `html` longtext,
  `status` int DEFAULT '0',
  KEY `pkey` (`pkey`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `head` */

insert  into `head`(`pkey`,`name`,`time`,`createon`,`html`,`status`) values 
(1,'nama head','1648457125',1,'<style>\r\n        body {\r\n            background-color: #FFA20B;\r\n        }\r\n    </style>\r\n\r\n<!-- Start of LiveChat (www.livechatinc.com) code -->\r\n<script>\r\n    window.__lc = window.__lc || {};\r\n    window.__lc.license = 13477266;\r\n    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:\"2.0\",on:function(){i([\"on\",c.call(arguments)])},once:function(){i([\"once\",c.call(arguments)])},off:function(){i([\"off\",c.call(arguments)])},get:function(){if(!e._h)throw new Error(\"[LiveChatWidget] You can\'t use getters before load.\");return i([\"get\",c.call(arguments)])},call:function(){i([\"call\",c.call(arguments)])},init:function(){var n=t.createElement(\"script\");n.async=!0,n.type=\"text/javascript\",n.src=\"https://cdn.livechatinc.com/tracking.js\",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))\r\n</script>\r\n<noscript><a href=\"https://www.livechatinc.com/chat-with/13477266/\" rel=\"nofollow\">Chat with us</a>, powered by <a href=\"https://www.livechatinc.com/?welcome\" rel=\"noopener nofollow\" target=\"_blank\">LiveChat</a></noscript>\r\n<!-- End of LiveChat code -->',0),
(2,'scasc','1648795502',1,'<meta name=\"google-site-verification\" content=\"LKDtdGR38YveLnnYbqGn6pdAhbYZL_BArIUIfmws6po\" />',1);

/*Table structure for table `profile_company` */

DROP TABLE IF EXISTS `profile_company`;

CREATE TABLE `profile_company` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `titlelogin` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `menutitle` varchar(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `profile_company` */

insert  into `profile_company`(`id`,`name`,`alamat`,`telepon`,`phone`,`titlelogin`,`logo`,`title`,`menutitle`) values 
(1,'Gacor+','testing','2345423','234532','Gacot+','logo.png','','Poker');

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `pkey` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  KEY `pkey` (`pkey`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `role` */

insert  into `role`(`pkey`,`name`) values 
(1,'Super Admin'),
(2,'Admin');

/*Table structure for table `situs` */

DROP TABLE IF EXISTS `situs`;

CREATE TABLE `situs` (
  `pkey` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` int DEFAULT '0',
  `populerstatus` int DEFAULT '0',
  `createon` int DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `logoimg` varchar(255) DEFAULT NULL,
  `populerimg` varchar(255) DEFAULT NULL,
  `bannerimg` varchar(255) DEFAULT NULL,
  `registerimg` varchar(255) DEFAULT NULL,
  `bonusimg` varchar(255) DEFAULT NULL,
  `promoimg` varchar(255) DEFAULT NULL,
  `content` longtext,
  `country` varchar(255) DEFAULT NULL,
  `deposit` varchar(255) DEFAULT NULL,
  `viadeposit` varchar(255) DEFAULT NULL,
  `platform` varchar(255) DEFAULT NULL,
  `loginlink` varchar(255) DEFAULT NULL,
  `registerlink` varchar(255) DEFAULT NULL,
  `bonuslink` varchar(255) DEFAULT NULL,
  `promolink` varchar(255) DEFAULT NULL,
  `head` longtext,
  `rtp` varchar(255) DEFAULT NULL,
  KEY `pkey` (`pkey`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `situs` */

insert  into `situs`(`pkey`,`name`,`status`,`populerstatus`,`createon`,`time`,`logoimg`,`populerimg`,`bannerimg`,`registerimg`,`bonusimg`,`promoimg`,`content`,`country`,`deposit`,`viadeposit`,`platform`,`loginlink`,`registerlink`,`bonuslink`,`promolink`,`head`,`rtp`) values 
(6,'testing lop',1,1,1,'1648641147','1648555816logoimg.jpg','1648554540populerimg.jpg','1648554540bannerimg.jpg','1648554540registerimg.jpg','1648554540bonusimg.jpg','1648554540promoimg.png','aaaaa','indonesi','12300','12ascsacs','acsascacs','https://www.youtube.com/','https://www.youtube.com/','https://www.youtube.com/','https://www.youtube.com/','coba saja',NULL),
(8,'asc2',1,1,1,'1648810994','1648646269logoimg.png','1648646269populerimg.png','1648646269bannerimg.png','1648646269registerimg.png','1648646269bonusimg.png','1648646269promoimg.png','ascasc','asac','6510000','asca','scas','asc','asca','scas','cas','casca',NULL),
(9,'Laskar138',1,1,7,'1650345378','1648653504logoimg.png','1650345331populerimg.jpg','1650345378bannerimg.jpg','1648653504registerimg.png','1648653504bonusimg.png','1648653504promoimg.png','Ok sajalah','Indonesia','10000','Bank , E Wallet dan Pulsa','INFINI88','https://94.237.75.152/account/register/hantam999','https://94.237.75.152/account/register/hantam999','https://94.237.75.152/account/register/hantam999','https://94.237.75.152/account/register/hantam999','<meta name=\"keywords\" content=\"laskar138, laskar 138, Agen Situs Slot, Slot online tergacor, Slot Online, Situs Slot, Menang slot, Situs Judi Online, provider situs agen slot, daftar Slot Online, Pragmatic Slot, daftar slot pragmatic, slot online pragmatic, play pragmatic,  daftar provider judi slot online terbaik, situs agen slot,  situs agen slot deposit pulsa tanpa potongan, situs agen slot gacor, situs agen slot joker, situs agen slot online, situs agen slot terpercaya, situs agen slot terbaik, situs agen slot terbaru, situs slot agen138, situs agen slot pulsa, agen situs slot online, agen situs slot, agen situs slot terpercaya, agen situs slot online terpercaya, agenslot138 situs agen slot online terpercaya, situs agen judi slot online, situs agen slot terpercaya dan resmi, situs agen slot deposit pulsa tanpa potongan, daftar situs agen slot, situs agen slot online terbaik, situs agen judi slot online, situs agen judi slot, situs agen judi slot terpercaya, joker123 situs agen slot, agen situs judi slot, agen situs judi slot terpercaya, situs agen slot terbaru, situs agen judi slot online terpercaya, slot online, slot online pragmatic\">\r\n    <meta name=\"categories\" content=\"Agen Situs Slot Microgaming Pragmatic Terbaik\">\r\n    <meta name=\"googlebot\" content=\"index, follow\">\r\n    <meta name=\"robots\" content=\"index, follow\">\r\n    <meta name=\"revisit-after\" content=\"1 days\">\r\n    <meta name=\"geo.placename\" content=\"Jakarta\">\r\n    <meta name=\"geo.region\" content=\"id-jk\">\r\n    <meta name=\"geo.country\" content=\"id\">\r\n    <meta name=\"language\" content=\"id\">\r\n    <meta name=\"tgn.nation\" content=\"indonesia\">\r\n    <meta name=\"rating\" content=\"general\">\r\n    <meta name=\"distribution\" content=\"global\">',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
