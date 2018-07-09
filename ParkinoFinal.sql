-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2018 at 02:45 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ParkinoFinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(3) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ali', 'ali@admin.com', '$2y$10$Xm6h35k7it4qryu9w4DebuWXoWfl55mQXrwMGd43vonFPF9y5VqU6', 1, 'wO6OzG8UPgNBKB3DpEk9giVRwDvnRovul5dMFxCJW73oGmP4PNyEDWFbNz7d', '2018-07-05 04:05:53', '2018-07-05 04:05:53'),
(6, 'ahmed', 'ahmed@admin.com', '$2y$10$s3cqGE63lh8wIm8cLfdXn.cqlqan7m6OiSkcjp8laBgZIY7bbPdGO', 1, 'oc49UoJ7H27ESrIo0QLI48bkuAqjQ2b5QrmuzeM7ShGYZtmyRb6KtJUkIim2', '2018-07-05 05:30:54', '2018-07-05 05:30:54'),
(7, 'abdo', 'abdo@admin.com', '$2y$10$sB1K0RgS/qXSM/DC6e/7puL2Xgamf9VFz5bzN0xiosdkzkj9AY8Pi', 1, 'DxQ8ADZy0csuU7p5YVvJ6IfjVQyuNYKRmmPCsx5tVLWMAyYKPzV45puU7DN1', '2018-07-05 05:32:49', '2018-07-05 05:32:49'),
(8, 'ali ahmed', 'ali@superadmin.com', '$2y$10$4f/hxNHzSCNESCpFLfom1eRuja3U2L63Ml1P43RdFF6296DrWg2Ri', 1, 'sTsaDApNnyDUelZ2pyf3ajkp87xaKf0nibgdjqvoLw9F7WJRR60akp49zFDI', '2018-07-08 06:31:35', '2018-07-08 06:31:35'),
(9, 'trial', 'trial@cloud.com', '$2y$10$le/oSwMZz/XhEzlBi13T6OJVeWlSJDjw9nTojCppqdtIUy68EetJ.', 1, NULL, '2018-07-08 08:57:35', '2018-07-08 08:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(10) UNSIGNED NOT NULL,
  `qr_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfid_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` bit(1) NOT NULL DEFAULT b'0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `qr_no`, `rfid_no`, `state`, `created_at`, `updated_at`) VALUES
(137, '69934945669', '69934945669', b'0', '2018-07-07 10:12:52', '2018-07-07 10:12:52'),
(136, '60910602122', '60910602122', b'0', '2018-07-07 10:12:52', '2018-07-07 10:12:52'),
(135, '60721742829', '60721742829', b'0', '2018-07-07 10:12:52', '2018-07-07 10:12:52'),
(134, '30442612408', '30442612408', b'0', '2018-07-07 10:12:52', '2018-07-07 10:12:52'),
(133, '75736331644', '75736331644', b'0', '2018-07-07 10:12:52', '2018-07-07 10:12:52'),
(132, '65085159195', '65085159195', b'0', '2018-07-07 10:12:52', '2018-07-07 10:12:52'),
(131, '51933185913', '51933185913', b'0', '2018-07-07 08:59:44', '2018-07-07 08:59:44'),
(130, '2097148945', '2097148945', b'0', '2018-07-07 08:59:44', '2018-07-07 08:59:44'),
(129, '76261826083', '76261826083', b'0', '2018-07-07 08:59:44', '2018-07-07 08:59:44'),
(128, '61852677500', '61852677500', b'0', '2018-07-07 08:59:44', '2018-07-07 08:59:44'),
(127, '98715786673', '98715786673', b'0', '2018-07-07 08:59:44', '2018-07-07 08:59:44'),
(126, '10418543064', '10418543064', b'0', '2018-07-07 08:59:44', '2018-07-07 08:59:44'),
(125, '75608558258', '75608558258', b'0', '2018-07-07 08:36:29', '2018-07-07 08:36:29'),
(124, '91239413309', '91239413309', b'0', '2018-07-07 08:36:29', '2018-07-07 08:36:29'),
(123, '63506507967', '63506507967', b'0', '2018-07-07 08:36:29', '2018-07-07 08:36:29'),
(122, '61060119763', '61060119763', b'0', '2018-07-07 08:36:29', '2018-07-07 08:36:29'),
(121, '58894880086', '58894880086', b'0', '2018-07-07 08:36:29', '2018-07-07 08:36:29'),
(120, '11085927176', '11085927176', b'0', '2018-07-07 08:36:29', '2018-07-07 08:36:29'),
(119, '92009433265', '92009433265', b'0', '2018-07-07 08:36:10', '2018-07-07 08:36:10'),
(118, '73656793042', '73656793042', b'0', '2018-07-07 08:36:10', '2018-07-07 08:36:10'),
(117, '3852483338', '3852483338', b'0', '2018-07-07 08:36:10', '2018-07-07 08:36:10'),
(116, '99067183041', '99067183041', b'0', '2018-07-07 08:36:10', '2018-07-07 08:36:10'),
(115, '89853784391', '89853784391', b'0', '2018-07-07 08:36:10', '2018-07-07 08:36:10'),
(114, '27960512578', '27960512578', b'0', '2018-07-07 08:36:10', '2018-07-07 08:36:10'),
(113, '64465593641', '64465593641', b'0', '2018-07-07 06:19:59', '2018-07-07 06:19:59'),
(112, '83537231544', '83537231544', b'0', '2018-07-07 06:19:59', '2018-07-07 06:19:59'),
(111, '25386663072', '25386663072', b'0', '2018-07-07 06:19:59', '2018-07-07 06:19:59'),
(110, '73674531114', '73674531114', b'0', '2018-07-07 06:19:59', '2018-07-07 06:19:59'),
(109, '52893132680', '52893132680', b'0', '2018-07-07 06:19:59', '2018-07-07 06:19:59'),
(102, '22307712233', '22307712233', b'0', '2018-07-07 06:19:52', '2018-07-07 06:19:52'),
(103, '43211978965', '43211978965', b'0', '2018-07-07 06:19:52', '2018-07-07 06:19:52'),
(104, '58564514029', '58564514029', b'0', '2018-07-07 06:19:52', '2018-07-07 06:19:52'),
(105, '56881364796', '56881364796', b'0', '2018-07-07 06:19:52', '2018-07-07 06:19:52'),
(106, '17357944111', '17357944111', b'0', '2018-07-07 06:19:52', '2018-07-07 06:19:52'),
(107, '64214470748', '64214470748', b'0', '2018-07-07 06:19:52', '2018-07-07 06:19:52'),
(108, '72882335146', '72882335146', b'0', '2018-07-07 06:19:59', '2018-07-07 06:19:59');

-- --------------------------------------------------------

--
-- Table structure for table `garagesSlots`
--

CREATE TABLE `garagesSlots` (
  `id` int(10) NOT NULL,
  `garage_id` int(191) NOT NULL,
  `slot` int(10) NOT NULL,
  `state` bit(1) NOT NULL DEFAULT b'1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garagesSlots`
--

INSERT INTO `garagesSlots` (`id`, `garage_id`, `slot`, `state`, `created_at`, `updated_at`) VALUES
(1, 1, 1, b'0', '2018-07-04 19:00:49', '2018-07-04 17:00:49'),
(2, 1, 2, b'0', '2018-07-04 21:43:28', '2018-07-04 19:43:28'),
(3, 1, 3, b'0', '2018-06-30 15:52:25', '2018-06-30 13:52:25'),
(4, 1, 4, b'0', '2018-07-04 21:44:11', '2018-07-04 19:44:11'),
(5, 1, 5, b'0', '2018-07-04 21:50:38', '2018-07-04 19:50:38'),
(6, 1, 6, b'0', '2018-07-04 21:58:20', '2018-07-04 19:58:20'),
(7, 1, 7, b'1', '2018-06-30 12:46:04', '2018-06-24 15:38:20'),
(8, 1, 8, b'1', '2018-06-30 12:46:07', '2018-06-24 15:38:26'),
(9, 1, 9, b'1', '2018-06-30 12:46:10', '2018-06-24 15:46:20'),
(10, 1, 10, b'1', '2018-06-30 12:46:14', '2018-06-24 15:49:03'),
(11, 2, 0, b'1', '2018-06-20 12:34:18', '2018-06-20 12:34:18'),
(12, 2, 1, b'1', '2018-06-20 12:34:19', '2018-06-20 12:34:19'),
(13, 2, 2, b'1', '2018-06-20 12:34:19', '2018-06-20 12:34:19'),
(14, 2, 3, b'1', '2018-06-20 12:34:19', '2018-06-20 12:34:19'),
(15, 2, 4, b'1', '2018-06-20 12:34:19', '2018-06-20 12:34:19'),
(16, 2, 5, b'1', '2018-06-20 12:34:19', '2018-06-20 12:34:19'),
(17, 2, 6, b'1', '2018-06-20 12:34:19', '2018-06-20 12:34:19'),
(18, 2, 7, b'1', '2018-06-20 12:34:19', '2018-06-20 12:34:19'),
(19, 2, 8, b'1', '2018-06-20 12:34:19', '2018-06-20 12:34:19'),
(20, 2, 9, b'1', '2018-06-20 12:34:20', '2018-06-20 12:34:20'),
(21, 3, 0, b'1', '2018-06-20 12:35:07', '2018-06-20 12:35:07'),
(22, 3, 1, b'1', '2018-06-20 12:35:07', '2018-06-20 12:35:07'),
(23, 3, 2, b'1', '2018-06-20 12:35:07', '2018-06-20 12:35:07'),
(24, 3, 3, b'1', '2018-06-20 12:35:07', '2018-06-20 12:35:07'),
(25, 3, 4, b'1', '2018-06-20 12:35:07', '2018-06-20 12:35:07'),
(26, 3, 5, b'1', '2018-06-20 12:35:07', '2018-06-20 12:35:07'),
(27, 3, 6, b'1', '2018-06-20 12:35:07', '2018-06-20 12:35:07'),
(28, 3, 7, b'1', '2018-06-20 12:35:07', '2018-06-20 12:35:07'),
(29, 3, 8, b'1', '2018-06-20 12:35:07', '2018-06-20 12:35:07'),
(30, 3, 9, b'1', '2018-06-20 12:35:08', '2018-06-20 12:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `parking_areas_id` int(10) NOT NULL,
  `park_image` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `parking_areas_id`, `park_image`) VALUES
(13, 17, 'http://192.168.1.7:8000/images/1530934691.jpeg'),
(14, 17, 'http://192.168.1.7:8000/images/1530934691.jpg'),
(15, 18, 'http://192.168.1.7:8000/images/1530961136.jpeg'),
(16, 18, 'http://192.168.1.7:8000/images/1530961136.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `make_reservations`
--

CREATE TABLE `make_reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `long` decimal(8,2) NOT NULL,
  `lat` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(20) NOT NULL,
  `annually_tier` tinyint(1) DEFAULT NULL,
  `monthly_tier` tinyint(1) DEFAULT NULL,
  `daily_tier` tinyint(1) DEFAULT NULL,
  `hourly_tier` tinyint(1) DEFAULT NULL,
  `slot` int(10) DEFAULT NULL,
  `state` bit(1) NOT NULL DEFAULT b'0',
  `RFID_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `make_reservations`
--

INSERT INTO `make_reservations` (`id`, `long`, `lat`, `created_at`, `updated_at`, `user_id`, `annually_tier`, `monthly_tier`, `daily_tier`, `hourly_tier`, `slot`, `state`, `RFID_no`) VALUES
(68, '1230.00', '1230.00', '2018-06-30 14:50:58', '2018-06-30 14:50:58', 61, 0, 0, 0, 1, 1, b'0', '2888733478'),
(69, '1230.00', '1230.00', '2018-07-04 17:00:49', '2018-07-04 17:00:49', 61, 0, 0, 0, 1, 1, b'0', '12365413'),
(70, '1230.00', '1230.00', '2018-07-04 19:43:28', '2018-07-04 19:43:28', 61, 0, 0, 0, 1, 2, b'0', '2888142118'),
(71, '1230.00', '1230.00', '2018-07-04 19:44:11', '2018-07-04 19:44:11', 62, 1, 0, 0, 0, 4, b'0', '2888142118'),
(72, '1230.00', '1230.00', '2018-07-04 19:50:39', '2018-07-04 19:50:39', 60, 0, 0, 1, 0, 5, b'0', '999999556'),
(73, '1230.00', '1230.00', '2018-07-04 19:58:23', '2018-07-04 19:58:23', 60, 1, 0, 0, 0, 6, b'0', '999999556');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `message` varchar(160) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `name`, `message`, `updated_at`, `created_at`) VALUES
(6, 60, 'aaa', 'myfeed1', '2018-06-18 19:14:21', '2018-06-18 19:14:21'),
(7, 60, '1111', '1111111111', '2018-06-18 19:25:25', '2018-06-18 19:25:25'),
(8, 60, 'demo', '111111111111', '2018-06-18 19:29:00', '2018-06-18 19:29:00'),
(9, 60, 'demo', '36253654122368', '2018-07-04 17:28:31', '2018-07-04 17:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2018_03_16_105806_create_owners_table', 1),
(22, '2018_03_16_105837_create_cards_table', 1),
(23, '2018_03_16_110150_create_parkingareas_table', 1),
(24, '2018_03_16_110320_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` int(10) UNSIGNED NOT NULL,
  `garage_id` int(10) NOT NULL,
  `garage_points` int(100) NOT NULL,
  `ssd` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `garage_id`, `garage_points`, `ssd`, `name`, `email`, `phone_number`, `created_at`, `updated_at`) VALUES
(26, 0, 50, '125255556688', 'ali', 'afa@kdslf.com', '0152554548484', '2018-07-07 08:58:56', '2018-07-07 08:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `parkingareas`
--

CREATE TABLE `parkingareas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` int(10) UNSIGNED NOT NULL,
  `long` decimal(12,8) NOT NULL,
  `lat` decimal(12,8) NOT NULL,
  `slots_no` int(10) UNSIGNED NOT NULL,
  `no_of_free_slots` int(10) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parkingareas`
--

INSERT INTO `parkingareas` (`id`, `name`, `owner_id`, `long`, `lat`, `slots_no`, `no_of_free_slots`, `created_at`, `updated_at`, `price`, `stars`) VALUES
(18, 'ali', 26, '125.88699000', '125.66999900', 50, 50, '2018-07-07 08:58:56', '2018-07-07 08:58:56', '5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(10) UNSIGNED DEFAULT '0',
  `consumed_points` int(10) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone_number`, `points`, `consumed_points`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'ibrahim', 'hima@yahoo.com', '123456', '01006031228', 1, 53, NULL, '2018-04-05 11:53:03', '2018-06-22 13:11:20'),
(2, 'mohamed', 'ahmed1@yahoo.com', '654321', '01224124376', 31, 0, NULL, '2018-04-05 11:52:28', '2018-04-26 11:45:21'),
(5, 'ahmed0', 'ahmed00@yahoo.com', '123456', '01006031228', 14999872, 0, NULL, '2018-04-10 08:24:53', '2018-04-29 22:34:54'),
(6, 'ahmed1', 'ahmed01@yahoo.com', '123456', '01006031228', 1, 53, NULL, '2018-04-10 08:24:53', '2018-06-22 13:11:20'),
(7, 'ahmed2', 'ahmed02@yahoo.com', '123456', '01006031228', 1, 53, NULL, '2018-04-10 08:24:53', '2018-06-22 13:11:20'),
(8, 'ahmed20', 'ahmed03@yahoo.com', '123456', '01006031228', 1, 53, NULL, '2018-04-10 08:24:53', '2018-07-06 04:34:48'),
(9, 'ahmed4', 'ahmed04@yahoo.com', '123456', '01006031228', 1, 53, NULL, '2018-04-10 08:24:53', '2018-06-22 13:11:20'),
(10, 'ahmed5', 'ahmed05@yahoo.com', '123456', '01006031228', 1, 53, NULL, '2018-04-10 08:24:53', '2018-06-22 13:11:20'),
(11, 'ahmed6', 'ahmed06@yahoo.com', '123456', '01006031228', 1, 53, NULL, '2018-04-10 08:24:53', '2018-06-22 13:11:20'),
(12, 'ahmed7', 'ahmed07@yahoo.com', '123456', '01006031228', 1, 53, NULL, '2018-04-10 08:24:53', '2018-06-22 13:11:20'),
(13, 'ahmed8', 'ahmed08@yahoo.com', '123456', '01006031228', 1, 53, NULL, '2018-04-10 08:24:53', '2018-06-22 13:11:20'),
(14, 'ahmed9', 'ahmed09@yahoo.com', '123456', '01006031228', 1, 53, NULL, '2018-04-10 08:24:53', '2018-06-22 13:11:20'),
(15, 'ahmed10', 'ahmed010@yahoo.com', '123456', '01006031228', 1, 53, NULL, '2018-04-10 08:24:53', '2018-06-22 13:11:20'),
(16, 'ahmed11', 'ahmed011@yahoo.com', '123456', '01006031228', 1, 53, NULL, '2018-04-10 08:24:53', '2018-06-22 13:11:20'),
(17, 'ahmed12', 'ahmed012@yahoo.com', '123456', '01006031228', 1, 53, NULL, '2018-04-10 08:24:53', '2018-06-22 13:11:20'),
(18, 'ahmed13', 'ahmed013@yahoo.com', '123456', '01006031228', 1, 53, NULL, '2018-04-10 08:24:53', '2018-06-22 13:11:20'),
(19, 'ahmed14', 'ahmed014@yahoo.com', '123456', '01006031228', 1, 53, NULL, '2018-04-10 08:24:53', '2018-06-22 13:11:20'),
(20, 'ahmed15', 'ahmed015@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(21, 'ahmed16', 'ahmed016@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(22, 'ahmed17', 'ahmed017@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(23, 'ahmed18', 'ahmed018@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(24, 'ahmed19', 'ahmed019@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(25, 'ahmed20', 'ahmed020@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(26, 'ahmed21', 'ahmed021@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(27, 'ahmed22', 'ahmed022@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(28, 'ahmed23', 'ahmed023@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(29, 'ahmed24', 'ahmed024@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(30, 'ahmed25', 'ahmed025@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(31, 'ahmed26', 'ahmed026@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(32, 'ahmed27', 'ahmed027@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(33, 'ahmed28', 'ahmed028@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(34, 'ahmed29', 'ahmed029@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(35, 'ahmed30', 'ahmed030@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(36, 'ahmed31', 'ahmed031@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(37, 'ahmed32', 'ahmed032@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(38, 'ahmed33', 'ahmed033@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(39, 'ahmed34', 'ahmed034@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(40, 'ahmed35', 'ahmed035@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(41, 'ahmed36', 'ahmed036@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(42, 'ahmed37', 'ahmed037@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(43, 'ahmed38', 'ahmed038@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(44, 'ahmed39', 'ahmed039@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(45, 'ahmed40', 'ahmed040@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(46, 'ahmed41', 'ahmed041@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(47, 'ahmed42', 'ahmed042@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(48, 'ahmed43', 'ahmed043@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(49, 'ahmed44', 'ahmed044@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(50, 'ahmed45', 'ahmed045@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(51, 'ahmed46', 'ahmed046@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(52, 'ahmed47', 'ahmed047@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(53, 'ahmed48', 'ahmed048@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(54, 'ahmed49', 'ahmed049@yahoo.com', '123456', '01006031228', NULL, 0, NULL, '2018-04-10 08:24:53', '2018-04-10 08:24:53'),
(55, 'ahme1d', 'ashmed@yahoo.com', '123456', '010060312285', NULL, 0, NULL, '2018-04-10 08:45:14', '2018-04-10 08:45:14'),
(56, 'ahmed232', 'ahmed662@yahoo.com', '123456', '01224132571', NULL, 0, NULL, '2018-04-22 20:25:07', '2018-04-22 20:25:07'),
(57, 'Samir', 'samir@yahoo.com', '123456', '01236541236', NULL, 0, NULL, '2018-04-22 20:30:03', '2018-04-22 20:30:03'),
(58, 'samir22', 'samir22@yahoo.com', '123456', '01223645987', NULL, 0, NULL, '2018-04-24 08:29:41', '2018-04-24 08:29:41'),
(59, 'Elsaka', 'Elsaka@yahoo.com', '$2y$10$qR9467y6peLs3Wm.AGcV2.WBxI06tn5sbyskNv3YHG9VUxMOxt3Qa', '01006031228', NULL, 0, NULL, '2018-05-23 19:13:58', '2018-05-23 19:25:09'),
(60, 'demo', 'demo@gmail.com', '$2y$10$kOAGRjZyuF9/HjiQH.zsWOxJn4zZKoioko0V6pg8R8b8PhPfxPZ9m', '01224134362', 331, 0, NULL, '2018-05-23 20:48:41', '2018-07-04 17:28:13'),
(61, 'demo', 'demo2@gmail.com', '$2y$10$uicCToY0SXyZdg5oloFhs.pyvY1zhFMQkVLv3YVcu9RifOwWaLJoK', '01224134376', 10, 0, NULL, '2018-07-04 16:54:37', '2018-07-04 17:02:05'),
(62, 'demo', 'demo3@gmail.com', '$2y$10$kAKB55iPEQhgy6T7ECwo7ucJbJz/GtVbp2SdwVB3uhnUcdLui5NBu', '12345678912', 0, 0, NULL, '2018-07-04 17:13:37', '2018-07-04 17:15:22'),
(63, 'demo', 'demo4@gmail.com', '$2y$10$zfign9.Rt3vaoRQoEmupquw5NjqbvKg4ZAnSmVrxVZ/f1M3FXd3CS', '12345678912', 0, 0, NULL, '2018-07-04 17:17:54', '2018-07-04 17:21:38'),
(65, 'A', 'az@gmail.com', '123456789', '01254879', 50, 25, NULL, '2018-07-06 04:46:10', '2018-07-06 04:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_cards`
--

CREATE TABLE `user_cards` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `card_no` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_cards`
--

INSERT INTO `user_cards` (`id`, `user_id`, `card_no`, `created_at`, `updated_at`) VALUES
(4, 4, '9999999991', '2018-04-26 10:51:08', '0000-00-00 00:00:00'),
(5, 60, '999999556', '2018-07-04 22:00:30', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`,`qr_no`,`rfid_no`);

--
-- Indexes for table `garagesSlots`
--
ALTER TABLE `garagesSlots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `make_reservations`
--
ALTER TABLE `make_reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`ssd`,`id`),
  ADD UNIQUE KEY `owners_email_unique` (`email`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `parkingareas`
--
ALTER TABLE `parkingareas`
  ADD PRIMARY KEY (`id`,`long`,`lat`),
  ADD KEY `parkingareas_owner_ssd_foreign` (`owner_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_cards`
--
ALTER TABLE `user_cards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `garagesSlots`
--
ALTER TABLE `garagesSlots`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `make_reservations`
--
ALTER TABLE `make_reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `parkingareas`
--
ALTER TABLE `parkingareas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `user_cards`
--
ALTER TABLE `user_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
