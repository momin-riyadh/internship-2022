-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 06:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_heads`
--

CREATE TABLE `account_heads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `head_code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `acc_head` varchar(255) DEFAULT NULL,
  `type` enum('Income','Expense') NOT NULL,
  `voucher_no` varchar(255) NOT NULL,
  `narration` longtext DEFAULT NULL,
  `transaction_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `debit` decimal(10,2) DEFAULT NULL,
  `credit` decimal(10,2) DEFAULT NULL,
  `is_opening` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `acc_head`, `type`, `voucher_no`, `narration`, `transaction_at`, `debit`, `credit`, `is_opening`) VALUES
(1, NULL, NULL, 'Income', '456', 'gsdgsdg', '2023-02-14 05:57:29', '45.00', '0.00', 0),
(2, NULL, NULL, 'Expense', '457', 'gsdgsdg', '2023-02-14 05:57:29', '0.00', '54.00', 0),
(3, NULL, NULL, 'Expense', '467', 'gsdgsdg', '2023-02-14 05:57:29', '0.00', '500.00', 0),
(4, NULL, NULL, 'Income', '496', 'gsdgsdg', '2023-02-14 05:57:29', '45.00', '0.00', 0),
(5, NULL, NULL, 'Expense', '506', 'gsdgsdg', '2023-02-14 06:05:36', '0.00', '70.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Jayme Lehner', 'luther13@example.org', '2023-02-07 01:24:54', '$2y$10$edmUohITe9TRVFI2HHp.oOfVOL0Aiy59CzM64ngkpdTI1EgHQuxIu', NULL, NULL, NULL, 'Rnhce3TJ0wSUquIjOqsYdyGvPhjmroNUQRTdNceaPd5HDFvRRkbaf5uVr9d4', '2023-02-07 01:24:54', '2023-02-07 01:24:54'),
(2, 'Neil Glover', 'ulittle@example.net', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'aBTvreOYcr', '2023-02-07 01:24:54', '2023-02-07 01:24:54'),
(3, 'Dale Brown DVM', 'wcarter@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'KClGGSlrNH', '2023-02-07 01:24:54', '2023-02-07 01:24:54'),
(4, 'Sofia Rogahn', 'dstrosin@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'vi12Zf9CEO', '2023-02-07 01:24:54', '2023-02-07 01:24:54'),
(5, 'Buster Nienow', 'providenci36@example.net', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'BG9V76m35D', '2023-02-07 01:24:54', '2023-02-07 01:24:54'),
(6, 'Miss Gina Bahringer III', 'laney56@example.org', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'GSaFf3Uhqw', '2023-02-07 01:24:54', '2023-02-07 01:24:54'),
(7, 'Brannon Schiller', 'abigayle01@example.org', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'pijvn64pLF', '2023-02-07 01:24:54', '2023-02-07 01:24:54'),
(8, 'Ms. Idell Medhurst PhD', 'crist.malachi@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'nTY19UnCYL', '2023-02-07 01:24:54', '2023-02-07 01:24:54'),
(9, 'Roberto Conroy', 'thowe@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'C7hDTSvdPy', '2023-02-07 01:24:54', '2023-02-07 01:24:54'),
(10, 'Julia Brown', 'jaiden.kessler@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'YkPUVVxaZK', '2023-02-07 01:24:54', '2023-02-07 01:24:54'),
(11, 'Kiley Kuhic', 'bailey.padberg@example.org', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'WEzAecsq1G', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(12, 'Armani Christiansen', 'cale04@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'OaqqrZKEYr', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(13, 'Carli Stanton II', 'rodriguez.elvie@example.net', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '2syfTP7QeH', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(14, 'Monique Kuhlman', 'spencer.luther@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'QtGMNxfn0o', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(15, 'Baron Abbott', 'sokuneva@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'y4qjS4ELDT', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(16, 'Westley Boehm', 'brady53@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'ynOkRypJLD', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(17, 'Richmond Moore', 'okuneva.morton@example.org', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'Z2Pxm3ubqo', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(18, 'Isobel Langworth', 'hills.vernice@example.org', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'dysRU21chx', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(19, 'Mr. Bertram Lesch IV', 'conn.jailyn@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'kCgymWK7rM', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(20, 'Aylin Schroeder', 'lessie32@example.org', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'zEWQzj34JO', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(21, 'Katheryn Swift DVM', 'odach@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'XyjEPLDOPT', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(22, 'Rossie Kshlerin IV', 'linda.ritchie@example.org', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'inq0EKRYOS', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(23, 'Ms. Emie Koch Jr.', 'dhayes@example.org', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'n68qrgnCBl', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(24, 'Ms. Rahsaan O\'Hara IV', 'lorena.boehm@example.net', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'NkrXTN5afq', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(25, 'Mrs. Chyna Herman DVM', 'alia02@example.org', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '8JZQaXK8SV', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(26, 'Dr. Terrance McLaughlin', 'ukuvalis@example.net', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'fhyAjmHAtS', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(27, 'Darrin Gulgowski', 'vmertz@example.org', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '3kjNoI2yPv', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(28, 'Jairo Daniel', 'bartoletti.nia@example.org', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'nqDxnS9MV9', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(29, 'Pink Grimes', 'david.jast@example.net', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'A5WJppJr6P', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(30, 'Tyrique Keeling DDS', 'bbayer@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'ueds8QgCzg', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(31, 'Mozell McDermott', 'savannah43@example.net', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'oUPv9cIt5I', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(32, 'Samara Grimes', 'mayra23@example.org', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'PAHvM0uOW7', '2023-02-07 01:24:55', '2023-02-07 01:24:55'),
(33, 'Chloe Zemlak', 'skye.ziemann@example.net', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'kX8DuqulEy', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(34, 'Annamarie Casper', 'mustafa.haley@example.net', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'UhQYTALXLr', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(35, 'Lexie Ullrich', 'will55@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'ykrK5EiA3j', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(36, 'Daphne Bergstrom', 'beulah15@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'oIxeYUecEu', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(37, 'Dayne Mosciski', 'sydnie.runolfsdottir@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'I3oiEB964i', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(38, 'Shanel Wolf', 'spencer.yasmin@example.net', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'ysQdeXdPmY', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(39, 'Mrs. Onie Rutherford', 'kunde.patrick@example.org', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'SO6PPXgiZ5', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(40, 'Dr. Gideon Pollich III', 'rlang@example.org', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'oiYCxn0hpA', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(41, 'Haleigh Jaskolski', 'ned.fritsch@example.net', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'ipJRccFHF6', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(42, 'Mr. Donnie Tillman Jr.', 'greenfelder.leilani@example.net', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'k2IaC3im3c', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(43, 'Eloy Daugherty II', 'osborne.nolan@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'dp7Kl3veTx', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(44, 'Dr. Katlyn Welch', 'lebsack.emilie@example.net', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '85OnMMEDjH', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(45, 'Donato Dach', 'jmcglynn@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0OGTA1gMLu', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(46, 'Michel Metz Jr.', 'lmertz@example.org', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'OImO2QqhXS', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(47, 'Daphney Williamson', 'kailey.hyatt@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'EEmwFNjZgB', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(48, 'Kelly Feest', 'rolfson.angelica@example.com', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'YGDjSgUTA6', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(49, 'Dr. Wayne Okuneva', 'galtenwerth@example.net', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'gjWxZUbs7H', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(50, 'Cayla Predovic', 'arthur44@example.net', '2023-02-07 01:24:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'gHdFCHJdNi', '2023-02-07 01:24:56', '2023-02-07 01:24:56'),
(51, 'user1', 'user1@practice.com', NULL, '$2y$10$okGjcm.ND0Ngk73OpAouaezOyo230JfvuVQ0QLgqeXOmaqF667vt6', NULL, NULL, NULL, NULL, '2023-02-07 05:55:52', '2023-02-07 05:55:52'),
(52, 'zia', 'zia@genusys.com', NULL, '$2y$10$WtVYcA.7AmsaZkVWCW19wO/HWCs02s6qgHiEeI5iGGhdbBGqkmHPK', NULL, NULL, NULL, NULL, '2023-02-14 05:18:57', '2023-02-14 05:18:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_heads`
--
ALTER TABLE `account_heads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `head_code` (`head_code`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_ibfk_1` (`user_id`),
  ADD KEY `acc_head` (`acc_head`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_heads`
--
ALTER TABLE `account_heads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`acc_head`) REFERENCES `account_heads` (`head_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
