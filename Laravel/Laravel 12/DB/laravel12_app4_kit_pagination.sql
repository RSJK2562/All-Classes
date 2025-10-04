-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2025 at 10:37 PM
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
-- Database: `laravel12_app4_kit_pagination`
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
(3, '0001_01_01_000002_create_jobs_table', 1);

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
('1waR5MV5YLXPLoSzOCvc91OjxkKhRmOhaM5wQT5Y', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36 Edg/139.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSG01ODBlSnhDR0FqSk0zWDVtbHdLY0wzTEpNYmVsa3hDTkRvWll2TyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNzoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL3VzZXJzIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1756565164),
('TJb4x89OJ8KZixKKP7gdjnGUFz19U90P2kqaWhJe', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36 Edg/139.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia2FGcWJ5bFd3OGJJbmhCalA5UVl5Q3RTdGplVElQb0hNV00yYno3NSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC91c2VycyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1756561275),
('xqUWZJT3qGRS58IjpTROoWNfsfMEpRWjpiJatreC', 1, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_0 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/17.5 Mobile/15A5370a Safari/602.1', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZWhVQlc2VXJCcFNSY3NTajVIYXdDcWNZRjY4WjZsRk8xWFdnSEx2ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC91c2Vycz9wYWdlPTEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1756587796);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ravi', 'raviup198@gmail.com', NULL, '$2y$12$AkJ8iqno3RZXby9VCOFrIO5H1fpY6VCTrzA.JtZYn4yKS/OTebDOO', 'ozZD0DNnxt6chYp8DdsPtGWLyCanixbWtyTyh8AXJZY9G1Eq8q0v7GxQ0NLY', '2025-08-30 07:14:51', '2025-08-30 07:14:51'),
(2, 'Eden Zboncak MD', 'lorine79@example.com', '2025-08-30 15:10:07', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'DdQTrrI1jG', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(3, 'Odessa Reichert', 'bergnaum.ezekiel@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'iq81OFg2u0', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(4, 'Dr. Sage Rippin PhD', 'marley42@example.net', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'QLNuuyCqfp', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(5, 'Westley Wolff', 'dicki.stanford@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'MVBCE7k9Yf', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(6, 'Otilia Hyatt IV', 'njakubowski@example.com', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'DhY0qvVhff', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(7, 'Otis Cummerata MD', 'botsford.cayla@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'RsylBu8q7Y', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(8, 'Murphy Christiansen', 'vergie.mcglynn@example.com', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'WITZTFtBak', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(9, 'Prof. Tyson Jaskolski PhD', 'kristin95@example.net', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'Sqwsi9hssR', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(10, 'Weston Murphy', 'frida.bernier@example.com', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', '1kjym54QwB', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(11, 'Miss Elfrieda Murphy Jr.', 'vhuel@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'vZh3GKxhbY', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(12, 'Dr. Ryann Stroman Sr.', 'ppollich@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'xCTi3yFsif', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(13, 'Nayeli Mosciski', 'gsenger@example.net', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', '9ls1RTL5aE', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(14, 'Rita Schaden', 'pollich.jaunita@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'urtPsIV1FN', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(15, 'Devonte Nicolas', 'frussel@example.net', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'FdT0CMJ7zf', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(16, 'Mrs. Danielle Daniel I', 'justus38@example.net', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', '7VolavlOa5', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(17, 'Lorenz Willms', 'mckenna05@example.com', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'Ve0xeOcnIa', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(18, 'Maya Maggio IV', 'scotty65@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'a1RTayFZDO', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(19, 'Samantha Casper', 'hermann.marquis@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'oIHMMX5YAx', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(20, 'John Kuhic', 'savanna26@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'q7xIkSwohc', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(21, 'Golda Donnelly', 'suzanne12@example.com', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'h4LP24PCIq', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(22, 'Amara Hilpert DDS', 'craig12@example.net', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'LWCZSvtrWG', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(23, 'Daphnee Cormier', 'jdickens@example.com', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'dTlsGLVvhA', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(24, 'Kyleigh Runolfsdottir', 'dewitt50@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'ztzYvvxhcK', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(25, 'Dr. Brian Nikolaus', 'maeve.spencer@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'GxOr3f7ilW', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(26, 'Prof. Harry Ritchie III', 'randy.crist@example.com', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'rnI0Uh5OCp', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(27, 'Mekhi D\'Amore', 'barton.francisca@example.net', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', '8fbEqweTzC', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(28, 'Lamont Hand', 'tamara90@example.net', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'VFwMqUxORs', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(29, 'Sierra Yost', 'chris.lueilwitz@example.com', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', '15nNL58Spo', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(30, 'Dr. Belle Conroy', 'myrna.cronin@example.net', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'vnKqixBU8i', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(31, 'Norbert Harber', 'schneider.allen@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'phf3CSF5Om', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(32, 'Elsa Green', 'lueilwitz.mellie@example.net', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'ZcRkqOSRFb', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(33, 'Erika Hickle IV', 'edmund.weimann@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'PoYEK5zDn8', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(34, 'Nat Eichmann', 'preston21@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'skXwHcplKI', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(35, 'Kale Olson', 'mason.sporer@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'OZbjLhUJPa', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(36, 'Kraig Corwin PhD', 'arno.bergnaum@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', '1rEN2PYudI', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(37, 'Mrs. Thalia Gulgowski', 'justyn29@example.net', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', '2Lx7xwnEiu', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(38, 'Raoul Rice', 'wava89@example.net', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'gPQWGUPFjv', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(39, 'Eliseo Koelpin', 'twalker@example.com', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'JyedXXQ8ub', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(40, 'Mr. Fermin Streich', 'zcruickshank@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'Y5cWfeL5uC', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(41, 'Ms. Theresia Abshire MD', 'cierra.runolfsdottir@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'IjjfQYVuAT', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(42, 'Edwina Hoeger', 'ratke.catalina@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'F4nVAWqvOn', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(43, 'Corrine Buckridge', 'kilback.celia@example.com', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'SMSfgPD0Yd', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(44, 'Bert Kutch', 'robel.cordie@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'zmx16LUXVl', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(45, 'Marcos Schultz', 'domenic05@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'VZLb0EsSRO', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(46, 'Ms. Jodie Bartell IV', 'uwelch@example.net', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'LdYTQiPCl0', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(47, 'Dudley Rosenbaum', 'tbarrows@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'T8rRQ7jg1J', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(48, 'Hilda Hane', 'kasandra88@example.org', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'JcG7GrEtnN', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(49, 'Maxwell Crist', 'ywaters@example.com', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'W9pManSNkL', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(50, 'Blanca Runolfsson', 'kaylee.gleichner@example.net', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'b99ZEKppor', '2025-08-30 15:10:08', '2025-08-30 15:10:08'),
(51, 'Prof. Lew Sipes', 'qheidenreich@example.net', '2025-08-30 15:10:08', '$2y$12$9QJ6c8Q1nwVm6AcpjzTbjONqLWA7QIVRrtftSP.b4lqAQtueQ9gpq', 'zg697o4jIj', '2025-08-30 15:10:08', '2025-08-30 15:10:08');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
