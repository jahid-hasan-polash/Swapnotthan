-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2017 at 08:49 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swapnotthan_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_donation`
--

CREATE TABLE `blood_donation` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blood_groups`
--

CREATE TABLE `blood_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blood_groups`
--

INSERT INTO `blood_groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'A+', '2017-08-21 00:48:36', '2017-08-21 00:48:36'),
(2, 'B+', '2017-08-21 00:48:37', '2017-08-21 00:48:37'),
(3, 'O+', '2017-08-21 00:48:37', '2017-08-21 00:48:37'),
(4, 'AB+', '2017-08-21 00:48:37', '2017-08-21 00:48:37'),
(5, 'A-', '2017-08-21 00:48:37', '2017-08-21 00:48:37'),
(6, 'B-', '2017-08-21 00:48:37', '2017-08-21 00:48:37'),
(7, 'O-', '2017-08-21 00:48:37', '2017-08-21 00:48:37'),
(8, 'AB-', '2017-08-21 00:48:37', '2017-08-21 00:48:37'),
(9, 'Dont know', '2017-08-21 00:48:37', '2017-08-21 00:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `committees`
--

CREATE TABLE `committees` (
  `id` int(10) UNSIGNED NOT NULL,
  `fiscal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comittee_number` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `committees`
--

INSERT INTO `committees` (`id`, `fiscal`, `comittee_number`, `created_at`, `updated_at`) VALUES
(1, '2012', 0, '2017-08-21 00:48:39', '2017-08-21 00:48:39'),
(2, '2013', 0, '2017-08-21 00:48:39', '2017-08-21 00:48:39'),
(3, '2014', 0, '2017-08-21 00:48:39', '2017-08-21 00:48:39'),
(4, '2015', 0, '2017-08-21 00:48:39', '2017-08-21 00:48:39'),
(5, '2016', 0, '2017-08-21 00:48:39', '2017-08-21 00:48:39'),
(6, '2017', 0, '2017-08-21 00:48:39', '2017-08-21 00:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `committee_members`
--

CREATE TABLE `committee_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `committee_id` int(10) UNSIGNED NOT NULL,
  `designation_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `committee_members`
--

INSERT INTO `committee_members` (`id`, `committee_id`, `designation_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 5, '2017-08-21 00:48:40', '2017-08-21 00:48:40'),
(2, 6, 3, 7, '2017-08-21 00:48:40', '2017-08-21 00:48:40'),
(3, 6, 2, 8, '2017-08-21 00:48:40', '2017-08-21 00:48:40'),
(4, 6, 4, 9, '2017-08-21 00:48:40', '2017-08-21 00:48:40'),
(5, 6, 5, 3, '2017-08-21 00:48:40', '2017-08-21 00:48:40'),
(6, 6, 6, 4, '2017-08-21 00:48:40', '2017-08-21 00:48:40'),
(7, 6, 7, 6, '2017-08-21 00:48:40', '2017-08-21 00:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'CHE', '2017-08-21 00:48:37', '2017-08-21 00:48:37'),
(2, 'GEE', '2017-08-21 00:48:37', '2017-08-21 00:48:37'),
(3, 'MAT', '2017-08-21 00:48:37', '2017-08-21 00:48:37'),
(4, 'PHY', '2017-08-21 00:48:37', '2017-08-21 00:48:37'),
(5, 'STA', '2017-08-21 00:48:37', '2017-08-21 00:48:37'),
(6, 'BMB', '2017-08-21 00:48:37', '2017-08-21 00:48:37'),
(7, 'GEB', '2017-08-21 00:48:37', '2017-08-21 00:48:37'),
(8, 'FES', '2017-08-21 00:48:37', '2017-08-21 00:48:37'),
(9, 'ARC', '2017-08-21 00:48:38', '2017-08-21 00:48:38'),
(10, 'CEP', '2017-08-21 00:48:38', '2017-08-21 00:48:38'),
(11, 'CEE', '2017-08-21 00:48:38', '2017-08-21 00:48:38'),
(12, 'CSE', '2017-08-21 00:48:38', '2017-08-21 00:48:38'),
(13, 'EEE', '2017-08-21 00:48:38', '2017-08-21 00:48:38'),
(14, 'IPE', '2017-08-21 00:48:38', '2017-08-21 00:48:38'),
(15, 'PME', '2017-08-21 00:48:38', '2017-08-21 00:48:38'),
(16, 'MEE', '2017-08-21 00:48:38', '2017-08-21 00:48:38'),
(17, 'SWE', '2017-08-21 00:48:38', '2017-08-21 00:48:38'),
(18, 'ANP', '2017-08-21 00:48:38', '2017-08-21 00:48:38'),
(19, 'BNG', '2017-08-21 00:48:38', '2017-08-21 00:48:38'),
(20, 'ECO', '2017-08-21 00:48:38', '2017-08-21 00:48:38'),
(21, 'ENG', '2017-08-21 00:48:38', '2017-08-21 00:48:38'),
(22, 'PSS', '2017-08-21 00:48:38', '2017-08-21 00:48:38'),
(23, 'PAD', '2017-08-21 00:48:38', '2017-08-21 00:48:38'),
(24, 'SWC', '2017-08-21 00:48:38', '2017-08-21 00:48:38'),
(25, 'SOC', '2017-08-21 00:48:39', '2017-08-21 00:48:39'),
(26, 'BAN', '2017-08-21 00:48:39', '2017-08-21 00:48:39'),
(27, 'OCN', '2017-08-21 00:48:39', '2017-08-21 00:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'President', '2017-08-21 00:48:39', '2017-08-21 00:48:39'),
(2, 'Vice-President', '2017-08-21 00:48:39', '2017-08-21 00:48:39'),
(3, 'General Secretary', '2017-08-21 00:48:39', '2017-08-21 00:48:39'),
(4, 'Chief Co-ordinator', '2017-08-21 00:48:39', '2017-08-21 00:48:39'),
(5, 'Treasurer', '2017-08-21 00:48:39', '2017-08-21 00:48:39'),
(6, 'Organising Secretary', '2017-08-21 00:48:40', '2017-08-21 00:48:40'),
(7, 'IT Secretary', '2017-08-21 00:48:40', '2017-08-21 00:48:40'),
(8, 'Blood Donation Secretary', '2017-08-21 00:48:40', '2017-08-21 00:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleryimage`
--

CREATE TABLE `galleryimage` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galleryimage`
--

INSERT INTO `galleryimage` (`id`, `image_title`, `image_link`, `created_at`, `updated_at`) VALUES
(1, 'road paint', '/img/gallery/road_paint.jpg', '2017-08-21 00:48:33', '2017-08-21 00:48:33'),
(2, 'shobdo punorbashon', '/img/gallery/punorbashon_3.jpg', '2017-08-21 00:48:33', '2017-08-21 00:48:33'),
(3, 'Chotomoni nibash', '/img/gallery/Chotomoni.jpg', '2017-08-21 00:48:33', '2017-08-21 00:48:33'),
(4, 'Chotomoni nibash flag Making', '/img/gallery/Chotomoni_observe.jpg', '2017-08-21 00:48:33', '2017-08-21 00:48:33'),
(5, 'worm cloth distribution', '/img/gallery/worm_cloth_distribution.jpg', '2017-08-21 00:48:33', '2017-08-21 00:48:33'),
(6, 'Eid bostro bitoron', '/img/gallery/Eid_bostro_bitoron.jpg', '2017-08-21 00:48:34', '2017-08-21 00:48:34'),
(7, 'freshers Reception', '/img/gallery/freshers_Reception.JPG', '2017-08-21 00:48:34', '2017-08-21 00:48:34'),
(8, 'bornomala', '/img/gallery/bornomala.jpg', '2017-08-21 00:48:34', '2017-08-21 00:48:34'),
(9, 'Boi mela', '/img/gallery/Boi_mela_(2).JPG', '2017-08-21 00:48:34', '2017-08-21 00:48:34'),
(10, 'Chotomoni 21st february', '/img/gallery/Chotomoni_21st_february.jpg', '2017-08-21 00:48:34', '2017-08-21 00:48:34'),
(11, 'picnic', '/img/gallery/picnic_lalakhal.jpg', '2017-08-21 00:48:34', '2017-08-21 00:48:34'),
(12, 'young bangla presentation', '/img/gallery/young_bangla_presents.jpg', '2017-08-21 00:48:34', '2017-08-21 00:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_title`, `created_at`, `updated_at`) VALUES
(1, '\\img\\Images\\news1.jpg', '2017-08-21 00:48:35', '2017-08-21 00:48:35'),
(2, '\\img\\Images\\news2.jpg', '2017-08-21 00:48:35', '2017-08-21 00:48:35'),
(3, '\\img\\Images\\news3.jpg', '2017-08-21 00:48:35', '2017-08-21 00:48:35'),
(4, '\\img\\SectorImages\\image1.jpg', '2017-08-21 00:48:35', '2017-08-21 00:48:35'),
(5, '\\img\\SectorImages\\image2.jpg', '2017-08-21 00:48:35', '2017-08-21 00:48:35'),
(6, '\\img\\SectorImages\\image3.jpg', '2017-08-21 00:48:35', '2017-08-21 00:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_02_08_102834_entrust_setup_tables', 1),
('2017_02_11_135836_create_committees_table', 1),
('2017_02_11_140008_create_sectors_table', 1),
('2017_02_11_140038_create_education_table', 1),
('2017_02_11_140055_create_blood_donation_table', 1),
('2017_02_11_150652_create_departments_table', 1),
('2017_02_11_151114_create_blood_groups_table', 1),
('2017_02_11_155918_create_our_missions_table', 1),
('2017_02_11_155950_create_news_table', 1),
('2017_02_11_160728_create_images_table', 1),
('2017_02_11_161700_create_news_images_table', 1),
('2017_02_12_074445_create_notice_table', 1),
('2017_02_18_051805_create_sliderImage_table', 1),
('2017_03_26_043242_create_gallery_table', 1),
('2017_04_26_201047_create_designations_table', 1),
('2017_04_26_204820_create_sector_images_table', 1),
('2017_04_26_222902_create_committee_members_table', 1),
('2017_04_26_223357_create_user_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Swapnotthan observes establishment day at SUST', 'Swapnotthan a voluntary organisation, observes its 7th establishment anniversary at Shahjalal University of Science and Technology (SUST) on Monday, 1st August,2016.', '2017-08-21 00:48:33', '2017-08-21 00:48:33'),
(2, 'শাবির স্বেচ্ছাসেবী সংগঠন স্বপ্নোত্থানের শীতবস্ত্র বিতরণ সম্পন্ন', 'শাহজালাল বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ের স্বেচ্ছাসেবী সংগঠন স্বপ্নোত্থান প্রতিবছরের ন্যায় এবার ও শীতবস্ত্র বিতরণ কর্মসূচী সম্পন্ন করেছে। বিগত ২৭ ডিসেম্বর, ২০১৭ মৌলভীবাজার এর শমশেরনগর চাবাগান এর দরিদ্র শ্রমিকদের মাঝে শীতের কাপড় বিতরণ করে সংগঠনটি।', '2017-08-21 00:48:33', '2017-08-21 00:48:33'),
(3, 'স্বপ্নোত্থানের নবীনবরণ ও সাংস্কৃতিক সন্ধ্যা পালিত', 'গত ৮ই এপ্রিল শাবিপ্রবির অনন্য স্বেচ্ছাসেবী সংগঠন স্বপ্নোত্থান বাৎসরিক নবীনবরণ ও সাংস্কৃতিক সন্ধ্যা পালন করেছে। উক্ত অনুষ্ঠানে স্বপ্নোত্থানের ৮ম কার্যনির্বাহী কমিটি ও ঘোষণা করা হয়। ', '2017-08-21 00:48:33', '2017-08-21 00:48:33');

-- --------------------------------------------------------

--
-- Table structure for table `news_images`
--

CREATE TABLE `news_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_images`
--

INSERT INTO `news_images` (`id`, `news_id`, `image_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-08-21 00:48:35', '2017-08-21 00:48:35'),
(2, 2, 2, '2017-08-21 00:48:35', '2017-08-21 00:48:35'),
(3, 3, 3, '2017-08-21 00:48:36', '2017-08-21 00:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_missions`
--

CREATE TABLE `our_missions` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `our_missions`
--

INSERT INTO `our_missions` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '‘দীপ শিখা হাতে স্বপ্নের পথে’ এই প্রতিপাদ্যকে সামনে রেখে ২০০৭ সালে যাত্রা শুরু করে ‘স্বপ্নোত্থান’। দেশের উত্তরপূর্বের এ জনপদে প্রযুক্তি বিদ্যার আতুড়ঘর নামে পরিচিত ডিজিটাল শিক্ষাঙ্গন শাহজালাল বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ের কিছু উদ্যমী তরুণের অক্লান্ত পরিশ্রমে গড়ে ওঠে এ সেচ্ছাসেবী সংগঠনটি। <br>\n						দীর্ঘ এ পথচলায় এ সংগঠনের হাল ধরেছেন অনেকেই। ‘শফিকুর রহমান’ নামটি এর মাঝে একটু আলাদা করেই উচ্চারিত হয়। তাঁরই নেতৃত্বে সমাজের সুবিধাবঞ্চিত মানুষের শিক্ষা ও সেবার মানসে স্বপ্নবান কিছু তরুনের নিরলস প্রচেষ্ঠার ফসল আজকের স্বপ্নকামী সংগঠন ‘স্বপ্নোত্থান’। অবহেলিত জনগোষ্ঠীর সেবা নিশ্চিত করতে স্বপ্নোত্থানিয়ানরা সেই থেকে দেখিয়ে চলেছে স্বপ্ন। ব্রত থেকেছে এক একটি স্বপ্নের বাস্তবায়নে। সংগঠনটি সুবিধাবঞ্চিত মানুষের স্বপ্নের প্রতিবন্ধকতা কাটাতে বদ্ধপরিকর। <br>\n						অর্থাভাবে পরিবারহীন বেড়ে ওঠা শিশুটিকে জীবনের সঠিক রাস্তা দেখাতে দৃঢ় প্রতিজ্ঞ ‘স্বপ্নোত্থান’। পরিবেশ পরিস্থিতির শিকার হয়ে ভুল পথে পা বাড়ানো শিশুটির পাশে স্বপ্নোত্থানের সেচ্ছাসেবীরা দাঁড়াই ভাইয়া-আপু হয়ে। মা-বাবার মমতা না পাওয়া শিশুটির পাশে থাকে অভিভাবকের ছায়া হয়ে। এর সবকিছু সম্ভব হয় স্বপ্নোত্থানের স্বপ্নকামী অন্তঃপ্রাণ স্বেচ্ছাসেবীদেও জন্য। পরম ভালবাসা, মমতা আর স্নেহের পরশ দিয়ে বাঁচিয়ে রাখে এক একটি শিশুর স্বপ্ন। <br>\n						১.স্বপ্নোত্থান মূলত কাজ করে শিক্ষা নিয়ে। এ কাজের অংশ হিসেবে স্বপ্নোত্থানের স্বেচ্ছাসেবীরা কাজ করে কর্মজীবি শিশুদের স্কুল ভোলানন্দ নৈশ বিদ্যালয়ে। এখানের শিক্ষার্থীদের কম-বেশ সবাই দিনে কাজ করে। রাতের সময়টা বেছে নেয় শিক্ষার কাজে। এই সময়ে সারাদিন ক্লাস পরীক্ষার ধকল পাশকাটিয়ে স্বপ্নোত্থানের স্বেচ্ছাসেবীরা শিক্ষা সেবায় মন দেয়। সারাদিন কাজে থাকা ক্লান্ত শিক্ষার্থীদের ক্লাসে স্বপ্নোত্থানের স্বেচ্ছাসেবীরা তখন নিজেদের শিক্ষার্থী পরিচয় ভুলে গিয়ে স্বপ্ন সারথী হিসেবে নির্দেশনা দিয়ে থাকে। ভোলানন্দ নৈশ বিদ্যালয়ের শিক্ষার্থীরা সমাজের বৈষম্যপূর্ণ ব্যবস্থাকে বৃদ্ধাঙ্গুলি দেখিয়ে অদম্য আগ্রহে পড়াশুনা চালিয়ে যায়। নৈশ বিদ্যালয়ের সম্মানিত শিক্ষকদের পাশাপাশি স্বপ্নোত্থানের স্বেচ্ছাসেবীরা এখানে সপ্তাহে তিনদিন ৫ম থেকে ১০ম শ্রেনী পর্যন্ত ক্লাস নিয়ে থাকে। পড়ানোর পাশাপাশি দিয়ে থাকে মূল্যবোধের শিক্ষা। অনুপ্রাণিত করে পৃথিবীকে জয় করার বিভিন্ন গল্প শুনিয়ে। পাঠ্যক্রমে তাদের অংশগ্রহনের ফলেই এ বিদ্যালয় থেকে পাশ করা শিক্ষার্থীরা পরে বিশ্ববিদ্যালয় পড়ুয়াদের কাতারে নাম লেখায়। তেমনি সহ-শিক্ষা কার্যক্রমে তাদের অংশগ্রহনও উল্লেখযোগ্য। প্রতিবছরের বিভিন্ন জাতীয় দিবস এদের সাথে উদযাপন করে স্বপ্নোত্থানের স্বেচ্ছাসেবীরা। এসব দিনে ক্রীড়া প্রতিযোগীতার আয়োজন করা হয় স্বপ্নোত্থানের পক্ষ থেকে। <br>\n						২. স্বপ্নোত্থানের আরেকটি বিশেষ কর্মের ক্ষেত্র ‘ছোটমণি নিবাস’। পরিবারহীন ০-৬ বছর বয়সী এক-ঝাঁক প্রজাপতির মিলনমেলা সমাজসেবা অধিদপ্তরের এই এতিমখানাটিতে। স্বপ্নোত্থানের স্বেচ্ছাসেবীরা চেষ্টা করে তাদের আপনজন হয়ে কিছুটা আদর ভালোবাসা দিতে, চেষ্টা করে পরম মমতায় জড়িয়ে নিতে। নাচ-গান, খেলাধুলা, কবিতার মাধ্যমে কিছুক্ষন চেষ্টা করে তাদের মাতিয়ে রাখতে। তারাও পরম ভালোবাসায় স্বপ্নোত্থানের স্বেচ্ছাসেবীদের বুকে টেনে নেয়; নিজের আপন কেউ মনে করে। কোলে উঠলে তো নামতেই চায় না। যতক্ষণ স্বপ্নোত্থানের স্বেচ্ছাসেবীরা সেখানে থাকে, ততক্ষণই চেষ্টা করে এইসব বাচ্চাদের বুঝাতে যে তারা কখনোই একা নয়। এছাড়া প্রতিবছর ঈদের আগে ছোটমণিতে মেহেদী উৎসবের আয়োজন করা হয়। নতুন নতুন উপহারের পাশাপাশি ছোটমণিদের হাত রাঙিয়ে দেয় স্বপ্নোত্থানের স্বেচ্ছাসেবীরা। ঈদের আগে নতুন উপহার ও মেহেদীতে এইসব বাচ্চাদের চোখে-মুখের আনন্দের ঝিলিক দেখাটা আসলেই অসাধারণ। <br>\n						৩. পুনর্বাসন কাজেও স্বপ্নোত্থান রেখেছে অনন্য ভূমিকা। ঢাকায় কুড়িয়ে পাওয়া শিশু ‘শব্দ’ এর পূনর্বাসনে কিংবা দশম শ্রেনীর ‘জোনাকি’র শিক্ষার ব্যবস্থা করে দেয়া এর মধ্যে অন্যতম। <br>\n						৪. স্বপ্নোত্থানের নিয়মিত কার্যক্রমের মধ্যে আরেকটি হচ্ছে সিলেটসহ দেশের বিভিন্ন স্থানে রক্তদাতা নিবন্ধন এবং রক্তদান কার্যক্রম পরিচালনা করা। প্রতিমাসে স্বেচ্ছাসেবীরা বিভিন্ন জায়গায় রক্ত দান করে। প্রয়োজনে দ্রুত রক্ত পাওয়ার উদ্দেশ্যে স্বপ্নোত্থান এর পক্ষ থেকে ‘স্বেচ্ছা’ নামক একটি ইন্টারনেটভিত্তিক অনলাইন ব্লাড ডোনার আর্কাইভও করা হয়েছে। <br>\n						৫. প্রতিবছর শীতে শীতার্ত মানুষের পাশে দাড়ায় ‘স্বপ্নোত্থান’। বিভিন্ন হল মেসের পাশাপাশি আশেপাশের আবাসিক এলাকা থেকে পুরাতন শীতবস্ত্র, আর্থিক সাহায্য সংগ্রহ করে তা পরবর্তীতে বাছাই করে সাথে নতুন কিছু যোগ করে শীতার্ত মানুষের মাঝে বিতরণ করা হয়। <br>\n						৬. ঈদ মানে আনন্দ, ঈদ মানে খুশি। আর ঈদের খুশি থেকে যাতে একটি শিশুও বঞ্চিত না হয় সে লক্ষ্যে স্বপ্নোত্থান ঈদবস্ত্র বিতরণ কার্যক্রম পরিচালনা করে থাকে। ক্যাম্পাসের শিক্ষক এবং সাবেক ও বর্তমান শিক্ষার্থীদের কাছ থেকে আর্থিক অনুদান নিয়ে বিশ্ববিদ্যালয় ও আশেপাশের এলাকাসহ নগরীর বিভিন্ন এলাকায় সহস্রাধিক পরিবারের মাঝে ঈদবস্ত্র বিতরণ করে থাকে ‘স্বপ্নোত্থান’। <br>\n						৭. পবিত্র মাহে রমজানে ভোলানন্দ নৈশ বিদ্যালয়ে এবং বিশ্ববিদ্যালয় ক্যাম্পাসে সুবিধাবঞ্চিত শিশুদের নিয়ে ইফতার মাহফিলের আয়োজন করে থাকে ‘স্বপ্নোত্থান’। <br>\n						অসহায়, দরিদ্র ও চিকিৎসা ব্যয়ভার বহনে অক্ষম, দুরারোগ্য রোগে আক্রান্ত ব্যক্তির চিকিৎসার জন্য ক্ষেত্র বিশেষে স্বপ্নোত্থান বিভিন্ন তহবিল সংগ্রহ করে থাকে। এছাড়া দেশের যেকোনো সংকট, প্রাকৃতিক দুর্যোগের সময়ও অর্থ সংগ্রহের ব্যবস্থা করে স্বপ্নোত্থান। আর এ তহবিল সংগ্রহের কাজে বিভিন্ন সময় ইনডোর গেমস, বইমেলা কিংবা চ্যারিটি ফিল্ম ফেস্টিভালেরও আয়োজন করে স্বপ্নোত্থান । <br>\n						এছাড়া বিভিন্ন জাতীয় দিবসগুলো পালন করে থাকে ‘স্বপ্নোত্থান’। জাতীয় চেতনায় উদ্বুদ্ধ হয়ে দেশমাতৃকার প্রতি সম্মান জানিয়ে দিবসগুলোতে কুইজ প্রতিযোগীতা, ক্রীড়া প্রতিযোগীতা ও সাংস্কৃতিক অনুষ্ঠানের আয়োজনও করে ‘স্বপ্নোত্থান’। <br>\n						বিশ্ববিদ্যালয়ের একঘেয়েমিতা ও স্বেচ্ছাসেবীমূলক কাজের মধ্যে সমন্বয়, নতুনত্ব ও সজীবতা নিয়ে আসতে স্বপ্নোত্থান নিজেদের সদস্য ও শুভাকাঙ্খীদের নিয়ে করে থাকে বার্ষিক বনভোজন ও বারবিকিউ উৎসব। অন্যদিকে সাংস্কৃতিক সন্ধ্যা, ব্যাডমিন্টন টুর্নামেন্ট, রোড পেইন্টিং, ফল উৎসবের আয়োজন করে থাকে। তদুপরি সাম্প্রতিক সময়ে বিভিন্ন স্বেচ্ছাসেবী সংগঠনের সাথে একযোগে সচেতনতামুলক বিভিন্ন অনুষ্ঠান যেমন মাদকদ্রব্য নিরোধ কেন্দ্রের সাথে মাদকবিরোধী সেমিনার, ইউনাইটেড নেশনস ভলান্টিয়ার (ইউএনভি) এর সাথে স্বেচ্ছাসেবীতার উপর সেমিনার, কিংবা ডেন্টাল কেয়ার সিলেট এর সাথে যৌথভাবে ফ্রি ডেন্টাল চেকআপ এন্ড ওরাল হেলথ এ্যাওয়ারনেস শীর্ষক কাজ কওে চলেছে ‘স্বপ্নোত্থান’। <br>\n						‘স্বপ্নোত্থান’ স্বপ্ন দেখে মানবিক বাংলাদেশে বির্নিমানের। ফলশ্রতিতে প্রতিদিনের সূর্যাস্তের সাথে সাথে অপেক্ষা করে আগামী দিনের নতুন সূর্যোদয়ের।', '2017-08-21 00:48:33', '2017-08-21 00:48:33');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL, '2017-08-21 00:48:29', '2017-08-21 00:48:29'),
(2, 'user', NULL, NULL, '2017-08-21 00:48:29', '2017-08-21 00:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 2),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 7, 2),
(8, 8, 2),
(9, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Education', 'Swapnotthan gives major focus in the education sector as education impects more on the development of a country than anything else. In our country such a basic right as proper education is not provided to a vast amount of students. A lot of children don\'t go to school for earning their own living or not able to maintain educational expenses. Swapnotthan works for these underpriviliged children, teaches them, guides them, inspires them, sometimes provide educational expenses. <br>\n					Volanondo Night School supported by Sylhet City Corporation is where swapnotthan works as a regualr service. Here most of the students are working children. They earn their livlihood working at day and attends school at night. They can only study at night. Inadequate number of teachers can\'t provide them proper education also lake of training is responsible in a way. <br>\n					Swapnotthan\'s volunteers teaches in the school from class 5 to 10 three days in a week. They spend time to understand the problems and lakings of their study and gives most effort to every single children to improve their quality to compete in the real world. Swapnotthan feels proud to be a part of this work as students of Volanondo Night School are showing thumb to society\'s discriminatory system  & continuing their education with full intensity & passion. <br>\n					Beside regualar education volunteers teach moral values to the students. They motivate them by narrating the stories of conquering the world. As a result of their participation in the curriculum, the students passed from this school are able to gain the status of being  an University students. Their participation in co-curriculum activities are admirable. Every year the volunteers of the Swapnothan celebrate the national days with the students of Volanondo Night School. On these days different types of programs like sports competition, art festival, quiz, open writing etc are organized on behalf of Swapnothan. <br>\n					Swapnotthan also tries to provide college admission arrangements for the students of Volanondo Night School as these indigent children steps forward to a better future after passing their Secondary education. <br>\n					Swapnotthan dreams about a future where no children will be out of school education, no drop out, no hungry mouth, no street children. Everyone is open to participate to our work by taking classes or helping by any other way not necessary to be a member of Swapnotthan. <br>\n					The dream will be lit in every child\'s mind. Dream of a better future.', '2017-08-21 00:48:34', '2017-08-21 00:48:34'),
(2, 'Chotomoni Nibash', 'Swapnotthan\'s another vital work is Chotomoni Nibash. This is an orphanage of 0 to 6 years old children under Social welfare Directorate, Baghbari, Sylhet. They are the beautiful butterflies with no family. Not knowing their own identity they are the only family they got. But Swapnotthan provides them the family, a place they can trust, they can believe on. Volunteers stand beside them as brothers and sisters, spend time with them playing games, teaching healthy habits, entertaining them talk to them sing with them, laugh with them. Children easily accept them as their family demanding a lot of things depicts their trust. <br>\n					Chotomoni Nibash is a true place of love. These children don\'t have anything in this world but love which anyone can feel with just a moment. They have enormous potentialities and lots of dreams. <br>\n					Every Saturday Swapnotthan\'s volunteers visit Chotomoni Nibash and spend time with the little flowers. Besides this on every occasion like 21st February, 26th March, 16th December they observe with them by making the flag of our country with their little colorful hands painted. <br>\n					Every year before Eid Swapnotthan arranges \'Mehedi Utshob\' in Chotomoni Nibash. Volunteers brighten little hands of these children with Mehedi, gives them chocolate, toys, Knick-knacks. Swapnotthanians try to make them feel the love they are so eager to have. <br>\n					Here Swapnotthanians meet Taslima, Fatema, Nasima, Nadia, Arafat and many more children who become a part of every Swapnotthanians life.', '2017-08-21 00:48:35', '2017-08-21 00:48:35'),
(3, 'Blood Donation', 'Blood Donation is also a sector where Swapnotthan serve regularly. Swapnotthan has a blood donation archive named \'Sweccha\'. Swapnotthan manage blood donor if requested. Blood donation is provided to helpless people mostly.', '2017-08-21 00:48:35', '2017-08-21 00:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `sector_images`
--

CREATE TABLE `sector_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `sector_id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sector_images`
--

INSERT INTO `sector_images` (`id`, `sector_id`, `image_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '2017-08-21 00:48:36', '2017-08-21 00:48:36'),
(2, 2, 5, '2017-08-21 00:48:36', '2017-08-21 00:48:36'),
(3, 3, 6, '2017-08-21 00:48:36', '2017-08-21 00:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `sliderimage`
--

CREATE TABLE `sliderimage` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliderimage`
--

INSERT INTO `sliderimage` (`id`, `image_title`, `image_link`, `created_at`, `updated_at`) VALUES
(1, 'chotomoni nibash', '/img/slider/chotomoni_nibash.jpg', '2017-08-21 00:48:34', '2017-08-21 00:48:34'),
(2, 'ekdin bikele', '/img/slider/ekdin_bikele.jpg', '2017-08-21 00:48:34', '2017-08-21 00:48:34'),
(3, 'Freshers reception 2017', '/img/slider/Freshers_reception_2017.jpg', '2017-08-21 00:48:34', '2017-08-21 00:48:34'),
(4, 'BBQ', '/img/slider/BBQ.JPG', '2017-08-21 00:48:34', '2017-08-21 00:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reg_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `reg_no`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jahid Hasan Polash', '2012331033', 'admin@mail.com', '$2y$10$56hayXMA8ot9iZzG5.sqvudGenLadz8nuGxTlNufEQcase/SiZb6.', NULL, '2017-08-21 00:48:31', '2017-08-21 00:48:31'),
(2, 'Abu Hanife Nayem', '2012331073', 'ahnayem.sust@gmail.com', '$2y$10$HtHGGToeruDXW6fOtkADge3CDJqNliE4syzaTXTZzxuxB822cB3nS', NULL, '2017-08-21 00:48:31', '2017-08-21 00:48:31'),
(3, 'Mahdin Al Nafi', '2014731028', 'mahdin.himu@gmail.com', '$2y$10$GP8xXKq3.tgRqULDdVxAYu/c/wuIFL9cxe4.7KRcheI7IgpV652Ce', NULL, '2017-08-21 00:48:32', '2017-08-21 00:48:32'),
(4, 'Rizwanur Rahman Polash', '2014231080', 'rizwanpolash@gmail.com', '$2y$10$YacpxP55h1CAuoND7KCWqe6YWLTA1TIJbijgozl2zGfIcUSamwGL2', NULL, '2017-08-21 00:48:32', '2017-08-21 00:48:32'),
(5, 'Al Faysal Anik', '2013133059', 'alfaysalanik55@gmail.com', '$2y$10$smG5738maCpdEd7wsL1PDOfReqQl55xasQTSggtkKkwkxdR.AZnzq', NULL, '2017-08-21 00:48:32', '2017-08-21 00:48:32'),
(6, 'MD Anwer Hossain Anik', '2015331015', 'anwer15@student.sust.edu', '$2y$10$gaCzBx.1TTKMN4O2UHb6cOpJQ2.TInhSi4USlyOadEa4EFiucACN.', NULL, '2017-08-21 00:48:32', '2017-08-21 00:48:32'),
(7, 'Mahedi Hasan Kabir', '2013731034', 'mahedikabir1@gmail.com', '$2y$10$dbXr9AKxDaggSb4BIp7l6eiSJ5AICROvLUZEbXYsIZjjpo7G..gYa', NULL, '2017-08-21 00:48:32', '2017-08-21 00:48:32'),
(8, 'Ataur Rahman', '2013731035', 'ataur.bba16@gmail.com', '$2y$10$pznzpj5jOiDUAzLdwB4ZpO9aDwg3maMWd2guY1pmiHIZwF8bxmOBe', NULL, '2017-08-21 00:48:32', '2017-08-21 00:48:32'),
(9, 'Bithee Devi', '2013731084', 'bithee94@gmail.com', '$2y$10$9z83HrXrqn3D359Xk17bUONKEbELrHZXFrujz2fdM2icv7PfHX9x6', NULL, '2017-08-21 00:48:32', '2017-08-21 00:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `mothers_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fathers_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `present_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `bl_donate_capable` tinyint(1) NOT NULL,
  `bl_group_id` int(10) UNSIGNED NOT NULL,
  `ex_curr_activities` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `why_to_be_swapnotthanian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sector_to_work_in` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `mothers_name`, `fathers_name`, `present_address`, `mobile_number`, `department_id`, `bl_donate_capable`, `bl_group_id`, `ex_curr_activities`, `why_to_be_swapnotthanian`, `sector_to_work_in`, `created_at`, `updated_at`) VALUES
(1, 1, 'Shaheda Akter', 'Askar Ali', 'Akhaia,Sylhet', '+8801682470258', 12, 1, 2, 'Singing', 'Swapnotthan is a true voluntary organisation with proper dedication.', 'Organising, Education', '2017-08-21 00:48:40', '2017-08-21 00:48:40'),
(2, 2, 'Jahanara Akter Nasima', 'Abdul Hai', 'Akhaia,Sylhet', '+8801920386820', 12, 1, 3, 'Fighting', 'Swapnotthan is a true voluntary organisation with proper dedication.', 'Organising, Education', '2017-08-21 00:48:40', '2017-08-21 00:48:40'),
(3, 3, 'Salma Akter', 'Md. Abul Hashem', 'Surma Residential Area, Akhaliya, Sylhet.', '+8801627066059', 26, 1, 2, 'Singing', 'Swapnotthan is a true voluntary organisation with proper dedication.', 'Organising, Education', '2017-08-21 00:48:40', '2017-08-21 00:48:40'),
(4, 4, 'Sultana Parvin', 'Khalilur Rahman', 'Akhaia,Sylhet', '+8801770275902', 20, 1, 2, 'Book Reading', 'Swapnotthan is a true voluntary organisation with proper dedication.', 'Organising, Education', '2017-08-21 00:48:41', '2017-08-21 00:48:41'),
(5, 5, 'Altafun Nesha', 'Farukul Islam', 'Flat-4/b,Haji sofat ullah tower,surma,akhalia,sylhet', '+8801750843486', 3, 1, 2, 'Book Reading', 'Swapnotthan is a true voluntary organisation with proper dedication.', 'Organising, Education', '2017-08-21 00:48:41', '2017-08-21 00:48:41'),
(6, 6, 'Jahanara Halim', 'Abdul Halim', '72/4 lakecity R/A, Neharipara,sylhet', '+8801965409847', 12, 1, 1, 'Book Reading', 'Swapnotthan is a true voluntary organisation with proper dedication.', 'Organising, Education', '2017-08-21 00:48:41', '2017-08-21 00:48:41'),
(7, 7, 'Tahera Sultana', 'Ansar Ali', '3021, Bangabondhu Hall, SUST', '+8801738630814', 26, 1, 3, 'Book Reading', 'Swapnotthan is a true voluntary organisation with proper dedication.', 'Organising, Education', '2017-08-21 00:48:41', '2017-08-21 00:48:41'),
(8, 8, 'Moyna Begum', 'Samsir Uddin', '5006, Bangabondhu Hall, SUST', '+880173065830', 26, 1, 1, 'Book Reading', 'Swapnotthan is a true voluntary organisation with proper dedication.', 'Organising, Education', '2017-08-21 00:48:41', '2017-08-21 00:48:41'),
(9, 9, 'Nolini Devi', 'Late Biraj Singha', 'Agrani 8, Londoni road, Sylhet', '+8801681977579', 26, 1, 1, 'Book Reading', 'Swapnotthan is a true voluntary organisation with proper dedication.', 'Organising, Education', '2017-08-21 00:48:41', '2017-08-21 00:48:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_donation`
--
ALTER TABLE `blood_donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_groups`
--
ALTER TABLE `blood_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committees`
--
ALTER TABLE `committees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committee_members`
--
ALTER TABLE `committee_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `committee_members_committee_id_index` (`committee_id`),
  ADD KEY `committee_members_designation_id_index` (`designation_id`),
  ADD KEY `committee_members_user_id_index` (`user_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleryimage`
--
ALTER TABLE `galleryimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_images`
--
ALTER TABLE `news_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_images_news_id_index` (`news_id`),
  ADD KEY `news_images_image_id_index` (`image_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_missions`
--
ALTER TABLE `our_missions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sector_images`
--
ALTER TABLE `sector_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sector_images_sector_id_index` (`sector_id`),
  ADD KEY `sector_images_image_id_index` (`image_id`);

--
-- Indexes for table `sliderimage`
--
ALTER TABLE `sliderimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_details_user_id_index` (`user_id`),
  ADD KEY `user_details_department_id_index` (`department_id`),
  ADD KEY `user_details_bl_group_id_index` (`bl_group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_donation`
--
ALTER TABLE `blood_donation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blood_groups`
--
ALTER TABLE `blood_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `committees`
--
ALTER TABLE `committees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `committee_members`
--
ALTER TABLE `committee_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galleryimage`
--
ALTER TABLE `galleryimage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news_images`
--
ALTER TABLE `news_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `our_missions`
--
ALTER TABLE `our_missions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sector_images`
--
ALTER TABLE `sector_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sliderimage`
--
ALTER TABLE `sliderimage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `committee_members`
--
ALTER TABLE `committee_members`
  ADD CONSTRAINT `committee_members_committee_id_foreign` FOREIGN KEY (`committee_id`) REFERENCES `committees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `committee_members_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `committee_members_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news_images`
--
ALTER TABLE `news_images`
  ADD CONSTRAINT `news_images_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `news_images_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sector_images`
--
ALTER TABLE `sector_images`
  ADD CONSTRAINT `sector_images_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sector_images_sector_id_foreign` FOREIGN KEY (`sector_id`) REFERENCES `sectors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_bl_group_id_foreign` FOREIGN KEY (`bl_group_id`) REFERENCES `blood_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_details_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
