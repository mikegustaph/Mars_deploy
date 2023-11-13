-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 07:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) NOT NULL,
  `contactPerson_id` bigint(11) DEFAULT NULL,
  `authorised_share` varchar(45) DEFAULT NULL,
  `authorised_value` varchar(20) DEFAULT NULL,
  `paidup_value` varchar(20) DEFAULT NULL,
  `paidup_total` varchar(20) DEFAULT NULL,
  `authorised_total` varchar(20) DEFAULT NULL,
  `paidup_share` varchar(45) DEFAULT NULL,
  `isNew` enum('Yes','No') NOT NULL DEFAULT 'No',
  `vrnAvailable` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `name` varchar(255) DEFAULT NULL,
  `tradeas` varchar(45) DEFAULT NULL,
  `address1` varchar(125) DEFAULT NULL,
  `plot` varchar(45) DEFAULT NULL,
  `block` varchar(45) DEFAULT NULL,
  `house` varchar(45) DEFAULT NULL,
  `status` enum('Active','Pending','Inactive') NOT NULL DEFAULT 'Active',
  `city` varchar(45) DEFAULT NULL,
  `phone_number` varchar(16) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `tin_number` varchar(10) DEFAULT NULL,
  `tinCert` varchar(255) DEFAULT NULL,
  `vrn` varchar(125) DEFAULT NULL,
  `vrnCert` varchar(225) DEFAULT NULL,
  `efin` varchar(125) DEFAULT NULL,
  `efin_password` varchar(255) DEFAULT NULL,
  `tax_region` varchar(45) DEFAULT NULL,
  `brelaORS` varchar(155) DEFAULT NULL,
  `CertofReg` varchar(255) DEFAULT NULL,
  `CertExtr` varchar(255) DEFAULT NULL,
  `CertIncorp` varchar(25) DEFAULT NULL,
  `certVat` varchar(65) DEFAULT NULL,
  `memart` varchar(255) DEFAULT NULL,
  `CertRegDate` varchar(155) DEFAULT NULL,
  `tax_file_location` varchar(255) DEFAULT NULL,
  `fiscal_yr` varchar(15) DEFAULT NULL,
  `company_type` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `contactPerson_id`, `authorised_share`, `authorised_value`, `paidup_value`, `paidup_total`, `authorised_total`, `paidup_share`, `isNew`, `vrnAvailable`, `name`, `tradeas`, `address1`, `plot`, `block`, `house`, `status`, `city`, `phone_number`, `email`, `tin_number`, `tinCert`, `vrn`, `vrnCert`, `efin`, `efin_password`, `tax_region`, `brelaORS`, `CertofReg`, `CertExtr`, `CertIncorp`, `certVat`, `memart`, `CertRegDate`, `tax_file_location`, `fiscal_yr`, `company_type`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'Yes', 'Clix Consultancy', 'Clix', 'West Upanga', 'Amverton house', NULL, NULL, 'Active', 'Dar es salaam', '0656122491', 'stivemtenah@gmail.com', '234234123', '649c73b4678af.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '649c73b4687d0.pdf', '649c73b468aba.pdf', NULL, '', NULL, NULL, NULL, NULL, 'Sole Proprietor', '2023-06-28 14:53:56', '2023-06-28 14:53:56'),
(2, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'Yes', 'Zesha', 'zesha', 'west upanga', 'amverton house', NULL, NULL, 'Active', 'Dar es salaam', '064565001', 'michaelgustaph@gmail.com', '342342111', '649eb3ff4d410.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '649eb3ff50bfb.pdf', 'C:\\xampp\\tmp\\php6A76.tmp', NULL, '', NULL, NULL, NULL, NULL, 'Sole Proprietor', '2023-06-30 10:52:47', '2023-06-30 10:52:47'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'Yes', 'afrocop', NULL, 'West Upanga', 'Amverton house', NULL, NULL, 'Active', 'Dar es salaam', '0656122491', 'miqdaad@clix.co.tz', '124234123', '64ae76e2f0cf4.pdf', '01225587J', NULL, NULL, NULL, NULL, NULL, '64ae76e2f21e3.pdf', '64ae76e2f23f3.pdf', NULL, '64ae76e2f1f3c.pdf', NULL, NULL, NULL, NULL, 'Partnership', '2023-07-12 09:48:18', '2023-07-12 09:48:18'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'Yes', 'afrocop', NULL, 'West Upanga', 'Amverton house', NULL, NULL, 'Active', 'Dar es salaam', '0656122491', 'miqdaad@clix.co.tz', '124234123', '64ae76f3b347a.pdf', '01225587J', NULL, NULL, NULL, NULL, NULL, '64ae76f3b4c6b.pdf', '64ae76f3b4eb6.pdf', NULL, '64ae76f3b4a2e.pdf', NULL, NULL, NULL, NULL, 'Partnership', '2023-07-12 09:48:35', '2023-07-12 09:48:35'),
(5, NULL, '45', '3', '3', '42', '135', '14', 'No', 'Yes', 'M-bet', NULL, 'West Upanga', '23', 'B', '12', 'Active', 'Dar es salaam', '0656122491', 'stivemtenah@gmail.com', '123123123', '64ae80ce61c75.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '64ae80ce632b8.pdf', NULL, '64ae80ce62955.pdf', NULL, NULL, NULL, NULL, 'Limited', '2023-07-12 10:30:38', '2023-10-02 12:52:51'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'Yes', 'naheed', 'naheed', NULL, NULL, NULL, NULL, 'Active', NULL, '0656122491', 'stivemtenah@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sole Proprietor', '2023-08-10 08:00:34', '2023-08-10 08:00:34'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'Yes', 'gelato', 'gelato', NULL, NULL, NULL, NULL, 'Active', NULL, '0645650000', 'nyanduvagustavo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sole Proprietor', '2023-09-15 13:45:14', '2023-09-15 13:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `client_services`
--

CREATE TABLE `client_services` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `services_id` bigint(11) NOT NULL,
  `clients_id` bigint(11) NOT NULL,
  `service_repeat` varchar(45) DEFAULT NULL,
  `schedule_start` date DEFAULT NULL,
  `schedule_end` date DEFAULT NULL,
  `schedule_next` date DEFAULT NULL,
  `status` enum('Activate','Deactivate') NOT NULL DEFAULT 'Activate',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_services`
--

INSERT INTO `client_services` (`id`, `services_id`, `clients_id`, `service_repeat`, `schedule_start`, `schedule_end`, `schedule_next`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'monthly', '2023-06-30', '2023-06-30', NULL, 'Activate', '2023-06-30 11:02:07', '2023-06-30 11:02:07'),
(3, 2, 1, 'weekly', '2023-07-01', '2023-07-01', NULL, 'Activate', '2023-07-01 12:36:52', '2023-07-01 12:36:52'),
(4, 4, 3, NULL, NULL, NULL, NULL, 'Activate', '2023-08-14 09:35:31', '2023-08-14 09:35:31'),
(5, 9, 3, NULL, NULL, NULL, NULL, 'Activate', '2023-08-14 11:07:01', '2023-08-14 11:07:01'),
(6, 10, 3, NULL, NULL, NULL, NULL, 'Activate', '2023-08-30 13:35:38', '2023-08-30 13:35:38'),
(7, 11, 3, NULL, NULL, NULL, NULL, 'Activate', '2023-09-24 17:01:01', '2023-09-24 17:01:01'),
(8, 1, 2, NULL, NULL, NULL, NULL, 'Activate', '2023-09-26 01:09:33', '2023-09-26 01:09:33'),
(9, 2, 2, NULL, NULL, NULL, NULL, 'Activate', '2023-09-26 01:09:33', '2023-09-26 01:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `client__contact_people`
--

CREATE TABLE `client__contact_people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` varchar(45) NOT NULL,
  `contactpeople_id` bigint(20) UNSIGNED NOT NULL,
  `shareholding` varchar(100) DEFAULT NULL,
  `director` varchar(45) DEFAULT NULL,
  `shareholder` varchar(45) DEFAULT NULL,
  `share_percent` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client__contact_people`
--

INSERT INTO `client__contact_people` (`id`, `client_id`, `contactpeople_id`, `shareholding`, `director`, `shareholder`, `share_percent`, `created_at`, `updated_at`) VALUES
(1, '4', 1, '123400', '', '', '34', '2023-08-09 14:58:57', '2023-08-09 14:58:57'),
(2, '3', 2, NULL, NULL, NULL, '34', '2023-09-23 10:17:47', '2023-09-23 10:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `company_types`
--

CREATE TABLE `company_types` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(11) NOT NULL,
  `companytype` enum('0','1','2') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_people`
--

CREATE TABLE `contact_people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `tin` varchar(15) NOT NULL,
  `shareholder` varchar(255) DEFAULT NULL,
  `radio` enum('resident','non-resident') DEFAULT NULL,
  `passport` varchar(45) DEFAULT NULL,
  `passportcopy` varchar(65) DEFAULT NULL,
  `nida` varchar(45) DEFAULT NULL,
  `nidacopy` varchar(65) DEFAULT NULL,
  `tinCert` varchar(65) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_people`
--

INSERT INTO `contact_people` (`id`, `first_name`, `middle_name`, `last_name`, `phone`, `email`, `tin`, `shareholder`, `radio`, `passport`, `passportcopy`, `nida`, `nidacopy`, `tinCert`, `created_at`, `updated_at`) VALUES
(1, 'stive', 'mike', 'Smith', '0675000000', 'stivemtenah@gmail.com', '64543242', NULL, 'resident', 'TAE344543', '64ad16b32d715.jpg', '24647343123456789832', '64ad16b33138c.jpg', NULL, '2023-07-11 08:45:39', '2023-07-11 08:45:39'),
(2, 'Kelvin', 'Wills', 'Smith', '0656122491', 'michaelgustaph@gmail.com', '123123123', NULL, 'resident', NULL, NULL, '23243546762345467234', '650eb757eb531.pdf', '650eb757eca2e.pdf', '2023-09-23 10:00:55', '2023-09-23 10:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `contact_person_limiteds`
--

CREATE TABLE `contact_person_limiteds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `contactpeople_id` varchar(20) DEFAULT NULL,
  `position` varchar(65) DEFAULT NULL,
  `number_shares` varchar(125) DEFAULT NULL,
  `share_percent` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_person_limiteds`
--

INSERT INTO `contact_person_limiteds` (`id`, `client_id`, `contactpeople_id`, `position`, `number_shares`, `share_percent`, `created_at`, `updated_at`) VALUES
(1, 5, '2', 'director', '4', '28.47', '2023-10-02 13:03:52', '2023-10-02 13:03:52'),
(2, 5, '2', 'shareholder', '5', '35.71', '2023-10-02 13:06:52', '2023-10-02 13:06:52');

-- --------------------------------------------------------

--
-- Table structure for table `contact_person_partners`
--

CREATE TABLE `contact_person_partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `contactpeople_id` bigint(20) UNSIGNED NOT NULL,
  `shareholder` varchar(45) DEFAULT NULL,
  `other_role` varchar(45) DEFAULT NULL,
  `shareholding` varchar(45) DEFAULT NULL,
  `share_percent` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_person_partners`
--

INSERT INTO `contact_person_partners` (`id`, `client_id`, `contactpeople_id`, `shareholder`, `other_role`, `shareholding`, `share_percent`, `created_at`, `updated_at`) VALUES
(1, 3, 1, NULL, NULL, NULL, '23', '2023-10-01 06:20:42', '2023-10-01 06:20:42'),
(2, 3, 2, NULL, NULL, NULL, '23', '2023-11-13 17:00:49', '2023-11-13 17:00:49');

-- --------------------------------------------------------

--
-- Table structure for table `dispatchjob`
--

CREATE TABLE `dispatchjob` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clients_id` varchar(65) NOT NULL,
  `dispatch_date` varchar(65) NOT NULL,
  `checkout` varchar(65) NOT NULL,
  `narration` varchar(65) NOT NULL,
  `custom_desc` varchar(65) NOT NULL,
  `custom_check` varchar(65) NOT NULL,
  `custom_narration` varchar(65) NOT NULL,
  `dispatch_note` varchar(65) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dispatch_documents`
--

CREATE TABLE `dispatch_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dispatch_date` date NOT NULL,
  `dispatch_note` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `middle_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `status` enum('Active','Retired','Supended') NOT NULL DEFAULT 'Active',
  `images` varchar(65) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `cv` varchar(65) DEFAULT NULL,
  `contract` varchar(65) NOT NULL,
  `application` varchar(45) DEFAULT NULL,
  `offer_letter` varchar(45) DEFAULT NULL,
  `nssf` varchar(255) DEFAULT NULL,
  `termination` varchar(45) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `joining_date` varchar(255) DEFAULT NULL,
  `contract_period` varchar(255) DEFAULT NULL,
  `tin` varchar(45) DEFAULT NULL,
  `nida` varchar(45) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `role_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `middle_name`, `last_name`, `status`, `images`, `position`, `cv`, `contract`, `application`, `offer_letter`, `nssf`, `termination`, `phone`, `email`, `joining_date`, `contract_period`, `tin`, `nida`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Mudy', 'Kassam', 'Benson', 'Active', '1686849722.png', 'Senior accountant', 'C:\\xampp\\tmp\\php6B30.tmp', '', NULL, NULL, '23435457', '06/10/2025', '+255656122490', 'michaelgustaph@gmail.com', '02/08/2022', '3', '678797', NULL, 1, 1, '2023-06-15 14:22:02', '2023-06-15 14:22:02'),
(2, 'stive', 'mike', 'mtena', 'Retired', '1687786776.png', 'Senior accountant', '649995189b3e4.pdf', '649995189c7fa.pdf', '649995189d6f7.pdf', '649995189e422.pdf', '476532543144', '06/27/2023', '0675000000', 'stivemtenah@gmail.com', '05/29/2023', '2', '64543242', NULL, 2, 2, '2023-06-26 10:39:36', '2023-06-26 10:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `generalsetting`
--

CREATE TABLE `generalsetting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(45) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `logo` varchar(45) NOT NULL,
  `favicon` varchar(45) NOT NULL,
  `footer` varchar(125) NOT NULL,
  `address` varchar(125) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generalsetting`
--

INSERT INTO `generalsetting` (`id`, `site_name`, `phone`, `email`, `logo`, `favicon`, `footer`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Mars', '+255656122491', 'miqdaad@clix.co.tz', 'logo.png', 'favicon.ico', 'all right reserved', 'kimara baruti', '2023-06-21 11:43:17', '2023-06-21 08:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `hrm_settings`
--

CREATE TABLE `hrm_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `footer` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(7, '2023_04_08_201723_create_employees_table', 2),
(8, '2023_04_10_124512_create_services_table', 2),
(9, '2023_04_10_130053_create_service_prechecks_table', 2),
(13, '2023_04_11_122627_create_task_updates_table', 3),
(14, '2023_04_11_123603_create_roles_table', 3),
(15, '2023_04_11_123708_create_role_permissions_table', 3),
(16, '2023_04_11_123723_create_permissions_table', 3),
(18, '2023_04_11_123811_create_policies_table', 3),
(19, '2023_04_11_130606_create_dispatch_documents_table', 3),
(20, '2023_04_17_150342_create_template_table', 3),
(21, '2023_05_23_110135_create_profile_settings_table', 4),
(22, '2023_05_23_110740_create_hrm_settings_table', 5),
(24, '2023_05_24_094403_dispatchjob', 5),
(25, '2023_05_24_131156_create_reports_table', 5),
(26, '2023_06_13_084407_create_pwdprtal_table', 6),
(34, '2023_04_11_123743_create_reminders_table', 11),
(36, '2023_05_23_111157_create_generalsetting_table', 12),
(37, '2023_06_17_171637_create_recieve_docs_table', 13),
(42, '2023_06_13_143549_create_company_types_table', 17),
(44, '2023_06_13_113820_create_pwdportal_table', 19),
(46, '2023_04_05_090715_create_clients_table', 21),
(47, '2023_04_10_140451_create_client_services_table', 22),
(48, '2023_07_05_112312_create_permission_table', 23),
(49, '2023_07_05_114448_create_permissions_table', 24),
(50, '2023_04_06_094305_create_contact_people_table', 25),
(52, '2023_07_18_142301_create_role_has_permission_table', 26),
(53, '2023_07_24_171348_create_permission_tables', 27),
(54, '2023_08_09_172942_create_client__contact_people_table', 28),
(55, '2023_08_24_135033_create_task_post_table', 29),
(57, '2023_09_06_112923_create_task_likes_table', 31),
(59, '2023_08_24_130649_create_task_comments_table', 32),
(63, '2023_09_14_113854_create_postcheck_attachment_table', 35),
(64, '2023_04_11_070415_create_tasks_table', 36),
(65, '2023_09_29_162459_create_contact_person_partners_table', 37),
(66, '2023_09_29_162608_create_contact_person_limiteds_table', 38),
(67, '2023_04_10_130436_create_service_postchecks_table', 39),
(68, '2023_09_14_113516_create_precheck_attachment_table', 40);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'client-add', 'web', '2023-07-26 16:43:55', '2023-07-26 16:43:55'),
(2, 'client-view', 'web', '2023-07-26 16:44:14', '2023-07-26 16:44:14'),
(3, 'client-edit', 'web', '2023-07-26 16:44:27', '2023-07-26 16:44:27'),
(6, 'client-delete', 'web', '2023-07-26 16:45:11', '2023-07-26 16:45:11'),
(7, 'contact-add', 'web', '2023-07-26 16:48:45', '2023-07-26 16:48:45'),
(8, 'contact-view', 'web', '2023-07-26 16:48:57', '2023-07-26 16:48:57'),
(9, 'contact-edit', 'web', '2023-07-26 16:49:10', '2023-07-26 16:49:10'),
(10, 'contact-delete', 'web', '2023-07-26 16:49:26', '2023-07-26 16:49:26'),
(11, 'task-add', 'web', '2023-07-26 16:49:54', '2023-07-26 16:49:54'),
(12, 'task-edit', 'web', '2023-07-26 16:50:05', '2023-07-26 16:50:05'),
(13, 'task-view', 'web', '2023-07-26 16:50:17', '2023-07-26 16:50:17'),
(14, 'task-delete', 'web', '2023-07-26 16:50:33', '2023-07-26 16:50:33'),
(15, 'service-add', 'web', '2023-07-26 16:51:10', '2023-07-26 16:51:10'),
(16, 'service-edit', 'web', '2023-07-26 16:51:20', '2023-07-26 16:51:20'),
(17, 'service-view', 'web', '2023-07-26 16:51:40', '2023-07-26 16:51:40'),
(18, 'service-delete', 'web', '2023-07-26 16:51:50', '2023-07-26 16:51:50'),
(19, 'dispatch-add', 'web', '2023-07-26 16:52:21', '2023-07-26 16:52:21'),
(20, 'dispatch-edit', 'web', '2023-07-26 16:52:45', '2023-07-26 16:52:45'),
(21, 'dispatch-view', 'web', '2023-07-26 16:52:57', '2023-07-26 16:52:57'),
(22, 'dispatch-delete', 'web', '2023-07-26 16:53:12', '2023-07-26 16:53:12'),
(23, 'reminder-add', 'web', '2023-07-26 16:53:25', '2023-07-26 16:53:25'),
(24, 'reminder-edit', 'web', '2023-07-26 16:54:09', '2023-07-26 16:54:09'),
(25, 'reminder-view', 'web', '2023-07-26 16:54:24', '2023-07-26 16:54:24'),
(26, 'reminder-delete', 'web', '2023-07-26 16:54:34', '2023-07-26 16:54:34'),
(27, 'policies-add', 'web', '2023-07-26 16:55:07', '2023-07-26 16:55:07'),
(28, 'policies-edit', 'web', '2023-07-26 16:55:20', '2023-07-26 16:55:20'),
(29, 'policies-view', 'web', '2023-07-26 16:55:36', '2023-07-26 16:55:36'),
(30, 'policies-delete', 'web', '2023-07-26 16:55:56', '2023-07-26 16:55:56'),
(31, 'template-add', 'web', '2023-07-26 16:56:12', '2023-07-26 16:56:12'),
(32, 'template-edit', 'web', '2023-07-26 16:56:23', '2023-07-26 16:56:23'),
(33, 'template-view', 'web', '2023-07-26 16:57:01', '2023-07-26 16:57:01'),
(34, 'template-delete', 'web', '2023-07-26 16:57:16', '2023-07-26 16:57:16'),
(35, 'employee-add', 'web', '2023-07-26 16:57:34', '2023-07-26 16:57:34'),
(36, 'employee-edit', 'web', '2023-07-26 16:58:27', '2023-07-26 16:58:27'),
(37, 'employee-view', 'web', '2023-07-26 16:58:46', '2023-07-26 16:58:46'),
(38, 'employee-delete', 'web', '2023-07-26 16:59:02', '2023-07-26 16:59:02'),
(39, 'user-add', 'web', '2023-07-26 16:59:13', '2023-07-26 16:59:13'),
(40, 'user-edit', 'web', '2023-07-26 16:59:50', '2023-07-26 16:59:50'),
(41, 'user-view', 'web', '2023-07-26 17:00:11', '2023-07-26 17:00:11'),
(42, 'user-delete', 'web', '2023-07-26 17:00:30', '2023-07-26 17:00:30'),
(43, 'daily-report', 'web', '2023-07-26 17:01:02', '2023-07-26 17:01:02'),
(44, 'weekly-report', 'web', '2023-07-26 17:01:15', '2023-07-26 17:01:15'),
(45, 'monthly-report', 'web', '2023-07-26 17:01:30', '2023-07-26 17:01:30'),
(46, 'yearly-report', 'web', '2023-07-26 17:01:53', '2023-07-26 17:01:53'),
(52, 'role-view', 'web', '2023-08-01 13:16:15', '2023-08-01 13:16:15'),
(53, 'role-create', 'web', '2023-08-01 13:16:15', '2023-08-01 13:16:15'),
(54, 'role-edit', 'web', '2023-08-01 13:16:15', '2023-08-01 13:16:15'),
(55, 'role-delete', 'web', '2023-08-01 13:16:15', '2023-08-01 13:16:15'),
(56, 'client-contact-person', 'web', '2023-11-01 14:35:58', '2023-11-01 14:35:58'),
(57, 'assign-service', 'web', '2023-11-01 14:35:58', '2023-11-01 14:35:58'),
(58, 'portal-password', 'web', '2023-11-01 14:35:58', '2023-11-01 14:35:58'),
(59, 'new-company', 'web', '2023-11-01 14:35:58', '2023-11-01 14:35:58'),
(60, 'assign-staff', 'web', '2023-11-01 14:35:58', '2023-11-01 14:35:58'),
(61, 'receive-document', 'web', '2023-11-01 14:35:58', '2023-11-01 14:35:58'),
(62, 'service-checklist', 'web', '2023-11-01 14:35:58', '2023-11-01 14:35:58'),
(63, 'dispatch-dispatch', 'web', '2023-11-01 14:35:58', '2023-11-01 14:35:58'),
(64, 'reminder-complete', 'web', '2023-11-01 14:35:58', '2023-11-01 14:35:58'),
(65, 'role-permission', 'web', '2023-11-01 14:35:58', '2023-11-01 14:35:58'),
(66, 'general-setting', 'web', '2023-11-01 14:35:58', '2023-11-01 14:35:58'),
(67, 'profile-setting', 'web', '2023-11-01 14:35:58', '2023-11-01 14:35:58'),
(68, 'hrm-setting', 'web', '2023-11-01 14:35:58', '2023-11-01 14:35:58'),
(69, 'module-setting', 'web', '2023-11-01 14:35:58', '2023-11-01 14:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `policy_name` varchar(45) NOT NULL,
  `file` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `policy_name`, `file`, `created_at`, `updated_at`) VALUES
(1, 'employment regulation', '1688642348_ilovepdf_merged (1) (1) (1).pdf', '2023-07-06 11:19:10', '2023-07-06 11:19:10'),
(2, 'setrdg', '1699873447_Ellipsis Digital_ NEW FULL STACK PHP Developer Tasks.pdf', '2023-11-13 11:04:07', '2023-11-13 11:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `postcheck_attachment`
--

CREATE TABLE `postcheck_attachment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `postcheck_attach` varchar(125) NOT NULL,
  `task_id` bigint(20) NOT NULL,
  `status` enum('yes','no') NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postcheck_attachment`
--

INSERT INTO `postcheck_attachment` (`id`, `postcheck_attach`, `task_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '653a485b95dec.pdf', 1, 'yes', '2023-10-30 13:18:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `precheck_attachment`
--

CREATE TABLE `precheck_attachment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `precheck_attach` varchar(125) NOT NULL,
  `task_id` bigint(20) NOT NULL,
  `precheck_id` bigint(20) NOT NULL,
  `status` enum('yes','no') NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `precheck_attachment`
--

INSERT INTO `precheck_attachment` (`id`, `precheck_attach`, `task_id`, `precheck_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '653a485b95dec.pdf', 1, 6, 'yes', '2023-10-26 11:07:07', '2023-10-26 11:07:07'),
(2, '653a485b982e8.pdf', 1, 7, 'yes', '2023-10-26 11:07:07', '2023-10-26 11:07:07'),
(3, '653a485b99535.pdf', 1, 9, 'yes', '2023-10-26 11:07:07', '2023-10-26 11:07:07'),
(4, '653a485b9a8d3.pdf', 1, 10, 'yes', '2023-10-26 11:07:07', '2023-10-26 11:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `profile_settings`
--

CREATE TABLE `profile_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pwdportal`
--

CREATE TABLE `pwdportal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` varchar(255) DEFAULT NULL,
  `tra_portal_name` varchar(255) DEFAULT NULL,
  `tra_portal_tin` varchar(255) DEFAULT NULL,
  `tax_portal_passwrd` varchar(255) DEFAULT NULL,
  `tax_portal_tin` varchar(255) DEFAULT NULL,
  `payment_passwrd` varchar(255) DEFAULT NULL,
  `brela_name` varchar(255) DEFAULT NULL,
  `brela_userid` varchar(255) DEFAULT NULL,
  `brela_passwrd` varchar(255) DEFAULT NULL,
  `nssf_userid` varchar(255) DEFAULT NULL,
  `nssf_passwrd` varchar(255) DEFAULT NULL,
  `efin_userid` varchar(255) DEFAULT NULL,
  `efin_passwrd` varchar(255) DEFAULT NULL,
  `wcf_name` varchar(255) DEFAULT NULL,
  `wcf_userid` varchar(255) DEFAULT NULL,
  `wcf_passwrd` varchar(255) DEFAULT NULL,
  `wcf_ic_name` varchar(255) DEFAULT NULL,
  `wcf_ic_userid` varchar(255) DEFAULT NULL,
  `wcf_ic_passwrd` varchar(255) DEFAULT NULL,
  `bo_name` varchar(255) DEFAULT NULL,
  `bo_userid` varchar(255) DEFAULT NULL,
  `bo_passwrd` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pwdportal`
--

INSERT INTO `pwdportal` (`id`, `client_id`, `tra_portal_name`, `tra_portal_tin`, `tax_portal_passwrd`, `tax_portal_tin`, `payment_passwrd`, `brela_name`, `brela_userid`, `brela_passwrd`, `nssf_userid`, `nssf_passwrd`, `efin_userid`, `efin_passwrd`, `wcf_name`, `wcf_userid`, `wcf_passwrd`, `wcf_ic_name`, `wcf_ic_userid`, `wcf_ic_passwrd`, `bo_name`, `bo_userid`, `bo_passwrd`, `created_at`, `updated_at`) VALUES
(1, NULL, 'mike dev', NULL, 'dfgdfgdf', '365473', '452345', '43trtertt', 'wrwetwrtrt3', '3443tdfvs', 'rtedfgfd', 'dbdbdfbdf', 'dfbdfbds', '4t3t3t3', NULL, 'cbvcbdb', 'bvdbxvbx', 'bcvbcvbc', 'cvbcvbcv', 'dfcbd', 'dfbcvb', NULL, NULL, '2023-06-28 13:23:16', '2023-06-28 13:23:16'),
(2, NULL, 'mike', 'mike dev', 'dfgdfgdf', '365473', '452345', '43trtertt', 'wrwetwrtrt3', '3443tdfvs', 'mike dev', 'mike dev', 'mike dev', 'mike dev', NULL, 'cbvcbdb', 'bvdbxvbx', 'bcvbcvbc', 'cvbcvbcv', 'dfcbd', 'dfbcvb', NULL, NULL, '2023-06-28 14:54:32', '2023-06-28 14:54:32'),
(3, '4', 'mikedev', 'mikedev', 'mikedev', 'mikedev', 'mikedev', 'mikedev', 'mikedev', 'mikedev', 'mikedev', 'mikedev', 'mikedev', 'mikedev', NULL, 'mikedev', 'mikedev', 'mikedev', 'mikedev', 'mikedev', 'mikedev', NULL, NULL, '2023-07-12 09:49:09', '2023-07-12 09:49:09'),
(4, '5', 'mike dev', 'mike dev', 'dfgdfgdf', '365473', '452345', '43trtertt', 'wrwetwrtrt3', '3443tdfvs', 'mikedev', 'mikedev', 'mike dev', 'mike dev', NULL, 'cbvcbdb', 'bvdbxvbx', 'bcvbcvbc', 'cvbcvbcv', 'dfcbd', 'dfbcvb', NULL, NULL, '2023-07-12 10:31:03', '2023-07-12 10:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `recieve_docs`
--

CREATE TABLE `recieve_docs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `dateReceived` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `fileType` enum('file','folder','box') NOT NULL DEFAULT 'file',
  `narration` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recieve_docs`
--

INSERT INTO `recieve_docs` (`id`, `client_id`, `service_id`, `task_id`, `dateReceived`, `note`, `quantity`, `fileType`, `narration`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2023-06-22', 'all file received', '1', 'file', 'rthrh', '2023-06-21 13:39:22', '2023-06-21 13:39:22'),
(2, 1, 1, 1, '2023-06-22', 'all file received', '1', 'file', 'rthrh', '2023-06-21 13:39:31', '2023-06-21 13:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(155) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `frequency` enum('none','daily','weekly','monthly','yearly') NOT NULL DEFAULT 'none',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`id`, `name`, `description`, `date`, `time`, `frequency`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'dtgnsbfdcbfv', '2023-06-20', '19:42:00', 'daily', '2023-06-19 11:40:56', '2023-06-19 11:40:56'),
(2, 'admin', 'dtgnsbfdcbfv', '2023-06-20', '19:42:00', 'weekly', '2023-06-19 11:40:58', '2023-06-19 11:40:58'),
(3, 'admin', 'dtgnsbfdcbfv', '2023-06-20', '19:42:00', 'weekly', '2023-06-19 11:40:58', '2023-06-19 11:40:58'),
(4, 'admin', 'dtgnsbfdcbfv', '2023-06-20', '19:42:00', 'weekly', '2023-06-19 11:40:58', '2023-06-19 11:40:58'),
(5, 'mike', 'dfbgfdsb', '2023-06-20', '19:43:00', 'monthly', '2023-06-19 11:41:56', '2023-06-19 11:41:56'),
(6, 'Zanzibar', 'sdfghjmnbnm', '2023-06-19', '20:21:00', 'weekly', '2023-06-19 12:19:09', '2023-06-19 12:19:09'),
(7, 'Zanzibar', 'sdfghjmnbnm', '2023-06-19', '20:21:00', 'weekly', '2023-06-19 12:19:21', '2023-06-19 12:19:21'),
(8, 'Tanzania', 'fjkmmhjhgdfhbnbm', '2023-06-20', '19:21:00', 'monthly', '2023-06-19 12:20:31', '2023-06-19 12:20:31'),
(9, 'Tanzania', 'fjkmmhjhgdfhbnbm', '2023-06-20', '19:21:00', 'monthly', '2023-06-19 12:20:32', '2023-06-19 12:20:32'),
(10, 'Tanzania', 'sdfghjhghbd', '2023-06-20', '19:23:00', 'monthly', '2023-06-19 12:22:59', '2023-06-19 12:22:59'),
(11, 'Tanzania', 'sdfghjhghbd', '2023-06-20', '19:23:00', 'monthly', '2023-06-19 12:23:03', '2023-06-19 12:23:03'),
(12, 'Tanzania', 'sdfghjhghbd', '2023-06-20', '19:23:00', 'monthly', '2023-06-19 12:23:03', '2023-06-19 12:23:03'),
(13, 'mike', 'sdgfjrgbgbsgb', '2023-06-20', '21:34:00', 'weekly', '2023-06-19 12:31:21', '2023-06-19 12:31:21'),
(14, 'admin', 'fgdsb', '2023-06-20', '21:36:00', 'monthly', '2023-06-19 12:33:11', '2023-06-19 12:33:11'),
(15, 'admin', 'fgdsb', '2023-06-20', '21:36:00', 'monthly', '2023-06-19 12:33:13', '2023-06-19 12:33:13'),
(16, 'admin', 'fgdsb', '2023-06-20', '21:36:00', 'monthly', '2023-06-19 12:33:13', '2023-06-19 12:33:13'),
(17, 'Salamaa', 'hello', '2023-06-20', '23:43:00', 'weekly', '2023-06-19 12:38:39', '2023-06-19 12:38:39'),
(18, 'mike', 'fchgnvf', '2023-06-20', '19:45:00', 'monthly', '2023-06-19 12:44:13', '2023-06-19 12:44:13'),
(19, 'Tanzania', 'fghbmnjh', '2023-06-19', '19:47:00', 'monthly', '2023-06-19 12:45:53', '2023-06-19 12:45:53'),
(20, 'Tanzania', 'fghbmnjh', '2023-06-19', '19:47:00', 'monthly', '2023-06-19 12:46:54', '2023-06-19 12:46:54'),
(21, 'Puma Sneakers for Men', 'rdgfbbvcx', '2023-06-19', '18:48:00', 'daily', '2023-06-19 12:48:42', '2023-06-19 12:48:42'),
(22, 'dfbvzvfd', 'zdfbxbdf', '2023-06-19', '19:49:00', 'monthly', '2023-06-19 12:49:01', '2023-06-19 12:49:01'),
(23, 'dfbvzvfd', 'zdfbxbdf', '2023-06-19', '19:49:00', 'monthly', '2023-06-19 13:10:41', '2023-06-19 13:10:41'),
(24, 'dfbvzvfd', 'zdfbxbdf', '2023-06-19', '19:49:00', 'monthly', '2023-06-19 13:11:38', '2023-06-19 13:11:38'),
(25, 'dfbvzvfd', 'zdfbxbdf', '2023-06-29', '19:49:00', 'monthly', '2023-06-19 13:11:48', '2023-06-19 13:11:48'),
(26, 'dfbvzvfd', 'zdfbxbdf', '2023-06-19', '19:49:00', 'monthly', '2023-06-19 13:14:17', '2023-06-19 13:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', 'Access all data', '2023-07-26 10:29:49', '2023-07-26 10:29:49'),
(2, 'Coordinator', 'web', 'Access some of data', '2023-10-04 10:48:27', NULL),
(3, 'Senior', 'web', 'Access some of data', '2023-10-04 10:48:27', NULL),
(4, 'Junior', 'web', 'Access some of data', '2023-10-04 10:54:29', '2023-10-04 11:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(2, 2),
(3, 1),
(11, 1),
(12, 1),
(13, 1),
(13, 2),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(43, 2),
(44, 1),
(45, 1),
(46, 1),
(52, 1),
(54, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) NOT NULL,
  `service_name` varchar(45) DEFAULT NULL,
  `role` enum('Admin','Coordinator','Senior','Junior') NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `duedate` varchar(255) DEFAULT NULL,
  `repeat` varchar(45) DEFAULT NULL,
  `service_kpi` enum('Yes','No') DEFAULT NULL,
  `kpi_receive_target_day` int(11) DEFAULT NULL,
  `kpi_receive_early_points` int(11) DEFAULT NULL,
  `kpi_receive_late_points` int(11) DEFAULT NULL,
  `kpi_complete_target_day` int(11) DEFAULT NULL,
  `kpi_complete_early_points` int(11) DEFAULT NULL,
  `kpi_complete_late_points` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `role`, `description`, `duedate`, `repeat`, `service_kpi`, `kpi_receive_target_day`, `kpi_receive_early_points`, `kpi_receive_late_points`, `kpi_complete_target_day`, `kpi_complete_early_points`, `kpi_complete_late_points`, `created_at`, `updated_at`) VALUES
(1, 'VAT', 'Admin', NULL, '20', 'none', 'Yes', 3, 10, 6, 6, 10, 5, '2023-08-10 15:10:05', '2023-08-10 15:10:05'),
(2, 'Payroll', 'Admin', NULL, '7', 'Monthly', 'Yes', 3, 10, 6, 6, 10, 6, '2023-06-14 22:42:27', NULL),
(3, 'Ad Hoc', 'Admin', NULL, NULL, 'none', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-10 08:09:36', '2023-08-10 08:09:36'),
(4, 'Compilation', 'Admin', NULL, NULL, 'none', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-10 08:27:44', '2023-08-10 08:27:44'),
(5, 'Accounting', 'Coordinator', NULL, NULL, 'monthly', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-10 08:30:34', '2023-10-02 14:40:22'),
(6, 'PAYE/SDL', 'Admin', NULL, NULL, 'monthly', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-10 08:32:09', '2023-08-10 08:32:09'),
(7, 'NSSF', 'Admin', NULL, NULL, 'monthly', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-10 08:32:43', '2023-08-10 08:32:43'),
(8, 'WCF', 'Admin', NULL, NULL, 'monthly', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-10 08:33:08', '2023-08-10 08:33:08'),
(9, 'Annual returns', 'Admin', NULL, NULL, 'annually', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-10 08:34:18', '2023-08-10 08:34:18'),
(10, 'Business Lisence', 'Admin', NULL, NULL, 'annually', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-10 08:34:56', '2023-08-10 08:34:56'),
(11, 'Tax Query', 'Admin', NULL, NULL, 'none', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-10 08:35:35', '2023-08-10 08:35:35'),
(12, 'Tax Clearance', 'Admin', NULL, NULL, 'annually', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-10 08:36:14', '2023-08-10 08:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `service_postchecks`
--

CREATE TABLE `service_postchecks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `multiple_upload` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `mandatory` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_postchecks`
--

INSERT INTO `service_postchecks` (`id`, `service_id`, `name`, `note`, `multiple_upload`, `mandatory`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'PostCheck', 'Working files', 'Yes', 'Yes', 'Working files', '2023-10-25 10:19:10', '2023-10-25 10:19:10'),
(2, 1, 'PostCheck', 'Acknowledgement', 'Yes', 'Yes', 'Acknowledgement', '2023-10-25 10:19:10', '2023-10-25 10:19:10'),
(3, 1, 'PostCheck', 'Assessment', 'Yes', 'Yes', 'Assessment', '2023-10-25 10:19:10', '2023-10-25 10:19:10'),
(4, 1, 'PostCheck', 'VAT Returns', 'Yes', 'Yes', 'VAT Returns', '2023-10-25 10:19:10', '2023-10-25 10:19:10'),
(5, 1, 'PostCheck', 'Scan Payment slip', 'Yes', 'Yes', 'Scan Payment slip', '2023-10-25 10:19:10', '2023-10-25 10:19:10'),
(6, 5, 'PostCheck', 'Monthly Sales report', 'Yes', 'Yes', 'Monthly Sales report', '2023-11-13 13:14:52', '2023-11-13 13:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `service_prechecks`
--

CREATE TABLE `service_prechecks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `multiple_upload` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `mandatory` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_prechecks`
--

INSERT INTO `service_prechecks` (`id`, `service_id`, `name`, `note`, `multiple_upload`, `mandatory`, `description`, `created_at`, `updated_at`) VALUES
(1, 0, 'PreCheck', 'Monthly sales report', 'Yes', 'Yes', 'vat month sales report', '2023-08-23 10:27:13', '2023-08-23 10:27:13'),
(2, 0, 'PreCheck', 'Monthly Expenses report', 'Yes', 'Yes', 'month expenses report', '2023-08-23 10:27:13', '2023-08-23 10:27:13'),
(3, 0, 'PreCheck', 'Monthly sales report', 'Yes', 'Yes', 'vat month sales report', '2023-08-23 10:29:48', '2023-08-23 10:29:48'),
(4, 0, 'PreCheck', 'Monthly Expenses report', 'Yes', 'Yes', 'month expenses report', '2023-08-23 10:29:48', '2023-08-23 10:29:48'),
(6, 1, 'PreCheck', 'Monthly Sales report', 'Yes', 'Yes', 'Monthly Sales report', '2023-10-25 09:39:49', '2023-10-25 09:39:49'),
(7, 1, 'PreCheck', 'Purchase document', 'Yes', 'Yes', 'Purchase document', '2023-10-25 09:39:49', '2023-10-25 09:39:49'),
(9, 1, 'PreCheck', 'Import document', 'Yes', 'Yes', 'Import document', '2023-10-25 10:36:42', '2023-10-25 10:36:42'),
(10, 1, 'PreCheck', 'Expenses document', 'Yes', 'Yes', 'Expenses document', '2023-10-25 10:36:42', '2023-10-25 10:36:42');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `junior_id` bigint(20) NOT NULL,
  `services_id` bigint(20) NOT NULL,
  `clients_id` bigint(20) NOT NULL,
  `start_date` date DEFAULT NULL,
  `job_date_documents_received_precheck` varchar(255) DEFAULT NULL,
  `job_kpi_enabled` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `job_kpi_deadline_to_receive_document` date DEFAULT NULL,
  `job_date_documents_receive` date DEFAULT NULL,
  `job_kpi_points_to_receive_documents` int(11) DEFAULT NULL,
  `job_kpi_deadline_to_complete` int(11) DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `job_kpi_points_to_complete_job` int(11) DEFAULT NULL,
  `job_status` enum('Active','Progress','Approve','Suspend') NOT NULL DEFAULT 'Active',
  `approve_status` enum('Notapprove','Approve') NOT NULL DEFAULT 'Notapprove',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `junior_id`, `services_id`, `clients_id`, `start_date`, `job_date_documents_received_precheck`, `job_kpi_enabled`, `job_kpi_deadline_to_receive_document`, `job_date_documents_receive`, `job_kpi_points_to_receive_documents`, `job_kpi_deadline_to_complete`, `end_date`, `job_kpi_points_to_complete_job`, `job_status`, `approve_status`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 2, 1, '2023-09-14', NULL, 'Yes', NULL, NULL, NULL, NULL, '2023-09-22', NULL, 'Active', 'Approve', '2023-09-14 15:44:34', '2023-10-06 11:33:57'),
(2, 9, 12, 2, 1, '2023-10-25', NULL, 'Yes', NULL, NULL, NULL, NULL, '2023-11-01', NULL, 'Active', 'Notapprove', '2023-10-24 08:56:40', '2023-10-24 08:56:40'),
(3, 30, 11, 9, 3, '2023-10-25', NULL, 'Yes', NULL, NULL, NULL, NULL, '2023-11-01', NULL, 'Active', 'Notapprove', '2023-10-24 09:13:59', '2023-10-25 08:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `task_comments`
--

CREATE TABLE `task_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taskpost_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `task_id` varchar(20) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_comments`
--

INSERT INTO `task_comments` (`id`, `taskpost_id`, `user_id`, `task_id`, `comments`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', 'hello', '2023-09-13 11:20:01', '2023-09-13 11:20:01'),
(2, '1', '1', '1', 'hello', '2023-09-13 11:26:12', '2023-09-13 11:26:12'),
(3, '1', '1', '1', 'hi, there how are you ?', '2023-09-13 11:45:04', '2023-09-13 11:45:04'),
(4, '1', '1', '1', 'hi, there how are you ?', '2023-09-13 11:45:36', '2023-09-13 11:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `task_likes`
--

CREATE TABLE `task_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `taskpost_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task_post`
--

CREATE TABLE `task_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post` varchar(300) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `tasklike_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `taskcomment_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_post`
--

INSERT INTO `task_post` (`id`, `post`, `user_id`, `task_id`, `tasklike_id`, `created_at`, `updated_at`, `taskcomment_id`) VALUES
(1, 'hello, how are you?', 1, 1, NULL, '2023-09-06 11:11:44', '2023-09-06 11:11:44', 0),
(3, 'hello', 1, 1, NULL, '2023-10-13 13:33:01', '2023-10-13 13:33:01', NULL),
(4, 'hello, how are you?', 1, 1, NULL, '2023-10-17 11:07:26', '2023-10-17 11:07:26', NULL),
(5, 'hello, how are you?', 1, 1, NULL, '2023-10-17 11:07:29', '2023-10-17 11:07:29', NULL),
(6, 'hello', 1, 1, NULL, '2023-10-17 11:07:50', '2023-10-17 11:07:50', NULL),
(7, 'hello', 1, 1, NULL, '2023-10-17 11:17:45', '2023-10-17 11:17:45', NULL),
(8, 'hello mike how are you?', 1, 3, NULL, '2023-11-11 09:48:37', '2023-11-11 09:48:37', NULL),
(9, 'hello mike how are you?', 1, 3, NULL, '2023-11-11 09:57:08', '2023-11-11 09:57:08', NULL),
(10, 'hello mike how are you?', 1, 3, NULL, '2023-11-11 10:01:24', '2023-11-11 10:01:24', NULL),
(11, 'hello mike how are you?', 1, 3, NULL, '2023-11-11 10:01:47', '2023-11-11 10:01:47', NULL),
(12, 'hi there i new pre check file', 1, 3, NULL, '2023-11-11 10:02:06', '2023-11-11 10:02:06', NULL),
(13, 'hello, i the VAT files please', 1, 3, NULL, '2023-11-11 10:07:27', '2023-11-11 10:07:27', NULL),
(14, 'Please the file for Compilation for post check', 1, 3, NULL, '2023-11-11 10:26:14', '2023-11-11 10:26:14', NULL),
(15, 'Please the file for Compilation for post check', 1, 3, NULL, '2023-11-11 10:26:46', '2023-11-11 10:26:46', NULL),
(16, 'heloo', 1, 3, NULL, '2023-11-11 10:27:06', '2023-11-11 10:27:06', NULL),
(17, 'hello, how are you sir?', 1, 3, NULL, '2023-11-11 10:31:54', '2023-11-11 10:31:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task_updates`
--

CREATE TABLE `task_updates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_update` varchar(45) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(125) NOT NULL,
  `file` varchar(65) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `name`, `description`, `file`, `created_at`, `updated_at`) VALUES
(1, 'contract document', 'contract document for new project ', 'no file', '2023-06-21 08:15:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` bigint(20) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mudy', 'admin@mars.com', '2023-03-08 12:42:22', '$2y$10$cRQsjZ/OiRlMdieCBtP0/O619o9jduN3pY8TfhtwjJbYi/jl7rnQy', 1, NULL, '2023-03-31 12:42:22', '2023-09-23 09:52:18'),
(9, 'naheed', 'naheed@mars.com', NULL, '$2y$10$tcF66oN2xFokJSWj0o2lcOS16Hc9ljuD3j0oKueKaZ23n/jQA61aC', 2, NULL, '2023-09-21 14:28:07', '2023-09-21 14:28:07'),
(10, 'ramzi', 'ramzi@mars.com', NULL, '$2y$10$aHYI7UoaKQ3TLgkt5uA2eOTwwSo6rdk.Ot.145HtrgohqnMpW2SaS', 3, NULL, '2023-09-21 16:20:11', '2023-09-21 16:20:11'),
(11, 'jane', 'jane@mars.com', NULL, '$2y$10$NjUuki.amIWplEyDJwk8Au9t.4c8SHf9Ponx6YOxbDPh8UjOtioXe', 4, NULL, '2023-09-21 16:21:28', '2023-09-21 16:21:28'),
(12, 'mushi', 'mushi@mars.com', NULL, '$2y$10$fssvlBaMlzxM4ok95nl.kulRQCQWG6yZq9QlFBiUQY1s5LcXPRPqG', 4, NULL, '2023-09-21 16:23:30', '2023-09-21 16:23:30'),
(13, 'joyce', 'joyce@mars.com', NULL, '$2y$10$/SxdGITC6p/aZzM2qGALKeLQxOzsYIEqAh2ESiLVq8DVy78n7ZLiO', 3, NULL, '2023-09-21 16:27:54', '2023-09-21 16:27:54'),
(21, 'jackson', 'jackson@gmail.com', NULL, '$2y$10$3u/yIM96eAOdm1PXpxJuHepX8GQGwiCOOgCnk3tgYpUeGxTwGurI2', 4, NULL, '2023-10-05 07:37:21', '2023-10-05 07:37:21'),
(22, 'ben', 'ben@mars.com', NULL, '$2y$10$FYBbVRDq0hfKAlCA09XJYuHo.P1neIFosb8QOfyPrrHxuD6KIyf8O', 4, NULL, '2023-10-05 08:21:53', '2023-10-05 08:21:53'),
(23, 'benten', 'benten@mars.com', NULL, '$2y$10$Wo2sCZXJ3/KTEQAkffSn.uIWC92WvC7m8.mJ1EOsntC020JESFVt.', 4, NULL, '2023-10-05 08:23:08', '2023-10-05 08:23:08'),
(24, 'masai', 'masai@mars.com', NULL, '$2y$10$eiv7RLswnpihWaGL3sibjOqV1S9gVdDi5n6iUyDBJpfFD5rCuK0hK', 4, NULL, '2023-10-05 08:24:02', '2023-10-05 08:24:02'),
(25, 'wasaka', 'wasaka@mail.com', NULL, '$2y$10$Oa1TYfYb0US2TSxfipl4jeosn4XHfr3tlDv2K0w49VTUnZBq9/ajC', 1, NULL, '2023-10-05 08:36:29', '2023-10-05 08:36:29'),
(26, 'tonge', 'tonge@mail.com', NULL, '$2y$10$K21qz1JW7eQzfeMJ2IrkaO0H9WwuUy8ihFMEcbfnl772PANX80zBC', 1, NULL, '2023-10-05 08:44:22', '2023-10-05 08:44:22'),
(27, 'papa', 'papa@mail.com', NULL, '$2y$10$Qoyt43/9ZJPlvDvvLHM/k.saZ7hss77j/1VXOqzHj8a.VB7MYkA/u', 1, NULL, '2023-10-05 08:45:07', '2023-10-05 08:45:07'),
(28, 'masaa', 'masaa@gmail.com', NULL, '$2y$10$7YK19YJoXIVbxNoKyYGMQ.NNtbUyPyGQRn61X3uejSqVf0ND1lnuG', 1, NULL, '2023-10-05 08:48:35', '2023-10-05 08:48:35'),
(29, 'maswa', 'maswa@gmail.com', NULL, '$2y$10$IOINJGwj1J.d2363bDyepOAvp.IGbLOcQdWYwXLKWlPvdvO2VM3pu', 1, NULL, '2023-10-05 08:50:42', '2023-10-05 08:50:42'),
(30, 'emma', 'emma@gmail.com', NULL, '$2y$10$xl1T8EbAJReCMY3FuTieUub4/lnFCKWVezN/RlrEEels6vFrCYgUe', 2, NULL, '2023-10-05 08:51:22', '2023-10-05 08:51:22'),
(31, 'musa', 'musa@mail.com', NULL, '$2y$10$DEfkE4zEzEBjbRIdIlDWSOkyv8IceaG9/2/reJ.UFizSNRKokbUYK', 3, NULL, '2023-10-05 15:17:47', '2023-10-05 15:17:47'),
(32, 'musachuya', 'musachuya@mail.com', NULL, '$2y$10$nKTwyA3/qIh3FVboF6LvBO9eLtsDWUTt.wmfUi9NSUhNHZDat4tCy', 4, NULL, '2023-10-05 15:20:39', '2023-10-05 15:20:39'),
(33, 'husna', 'husna@mars.com', NULL, '$2y$10$fmg5cQJcQNxcVLTSQILNi.PBGIl9hnNpuAUiq4KExbeyv1zZAUmd.', 4, NULL, '2023-10-05 15:23:19', '2023-10-05 15:23:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contactPerson_id` (`contactPerson_id`);

--
-- Indexes for table `client_services`
--
ALTER TABLE `client_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_id` (`services_id`),
  ADD KEY `clients_id` (`clients_id`);

--
-- Indexes for table `client__contact_people`
--
ALTER TABLE `client__contact_people`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_people_id` (`contactpeople_id`),
  ADD KEY `contactpeople_id` (`contactpeople_id`);

--
-- Indexes for table `company_types`
--
ALTER TABLE `company_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `contact_people`
--
ALTER TABLE `contact_people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_person_limiteds`
--
ALTER TABLE `contact_person_limiteds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `contact_person_partners`
--
ALTER TABLE `contact_person_partners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contactpeople_id` (`contactpeople_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `dispatchjob`
--
ALTER TABLE `dispatchjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispatch_documents`
--
ALTER TABLE `dispatch_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `generalsetting`
--
ALTER TABLE `generalsetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hrm_settings`
--
ALTER TABLE `hrm_settings`
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
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postcheck_attachment`
--
ALTER TABLE `postcheck_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_id` (`task_id`);

--
-- Indexes for table `precheck_attachment`
--
ALTER TABLE `precheck_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_id` (`task_id`),
  ADD KEY `precheck_id` (`precheck_id`);

--
-- Indexes for table `profile_settings`
--
ALTER TABLE `profile_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pwdportal`
--
ALTER TABLE `pwdportal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `recieve_docs`
--
ALTER TABLE `recieve_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `task_id` (`task_id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_postchecks`
--
ALTER TABLE `service_postchecks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `service_prechecks`
--
ALTER TABLE `service_prechecks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `services_id` (`services_id`),
  ADD KEY `clients_id` (`clients_id`),
  ADD KEY `junior_id` (`junior_id`);

--
-- Indexes for table `task_comments`
--
ALTER TABLE `task_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_likes`
--
ALTER TABLE `task_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_post`
--
ALTER TABLE `task_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `task_id` (`task_id`),
  ADD KEY `tasklike_id` (`tasklike_id`),
  ADD KEY `taskcomment_id` (`taskcomment_id`);

--
-- Indexes for table `task_updates`
--
ALTER TABLE `task_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `role_id_2` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `client_services`
--
ALTER TABLE `client_services`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `client__contact_people`
--
ALTER TABLE `client__contact_people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_types`
--
ALTER TABLE `company_types`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_people`
--
ALTER TABLE `contact_people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_person_limiteds`
--
ALTER TABLE `contact_person_limiteds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_person_partners`
--
ALTER TABLE `contact_person_partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dispatchjob`
--
ALTER TABLE `dispatchjob`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dispatch_documents`
--
ALTER TABLE `dispatch_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generalsetting`
--
ALTER TABLE `generalsetting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hrm_settings`
--
ALTER TABLE `hrm_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `postcheck_attachment`
--
ALTER TABLE `postcheck_attachment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `precheck_attachment`
--
ALTER TABLE `precheck_attachment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile_settings`
--
ALTER TABLE `profile_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pwdportal`
--
ALTER TABLE `pwdportal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recieve_docs`
--
ALTER TABLE `recieve_docs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `service_postchecks`
--
ALTER TABLE `service_postchecks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_prechecks`
--
ALTER TABLE `service_prechecks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `task_comments`
--
ALTER TABLE `task_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `task_likes`
--
ALTER TABLE `task_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task_post`
--
ALTER TABLE `task_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `task_updates`
--
ALTER TABLE `task_updates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
