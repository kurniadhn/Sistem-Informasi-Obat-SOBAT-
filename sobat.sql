/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : sobat

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 17/06/2022 07:48:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for artikel
-- ----------------------------
DROP TABLE IF EXISTS `artikel`;
CREATE TABLE `artikel`  (
  `id_artikel` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `date` date NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_artikel`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of artikel
-- ----------------------------
INSERT INTO `artikel` VALUES (1, 'Penelitian Klaim Obat Ini Hentikan Pertumbuhan Tumor dan Tidurkan Sel Kanker', '2022-06-16', 'Sebuah pendekatan terapeutik baru diklaim bisa mencegah pertumbuhan tumor metastatik pada tikus. Obat itu juga membuat sel kanker ada dalam keadaan tidak aktif sehingga tidak dapat berkembang biak.', 'obat-pereda-sakit-dapat-meningkatkan-risiko-pendarahan-ilustrasi_211027222136-206.jpg', 'https://www.republika.co.id/berita/rbtnc9463/penelitian-klaim-obat-ini-hentikan-pertumbuhan-tumor-dan-tidurkan-sel-kanker');
INSERT INTO `artikel` VALUES (2, 'Tak Banyak yang Tahu, 6 Penyakit Kronis Ini Bisa Dideteksi dari Mata', '2022-06-16', 'Melakukan pemeriksaan rutin bukan hanya untuk mengetahui kondisi kesehatan mata, tapi juga seluruh bagian tubuh. Mata bisa menjadi jendela untuk melihat gangguan yang terjadi pada pembuluh darah, saraf, dan jaringan ikat di seluruh tubuh.', 'mata-merah-keratokonjungtivitis-20211130031716.jpg', 'https://health.grid.id/read/353242872/tak-banyak-yang-tahu-6-penyakit-kronis-ini-bisa-dideteksi-dari-mata?page=all');
INSERT INTO `artikel` VALUES (3, 'Hati-hati, Makan Terlalu Cepat Bisa Menggangu Sistem Pencernaan', '2022-06-16', 'Sistem pencernaan memiliki peran besar dalam tubuh, mulai dari mencerna makanan menjadi nutrisi dan energi bagi tubuh, dan bertanggung jawab untuk memisahkan dan membuang sisa makanan yang tidak bisa dicerna oleh tubuh.', '19517-ilustrasi-makan-bersamapexelsfauxels.jpg', 'https://www.suara.com/health/2022/05/12/061815/hati-hati-makan-terlalu-cepat-bisa-menggangu-sistem-pencernaan');
INSERT INTO `artikel` VALUES (4, '10 Jenis Penyakit Mata yang Umum Terjadi dan Cara Mengatasinya, Jangan Asal Diobati', '2022-06-16', 'Jenis penyakit mata yang umum terjadi perlu untuk diketahui agar bisa mengobati sesuai dengan keluhan sakitnya. Mata merupakan salah satu panca indera yang membantu untuk melihat. Tentu saja mata menjadi salah satu bagian tubuh yang penting bagi kehidupan', '018635600_1505377379-All_About_Vision.jpg', 'https://hot.liputan6.com/read/4613184/10-jenis-penyakit-mata-yang-umum-terjadi-dan-cara-mengatasinya-jangan-asal-diobati');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `setting` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for image
-- ----------------------------
DROP TABLE IF EXISTS `image`;
CREATE TABLE `image`  (
  `id_image` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `id_paket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_image`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of image
-- ----------------------------
INSERT INTO `image` VALUES (1, 'Alkes Pencegahan COVID-19 Paket1.jpg', '1');
INSERT INTO `image` VALUES (2, 'Alkes Pencegahan COVID-19 Paket2.jpg', '2');
INSERT INTO `image` VALUES (3, 'P3K Luka Robek Paket1.jpg', '3');
INSERT INTO `image` VALUES (4, 'P3K Luka Robek Paket2.jpg', '4');
INSERT INTO `image` VALUES (5, 'Paket Batuk 1.png', '5');
INSERT INTO `image` VALUES (6, 'Paket Batuk 2.png', '11');
INSERT INTO `image` VALUES (7, 'Pilek Paket1.jpg', '12');
INSERT INTO `image` VALUES (8, 'Pilek Paket2.jpg', '13');
INSERT INTO `image` VALUES (9, 'Saluran Pencernaan Gastroenteritis Paket1.jpg', '14');
INSERT INTO `image` VALUES (10, 'Saluran Pencernaan Gastroenteritis Paket2.jpg', '15');

-- ----------------------------
-- Table structure for jenis_obat
-- ----------------------------
DROP TABLE IF EXISTS `jenis_obat`;
CREATE TABLE `jenis_obat`  (
  `id_jenis` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jenis`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jenis_obat
-- ----------------------------
INSERT INTO `jenis_obat` VALUES (1, 'Alat Kesehatan');
INSERT INTO `jenis_obat` VALUES (2, 'Antibiotik Anti Jamur Antivirus');
INSERT INTO `jenis_obat` VALUES (3, 'Batuk & Flu');
INSERT INTO `jenis_obat` VALUES (4, 'Demam Sakit Kepala');
INSERT INTO `jenis_obat` VALUES (5, 'Mata');
INSERT INTO `jenis_obat` VALUES (6, 'Minyak Angin & Balsam');
INSERT INTO `jenis_obat` VALUES (7, 'Mulut Tenggorokan dan Pernafasan');
INSERT INTO `jenis_obat` VALUES (8, 'P3K');
INSERT INTO `jenis_obat` VALUES (9, 'Saluran Pencernaan');
INSERT INTO `jenis_obat` VALUES (10, 'Tekanan Darah Tinggi');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2022_05_23_091402_create_artikel_table', 1);
INSERT INTO `migrations` VALUES (6, '2022_05_23_092723_create_jenis_obat_table', 1);
INSERT INTO `migrations` VALUES (7, '2022_05_23_092736_create_obat_table', 1);
INSERT INTO `migrations` VALUES (8, '2022_05_23_102156_create_setting_table', 1);
INSERT INTO `migrations` VALUES (9, '2022_05_23_103820_create_contact_table', 1);
INSERT INTO `migrations` VALUES (10, '2022_06_06_144940_create_paket_obat_table', 2);
INSERT INTO `migrations` VALUES (11, '2022_06_06_151833_create_paket_obat_detail_table', 3);
INSERT INTO `migrations` VALUES (12, '2022_06_16_093238_create_image_table', 4);
INSERT INTO `migrations` VALUES (13, '2022_06_16_213942_create_transaksi_table', 5);

-- ----------------------------
-- Table structure for obat
-- ----------------------------
DROP TABLE IF EXISTS `obat`;
CREATE TABLE `obat`  (
  `id_obat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `obat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` enum('Botol','Box','Pack','Piece','Pot','Sachet','Strip','Suppositoria','Tablet','Test Kit','Tube','Unit') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenis` int(11) NOT NULL,
  PRIMARY KEY (`id_obat`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 238 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of obat
-- ----------------------------
INSERT INTO `obat` VALUES (1, 'One med test kehamilan strip', 'Piece', '3.000', 'Test Kehamilan.jpg', 1);
INSERT INTO `obat` VALUES (2, 'Clungene covid-19 antigen rapid test cassete 1 kit', 'Test Kit', '99.000', 'rapid.png', 1);
INSERT INTO `obat` VALUES (3, 'Thermo one thermometer alpha', 'Piece', '30.000', 'thermo.png', 1);
INSERT INTO `obat` VALUES (4, 'Safety thermometer digital MC-201', 'Unit', '30.000', 'saftey.png', 1);
INSERT INTO `obat` VALUES (5, 'Transofix', 'Piece', '15.000', 'transofix.webp', 1);
INSERT INTO `obat` VALUES (6, 'Newlungene covid-19 antigen rapid test cassete', 'Test Kit', '40.000', 'rapid2.jpg', 1);
INSERT INTO `obat` VALUES (7, 'Q-life Menstual Care Patch', 'Sachet', '19.500', 'ql.jpg', 1);
INSERT INTO `obat` VALUES (8, 'Sensi masker duckbill (50 pieces)', 'Box', '140.000', 'underpad.jpg', 1);
INSERT INTO `obat` VALUES (9, 'Sensi underpad (10 pieces)', 'Pack', '40.000', 'sensi.jpg', 1);
INSERT INTO `obat` VALUES (10, 'Omron compreessor nebulizer Ne-C101', 'Box', '490.000', 'omron.jpg', 1);
INSERT INTO `obat` VALUES (11, 'Onestep HIV test', 'Piece', '98.000', 'onestep.jpg', 1);
INSERT INTO `obat` VALUES (12, 'Surgical Gloves steril size 7,5 (2 pieces)', 'Pack', '20.000', 'surgical.jpg', 1);
INSERT INTO `obat` VALUES (13, 'Curatix oral wound dressing (10 pieces)', 'Unit', '130.000', 'Curatick.png', 1);
INSERT INTO `obat` VALUES (14, 'Face shield non medis dewasa', 'Unit', '10.000', 'Facesh.jpeg', 1);
INSERT INTO `obat` VALUES (15, 'Amoxicillin (500mg)', 'Strip', '4.500', 'Amoxicillin 500mg.jpg', 2);
INSERT INTO `obat` VALUES (16, 'Azithromycin (500mg)', 'Tablet', '5.000', 'Azithromycin 500 mg.jpg', 2);
INSERT INTO `obat` VALUES (17, 'Cerixime sirup (30ml)', 'Botol', '35.000', 'Cerixime sirup 30ml.jpg', 2);
INSERT INTO `obat` VALUES (18, 'Clindamycin (300mg)', 'Strip', '24.000', 'Clindamycin 300 mg.jpg', 2);
INSERT INTO `obat` VALUES (19, 'Urinter (400mg)', 'Strip', '87.000', 'Urinter 400mg.jpg', 2);
INSERT INTO `obat` VALUES (20, 'Amoxsan (250mg)', 'Strip', '20.000', 'Amoxsan 250 mg.jpg', 2);
INSERT INTO `obat` VALUES (21, 'Biothicol (500mg)', 'Strip', '59.000', 'Biothicol 500mg.jpg', 2);
INSERT INTO `obat` VALUES (22, 'Sporacid (100mg)', 'Strip', '25.000', 'Sporacid kapsul 100mg.jpg', 2);
INSERT INTO `obat` VALUES (23, 'Cravox table (500mg)', 'Tablet', '42.000', 'Cravox tablet 500mg.jpg', 2);
INSERT INTO `obat` VALUES (24, 'Erythromicin (250mg)', 'Strip', '7.000', 'Erythromicin 250mg.jpg', 2);
INSERT INTO `obat` VALUES (25, 'Acyclovir (400mg)', 'Strip', '10.000', 'Acyclovir 400mg.jpg', 2);
INSERT INTO `obat` VALUES (26, 'Acifar (400mg)', 'Strip', '21.000', 'Acifar 400 mg.jpg', 2);
INSERT INTO `obat` VALUES (27, 'Acyclovir (200mg)', 'Strip', '7.500', 'Acyclovir 200mg.jpg', 2);
INSERT INTO `obat` VALUES (28, 'Isoprinosine (60 ml) ', 'Botol', '120.000', 'Isoprinosine sirup 60 ml.jpg', 2);
INSERT INTO `obat` VALUES (29, 'Fluvir (75mg) ', 'Strip', '201.500', 'Fluvir 75mg.jpg', 2);
INSERT INTO `obat` VALUES (30, 'Herclov (500 mg)', 'Strip', '201.500', 'Herclov 500 mg.jpg', 2);
INSERT INTO `obat` VALUES (31, 'Laprosin (250 mg/5ml 60ml)', 'Botol', '92.500', 'Laprosin sirup 250 mgper5ml 60ml.jpg', 2);
INSERT INTO `obat` VALUES (32, 'Heplav (100 mg)', 'Tablet', '7.000', 'Heplav tablet 100 mg.jpg', 2);
INSERT INTO `obat` VALUES (33, 'Pronovir (250mg/5ml 60 ml)', 'Botol', '89.000', 'Pronovir sirup 250mgper5ml 60 ml.jpg', 2);
INSERT INTO `obat` VALUES (34, 'TKV (0,5mg)', 'Strip', '350.000', 'TKV 0,5mg 10 tablet.jpg', 2);
INSERT INTO `obat` VALUES (35, 'Rhinos Junior Sirup 60ml', 'Botol', '65.000', 'Rhinos Junior Sirup 60ml.jpg', 3);
INSERT INTO `obat` VALUES (36, 'Acetylcysteine 200mg 10 kapsul', 'Strip', '20.000', 'Acetylcysteine 200mg.jpg', 3);
INSERT INTO `obat` VALUES (37, 'Expecol Sirup 120ml', 'Botol', '23.000', 'Expecol Sirup 120.jpg', 3);
INSERT INTO `obat` VALUES (38, 'Neozep Forte 4 tablet', 'Strip', '2.500', 'Neozep Forte 4 tablet.png', 3);
INSERT INTO `obat` VALUES (39, 'Sanadryl DMP sirup', 'Strip', '30.000', 'Sanadryl DMP sirup per botol.jpg', 3);
INSERT INTO `obat` VALUES (40, 'Hufagrip Flu & Batuk', 'Botol', '26.000', 'Hufagrip Flu & Batuk sirup 60ml.jpg', 3);
INSERT INTO `obat` VALUES (41, 'Ambroxol 30 mg 10 tablet', 'Strip', '2.500', 'Ambroxol 30 mg 10 tablet.jpg', 3);
INSERT INTO `obat` VALUES (42, 'Decolgen 4 Tablet', 'Strip', '3.000', 'Decolgen 4 Tablet.jpg', 3);
INSERT INTO `obat` VALUES (43, 'Alpara 10 kaplet', 'Strip', '10.000', 'Alpara 10 kaplet.jpg', 3);
INSERT INTO `obat` VALUES (44, 'Demacolin 10 tablet', 'Strip', '6.500', 'Demacolin 10 tablet.jpg', 3);
INSERT INTO `obat` VALUES (45, 'Ambroxol sirup 15 mg / 5 ml 60 ml', 'Botol', '10.000', 'Ambroxol sirup 15 mg.jpg', 3);
INSERT INTO `obat` VALUES (46, 'OBH Combi Anak Batuk Plus Flu Strawberry 60 ml ', 'Botol', '17.500', 'OBH Combi Anak Batuk Plus Flu Strawberry 60 ml.jpg', 3);
INSERT INTO `obat` VALUES (47, 'Prospan Sirup 70 ml', 'Botol', '102.000', 'Prospan Sirup 70 ml.jpg', 3);
INSERT INTO `obat` VALUES (48, 'Uni bebi Cough sirup 60 ml', 'Botol', '6.500', 'Uni bebi Cough sirup 60 ml.jpg', 3);
INSERT INTO `obat` VALUES (49, 'Decolsin 4 kapsul', 'Strip', '3.500', 'Decolsin 4 kapsul.jpg', 3);
INSERT INTO `obat` VALUES (50, 'Procold Flu 6 kaplet', 'Strip', '4.500', 'Procold Flu 6 kaplet.jpg', 3);
INSERT INTO `obat` VALUES (51, 'Decolgen Fx 10 tablet', 'Strip', '7.000', 'Decolgen Fx 10 tablet.jpg', 3);
INSERT INTO `obat` VALUES (52, 'Vicks Formula 44 Anak Sirup 27 ml', 'Botol', '11.000', 'Vicks Formula 44 Anak Sirup 27 ml.jpeg', 3);
INSERT INTO `obat` VALUES (53, 'Vicks formula 44 Sirup 54 ml', 'Botol', '20.000', 'Vicks formula 44 Sirup 54 ml.jpg', 3);
INSERT INTO `obat` VALUES (54, 'Bisolvon Solution 50 ml', 'Botol', '107.500', 'Bisolvon Solution 50 ml.jpeg', 3);
INSERT INTO `obat` VALUES (55, 'Mixagrip Flu 4 Kaplet', 'Strip', '3.000', 'Mixagrip Flu 4 Kaplet.jpg', 3);
INSERT INTO `obat` VALUES (56, 'Laserin Sirup 110 ml', 'Botol', '24.000', 'Laserin Sirup 110 ml.jpg', 3);
INSERT INTO `obat` VALUES (57, 'Siladex Mucolytic & Ekspektoran sirup 100 ml', 'Botol', '21.000', 'Siladex Mucolytic & Ekspektoran sirup 100 ml.jpg', 3);
INSERT INTO `obat` VALUES (58, 'Ultra flu 4 tablet', 'Strip', '3.500', 'Ultra flu 4 tablet per strip.jpg', 3);
INSERT INTO `obat` VALUES (59, 'Mixagrib Flu dan Batuk 4 Kaplet', 'Strip', '3.000', 'Mixagrib Flu dan Batuk 4 Kaplet.jpg', 3);
INSERT INTO `obat` VALUES (60, 'AnKonidin  OBH sirup 30 ml', 'Botol', '8.500', 'AnKonidin  OBH sirup 30 ml.jpg', 3);
INSERT INTO `obat` VALUES (61, 'Bodrex flu dan batuk berdahak pe 4 kaplet ', 'Strip', '2.500', 'Bodrex flu dan batuk berdahak pe 4 kaplet.jpg', 3);
INSERT INTO `obat` VALUES (62, 'Bodrex Flu dan Batuk tidak berdahak pe 4 kaplet', 'Strip', '2.500', 'Bodrex Flu dan Batuk tidak berdahak pe 4 kaplet.jpg', 3);
INSERT INTO `obat` VALUES (63, 'Komix OBH Pe Sachet', 'Sachet', '2.000', 'Komix OBH Pe Sachet per sachet.jpg', 3);
INSERT INTO `obat` VALUES (64, 'Promadex Sirup 60 ml', 'Botol', '49.000', 'Promadex Sirup 60 ml.jpg', 3);
INSERT INTO `obat` VALUES (65, 'Woods Peppermint antitussive sirup 100 ml', 'Botol', '34.000', 'Woods Peppermint antitussive sirup 100 ml.jpg', 3);
INSERT INTO `obat` VALUES (66, 'Bodrexin pilek dan alergi Pe Sirup 56 ml', 'Botol', '10.000', 'Bodrexin pilek dan alergi Pe Sirup 56 ml.jpg', 3);
INSERT INTO `obat` VALUES (67, 'Decolsin Sirup 60 ml', 'Botol', '21.000', 'Decolsin Sirup 60 ml.jpg', 3);
INSERT INTO `obat` VALUES (68, 'Nasonex  Nasal spray 60ml', 'Botol', '290.500', 'Nasonex  Nasal spray 60 dosis per botol.jpg', 3);
INSERT INTO `obat` VALUES (69, 'Termorex Plus Sirup 60 ml', 'Botol', '18.500', 'Termorex Plus Sirup 60 ml.jpg', 3);
INSERT INTO `obat` VALUES (70, 'Woods Herbal Cough Medicine + Honey 60 ml', 'Botol', '22.000', 'Woods Herbal Cough Medicine Honey 60 ml.jpg', 3);
INSERT INTO `obat` VALUES (71, 'Konidin 4 tablet', 'Strip', '2.500', 'Konidin 4 tablet.jpg', 3);
INSERT INTO `obat` VALUES (72, 'Inza 4 tablet', 'Strip', '3.500', 'Inza 4 tablet.jpg', 3);
INSERT INTO `obat` VALUES (73, 'Komix Herbal 15 ml', 'Pack', '10.000', 'Komix Herbal 15 ml 4 botol.jpg', 3);
INSERT INTO `obat` VALUES (74, 'Laserin Sirup 60 ml', 'Botol', '13.500', 'Laserin Sirup 60 ml.jpg', 3);
INSERT INTO `obat` VALUES (75, 'Paramex Flu dan Batuk 4 Tablet', 'Strip', '2.500', 'Paramex Flu dan Batuk 4 Tablet.jpg', 3);
INSERT INTO `obat` VALUES (76, 'Termorex plus sirup 30ml', 'Botol', '11.500', 'Termorex plus sirup 30ml.jpeg', 3);
INSERT INTO `obat` VALUES (77, 'Alpara sirup 60 ml', 'Botol', '18.000', 'Alpara sirup 60 ml.jpeg', 3);
INSERT INTO `obat` VALUES (78, 'Flutamol-P 10 kapsul', 'Strip', '16.000', 'Flutamol-P 10 kapsul.jpg', 3);
INSERT INTO `obat` VALUES (79, 'Konidin OBH sachet 7ml', 'Sachet', '1.500', 'Konidin OBH sachet 7ml.jpg', 3);
INSERT INTO `obat` VALUES (80, 'Oxopect sirup 60 ml', 'Botol', '51.000', 'Oxopect sirup 60 ml.jpg', 3);
INSERT INTO `obat` VALUES (81, 'Sanaflu 4 kaplet', 'Strip', '2.500', 'Sanaflu 4 kaplet.jpg', 3);
INSERT INTO `obat` VALUES (82, 'Roverton siruo 60 ml', 'Botol', '14.000', 'Roverton sirup 60 ml.jpg', 3);
INSERT INTO `obat` VALUES (83, 'Brocon 10 kaplet', 'Strip', '7.000', 'Brocon 10 kaplet.jpg', 3);
INSERT INTO `obat` VALUES (84, 'Cap lang inhale', 'Piece', '8.500', 'Cap lang inhaler.jpg', 3);
INSERT INTO `obat` VALUES (85, 'Unibebi demam 100mg', 'Botol', '8.500', 'Unibebi demam 100mg per botol.jpg', 4);
INSERT INTO `obat` VALUES (86, 'Bodrexin demam sirup 60ml', 'Botol', '12.000', 'Bodrexin demam sirup 60ml.jpg', 4);
INSERT INTO `obat` VALUES (87, 'Ottopan drop', 'Botol', '43.000', 'Ottopan drop per botol.png', 4);
INSERT INTO `obat` VALUES (88, 'Bye bye fever anak', 'Piece', '13.000', 'Bye bye fever anak.jpg', 4);
INSERT INTO `obat` VALUES (89, 'Hansaplast cooling fever', 'Piece', '11.000', 'Hansaplast cooling fever per pieces.jpg', 4);
INSERT INTO `obat` VALUES (90, 'Panadol extra tablet 10 tablet', 'Strip', '14.000', 'Panadol extra tablet 10 tablet per strip.jpg', 4);
INSERT INTO `obat` VALUES (91, 'Paracetamol if 500 mg', 'Strip', '3.000', 'Paracetamol if 500 mg per strip.jpg', 4);
INSERT INTO `obat` VALUES (92, 'Paratusin tablet', 'Strip', '18.000', 'Paratusin tablet per strip.jpg', 4);
INSERT INTO `obat` VALUES (93, 'Panadol biru tablet 10 tablet', 'Strip', '12.500', 'Panadol biru tablet 10 tablet per strip.jpg', 4);
INSERT INTO `obat` VALUES (94, 'Panadol anak chew 10 tablet', 'Strip', '16.000', 'Panadol anak chew 10 tablet per strip.jpg', 4);
INSERT INTO `obat` VALUES (95, 'Paracetamol kimia farma 500 mg', 'Strip', '4.000', 'Paracetamol kimia farma 500 mg per strip.jpg', 4);
INSERT INTO `obat` VALUES (96, 'Dumin 500mg', 'Strip', '7.500', 'Dumin 500mg per strip.jpg', 4);
INSERT INTO `obat` VALUES (97, 'Proris 100mg/5ml 60ml', 'Botol', '33.000', 'Proris 100mg5ml 60ml per botol.jpg', 4);
INSERT INTO `obat` VALUES (98, 'Proris 200mg/5ml 50ml', 'Botol', '37.000', 'Proris 200mg5ml 50ml per botol.jpg', 4);
INSERT INTO `obat` VALUES (99, 'Bodrex tablet', 'Strip', '4.500', 'Bodrex tablet per strip.jpg', 4);
INSERT INTO `obat` VALUES (100, 'Poldamig tablet', 'Strip', '3.500', 'Poldamig tablet per strip.jpg', 4);
INSERT INTO `obat` VALUES (101, 'Erlamycetin plus eye drops 5 ml', 'Botol', '32.000', 'Erlamycetin plus eye drops 5 ml.jpg', 5);
INSERT INTO `obat` VALUES (102, 'Insto reguler eye drops 15 ml', 'Botol', '25.000', 'Insto regular eye drops 15 ml.jpg', 5);
INSERT INTO `obat` VALUES (103, 'Oxytetracyline 1% Eye oint 3,5 g', 'Tube', '5.000', 'Oxytetracyline 1% Eye oint 3,5 g.jpg', 5);
INSERT INTO `obat` VALUES (104, 'Erlamycetin 1% salep mata 3,5 g', 'Tube', '10.000', 'Erlamycetin 1% salep mata 3,5 g.jpg', 5);
INSERT INTO `obat` VALUES (105, 'Rohto cool eye drop 7 ml', 'Botol', '19.000', 'Rohto cool eye drop 7 mL.jpg', 5);
INSERT INTO `obat` VALUES (106, 'Insto dry eyes 7,5ml', 'Botol', '15.000', 'Insto dry eyes 7,5ml.jpg', 5);
INSERT INTO `obat` VALUES (107, 'Eyevit 6 table', 'Strip', '37.500', 'Eyevit 6 tablet.jpg', 5);
INSERT INTO `obat` VALUES (108, 'Genoint eye drops 5ml', 'Botol', '13.000', 'Genoint eye drops 5ml.jpg', 5);
INSERT INTO `obat` VALUES (109, 'Cendo vasacon minidose 0,6ml', 'Strip', '23.000', 'Cendo vasacon minidose 0,6ml.jpg', 5);
INSERT INTO `obat` VALUES (110, 'Cendo vernacel eye drop 5ml', 'Botol', '28.000', 'Cendo vernacel eye drop 5ml.jpg', 5);
INSERT INTO `obat` VALUES (111, 'Cravit 0,5% eye drops 5ml', 'Botol', '150.000', 'Cravit 0,5% eye drops 5ml.jpg', 5);
INSERT INTO `obat` VALUES (112, 'Eyevit sirup 60 m', 'Botol', '100.000', 'Eyevit sirup 60 ml per botol.jpg', 5);
INSERT INTO `obat` VALUES (113, 'Glaucon 250mg 20 tablet', 'Tablet', '100.000', 'Glaucon 250mg 20 tablet.jpg', 5);
INSERT INTO `obat` VALUES (114, 'Lanavision 12 kapsul', 'Box', '112.000', 'Lanavision 12 kapsul.jpg', 5);
INSERT INTO `obat` VALUES (115, 'Bralifex eye drops 5 ml', 'Botol', '50.000', 'Bralifex eye drops 5 ml.jpg', 5);
INSERT INTO `obat` VALUES (116, 'Bralifex plus eye drops 5 ml', 'Botol', '70.000', 'Bralifex plus eye drops 5 ml.jpg', 5);
INSERT INTO `obat` VALUES (117, 'Cendo eye lotion minidose 0,6ml', 'Strip', '50.000', 'Cendo eye lotion minidose 0,6ml.jpg', 5);
INSERT INTO `obat` VALUES (118, 'Cendo eyefresh mild minidose 0,6ml', 'Strip', '73.500', 'Cendo eyefresh mild minidose 0,6ml.jpg', 5);
INSERT INTO `obat` VALUES (119, 'Colme eye drops 8ml', 'Botol', '67.500', 'Colme eye drops 8ml.jpg', 5);
INSERT INTO `obat` VALUES (120, 'Duotrav eye drops 2,5 ml', 'Botol', '457.500', 'Duotrav eye drops 2,5 ml.jpg', 5);
INSERT INTO `obat` VALUES (121, 'Vicks vaporub 10g', 'Pot', '8.000', 'Vicks vaporub 10g per pot.jpg', 6);
INSERT INTO `obat` VALUES (122, 'Vicks vaporub 25g', 'Pot', '20.000', 'Vicks vaporub 25g per pot.jpg', 6);
INSERT INTO `obat` VALUES (123, 'Cap lang minyak kayu putih 120 ml', 'Botol', '40.000', 'Cap lang minyak kayu putih 120 ml per botol.jpg', 6);
INSERT INTO `obat` VALUES (124, 'Cap lang minyak kayu putih 30 ml', 'Botol', '10.000', 'Cap lang minyak kayu putih 30 ml per botol.jpg', 6);
INSERT INTO `obat` VALUES (125, 'Freshcare roll on minyak angin citrus 10 ml', 'Botol', '15.000', 'Freshcare roll on minyak angin citrus 10 ml per botol.jpg', 6);
INSERT INTO `obat` VALUES (126, 'Plossa inhaler & roll on eucalyptus 8 ml', 'Botol', '20.000', 'Plossa inhaler & roll on eucalyptus 8 ml per botol.jpg', 6);
INSERT INTO `obat` VALUES (127, 'Minyak tawon cc 20 ml', 'Botol', '19.000', 'Minyak tawon cc 20 ml per boto.jpg', 6);
INSERT INTO `obat` VALUES (128, 'Minyak tawon dd 30 ml', 'Botol', '32.000', 'Minyak tawon dd 30 ml per botol.jpg', 6);
INSERT INTO `obat` VALUES (129, 'Caplang minyak urut GPU Sereh 60 ml ', 'Botol', '16.000', 'Caplang minyak urut GPU Sereh 60 ml per botol.png', 6);
INSERT INTO `obat` VALUES (130, 'Air mancur parcok 75 ml', 'Botol', '19.000', 'Air mancur parcok 75 ml.jpg', 6);
INSERT INTO `obat` VALUES (131, 'Hot in DCL 120 g', 'Tube', '25.000', 'Hot in DCL 120 g per tube.jpg', 6);
INSERT INTO `obat` VALUES (132, 'Minyak angin cap kapak 28ml', 'Botol', '45.000', 'Minyak angin cap kapak 28ml per botol.jpg', 6);
INSERT INTO `obat` VALUES (133, 'Balsem otot geliga 40 g', 'Pot', '11.000', 'Balsem otot geliga 40 g per pot.jpg', 6);
INSERT INTO `obat` VALUES (134, 'Hot in cream botol 120 ml', 'Botol', '22.000', 'Hot in cream botol 120 ml per botol.jpg', 6);
INSERT INTO `obat` VALUES (135, 'Hot in cream pump 120 ml', 'Botol', '20.000', 'Hot in cream pump 120 ml per botol.jpg', 6);
INSERT INTO `obat` VALUES (136, 'Hot in cream tube 60 ml', 'Tube', '22.000', 'Hot in cream tube 60 ml per tube.jpg', 6);
INSERT INTO `obat` VALUES (137, 'Salonpas liniment 50ml', 'Botol', '15.000', 'Salonpas liniment 50ml per botol Salonpas liniment 50ml per botol.jpg', 6);
INSERT INTO `obat` VALUES (138, 'Balpirix extra kuat (hijau) balsam 20g ', 'Pot', '10.000', 'Balpirix extra kuat hijau balsam 20g per pot.jpg', 6);
INSERT INTO `obat` VALUES (139, 'Balpirix extra kuat (kuning) balsam 20g', 'Pot', '10.000', 'Balpirix extra kuat kuning balsam 20g per pot.jpg', 6);
INSERT INTO `obat` VALUES (140, 'Balpirix extra kuat (merah) balsam 20g', 'Pot', '10.000', 'Balpirix extra kuat merah balsam 20g per pot.jpg', 6);
INSERT INTO `obat` VALUES (141, 'Betadine mouthwash and gargle 190 ml', 'Botol', '36.000', 'Betadine mouthwash and gargle 190 ml.jpg', 7);
INSERT INTO `obat` VALUES (142, 'Aloclair plus gel 8ml', 'Tube', '100.000', 'Aloclair plus gel 8ml.jpg', 7);
INSERT INTO `obat` VALUES (143, 'Aloclair plus spray 15ml', 'Botol', '120.000', 'Aloclair plus spray 15ml.jpg', 7);
INSERT INTO `obat` VALUES (144, 'Minosep obat kumur 0,2% 60ml merah', 'Botol', '35.000', 'Minosep obat kumur 0,2% 60ml merah.png', 7);
INSERT INTO `obat` VALUES (145, 'Larutan cap badak botol 500ml', 'Botol', '8.500', 'Larutan cap badak botol 500ml.jpg', 7);
INSERT INTO `obat` VALUES (146, 'Dentasol drop 10ml', 'Botol', '8.000', 'Dentasol drop 10ml.jpg', 7);
INSERT INTO `obat` VALUES (147, 'Mycostatin Drops 12 ml ', 'Botol', '65.000', 'Mycostatin Drops 12 ml.webp', 7);
INSERT INTO `obat` VALUES (148, 'Hexadol Mint gargle 100 ml', 'Botol', '28.000', 'Hexadol Mint gargle 100 ml.jpg', 7);
INSERT INTO `obat` VALUES (149, 'Strepsil cool menthol 8 tablet', 'Sachet', '8.000', 'Strepsil cool menthol 8 tablet.webp', 7);
INSERT INTO `obat` VALUES (150, 'Strepsil honey lemon 8 tablet ', 'Sachet', '8.000', 'Strepsil honey lemon 8 tablet.jpg', 7);
INSERT INTO `obat` VALUES (151, 'Woods lozenges extra strong 6 butir', 'Sachet', '6.000', 'Woods lozenges extra strongn 6 butir.jpg', 7);
INSERT INTO `obat` VALUES (152, 'Listerine cool mint mouthwash 100ml ', 'Botol', '13.000', 'Listerine cool mint mouthwash 100ml.jpg', 7);
INSERT INTO `obat` VALUES (153, 'Total care mouthwash cool mint 250 ml', 'Botol', '20.000', 'Total care mouthwash cool mint 250 ml.jpg', 7);
INSERT INTO `obat` VALUES (154, 'Constantia Drop 12ml', 'Botol', '40.000', 'Constantia Drop 12ml.jpg', 7);
INSERT INTO `obat` VALUES (155, 'Orslim oral solution 0,2% 180ml', 'Botol', '35.000', 'Orslim oral solution 0,2% 180ml.jpeg', 7);
INSERT INTO `obat` VALUES (156, 'Salbutamol 4mg 10 tablet', 'Strip', '2.000', 'Salbutamol 4mg 10 tablet.jpg', 7);
INSERT INTO `obat` VALUES (157, 'Lasal sirup 100ml ', 'Botol', '30.000', 'Lasal sirup 100ml.jpg', 7);
INSERT INTO `obat` VALUES (158, 'Ataroc sirup 60ml', 'Botol', '55.000', 'Ataroc sirup 60ml.png', 7);
INSERT INTO `obat` VALUES (159, 'Salbutamol 4mg 10 tablet', 'Strip', '2.000', 'Salbutamol 4mg 10 tablet.jpg', 7);
INSERT INTO `obat` VALUES (160, 'Teosal 10 tablet', 'Strip', '2.500', 'Teosal 10 tablet.jpg', 7);
INSERT INTO `obat` VALUES (161, 'Neo napacin 4 tablet', 'Strip', '3.000', 'Neo napacin 4 tablet.jpg', 7);
INSERT INTO `obat` VALUES (162, 'Ventolin 2mg 10 tablet', 'Strip', '30.000', 'Ventolin 2mg 10 tablet.jpg', 7);
INSERT INTO `obat` VALUES (163, 'Asmasolon 4 tablet', 'Strip', '3.500', 'Asmasolon 4 tablet.jpg', 7);
INSERT INTO `obat` VALUES (164, 'Dipsamol inhaler ', 'Piece', '77.000', 'Dipsamol inhaler.jpg', 7);
INSERT INTO `obat` VALUES (165, 'Symbicort 80 mcg/4,5mcg 60 dosis ', 'Piece', '225.000', 'Symbicort 80 mcg 4,5mcg 60 dosis.jpg', 7);
INSERT INTO `obat` VALUES (166, 'Asthma soho 4 tablet', 'Strip', '2.500', 'Asthma soho 4 tablet.jpg', 7);
INSERT INTO `obat` VALUES (167, 'Berotec 0,1% inhalasi 50 ml', 'Botol', '300.000', 'Berotec 0,1% inhalasi 50 ml.jpg', 7);
INSERT INTO `obat` VALUES (168, 'Lasal nebu 2,5 mg/2,5 ml ', 'Piece', '10.000', 'Lasal nebu 2,5 mg 2,5 ml.jpeg', 7);
INSERT INTO `obat` VALUES (169, 'Theobron', 'Botol', '69.000', 'Theobron.jpg', 7);
INSERT INTO `obat` VALUES (170, 'Astifen sirup 60 ml', 'Botol', '14.000', 'Astifen sirup 60 ml.jpg', 7);
INSERT INTO `obat` VALUES (171, 'Kasa steril onemed 16 × 16 cm 10 pouch', 'Box', '18.000', 'kasa steril 16x16.jpg', 8);
INSERT INTO `obat` VALUES (172, 'Betadine solution 5 ml', 'Botol', '65.000', 'betadine solution 5 ml.jpg', 8);
INSERT INTO `obat` VALUES (173, 'Betadine solution 30ml', 'Botol', '28.000', 'betadine solution 30 ml.jpg', 8);
INSERT INTO `obat` VALUES (174, 'Rivanol Liquid 100ml', 'Botol', '5.000', 'RIVANOL LIQUID 100 ML.jpg', 8);
INSERT INTO `obat` VALUES (175, 'Hansaplast Roll kain 1.25cm × 1 M', 'Piece', '5.000', 'handsaplast rol kain.jpg', 8);
INSERT INTO `obat` VALUES (176, 'Betadine plester 5 lembar', 'Pack', '5.000', 'betadine plaster.jpg', 8);
INSERT INTO `obat` VALUES (177, 'Hansaplast Silvercare kain elastis 10 lembar', 'Pack', '5.000', 'handsaplast silvercare kain elastis 10 lembar.jpg', 8);
INSERT INTO `obat` VALUES (178, 'Hansaplast Kain elastis 20 lemba', 'Box', '10.500', 'handsaplast kain elastis 20 lembar.jpg', 8);
INSERT INTO `obat` VALUES (179, 'Tensocrepe 7.5cm × 4.5 m', 'Piece', '92.500', 'tensocrape 7.5cm × 4.5 m per piece.jpg', 8);
INSERT INTO `obat` VALUES (180, 'Betadine 10% salep 20g', 'Tube', '26.000', 'betadine 10% salep.jpg', 8);
INSERT INTO `obat` VALUES (181, 'Kapas pembalut 25 gr', 'Piece', '3.500', 'kapas pembalut 25 gr.jpg', 8);
INSERT INTO `obat` VALUES (182, 'Nexcare waterprofr transparent 3 lembar', 'Pack', '8.000', 'nexcare bandages waterproof 3m.jpg', 8);
INSERT INTO `obat` VALUES (183, 'Soft ice bag kompres', 'Piece', '33.000', 'Soft ice bag kompres.jpg', 8);
INSERT INTO `obat` VALUES (184, 'Betadine plester junior 5 lembar', 'Pack', '8.000', 'betadine junior 5 lembar.jpeg', 8);
INSERT INTO `obat` VALUES (185, 'Hansaplast spray antiseptik 50 ml', 'Botol', '35.000', 'handsaplast spray antiseptik 50 ml.jpeg', 8);
INSERT INTO `obat` VALUES (186, 'Oralit phapros 200mg 1 Sachet', 'Sachet', '600', 'oralit 200 phapros.jpg', 9);
INSERT INTO `obat` VALUES (187, 'Buscopan plus 4 tablet', 'Strip', '20.000', 'buscopan plus 4 tablet.jpg', 9);
INSERT INTO `obat` VALUES (188, 'Zinc 20mg 10 tablet', 'Strip', '8.500', 'zinc 20 mg 10 tablet.jpg', 9);
INSERT INTO `obat` VALUES (189, 'Lactulax Sirup 60 ml ', 'Botol', '62.000', 'Lactulax sirup 60 ml.jpg', 9);
INSERT INTO `obat` VALUES (190, 'Buscopan 10 mg 10 tablet', 'Strip', '40.000', 'buscopan tablet 10 mg.jpg', 9);
INSERT INTO `obat` VALUES (191, 'Microlax gel 5 ml', 'Tube', '25.000', 'Microlax enema gel 5 ml.jpg', 9);
INSERT INTO `obat` VALUES (192, 'Dulcolax 5 mg 4 tablet', 'Strip', '10.000', 'Dulcolax tablet 5 mg.jpg', 9);
INSERT INTO `obat` VALUES (193, 'Promag 12 tablet', 'Strip', '10.000', 'Promag 12 tablet per strip.jpg', 9);
INSERT INTO `obat` VALUES (194, 'Borraginol S Suppositoria', 'Suppositoria', '18.000', 'Borraginol-S Suppositoria.jpg', 9);
INSERT INTO `obat` VALUES (195, 'Mylanta sirup 50ml ', 'Botol', '20.000', 'Mylanta sirup 50 ml.jpg', 9);
INSERT INTO `obat` VALUES (196, 'Sanmag sirup 60 ml', 'Botol', '19.000', 'Sanmag syrup 60 ml.jpg', 9);
INSERT INTO `obat` VALUES (197, 'Antasida Doen Sirup 60 ml', 'Botol', '14.500', 'Antasida doen sirup 60 ml.jpg', 9);
INSERT INTO `obat` VALUES (198, 'Diapet 10 kapsul', 'Strip', '6.000', 'Diapet capsul petr strip isi 10 kapsul.jpg', 9);
INSERT INTO `obat` VALUES (199, 'Antasida Doen 10 tablet', 'Strip', '2.500', 'antasida doen 10 tablet per strip.jpg', 9);
INSERT INTO `obat` VALUES (200, 'Antimo 50 mg 10 tablet', 'Strip', '5.500', 'Antimo 50 mg 10 tablet per strip.jpeg', 9);
INSERT INTO `obat` VALUES (201, 'Vosedon 10 mg 10 table', 'Strip', '28.000', 'Vosedon 10 mg 10 tablet.jpg', 9);
INSERT INTO `obat` VALUES (202, 'Entrostop 20 tablet', 'Box', '17.500', 'Entrostop 20 tablet per box.jpg', 9);
INSERT INTO `obat` VALUES (203, 'Lactulax sirup 120 ml ', 'Botol', '80.000', 'Lactulax sirup 120 ml.jpg', 9);
INSERT INTO `obat` VALUES (204, 'Lopamid 2 mg 10 tablet', 'Strip', '3.500', 'Lopamid 2 mg 10 tablet per strip.jpg', 9);
INSERT INTO `obat` VALUES (205, 'Farmacrol Forte 10 tablet', 'Strip', '12.000', 'Farmacrol forte 10 tablet per strip.jpg', 9);
INSERT INTO `obat` VALUES (206, 'Plantacid forte sirup 100 ml ', 'Botol', '40.000', 'Plantacid forte sirup 100 ml.jpg', 9);
INSERT INTO `obat` VALUES (207, 'Diapet NR 4 kapsul', 'Strip', '6.000', 'Diapet NR 4 kapsul per strip.jpg', 9);
INSERT INTO `obat` VALUES (208, 'Neo entrostop 24 tablet', 'Box', '19.000', 'Neo entrostop 24 tablet per box.jpg', 9);
INSERT INTO `obat` VALUES (209, 'Zincpro sirup 60 ml ', 'Botol', '45.000', 'Zincpro sirup 60 ml.jpg', 9);
INSERT INTO `obat` VALUES (210, 'Ardium 1000 mg 10 tablet', 'Strip', '225.000', 'Ardium 1000 mg 10 tablet per strip.jpg', 9);
INSERT INTO `obat` VALUES (211, 'Dulcalactol sirup 60 ml', 'Botol', '80.000', 'Dulcalactol sirup 60 ml.jpg', 9);
INSERT INTO `obat` VALUES (212, 'Entrostop anak sirup 10 ml', 'Sachet', '4.500', 'Entrostop anak sirup 10 ml.jpg', 9);
INSERT INTO `obat` VALUES (213, 'Faktu suppositoria', 'Suppositoria', '10.000', 'Faktu suppositoria per suppositoria.jpg', 9);
INSERT INTO `obat` VALUES (214, 'Promag 10 tablet', 'Strip', '8.500', 'Promag 10 tablet per strip.jpg', 9);
INSERT INTO `obat` VALUES (215, 'Ultraproct-N cream 10 g ', 'Tube', '150.000', 'Ultraproct-N cream 10 g per tube.jpg', 9);
INSERT INTO `obat` VALUES (216, 'Vegeta herbal 6 sachet', 'Box', '20.000', 'Vegeta herbal 6 sachet per box.jpg', 9);
INSERT INTO `obat` VALUES (217, 'Combatrin 250 mg 2 tablet', 'Strip', '19.000', 'Combatrin 250 mg 2 tablet per strip.jpg', 9);
INSERT INTO `obat` VALUES (218, 'Ondasetron 4 mg 10 tablet', 'Strip', '15.000', 'Ondasetron 4 mg 10 tablet per strip.jpg', 9);
INSERT INTO `obat` VALUES (219, 'Diapet anak sirup 60 ml ', 'Botol', '12.000', 'Diapet sirup anak 60 ml.jpg', 9);
INSERT INTO `obat` VALUES (220, 'Protexin infant granul ', 'Sachet', '20.000', 'Protexin infant granul per sachet.jpg', 9);
INSERT INTO `obat` VALUES (221, 'Dehidralyte 200ml', 'Botol', '23.000', 'Dehidalyte 200 ml per botol.jpg', 9);
INSERT INTO `obat` VALUES (222, 'Dulcolax adult 10 mg 5 suppositoria', 'Box', '185.500', 'Dulcolax adult 10 mg suppositoria per box.jpg', 9);
INSERT INTO `obat` VALUES (223, 'Gastrucid 10 tablet', 'Strip', '5.000', 'Gastrucid 10 tablet per strip.jpg', 9);
INSERT INTO `obat` VALUES (224, 'Dexanta 10 tablet ', 'Strip', '3.500', 'Dexanta 10 tablet per strip.jpg', 9);
INSERT INTO `obat` VALUES (225, 'Dexanta sirup 100 ml', 'Botol', '22.000', 'Dexanta sirup 100 ml.jpg', 9);
INSERT INTO `obat` VALUES (226, 'Bisoprolol dexa 5mg', 'Box', '11.000', 'Bisoprolol dexa 5mg 1 box paket 1 box.jpg', 10);
INSERT INTO `obat` VALUES (227, 'Amplodipine 5mg 10 tablet', 'Strip', '10.000', 'Amplodipine 5mg 10 tablet per strip.jpg', 10);
INSERT INTO `obat` VALUES (228, 'Amplodipine 10mg 10 table', 'Strip', '15.000', 'Amplodipine 10mg 10 tablet per strip.jpg', 10);
INSERT INTO `obat` VALUES (229, 'Propranolol 10 mg 10 tablet', 'Strip', '2.500', 'Propranolol 10 mg 10 tablet per strip.jpg', 10);
INSERT INTO `obat` VALUES (230, 'Captopril 12,5mg 10 tablet', 'Strip', '3.000', 'Captopril 12,5mg 10 tablet per strip.webp', 10);
INSERT INTO `obat` VALUES (231, 'Captopril 50mg 10 tablet ', 'Strip', '5.000', 'Captopril 50mg 10 tablet per strip.webp', 10);
INSERT INTO `obat` VALUES (232, 'Divask 5 mg 10 tablet', 'Strip', '65.000', 'Divask 5 mg 10 tablet per strip.jpg', 10);
INSERT INTO `obat` VALUES (233, 'Hytroz 2 mg 10 tablet', 'Strip', '77.000', 'Hytroz 2 mg 10 tablet per strip.jpg', 10);
INSERT INTO `obat` VALUES (234, 'Noperten 10 mg 6 tablet', 'Strip', '24.000', 'Noperten 10 mg 6 tablet per strip.jpg', 10);
INSERT INTO `obat` VALUES (235, 'Spirola 100 mg 10 tablet', 'Strip', '50.000', 'Spirola 100 mg 10 tablet per strip.jpg', 10);

-- ----------------------------
-- Table structure for paket_obat
-- ----------------------------
DROP TABLE IF EXISTS `paket_obat`;
CREATE TABLE `paket_obat`  (
  `id_paket` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `paket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `price` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id_paket`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of paket_obat
-- ----------------------------
INSERT INTO `paket_obat` VALUES (1, 'Alat Kesehatan Pencegahan Covid-19 Paket 1', 35000);
INSERT INTO `paket_obat` VALUES (2, 'Alat Kesehatan Pencegahan Covid-19 Paket 2', 105000);
INSERT INTO `paket_obat` VALUES (3, 'P3K Luka Robek Paket 1', 14000);
INSERT INTO `paket_obat` VALUES (4, 'P3K Luka Robek Paket 2', 22500);
INSERT INTO `paket_obat` VALUES (5, 'Paket Batuk 1', 15500);
INSERT INTO `paket_obat` VALUES (11, 'Paket Batuk 2', 125000);
INSERT INTO `paket_obat` VALUES (12, 'Pilek Paket 1', 18500);
INSERT INTO `paket_obat` VALUES (13, 'Pilek Paket 2', 59000);
INSERT INTO `paket_obat` VALUES (14, 'Saluran Pencernaan Gastroenteritis Paket 1', 14500);
INSERT INTO `paket_obat` VALUES (15, 'Saluran Pencernaan Gastroenteritis Paket 2', 23000);

-- ----------------------------
-- Table structure for paket_obat_detail
-- ----------------------------
DROP TABLE IF EXISTS `paket_obat_detail`;
CREATE TABLE `paket_obat_detail`  (
  `id_paket_detail` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `jenis_paket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_paket` int(11) NOT NULL,
  PRIMARY KEY (`id_paket_detail`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of paket_obat_detail
-- ----------------------------
INSERT INTO `paket_obat_detail` VALUES (1, 'Paket 1', 'Alkes Pencegahan COVID-19 Paket1.jpg', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `setting` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi`  (
  `id_transaksi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date` date NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `method` enum('Bank Jatim','BCA','BNI','BRI','BSI','Dana') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `total` int(10) NULL DEFAULT NULL,
  `status` enum('success','pending') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `id_obat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `id_paket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `id_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES (1, '2022-06-17', '', 'Bank Jatim', 20000, 'pending', '36', NULL, '2');
INSERT INTO `transaksi` VALUES (2, '2022-06-17', '', 'BSI', 19, 'pending', '130', NULL, '2');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('root','admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Munaji', 'admin', NULL, NULL, 'admin', NULL, '$2y$10$7NcBHi/YJ.dnfp3UU2GfJO/kIQCl2B6hFSINgAfCjnb6qXBWpnVny', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `users` VALUES (2, 'Anggun P.', 'user', 'Jl. Tidar', '085156186156', 'user', NULL, '$2y$10$KfxV7F9W8o8tPsTkVz7tze97TRrZOLQk.OMD7iK4VfgIzEgWMsZwu', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `users` VALUES (3, 'Kuur', 'root', NULL, NULL, 'root', NULL, '$2y$10$5fivYPeogxLYTzR7jBBTHuZLTkTF4XFv4fzF9.t3UlMKf7K/CF77S', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `users` VALUES (4, 'Muhammad Nasrul', 'user', NULL, NULL, 'pacemugen14@gmail.com', NULL, '$2y$10$tDUX7K3FG11D5gG4Vm3KEuGcBFKcqWilzns87w17zmScxUMp2hyGG', NULL, '2022-06-06 16:37:42', '2022-06-06 16:37:42');

SET FOREIGN_KEY_CHECKS = 1;
