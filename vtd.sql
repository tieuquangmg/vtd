-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2017 at 01:14 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vtd`
--

-- --------------------------------------------------------

--
-- Table structure for table `absence`
--

CREATE TABLE `absence` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `days` int(11) NOT NULL,
  `user_approval_id` int(11) NOT NULL DEFAULT '0',
  `absence_status_id` int(2) NOT NULL DEFAULT '0',
  `user_note` text COLLATE utf8mb4_unicode_ci,
  `approval_note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absence`
--

INSERT INTO `absence` (`id`, `user_id`, `start_date`, `days`, `user_approval_id`, `absence_status_id`, `user_note`, `approval_note`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2017-05-23', 2, 1, 1, 'sdfsdfsdf dfsdf sdf', NULL, '2017-05-27 11:48:24', NULL, NULL),
(2, 1, '2017-05-02', 11, 0, 1, 'dfgsdfsdf', NULL, '2017-05-29 10:45:36', '2017-05-29 10:45:36', NULL),
(5, 1, '2017-06-06', 33, 0, 1, 'dfsdfsd', NULL, '2017-06-05 03:01:02', '2017-06-05 03:01:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `absence_status`
--

CREATE TABLE `absence_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `absence_status_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absence_status`
--

INSERT INTO `absence_status` (`id`, `absence_status_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Chưa duyệt', '2017-05-27 10:26:24', '2017-05-27 10:26:24', NULL),
(2, 'Đã duyệt', '2017-05-27 10:26:36', '2017-05-27 10:26:36', NULL),
(3, 'Không chấp nhận', '2017-05-27 10:49:36', '2017-05-27 10:49:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `absence_type`
--

CREATE TABLE `absence_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `absence_type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absence_type`
--

INSERT INTO `absence_type` (`id`, `absence_type_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nghỉ ốm', '2017-05-27 10:00:46', '2017-05-27 10:00:46', NULL),
(2, 'Nghỉ lễ', '2017-05-27 10:00:58', '2017-05-27 10:00:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'VietComBank', NULL, NULL, NULL),
(2, 'TechComBank', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `id` int(10) UNSIGNED NOT NULL,
  `device_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_money` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_guarantee_end` datetime NOT NULL,
  `date_inventory` datetime NOT NULL,
  `date_buy` datetime NOT NULL,
  `device_status_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`id`, `device_code`, `device_name`, `device_money`, `user_id`, `date_guarantee_end`, `date_inventory`, `date_buy`, `device_status_id`, `created_at`, `supplier_id`, `updated_at`, `deleted_at`) VALUES
(1, 'macpro2012', 'macbook Pro', 20000000, 2, '2015-10-28 00:00:00', '2016-11-30 00:00:00', '2018-02-28 00:00:00', 1, '2017-05-24 03:29:15', NULL, '2017-05-24 03:29:15', NULL),
(2, 'macpro2012', 'macbook Pro', 20000000, 1, '2015-10-28 00:00:00', '2016-11-30 00:00:00', '2018-02-28 00:00:00', 1, '2017-05-24 03:29:39', NULL, '2017-05-24 03:29:39', NULL),
(3, '34534534534', 'sssssssssssssssssssssssssssssssssss', 344, 1, '2017-10-05 12:37:32', '2019-03-11 12:37:32', '2019-01-05 12:37:32', 2, '2017-05-25 09:25:41', 2, '2017-06-15 05:37:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `device_brand`
--

CREATE TABLE `device_brand` (
  `id` int(10) UNSIGNED NOT NULL,
  `device_brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `device_status`
--

CREATE TABLE `device_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `device_status_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `device_status`
--

INSERT INTO `device_status` (`id`, `device_status_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Đang hoạt động', '2017-05-24 03:15:06', '2017-05-24 03:15:06', NULL),
(2, 'Hỏng', '2017-05-24 03:15:18', '2017-05-24 03:15:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `device_supplier`
--

CREATE TABLE `device_supplier` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `device_supplier`
--

INSERT INTO `device_supplier` (`id`, `name`, `sdt`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hà nội computer', '0123456789', NULL, NULL, '0000-00-00'),
(2, 'Mai Hoàng', '0123455654', NULL, NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `doccuments`
--

CREATE TABLE `doccuments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serve` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doccuments`
--

INSERT INTO `doccuments` (`id`, `name`, `link`, `serve`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'tai lieu 1', 'https://translate.google.com/', 'google', '2017-06-15 05:49:53', '2017-06-15 05:49:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doccument_serve`
--

CREATE TABLE `doccument_serve` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_05_23_130054_create_user_employee_type_table', 2),
(4, '2017_05_23_130519_create_user_rank_table', 2),
(5, '2017_05_23_130601_create_user_status__table', 2),
(6, '2017_05_23_143421_create_device_table', 2),
(7, '2017_05_23_145520_create_device_status_table', 2),
(8, '2017_05_23_150643_create_server_table', 2),
(9, '2017_05_23_151015_create_server_status_table', 2),
(10, '2017_05_23_160854_create_device_brand_table', 2),
(11, '2017_05_27_101143_create_absence_table', 3),
(12, '2017_05_27_101346_create_absence_type_table', 3),
(13, '2017_05_27_101430_create_absence_status_table', 3),
(14, '2017_05_27_144758_create_user_leave_table', 3),
(15, '2017_05_27_194937_create_year_table', 4),
(16, '2017_06_10_212550_laratrust_setup_tables', 5),
(17, '2015_02_23_161101_create_defender_roles_table', 6),
(18, '2015_02_23_161102_create_defender_permissions_table', 6),
(19, '2015_02_23_161103_create_defender_role_user_table', 6),
(20, '2015_02_23_161104_create_defender_permission_user_table', 6),
(21, '2015_02_23_161105_create_defender_permission_role_table', 6),
(22, '2017_06_13_205725_create_banks_table', 7),
(23, '2017_06_15_121653_create_device_supplier_table', 8),
(24, '2017_06_15_124006_create_doccuments_table', 9),
(25, '2017_06_15_125441_create_doccument_serve_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `readable_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `readable_name`, `group_id`, `created_at`, `updated_at`) VALUES
(1, 'users.create', 'Thêm tài khoản mới', 1, '2017-06-11 11:37:51', '2017-06-11 11:37:51'),
(2, 'users.destroy', 'Xóa tài khoản', 1, '2017-06-11 11:37:58', '2017-06-11 11:37:58'),
(3, 'users.edit', 'Sủa thông tin tài khoản', 1, '2017-06-11 11:37:58', '2017-06-11 11:37:58'),
(4, 'users.view', 'Xem thông tin tài khoản', 1, '2017-06-11 11:37:58', '2017-06-11 11:37:58'),
(5, 'doccument.create', 'Thêm tài liệu', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_group`
--

CREATE TABLE `permission_group` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_group`
--

INSERT INTO `permission_group` (`id`, `name`) VALUES
(1, 'Người dùng'),
(2, 'Tài liệu');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `value` tinyint(4) NOT NULL DEFAULT '-1',
  `expires` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`, `value`, `expires`) VALUES
(1, 1, -1, NULL),
(4, 1, -1, NULL),
(2, 1, -1, NULL),
(3, 1, -1, NULL),
(4, 2, -1, NULL),
(4, 3, -1, NULL),
(4, 4, -1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `value` tinyint(4) NOT NULL DEFAULT '-1',
  `expires` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`user_id`, `permission_id`, `value`, `expires`) VALUES
(3, 1, 0, NULL),
(3, 2, 0, NULL),
(1, 1, 1, NULL),
(1, 2, 1, NULL),
(2, 1, 0, NULL),
(2, 2, 0, NULL),
(5, 1, 0, NULL),
(5, 2, 0, NULL),
(1, 3, 1, NULL),
(1, 4, 1, NULL),
(2, 3, 0, NULL),
(2, 4, 1, NULL),
(3, 3, 0, NULL),
(3, 4, 1, NULL),
(4, 1, 0, NULL),
(4, 2, 0, NULL),
(4, 3, 0, NULL),
(4, 4, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '2017-06-11 11:36:11', '2017-06-11 11:36:11'),
(2, 'member', 'Nhân viên', '2017-06-11 17:32:57', '2017-06-11 17:32:57'),
(3, 'samurai', 'Samurai', '2017-06-11 17:32:57', '2017-06-11 17:32:57'),
(4, 'ninja', 'Ninja', '2017-06-11 17:32:57', '2017-06-11 17:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(5, 1),
(5, 2),
(1, 1),
(3, 2),
(2, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `server`
--

CREATE TABLE `server` (
  `id` int(10) UNSIGNED NOT NULL,
  `server_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `server_first_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `server_second_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `server_ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `server_expire_day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `server_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `server_status`
--

CREATE TABLE `server_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `server_status_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `contract_date_end` date DEFAULT NULL,
  `contract_file` text COLLATE utf8mb4_unicode_ci,
  `user_employee_type_id` int(11) NOT NULL DEFAULT '1',
  `user_rank_id` int(11) NOT NULL DEFAULT '1',
  `user_status_id` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `card_id` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_date` date DEFAULT NULL,
  `card_location` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `bank_acc` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_location` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` int(10) DEFAULT NULL,
  `bike_no` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `name`, `password`, `email`, `sdt`, `address`, `permanent_address`, `start_date`, `contract_date_end`, `contract_file`, `user_employee_type_id`, `user_rank_id`, `user_status_id`, `remember_token`, `created_at`, `birthday`, `card_id`, `card_date`, `card_location`, `bank_id`, `bank_acc`, `bank_location`, `salary`, `bike_no`, `updated_at`, `deleted_at`) VALUES
(1, 'phan van quang', 'Superadministrator', '$2y$10$smQ6OL.30HizL/Ij3kEJ2useq9PSg8i2mXZ51DLycf8BvjRLYuFHG', 'superadministrator@app.com', NULL, NULL, NULL, '2017-06-10', '2017-06-01', NULL, 1, 1, 1, NULL, '2017-06-10 14:41:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-12 15:02:53', NULL),
(2, 'phan van quang', 'Administrator', '$2y$10$o7WlXbdQFkXDq35a0rhCAu81ORrNUs.gUx8dOAtO5EOCAXbRV/5ri', 'administrator@app.com', NULL, NULL, NULL, '2017-06-10', NULL, NULL, 1, 1, 1, NULL, '2017-06-10 14:41:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-12 05:32:50', NULL),
(3, 'phan van quang', 'quangpv', '$2y$10$y/P/JdyGVlcUb5oX8uUNY.pxR8yTgvViO8cl3x7rJ7CmnTpkapZhq', 'user@app.com', NULL, NULL, NULL, '2017-06-10', '2017-06-15', NULL, 1, 1, 1, NULL, '2017-06-10 14:41:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-12 10:14:48', NULL),
(4, 'phan van quang', 'Cru User', '$2y$10$vpJRHxryjXZF.PGb54WJkuJjHPkiYOla9wUOE4pglefTRib/w5bzC', 'cru_user@app.com', '01665653933', NULL, NULL, '2017-06-10', '2017-09-12', NULL, 1, 1, 1, 'KQ094z6sP4', '2017-06-10 14:41:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-12 05:33:41', NULL),
(5, 'sdfsdfsdfsdf', 'sdfgsdfhdgfhfghgfhg', '$2y$10$zTMtYlpxHvlsrTIgxNXjUesLFrERTvyyvmb5U3dlg3pWW/REerCCq', 'dfsdfsdfsdf@cgdf.d', NULL, NULL, NULL, '2017-06-21', '2017-06-20', NULL, 1, 1, 1, NULL, '2017-06-11 17:48:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-12 05:34:11', '2017-06-12 05:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_employee_type`
--

CREATE TABLE `user_employee_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_employee_type_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_employee_type`
--

INSERT INTO `user_employee_type` (`id`, `user_employee_type_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Chính thức', '2017-05-23 10:47:40', '2017-05-23 10:47:40', NULL),
(3, 'PartTime', '2017-05-24 03:19:42', '2017-05-24 03:19:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_leave`
--

CREATE TABLE `user_leave` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `absence_type_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `total_leave` int(11) NOT NULL,
  `taken_leave` int(11) NOT NULL,
  `balance_leave` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_leave`
--

INSERT INTO `user_leave` (`id`, `user_id`, `absence_type_id`, `year_id`, `total_leave`, `taken_leave`, `balance_leave`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 111, 22, 0, '2017-05-28 01:19:51', '2017-05-28 01:19:51'),
(2, 1, 2, 1, 11, 22, 0, '2017-05-28 01:19:52', '2017-05-28 01:19:52'),
(3, 8, 1, 1, 0, 0, 0, '2017-06-06 07:42:50', '2017-06-06 07:42:50'),
(4, 8, 2, 1, 0, 0, 0, '2017-06-06 07:42:50', '2017-06-06 07:42:50'),
(5, 9, 1, 1, 0, 0, 0, '2017-06-06 07:43:41', '2017-06-06 07:43:41'),
(6, 9, 2, 1, 0, 0, 0, '2017-06-06 07:43:41', '2017-06-06 07:43:41'),
(7, 10, 1, 1, 0, 0, 0, '2017-06-06 07:47:35', '2017-06-06 07:47:35'),
(8, 10, 2, 1, 0, 0, 0, '2017-06-06 07:47:35', '2017-06-06 07:47:35'),
(9, 11, 1, 1, 0, 0, 0, '2017-06-06 07:53:28', '2017-06-06 07:53:28'),
(10, 11, 2, 1, 0, 0, 0, '2017-06-06 07:53:28', '2017-06-06 07:53:28'),
(11, 12, 1, 1, 0, 0, 0, '2017-06-06 07:54:38', '2017-06-06 07:54:38'),
(12, 12, 2, 1, 0, 0, 0, '2017-06-06 07:54:38', '2017-06-06 07:54:38'),
(13, 13, 1, 1, 0, 0, 0, '2017-06-06 07:55:01', '2017-06-06 07:55:01'),
(14, 13, 2, 1, 0, 0, 0, '2017-06-06 07:55:01', '2017-06-06 07:55:01'),
(15, 1, 1, 1, 0, 0, 0, '2017-06-12 04:25:26', '2017-06-12 04:25:26'),
(16, 1, 2, 1, 0, 0, 0, '2017-06-12 04:25:26', '2017-06-12 04:25:26'),
(17, 2, 1, 1, 0, 0, 0, '2017-06-12 05:32:41', '2017-06-12 05:32:41'),
(18, 2, 2, 1, 0, 0, 0, '2017-06-12 05:32:41', '2017-06-12 05:32:41'),
(19, 2, 1, 1, 0, 0, 0, '2017-06-12 05:32:50', '2017-06-12 05:32:50'),
(20, 2, 2, 1, 0, 0, 0, '2017-06-12 05:32:50', '2017-06-12 05:32:50'),
(21, 4, 1, 1, 0, 0, 0, '2017-06-12 05:32:58', '2017-06-12 05:32:58'),
(22, 4, 2, 1, 0, 0, 0, '2017-06-12 05:32:58', '2017-06-12 05:32:58'),
(23, 4, 1, 1, 0, 0, 0, '2017-06-12 05:33:27', '2017-06-12 05:33:27'),
(24, 4, 2, 1, 0, 0, 0, '2017-06-12 05:33:27', '2017-06-12 05:33:27'),
(25, 4, 1, 1, 0, 0, 0, '2017-06-12 05:33:41', '2017-06-12 05:33:41'),
(26, 4, 2, 1, 0, 0, 0, '2017-06-12 05:33:41', '2017-06-12 05:33:41'),
(27, 3, 1, 1, 0, 0, 0, '2017-06-12 10:14:48', '2017-06-12 10:14:48'),
(28, 3, 2, 1, 0, 0, 0, '2017-06-12 10:14:48', '2017-06-12 10:14:48'),
(29, 1, 1, 1, 0, 0, 0, '2017-06-12 15:02:53', '2017-06-12 15:02:53'),
(30, 1, 2, 1, 0, 0, 0, '2017-06-12 15:02:53', '2017-06-12 15:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_rank`
--

CREATE TABLE `user_rank` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_rank_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_rank`
--

INSERT INTO `user_rank` (`id`, `user_rank_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Developer', '2017-05-24 03:19:56', '2017-05-24 03:19:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_status_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`id`, `user_status_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Đang làm', '2017-05-24 03:20:13', '2017-05-24 03:20:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` int(11) NOT NULL,
  `year_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `slug`, `year_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2017, '2017', NULL, '2017-05-28 01:35:36', '2017-05-28 01:35:36'),
(2, 2018, '2018', NULL, '2017-05-28 01:36:53', '2017-05-28 01:36:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absence`
--
ALTER TABLE `absence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `absence_status`
--
ALTER TABLE `absence_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `absence_type`
--
ALTER TABLE `absence_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device_brand`
--
ALTER TABLE `device_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device_status`
--
ALTER TABLE `device_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device_supplier`
--
ALTER TABLE `device_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doccuments`
--
ALTER TABLE `doccuments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doccument_serve`
--
ALTER TABLE `doccument_serve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_group`
--
ALTER TABLE `permission_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD KEY `permission_user_user_id_index` (`user_id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_user_id_index` (`user_id`),
  ADD KEY `role_user_role_id_index` (`role_id`);

--
-- Indexes for table `server`
--
ALTER TABLE `server`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `server_status`
--
ALTER TABLE `server_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- Indexes for table `user_employee_type`
--
ALTER TABLE `user_employee_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_leave`
--
ALTER TABLE `user_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_rank`
--
ALTER TABLE `user_rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absence`
--
ALTER TABLE `absence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `absence_status`
--
ALTER TABLE `absence_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `absence_type`
--
ALTER TABLE `absence_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `device_brand`
--
ALTER TABLE `device_brand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `device_status`
--
ALTER TABLE `device_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `device_supplier`
--
ALTER TABLE `device_supplier`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doccuments`
--
ALTER TABLE `doccuments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doccument_serve`
--
ALTER TABLE `doccument_serve`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `server`
--
ALTER TABLE `server`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `server_status`
--
ALTER TABLE `server_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_employee_type`
--
ALTER TABLE `user_employee_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_leave`
--
ALTER TABLE `user_leave`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user_rank`
--
ALTER TABLE `user_rank`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_status`
--
ALTER TABLE `user_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
