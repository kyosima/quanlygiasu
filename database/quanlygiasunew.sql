-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 16, 2020 at 11:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlygiasu`
--

-- --------------------------------------------------------

--
-- Table structure for table `Course`
--

CREATE TABLE `Course` (
  `id` int(11) NOT NULL,
  `course` varchar(200) NOT NULL,
  `unit` int(11) NOT NULL,
  `resource` varchar(500) NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Course`
--

INSERT INTO `Course` (`id`, `course`, `unit`, `resource`, `duration`) VALUES
(3, 'EIP grade 3', 9, 'Family and friends 3', 70),
(4, 'EIP grade 4', 12, 'Family and friends 2', 90),
(5, 'EIP grade 5', 12, 'Family and friends 1', 90),
(6, 'EIP grade 5', 12, 'Family and friends 1', 90),
(7, 'EIP grade 4', 11, 'Family and friends 1', 90),
(8, 'EIP grade 6', 8, 'Family and friends 1', 90),
(9, 'EIP grade 7', 9, 'Tieng Anh 9 (Pearson)', 80),
(10, 'EIP grade 1', 11, 'Family and friends 5', 40),
(11, 'EIP grade 4', 12, 'Family and friends 1', 90),
(12, 'EIP grade 5', 8, 'Family and friends 1', 70),
(13, 'EIP grade 7', 8, 'Tieng Anh 9 (Pearson)', 40);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `School_list`
--

CREATE TABLE `School_list` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `prodate` date NOT NULL,
  `lastupdate` date NOT NULL DEFAULT current_timestamp(),
  `staffname` varchar(500) NOT NULL,
  `schooltype` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `followup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `School_list`
--

INSERT INTO `School_list` (`id`, `name`, `prodate`, `lastupdate`, `staffname`, `schooltype`, `district`, `followup`) VALUES
(2, 'Phan Bội Châu', '2020-09-08', '2020-09-10', 'Lê Văn Luyện', 'Primary School', 'Thủ Đức', 'Ra xã hội làm ăn bươn trải, cần cù bù siêng lăng.\r\nChỉ có nàm thì mới có ăn, không nàm mà đòi có ăn thì ăn đầu b***, ăn c**\r\nLói nhanh cho ló vuông'),
(3, 'Trương Vương', '2020-09-28', '2020-09-10', 'Lê Văn Luyện', 'Primary School', '5', 'Giới thiệu về trường học'),
(4, 'Nguyễn Khuyến', '2020-07-15', '2020-09-10', 'Athony Bui', 'High School', '10', 'Hello\r\nCô ni\r\n- Nội dung\r\n- xiN CHÀO');

-- --------------------------------------------------------

--
-- Table structure for table `Teachers`
--

CREATE TABLE `Teachers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `status` varchar(250) NOT NULL,
  `intro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Teachers`
--

INSERT INTO `Teachers` (`id`, `username`, `fullname`, `email`, `phone`, `language`, `status`, `intro`) VALUES
(1, 'kyosima', 'Nguyễn Chính Hưng', 'hung@gmail.com', '0335823223', 'English', 'Working', 'Vui tươi, yêu đời'),
(3, 'vpsmevivu', 'BÙI THẾ VŨ', 'ngocanh@gmail.com', '0335828494', 'Vietnamese + English', 'Working', 'Nong tinh'),
(4, 'Messi', 'Lê văn a', 'nhan772000@gmail.comn', '099383223', 'Vietnamese + English', 'Stop working', 'Hello'),
(5, 'daoxuanthu', 'Đào Xuân Thứ', 'ngocanh@gmail.com', '0989833213', 'Vietnamese + English', 'Pause working', 'Hòa đồng, Vui tính');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'a@gmail.com', '12345', NULL, NULL, NULL),
(2, 'kyo', 'kyo@gmail.com', '12345', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Course`
--
ALTER TABLE `Course`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `School_list`
--
ALTER TABLE `School_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Teachers`
--
ALTER TABLE `Teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Course`
--
ALTER TABLE `Course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `School_list`
--
ALTER TABLE `School_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Teachers`
--
ALTER TABLE `Teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
