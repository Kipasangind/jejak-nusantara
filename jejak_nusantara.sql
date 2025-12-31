-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2025 at 11:04 AM
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
-- Database: `jejak_nusantara`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmarks`
--

CREATE TABLE `bookmarks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `culture_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Tarian Tradisional', 'tarian-tradisional', '2025-12-10 07:11:34', '2025-12-10 07:11:34'),
(2, 'Musik Daerah', 'musik-daerah', '2025-12-10 07:11:34', '2025-12-10 07:11:34'),
(3, 'Makanan Tradisional', 'makanan-tradisional', '2025-12-10 07:11:34', '2025-12-10 07:11:34'),
(4, 'Rumah Adat', 'rumah-adat', '2025-12-10 07:11:34', '2025-12-10 07:11:34'),
(5, 'Pakaian Adat', 'pakaian-adat', '2025-12-10 07:11:34', '2025-12-10 07:11:34'),
(6, 'Upacara Adat', 'upacara-adat', '2025-12-10 07:11:34', '2025-12-10 07:11:34'),
(7, 'Bahasa & Aksara', 'bahasa-aksara', '2025-12-10 07:11:34', '2025-12-10 07:11:34'),
(8, 'Senjata Tradisional', 'senjata-tradisional', '2025-12-10 07:11:34', '2025-12-10 07:11:34'),
(9, 'Permainan Tradisional', 'permainan-tradisional', '2025-12-10 07:11:34', '2025-12-10 07:11:34'),
(10, 'Kerajinan Tangan', 'kerajinan-tangan', '2025-12-10 07:11:34', '2025-12-10 07:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `contributions`
--

CREATE TABLE `contributions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contributions`
--

INSERT INTO `contributions` (`id`, `user_id`, `category_id`, `title`, `province`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(9, 1, 1, 'Tari Kipas Pakarena', 'Sulawesi Selatan', 'Tari Kipas Pakarena merupakan tarian tradisional yang berasal dari Sulawesi Selatan dan erat kaitannya dengan budaya masyarakat Gowa. Kata “pakarena” berasal dari bahasa Makassar yang berarti bermain, namun dalam konteks budaya, tarian ini menggambarkan kelembutan, kesopanan, serta ketaatan perempuan dalam kehidupan sosial masyarakat setempat.\r\n\r\nGerakan Tari Kipas Pakarena cenderung lembut, berulang, dan dilakukan dengan tempo yang perlahan. Penari menggunakan kipas sebagai properti utama yang melambangkan kesejukan, ketenangan, dan kesetiaan. Gerakan yang mengalir juga mencerminkan siklus kehidupan manusia, seperti hubungan antara manusia dengan alam serta dengan Sang Pencipta.\r\n\r\nTarian ini biasanya diiringi oleh musik tradisional seperti gendang dan suling, serta dibawakan oleh penari perempuan yang mengenakan busana adat khas Makassar. Tari Kipas Pakarena sering dipentaskan dalam acara adat, penyambutan tamu kehormatan, dan berbagai pertunjukan budaya sebagai simbol keanggunan dan identitas budaya Sulawesi Selatan.', 'cultures/6mN8Yn4ALRMNXkZtSWO6XSJmpDwRVSXrebiuFIxP.jpg', 'pending', '2025-12-31 02:26:21', '2025-12-31 02:26:21'),
(10, 1, 1, 'Tari Gantar', 'Kalimantan Timur', 'Tari Gantar adalah tarian tradisional yang berasal dari Kalimantan Timur dan berkembang di kalangan masyarakat Dayak. Tarian ini melambangkan aktivitas menanam padi serta ungkapan rasa syukur masyarakat terhadap hasil pertanian yang melimpah. Oleh karena itu, Tari Gantar memiliki makna yang erat dengan kehidupan agraris dan hubungan manusia dengan alam.\r\n\r\nProperti utama dalam Tari Gantar adalah tongkat dan bambu berisi biji-bijian. Tongkat melambangkan alat penugal untuk melubangi tanah, sedangkan bambu berisi biji-bijian melambangkan benih padi yang akan ditanam. Gerakan tarian bersifat dinamis dan berirama, menggambarkan semangat kerja, kebersamaan, dan keharmonisan dalam kehidupan masyarakat Dayak.\r\n\r\nTari Gantar biasanya ditampilkan dalam upacara adat, pesta panen, serta acara penyambutan tamu. Tarian ini dapat dibawakan oleh penari laki-laki maupun perempuan dengan iringan musik tradisional khas Kalimantan Timur, menjadikannya sebagai salah satu warisan budaya yang mencerminkan nilai gotong royong dan kearifan lokal masyarakat setempat.', 'cultures/6LwjconDWNYDTvKmg4xjeGBEutOpqkfCu7GJGKZx.jpg', 'pending', '2025-12-31 02:28:39', '2025-12-31 02:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `cultures`
--

CREATE TABLE `cultures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `region` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cultures`
--

INSERT INTO `cultures` (`id`, `category_id`, `created_by`, `title`, `slug`, `region`, `province`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Tari Saman', 'tari-saman', NULL, 'Aceh', 'Tari tradisional Aceh yang terkenal dengan gerakan cepat dan kekompakan penari.', NULL, '2025-12-22 23:13:28', '2025-12-22 23:13:28'),
(2, 4, 1, 'Rumah Gadang', 'rumah-gadang', NULL, 'Sumatera Barat', 'Rumah adat Minangkabau dengan atap melengkung seperti tanduk kerbau.', NULL, '2025-12-22 23:13:28', '2025-12-22 23:13:28'),
(3, 2, 1, 'Angklung', 'angklung', NULL, 'Jawa Barat', 'Alat musik tradisional dari bambu yang dimainkan dengan cara digoyangkan.', NULL, '2025-12-22 23:13:28', '2025-12-22 23:13:28'),
(4, 3, 1, 'Rendang', 'rendang', NULL, 'Sumatera Barat', 'Makanan tradisional Minangkabau yang terkenal hingga mancanegara.', NULL, '2025-12-22 23:13:28', '2025-12-22 23:13:28'),
(5, 1, 1, 'Tari Kecak', 'tari-kecak', NULL, 'Bali', 'Tari tradisional Bali yang menceritakan kisah Ramayana.', NULL, '2025-12-22 23:13:28', '2025-12-22 23:13:28'),
(6, 5, 1, 'Pakaian Adat Ulos', 'pakaian-adat-ulos', NULL, 'Sumatera Utara', 'Kain tradisional Batak yang sarat makna budaya.', NULL, '2025-12-22 23:13:28', '2025-12-22 23:13:28'),
(7, 6, 1, 'Upacara Rambu Solo', 'upacara-rambu-solo', NULL, 'Sulawesi Selatan', 'Upacara adat pemakaman masyarakat Toraja.', NULL, '2025-12-22 23:13:28', '2025-12-22 23:13:28'),
(8, 7, 1, 'Bahasa Jawa', 'bahasa-jawa', NULL, 'Jawa Tengah', 'Bahasa daerah dengan tingkat tutur yang khas.', NULL, '2025-12-22 23:13:28', '2025-12-22 23:13:28'),
(9, 8, 1, 'Senjata Keris', 'senjata-keris', NULL, 'Jawa', 'Senjata tradisional yang dianggap memiliki nilai spiritual.', NULL, '2025-12-22 23:13:28', '2025-12-22 23:13:28'),
(10, 9, 1, 'Permainan Congklak', 'permainan-congklak', NULL, 'Nusantara', 'Permainan tradisional yang dimainkan dengan papan dan biji.', NULL, '2025-12-22 23:13:28', '2025-12-22 23:13:28');

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
(4, '2025_12_10_000000_create_categories_table', 1),
(5, '2025_12_10_000001_create_cultures_table', 1),
(6, '2025_12_10_000002_create_contributions_table', 1),
(7, '2025_12_10_000003_create_bookmarks_table', 1);

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
('64OVjH7QPzsDGdVAU9PPvtX3CGnwC7R2h1RLncts', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUlVaZVluaGFWWDg0Unc0Uk02eFk3TzlwTElmRm11Tm1FN0lhYjlFbCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9jb250cmlidXRpb25zIjtzOjU6InJvdXRlIjtzOjI1OiJhZG1pbi5jb250cmlidXRpb25zLmluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1767162275),
('CKqQKffVKIfSQdq0yyIyYr5b1SxFLnzFY5KNvekG', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaUxiQzhOWkd2SXp5RTFwZ2ZIbzFNS2ZvdUo3NFVaYzdEVHRqREp1OCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766815324),
('g2e8exXtVcHLoJPUlA7NOrsJVGLp6Oawaazg4tTC', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTzlOZk5LOWZNM3d6T21GSGpGTzVPYWhoNDhadWlCbTQzS3hCVHBNaCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7czo1OiJyb3V0ZSI7czoxNToiYWRtaW4uZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1767090798),
('NZI6jZn2Ul7bKoACj47Z51iigYL7VMUOfgoViT9Q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNjMxc2VRQnI2OGc5YVlUZ3pvbjFKaHdRaFZLSDZnYWpSMUpnVE84SCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7czo1OiJyb3V0ZSI7czoxNToiYWRtaW4uZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766482729),
('SjlDTdlCblR68awkWDoVEiHCbYlBEU1Zvkh8K7JG', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUFRRbFE4ejNtUUdMUEJEamdsVUZMaWhDOWV6MlZqYzRTcWoyeXNYaCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1767173755);

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
(1, 'Test User', 'test@example.com', '2025-12-10 07:11:34', '$2y$12$6TpQjxtv3tZS2M/jp8PgHe/jZmYWQGUdkSEo8f67.InhUgho90wXS', 'ZQ0vQH9zgo', '2025-12-10 07:11:34', '2025-12-10 07:11:34'),
(2, 'Admin', 'admin@example.com', '2025-12-22 23:13:28', '$2y$12$3My.x3OLynsLlClXfxZv4OqtWHEuWoSNysU4sBuR3w7H9gfSJZQUW', 'KHaiA5PYD9', '2025-12-22 23:13:29', '2025-12-22 23:13:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookmarks_user_id_foreign` (`user_id`),
  ADD KEY `bookmarks_culture_id_foreign` (`culture_id`);

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `contributions`
--
ALTER TABLE `contributions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contributions_user_id_foreign` (`user_id`),
  ADD KEY `contributions_category_id_foreign` (`category_id`);

--
-- Indexes for table `cultures`
--
ALTER TABLE `cultures`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cultures_slug_unique` (`slug`),
  ADD KEY `cultures_category_id_foreign` (`category_id`),
  ADD KEY `cultures_created_by_foreign` (`created_by`);

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
-- AUTO_INCREMENT for table `bookmarks`
--
ALTER TABLE `bookmarks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contributions`
--
ALTER TABLE `contributions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cultures`
--
ALTER TABLE `cultures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD CONSTRAINT `bookmarks_culture_id_foreign` FOREIGN KEY (`culture_id`) REFERENCES `cultures` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookmarks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contributions`
--
ALTER TABLE `contributions`
  ADD CONSTRAINT `contributions_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contributions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cultures`
--
ALTER TABLE `cultures`
  ADD CONSTRAINT `cultures_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cultures_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
