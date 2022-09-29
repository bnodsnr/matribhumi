-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2022 at 05:59 AM
-- Server version: 5.7.38
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epalika_pratibedan`
--

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_month` bigint(20) NOT NULL,
  `created_year` bigint(20) NOT NULL,
  `fiscal_year` bigint(20) NOT NULL,
  `problem` text COLLATE utf8mb4_unicode_ci,
  `solution` text COLLATE utf8mb4_unicode_ci,
  `suggestion` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `report_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `created_month`, `created_year`, `fiscal_year`, `problem`, `solution`, `suggestion`, `created_at`, `updated_at`, `report_code`) VALUES
(1, 4, 2079, 2078, 'gfd', 'gfdgfdg', 'gfdsgdsfg', '2022-06-06 10:48:19', '2022-06-06 10:48:19', '3317-20794314'),
(2, 5, 2079, 2078, '', '', '', '2022-06-06 10:49:51', '2022-06-06 10:49:51', '6554-20795314'),
(3, 1, 2079, 2078, 'gfh', 'dgg', 'gfgf', '2022-06-21 17:10:07', '2022-06-21 17:10:07', '6642-2079153');

-- --------------------------------------------------------

--
-- Table structure for table `fiscal_years`
--

CREATE TABLE `fiscal_years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fiscal_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_current` tinyint(4) NOT NULL,
  `is_closed` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fiscal_years`
--

INSERT INTO `fiscal_years` (`id`, `fiscal_year`, `is_current`, `is_closed`, `created_at`, `updated_at`) VALUES
(1, '2078-079', 1, NULL, '2022-02-04 00:57:59', '2022-05-08 11:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_27_142750_create_permission_tables', 1),
(6, '2021_12_30_075045_add_new_fields_to_users_table', 1),
(7, '2022_01_02_045125_create_krishi_pretibedan_titles_table', 1),
(8, '2022_01_30_080222_create_krishi_shakhas_table', 1),
(9, '2022_01_31_094028_create_yojana_shirshaks_table', 1),
(10, '2022_02_01_082150_create_shakhas_table', 2),
(11, '2022_01_31_125654_create_shirshaks_table', 3),
(12, '2022_02_02_060400_add_role_id_and_shakha_id_in_user_table', 4),
(13, '2022_02_03_050616_create_pargati_farams_table', 5),
(14, '2022_02_04_054959_create_fiscal_years_table', 6),
(15, '2022_02_05_073835_add_new_fields_to_pargati_farams_table', 7),
(16, '2022_02_05_074807_add_new_fields_to_pargati_farams_table', 8),
(17, '2022_02_06_115829_create_feedback_table', 9),
(18, '2022_02_07_051716_add_new_fields_in_feedback_table', 10),
(19, '2022_02_11_070958_create_shirshaks_table', 11),
(20, '2022_02_13_081952_add_new_fields_upto_previous_month_in_pargati_farams_table', 12),
(21, '2022_02_13_082054_add_new_fields_upto_previous_month_in_pargati_farams_table', 13),
(22, '2022_02_14_150309_add_icon_field_in_shakhas_table', 14),
(23, '2022_02_16_053429_create_system_config_table', 15),
(24, '2022_02_16_061135_add_new_fields_in_system_config', 16),
(25, '2022_02_16_070233_create_palika_profiles_table', 17),
(26, '2022_02_16_070619_create_palika_profiles_table', 18),
(27, '2022_02_16_102747_add_shakha_type_in_shakhas_table', 19),
(28, '2022_02_16_103020_add_shakha_type_in_shakhas_table', 20),
(29, '2022_04_22_054518_add_unit_in_shirshaks_table', 21),
(30, '2022_04_24_083016_create_staff_details_table', 22),
(31, '2022_04_25_055732_create_designations_table', 22),
(32, '2022_04_25_073206_add_new_fields_in_staff_details_table', 22),
(33, '2022_04_25_102506_add_new_fields_created_month_in_staff_details_table', 22),
(34, '2022_04_25_103316_add_new_field_report_code_in_staff_details_table', 22),
(35, '2022_04_25_103545_add_new_field_user_id_in_staff_details_table', 22),
(36, '2022_04_28_052356_add_new_field_level_in_shirshaks_table', 23),
(37, '2022_04_28_075014_create_upashakhas_table', 23),
(38, '2022_04_28_114648_add_new_fields_has_upshakha_in_shakhas_table', 23),
(39, '2022_05_02_170406_add_new_field_label_name_in_shirshaks_table', 23),
(40, '2022_05_04_045820_add_new_field_label_name_in_pargati_farams_table', 23),
(41, '2022_05_04_071502_add_new_field_net_total_in_pargati_farams_table', 23),
(42, '2022_05_05_075226_add_new_field_approved_by_in_pargati_farams', 23),
(43, '2022_05_05_084659_create_office_staffs_table', 23),
(44, '2022_05_05_085030_create_office_staff_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 1),
(5, 'App\\Models\\User', 1),
(6, 'App\\Models\\User', 1),
(8, 'App\\Models\\User', 1),
(9, 'App\\Models\\User', 1),
(10, 'App\\Models\\User', 1),
(11, 'App\\Models\\User', 1),
(12, 'App\\Models\\User', 1),
(13, 'App\\Models\\User', 1),
(14, 'App\\Models\\User', 1),
(15, 'App\\Models\\User', 1),
(16, 'App\\Models\\User', 1),
(17, 'App\\Models\\User', 1),
(18, 'App\\Models\\User', 1),
(19, 'App\\Models\\User', 1),
(20, 'App\\Models\\User', 1),
(21, 'App\\Models\\User', 1),
(22, 'App\\Models\\User', 1),
(24, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 2),
(5, 'App\\Models\\User', 2),
(6, 'App\\Models\\User', 2),
(8, 'App\\Models\\User', 2),
(9, 'App\\Models\\User', 2),
(10, 'App\\Models\\User', 2),
(11, 'App\\Models\\User', 2),
(12, 'App\\Models\\User', 2),
(13, 'App\\Models\\User', 2),
(14, 'App\\Models\\User', 2),
(15, 'App\\Models\\User', 2),
(16, 'App\\Models\\User', 2),
(17, 'App\\Models\\User', 2),
(18, 'App\\Models\\User', 2),
(19, 'App\\Models\\User', 2),
(20, 'App\\Models\\User', 2),
(21, 'App\\Models\\User', 2),
(22, 'App\\Models\\User', 2),
(24, 'App\\Models\\User', 2),
(25, 'App\\Models\\User', 2),
(26, 'App\\Models\\User', 2),
(27, 'App\\Models\\User', 2),
(28, 'App\\Models\\User', 2),
(29, 'App\\Models\\User', 2),
(30, 'App\\Models\\User', 2),
(31, 'App\\Models\\User', 2),
(9, 'App\\Models\\User', 3),
(10, 'App\\Models\\User', 3),
(11, 'App\\Models\\User', 3),
(13, 'App\\Models\\User', 3),
(14, 'App\\Models\\User', 3),
(15, 'App\\Models\\User', 3),
(16, 'App\\Models\\User', 3),
(17, 'App\\Models\\User', 3),
(21, 'App\\Models\\User', 3),
(1, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 4),
(5, 'App\\Models\\User', 4),
(6, 'App\\Models\\User', 4),
(8, 'App\\Models\\User', 4),
(9, 'App\\Models\\User', 4),
(10, 'App\\Models\\User', 4),
(11, 'App\\Models\\User', 4),
(12, 'App\\Models\\User', 4),
(13, 'App\\Models\\User', 4),
(14, 'App\\Models\\User', 4),
(15, 'App\\Models\\User', 4),
(16, 'App\\Models\\User', 4),
(17, 'App\\Models\\User', 4),
(18, 'App\\Models\\User', 4),
(19, 'App\\Models\\User', 4),
(20, 'App\\Models\\User', 4),
(21, 'App\\Models\\User', 4),
(22, 'App\\Models\\User', 4),
(24, 'App\\Models\\User', 4),
(1, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 5),
(5, 'App\\Models\\User', 5),
(6, 'App\\Models\\User', 5),
(8, 'App\\Models\\User', 5),
(9, 'App\\Models\\User', 5),
(10, 'App\\Models\\User', 5),
(11, 'App\\Models\\User', 5),
(12, 'App\\Models\\User', 5),
(13, 'App\\Models\\User', 5),
(14, 'App\\Models\\User', 5),
(15, 'App\\Models\\User', 5),
(16, 'App\\Models\\User', 5),
(17, 'App\\Models\\User', 5),
(18, 'App\\Models\\User', 5),
(19, 'App\\Models\\User', 5),
(20, 'App\\Models\\User', 5),
(21, 'App\\Models\\User', 5),
(22, 'App\\Models\\User', 5),
(24, 'App\\Models\\User', 5),
(1, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 7),
(4, 'App\\Models\\User', 7),
(5, 'App\\Models\\User', 7),
(6, 'App\\Models\\User', 7),
(8, 'App\\Models\\User', 7),
(9, 'App\\Models\\User', 7),
(10, 'App\\Models\\User', 7),
(11, 'App\\Models\\User', 7),
(12, 'App\\Models\\User', 7),
(13, 'App\\Models\\User', 7),
(14, 'App\\Models\\User', 7),
(15, 'App\\Models\\User', 7),
(16, 'App\\Models\\User', 7),
(17, 'App\\Models\\User', 7),
(18, 'App\\Models\\User', 7),
(19, 'App\\Models\\User', 7),
(20, 'App\\Models\\User', 7),
(21, 'App\\Models\\User', 7),
(22, 'App\\Models\\User', 7),
(24, 'App\\Models\\User', 7),
(1, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 8),
(3, 'App\\Models\\User', 8),
(4, 'App\\Models\\User', 8),
(5, 'App\\Models\\User', 8),
(6, 'App\\Models\\User', 8),
(8, 'App\\Models\\User', 8),
(9, 'App\\Models\\User', 8),
(10, 'App\\Models\\User', 8),
(11, 'App\\Models\\User', 8),
(12, 'App\\Models\\User', 8),
(13, 'App\\Models\\User', 8),
(14, 'App\\Models\\User', 8),
(15, 'App\\Models\\User', 8),
(16, 'App\\Models\\User', 8),
(17, 'App\\Models\\User', 8),
(18, 'App\\Models\\User', 8),
(19, 'App\\Models\\User', 8),
(20, 'App\\Models\\User', 8),
(21, 'App\\Models\\User', 8),
(22, 'App\\Models\\User', 8),
(24, 'App\\Models\\User', 8),
(12, 'App\\Models\\User', 12),
(13, 'App\\Models\\User', 12),
(14, 'App\\Models\\User', 12),
(15, 'App\\Models\\User', 12),
(16, 'App\\Models\\User', 12),
(17, 'App\\Models\\User', 12),
(21, 'App\\Models\\User', 12),
(22, 'App\\Models\\User', 12),
(29, 'App\\Models\\User', 12),
(30, 'App\\Models\\User', 12),
(31, 'App\\Models\\User', 12);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `office_staff`
--

CREATE TABLE `office_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shakha_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office_staff`
--

INSERT INTO `office_staff` (`id`, `created_at`, `updated_at`, `name`, `shakha_id`, `address`, `designation`, `email`, `phone_no`, `status`) VALUES
(1, '2022-05-08 13:24:26', '2022-05-08 13:24:26', 'सगर लम्', 1, 'बाफल काठमाडौँ', 'प्रमुख प्रशासन अधिकृत', 'sgrlamsal@gmail.com', '९८५१११७५६३', 1);

-- --------------------------------------------------------

--
-- Table structure for table `office_staffs`
--

CREATE TABLE `office_staffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shakha_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `palika_profiles`
--

CREATE TABLE `palika_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pradesh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `palika` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `palika_profiles`
--

INSERT INTO `palika_profiles` (`id`, `created_at`, `updated_at`, `type`, `pradesh`, `district`, `palika`, `address`, `logo`, `client_id`, `slogan`, `phone_no`) VALUES
(1, '2022-02-16 02:47:22', '2022-04-20 12:26:48', '1', 'बागमती प्रदेश', 'धादिङ', 'ज्वालामूखी गाउँपालिका', 'साँधभञ्ज्याङ', 'uploads/1650439608.png', '', 'स्वच्छ र सक्षम निजामती प्रशासनः समृद्धि र सुशासन', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pargati_farams`
--

CREATE TABLE `pargati_farams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shirshak_id` bigint(20) UNSIGNED NOT NULL,
  `upto_previous_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` bigint(20) NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_month` bigint(20) NOT NULL,
  `created_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiscal_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `report_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `shakha_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `label_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `net_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pargati_farams`
--

INSERT INTO `pargati_farams` (`id`, `shirshak_id`, `upto_previous_month`, `total`, `remarks`, `created_month`, `created_year`, `fiscal_year`, `status`, `report_code`, `user_id`, `shakha_id`, `created_at`, `updated_at`, `label_name`, `net_total`, `approved_by`) VALUES
(1, 230, '0', 10, NULL, 4, '2079', '2078-079', 1, '3317-20794314', 3, 14, '2022-06-06 10:48:19', NULL, NULL, '10', NULL),
(2, 231, '0', 15, NULL, 4, '2079', '2078-079', 1, '3317-20794314', 3, 14, '2022-06-06 10:48:19', NULL, NULL, '15', NULL),
(3, 232, '0', 20, NULL, 4, '2079', '2078-079', 1, '3317-20794314', 3, 14, '2022-06-06 10:48:19', NULL, NULL, '20', NULL),
(4, 233, '0', 0, NULL, 4, '2079', '2078-079', 1, '3317-20794314', 3, 14, '2022-06-06 10:48:19', NULL, NULL, '0', NULL),
(5, 234, '0', 0, NULL, 4, '2079', '2078-079', 1, '3317-20794314', 3, 14, '2022-06-06 10:48:19', NULL, NULL, '0', NULL),
(6, 235, '0', 0, NULL, 4, '2079', '2078-079', 1, '3317-20794314', 3, 14, '2022-06-06 10:48:19', NULL, NULL, '0', NULL),
(7, 236, '0', 0, NULL, 4, '2079', '2078-079', 1, '3317-20794314', 3, 14, '2022-06-06 10:48:19', NULL, NULL, '0', NULL),
(8, 237, '0', 0, NULL, 4, '2079', '2078-079', 1, '3317-20794314', 3, 14, '2022-06-06 10:48:19', NULL, NULL, '0', NULL),
(9, 238, '0', 100, NULL, 4, '2079', '2078-079', 1, '3317-20794314', 3, 14, '2022-06-06 10:48:19', NULL, NULL, '100', NULL),
(10, 230, '10', 5, NULL, 5, '2079', '2078-079', 1, '6554-20795314', 3, 14, '2022-06-06 10:49:51', NULL, NULL, '15', NULL),
(11, 231, '15', 0, NULL, 5, '2079', '2078-079', 1, '6554-20795314', 3, 14, '2022-06-06 10:49:51', NULL, NULL, '0', NULL),
(12, 232, '20', 0, NULL, 5, '2079', '2078-079', 1, '6554-20795314', 3, 14, '2022-06-06 10:49:51', NULL, NULL, '0', NULL),
(13, 233, '0', 0, NULL, 5, '2079', '2078-079', 1, '6554-20795314', 3, 14, '2022-06-06 10:49:51', NULL, NULL, '0', NULL),
(14, 234, '0', 0, NULL, 5, '2079', '2078-079', 1, '6554-20795314', 3, 14, '2022-06-06 10:49:51', NULL, NULL, '0', NULL),
(15, 235, '0', 0, NULL, 5, '2079', '2078-079', 1, '6554-20795314', 3, 14, '2022-06-06 10:49:51', NULL, NULL, '0', NULL),
(16, 236, '0', 0, NULL, 5, '2079', '2078-079', 1, '6554-20795314', 3, 14, '2022-06-06 10:49:51', NULL, NULL, '0', NULL),
(17, 237, '0', 0, NULL, 5, '2079', '2078-079', 1, '6554-20795314', 3, 14, '2022-06-06 10:49:51', NULL, NULL, '0', NULL),
(18, 238, '100', 0, NULL, 5, '2079', '2078-079', 1, '6554-20795314', 3, 14, '2022-06-06 10:49:51', NULL, NULL, '0', NULL),
(19, 253, '0', 5, NULL, 5, '2079', '2078-079', 1, '6554-20795314', 3, 14, '2022-06-06 10:49:51', NULL, NULL, '5', NULL),
(20, 200, '0', 2, NULL, 1, '2079', '2078-079', 1, '6642-2079153', 5, 3, '2022-06-21 17:10:07', NULL, NULL, '2', NULL),
(21, 201, '0', 10, NULL, 1, '2079', '2078-079', 1, '6642-2079153', 5, 3, '2022-06-21 17:10:07', NULL, NULL, '10', NULL),
(22, 202, '0', 50, NULL, 1, '2079', '2078-079', 1, '6642-2079153', 5, 3, '2022-06-21 17:10:07', NULL, NULL, '50', NULL),
(23, 203, '0', 50, NULL, 1, '2079', '2078-079', 1, '6642-2079153', 5, 3, '2022-06-21 17:10:07', NULL, NULL, '50', NULL),
(24, 204, '0', 30, NULL, 1, '2079', '2078-079', 1, '6642-2079153', 5, 3, '2022-06-21 17:10:07', NULL, NULL, '30', NULL),
(25, 206, '0', 50, NULL, 1, '2079', '2078-079', 1, '6642-2079153', 5, 3, '2022-06-21 17:10:07', NULL, NULL, '50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view-fiscal-year', 'web', '2022-02-02 05:05:09', '2022-02-14 01:58:10'),
(2, 'edit-fiscal-year', 'web', '2022-02-02 05:25:33', '2022-02-14 01:58:24'),
(3, 'change-fiscal-year', 'web', '2022-02-02 05:26:03', '2022-02-14 01:58:40'),
(4, 'add-shakha', 'web', '2022-02-02 05:26:40', '2022-02-14 01:59:01'),
(5, 'edit-shakha', 'web', '2022-02-02 05:26:57', '2022-02-14 01:59:11'),
(6, 'remove-shakha', 'web', '2022-02-02 05:27:08', '2022-02-14 01:59:36'),
(8, 'view-shakha', 'web', '2022-02-02 09:06:36', '2022-02-14 02:00:02'),
(9, 'view-pargati-shirshak', 'web', '2022-02-02 09:06:48', '2022-02-14 02:01:53'),
(10, 'add-pargati-shirshak', 'web', '2022-02-02 09:08:08', '2022-02-14 02:02:19'),
(11, 'edit-pargati-shirshak', 'web', '2022-02-02 09:08:15', '2022-02-14 02:02:40'),
(12, 'remove-pargati-shirshak', 'web', '2022-02-02 09:08:25', '2022-02-14 02:02:58'),
(13, 'view-pargati-faram', 'web', '2022-02-02 09:09:05', '2022-02-14 02:08:23'),
(14, 'edit-pargati-faram', 'web', '2022-02-14 02:08:35', '2022-02-14 02:08:35'),
(15, 'remove-pargati-faram', 'web', '2022-02-14 02:08:57', '2022-02-14 02:08:57'),
(16, 'view-monthly-report', 'web', '2022-02-14 02:09:43', '2022-02-14 02:09:43'),
(17, 'view-annual-report', 'web', '2022-02-14 02:10:01', '2022-02-14 02:10:01'),
(18, 'view-user', 'web', '2022-02-14 02:10:17', '2022-02-14 02:10:17'),
(19, 'add-user', 'web', '2022-02-14 02:10:25', '2022-02-14 02:10:25'),
(20, 'edit-user', 'web', '2022-02-14 02:10:32', '2022-02-14 02:10:32'),
(21, 'add-pargati-faram', 'web', '2022-02-14 05:05:21', '2022-02-14 05:05:21'),
(22, 'add-fiscal-year', 'web', '2022-02-14 05:47:13', '2022-02-14 05:47:13'),
(24, 'system-setup', 'web', '2022-02-16 00:07:30', '2022-02-16 00:07:30'),
(25, 'view-designation', 'web', '2022-04-27 16:20:51', '2022-04-27 16:20:51'),
(26, 'add-designation', 'web', '2022-04-27 16:21:11', '2022-04-27 16:21:11'),
(27, 'edit-designation', 'web', '2022-04-27 16:21:26', '2022-04-27 16:21:26'),
(28, 'remove-designation', 'web', '2022-04-27 16:21:38', '2022-04-27 16:21:38'),
(29, 'view-staffdetails', 'web', '2022-04-27 16:21:49', '2022-04-27 16:21:49'),
(30, 'add-staffdetails', 'web', '2022-04-27 16:22:00', '2022-04-27 16:22:00'),
(31, 'edit-staffdetails', 'web', '2022-04-27 16:22:13', '2022-04-27 16:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Maintainer', 'web', '2022-02-01 23:26:09', '2022-02-15 23:32:25'),
(2, 'Palika Admin', 'web', '2022-02-01 23:26:24', '2022-02-15 23:32:40'),
(3, 'Shakha Users', 'web', '2022-02-15 23:32:52', '2022-02-15 23:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shakhas`
--

CREATE TABLE `shakhas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `has_upashakha` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shakhas`
--

INSERT INTO `shakhas` (`id`, `name`, `created_at`, `updated_at`, `icon`, `status`, `has_upashakha`) VALUES
(1, 'पालिका', '2022-02-01 04:44:20', '2022-04-21 12:59:56', 'uploads/1650527996.png', '0', 0),
(2, 'योजना शाखा', '2022-02-01 05:13:31', '2022-04-21 12:55:21', 'uploads/1650527721.png', '1', 0),
(3, 'पशु सेवा शाखा', '2022-02-01 05:14:39', '2022-06-21 17:04:11', 'uploads/1650527589.png', '1', 0),
(4, 'उद्यम विकास शाखा', '2022-02-01 05:14:54', '2022-04-21 13:17:36', 'uploads/1650529056.ico', '1', 0),
(5, 'लेखा शाखा', '2022-02-01 05:15:11', '2022-05-08 11:34:25', 'uploads/1650528527.ico', '1', 1),
(6, 'शिक्षा शाखा', '2022-02-01 05:15:24', '2022-04-21 13:05:04', 'uploads/1650528304.ico', '1', 0),
(7, 'सहकारी शाखा', '2022-02-01 05:15:35', '2022-04-21 13:18:13', 'uploads/1650529093.ico', '1', 0),
(8, 'नक्सा पास इकाई', '2022-02-01 05:15:47', '2022-04-21 13:14:36', 'uploads/1650528876.ico', '1', 0),
(9, 'महिला¸ बालवालिका  तथा ज्येष्ठ नागरिक', '2022-02-01 05:16:05', '2022-05-08 13:44:48', 'uploads/1650528966.ico', '1', 0),
(11, 'प्रशासन शाखा', '2022-02-01 05:17:16', '2022-04-21 13:19:13', 'uploads/1650529153.ico', '1', 0),
(12, 'राष्ट्रिय परिचय पत्र. पञ्जिकरण तथा सामाजिक सुरक्षा कार्यक्रम', '2022-02-17 20:02:50', '2022-05-08 11:06:30', 'uploads/1650530488.ico', '1', 1),
(13, 'रोजगार शाखा', '2022-02-17 20:04:44', '2022-04-21 13:20:49', 'uploads/1650529249.ico', '1', 0),
(14, 'कृषि शाखा', '2022-02-18 11:04:14', '2022-04-21 13:20:12', 'uploads/1650529212.ico', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shirshaks`
--

CREATE TABLE `shirshaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shakha_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_level` bigint(20) NOT NULL,
  `label_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shirshaks`
--

INSERT INTO `shirshaks` (`id`, `created_at`, `updated_at`, `title`, `shakha_id`, `status`, `unit`, `form_level`, `label_name`) VALUES
(191, '2022-05-08 11:21:51', NULL, 'योजना तथा कार्यक्रम सम्झौता सख्या', 2, 1, 'सख्या', 0, NULL),
(192, '2022-05-08 11:21:51', NULL, 'अनुगमन गरिएको योजना तथा कार्यक्रम सख्या', 2, 1, 'सख्या', 0, NULL),
(193, '2022-05-08 11:21:51', NULL, 'भुक्तानी भएको योजना तथा कार्यक्रम सख्या', 2, 1, 'सख्या', 0, NULL),
(194, '2022-05-08 11:21:51', NULL, 'योजना तथा कार्यक्रमको भुक्तानी रकम', 2, 1, 'रकम', 0, NULL),
(195, '2022-05-08 11:21:51', NULL, 'कालो पत्रे सडकको लम्बाइ', 2, 1, 'कि. मि', 0, NULL),
(196, '2022-05-08 11:21:51', NULL, 'ग्रावेल सडकको लम्बाई', 2, 1, 'कि . मि', 0, NULL),
(197, '2022-05-08 11:21:51', NULL, 'नयाँ ट्रयाक खोलिएको सडकको लम्बाई', 2, 1, 'कि . मि', 0, NULL),
(198, '2022-05-08 11:21:51', NULL, 'गोरेटो बाटो', 2, 1, 'कि . मि', 0, NULL),
(199, '2022-05-08 11:21:51', NULL, 'खानेपानी योजना', 2, 1, 'सख्या', 0, NULL),
(200, '2022-05-08 11:24:58', '2022-05-08 11:25:30', 'समूह/समिति दर्ता सख्या', 3, 1, 'वोटा', 0, NULL),
(201, '2022-05-08 11:24:58', '2022-05-08 11:25:39', 'समूह/समिति नविकरण सख्या', 3, 1, 'वोटा', 0, NULL),
(202, '2022-05-08 11:24:58', '2022-05-08 11:25:48', 'औषधी वितरण', 3, 1, 'वोटा', 0, NULL),
(203, '2022-05-08 11:24:58', NULL, 'परामर्श सेवा', 3, 1, 'सख्या', 0, NULL),
(204, '2022-05-08 11:24:58', NULL, 'कृतिम गर्भाधान', 3, 1, 'सख्या', 0, NULL),
(205, '2022-05-08 11:24:58', NULL, 'पशु विमा कार्यक्रम', 2, 1, 'सख्या', 0, NULL),
(206, '2022-05-08 11:24:58', '2022-05-08 11:25:13', 'विविध अनुदान', 3, 1, 'रकम', 0, NULL),
(207, '2022-05-08 11:28:59', NULL, 'तालिमको किसिम(क)', 4, 1, 'संख्या', 0, NULL),
(208, '2022-05-08 11:28:59', '2022-05-08 11:29:22', 'तालिमको किसिम(ख)', 4, 1, 'संख्या', 0, NULL),
(209, '2022-05-08 11:28:59', '2022-05-08 11:29:30', 'तालिमको किसिम(ग)', 4, 1, 'संख्या', 0, NULL),
(210, '2022-05-08 11:28:59', '2022-05-08 11:29:38', 'तालिमको किसिम(घ)', 4, 1, 'संख्या', 0, NULL),
(211, '2022-05-08 11:28:59', '2022-05-08 11:29:47', 'प्रविधि हस्तान्तरण(महिला)', 4, 1, 'संख्या', 0, NULL),
(212, '2022-05-08 11:28:59', '2022-05-08 11:29:55', 'प्रविधि हस्तान्तरण(पुरुष)', 4, 1, 'संख्या', 0, NULL),
(213, '2022-05-08 11:39:59', NULL, 'सम्पत्ती कर', 5, 1, 'रकम', 0, 'राजस्व आम्दानी'),
(214, '2022-05-08 11:39:59', '2022-05-08 11:40:35', 'भूमि कर (मालपोत)', 5, 1, 'रकम', 0, 'राजस्व आम्दानी'),
(215, '2022-05-08 11:39:59', NULL, 'व्यवसाय कर', 5, 1, 'रकम', 0, 'राजस्व आम्दानी'),
(216, '2022-05-08 11:39:59', NULL, 'जडिबुटी, कवाडी र जीवजन्तु कर', 5, 1, 'रकम', 0, 'राजस्व आम्दानी'),
(217, '2022-05-08 11:39:59', NULL, 'घरवहाल कर', 5, 1, 'रकम', 0, 'राजस्व आम्दानी'),
(218, '2022-05-08 11:39:59', NULL, 'विज्ञापन कर', 5, 1, 'रकम', 0, 'राजस्व आम्दानी'),
(219, '2022-05-08 11:39:59', NULL, 'मनोरञ्जन कर', 5, 1, 'रकम', 0, 'राजस्व आम्दानी'),
(220, '2022-05-08 11:39:59', NULL, 'सवारी साधन कर', 5, 1, 'रकम', 0, 'राजस्व आम्दानी'),
(221, '2022-05-08 11:39:59', NULL, 'घर-जग्गा रजिष्ट्रेशन शुल्क', 5, 1, 'रकम', 0, 'राजस्व आम्दानी'),
(222, '2022-05-08 11:39:59', NULL, 'भौतिक पूर्वाधार विकास', 5, 1, 'रकम', 0, 'क्षेत्रगत  खर्च'),
(223, '2022-05-08 11:39:59', NULL, 'सामाजिक विकास', 5, 1, 'रकम', 0, 'क्षेत्रगत  खर्च'),
(224, '2022-05-08 11:39:59', NULL, 'आर्थिक विकास', 5, 1, 'रकम', 0, 'क्षेत्रगत  खर्च'),
(225, '2022-05-08 11:39:59', NULL, 'वन, वातावरण तथा विपद् व्यवस्थापन', 5, 1, 'रकम', 0, 'क्षेत्रगत  खर्च'),
(226, '2022-05-08 11:44:09', NULL, 'सहकारी दर्ता सख्या', 7, 1, 'सख्या', 0, NULL),
(227, '2022-05-08 11:44:09', NULL, 'सहकारी एकिकरण तथा विभाजन सख्या', 7, 1, 'सख्या', 0, NULL),
(228, '2022-05-08 11:44:09', NULL, 'मासिक विवरण पठाएको सख्या', 7, 1, 'सख्या', 0, NULL),
(229, '2022-05-08 11:44:09', NULL, 'सहकारी संस्था खारेजी सख्या', 7, 1, 'सख्या', 0, NULL),
(230, '2022-05-08 11:48:01', NULL, 'कृषि समूह/समिति दर्ता सख्या', 14, 1, 'सख्या', 0, NULL),
(231, '2022-05-08 11:48:01', NULL, 'कृषि समूह/समिति नविकरण सख्या', 14, 1, 'सख्या', 0, NULL),
(232, '2022-05-08 11:48:01', NULL, 'वीउ विजन वितरण', 14, 1, 'सख्या', 0, NULL),
(233, '2022-05-08 11:48:01', NULL, 'औषधी वितरण', 14, 1, 'सख्या', 0, NULL),
(234, '2022-05-08 11:48:01', NULL, 'कृषि विमा कार्यक्रम', 14, 1, 'सख्या', 0, NULL),
(235, '2022-05-08 11:48:01', NULL, 'फलफुलको विरुवा वितरण(क)', 14, 1, 'सख्या', 0, NULL),
(236, '2022-05-08 11:48:01', NULL, 'फलफुलको विरुवा वितरण(ख)', 14, 1, 'संख्या', 0, NULL),
(237, '2022-05-08 11:48:01', NULL, 'फलफुलको विरुवा वितरण(ग)', 14, 1, 'संख्या', 0, NULL),
(238, '2022-05-08 11:48:01', NULL, 'फलफुलको विरुवा वितरण(घ)', 14, 1, 'संख्या', 0, NULL),
(239, '2022-05-08 12:00:13', NULL, 'गुनासो तथा उजुरी सख्या', 11, 1, 'संख्या', 0, NULL),
(240, '2022-05-08 12:00:13', NULL, 'गुनासो तथा उजुरी फर्छयौट सख्या', 11, 1, 'संख्या', 0, NULL),
(241, '2022-05-08 12:00:13', NULL, 'व्यवसाय दर्ता', 11, 1, 'संख्या', 0, NULL),
(242, '2022-05-08 12:00:13', NULL, 'व्यवसाय नविकरण', 11, 1, 'संख्या', 0, NULL),
(243, '2022-05-08 12:00:13', NULL, 'घ वर्गको इजाजत पत्र', 11, 1, 'संख्या', 0, NULL),
(244, '2022-05-08 12:00:13', NULL, 'घ वर्गको इजाजत पत्र नविकरण', 11, 1, 'संख्या', 0, NULL),
(245, '2022-05-08 12:00:13', NULL, 'खानेपानी मुहान दर्ता', 11, 1, 'संख्या', 0, NULL),
(246, '2022-05-08 12:00:13', NULL, 'खानेपानी मुहान दर्ता नविकरण', 11, 1, 'संख्या', 0, NULL),
(247, '2022-05-08 12:00:13', NULL, 'सेवा प्रवाहमा प्रयोग भएका अनलाइन प्रणालीहरु', 11, 1, 'संख्या', 0, NULL),
(248, '2022-05-08 12:00:13', NULL, 'विपतको प्रकार र वितरण गरेको रकम', 11, 1, 'संख्या', 0, NULL),
(249, '2022-05-08 12:00:13', NULL, 'अन्य', 11, 1, 'संख्या', 0, NULL),
(250, '2022-05-08 13:48:53', NULL, 'ज्येष्ठ नागरिक परिचय पत्र(महिला)', 9, 1, 'संख्या', 0, NULL),
(251, '2022-05-08 13:48:53', NULL, 'ज्येष्ठ नागरिक परिचय पत्र(पुरुष)', 9, 1, 'संख्या', 0, NULL),
(252, '2022-05-08 13:48:53', NULL, 'ज्येष्ठ नागरिक परिचय पत्र(अन्य)', 9, 1, 'संख्या', 0, NULL),
(253, '2022-06-06 10:49:10', NULL, 'ट्याक्टर वितरण', 14, 1, 'थान', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_staff` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_staff` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `karar_staff` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacant_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maag_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shakha_id` bigint(20) UNSIGNED NOT NULL,
  `total_staff` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fiscal_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upashakhas`
--

CREATE TABLE `upashakhas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shakha_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upshakha_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upashakhas`
--

INSERT INTO `upashakhas` (`id`, `created_at`, `updated_at`, `shakha_id`, `upshakha_name`) VALUES
(1, '2022-05-08 11:06:15', NULL, '12', 'पञ्जिकरण'),
(2, '2022-05-08 11:06:30', NULL, '12', 'सामाजिक सुरक्षा भत्ता'),
(3, '2022-05-08 11:34:07', NULL, '5', 'राजस्व आम्दानी'),
(4, '2022-05-08 11:34:25', NULL, '5', 'क्षेत्रगत  खर्च');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` bigint(20) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `shakha_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `role`, `phone`, `designation`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `shakha_id`) VALUES
(1, 'bmsnepal', 'BMS NEPAL', 'info@bmsnepal.net', 1, '9851117526', 'Maintainer', 1, '0000-00-00 00:00:00', '$2y$10$LtM3MWWsAEigfs9Onkah7.VPq0NXeIG4XJhtB5w8JKlpkzkhAYnWK', '', '2022-02-15 23:30:40', '2022-03-23 12:16:54', 1, 1),
(2, 'ito', 'ITO', 'ito@gmail.com', 2, '9851117526', 'It Officer', 1, NULL, '$2y$10$o99Lu3NN0XI.njSJuQtiv.gy3vWCLlyQdzyYfl32PogltwJ8/nTj2', NULL, '2022-02-16 04:39:56', '2022-02-18 13:58:52', 2, 1),
(3, 'krishi', 'कृषि शाखा', 'krishi@gmail.com', 3, '9851117526', 'शाखा प्रमुख', 1, NULL, '$2y$10$g0gpJUvHdma.jEXfi0LRfO1pcJ8FmTvrMAjY9eFsS/zrp49LTL1T2', NULL, '2022-02-18 13:44:36', '2022-02-18 13:58:59', 3, 14),
(4, 'yojana', 'योजना शाख', 'yojana@gmail.com', 3, '9851117526', 'शाखा प्रमुख', 1, NULL, '$2y$10$wgykPjzdb7AJOftS1QdUr.z21HGyLNQXlmvAFCiYjiUvTf4JZ4dji', NULL, '2022-02-18 13:45:42', '2022-06-21 17:00:54', 3, 2),
(5, 'pashu', 'पशु सेवा शाखा', 'pashu@gmail.com', 3, '9851117526', 'शाखा प्रमुख', 1, NULL, '$2y$10$Z1VBaV6jGbjvf.fAi2QB9OozJyvn0JlyrVWeIiBUQe97rQBsSoyOK', NULL, '2022-02-18 13:46:29', '2022-06-21 17:07:21', 3, 3),
(6, 'bikash', 'बिकाश शाखा', 'bikash@gmail.com', 3, '9851117526', 'शाखा प्रमुख', 1, NULL, '$2y$10$C9ubz.91GlocKa9jag7jpOpZaqqo6cW4tfA8Lg1ZVOzhHXk0ISXJe', NULL, '2022-02-18 13:47:40', '2022-02-18 13:59:21', 3, 4),
(7, 'account', 'लेखा शाखा', 'account@gmail.com', 3, '9851117526', 'शाखा प्रमुख', 1, NULL, '$2y$10$Elj4ycHIHpsTvYWhV8GlJO2fYEn2C84jC..DMZbMhg5iGs9OqjXEu', NULL, '2022-02-18 13:48:35', '2022-02-18 13:59:29', 3, 5),
(8, 'education', 'शिक्षा शाखा', 'education@gmail.com', 3, '9851117526', 'शाखा प्रमुख', 1, NULL, '$2y$10$KpeBsIo81Af69RkA00T1Mu6GoLKmJbwrSnP/0aPOxfL4WF88qwj36', NULL, '2022-02-18 13:54:14', '2022-02-18 13:59:36', 3, 6),
(9, 'sahakari', 'सहकारी शाखा', 'sahakari@gmail.com', 3, '9851117526', 'शाखा प्रमुख', 1, NULL, '$2y$10$1aFS2AfC6sBfZQUN47RuZec4BpR02osI../dzBwQmkAb3OlsZkVv2', NULL, '2022-02-18 13:55:23', '2022-02-18 13:59:44', 3, 7),
(10, 'naksha', 'नक्शा पास इकाई', 'naksha@gmail.com', 3, '9851117526', 'शाखा प्रमुख', 1, NULL, '$2y$10$nAjDvQIiaFtWxKdqBKHETOpObRcQlPjHpj67jElOGkY9GeIvEn5ty', NULL, '2022-02-18 14:01:06', '2022-02-18 14:01:06', 3, 8),
(11, 'mahila', 'महिला तथा बालविकास शाखा', 'mahila@gmail.com', 3, '9851117526', 'शाखा प्रमुख', 1, NULL, '$2y$10$5d7Hzt4FDN41XDpD7qgWneYhPHuVg/MB1lAq2O3DiGARgBCWWzgBi', NULL, '2022-02-18 14:15:39', '2022-02-18 14:15:39', 3, 9),
(12, 'prashasan', 'प्रशासन शाखा', 'prashan@gmaill.com', 3, '9851117526', 'शाखा प्रमुख', 1, NULL, '$2y$10$3RskG.bBmzb3qocn9RkWVOxJTmjaLMlPColL4nE7TUpZa4/wsuifi', NULL, '2022-02-18 14:17:37', '2022-02-18 14:17:37', 3, 11),
(13, 'pps', 'राष्ट्रिय परिचय पत्र. पञ्जिकरण तथा सामाजिक सुरक्षा कार्यक्रम', 'pps@gmail.com', 3, '9851117526', 'शाखा प्रमुख', 1, NULL, '$2y$10$Jr6z78hkiwxC2NdZCIYxBuDWD9pSde.haDsy4jtmDLwvvkIWg.uQe', NULL, '2022-02-18 14:19:19', '2022-02-18 14:19:19', 3, 12),
(14, 'rojgar', 'रोजगार शाखा', 'rojgar@gmail.com', 3, '9851117526', 'शाखा प्रमुख', 1, NULL, '$2y$10$P9p0uhnyHEtH5bRj/I.IxeZu3DWKNlkbiMxV39dTIz0o6FY4ssDJS', NULL, '2022-02-18 14:20:47', '2022-02-18 14:20:47', 3, 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fiscal_years`
--
ALTER TABLE `fiscal_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `office_staff`
--
ALTER TABLE `office_staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `office_staff_shakha_id_foreign` (`shakha_id`);

--
-- Indexes for table `office_staffs`
--
ALTER TABLE `office_staffs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `office_staffs_shakha_id_foreign` (`shakha_id`);

--
-- Indexes for table `palika_profiles`
--
ALTER TABLE `palika_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pargati_farams`
--
ALTER TABLE `pargati_farams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pargati_farams_shakha_id_foreign` (`shakha_id`),
  ADD KEY `pargati_farams_shirshak_id_foreign` (`shirshak_id`),
  ADD KEY `pargati_farams_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `shakhas`
--
ALTER TABLE `shakhas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shirshaks`
--
ALTER TABLE `shirshaks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shirshaks_shakha_id_foreign` (`shakha_id`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_details_shakha_id_foreign` (`shakha_id`);

--
-- Indexes for table `upashakhas`
--
ALTER TABLE `upashakhas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_shakha_id_foreign` (`shakha_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fiscal_years`
--
ALTER TABLE `fiscal_years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `office_staff`
--
ALTER TABLE `office_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `office_staffs`
--
ALTER TABLE `office_staffs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `palika_profiles`
--
ALTER TABLE `palika_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pargati_farams`
--
ALTER TABLE `pargati_farams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shakhas`
--
ALTER TABLE `shakhas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `shirshaks`
--
ALTER TABLE `shirshaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `staff_details`
--
ALTER TABLE `staff_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upashakhas`
--
ALTER TABLE `upashakhas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `office_staff`
--
ALTER TABLE `office_staff`
  ADD CONSTRAINT `office_staff_shakha_id_foreign` FOREIGN KEY (`shakha_id`) REFERENCES `shakhas` (`id`);

--
-- Constraints for table `office_staffs`
--
ALTER TABLE `office_staffs`
  ADD CONSTRAINT `office_staffs_shakha_id_foreign` FOREIGN KEY (`shakha_id`) REFERENCES `shakhas` (`id`);

--
-- Constraints for table `pargati_farams`
--
ALTER TABLE `pargati_farams`
  ADD CONSTRAINT `pargati_farams_shakha_id_foreign` FOREIGN KEY (`shakha_id`) REFERENCES `shakhas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pargati_farams_shirshak_id_foreign` FOREIGN KEY (`shirshak_id`) REFERENCES `shirshaks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pargati_farams_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shirshaks`
--
ALTER TABLE `shirshaks`
  ADD CONSTRAINT `shirshaks_shakha_id_foreign` FOREIGN KEY (`shakha_id`) REFERENCES `shakhas` (`id`);

--
-- Constraints for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD CONSTRAINT `staff_details_shakha_id_foreign` FOREIGN KEY (`shakha_id`) REFERENCES `shakhas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `users_shakha_id_foreign` FOREIGN KEY (`shakha_id`) REFERENCES `shakhas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
