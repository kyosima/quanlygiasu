-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 22, 2020 at 05:43 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `District`
--

CREATE TABLE `District` (
  `id` int(5) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `District`
--

INSERT INTO `District` (`id`, `name`) VALUES
(2, 'Facebook');

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
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `id` int(5) NOT NULL,
  `name` varchar(500) NOT NULL,
  `type` varchar(100) NOT NULL,
  `link` varchar(500) DEFAULT NULL,
  `upload` varchar(500) DEFAULT NULL,
  `note` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`id`, `name`, `type`, `link`, `upload`, `note`) VALUES
(1, 'IELTS 5', 'book', NULL, NULL, 'ád'),
(3, 'Facebook', 'book', NULL, '', 'a'),
(4, 'Nguyễn Chính Hưng', 'book', NULL, '', NULL),
(5, 'Insta', 'book', NULL, NULL, NULL),
(6, 'hethong', 'book', NULL, NULL, NULL),
(7, 'Facebook', 'book', NULL, NULL, NULL),
(8, 'Facebook', 'book', NULL, NULL, NULL),
(9, 'Facebook', 'book', NULL, '', NULL),
(10, 'Facebook', 'book', NULL, '', NULL),
(11, 'Facebook', 'book', NULL, '', NULL),
(12, 'a', 'book', NULL, '', NULL),
(13, 'Facebook', 'book', NULL, '', NULL),
(14, 'Facebook', 'book', NULL, '', NULL),
(15, 'aaaaa', 'media', 'https://laravel.com/docs/8.x/requests', NULL, 'aadadad'),
(16, 'media', 'media', NULL, NULL, NULL),
(17, 'media', 'website', NULL, NULL, NULL),
(18, 'Pinterest 1', 'media', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schoolschedule`
--

CREATE TABLE `schoolschedule` (
  `id` int(11) NOT NULL,
  `tag` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `school` varchar(500) NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `teacher` varchar(500) NOT NULL,
  `teacher_assistant` varchar(500) NOT NULL,
  `class` varchar(500) NOT NULL,
  `room` varchar(500) NOT NULL,
  `book` varchar(500) NOT NULL,
  `note_teacher` varchar(500) NOT NULL,
  `note_school` varchar(500) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `schooltype`
--

CREATE TABLE `schooltype` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schooltype`
--

INSERT INTO `schooltype` (`id`, `name`) VALUES
(2, 'lowschool');

-- --------------------------------------------------------

--
-- Table structure for table `School_list`
--

CREATE TABLE `School_list` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `prodate` date NOT NULL,
  `lastupdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `staffname` varchar(500) NOT NULL,
  `schooltype` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `followup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `School_list`
--

INSERT INTO `School_list` (`id`, `name`, `prodate`, `lastupdate`, `staffname`, `schooltype`, `district`, `followup`) VALUES
(2, 'Phan Bội Châu', '2020-09-08', '2020-09-09 17:00:00', 'Lê Văn Luyện', 'Primary School', 'Thủ Đức', 'Ra xã hội làm ăn bươn trải, cần cù bù siêng lăng.\r\nChỉ có nàm thì mới có ăn, không nàm mà đòi có ăn thì ăn đầu b***, ăn c**\r\nLói nhanh cho ló vuông'),
(3, 'Trương Vương', '2020-09-28', '2020-09-09 17:00:00', 'Lê Văn Luyện', 'Primary School', '5', 'Giới thiệu về trường học'),
(4, 'Nguyễn Khuyến', '2020-07-15', '2020-09-09 17:00:00', 'Athony Bui', 'High School', '10', 'Hello\r\nCô ni\r\n- Nội dung\r\n- xiN CHÀO');

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
(3, 'vpsmevivu', 'BÙI THẾ VŨ', 'ngocanh@gmail.com', '0335828494', 'Vietnamese', 'Working', 'Nong tinh'),
(4, 'Messi', 'Lê văn a', 'nhan772000@gmail.comn', '099383223', 'Vietnamese + English', 'Stop working', 'Hello'),
(5, 'daoxuanthu2', 'Đào Xuân Thứ', 'ngocanh@gmail.com', '0989833213', 'Vietnamese + English', 'Pause working', 'Hòa đồng, Vui tính\r\n                    aa'),
(6, 'kirabboy', 'Nguyễn Chính Hưng', 'nc.hung0806@gmail.com', '0338927456', 'Vietnamese', 'Working', 'Thân thiện vcl');

-- --------------------------------------------------------

--
-- Table structure for table `Teachers_assistant`
--

CREATE TABLE `Teachers_assistant` (
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
-- Dumping data for table `Teachers_assistant`
--

INSERT INTO `Teachers_assistant` (`id`, `username`, `fullname`, `email`, `phone`, `language`, `status`, `intro`) VALUES
(3, 'vpsmevivu', 'BÙI THẾ VŨ', 'ngocanh@gmail.com', '0335828494', 'Vietnamese', 'Working', 'Nong tinh'),
(5, 'daoxuanthu', 'Đào Xuân Thứ', 'ngocanh@gmail.com', '0989833213', 'Vietnamese + English', 'Pause working', 'Hòa đồng, Vui tính'),
(6, 'kirabboy', 'Nguyễn Chính Hưng', 'nc.hung0806@gmail.com', '0338927456', 'Vietnamese', 'Not working yet', '123');

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
-- Indexes for table `District`
--
ALTER TABLE `District`
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
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolschedule`
--
ALTER TABLE `schoolschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schooltype`
--
ALTER TABLE `schooltype`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `Teachers_assistant`
--
ALTER TABLE `Teachers_assistant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `District`
--
ALTER TABLE `District`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `schoolschedule`
--
ALTER TABLE `schoolschedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schooltype`
--
ALTER TABLE `schooltype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Teachers`
--
ALTER TABLE `Teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Teachers_assistant`
--
ALTER TABLE `Teachers_assistant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
