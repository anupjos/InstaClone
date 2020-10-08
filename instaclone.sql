-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 10:02 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instaclone`
--

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_11_132547_create_profiles_table', 1),
(5, '2020_09_11_134946_create_posts_table', 1),
(6, '2020_09_21_192503_create_profile_user_table', 2);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `caption`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Fav doggie!', 'uploads/eUhMQFqm9QjIhHn3WQ0fist57T4HcwizQnpBuS8B.jpeg', '2020-09-21 03:44:59', '2020-09-21 03:44:59'),
(3, 3, 'Coffee Love !!', 'uploads/DxP5NAzbCx6e7qBRA7kbYon6iCbLmx3etdf5jYIg.jpeg', '2020-10-05 22:58:51', '2020-10-05 22:58:51'),
(4, 3, 'Flowers !! #beautiful #roses', 'uploads/euYOtgV6SwyhPd9ragPb0c2WYYfPq87ZkoKBN9JX.jpeg', '2020-10-05 23:00:30', '2020-10-05 23:00:30'),
(5, 1, 'Magical sunset in bora-Bora 🌴  #justsunsetvibes 🌅', 'uploads/dPvZ7LTWxKQHrZT0mmysL5TUjXLPGVIBUa9hZqcl.jpeg', '2020-10-05 23:33:20', '2020-10-05 23:33:20'),
(6, 2, 'Verified Be kind and support loved ones during #COVID19!', 'uploads/kaeFNLBCveWoD0n0Gpxd9gGpwxX83i1AVG5cIbrL.jpeg', '2020-10-05 23:43:18', '2020-10-05 23:43:18'),
(7, 1, 'Falooda !! Sweet Tooth', 'uploads/fNtbKBsNOHcq1J3EJfAentTfgSqSRaITwf3ij5jr.jpeg', '2020-10-06 11:51:24', '2020-10-06 11:51:24'),
(8, 1, 'Good morning Dubai.  Photo by @bachir_photo_phactory#Skyline #Skyscraper', 'uploads/GyI9R5g1T7V86XbWq4Z5JXxLWoh4tKmt0VBfEqBn.jpeg', '2020-10-08 06:54:58', '2020-10-08 06:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `description`, `url`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Happy Coding :)', 'http://testaccount.com', 'profile/csrCEuQqh0eklodeHaO0fRcnEthQorKKQTXlk4q9.jpeg', '2020-09-15 03:05:45', '2020-09-15 03:15:36'),
(2, 2, 'We are the #UnitedNations’ health agency. We are committed to achieve better health for everyone, everywhere - #HealthForAll', 'http://www.who.int/COVID-19', 'profile/3RkUc8Dyz4J2YIHCXxFlVVsdOmiS6BcjyFd2mORu.jpeg', '2020-09-20 22:43:22', '2020-10-05 23:41:11'),
(3, 3, 'Phone Wallpapers ☁️🌈\r\nPosting wallpapers daily', 'http://testuser3.com', NULL, '2020-09-21 18:15:31', '2020-10-05 23:07:59'),
(4, 4, NULL, NULL, NULL, '2020-10-08 05:19:41', '2020-10-08 05:19:41'),
(5, 5, NULL, NULL, NULL, '2020-10-08 05:23:03', '2020-10-08 05:23:03');

-- --------------------------------------------------------

--
-- Table structure for table `profile_user`
--

CREATE TABLE `profile_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_user`
--

INSERT INTO `profile_user` (`id`, `profile_id`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 2, 1, NULL, NULL),
(14, 1, 2, NULL, NULL),
(15, 4, 3, NULL, NULL),
(16, 5, 3, NULL, NULL),
(17, 1, 3, NULL, NULL),
(18, 2, 3, NULL, NULL),
(19, 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@test.com', 'firstuser', NULL, '$2y$10$vC4nULnGZME9sWwFXcuTX.5XuJYBcsVYZZ2sJEECYzlwsxo1eCNXy', '0e01ZvlUMhvuc61obEEVRbs5OvfPi8UDPS2IBfKiV9JOB7566X1uGDIfMOtT', '2020-09-15 03:05:45', '2020-10-08 06:43:47'),
(2, 'World Health Organization', 'test2@test.com', 'who', NULL, '$2y$10$e9wiu6g7HVEP280OFlH/cOB4jn.NMHLdCsI.ND6xl0EhyylqKvmra', NULL, '2020-09-20 22:43:22', '2020-09-21 15:30:25'),
(3, 'User 3', 'test3@test.com', 'testuser3', NULL, '$2y$10$bfZluBbXSHCj/4aX00BW4.KX0RpMw4dRmkYCqIBraqBzCuVdxbWem', NULL, '2020-09-21 18:15:31', '2020-09-21 18:15:31'),
(4, 'Test', 'test4@test.com', 'test4', NULL, '$2y$10$JNGzEGAPNeBSAWvrGsDaBu.f1LW/roLBNHXKz3Y9doDlXnfvx68YC', NULL, '2020-10-08 05:19:40', '2020-10-08 05:19:40'),
(5, 'Test User 5', 'test5@test.com', 'test5', NULL, '$2y$10$xl61tQg/Octxf2yXbpEUquLel1WlK8UwU5B92TLBo3yx3cL.nFty2', NULL, '2020-10-08 05:23:03', '2020-10-08 05:23:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_index` (`user_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_index` (`user_id`);

--
-- Indexes for table `profile_user`
--
ALTER TABLE `profile_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profile_user`
--
ALTER TABLE `profile_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
