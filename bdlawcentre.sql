-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2018 at 10:53 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdlawcentre`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `picture`, `created_at`, `updated_at`) VALUES
(2, 'Islami Bank Bangladesh LTD', '2.jpeg', '2018-09-15 15:07:09', '2018-09-15 15:14:33'),
(3, 'Dutch Bangla Bank', '3.jpeg', '2018-09-15 15:11:39', '2018-09-15 15:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `client` varchar(256) NOT NULL,
  `occupation` varchar(256) NOT NULL,
  `feedback` text NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `created_at` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `client`, `occupation`, `feedback`, `updated_at`, `created_at`) VALUES
(2, 'Dutch Bangla Bank', 'Multi Bank LTD', 'Barrister A. M. Masum is a very proactive in protecting the interest of our institution and in providing', '2018-09-15 21:27:50', '2018-09-15 21:27:50'),
(3, 'Bangla Soft Tech', 'Software Farm', 'Hello this is a test feedback. How are you all ??', '2018-09-15 21:42:54', '2018-09-15 21:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scroll_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messenger` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gplus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`id`, `title`, `moto`, `scroll_text`, `address`, `email`, `phone`, `facebook`, `messenger`, `whatsapp`, `skype`, `viber`, `imo`, `youtube`, `twitter`, `linkedin`, `gplus`, `instagram`, `pinterest`, `created_at`, `updated_at`) VALUES
(15, 'BD Law Centre', 'Fast-moving law firm', 'Welcome to BD Law Centre. The fast moving law firm of Bangladesh', 'Dhaka, Bangladesh', 'contact@bdlawcentre.com', '+(88) 01711-993639', 'https://www.facebook.com/BangladeshLawCentre', 'https://www.facebook.com/BdLawCentre', '+(88) 01711-993639', 'bdlawcentre', '+(88) 01711-993639', '+(88) 01711-993639', 'https://www.youtube.com/channel/UCl4ERPyULDEaGk5OfOBsWrQ', 'https://twitter.com/bd_lawcentre', 'https://www.linkedin.com/home?trk=nav_responsive_tab_home', 'https://plus.google.com/u/2/113093318782749641503?_ga=1.182708902.1809133291.1450810665', 'http://instagram.com', 'http://pinterest.com', '2018-09-21 16:50:24', '2018-09-21 16:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `lawers`
--

CREATE TABLE `lawers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lawers`
--

INSERT INTO `lawers` (`id`, `name`, `occupation`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'SN Zisad', 'Junior Advocate, Bangladesh High Court', '1.png', '2018-09-15 14:47:51', '2018-09-15 15:00:47'),
(3, 'Md Robiul Islam', 'Judge, Bangladesh High Court', '3.jpeg', '2018-09-15 14:51:40', '2018-09-15 14:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, 'http://google.com', '2018-09-15 16:10:11', '2018-09-15 16:10:11'),
(3, 'http://banglasofttech.com', '2018-09-15 16:10:32', '2018-09-15 16:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `name`, `picture`, `created_at`, `updated_at`) VALUES
(2, 'World Bank Bangladesh LTD', '2.jpeg', '2018-09-15 15:53:33', '2018-09-15 15:55:05'),
(3, 'Bangladesh Bank', '3.jpeg', '2018-09-15 15:54:49', '2018-09-15 15:54:49');

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
(3, '2018_09_15_081344_information', 1),
(4, '2018_09_15_081428_clients', 1),
(5, '2018_09_15_081437_practices', 1),
(6, '2018_09_15_081457_lawers', 1),
(7, '2018_09_15_081503_links', 1),
(8, '2018_09_15_081525_paymentmethods', 1),
(9, '2018_09_15_081543_memberships', 1),
(10, '2018_09_15_081611_slideimages', 1);

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
-- Table structure for table `paymentmethods`
--

CREATE TABLE `paymentmethods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paymentmethods`
--

INSERT INTO `paymentmethods` (`id`, `name`, `picture`, `created_at`, `updated_at`) VALUES
(2, 'SIBL', '2.jpeg', '2018-09-15 16:22:51', '2018-09-15 16:23:47'),
(3, 'Rocket', '3.jpeg', '2018-09-15 16:23:21', '2018-09-15 16:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `practices`
--

CREATE TABLE `practices` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `practices`
--

INSERT INTO `practices` (`id`, `title`, `description`, `picture`, `created_at`, `updated_at`) VALUES
(5, 'Hi this is title', 'How are you ?', '5.jpeg', '2018-09-15 14:24:43', '2018-09-15 14:36:51'),
(6, 'First Moving Bangladesh Law Firm', 'sakfhskadjfbhksdjfh sjkdfh ksdhfkjsdhksdfh fkjsdhf ksdjfhskdjh ksdjfhkjsd fhsdkjfh jksdfhkjsdf sd', '6.jpeg', '2018-09-15 14:31:04', '2018-09-15 14:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `slideimages`
--

CREATE TABLE `slideimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slideimages`
--

INSERT INTO `slideimages` (`id`, `title`, `description`, `banner`, `created_at`, `updated_at`) VALUES
(4, 'First Moving Bangladesh Law Firm', 'This is the description of this image', '4.jpeg', '2018-09-15 11:15:59', '2018-09-15 13:46:46'),
(6, 'First Moving Bangladesh Law Firm', 'late 14c., from Old French description (12c.) and directly from Latin descriptionem (nominative descriptio) \"representation, description, copy,\" noun of action from past participle stem of describere \"write down, transcribe, copy, sketch,\" from de- \"down\" (see de-) + scribere \"write\" (see script (n.)).\n\n', '6.jpeg', '2018-09-15 11:35:47', '2018-09-15 13:42:50');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `title`, `description`, `picture`, `updated_at`, `created_at`) VALUES
(1, 'First Moving Bangladesh Law Firm', 'TYPE, KIND, SORT, NATURE, DESCRIPTION, CHARACTER mean a number of individuals thought of as a group because of a common quality or qualities. TYPE may suggest strong and clearly marked similarity throughout the items included so that each is typical of the group.  one of three basic body types  KIND may suggest natural grouping.  a zoo seemingly having animals of every kind  SORT often suggests some disparagement.  the sort of newspaper dealing in sensational stories NATURE may imply inherent, essential resemblance rather than obvious or superficial likenesses.  two problems of a similar nature  DESCRIPTION implies a group marked by agreement in all details belonging to a type as described or', '1.jpeg', '2018-09-17 20:14:10', '2018-09-17 18:17:31'),
(3, 'Hello', 'Hi this is a test training', '3.jpeg', '2018-09-17 19:40:00', '2018-09-17 19:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sharif Noor Zisad', 'snzisad@gmail.com', '$2y$10$hMnZ.02SiOARPJ1nCDVOVeCvSBr0yW/gEBMY7ThHL2hZEsq7oeXCq', 'GIer9ORv8ALOSje5ehWXMCpPbbCGAdIkGyvewaefexPU6PQiXBo731PeB4vf', '2018-09-15 13:48:54', '2018-09-15 13:48:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawers`
--
ALTER TABLE `lawers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
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
-- Indexes for table `paymentmethods`
--
ALTER TABLE `paymentmethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practices`
--
ALTER TABLE `practices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideimages`
--
ALTER TABLE `slideimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `lawers`
--
ALTER TABLE `lawers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `paymentmethods`
--
ALTER TABLE `paymentmethods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `practices`
--
ALTER TABLE `practices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `slideimages`
--
ALTER TABLE `slideimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
