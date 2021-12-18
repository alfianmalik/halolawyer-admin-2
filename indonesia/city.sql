# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.40-0ubuntu0.14.04.1)
# Database: indonesia
# Generation Time: 2015-10-08 11:12:53 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table city
# ------------------------------------------------------------

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `province_id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=500 DEFAULT CHARSET=utf8;

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;

INSERT INTO `city` (`id`, `province_id`, `name`)
VALUES
	(1,1,'Kab. Simeulue'),
	(2,1,'Kab. Aceh Singkil'),
	(3,1,'Kab. Aceh Selatan'),
	(4,1,'Kab. Aceh Tenggara'),
	(5,1,'Kab. Aceh Timur'),
	(6,1,'Kab. Aceh Tengah'),
	(7,1,'Kab. Aceh Barat'),
	(8,1,'Kab. Aceh Besar'),
	(9,1,'Kab. Pidie'),
	(10,1,'Kab. Bireuen'),
	(11,1,'Kab. Aceh Utara'),
	(12,1,'Kab. Aceh Barat Daya'),
	(13,1,'Kab. Gayo Lues'),
	(14,1,'Kab. Aceh Tamiang'),
	(15,1,'Kab. Nagan Raya'),
	(16,1,'Kab. Aceh Jaya'),
	(17,1,'Kab. Bener Meriah'),
	(18,1,'Kab. Pidie Jaya'),
	(19,1,'Kota Banda Aceh'),
	(20,1,'Kota Sabang'),
	(21,1,'Kota Langsa'),
	(22,1,'Kota Lhokseumawe'),
	(23,1,'Kota Subulussalam'),
	(24,2,'Kab. Nias'),
	(25,2,'Kab. Mandailing Natal'),
	(26,2,'Kab. Tapanuli Selatan'),
	(27,2,'Kab. Tapanuli Tengah'),
	(28,2,'Kab. Tapanuli Utara'),
	(29,2,'Kab. Toba Samosir'),
	(30,2,'Kab. Labuhan Batu'),
	(31,2,'Kab. Asahan'),
	(32,2,'Kab. Simalungun'),
	(33,2,'Kab. Dairi'),
	(34,2,'Kab. Karo'),
	(35,2,'Kab. Deli Serdang'),
	(36,2,'Kab. Langkat'),
	(37,2,'Kab. Nias Selatan'),
	(38,2,'Kab. Humbang Hasundutan'),
	(39,2,'Kab. Pakpak Bharat'),
	(40,2,'Kab. Samosir'),
	(41,2,'Kab. Serdang Bedagai'),
	(42,2,'Kab. Batu Bara'),
	(43,2,'Kab. Padang Lawas Utara'),
	(44,2,'Kab. Padang Lawas'),
	(45,2,'Kab. Labuhan Batu Selatan'),
	(46,2,'Kab. Labuhan Batu Utara'),
	(47,2,'Kab. Nias Utara'),
	(48,2,'Kab. Nias Barat'),
	(49,2,'Kota Sibolga'),
	(50,2,'Kota Tanjung Balai'),
	(51,2,'Kota Pematang Siantar'),
	(52,2,'Kota Tebing Tinggi'),
	(53,2,'Kota Medan'),
	(54,2,'Kota Binjai'),
	(55,2,'Kota Padangsidimpuan'),
	(56,2,'Kota Gunungsitoli'),
	(57,3,'Kab. Kepulauan Mentawai'),
	(58,3,'Kab. Pesisir Selatan'),
	(59,3,'Kab. Solok'),
	(60,3,'Kab. Sijunjung'),
	(61,3,'Kab. Tanah Datar'),
	(62,3,'Kab. Padang Pariaman'),
	(63,3,'Kab. Agam'),
	(64,3,'Kab. Lima Puluh Kota'),
	(65,3,'Kab. Pasaman'),
	(66,3,'Kab. Solok Selatan'),
	(67,3,'Kab. Dharmasraya'),
	(68,3,'Kab. Pasaman Barat'),
	(69,3,'Kota Padang'),
	(70,3,'Kota Solok'),
	(71,3,'Kota Sawah Lunto'),
	(72,3,'Kota Padang Panjang'),
	(73,3,'Kota Bukittinggi'),
	(74,3,'Kota Payakumbuh'),
	(75,3,'Kota Pariaman'),
	(76,4,'Kab. Kuantan Singingi'),
	(77,4,'Kab. Indragiri Hulu'),
	(78,4,'Kab. Indragiri Hilir'),
	(79,4,'Kab. Pelalawan'),
	(80,4,'Kab. S I A K'),
	(81,4,'Kab. Kampar'),
	(82,4,'Kab. Rokan Hulu'),
	(83,4,'Kab. Bengkalis'),
	(84,4,'Kab. Rokan Hilir'),
	(85,4,'Kab. Kepulauan Meranti'),
	(86,4,'Kota Pekanbaru'),
	(87,4,'Kota D U M A I'),
	(88,5,'Kab. Kerinci'),
	(89,5,'Kab. Merangin'),
	(90,5,'Kab. Sarolangun'),
	(91,5,'Kab. Batang Hari'),
	(92,5,'Kab. Muaro Jambi'),
	(93,5,'Kab. Tanjung Jabung Timur'),
	(94,5,'Kab. Tanjung Jabung Barat'),
	(95,5,'Kab. Tebo'),
	(96,5,'Kab. Bungo'),
	(97,5,'Kota Jambi'),
	(98,5,'Kota Sungai Penuh'),
	(99,6,'Kab. Ogan Komering Ulu'),
	(100,6,'Kab. Ogan Komering Ilir'),
	(101,6,'Kab. Muara Enim'),
	(102,6,'Kab. Lahat'),
	(103,6,'Kab. Musi Rawas'),
	(104,6,'Kab. Musi Banyuasin'),
	(105,6,'Kab. Banyu Asin'),
	(106,6,'Kab. Ogan Komering Ulu Selatan'),
	(107,6,'Kab. Ogan Komering Ulu Timur'),
	(108,6,'Kab. Ogan Ilir'),
	(109,6,'Kab. Empat Lawang'),
	(110,6,'Kota Palembang'),
	(111,6,'Kota Prabumulih'),
	(112,6,'Kota Pagar Alam'),
	(113,6,'Kota Lubuklinggau'),
	(114,7,'Kab. Bengkulu Selatan'),
	(115,7,'Kab. Rejang Lebong'),
	(116,7,'Kab. Bengkulu Utara'),
	(117,7,'Kab. Kaur'),
	(118,7,'Kab. Seluma'),
	(119,7,'Kab. Mukomuko'),
	(120,7,'Kab. Lebong'),
	(121,7,'Kab. Kepahiang'),
	(122,7,'Kab. Bengkulu Tengah'),
	(123,7,'Kota Bengkulu'),
	(124,8,'Kab. Lampung Barat'),
	(125,8,'Kab. Tanggamus'),
	(126,8,'Kab. Lampung Selatan'),
	(127,8,'Kab. Lampung Timur'),
	(128,8,'Kab. Lampung Tengah'),
	(129,8,'Kab. Lampung Utara'),
	(130,8,'Kab. Way Kanan'),
	(131,8,'Kab. Tulangbawang'),
	(132,8,'Kab. Pesawaran'),
	(133,8,'Kab. Pringsewu'),
	(134,8,'Kab. Mesuji'),
	(135,8,'Kab. Tulang Bawang Barat'),
	(136,8,'Kab. Pesisir Barat'),
	(137,8,'Kota Bandar Lampung'),
	(138,8,'Kota Metro'),
	(139,9,'Kab. Bangka'),
	(140,9,'Kab. Belitung'),
	(141,9,'Kab. Bangka Barat'),
	(142,9,'Kab. Bangka Tengah'),
	(143,9,'Kab. Bangka Selatan'),
	(144,9,'Kab. Belitung Timur'),
	(145,9,'Kota Pangkal Pinang'),
	(146,10,'Kab. Karimun'),
	(147,10,'Kab. Bintan'),
	(148,10,'Kab. Natuna'),
	(149,10,'Kab. Lingga'),
	(150,10,'Kab. Kepulauan Anambas'),
	(151,10,'Kota B A T A M'),
	(152,10,'Kota Tanjung Pinang'),
	(153,11,'Kab. Kepulauan Seribu'),
	(154,11,'Kota Jakarta Selatan'),
	(155,11,'Kota Jakarta Timur'),
	(156,11,'Kota Jakarta Pusat'),
	(157,11,'Kota Jakarta Barat'),
	(158,11,'Kota Jakarta Utara'),
	(159,12,'Kab. Bogor'),
	(160,12,'Kab. Sukabumi'),
	(161,12,'Kab. Cianjur'),
	(162,12,'Kab. Bandung'),
	(163,12,'Kab. Garut'),
	(164,12,'Kab. Tasikmalaya'),
	(165,12,'Kab. Ciamis'),
	(166,12,'Kab. Kuningan'),
	(167,12,'Kab. Cirebon'),
	(168,12,'Kab. Majalengka'),
	(169,12,'Kab. Sumedang'),
	(170,12,'Kab. Indramayu'),
	(171,12,'Kab. Subang'),
	(172,12,'Kab. Purwakarta'),
	(173,12,'Kab. Karawang'),
	(174,12,'Kab. Bekasi'),
	(175,12,'Kab. Bandung Barat'),
	(176,12,'Kab. Pangandaran'),
	(177,12,'Kota Bogor'),
	(178,12,'Kota Sukabumi'),
	(179,12,'Kota Bandung'),
	(180,12,'Kota Cirebon'),
	(181,12,'Kota Bekasi'),
	(182,12,'Kota Depok'),
	(183,12,'Kota Cimahi'),
	(184,12,'Kota Tasikmalaya'),
	(185,12,'Kota Banjar'),
	(186,13,'Kab. Cilacap'),
	(187,13,'Kab. Banyumas'),
	(188,13,'Kab. Purbalingga'),
	(189,13,'Kab. Banjarnegara'),
	(190,13,'Kab. Kebumen'),
	(191,13,'Kab. Purworejo'),
	(192,13,'Kab. Wonosobo'),
	(193,13,'Kab. Magelang'),
	(194,13,'Kab. Boyolali'),
	(195,13,'Kab. Klaten'),
	(196,13,'Kab. Sukoharjo'),
	(197,13,'Kab. Wonogiri'),
	(198,13,'Kab. Karanganyar'),
	(199,13,'Kab. Sragen'),
	(200,13,'Kab. Grobogan'),
	(201,13,'Kab. Blora'),
	(202,13,'Kab. Rembang'),
	(203,13,'Kab. Pati'),
	(204,13,'Kab. Kudus'),
	(205,13,'Kab. Jepara'),
	(206,13,'Kab. Demak'),
	(207,13,'Kab. Semarang'),
	(208,13,'Kab. Temanggung'),
	(209,13,'Kab. Kendal'),
	(210,13,'Kab. Batang'),
	(211,13,'Kab. Pekalongan'),
	(212,13,'Kab. Pemalang'),
	(213,13,'Kab. Tegal'),
	(214,13,'Kab. Brebes'),
	(215,13,'Kota Magelang'),
	(216,13,'Kota Surakarta'),
	(217,13,'Kota Salatiga'),
	(218,13,'Kota Semarang'),
	(219,13,'Kota Pekalongan'),
	(220,13,'Kota Tegal'),
	(221,14,'Kab. Kulon Progo'),
	(222,14,'Kab. Bantul'),
	(223,14,'Kab. Gunung Kidul'),
	(224,14,'Kab. Sleman'),
	(225,14,'Kota Yogyakarta'),
	(226,15,'Kab. Pacitan'),
	(227,15,'Kab. Ponorogo'),
	(228,15,'Kab. Trenggalek'),
	(229,15,'Kab. Tulungagung'),
	(230,15,'Kab. Blitar'),
	(231,15,'Kab. Kediri'),
	(232,15,'Kab. Malang'),
	(233,15,'Kab. Lumajang'),
	(234,15,'Kab. Jember'),
	(235,15,'Kab. Banyuwangi'),
	(236,15,'Kab. Bondowoso'),
	(237,15,'Kab. Situbondo'),
	(238,15,'Kab. Probolinggo'),
	(239,15,'Kab. Pasuruan'),
	(240,15,'Kab. Sidoarjo'),
	(241,15,'Kab. Mojokerto'),
	(242,15,'Kab. Jombang'),
	(243,15,'Kab. Nganjuk'),
	(244,15,'Kab. Madiun'),
	(245,15,'Kab. Magetan'),
	(246,15,'Kab. Ngawi'),
	(247,15,'Kab. Bojonegoro'),
	(248,15,'Kab. Tuban'),
	(249,15,'Kab. Lamongan'),
	(250,15,'Kab. Gresik'),
	(251,15,'Kab. Bangkalan'),
	(252,15,'Kab. Sampang'),
	(253,15,'Kab. Pamekasan'),
	(254,15,'Kab. Sumenep'),
	(255,15,'Kota Kediri'),
	(256,15,'Kota Blitar'),
	(257,15,'Kota Malang'),
	(258,15,'Kota Probolinggo'),
	(259,15,'Kota Pasuruan'),
	(260,15,'Kota Mojokerto'),
	(261,15,'Kota Madiun'),
	(262,15,'Kota Surabaya'),
	(263,15,'Kota Batu'),
	(264,16,'Kab. Pandeglang'),
	(265,16,'Kab. Lebak'),
	(266,16,'Kab. Tangerang'),
	(267,16,'Kab. Serang'),
	(268,16,'Kota Tangerang'),
	(269,16,'Kota Cilegon'),
	(270,16,'Kota Serang'),
	(271,16,'Kota Tangerang Selatan'),
	(272,17,'Kab. Jembrana'),
	(273,17,'Kab. Tabanan'),
	(274,17,'Kab. Badung'),
	(275,17,'Kab. Gianyar'),
	(276,17,'Kab. Klungkung'),
	(277,17,'Kab. Bangli'),
	(278,17,'Kab. Karang Asem'),
	(279,17,'Kab. Buleleng'),
	(280,17,'Kota Denpasar'),
	(281,18,'Kab. Lombok Barat'),
	(282,18,'Kab. Lombok Tengah'),
	(283,18,'Kab. Lombok Timur'),
	(284,18,'Kab. Sumbawa'),
	(285,18,'Kab. Dompu'),
	(286,18,'Kab. Bima'),
	(287,18,'Kab. Sumbawa Barat'),
	(288,18,'Kab. Lombok Utara'),
	(289,18,'Kota Mataram'),
	(290,18,'Kota Bima'),
	(291,19,'Kab. Sumba Barat'),
	(292,19,'Kab. Sumba Timur'),
	(293,19,'Kab. Kupang'),
	(294,19,'Kab. Timor Tengah Selatan'),
	(295,19,'Kab. Timor Tengah Utara'),
	(296,19,'Kab. Belu'),
	(297,19,'Kab. Alor'),
	(298,19,'Kab. Lembata'),
	(299,19,'Kab. Flores Timur'),
	(300,19,'Kab. Sikka'),
	(301,19,'Kab. Ende'),
	(302,19,'Kab. Ngada'),
	(303,19,'Kab. Manggarai'),
	(304,19,'Kab. Rote Ndao'),
	(305,19,'Kab. Manggarai Barat'),
	(306,19,'Kab. Sumba Tengah'),
	(307,19,'Kab. Sumba Barat Daya'),
	(308,19,'Kab. Nagekeo'),
	(309,19,'Kab. Manggarai Timur'),
	(310,19,'Kab. Sabu Raijua'),
	(311,19,'Kota Kupang'),
	(312,20,'Kab. Sambas'),
	(313,20,'Kab. Bengkayang'),
	(314,20,'Kab. Landak'),
	(315,20,'Kab. Pontianak'),
	(316,20,'Kab. Sanggau'),
	(317,20,'Kab. Ketapang'),
	(318,20,'Kab. Sintang'),
	(319,20,'Kab. Kapuas Hulu'),
	(320,20,'Kab. Sekadau'),
	(321,20,'Kab. Melawi'),
	(322,20,'Kab. Kayong Utara'),
	(323,20,'Kab. Kubu Raya'),
	(324,20,'Kota Pontianak'),
	(325,20,'Kota Singkawang'),
	(326,21,'Kab. Kotawaringin Barat'),
	(327,21,'Kab. Kotawaringin Timur'),
	(328,21,'Kab. Kapuas'),
	(329,21,'Kab. Barito Selatan'),
	(330,21,'Kab. Barito Utara'),
	(331,21,'Kab. Sukamara'),
	(332,21,'Kab. Lamandau'),
	(333,21,'Kab. Seruyan'),
	(334,21,'Kab. Katingan'),
	(335,21,'Kab. Pulang Pisau'),
	(336,21,'Kab. Gunung Mas'),
	(337,21,'Kab. Barito Timur'),
	(338,21,'Kab. Murung Raya'),
	(339,21,'Kota Palangka Raya'),
	(340,22,'Kab. Tanah Laut'),
	(341,22,'Kab. Kota Baru'),
	(342,22,'Kab. Banjar'),
	(343,22,'Kab. Barito Kuala'),
	(344,22,'Kab. Tapin'),
	(345,22,'Kab. Hulu Sungai Selatan'),
	(346,22,'Kab. Hulu Sungai Tengah'),
	(347,22,'Kab. Hulu Sungai Utara'),
	(348,22,'Kab. Tabalong'),
	(349,22,'Kab. Tanah Bumbu'),
	(350,22,'Kab. Balangan'),
	(351,22,'Kota Banjarmasin'),
	(352,22,'Kota Banjar Baru'),
	(353,23,'Kab. Paser'),
	(354,23,'Kab. Kutai Barat'),
	(355,23,'Kab. Kutai Kartanegara'),
	(356,23,'Kab. Kutai Timur'),
	(357,23,'Kab. Berau'),
	(358,23,'Kab. Penajam Paser Utara'),
	(359,23,'Kota Balikpapan'),
	(360,23,'Kota Samarinda'),
	(361,23,'Kota Bontang'),
	(362,24,'Kab. Malinau'),
	(363,24,'Kab. Bulungan'),
	(364,24,'Kab. Tana Tidung'),
	(365,24,'Kab. Nunukan'),
	(366,24,'Kota Tarakan'),
	(367,25,'Kab. Bolaang Mongondow'),
	(368,25,'Kab. Minahasa'),
	(369,25,'Kab. Kepulauan Sangihe'),
	(370,25,'Kab. Kepulauan Talaud'),
	(371,25,'Kab. Minahasa Selatan'),
	(372,25,'Kab. Minahasa Utara'),
	(373,25,'Kab. Bolaang Mongondow Utara'),
	(374,25,'Kab. Siau Tagulandang Biaro'),
	(375,25,'Kab. Minahasa Tenggara'),
	(376,25,'Kab. Bolaang Mongondow Selatan'),
	(377,25,'Kab. Bolaang Mongondow Timur'),
	(378,25,'Kota Manado'),
	(379,25,'Kota Bitung'),
	(380,25,'Kota Tomohon'),
	(381,25,'Kota Kotamobagu'),
	(382,26,'Kab. Banggai Kepulauan'),
	(383,26,'Kab. Banggai'),
	(384,26,'Kab. Morowali'),
	(385,26,'Kab. Poso'),
	(386,26,'Kab. Donggala'),
	(387,26,'Kab. Toli-toli'),
	(388,26,'Kab. Buol'),
	(389,26,'Kab. Parigi Moutong'),
	(390,26,'Kab. Tojo Una-una'),
	(391,26,'Kab. Sigi'),
	(392,26,'Kota Palu'),
	(393,27,'Kab. Kepulauan Selayar'),
	(394,27,'Kab. Bulukumba'),
	(395,27,'Kab. Bantaeng'),
	(396,27,'Kab. Jeneponto'),
	(397,27,'Kab. Takalar'),
	(398,27,'Kab. Gowa'),
	(399,27,'Kab. Sinjai'),
	(400,27,'Kab. Maros'),
	(401,27,'Kab. Pangkajene Dan Kepulauan'),
	(402,27,'Kab. Barru'),
	(403,27,'Kab. Bone'),
	(404,27,'Kab. Soppeng'),
	(405,27,'Kab. Wajo'),
	(406,27,'Kab. Sidenreng Rappang'),
	(407,27,'Kab. Pinrang'),
	(408,27,'Kab. Enrekang'),
	(409,27,'Kab. Luwu'),
	(410,27,'Kab. Tana Toraja'),
	(411,27,'Kab. Luwu Utara'),
	(412,27,'Kab. Luwu Timur'),
	(413,27,'Kab. Toraja Utara'),
	(414,27,'Kota Makassar'),
	(415,27,'Kota Parepare'),
	(416,27,'Kota Palopo'),
	(417,28,'Kab. Buton'),
	(418,28,'Kab. Muna'),
	(419,28,'Kab. Konawe'),
	(420,28,'Kab. Kolaka'),
	(421,28,'Kab. Konawe Selatan'),
	(422,28,'Kab. Bombana'),
	(423,28,'Kab. Wakatobi'),
	(424,28,'Kab. Kolaka Utara'),
	(425,28,'Kab. Buton Utara'),
	(426,28,'Kab. Konawe Utara'),
	(427,28,'Kota Kendari'),
	(428,28,'Kota Baubau'),
	(429,29,'Kab. Boalemo'),
	(430,29,'Kab. Gorontalo'),
	(431,29,'Kab. Pohuwato'),
	(432,29,'Kab. Bone Bolango'),
	(433,29,'Kab. Gorontalo Utara'),
	(434,29,'Kota Gorontalo'),
	(435,30,'Kab. Majene'),
	(436,30,'Kab. Polewali Mandar'),
	(437,30,'Kab. Mamasa'),
	(438,30,'Kab. Mamuju'),
	(439,30,'Kab. Mamuju Utara'),
	(440,31,'Kab. Maluku Tenggara Barat'),
	(441,31,'Kab. Maluku Tenggara'),
	(442,31,'Kab. Maluku Tengah'),
	(443,31,'Kab. Buru'),
	(444,31,'Kab. Kepulauan Aru'),
	(445,31,'Kab. Seram Bagian Barat'),
	(446,31,'Kab. Seram Bagian Timur'),
	(447,31,'Kab. Maluku Barat Daya'),
	(448,31,'Kab. Buru Selatan'),
	(449,31,'Kota Ambon'),
	(450,31,'Kota Tual'),
	(451,32,'Kab. Halmahera Barat'),
	(452,32,'Kab. Halmahera Tengah'),
	(453,32,'Kab. Kepulauan Sula'),
	(454,32,'Kab. Halmahera Selatan'),
	(455,32,'Kab. Halmahera Utara'),
	(456,32,'Kab. Halmahera Timur'),
	(457,32,'Kab. Pulau Morotai'),
	(458,32,'Kota Ternate'),
	(459,32,'Kota Tidore Kepulauan'),
	(460,33,'Kab. Fakfak'),
	(461,33,'Kab. Kaimana'),
	(462,33,'Kab. Teluk Wondama'),
	(463,33,'Kab. Teluk Bintuni'),
	(464,33,'Kab. Manokwari'),
	(465,33,'Kab. Sorong Selatan'),
	(466,33,'Kab. Sorong'),
	(467,33,'Kab. Raja Ampat'),
	(468,33,'Kab. Tambrauw'),
	(469,33,'Kab. Maybrat'),
	(470,33,'Kota Sorong'),
	(471,34,'Kab. Merauke'),
	(472,34,'Kab. Jayawijaya'),
	(473,34,'Kab. Jayapura'),
	(474,34,'Kab. Nabire'),
	(475,34,'Kab. Kepulauan Yapen'),
	(476,34,'Kab. Biak Numfor'),
	(477,34,'Kab. Paniai'),
	(478,34,'Kab. Puncak Jaya'),
	(479,34,'Kab. Mimika'),
	(480,34,'Kab. Boven Digoel'),
	(481,34,'Kab. Mappi'),
	(482,34,'Kab. Asmat'),
	(483,34,'Kab. Yahukimo'),
	(484,34,'Kab. Pegunungan Bintang'),
	(485,34,'Kab. Tolikara'),
	(486,34,'Kab. Sarmi'),
	(487,34,'Kab. Keerom'),
	(488,34,'Kab. Waropen'),
	(489,34,'Kab. Supiori'),
	(490,34,'Kab. Mamberamo Raya'),
	(491,34,'Kab. Nduga'),
	(492,34,'Kab. Lanny Jaya'),
	(493,34,'Kab. Mamberamo Tengah'),
	(494,34,'Kab. Yalimo'),
	(495,34,'Kab. Puncak'),
	(496,34,'Kab. Dogiyai'),
	(497,34,'Kab. Intan Jaya'),
	(498,34,'Kab. Deiyai'),
	(499,34,'Kota Jayapura');

/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
