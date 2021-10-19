-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2021 at 08:42 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelschool2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins_user`
--

CREATE TABLE `admins_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins_user`
--

INSERT INTO `admins_user` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Sapna Bnaiya', 'sapna@gmail.com', '$2y$10$WIau.kbbryisyUP7re0kFurHcY/Nfv95YAQLDVgEcn8rnz67hmGza', '2021-10-07 12:48:15', '2021-10-07 12:48:15'),
(2, 'sapnabaniya', 'sapna123@gmail.com', '$2y$10$Ava9eNSPCuHLDfRB9PQSnuxMr5qefXX./Pv7qSodiH3VEDEtgHD86', '2021-10-07 14:38:32', '2021-10-07 14:38:32'),
(3, 'astha shrestha', 'astha@gmail.com', '$2y$10$IWa6312Cs4xdrceiCNeeY.82q0wf1LSuC2B/Vg7VN1KOYsrCOvmGW', '2021-10-08 06:11:41', '2021-10-08 06:11:41'),
(4, 'Aron Shrestha', 'aron@gmail.com', '$2y$10$ARg6JwoF12nsS5m8iBEFLesgyxcFhr8w7qx8VlGBUD7mbmbUATQCy', '2021-10-09 12:07:27', '2021-10-09 12:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`id`, `name`, `email`, `phone`, `address`, `skill`, `gender`, `ward_no`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sapna Bnaiya', 'sapna@gmail.com', '9827190713', 'nayabazar', 'Html/css', 'Female', '2', 'This is my application.', 'Active', '2021-10-05 01:43:25', '2021-10-05 01:43:25'),
(3, 'Skyler Hayes', 'sasanij@mailinator.com', '24', 'Proident atque veli', 'C++', 'Male', '2', 'Dolore est iste exer', 'Active', '2021-10-10 21:53:32', '2021-10-10 21:53:32'),
(4, 'Daryl Cooke', 'lary@mailinator.com', '7', 'Quis elit rem nihil', 'Python', 'Female', '2', 'Sequi eveniet fugia', 'Active', '2021-10-10 22:14:48', '2021-10-10 22:14:48'),
(5, 'Clare Bullock', 'wylob@mailinator.com', '89', 'Deleniti ducimus du', 'Html/css', 'Male', '2', 'Fugit sint eligendi', 'Active', '2021-10-10 22:14:56', '2021-10-10 22:14:56'),
(6, 'Cathleen Wheeler', 'cifyvu@mailinator.com', '36', 'Quo cum perspiciatis', 'Html/css', 'Male', '1', 'Sit distinctio Sequ', 'Deactive', '2021-10-10 22:16:07', '2021-10-10 22:16:07'),
(7, 'Odette Irwin', 'zoke@mailinator.com', '75', 'Sed nesciunt aut au', 'Python', 'Male', '1', 'Aute atque aut venia', 'Active', '2021-10-11 09:02:23', '2021-10-11 09:02:23'),
(10, 'Tucker Ferguson', 'dufupesyva@mailinator.com', '92', 'Qui perspiciatis qu', 'C++', 'Male', '1', 'Ipsum sunt sunt so', 'Deactive', '2021-10-18 05:21:12', '2021-10-18 05:21:12'),
(11, 'Cadman Mckee', 'sisetan@mailinator.com', '81', 'Sapiente eligendi de', 'Html/css', 'Male', '1', 'Sit commodi quae qu', 'Active', '2021-10-18 05:23:36', '2021-10-18 05:23:36'),
(12, 'Jolie Wynn', 'wabiheqase@mailinator.com', '12', 'Doloremque pariatur', 'Html/css', 'Female', '2', 'Praesentium qui aut', 'Deactive', '2021-10-18 05:30:40', '2021-10-18 05:30:40'),
(13, 'Drake Compton', 'nucuf@mailinator.com', '51', 'Laboris veritatis ul', 'C++', 'Female', '1', 'Sunt voluptate sed c', 'Active', '2021-10-18 05:31:48', '2021-10-18 05:31:48'),
(14, 'Drake Compton', 'nucuf@mailinator.com', '51', 'Laboris veritatis ul', 'C++', 'Female', '1', 'Sunt voluptate sed c', 'Active', '2021-10-18 05:32:22', '2021-10-18 05:32:22'),
(15, 'Cade Hammond', 'tulomyhu@mailinator.com', '47', 'Duis atque qui ipsa', 'Python', 'Male', '2', 'Doloribus sit harum', 'Deactive', '2021-10-18 05:32:30', '2021-10-18 05:32:30'),
(16, 'Gemma Wilkinson', 'sefovosy@mailinator.com', '59', 'Quae quis nulla ipsu', 'Html/css', 'Female', '1', 'Eiusmod architecto e', 'Deactive', '2021-10-18 05:34:15', '2021-10-18 05:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `tittle`, `text`, `img_link`, `details`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Child Brain Research', 'Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry\'s standard dummy text ever since an unknown printer.', 'blog1_1633941402.jpg', 'Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchangedwhen an unknown printer took a galley of type and scrambled.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged  Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.', 'Active', '2021-10-11 02:52:59', '2021-10-19 00:35:23'),
(3, 'World Heritage', 'Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry\'s standard dummy text ever since an unknown printer.', 'blog2_1633941658.jpg', 'Bimply dummytext of the printing and typesetting istryrem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchangedwhen an unknown printer took a galley of type and scrambled.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged  Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.', 'Active', '2021-10-11 02:57:02', '2021-10-11 02:57:02'),
(4, 'Software Update', 'Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry\'s standard dummy text ever since an unknown printer.', 'blog3_1634624709.jpg', 'Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchangedwhen an unknown printer took a galley of type and scrambled.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.', 'Active', '2021-10-19 00:41:58', '2021-10-19 00:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `coursecats`
--

CREATE TABLE `coursecats` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursecats`
--

INSERT INTO `coursecats` (`c_id`, `c_name`, `c_status`, `created_at`, `updated_at`) VALUES
(1, 'BCA', 'Active', '2021-10-04 01:08:12', '2021-10-18 01:43:09'),
(2, 'BBA', 'Active', '2021-10-10 12:57:04', '2021-10-10 12:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `duration` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imglink` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_id` int(11) NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `text`, `time`, `duration`, `imglink`, `c_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Numerical Method', 'Dmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.Dmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.Dmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.Dmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.', '07:03:00', '2021-10-20', 'course1_1633888449.jpg', 1, 'Active', '2021-10-04 01:33:21', '2021-10-18 04:29:09'),
(2, 'Accounting', 'Dmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.Dmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.Dmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.Dmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.', '00:29:00', '2021-10-20', 'course2_1633891298.jpg', 2, 'Active', '2021-10-10 12:57:50', '2021-10-18 04:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `tittle`, `date`, `time`, `address`, `img_link`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'WordPress MeetUp Conference 2017', '2021-09-30', '11:12', 'pokhara', 'event1_1633938070.jpg', 'Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry\'s standard dummy text ever when an unknown printer.', 'Active', '2021-09-28 23:37:22', '2021-10-11 01:56:25'),
(2, 'WordPress MeetUp Conference 2021', '1998-09-14', '15:09', 'Velit reprehenderit', 'event2_1633938173.jpg', 'Cum nisi occaecat cu', 'Active', '2021-10-11 01:59:10', '2021-10-11 01:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `title`, `file_link`, `extension`, `details`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'slider', 'slider_1633591552.jpg', 'jpg', NULL, 1, '2021-10-06 19:55:52', '2021-10-06 19:55:52', NULL),
(2, 'slider 1', 'slider1_1633873929.jpg', 'jpg', NULL, 1, '2021-10-10 02:22:09', '2021-10-10 02:22:09', NULL),
(3, 'slider 2', 'slider2_1633874908.jpg', 'jpg', NULL, 1, '2021-10-10 02:38:28', '2021-10-10 02:38:28', NULL),
(4, 'slider 3', 'slider3_1633875585.jpg', 'jpg', NULL, 1, '2021-10-10 02:49:45', '2021-10-10 02:49:45', NULL),
(5, 'welcome page', 'welcomepage_1633876749.jpg', 'jpg', NULL, 1, '2021-10-10 03:09:09', '2021-10-10 03:09:09', NULL),
(6, 'welcome page', 'welcomepage_1633877039.jpg', 'jpg', NULL, 1, '2021-10-10 03:13:59', '2021-10-10 03:13:59', NULL),
(7, 'student 1', 'student1_1633885619.jpg', 'jpg', NULL, 1, '2021-10-10 05:36:59', '2021-10-10 05:36:59', NULL),
(8, 'student 2', 'student2_1633886163.jpg', 'jpg', NULL, 1, '2021-10-10 05:46:03', '2021-10-10 05:46:03', NULL),
(9, 'student 3', 'student3_1633886225.jpg', 'jpg', NULL, 1, '2021-10-10 05:47:05', '2021-10-10 05:47:05', NULL),
(10, 'course 1', 'course1_1633888449.jpg', 'jpg', NULL, 1, '2021-10-10 06:24:09', '2021-10-10 06:24:09', NULL),
(11, 'course 2', 'course2_1633891298.jpg', 'jpg', NULL, 1, '2021-10-10 07:11:38', '2021-10-10 07:11:38', NULL),
(12, 'teacher 1', 'teacher1_1633926011.jpg', 'jpg', NULL, 1, '2021-10-10 16:50:11', '2021-10-10 16:50:11', NULL),
(13, 'teacher', 'teacher_1633926151.jpg', 'jpg', NULL, 1, '2021-10-10 16:52:31', '2021-10-10 16:52:31', NULL),
(14, 'teacher 2', 'teacher2_1633926880.jpg', 'jpg', NULL, 1, '2021-10-10 17:04:40', '2021-10-10 17:04:40', NULL),
(15, 'teacher 3', 'teacher3_1633926916.jpg', 'jpg', NULL, 1, '2021-10-10 17:05:16', '2021-10-10 17:05:16', NULL),
(16, 'teacher 4', 'teacher4_1633926949.jpg', 'jpg', NULL, 1, '2021-10-10 17:05:49', '2021-10-10 17:05:49', NULL),
(17, 'teacher 5', 'teacher5_1633926992.jpg', 'jpg', NULL, 1, '2021-10-10 17:06:32', '2021-10-10 17:06:32', NULL),
(18, 'teacher 6', 'teacher6_1633927023.jpg', 'jpg', NULL, 1, '2021-10-10 17:07:03', '2021-10-10 17:07:03', NULL),
(19, 'teacher 7', 'teacher7_1633927061.jpg', 'jpg', NULL, 1, '2021-10-10 17:07:41', '2021-10-10 17:07:41', NULL),
(20, 'gallery 1', 'gallery1_1633928475.jpg', 'jpg', NULL, 1, '2021-10-10 17:31:15', '2021-10-10 17:31:15', NULL),
(21, 'gallery 2', 'gallery2_1633935971.jpg', 'jpg', NULL, 1, '2021-10-10 19:36:11', '2021-10-10 19:36:11', NULL),
(22, 'gallery 1', 'gallery1_1633936984.jpg', 'jpg', NULL, 1, '2021-10-10 19:53:04', '2021-10-10 19:53:04', NULL),
(23, 'event 1', 'event1_1633938070.jpg', 'jpg', NULL, 1, '2021-10-10 20:11:10', '2021-10-10 20:11:10', NULL),
(24, 'event 2', 'event2_1633938173.jpg', 'jpg', NULL, 1, '2021-10-10 20:12:53', '2021-10-10 20:12:53', NULL),
(25, 'blog 1', 'blog1_1633941402.jpg', 'jpg', NULL, 1, '2021-10-10 21:06:42', '2021-10-10 21:06:42', NULL),
(26, 'blog 2', 'blog2_1633941658.jpg', 'jpg', NULL, 1, '2021-10-10 21:10:58', '2021-10-10 21:10:58', NULL),
(27, 'news 1', 'news1_1633943273.jpg', 'jpg', NULL, 1, '2021-10-10 21:37:53', '2021-10-10 21:37:53', NULL),
(28, 'news 2', 'news2_1633943568.jpg', 'jpg', NULL, 1, '2021-10-10 21:42:48', '2021-10-10 21:42:48', NULL),
(29, 'objective 1', 'objective1_1633959941.jpg', 'jpg', NULL, 1, '2021-10-11 02:15:41', '2021-10-11 02:15:41', NULL),
(30, 'aboutus', 'aboutus_1633960601.jpg', 'jpg', NULL, 1, '2021-10-11 02:26:41', '2021-10-11 02:26:41', NULL),
(31, 'aboutus 1', 'aboutus1_1633961824.jpg', 'jpg', NULL, 1, '2021-10-11 02:47:04', '2021-10-11 02:47:04', NULL),
(32, 'message 1', 'message1_1633962161.jpg', 'jpg', NULL, 1, '2021-10-11 02:52:41', '2021-10-11 02:52:41', NULL),
(33, 'planning 1', 'planning1_1633962912.jpg', 'jpg', NULL, 1, '2021-10-11 03:05:12', '2021-10-11 03:05:12', NULL),
(34, 'logo', 'logo_1633964998.png', 'png', NULL, 1, '2021-10-11 03:39:58', '2021-10-17 22:13:55', '2021-10-17 22:13:55'),
(35, 'logo 2', 'logo2_1633965276.jpg', 'jpg', NULL, 1, '2021-10-11 03:44:36', '2021-10-17 22:04:34', '2021-10-17 22:04:34'),
(36, 'logo 3', 'logo3_1633965410.png', 'png', NULL, 1, '2021-10-11 03:46:50', '2021-10-17 11:24:29', '2021-10-17 11:24:29'),
(37, 'backgroundcolor', 'backgroundcolor_1634105700.jpg', 'jpg', NULL, 1, '2021-10-12 18:45:00', '2021-10-12 18:45:00', NULL),
(38, 'gallery 3', 'gallery3_1634474958.jpg', 'jpg', NULL, 1, '2021-10-17 01:19:18', '2021-10-17 23:35:03', '2021-10-17 23:35:03'),
(39, 'logo', 'logo_1634533451.png', 'png', NULL, 1, '2021-10-17 23:19:11', '2021-10-17 23:25:39', '2021-10-17 23:25:39'),
(40, 'logo', 'logo_1634533864.png', 'png', NULL, 1, '2021-10-17 23:26:04', '2021-10-17 23:26:04', NULL),
(41, 'gallery 3', 'gallery3_1634534422.jpg', 'jpg', NULL, 1, '2021-10-17 23:35:22', '2021-10-17 23:35:48', '2021-10-17 23:35:48'),
(42, 'gallery 3', 'gallery3_1634534460.jpg', 'jpg', NULL, 1, '2021-10-17 23:36:00', '2021-10-17 23:39:46', '2021-10-17 23:39:46'),
(43, 'gallery 3', 'gallery3_1634534700.jpg', 'jpg', NULL, 1, '2021-10-17 23:40:00', '2021-10-17 23:40:00', NULL),
(44, 'course 3', 'course3_1634550691.jpg', 'jpg', NULL, 1, '2021-10-18 04:06:31', '2021-10-18 04:06:31', NULL),
(45, 'blog 3', 'blog3_1634624709.jpg', 'jpg', NULL, 1, '2021-10-19 00:40:09', '2021-10-19 00:40:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_id` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `img_link`, `status`, `g_id`, `created_at`, `updated_at`) VALUES
(21, 'gallery 2', 'gallery2_1633935971.jpg', 'Active', '6', '2021-10-17 23:34:18', '2021-10-18 03:58:00'),
(20, 'gallery 1', 'gallery1_1633928475.jpg', 'Active', '5', '2021-10-17 23:33:53', '2021-10-17 23:33:53'),
(22, 'gallery 3', 'gallery3_1634534700.jpg', 'Active', '5', '2021-10-17 23:34:48', '2021-10-17 23:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `g_id` int(10) UNSIGNED NOT NULL,
  `g_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`g_id`, `g_name`, `g_status`, `created_at`, `updated_at`) VALUES
(5, 'CAMPUSs', 'Active', '2021-10-10 23:07:35', '2021-10-18 04:49:47'),
(6, 'CLASS', 'Active', '2021-10-10 23:07:44', '2021-10-10 23:07:44');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `details`, `contact`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sapna Bnaiya', 'sapna@gmail.com', 'Computer Science', 'xcbgsedgre', '9811111', NULL, '2021-10-03 10:37:49', '2021-10-03 10:37:49'),
(3, 'Latifah Vaughan', 'cifapo@mailinator.com', 'Vel perspiciatis se', 'Officia duis blandit', '28', NULL, '2021-10-10 21:25:55', '2021-10-10 21:25:55'),
(8, 'Lacota Gaines', 'zamehuler@mailinator.com', 'Error rem deleniti e', 'Non quia excepteur n', '93', NULL, '2021-10-18 05:10:14', '2021-10-18 05:10:14'),
(9, 'Jacob Bowen', 'zamuvyqose@mailinator.com', 'Hic ex odit qui libe', 'Temporibus iure est', '16', NULL, '2021-10-18 05:10:28', '2021-10-18 05:10:28'),
(10, 'Kellie Oneill', 'fijufosaqo@mailinator.com', 'Labore similique ut', 'Consectetur nulla eo', '82', NULL, '2021-10-18 05:11:33', '2021-10-18 05:11:33'),
(11, 'Astha Shrestha', 'astha@gmail.com', 'hello everyone', 'hello sir!', '9806659241', NULL, '2021-10-18 05:12:21', '2021-10-18 05:12:21'),
(5, 'Shad Sosa', 'fodytihavu@mailinator.com', 'Nobis quo et et plac', 'Non magnam inventore', '58', NULL, '2021-10-11 09:01:16', '2021-10-11 09:01:16'),
(6, 'Nita Willis', 'mareho@mailinator.com', 'Veniam similique ut', 'Iste voluptatem est', '92', NULL, '2021-10-11 09:02:12', '2021-10-11 09:02:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_09_24_143648_create_galleries_table', 2),
(5, '2021_09_24_143725_create_gallery_categories_table', 3),
(6, '2021_09_24_143804_create_messages_table', 4),
(7, '2021_09_24_143821_create_news_table', 5),
(8, '2021_09_24_143854_create_results_table', 6),
(9, '2021_09_24_143915_create_teachers_table', 7),
(10, '2021_09_28_080637_create_courses_table', 8),
(11, '2021_09_28_081128_create_coursecats_table', 9),
(12, '2021_09_28_081324_create_sliders_table', 10),
(13, '2021_09_28_081410_create_notices_table', 11),
(14, '2021_09_28_081509_create_siteconfigs_table', 12),
(15, '2021_09_28_081840_create_blogs_table', 13),
(16, '2021_09_28_081941_create_files_table', 14),
(17, '2021_09_28_082104_create_files_table', 15),
(18, '2021_09_28_082923_create_admissions_table', 16),
(19, '2021_09_28_083045_create_whychooseuses_table', 17),
(20, '2021_09_28_083543_create_events_table', 18),
(21, '2021_10_04_075626_create_files_table', 19),
(22, '2021_10_07_174337_admin_user_table', 20),
(23, '2021_10_17_170343_create_files_table', 21),
(24, '2021_10_07_193721_create_sinformations_table', 22),
(25, '2021_10_07_193721_create_siteinformations_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imglink` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `date`, `time`, `location`, `details`, `status`, `created_at`, `updated_at`, `imglink`) VALUES
(2, 'How To Build HTML To WordPress Site?', 'Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry\'s standard dummy text ever when an unknown printer.', '2021-10-21', '14:54:00', 'Cumque velit exercit', 'Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuriesp into electronic.simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Active', '2021-10-11 03:24:22', '2021-10-11 03:24:22', 'news1_1633943273.jpg'),
(3, 'The Printing And Typesetting Industry', 'The Printing And Typesetting Industry', '2021-10-08', '14:01:00', 'pokhara', 'Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuriesp into electronic.simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Deactive', '2021-10-11 03:28:31', '2021-10-17 11:58:22', 'news2_1633943568.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `started` date NOT NULL,
  `ended` date NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `heading`, `date`, `detail`, `started`, `ended`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Business Conferences 2016', '2021-09-23', 'Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla nihil, dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum dicta.', '2021-09-23', '2021-10-01', 'Active', '2021-09-28 23:21:19', '2021-09-28 23:21:19'),
(2, 'WordPress MeetUp Conference 2017', '2021-09-23', 'Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla nihil, dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum dicta.', '2021-09-30', '2021-10-06', 'Active', '2021-09-28 23:23:38', '2021-10-10 13:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `name`, `date`, `link`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Examination', '2021-09-21', 'https://groups.google.com/g/livro-laravel/c/3mvLCEsQY-U?pli=1', 'Deactive', '2021-09-26 03:54:36', '2021-09-26 03:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `siteconfigs`
--

CREATE TABLE `siteconfigs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_key` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imglink` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siteconfigs`
--

INSERT INTO `siteconfigs` (`id`, `site_key`, `site_value`, `site_name`, `imglink`, `status`, `created_at`, `updated_at`) VALUES
(1, 'contact', '+9779807563764', 'contact', 'hello', 'Active', '2021-09-29 10:16:50', '2021-10-17 23:54:33'),
(2, 'location', '#405, Lan Streen, Los Vegas, USA', 'location', '-', 'Active', '2021-09-29 10:19:00', '2021-09-29 10:19:00'),
(3, 'email', 'supporte@yourdomin.com', 'email', '-', 'Active', '2021-09-29 10:19:27', '2021-09-29 10:19:27'),
(4, 'program', 'Painting', 'painting', 'h61632152307.jpg', 'Active', '2021-09-29 10:20:26', '2021-09-29 10:20:26'),
(5, 'program', 'Chemestry', 'Chemestry', '81632152265.jpg', 'Active', '2021-09-29 10:21:02', '2021-10-05 01:23:29'),
(25, 'What Our Students Say', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.', 'Sapana Baniya', 'student3_1633886225.jpg', 'Active', '2021-10-05 00:56:27', '2021-10-10 11:32:15'),
(7, 'message from principal', 'Tmply dummy text of the printing and typesetting indust Lorem Ipsum has been theindustry\'s standard dummy text ever since simply dummy text of the printing and etypesetting industry. Lorem Ipsum has been the induststandard dummy text ever since en an unknown printer took a galley of type scrambledmaining.Tmply dummy text of the printing and typesetting indust Lorem Ipsum has been theindustry\'s standard dummy text ever since simply dummy text of the printing and etypesetting industry. Lorem Ipsum has been the induststandard dummy text ever since en an unknown printer took a galley of type scrambledmaining.', 'Message from Principal', 'aboutus1_1633961824.jpg', 'Active', '2021-09-29 10:22:33', '2021-10-11 08:40:07'),
(8, 'What Our Students Say', 'Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.', 'Rosy Janner', 'student1_1633885619.jpg', 'Active', '2021-09-29 10:23:08', '2021-10-10 11:22:07'),
(9, 'What Our Students Say', 'To accelerate the national development process by producing job market-driven, responsible, productive, welfare focused and committed human resources', 'Astha Shrestha', 'student2_1633886163.jpg', 'Active', '2021-09-29 10:23:39', '2021-10-10 11:31:17'),
(12, 'progressbar', '85', 'PROFESSIONAL TEACHER', '-', 'Active', '2021-09-29 10:25:10', '2021-10-10 10:58:05'),
(13, 'progressbar', '30', 'NEWS COURSES EVERY YEARS', '-', 'Active', '2021-09-29 10:25:45', '2021-10-10 10:58:32'),
(14, 'progressbar', '60', 'NEWS COURSES EVERY YEARS', '-', 'Active', '2021-09-29 10:26:10', '2021-10-10 10:58:52'),
(15, 'progressbar', '70', 'REGISTERED STUDENTS', '-', 'Active', '2021-09-29 10:26:38', '2021-10-10 10:59:13'),
(16, 'welcome', 'Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.', 'About Our Institution', 'event2_1633938173.jpg', 'Active', '2021-09-29 10:27:09', '2021-10-17 23:58:34'),
(17, 'google', 'https://www.google.com/', 'google', '-', 'Active', '2021-09-29 10:27:45', '2021-09-29 10:27:45'),
(18, 'twitter', 'https://twitter.com/', 'twitter', '-', 'Active', '2021-09-29 10:28:07', '2021-09-29 10:28:07'),
(19, 'youtube', 'https://www.youtube.com/', 'youtube', '-', 'Active', '2021-09-29 10:28:30', '2021-09-29 10:28:30'),
(20, 'logo', 'hello this is learn press', 'logo', 'logo_1634533864.png', 'Active', '2021-09-29 10:29:08', '2021-10-17 23:26:21'),
(21, 'learnpress', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.', 'WELCOME TO LEARNPRESS', '-', 'Active', '2021-09-29 10:45:00', '2021-10-05 02:36:59'),
(22, 'facebook', 'https://www.facebook.com/', 'Facebook', '11632150585.jpg', 'Active', '2021-10-03 11:30:34', '2021-10-03 11:32:39'),
(23, 'objective', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.', 'Objectives', 'objective1_1633959941.jpg', 'Active', '2021-10-04 03:29:47', '2021-10-18 00:00:31'),
(26, 'program', 'Painting', 'Painting', 'h61632152307.jpg', 'Active', '2021-10-05 01:19:38', '2021-10-05 01:19:38'),
(27, 'program', 'Chemestry', 'Chemestry', '81632152265.jpg', 'Active', '2021-10-05 01:20:18', '2021-10-05 01:20:18'),
(29, 'welcome tittle', 'Tmply dummy text of the printing and typesetting industry. Lorem Ipsum has been theindustry\'s standard dummy text ever since the 1500s, when an unknown printer took.', 'Welcome To Academics', 'welcomepage_1633876749.jpg', 'Active', '2021-10-10 08:59:53', '2021-10-18 02:21:21'),
(30, 'Watch Campus Life Video Tour', 'Vmply dummy text of the printing and typesetting industryorem Ipsum industry\'s standard dum an unknowramble.', 'campustour', NULL, 'Active', '2021-10-10 09:03:19', '2021-10-10 09:03:19'),
(31, 'missionaboutus', 'Tmply dummy text of the printing and typesetting indust Lorem Ipsum has been theindustry\'s standard dummy text ever since simply dummy text of the printing and etypesetting industry. Lorem Ipsum has been the induststandard dummy text ever since en an unknown printer took a galley of type scrambledmaining.', 'Mission', NULL, 'Active', '2021-10-11 08:09:25', '2021-10-11 08:20:37'),
(32, 'visionaboutus', 'Tmply dummy text of the printing and typesetting indust Lorem Ipsum has been theindustry\'s standard dummy text ever since simply dummy text of the printing and etypesetting industry. Lorem Ipsum has been the induststandard dummy text ever since en an unknown printer took a galley of type scrambledmaining.', 'vision', 'aboutus1_1633961824.jpg', 'Select', '2021-10-11 08:11:47', '2021-10-11 08:32:30'),
(33, 'message from dean', 'Tmply dummy text of the printing and typesetting indust Lorem Ipsum has been theindustry\'s standard dummy text ever since simply dummy text of the printing and etypesetting industry. Lorem Ipsum has been the induststandard dummy text ever since en an unknown printer took a galley of type scrambledmaining.Tmply dummy text of the printing and typesetting indust Lorem Ipsum has been theindustry\'s standard dummy text ever since simply dummy text of the printing and etypesetting industry. Lorem Ipsum has been the induststandard dummy text ever since en an unknown printer took a galley of type scrambledmaining.', 'Message From Dean', 'aboutus_1633960601.jpg', 'Active', '2021-10-11 08:41:07', '2021-10-11 08:42:22'),
(34, 'planning', 'Tmply dummy text of the printing and typesetting indust Lorem Ipsum has been theitry\'s snce simply dummy text of the printing.Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna euismod.Tmply dummy text of the printing and typesetting indust Lorem Ipsum has been theitr.  Tmply dummy text of the printing and typesetting indust Lorem Ipsum has been theitry\'s snce simply dummy text of the printing.Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna euismod.Tmply dummy text of the printing and typesetting indust Lorem Ipsum has been theitr.', 'Introduction', 'aboutus1_1633961824.jpg', 'Active', '2021-10-11 08:47:23', '2021-10-11 08:53:22'),
(35, 'program', 'Program Description', 'Program Name 1', 'aboutus1_1633961824.jpg', 'Active', '2021-10-11 08:54:42', '2021-10-11 08:54:42'),
(36, 'program', 'Program Description', 'Program Name 2', 'aboutus1_1633961824.jpg', 'Active', '2021-10-11 08:55:08', '2021-10-11 08:55:08'),
(37, 'program', 'Program Description', 'Program 3', 'aboutus1_1633961824.jpg', 'Active', '2021-10-11 08:55:44', '2021-10-11 08:55:44'),
(38, 'program', 'Program Description', 'Program 4', 'aboutus1_1633961824.jpg', 'Active', '2021-10-11 08:56:13', '2021-10-11 08:56:13'),
(41, 'footer_content', 'Praesent vel rutrum purus. Nam vel dui eu sus duis dignissim dignissim. Suspenetey disse at ros tecongueconsequat.Fusce sit amet rna feugiat.', 'footer', NULL, 'Active', '2021-10-17 23:42:39', '2021-10-17 23:42:39'),
(40, 'bgimage', 'Saepe ut laboris eve', 'toppartimage', 'backgroundcolor_1634105700.jpg', 'Active', '2021-10-13 00:31:48', '2021-10-13 00:31:48'),
(42, 'linkedin', 'https://www.linkedin.com', 'linkedin', NULL, 'Active', '2021-10-17 23:49:04', '2021-10-17 23:49:04');

-- --------------------------------------------------------

--
-- Table structure for table `siteinformations`
--

CREATE TABLE `siteinformations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siteinformations`
--

INSERT INTO `siteinformations` (`id`, `site_key`, `site_details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'email', 'this email key is use in footer and contact page that it represent school gmail', 'Active', '2021-10-18 01:18:45', '2021-10-18 01:18:45'),
(2, 'contact', 'this contact key is place in footer and contact page that it represent school phone number', 'Active', '2021-10-18 01:20:38', '2021-10-18 01:20:38'),
(3, 'welcome tittle', 'this key is use in home page as a tittle for welcome content', 'Active', '2021-10-18 02:18:04', '2021-10-18 02:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btnlink` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `header`, `sub_heading`, `text`, `img_link`, `btn`, `btnlink`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Slider 1', 'Best Education for Students', 'Emply dummy text of the printing and typesetting industry orem Ipsum has been the industry\'s standard dummy text ever sinceprinting and typesetting industry.', 'hello', 'slider1_1633873929.jpg', 'START A COURSE', 'aboutus', 'Active', '2021-10-10 08:15:39', '2021-10-10 08:47:11'),
(4, 'silder name 2', 'Consequatur autem a', 'Dolore dolore harum', 'Rerum cupiditate ali', 'slider2_1633874908.jpg', 'Facilis nostrum quas', 'START A COURSE', 'Active', '2021-10-16 22:18:18', '2021-10-17 11:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `post`, `img_link`, `details`, `experience`, `address`, `contact`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Rishi baralllll', 'Visual Programming', 'teacher_1633926151.jpg', 'Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.', 'Dolorem et minim con', 'rishi@gmail.com', '9826191730', 'Active', '2021-10-10 22:48:23', '2021-10-18 00:11:36'),
(2, 'Nabin gurung', 'Science', 'teacher1_1633926011.jpg', 'Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.', 'Dolorem et minim con', 'nabin@gmail.com', '9826191730', 'Active', '2021-10-10 22:36:44', '2021-10-18 00:12:04'),
(4, 'Octavia Dunlap', 'Velit voluptatem Ea', 'teacher2_1633926880.jpg', 'Ullam id distinctio', 'Minus veniam volupt', 'octavia@gmail.com', '8795564734', 'Active', '2021-10-10 22:50:02', '2021-10-18 00:12:23'),
(5, 'Rina Sarma', 'Delectus omnis labo', 'teacher3_1633926916.jpg', 'At dolor ratione eiu', 'Quis fugit dolor co', 'rina@gmail.com', '9804465836', 'Active', '2021-10-10 22:50:36', '2021-10-18 00:12:45'),
(6, 'Rupa Thapa', 'Ipsum possimus ips', 'teacher4_1633926949.jpg', 'Voluptatem Exercita', 'Libero rerum id nost', 'rupa@gmail.com', '9843562745', 'Active', '2021-10-10 22:51:09', '2021-10-18 00:13:03'),
(7, 'Alina Gurung', 'Dolor ut molestiae v', 'teacher5_1633926992.jpg', 'Cupiditate odit nece', 'Nisi vel sunt quia v', 'alina@gmail.com', '9803374657', 'Active', '2021-10-10 22:51:48', '2021-10-18 00:13:21'),
(8, 'Sunita Thapa', 'Voluptatum et animi', 'teacher6_1633927023.jpg', 'Mollit dolores rem t', 'Excepturi tempora es', 'sunita@gmail.com', '9804465836', 'Active', '2021-10-10 22:52:18', '2021-10-18 00:13:41'),
(9, 'Ritika lama', 'Quaerat incidunt nu', 'teacher7_1633927061.jpg', 'Dolore est vitae sap', 'Aliquam natus facili', 'ritika@gmail.com', '9804465836', 'Active', '2021-10-10 22:52:54', '2021-10-18 00:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `whychooseuses`
--

CREATE TABLE `whychooseuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whychooseuses`
--

INSERT INTO `whychooseuses` (`id`, `heading`, `text`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Why Choose Us??', 'Tmply Tmply dummy text of the printing and typesetting indust Lorem Ipsum has been theitry\'s snce simply dummy text of the printing.Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna euismod.Tmply dummy text of the printing and typesetting indust Lorem Ipsum has been theitr.', 'Deactive', '2021-10-10 10:24:49', '2021-10-15 05:50:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins_user`
--
ALTER TABLE `admins_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursecats`
--
ALTER TABLE `coursecats`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
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
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `messages_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siteconfigs`
--
ALTER TABLE `siteconfigs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siteinformations`
--
ALTER TABLE `siteinformations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whychooseuses`
--
ALTER TABLE `whychooseuses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins_user`
--
ALTER TABLE `admins_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coursecats`
--
ALTER TABLE `coursecats`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `g_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siteconfigs`
--
ALTER TABLE `siteconfigs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `siteinformations`
--
ALTER TABLE `siteinformations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `whychooseuses`
--
ALTER TABLE `whychooseuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
