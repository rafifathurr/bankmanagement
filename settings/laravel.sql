/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : laravel

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 07/05/2023 22:59:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_nasabah
-- ----------------------------
DROP TABLE IF EXISTS `data_nasabah`;
CREATE TABLE `data_nasabah`  (
  `accountId` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`accountId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2031497512 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_nasabah
-- ----------------------------
INSERT INTO `data_nasabah` VALUES (969040761, 'Sisca Meidiyah', '2023-05-07 12:41:45', NULL, '2023-05-07 14:05:02');
INSERT INTO `data_nasabah` VALUES (1008739669, 'Abi Ahmad Wiguna', '2023-05-07 12:03:53', NULL, NULL);
INSERT INTO `data_nasabah` VALUES (1191361532, 'Lucas Gracias', '2023-05-07 12:04:12', '2023-05-07 12:41:26', NULL);
INSERT INTO `data_nasabah` VALUES (1231635598, 'Ravi Haryo Baskoro', '2023-05-07 11:58:29', NULL, NULL);
INSERT INTO `data_nasabah` VALUES (2031497511, 'Rafi Fathur Rahman', '2023-05-07 11:52:27', NULL, NULL);

-- ----------------------------
-- Table structure for data_poin_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `data_poin_transaksi`;
CREATE TABLE `data_poin_transaksi`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `accountId` int NULL DEFAULT NULL,
  `point` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_poin_transaksi
-- ----------------------------
INSERT INTO `data_poin_transaksi` VALUES (1, 1008739669, 0, '2023-05-07 21:24:41', NULL);
INSERT INTO `data_poin_transaksi` VALUES (2, 1008739669, 0, '2023-05-07 21:29:38', NULL);
INSERT INTO `data_poin_transaksi` VALUES (3, 2031497511, 0, '2023-05-07 21:29:55', NULL);
INSERT INTO `data_poin_transaksi` VALUES (4, 1231635598, 0, '2023-05-07 21:30:16', NULL);
INSERT INTO `data_poin_transaksi` VALUES (5, 1231635598, 100, '2023-05-07 21:30:52', NULL);
INSERT INTO `data_poin_transaksi` VALUES (6, 2031497511, 10, '2023-05-07 21:31:07', NULL);
INSERT INTO `data_poin_transaksi` VALUES (7, 2031497511, 400, '2023-05-07 21:31:26', NULL);
INSERT INTO `data_poin_transaksi` VALUES (8, 1231635598, 50, '2023-05-07 21:31:47', NULL);
INSERT INTO `data_poin_transaksi` VALUES (9, 1008739669, 150, '2023-05-07 21:32:01', NULL);
INSERT INTO `data_poin_transaksi` VALUES (10, 1008739669, 150, '2023-05-07 21:32:14', NULL);
INSERT INTO `data_poin_transaksi` VALUES (11, 1191361532, 0, '2023-05-07 21:32:32', NULL);
INSERT INTO `data_poin_transaksi` VALUES (12, 2031497511, 0, '2023-05-07 21:32:46', NULL);
INSERT INTO `data_poin_transaksi` VALUES (13, 1008739669, 0, '2023-05-07 21:33:02', NULL);

-- ----------------------------
-- Table structure for data_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `data_transaksi`;
CREATE TABLE `data_transaksi`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `transaction_date` date NULL DEFAULT NULL,
  `accountId` int NULL DEFAULT NULL,
  `description` int NULL DEFAULT NULL,
  `status` int NULL DEFAULT NULL,
  `amount` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2098082291 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_transaksi
-- ----------------------------
INSERT INTO `data_transaksi` VALUES (5954418, '2023-05-07', 2031497511, 1, 1, 200000, '2023-05-07 21:32:46', NULL);
INSERT INTO `data_transaksi` VALUES (30976995, '2023-05-07', 1191361532, 1, 1, 500000, '2023-05-07 21:32:32', NULL);
INSERT INTO `data_transaksi` VALUES (38413696, '2023-05-07', 1231635598, 4, 2, 200000, '2023-05-07 21:30:52', NULL);
INSERT INTO `data_transaksi` VALUES (57088259, '2023-05-07', 2031497511, 4, 2, 500000, '2023-05-07 21:31:26', NULL);
INSERT INTO `data_transaksi` VALUES (364748174, '2023-05-07', 1231635598, 1, 1, 1000000, '2023-05-07 21:30:16', NULL);
INSERT INTO `data_transaksi` VALUES (474714537, '2023-05-07', 2031497511, 3, 2, 20000, '2023-05-07 21:31:07', NULL);
INSERT INTO `data_transaksi` VALUES (816313733, '2023-05-07', 1008739669, 3, 2, 100000, '2023-05-07 21:32:01', NULL);
INSERT INTO `data_transaksi` VALUES (960389710, '2023-05-07', 2031497511, 1, 1, 2000000, '2023-05-07 21:29:55', NULL);
INSERT INTO `data_transaksi` VALUES (1607790803, '2023-05-07', 1008739669, 1, 1, 1500000, '2023-05-07 21:29:38', NULL);
INSERT INTO `data_transaksi` VALUES (1760074937, '2023-05-07', 1008739669, 4, 2, 250000, '2023-05-07 21:32:14', NULL);
INSERT INTO `data_transaksi` VALUES (1916716790, '2023-05-07', 1231635598, 3, 2, 50000, '2023-05-07 21:31:47', NULL);
INSERT INTO `data_transaksi` VALUES (2098082290, '2023-05-07', 1008739669, 1, 1, 500000, '2023-05-07 21:33:02', NULL);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for master_status
-- ----------------------------
DROP TABLE IF EXISTS `master_status`;
CREATE TABLE `master_status`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `status_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of master_status
-- ----------------------------
INSERT INTO `master_status` VALUES (1, 'C', 'Kredit', '2023-05-07 11:52:27', NULL);
INSERT INTO `master_status` VALUES (2, 'D', 'Debit', '2023-05-07 11:52:27', NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2023_05_06_055305_create_data_nasabah', 1);
INSERT INTO `migrations` VALUES (6, '2023_05_06_055342_create_data_transaksi', 1);
INSERT INTO `migrations` VALUES (7, '2023_05_06_055451_create_data_poin_transaksi', 1);
INSERT INTO `migrations` VALUES (8, '2023_05_06_055953_create_master_status', 1);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for tipe_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `tipe_transaksi`;
CREATE TABLE `tipe_transaksi`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `type_transaction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tipe_transaksi
-- ----------------------------
INSERT INTO `tipe_transaksi` VALUES (1, 'Setor Tunai', '2023-05-07 16:34:18', NULL, NULL);
INSERT INTO `tipe_transaksi` VALUES (2, 'Tarik Tunai', '2023-05-07 16:34:32', NULL, NULL);
INSERT INTO `tipe_transaksi` VALUES (3, 'Beli Pulsa', '2023-05-07 16:35:23', NULL, NULL);
INSERT INTO `tipe_transaksi` VALUES (4, 'Bayar Listrik', '2023-05-07 16:35:30', NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Administrator', 'creditone@bank.com', NULL, '$2y$10$WuhaBsABM6rn0TFpTca.1uEsoZuGc0VHWNnAcfr.NLsdYszkDDDt6', NULL, '2023-05-07 22:17:43', NULL);

SET FOREIGN_KEY_CHECKS = 1;
