-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2022 pada 12.23
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poker`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `pkey` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`pkey`, `username`, `name`, `password`, `role`, `img`) VALUES
(1, 'admin', 'yayan', '0192023a7bbd73250516f069df18b500', 1, ''),
(5, 'yayan1', 'Guru', '0192023a7bbd73250516f069df18b500', 2, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ads`
--

CREATE TABLE `ads` (
  `pkey` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `createon` int(11) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ads`
--

INSERT INTO `ads` (`pkey`, `name`, `status`, `createon`, `time`, `img`, `link`) VALUES
(5, 'aaaaaaaaaaaaa', 1, 1, '1648561807', '1648561807.gif', 'aasscscascasc'),
(6, 'testing', 1, 1, '1648562017', '1648562017.gif', 'aaaa'),
(7, 'araa', 1, 1, '1648562981', '1648562981.gif', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `pkey` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `createon` int(11) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE `content` (
  `pkey` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `createon` int(11) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `content` longtext,
  `privacy` longtext,
  `about` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`pkey`, `name`, `status`, `createon`, `time`, `content`, `privacy`, `about`) VALUES
(3, 'bodynya', 1, 1, '1648562390', '<h2 style=\"text-align: center;\"><span style=\"color: #ff0000;\"><strong>LASKAR138 Point Reward</strong></span></h2>\r\n<p style=\"text-align: center;\"><strong>Seluruh member LASKAR138 akan mendapatkan Point Reward sebagai Loyalty apresiasi dari LASKAR138</strong> <strong>Dengan Minimal Deposit 100rb Rupiah Pemain akan mendapatkan Point Reward yang dapat ditukar dengan Hadiah</strong></p>\r\n<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3c53e48 animated-fast animated fadeInUp\" data-id=\"3c53e48\" data-element_type=\"column\" data-settings=\"{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:1000}\">\r\n<div class=\"elementor-widget-wrap elementor-element-populated\">\r\n<div class=\"elementor-element elementor-element-689e4fe elementor-widget elementor-widget-image\" data-id=\"689e4fe\" data-element_type=\"widget\" data-widget_type=\"image.default\">\r\n<div class=\"elementor-widget-container\"><strong><img class=\" lazyloaded\" title=\"\" src=\"https://bookingmarketplace.getdokan.com/wp-content/uploads/2019/08/icon3.png\" alt=\"\" data-src=\"https://bookingmarketplace.getdokan.com/wp-content/uploads/2019/08/icon3.png\" /></strong></div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-0ed1b4b elementor-widget elementor-widget-heading\" data-id=\"0ed1b4b\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<div class=\"elementor-heading-title elementor-size-default\" style=\"text-align: center;\"><strong>Pemain juga mendapatkan akses Deposit dan Withdraw yang khusus dengan VIP Laskar138</strong></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><strong>LASKAR POINT REWARD</strong>&nbsp;adalah Point Royalti yang diberikan untuk para pemain&nbsp;<strong>LASKAR138</strong>&nbsp;yang setia. Yang selalu mendapatkan Point Reward Dari setiap deposit Minimal 100.000,- Rupiah.&nbsp;<strong>LASKAR POINT REWARD</strong>&nbsp;dapat ditukarkan dengan Hadiah hadiah yang menarik yang ditawarkan oleh&nbsp;<strong>LASKAR138</strong>. Oleh sebab itu seluruh pemain di&nbsp;<strong>LASKAR138</strong>&nbsp;dapat menukarkan Point Tersebut dengan Hadiah hadiah yang ditawarkan TANPA HARUS DIUNDI</p>\r\n<p>Dengan melakukan deposit minimal 100.000 Pemain akan dilayani secara VIP oleh Costumer Service&nbsp;<strong>LASKAR138</strong>&nbsp;yang memiliki keuntungan Prioritas dalam Deposit, Withdraw maupun gangguan dalam permaianan. Nikmatilah Prioritas dalam bermain di situs&nbsp;<strong>LASKAR138</strong></p>\r\n<ul>\r\n<li>Deposit Rp 100.000,-&nbsp; mendapatkan Point&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style=\"color: #ff0000;\"><strong>25 POINT&nbsp;</strong></span></li>\r\n<li>Deposit Rp 500.000,- mendapatkan Point&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style=\"color: #ff0000;\"><strong>150 POINT</strong></span></li>\r\n<li>Deposit Rp 1.000.000,- mendapatkan Point &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"color: #ff0000;\"><strong>350 POINT</strong></span></li>\r\n</ul>\r\n<div>\r\n<p><em>Syarat Dan Ketentuan sebagai berikut :</em></p>\r\n<ol>\r\n<li>Deposit untuk mendapatkan point</li>\r\n<li>Hanya cukup melakukan deposit dengan nominal yang sesuai dan VIP chat akan membantu anda dalam mendapatkan Point LASKAR138 Reward</li>\r\n<li>Deposit Via Pulsa tidak bisa klaim Point Reward</li>\r\n<li>Untuk penukaran POINT REWARD harap Klaim melalui Livechat VIP kami</li>\r\n<li>Untuk pengiriman hadiah paling lamban 3 x 24 jam ( Hari Kerja )</li>\r\n<li>Untuk pengklaiman Wajib mengisi Formulir Data diri</li>\r\n<li>Promo ini dapat berubah kapan saja tanpa pemberitahuan terlebih dahulu</li>\r\n<li>Semua keputusan LASKAR138 bersifat mutlak dan tidak bisa diganggu gugat</li>\r\n</ol>\r\n</div>', 'AAAAAAAAAAA', 'VVVVVVVVVV');

-- --------------------------------------------------------

--
-- Struktur dari tabel `head`
--

CREATE TABLE `head` (
  `pkey` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `createon` int(11) DEFAULT NULL,
  `html` longtext,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `head`
--

INSERT INTO `head` (`pkey`, `name`, `time`, `createon`, `html`, `status`) VALUES
(1, 'nama head', '1648457125', 1, '<style>\r\n        body {\r\n            background-color: #FFA20B;\r\n        }\r\n    </style>\r\n\r\n<!-- Start of LiveChat (www.livechatinc.com) code -->\r\n<script>\r\n    window.__lc = window.__lc || {};\r\n    window.__lc.license = 13477266;\r\n    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:\"2.0\",on:function(){i([\"on\",c.call(arguments)])},once:function(){i([\"once\",c.call(arguments)])},off:function(){i([\"off\",c.call(arguments)])},get:function(){if(!e._h)throw new Error(\"[LiveChatWidget] You can\'t use getters before load.\");return i([\"get\",c.call(arguments)])},call:function(){i([\"call\",c.call(arguments)])},init:function(){var n=t.createElement(\"script\");n.async=!0,n.type=\"text/javascript\",n.src=\"https://cdn.livechatinc.com/tracking.js\",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))\r\n</script>\r\n<noscript><a href=\"https://www.livechatinc.com/chat-with/13477266/\" rel=\"nofollow\">Chat with us</a>, powered by <a href=\"https://www.livechatinc.com/?welcome\" rel=\"noopener nofollow\" target=\"_blank\">LiveChat</a></noscript>\r\n<!-- End of LiveChat code -->', 0),
(2, 'scasc', '1648560839', 1, '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile_company`
--

CREATE TABLE `profile_company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `titlelogin` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `menutitle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profile_company`
--

INSERT INTO `profile_company` (`id`, `name`, `alamat`, `telepon`, `phone`, `titlelogin`, `logo`, `title`, `menutitle`) VALUES
(1, 'LASKAR 138', 'testing', '2345423', '234532', 'Poker', 'logo.png', '', 'Poker');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `pkey` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`pkey`, `name`) VALUES
(1, 'Super Admin'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `situs`
--

CREATE TABLE `situs` (
  `pkey` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `populerstatus` int(11) DEFAULT '0',
  `createon` int(11) DEFAULT NULL,
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
  `head` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `situs`
--

INSERT INTO `situs` (`pkey`, `name`, `status`, `populerstatus`, `createon`, `time`, `logoimg`, `populerimg`, `bannerimg`, `registerimg`, `bonusimg`, `promoimg`, `content`, `country`, `deposit`, `viadeposit`, `platform`, `loginlink`, `registerlink`, `bonuslink`, `promolink`, `head`) VALUES
(6, 'testing lop', 1, 1, 1, '1648631823', '1648555816logoimg.jpg', '1648554540populerimg.jpg', '1648554540bannerimg.jpg', '1648554540registerimg.jpg', '1648554540bonusimg.jpg', '1648554540promoimg.png', 'aaaaa', 'indonesi', '12300', '12ascsacs', 'acsascacs', 'https://www.youtube.com/', 'https://www.youtube.com/', 'https://www.youtube.com/', 'https://www.youtube.com/', 'coba saja');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`pkey`);

--
-- Indeks untuk tabel `ads`
--
ALTER TABLE `ads`
  ADD KEY `pkey` (`pkey`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD KEY `pkey` (`pkey`);

--
-- Indeks untuk tabel `content`
--
ALTER TABLE `content`
  ADD KEY `pkey` (`pkey`);

--
-- Indeks untuk tabel `head`
--
ALTER TABLE `head`
  ADD KEY `pkey` (`pkey`);

--
-- Indeks untuk tabel `profile_company`
--
ALTER TABLE `profile_company`
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD KEY `pkey` (`pkey`);

--
-- Indeks untuk tabel `situs`
--
ALTER TABLE `situs`
  ADD KEY `pkey` (`pkey`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `pkey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ads`
--
ALTER TABLE `ads`
  MODIFY `pkey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `pkey` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `content`
--
ALTER TABLE `content`
  MODIFY `pkey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `head`
--
ALTER TABLE `head`
  MODIFY `pkey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profile_company`
--
ALTER TABLE `profile_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `pkey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `situs`
--
ALTER TABLE `situs`
  MODIFY `pkey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
