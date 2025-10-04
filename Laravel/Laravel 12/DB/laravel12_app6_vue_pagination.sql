-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2025 at 10:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel12_app6_vue_pagination`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_08_14_170933_add_two_factor_columns_to_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('mNf2pB72L5HxQNomfHoQ13KJHyYrEECRhlKH2rDl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36 Edg/140.0.0.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiUFFFNk4wQ0NrMzZ1bExnV2lQSkVGTngzSERpTHg4R2E3ZjUyeFFlUSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1759603429);

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ravi', 'raviup198@gmail.com', NULL, '$2y$12$xmvVHBazWHo74uIXXKxrK.CT0d.fSuxoHRJHtkYkTyrBnRCkKS12e', NULL, NULL, NULL, NULL, '2025-10-04 12:20:10', '2025-10-04 12:20:10'),
(2, 'Greta Heidenreich', 'ewuckert@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'Z3aeFqrEHK', 'oGQbiNz6jm', '2025-10-04 12:38:48', '0m0VkMNtbx', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(3, 'Don Kub', 'hgreenholt@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'jc4LLv5bgK', '4lFhvAcsOK', '2025-10-04 12:38:48', 'tF7QvA71kK', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(4, 'Prof. Herminia Mohr', 'kenyatta.anderson@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', '9ChpMTDcUa', 'd1svFOjayk', '2025-10-04 12:38:48', '2FCjMT1p2a', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(5, 'Emmy Halvorson', 'llittle@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'osbyJxotGP', 'pD11NzSPbQ', '2025-10-04 12:38:48', 'z07QWpXDbO', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(6, 'Mr. Akeem Shanahan', 'abelardo14@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'g52ufOtoTz', 'cz2BDf7VlI', '2025-10-04 12:38:48', 'Sz4jC8OSjh', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(7, 'Tomas Kessler', 'rubie97@example.net', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', '9SyalG6Rt6', '2CQIU2xAjW', '2025-10-04 12:38:48', 'A9jgtHTxIW', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(8, 'Abdullah Krajcik MD', 'uconnelly@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'uPakXc5KHZ', 'gSVM0jcH5h', '2025-10-04 12:38:48', 'bE3ieJ3Bls', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(9, 'Rollin Parisian', 'ila.zboncak@example.net', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'rDmXxLvnhn', '9CjTYPdgaA', '2025-10-04 12:38:48', '7RzTzHpW3d', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(10, 'Dr. Mayra Stokes', 'andrew64@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'jmeYbKdsnu', 'roTPvJsA5p', '2025-10-04 12:38:48', 'K7LDQ1JgdU', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(11, 'Prof. Jerrod O\'Keefe', 'mschuppe@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'Qjjvb9tHdD', 'MecWEcr2DP', '2025-10-04 12:38:48', 'al6D0RVxSG', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(12, 'Elda Veum', 'micheal.stokes@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'PChwSOvkZ2', 'UK3LUy8uZv', '2025-10-04 12:38:48', 'GWnaFgCtKM', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(13, 'Mr. Laurel Stamm I', 'walter.humberto@example.net', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', '5oDbU6vO4j', 'eLo6Hkn232', '2025-10-04 12:38:48', '13iI2bSh5o', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(14, 'Kenton Wehner', 'torphy.cesar@example.net', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'zcMFJ5BeIH', 'fkDb2xCwgr', '2025-10-04 12:38:48', '5h94JIw8e0', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(15, 'Rocky Ritchie I', 'cortney.quitzon@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'jxR5TUtRRO', 'fN26lMLK1F', '2025-10-04 12:38:48', 't3IpgvvW0b', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(16, 'Prof. Lucas Nienow', 'gchamplin@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', '6Zp4KbvjWW', 'c5bYjNKMcr', '2025-10-04 12:38:48', 'PS7qegw8ll', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(17, 'Prof. Milton Erdman PhD', 'ybeahan@example.net', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'YsC49cyDaO', 'qPfiSBU9mb', '2025-10-04 12:38:48', 'cqDfDOHqsN', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(18, 'Mitchel Klocko', 'brando.heidenreich@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'iWNSbfvY7F', 'YzkrBSouih', '2025-10-04 12:38:48', 'C7yxcIeYpu', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(19, 'Sandrine Bogisich', 'merritt.gorczany@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'KpqgOUv4Vd', '3biNQdRaVr', '2025-10-04 12:38:48', 'tJhZwif4ay', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(20, 'Dr. Russel Treutel I', 'keegan95@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'lfkzwZCDSi', 'XulFqhredA', '2025-10-04 12:38:48', '1NbUaiB2Aj', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(21, 'Pat Leannon', 'xjerde@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'mrTC4U1unc', 'fWnd72Rcug', '2025-10-04 12:38:48', 'vWMOPDA2a2', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(22, 'Jaren Schmitt', 'simonis.pinkie@example.net', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'jmzxkQqK46', '8ZHXPaHqLF', '2025-10-04 12:38:48', 'yZEzFjtcNy', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(23, 'Darrick Orn I', 'qrowe@example.net', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'AhnYG35HeV', 'qzO1cLleIq', '2025-10-04 12:38:48', 'vCpQ59jLLN', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(24, 'Dr. Elfrieda Runolfsdottir', 'guadalupe85@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', '5mT2UTsbCv', 'mKTwrXM8r3', '2025-10-04 12:38:48', 'NHtBSbsKzM', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(25, 'Yvette Klocko', 'anderson.stephany@example.net', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'SgB88odNZp', '5Zzb9OUIBA', '2025-10-04 12:38:48', 'E5LiKZB2sN', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(26, 'Stewart Dietrich', 'flesch@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'ZVh9ZtRVj7', 'SRpD1d4QEM', '2025-10-04 12:38:48', 'bdkm2H9kF3', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(27, 'Lonie Kub', 'ylakin@example.net', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'WjNIddzRB5', 'yJdneI3jkR', '2025-10-04 12:38:48', 'Jz1IOLTZst', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(28, 'Enid Schroeder', 'estell.stoltenberg@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'maeYK2fVVd', 'CikJhp5x88', '2025-10-04 12:38:48', 'sBktuxok1c', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(29, 'Wilhelmine Jacobs', 'lvon@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', '0YNGaL809x', 'y6Jt4nW7iK', '2025-10-04 12:38:48', '3owXSZAhAC', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(30, 'Keshawn Ernser', 'emarquardt@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'Q4xTBaAa83', 'IOqs0Tpl3B', '2025-10-04 12:38:48', '3YniX9zxJQ', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(31, 'Brendon Heller', 'justine17@example.net', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'W8AVMZuHQA', '0n4JKmoenq', '2025-10-04 12:38:48', 'RlQ2q7av3r', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(32, 'Ardith Hermann', 'wisoky.kristina@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'Tf5LHXVUOs', '7Lm98ojAam', '2025-10-04 12:38:48', '3Lm68a9lz5', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(33, 'Coty Ratke', 'presley.gibson@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'iLNr8uj9MA', 'Y8a2HVGeop', '2025-10-04 12:38:48', 'SBfXd68IyF', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(34, 'Gonzalo Batz', 'karlee.kertzmann@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'VEGg0rc4dW', 'jAGZVDRnXY', '2025-10-04 12:38:48', 'rwOg16z74h', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(35, 'Nathan Abbott', 'maurine.mills@example.net', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'xjYGL097MA', 'CfXvGUH1to', '2025-10-04 12:38:48', 'Sp17DtZHOC', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(36, 'Lelia Kuhic', 'arlene77@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'KTkVYz838X', 'SpTy0A8954', '2025-10-04 12:38:48', 'Z4UHauPpnn', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(37, 'Mikayla Yundt', 'kwuckert@example.net', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'BbKrwjK82U', 'lyAQBzSi6e', '2025-10-04 12:38:48', 'ac6JaGqrA6', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(38, 'Chesley Zulauf', 'dooley.reinhold@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'VlFh981l9c', 'dh54XMZhuh', '2025-10-04 12:38:48', '4QlWlqXWdH', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(39, 'Jude O\'Connell', 'smurray@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'qxKU7OLZGN', 'HHXPU2hcNJ', '2025-10-04 12:38:48', '21EVoPdVCE', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(40, 'Fanny Stanton V', 'lauriane16@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'Lc610lGvgx', 'ri4AOIIODB', '2025-10-04 12:38:48', 'OJcAuHvM65', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(41, 'Orlando Buckridge', 'jean.olson@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', '3Rx15CyC3D', 'XkrMLDmgM3', '2025-10-04 12:38:48', 'JXSXP6Yc95', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(42, 'Dr. Elinore Willms', 'cristian.ankunding@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', '5B347OUfwP', 'lYH8E736qq', '2025-10-04 12:38:48', 'gmKvLGkc92', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(43, 'Ms. Madalyn Hoeger Jr.', 'mbartell@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', '8ZXKD2593O', 'w5ITidKW7K', '2025-10-04 12:38:48', 'vNn7lbFRws', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(44, 'Jalen Stracke', 'boyer.nestor@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'A98jFlBXev', 'hhoHrbvoGm', '2025-10-04 12:38:48', 'F4GeDHjLcH', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(45, 'Augustus Cassin', 'hardy56@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'YfW6JUQmgL', 'KEOQDt78jj', '2025-10-04 12:38:48', 'orRpyPIPqX', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(46, 'Tessie Abshire', 'corwin.danial@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'RCe7XbYz8r', 'QjzwYxroq9', '2025-10-04 12:38:48', 'mh53GQGdTl', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(47, 'Mr. Monte Veum', 'devon35@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'EUidRYnF6o', 'yfo7F2Rfps', '2025-10-04 12:38:48', 'tUWQI3U6sR', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(48, 'Newell Larkin DVM', 'runolfsson.cristina@example.net', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', '2a7AahwlFl', 'tEJHKSYm7E', '2025-10-04 12:38:48', 'joSSaKekVG', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(49, 'Ansley Morar', 'block.kareem@example.com', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'vz8XCqBCmI', 'FrH245evjs', '2025-10-04 12:38:48', 'fPPMVOdWTY', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(50, 'Dr. Ramon Ledner Sr.', 'olson.estella@example.org', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'RcS1374bek', 'UeLfnq4jAd', '2025-10-04 12:38:48', 'AUaeUmwvdf', '2025-10-04 12:38:48', '2025-10-04 12:38:48'),
(51, 'Prof. Kelvin Hane', 'ubaldo.runte@example.net', '2025-10-04 12:38:48', '$2y$12$Jfc0Z9vze7DAdfWtSMcQi.muG4W87BhGNIXa7xG8Uj8QLpM.uGQRy', 'hQSu6hgrAn', 'XcNHaQ2mgJ', '2025-10-04 12:38:48', 'wz4wvQSc8B', '2025-10-04 12:38:48', '2025-10-04 12:38:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
