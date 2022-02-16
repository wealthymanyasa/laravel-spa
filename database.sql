-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 03:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codestars`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cid` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(7, 'about us', 'aboutus', 'On', '2022-02-12 06:28:57', NULL),
(8, 'services', 'services', 'On', '2022-02-12 06:27:16', NULL),
(9, 'portfolio', 'portfolio', 'On', '2022-02-12 01:46:33', NULL),
(10, 'clients', 'clients', 'On', '2022-02-12 06:21:33', NULL),
(16, 'team', 'team', 'On', '2022-02-16 08:48:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `clid` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clid`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(3, '22021431048client_logo5.png', 'https://www.microsoft.com', 'On', '2022-02-16 11:21:57', NULL),
(4, '22021431156client_logo3.png', 'https://www.samsung.com', 'on', '2022-02-16 11:20:28', NULL),
(5, '22021431244client_logo2.png', 'https://www.android.com', 'on', '2022-02-16 11:20:39', NULL),
(7, '22021610474322021433014client_logo1.png', 'https://www.apple.com', 'on', '2022-02-16 11:19:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `conid` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`conid`, `title`, `slug`, `description`, `link`, `image`, `category`, `status`, `created_at`, `updated_at`) VALUES
(6, 'codeStars Software Solutions', 'codestars-software-solutions', '<p>The Scrum idea of a separated Scrum Master is good for Scrum, but not appropriate for most projects. Good development requires not just talkers but doers. &mdash; Bertrand Meyer</p>', NULL, '2202157300722021274214property 24.jpeg', 'home', 'on', '2022-02-15 05:30:07', NULL),
(9, 'App Development', 'app-development', '<p>The concept of&nbsp;<a href=\"https://www.techopedia.com/definition/30026/cross-platform-development\" target=\"_blank\">cross-platform app development</a>&nbsp;has become increasingly popular in the last few years. Cross-platform technologies allow develo', NULL, '22021591342pexels-photo-1181244.jpeg', 'services', 'on', '2022-02-15 07:13:42', NULL),
(10, 'Web Services and API Integration and Development', 'web-services-and-api-integration-and-development', '<p>API use can vary depending on the type of programming language involved. An API for a procedural language&nbsp;such as Lua&nbsp;could consist primarily of basic routines to execute code, manipulate data or handle errors while an API for an object orien', NULL, '22021594805istockphoto-1208498558-612x612.jpg', 'portfolio', 'on', '2022-02-15 07:48:05', NULL),
(13, 'Web App Development', 'web-app-development', '<p>We provide custom website development and web software including, content management, intranets, e-commerce, document management, image galleries, social networks, real estate solutions, finance solutions and much more. Webdev advantages include.</p>', NULL, '22021693906macbook-apple-imac-computer-39284.jpeg', 'about us', 'on', '2022-02-16 07:39:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_11_100921_create_setups_table', 1),
(7, '2022_02_12_025154_create_categories_table', 2),
(8, '2022_02_12_024544_create_contents_table', 3),
(9, '2022_02_13_064532_create_services_table', 4),
(10, '2022_02_13_075959_create_portfolios_table', 5),
(11, '2022_02_13_080347_create_portcats_table', 6),
(13, '2022_02_14_141331_create_clients_table', 7),
(14, '2022_02_14_160101_create_teams_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portcats`
--

CREATE TABLE `portcats` (
  `pcid` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `portcats`
--

INSERT INTO `portcats` (`pcid`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Residential', 'residential', 'On', '2022-02-14 07:36:26', NULL),
(8, 'Commercial', 'commercial', 'On', '2022-02-14 07:36:48', NULL),
(9, 'Industrial', 'industrial', 'On', '2022-02-14 07:36:59', NULL),
(10, 'Agriculture', 'agriculture', 'On', '2022-02-14 07:37:15', NULL),
(11, 'web development', 'web-development', 'On', '2022-02-16 08:23:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `pid` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`pid`, `title`, `slug`, `category`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Frans Van Heerden', 'frans-van-heerden', 'Residential', '22021494031Residential.jpeg', 'on', '2022-02-14 07:40:31', NULL),
(2, 'Sam Fix', 'sam-fix', 'Commercial', '22021494204Commercial.jpeg', 'on', '2022-02-14 07:42:04', NULL),
(3, 'Pixabay', 'pixabay', 'Industrial', '22021494325Industrial.jpeg', 'on', '2022-02-14 07:43:25', NULL),
(4, 'David McBee', 'david-mcbee', 'Agriculture', '22021494605Agriculture..jpeg', 'on', '2022-02-14 07:46:05', NULL),
(5, 'Fabian W', 'fabian-w', 'Agriculture', '22021494714Agriculture2.jpeg', 'on', '2022-02-14 07:47:15', NULL),
(8, 'Celine', 'celine', 'Agriculture', '22021495020Agriculture.5.jpeg', 'on', '2022-02-14 07:50:20', NULL),
(9, 'Tamil King', 'tamil-king', 'Residential', '22021495323Residential1.jpeg', 'on', '2022-02-14 07:53:23', NULL),
(13, 'Mike', 'mike', 'Residential', '22021495654Residential5.jpeg', 'on', '2022-02-14 07:56:54', NULL),
(14, 'Matt Barnard', 'matt-barnard', 'Residential', '22021495815Residential6.jpeg', 'on', '2022-02-14 07:58:15', NULL),
(15, 'Pixabay', 'pixabay', 'Commercial', '22021495924commercial1.jpeg', 'on', '2022-02-14 07:59:24', NULL),
(16, 'Adrien', 'adrien', 'Commercial', '220214100009commercial2.jpeg', 'on', '2022-02-14 08:00:09', NULL),
(18, 'Waterloo', 'waterloo', 'Industrial', '220214100230industrial1.jpeg', 'on', '2022-02-14 08:02:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sid` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `title`, `slug`, `icon`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Apple', 'apple', 'apple', '<p>Apple Inc. is an American multinational technology company that specializes in consumer electronics, software and online services.', 'on', '2022-02-13 05:29:49', NULL),
(3, 'concept', 'concept', 'slack', '<p>Apple Inc. is an American multinational technology company that specializes in consumer electronics, software and online services', 'on', '2022-02-13 05:30:47', NULL),
(4, 'User Experience', 'user-experience', 'users', '<p>The user experience is how a user interacts with and experiences a product, system or service. It includes a person&#39;s perceptions of utility, ease of use, and efficiency.', 'on', '2022-02-13 05:31:36', NULL),
(5, 'design', 'design', 'html5', '<p>The user experience is how a user interacts with and experiences a product, system or service. It includes a person&#39;s perceptions of utility, ease of use, and efficiency', 'on', '2022-02-13 05:32:17', NULL),
(6, 'web programming', 'web-programming', 'dropbox', '<p>Web development is the work involved in developing a website for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex web applications, electronic businesses, and social network service', 'on', '2022-02-13 05:33:41', NULL),
(7, 'Software Texting', 'software-texting', 'gear', '<p>experts closely collaborate with the development teams for effective risk-based testing focused on innovation challenges. We are experienced with testing specifics of systems with the following innovative techs and architectures</p>', 'on', '2022-02-15 08:15:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setups`
--

CREATE TABLE `setups` (
  `sid` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `metatitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setups`
--

INSERT INTO `setups` (`sid`, `image`, `metatitle`, `address`, `contact`, `email`, `created_at`, `updated_at`) VALUES
(21, '22021183446logo.png', 'Propertybook Estate Agents', '33 Princess Drive Newlands Harare', '0779050634', 'omanyasa@orea.com', '2022-02-11 18:34:46', NULL),
(22, NULL, 'codeStars', '33 Princess Drive Newlands Harare', '0779050634', 'omanyasa@orea.com', '2022-02-16 06:06:59', NULL),
(23, NULL, 'Propertybook Estate Agents', '33 Princess Drive Newlands Harare', '0779050634', 'omanyasa@orea.com', '2022-02-16 06:07:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `tid` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `intro` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`clid`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`conid`);

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
-- Indexes for table `portcats`
--
ALTER TABLE `portcats`
  ADD PRIMARY KEY (`pcid`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `setups`
--
ALTER TABLE `setups`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`tid`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `clid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `conid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portcats`
--
ALTER TABLE `portcats`
  MODIFY `pcid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `pid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `sid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `setups`
--
ALTER TABLE `setups`
  MODIFY `sid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `tid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
