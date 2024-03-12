-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2022 at 03:04 PM
-- Server version: 5.7.37
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techupps_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `delete_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `slug`, `category_id`, `title`, `image`, `short_desc`, `description`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'fsdadsdsdasd', '1', 'fsdadsdsdasd', '1644407495.JPG', 'fh', 'dfhgfdsfgfdsfxhfghasdad', 1, 1, '2022-02-09 05:35:47', '2022-03-14 06:22:04'),
(2, 'blog1', '1', 'Blog1', '1647348204.jpg', 'dfsgdfgiohhooi', 'dfsgdfdasgasgd', 1, 0, '2022-02-09 05:42:38', '2022-03-15 12:43:24'),
(3, 'sdffdfd-sdfgfhg-sdfdfgdf', '1', 'sdffdfd sdfgfhg sdfdfgdf', '1645165155.JPG', 'fgfdg', 'sdggsdf', 1, 1, '2022-02-09 05:42:53', '2022-03-15 12:43:27'),
(4, 'sdgsfgn;luibuilbiubuil', '2', 'sdgsfg builbiubuil', '1645165165.JPG', 'sdfgdgaeedtfufuy', 'fdgdfgyufifyuk', 1, 1, '2022-02-09 06:15:03', '2022-03-15 12:43:30'),
(5, 'blog', '1', 'Blog', '1644407111.JPG', 'dfsgf', 'fgdgfd', 1, 1, '2022-02-09 06:15:11', '2022-03-14 06:22:04'),
(6, 'sdfg', '1', 'sdfg', '1645165177.JPG', 'fdsg', 'dfsg', 1, 1, '2022-02-09 06:27:34', '2022-03-15 12:43:32'),
(7, 'sdfg', '1', 'sdfg', '1644413533.JPG', 'afd', 'fdgdg', 1, 1, '2022-02-09 08:02:13', '2022-03-14 06:22:04'),
(8, 'xgfndf', '2', 'xgfndf', '1644413654.JPG', 'hgfffdg', 'fghfg', 1, 1, '2022-02-09 08:04:14', '2022-03-14 06:22:04'),
(9, 'gfdj', '2', 'gfdj', '1647254840.png', 'Short Description', 'cvn', 1, 1, '2022-03-14 05:17:20', '2022-03-14 06:22:04'),
(10, 'zhgfdgh', '1', 'zhgfdgh', '1647254906.png', 'Short Description', 'dfghfg', 1, 1, '2022-03-14 05:18:26', '2022-03-14 06:22:04'),
(11, 'ghhfgh', '2', 'ghhfgh', NULL, 'Short Description', 'ghdfh', 1, 1, '2022-03-14 05:19:57', '2022-03-14 06:22:04'),
(12, 'xbcfg', '1', 'xbcfg', '1647255019.png', 'fhdfh', 'fghfgh', 1, 1, '2022-03-14 05:20:19', '2022-03-14 06:22:04'),
(13, 'cgjfg', '1', 'cgjfg', '1647255183.jpg', 'fgh', 'gfjh', 1, 1, '2022-03-14 05:21:04', '2022-03-14 06:22:04'),
(14, 'zfzdgf', '1', 'zfzdgf', '1647255281.jpg', 'Short Description', 'fsdhdh', 1, 1, '2022-03-14 05:24:02', '2022-03-14 06:22:04'),
(15, 'sdasg', '1', 'sdasg', '1647348224.jpg', 'fgh', 'sdffds', 1, 0, '2022-03-14 06:19:03', '2022-03-15 12:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `delete_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `title`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'Hypnotherapy', 1, 1, '2022-02-09 06:34:04', '2022-03-16 10:24:21'),
(2, 'sdfhffgh', 1, 1, '2022-02-09 07:54:49', '2022-03-16 11:33:59'),
(3, 'sdfhfhfghfg', 1, 0, '2022-02-09 07:54:53', '2022-02-09 07:54:53'),
(4, 'csad', 1, 0, '2022-03-16 10:25:54', '2022-03-16 10:25:54'),
(5, 'zddddd', 1, 0, '2022-03-16 10:28:17', '2022-03-16 10:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `delete_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `phone`, `email`, `purpose`, `message`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'sdffd', '39999999', 'sh@gmail.co', 'dfgfgfg', 'fghfghg', 1, 1, '2022-02-12 08:05:29', '2022-02-12 08:11:42'),
(2, 'sdfdfs', '39999999', 'sh@gmail.co', 'sdfhsdf', 'dfdfhdf', 1, 1, '2022-02-12 08:05:37', '2022-02-12 08:11:44'),
(3, 'sfd', '39999999', 'sh@gmail.co', 'dfh', 'fgfgh', 1, 1, '2022-02-12 08:12:27', '2022-02-12 08:12:31'),
(4, 'fdgsd', '565', 'sh@gmail.co', 'Study', 'dfs', 1, 1, '2022-02-12 08:13:13', '2022-02-12 08:13:18'),
(5, 'dfsaf', '39999999', 'sh@gmail.co', 'sdfd', 'sdfds', 1, 1, '2022-02-12 08:13:26', '2022-02-16 02:13:52'),
(6, 'vvvvvvv vvvvv', '39999999', 'sh@gmail.co', NULL, 'dsfgfdg', 1, 1, '2022-02-16 02:03:00', '2022-02-16 02:13:50'),
(7, 'vvvvvvv vvvvv', '39999999', 'sh@gmail.co', NULL, 'dfhgh', 1, 1, '2022-02-16 02:03:32', '2022-02-16 02:13:48'),
(8, 'vvvvvvv vvvvv', '39999999', 'sh@gmail.co', NULL, 'sdfsdf', 1, 1, '2022-02-16 02:04:02', '2022-02-16 02:13:35'),
(9, 'vvvvvvv vvvvv', '39999999', 'sh@gmail.co', NULL, 'asdgsdg', 1, 1, '2022-02-16 02:04:45', '2022-02-16 02:13:46'),
(10, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-02-16 02:05:02', '2022-02-16 02:13:44'),
(11, 'vvvvvvv vvvvv', '39999999', 'sh@gmail.co', NULL, 'weafsd', 1, 1, '2022-02-16 02:05:49', '2022-02-16 02:13:42'),
(12, 'vvvvvvv vvvvv', '39999999', 'sh@gmail.co', NULL, 'hhh', 1, 1, '2022-02-16 02:11:13', '2022-02-16 02:13:40'),
(13, 'vvvvvvv vvvvv', '39999999', 'sh@gmail.co', NULL, 'hhhhhhhh', 1, 0, '2022-02-16 02:14:07', '2022-02-16 02:14:07'),
(14, 'vvvvvvv vvvvv', '39999999', 'sh@gmail.co', '666666', 'edjrty', 1, 0, '2022-02-17 00:27:54', '2022-02-17 00:27:54'),
(15, 'vvvvvvv vvvvv', '39999999', 'sh@gmail.co', 'Study', 'kguug', 1, 0, '2022-02-18 01:13:25', '2022-02-18 01:13:25'),
(16, 'vvvvvvv vvvvv', '39999999', 'sh@gmail.co', 'guhjh', 'ggggg', 1, 0, '2022-02-24 00:01:20', '2022-02-24 00:01:20'),
(17, 'cCaZdINgKmJFD', '5562326810', 'adnanudani893@gmail.com', 'mYSDTjOHQFvf', 'vCkBEZQmXcOjsIdJ', 1, 0, '2022-03-06 08:49:15', '2022-03-06 08:49:15'),
(18, 'jJFXQchnuP', '3645410587', 'adnanudani893@gmail.com', 'InpVBCRdmou', 'rwCnBsqK', 1, 0, '2022-03-06 08:49:17', '2022-03-06 08:49:17'),
(19, 'vvvvvvv vvvvv', '39999999', 'sh@gmail.co', 'Study', 'thjggh', 1, 0, '2022-03-11 03:48:09', '2022-03-11 03:48:09'),
(20, 'Michaelhox', '83939444298', 'bakhrashkandaurov1988861gib+2339@inbox.ru', 'Hello world', 'thepsychologists.org uriefeodeighrkfldjiijofofjmvkdnsisdiehiusfiajfhweiuioidjsjsbfiadjasifaijdfifijsaaiwghifadja', 1, 0, '2022-03-12 19:48:31', '2022-03-12 19:48:31'),
(21, 'rhRJclBabC', '9524552480', 'ryderjohnafthon@gmail.com', 'GUAhtEmQnNKlq', 'izYdVOQpk', 1, 0, '2022-03-13 17:32:30', '2022-03-13 17:32:30'),
(22, 'QDYnMumbetgZ', '8484811653', 'ryderjohnafthon@gmail.com', 'ULIPAcMkQR', 'jhAFnBufYmtTDs', 1, 0, '2022-03-13 17:32:32', '2022-03-13 17:32:32'),
(23, 'sad', '39999999', 'sh@gmail.co', 'Study', 'zDfdasd', 1, 0, '2022-03-16 09:13:30', '2022-03-16 09:13:30'),
(24, 'Orval Bollinger', '250-267-2625', 'orval@datalist.biz', 'DataList.biz Shutting Down', 'Hello,\r\n\r\nIt is with sad regret to inform you that DataList.biz is shutting down. We have made all our databases available for you at a one-time fee.\r\n\r\nYou can visit us on DataList.biz\r\n\r\nRegards.\r\nOrval', 1, 0, '2022-03-19 16:59:58', '2022-03-19 16:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fronts`
--

CREATE TABLE `fronts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `delete_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `delete_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `category_id`, `title`, `image`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, '', '0', '1644670193.png', 1, 1, '2022-02-12 06:16:03', '2022-02-12 07:21:19'),
(2, '', '0', '1645165228.JPG', 1, 1, '2022-02-12 07:21:26', '2022-03-16 12:18:42'),
(3, '', '0', '1645165236.JPG', 1, 1, '2022-02-12 07:21:33', '2022-03-16 12:18:44'),
(4, '', '0', '1644670341.png', 1, 1, '2022-02-12 07:22:21', '2022-02-12 07:22:25'),
(5, '', '0', '1644990061.JPG', 1, 1, '2022-02-16 00:11:01', '2022-02-16 00:29:30'),
(6, '', '0', '1645165245.JPG', 1, 1, '2022-02-16 00:11:04', '2022-03-16 12:18:46'),
(7, '', '0', '1645165253.JPG', 1, 1, '2022-02-16 00:11:11', '2022-03-16 12:18:50'),
(8, '2', 'xncvbn', '1647432571.jpg', 1, 0, '2022-03-16 12:09:31', '2022-03-16 12:09:31'),
(9, '2', 'dtytydty', '1647432977.jpg', 1, 1, '2022-03-16 12:16:17', '2022-03-17 04:48:59'),
(10, '3', 'xzvdfb', '1647433144.jpg', 1, 0, '2022-03-16 12:19:04', '2022-03-16 12:19:04'),
(11, '5', 'asgssfg', '1647434823.png', 1, 1, '2022-03-16 12:47:03', '2022-03-16 12:55:12'),
(12, '5', 'sdyhhhhhh', '1647492558.jpg', 1, 0, '2022-03-17 04:49:18', '2022-03-17 04:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `delete_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `title`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'saddfgfd', 1, 1, '2022-03-16 11:38:35', '2022-03-16 11:40:36'),
(2, 'asdvdfgyf', 1, 1, '2022-03-16 11:38:40', '2022-03-17 04:48:53'),
(3, 'gffyjff', 1, 0, '2022-03-16 11:40:25', '2022-03-16 11:40:25'),
(4, 'fhfgxvnb n', 1, 0, '2022-03-16 11:44:08', '2022-03-16 11:44:08'),
(5, 'ncfgmnfgm', 1, 0, '2022-03-16 12:26:49', '2022-03-16 12:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `delete_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `position`, `image`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 1, 1, '2022-02-16 03:57:43', '2022-02-16 04:05:03'),
(2, 'Dr. Shailesh Gupta', 'Clinical Psychology', '1645165275.jpg', 1, 0, '2022-02-16 04:05:14', '2022-02-18 00:51:15'),
(3, 'vvvvvvv vvvvv', 'dgfgjblk;l', '1645004288.jpg', 1, 1, '2022-02-16 04:06:17', '2022-02-16 04:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_amt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `delete_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `name`, `dob`, `gender`, `m_status`, `f_name`, `pincode`, `phone`, `whatsapp`, `email`, `designation`, `qualification`, `category`, `paid_amt`, `transaction_id`, `work`, `place`, `image`, `signature`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'vvvvvvv vvvvv', '2022-03-05', 'Female', 'Firm', 'vbn', 'edjrty', '39999999', '453456', 'sh@gmail.co', 'dsgf', 'gdf', 'One year Membership', '234543', 'sfgfdg', 'Team', 'sdfgdf', NULL, NULL, 1, 1, '2022-02-17 03:46:31', '2022-02-17 04:19:51'),
(2, 'vvvvvvv vvvvv', NULL, 'Male', 'Individual', 'vbn', 'edjrty', '39999999', '453456', 'sh@gmail.co', 'dsgf', 'B.Tech M.tech', 'One year Membership', '234543', 'sfgfdg', 'Member', 'sdfgdf', '1645090478.png', '1645090478.jpg', 1, 1, '2022-02-17 04:04:38', '2022-02-18 01:08:23'),
(3, 'vvvvvvv vvvvv', '2022-02-26', 'Male', 'Individual', 'vvvvvvv', 'edjrty', '39999999', NULL, 'sh@gmail.co', 'dsgf', 'Btech,Mtech', 'Free Membership', '234543', 'sfgfdg', 'Team', 'sdfgdf', '16451662937.jpg', '16451662935.jpg', 1, 1, '2022-02-18 01:08:13', '2022-02-18 01:08:42'),
(4, 'Shailesh Gupta', '2000-02-03', 'Male', 'Individual', 'vvvvvvv', '221311', '9454528015', '9454528015', 'shailesh@gmail.com', 'Web Developer', 'BCA', 'Free Membership', '100', '93hdyd8hs9k', 'Member', 'Varanasi', '16451664308.jpg', '164516643010.jpg', 1, 0, '2022-02-18 01:10:30', '2022-02-18 01:10:30');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_02_08_072418_create_sliders_table', 2),
(10, '2022_02_09_063908_create_blogs_table', 3),
(11, '2022_02_09_065429_create_blog_categories_table', 3),
(12, '2022_02_12_045117_create_news_event_controllers_table', 4),
(14, '2022_02_12_092155_create_news_events_table', 5),
(17, '2022_02_12_105452_create_galleries_table', 6),
(18, '2022_02_12_130737_create_enquiries_table', 7),
(23, '2022_02_14_045619_create_user_details_table', 8),
(24, '2022_02_15_075113_create_fronts_table', 9),
(26, '2022_02_16_090947_create_members_table', 10),
(27, '2022_02_17_060157_create_memberships_table', 11),
(28, '2022_03_16_152446_create_gallery_categories_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `delete_status` tinyint(4) NOT NULL DEFAULT '0',
  `date` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`id`, `slug`, `title`, `image`, `short_desc`, `description`, `status`, `delete_status`, `date`, `created_at`, `updated_at`) VALUES
(1, 'dsfsdfdsasdfsdagdsfdg', 'dsfsdfdsasdfsdagdsfdg', '1647327193.jpg', 'sdfsdf', 'sdfsd', 1, 1, '1646159400', '2022-02-12 04:08:04', '2022-03-15 12:51:12'),
(2, 'zccgnfghm', 'zccgnfghm', '1647348727.jpg', 'edjghhghk', 'dghgfjhhghjbv cmdhgmbn mg', 1, 0, '1648319400', '2022-02-12 04:14:42', '2022-03-16 09:50:40'),
(3, 'sdfgsdgasfdsdf', 'sdfgsdgasfdsdf', '1647348737.jpg', 'sfgfdgdfg', 'sdfgdfgfd', 1, 0, '1646677800', '2022-02-12 04:41:01', '2022-03-16 09:49:33'),
(4, 'dfgsdf', 'dfgsdf', '1647327179.jpg', 'gsfgdfs', 'sdfgsdf', 1, 1, '1646764200', '2022-02-12 05:30:21', '2022-03-15 12:51:20'),
(5, 'wellbeing-is-important', 'Wellbeing is Important', '1647348745.jpg', 'Short Description', 'Wellbeing is Important', 1, 0, '1648146600', '2022-03-17 03:18:19', '2022-03-15 12:52:25'),
(6, 'a-reestablished-peace', 'A Reestablished Peace', '1645165212.jpg', 'Short Description', 'A Reestablished Peace', 1, 1, '1645986600', '2022-03-16 06:31:36', '2022-03-15 12:51:17');

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
('admin1@gmail.com', '$2y$10$Kfptg5n.0X6FcJd2zliC0OcxpsAGjLy3jrE2nu6XlrAIL9b4BcxaG', '2022-02-08 01:16:04');

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `section_id` varchar(255) NOT NULL,
  `question` text NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_option` varchar(255) NOT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `mark` int(11) NOT NULL,
  `delete_status` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `section_id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `duration`, `mark`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, '2', 'what is your name', 'a', 'b', 'd', 'd', 'option_a', '1', 0, 0, '2022-03-21 12:01:01', '2022-03-21 12:01:01'),
(2, '1', 'what is your age', '5', '4', '3', '2', 'option_b', '1', 0, 0, '2022-03-21 12:01:01', '2022-03-21 12:01:01'),
(3, '1', '2+2', '4', '1', '3', '5', 'option_a', '1', 0, 0, '2022-03-21 12:02:26', '2022-03-21 12:02:26'),
(4, '2', 'si unit of length', 'meter', 'distance', 'a & b', 'one', 'option_a', '1', 0, 0, '2022-03-21 12:04:02', '2022-03-21 12:04:02'),
(5, '5', 'What is A?', 'A', 'B', 'C', 'D', 'option_a', '1', 1, 0, '2022-03-21 12:23:42', '2022-03-21 12:23:42'),
(6, '5', 'What is B?', 'A', 'B', 'C', 'D', 'option_b', '1', 1, 0, '2022-03-21 12:23:42', '2022-03-21 12:23:42'),
(7, '5', 'What is C?', 'A', 'B', 'C', 'D', 'option_c', '3', 2, 0, '2022-03-21 12:23:42', '2022-03-21 12:23:42'),
(8, '5', 'What is D?', 'A', 'B', 'C', 'D', 'option_d', '5', 3, 0, '2022-03-21 12:23:42', '2022-03-21 12:27:37');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `delete_status` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `class_id`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'Math', 1, 1, 0, '2022-03-16 18:03:10', '2022-03-16 18:03:10'),
(2, 'Physics', 1, 1, 0, '2022-03-16 18:03:18', '2022-03-16 18:03:18'),
(3, 'Math', 2, 1, 0, '2022-03-16 18:03:29', '2022-03-16 18:03:29'),
(4, 'Physics', 2, 1, 0, '2022-03-16 18:03:48', '2022-03-16 18:03:48'),
(5, 'English', 2, 1, 0, '2022-03-16 18:03:58', '2022-03-16 18:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `delete_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `short_desc`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'hdksgkasd', '1644322834.jpg', 'sadfds', 1, 1, '2022-02-08 04:49:31', '2022-02-09 00:40:48'),
(2, 'The Psychologists', '1647346024.jpg', 'don’t let  you Suffer in silence  and alone', 1, 0, '2022-02-08 04:50:37', '2022-03-15 12:07:04'),
(3, 'The advanced', '1647346032.jpg', 'Therapeutic  care just  a call for!', 1, 0, '2022-02-08 04:51:28', '2022-03-15 12:07:12'),
(4, 'gdfd', '1644316582.JPG', 'sdfgfd', 1, 1, '2022-02-08 05:06:22', '2022-02-16 00:06:02'),
(5, NULL, NULL, NULL, 1, 1, '2022-02-08 05:35:00', '2022-02-08 07:07:11'),
(6, NULL, NULL, NULL, 1, 1, '2022-02-08 05:37:11', '2022-02-08 07:09:39'),
(7, NULL, NULL, NULL, 1, 1, '2022-02-08 05:37:34', '2022-02-08 07:02:11'),
(8, 'sfh', '1644323991.JPG', 'dfh', 1, 1, '2022-02-08 07:09:51', '2022-02-09 00:37:37'),
(9, 'sadf', '1644658443.png', 'asdfsdf', 1, 1, '2022-02-12 04:04:03', '2022-02-16 00:06:04'),
(10, 'dfgdegergfff', '1645010696.jpg', 'dgf', 1, 1, '2022-02-16 05:54:47', '2022-02-16 05:55:12'),
(11, NULL, NULL, NULL, 1, 1, '2022-03-15 07:09:30', '2022-03-15 07:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE `student_classes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Class 9th', '2022-03-16 18:02:31', '2022-03-16 18:02:31'),
(2, 'Class 10th', '2022-03-16 18:02:52', '2022-03-16 18:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `class_id` text NOT NULL,
  `description` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `delete_status` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `name`, `duration`, `class_id`, `description`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'Entrance Exam for Class 9', '30', '1', 'Class 9 Test', 1, 0, '2022-03-21 12:11:25', '2022-03-21 12:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `test_results`
--

CREATE TABLE `test_results` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `test_id` int(11) NOT NULL,
  `question_id` varchar(255) NOT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Shailesh Gupta', 'admin@gmail.com', NULL, '$2y$10$Vfxd5QKUx1QTuG6tfj7nMeNX8CLk0zv675e9k1XDxRKsnBkJjuMNG', 'ucwVpZIH1uvPUo8vxr7p08hETwYgpZ13ewynG5khPuvQsJDE7c90CiZgqSYC', '2022-02-07 07:32:50', '2022-02-07 07:32:50'),
(2, 'admin', 'Sallu', 'admin1@gmail.com', NULL, '$2y$10$CvWp9Ts.m.jWT7H93KmTB.BCuxX3vSQkbeUM8tfj/0dM/ZGHlI8PC', NULL, '2022-02-08 00:59:56', '2022-02-08 00:59:56'),
(3, 'admin', 'Atul Upadhyay', 'atul@gmail.com', NULL, '$2y$10$/6GWFWnJxJzlsJpDS2mlNOVM/fpLq/Kler.3xNKI6kMdyQ.MZ2j5S', 'hoKOFodTDsn7C9GY96GsTaoFpUVyCIcsnnZDbsombz67nywrbwltPd13qLLB', '2022-02-08 01:44:45', '2022-02-08 01:44:45'),
(4, 'student', 'ashu', 'ashu123@gmail.com', NULL, '$2y$10$MNfsrmQjFITWW7BIvcjtDO9BtI1dlznRgYKlX6xxIXdt4obBAJeVW', 'WyKeofflcBlo1UVzWfDfBJhT2ywKpnBMRHFjrtMYaKn6ejuY5OxjhdTpp4S5', '2022-03-16 12:43:40', '2022-03-16 12:43:40'),
(7, 'student', 'Shailesh Gupta', 'shailesh@gmail.com', NULL, '$2y$10$qierk3U69nLfbqqPPVw.ueAYTOh8SdS8IfDO6A7VtaaFnPq6/QI4a', 'lsqlODCRyXLzAurPnJyQPuP4Er4jsrSgzzKLjaLmtbFJN71RrL3xnHfgqJJC', '2022-03-22 09:07:36', '2022-03-22 09:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_id` int(11) NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `delete_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `class_id`, `dob`, `gender`, `phone`, `second_phone`, `country`, `state`, `district`, `pincode`, `full_address`, `image`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(2, '4', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-03-16 12:43:40', '2022-03-16 12:43:40'),
(3, '7', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-03-22 09:07:36', '2022-03-22 09:07:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fronts`
--
ALTER TABLE `fronts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
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
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_results`
--
ALTER TABLE `test_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fronts`
--
ALTER TABLE `fronts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test_results`
--
ALTER TABLE `test_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
