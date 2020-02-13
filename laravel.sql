-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2020 at 06:02 AM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `columns`
--

CREATE TABLE `columns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `columns`
--

INSERT INTO `columns` (`id`, `status`, `created_at`, `updated_at`, `email`, `user_id`) VALUES
(1, 'mencoba', '2020-02-13 02:13:11', NULL, 'hendra@gmail.com', 1),
(2, 'menggali', '2020-02-13 02:13:11', NULL, 'hendra@gmail.com', 1),
(3, 'sjfksdjf', '2020-02-13 04:09:33', NULL, 'sdkls', 1),
(4, 'jksdk', '2020-02-13 04:16:24', NULL, 'jskld@gmail.com', 1),
(5, 'fklsjfsd', '2020-02-13 04:31:05', NULL, 'hendra@gmail.com', 6),
(6, 'mencoba', '2020-02-13 04:36:30', NULL, 'emoh@gmail.com', 6);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_task` int(11) NOT NULL,
  `name_task` varchar(200) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_task`, `name_task`, `kegiatan`, `waktu`, `id`) VALUES
(1, 'kegiatan minggu depan', 'mene prei!!! Amiiin', '2020-02-03 01:20:13', '1'),
(2, 'Kerja Hari ini', 'dfjkdfhkjashfsadf', '2020-02-03 01:32:16', '1'),
(3, 'Kerja Hari ini', 'sajlkjalslajsl', '2020-02-03 01:34:29', '1'),
(4, 'nekopoi.care', 'evelevek', '2020-02-05 01:19:29', '2'),
(5, 'hevenraasdf', 'sdjf', '2020-02-05 01:29:39', '2'),
(6, 'wibu', 'makan kampang', '2020-02-05 01:30:41', '2'),
(7, 'kegiatan minggu depan', 'makan makan', '2020-02-05 01:39:00', '2'),
(8, 'Kerja Hari ini', 'makan makan', '2020-02-05 01:39:53', '2'),
(9, 'Kerja Hari ini', 'joker joker malang', '2020-02-05 01:40:23', '2'),
(10, 'Kerja Hari ini', 'makan makan', '2020-02-05 02:03:54', '2'),
(11, 'sklsajd', 'lkjldj', '2020-02-05 02:54:33', '2'),
(12, 'sadfjslkdj', 'lksdfsdj', '2020-02-05 02:55:42', '2'),
(13, 'sfsadjf', 'jslkdfsjdf', '2020-02-05 02:55:49', '2'),
(14, 'Kerja Hari ini', 'skfsaf', '2020-02-05 03:02:46', '2'),
(15, 'remember', 'hevendrava evelevek', '2020-02-05 03:48:43', '2'),
(16, 'fklsjd', 'jlksdf', '2020-02-05 03:49:42', '2'),
(17, 'wwewehj', 'hsdkjhw', '2020-02-05 03:51:50', '2'),
(18, 'sdjds', 'lksjdj', '2020-02-05 03:51:59', '2'),
(19, 'gjghg', 'drtdt', '2020-02-05 04:01:14', '2'),
(20, 'vvv', 'dgf', '2020-02-05 04:01:25', '2'),
(21, 'nfjksadf', 'jkssn', '2020-02-05 04:28:14', '2'),
(22, 'ajkajks', 'skjhjksd', '2020-02-05 04:28:21', '2'),
(23, 'sndlksndf', 'lksdf', '2020-02-05 04:33:01', '2'),
(24, 'lkcnzcnNZXNC,ZCz', 'c,ncx', '2020-02-05 06:54:38', '2'),
(25, 'sadasd', 'hkjshdh', '2020-02-05 06:54:51', '2');

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
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2020_02_04_012607_create_task_models_table', 2),
(3, '2020_02_12_101429_create_columns_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('hendra0maulidan@gmail.com', '$2y$10$Xh.Y7Dn7SxpE62mNc/tbQuAoT5pe/cQgAx1JeXVgRkYoSDqGwoMX.', '2020-02-11 04:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_name`) VALUES
(1, 'jlsjflsd'),
(2, 'sd');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `column_id` int(11) NOT NULL,
  `name_task` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Process` timestamp NULL DEFAULT NULL,
  `Finish` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `kegiatan`, `created_at`, `updated_at`, `deleted_at`, `column_id`, `name_task`, `Process`, `Finish`) VALUES
(1, '1', 'mencoba tidur', '2020-02-13 02:14:35', '2020-02-13 02:14:35', NULL, 1, 'ini task', NULL, NULL),
(2, '1', 'menggali kuburan', '2020-02-13 02:14:35', '2020-02-13 02:14:35', NULL, 2, 'mencoba menggali', NULL, NULL),
(3, '1', 'duar', '2020-02-13 02:20:12', '2020-02-13 02:20:12', NULL, 1, 'haji gays', NULL, NULL),
(4, '1', 'jlsjdjl', '2020-02-13 04:29:55', '2020-02-13 04:29:55', NULL, 1, 'zxlkzs', NULL, NULL),
(5, '1', 'emoh', '2020-02-13 04:30:06', '2020-02-13 04:30:06', NULL, 1, 'menambahkan', NULL, NULL),
(6, '1', 'jsldjsd', '2020-02-13 04:30:17', '2020-02-13 04:30:17', NULL, 3, 'sdsd', NULL, NULL),
(7, '6', 'jskds', '2020-02-13 04:31:14', '2020-02-13 04:31:14', NULL, 5, 'sdjasdj', NULL, NULL),
(8, '6', 'ini text', '2020-02-13 04:36:47', '2020-02-13 04:36:47', NULL, 6, 'indo', NULL, NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hendra Maulidan', 'hendra@gmail.com', NULL, '$2y$10$KiIZR0BwIIGp4E0lxE9PDuHrR5rgbcc0Wyu8ku658ho2Cd5uDth1q', 'nkPzsAezbU3YXDEC08rStz5eY56mfVPTIT7ZiiLFIu2TwW7J85ymhFtPi1Yk', '2020-02-03 18:58:17', '2020-02-03 18:58:17'),
(2, 'hevendrava evelevek', 'jajal@mail.com', NULL, '$2y$10$hCqe0NRNncoeQ7upcMI5O.sIpKH6T0c249Y21VwFR18Ulx5yHnr.2', NULL, '2020-02-04 18:19:10', '2020-02-04 18:19:10'),
(3, 'chelsy', 'chelsy@thunderlab.id', NULL, '$2y$10$ox7HlD0XFFzstfYHeeqjbuZ1DrQcQR3EOWujbKLvcAUThVUn809Xy', NULL, '2020-02-06 07:11:37', '2020-02-06 07:11:37'),
(4, 'kampank', 'kampank@id.id', NULL, '$2y$10$UvYDSHc0gQb04.i4BxXXY.plK5hVV5reQLb/aUrUvL5rZrWjwq7nO', NULL, '2020-02-08 04:23:51', '2020-02-08 04:23:51'),
(5, 'Hendra Maulidan', 'hendra0maulidan@gmail.com', NULL, '$2y$10$nL2c9JOh4INCMeMtttOgoePO3i3/yoPrx4TM62uHYTo8EWG0JPe.m', NULL, '2020-02-11 03:58:55', '2020-02-11 03:58:55'),
(6, 'joker', 'joker1@gmail.com', NULL, '$2y$10$sZpgv9ACuy2VzuRM3UvAae3UMfU5sH.QHzULdHcyXvBj6GUeKNG02', NULL, '2020-02-13 04:30:52', '2020-02-13 04:30:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `columns`
--
ALTER TABLE `columns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_task`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `columns`
--
ALTER TABLE `columns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
