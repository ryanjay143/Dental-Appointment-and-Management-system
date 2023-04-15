-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 07:16 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental_db`
--

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_03_11_093636_create_tb_user_table', 1);

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
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 0 COMMENT '0 = patient 1 = admin 2 = dentist',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `firstname`, `lastname`, `username`, `email`, `phone_number`, `user_type`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Ryan', 'Reyes', 'ryan_143', 'ryanjaytagolimotreyes@gmail.com', '09358554398', 0, '$2y$10$U/CjrCMhvOjnQvLi75qg0utd3vd3VbqCAaFQfwnMfwT3uydqyHjDi', '2023-03-11 01:45:33', '2023-03-11 01:45:33'),
(2, 'shemieneth', 'Merida', 'Shemie143', 'shemnagac@gmail.com', '09358554398', 1, '$2y$10$MhKLcYGPankGBXQc1LE1NehgQALhEqdcEhr5UNemKu/kwvWXXfhZG', '2023-03-11 01:48:13', '2023-03-11 01:48:13'),
(3, 'Maria', 'Antivola', 'maria_123', 'shemnagac@gmail.com', '09358554398', 2, '$2y$10$Kg4eQEgri97DmpVGZx2byeriIJfI3gnDdj/5qml0d0hV9ekrkZrFu', '2023-03-11 01:53:32', '2023-03-11 01:53:32'),
(4, 'keith', 'Jumadla', 'keith_123', 'ofrancisoliver@gmail.com', '09358554398', 0, '$2y$10$gd77XN9yuuu0jBskQy6iW.15zqkSH2Bg.nqpdW8qZVITfor5qMjya', '2023-03-11 06:12:46', '2023-03-11 06:12:46'),
(5, 'aeron', 'alajenio', 'aeron_123', 'aeron@gmail.com', '09358554398', 0, '$2y$10$1CnUHJukBNfDE7bEz5fgm.ou9R0CvGsGUAt8qXnwZbFE7EHK85poa', '2023-03-12 18:01:56', '2023-03-12 18:01:56'),
(6, 'novelyn', 'daculan', 'nov_123', 'novelyn@gmail.com', '09358554398', 1, '$2y$10$x7jth4nfskZtIfKpGDEorO82VR86FQpyyjx3LR9hHGpzOZ40I6Gca', '2023-03-12 18:03:01', '2023-03-12 18:03:01'),
(7, 'Kate', 'anastacio', 'khate_123', 'ofrancisoliver@gmail.com', '09358554398', 2, '$2y$10$ljErzkJjgeEq9IkFUjR6BuROgz/p5/.BT7MGWK7CHwSUk.Efs2AkO', '2023-03-12 18:04:40', '2023-03-12 18:04:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `tb_user_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
