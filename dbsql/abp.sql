-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 03:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abp`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_fasts`
--

CREATE TABLE `about_fasts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `dis` varchar(5000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_fasts`
--

INSERT INTO `about_fasts` (`id`, `title`, `dis`, `created_at`, `updated_at`) VALUES
(1, 'About us', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-08-16 16:36:34', '2023-08-16 16:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `admission_acceptance_lists`
--

CREATE TABLE `admission_acceptance_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(191) NOT NULL,
  `student_email` varchar(191) NOT NULL,
  `student_phone` varchar(191) NOT NULL,
  `student_id` varchar(191) NOT NULL,
  `student_enroll_course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admission_pending_lists`
--

CREATE TABLE `admission_pending_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(191) NOT NULL,
  `course_title_id` bigint(20) UNSIGNED NOT NULL,
  `student_email` varchar(191) NOT NULL,
  `student_phone` varchar(191) NOT NULL,
  `student_id` varchar(191) NOT NULL,
  `student_payment_status` varchar(191) DEFAULT NULL,
  `student_due_amount` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assign_batches`
--

CREATE TABLE `assign_batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `accepted_student_id` bigint(20) UNSIGNED NOT NULL,
  `course_batch_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `subject` varchar(191) DEFAULT NULL,
  `massage` varchar(5000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `massage`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@gmail.com', 'test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to', '2023-08-16 16:38:38', '2023-08-16 16:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_name` varchar(191) NOT NULL,
  `content_url` text NOT NULL,
  `content_duration` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coursecontents`
--

CREATE TABLE `coursecontents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_content_title` varchar(191) NOT NULL,
  `course_title_id` bigint(20) UNSIGNED NOT NULL,
  `course_content_link` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursecontents`
--

INSERT INTO `coursecontents` (`id`, `course_content_title`, `course_title_id`, `course_content_link`, `created_at`, `updated_at`) VALUES
(1, 'fast class', 1, 'https://www.google.com/drive/', '2023-08-16 16:39:47', '2023-08-16 16:39:47'),
(2, '2ns class', 1, 'https://www.google.com/drive/', '2023-08-16 16:40:01', '2023-08-16 16:40:01'),
(3, '3rd class', 1, 'https://www.google.com/drive/', '2023-08-16 16:40:16', '2023-08-16 16:40:16'),
(4, '1st class', 4, 'https://www.google.com/drive/', '2023-08-16 16:40:35', '2023-08-16 16:40:35'),
(5, '2nd class', 4, 'https://www.google.com/drive/', '2023-08-16 16:40:44', '2023-08-16 16:40:44'),
(6, '3rd class', 4, 'https://www.google.com/drive/', '2023-08-16 16:40:55', '2023-08-16 16:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `course_batches`
--

CREATE TABLE `course_batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name_id` bigint(20) UNSIGNED NOT NULL,
  `course_batch` varchar(191) NOT NULL,
  `course_avail_seat` varchar(191) NOT NULL,
  `course_num_class` varchar(191) NOT NULL,
  `course_fee` varchar(191) NOT NULL,
  `course_batch_start` varchar(191) NOT NULL,
  `course_batch_end` varchar(191) NOT NULL,
  `course_last_date_regist` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_category` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `course_category`, `created_at`, `updated_at`) VALUES
(1, 'IT', '2023-08-16 14:30:26', '2023-08-16 14:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `course_infos`
--

CREATE TABLE `course_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_title` varchar(191) NOT NULL,
  `course_category_id` bigint(20) UNSIGNED NOT NULL,
  `course_image` text NOT NULL,
  `course_document` text NOT NULL,
  `course_duration` varchar(191) NOT NULL,
  `fee` int(255) NOT NULL,
  `course_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_infos`
--

INSERT INTO `course_infos` (`id`, `course_title`, `course_category_id`, `course_image`, `course_document`, `course_duration`, `fee`, `course_description`, `created_at`, `updated_at`) VALUES
(1, 'java script', 1, '1692218061.Creative-Thinking-The-skill-to-think-out-of-the-box.webp', 'storage/', '3 month', 200, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged', '2023-08-16 14:34:21', '2023-08-16 14:34:21'),
(2, 'programming c#', 1, '1692219059.dorF.webp', 'storage/', '2 month', 500, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged', '2023-08-16 14:50:59', '2023-08-16 14:50:59'),
(3, 'python', 1, '1692219089.blog-top-section.webp', 'storage/', '5 month', 300, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged', '2023-08-16 14:51:29', '2023-08-16 14:51:29'),
(4, 'web develop', 1, '1692220559.Creative-Thinking-The-skill-to-think-out-of-the-box.webp', 'storage/', '2 month', 100, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-08-16 15:15:59', '2023-08-16 15:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `custom_auth_users`
--

CREATE TABLE `custom_auth_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrolls`
--

CREATE TABLE `enrolls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `number` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrolls`
--

INSERT INTO `enrolls` (`id`, `course`, `name`, `email`, `number`, `created_at`, `updated_at`) VALUES
(1, 'programming c#', 'test', 'test@gmail.com', '01732329084', '2023-08-16 16:28:38', '2023-08-16 16:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `folder_name` varchar(191) NOT NULL,
  `file` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_views`
--

CREATE TABLE `gallery_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_views`
--

INSERT INTO `gallery_views` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1692225082.1ST-GC-COVER-abp.webp', '2023-08-16 16:31:22', '2023-08-16 16:31:22'),
(2, '1692225087.2ND-GC-COVER-abp.webp', '2023-08-16 16:31:27', '2023-08-16 16:31:27'),
(3, '1692225094.3RD-GC-COVER-abp.webp', '2023-08-16 16:31:34', '2023-08-16 16:31:34'),
(4, '1692225101.ABP-at-Saint-Martin-21-DP.webp', '2023-08-16 16:31:41', '2023-08-16 16:31:41'),
(5, '1692225109.islamic-capital-market-sukuk.webp', '2023-08-16 16:31:49', '2023-08-16 16:31:49'),
(6, '1692225116.abp-super-league-2022-dp.webp', '2023-08-16 16:31:56', '2023-08-16 16:31:56');

-- --------------------------------------------------------

--
-- Table structure for table `home_1sts`
--

CREATE TABLE `home_1sts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `dis` varchar(5000) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_1sts`
--

INSERT INTO `home_1sts` (`id`, `title`, `dis`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Pursue UK Qualifications and get globally recognised', 'We are one of the most career-oriented skills development training institutes offering globally recognised PGD and Certificate Courses worldwide. ABP is approved and endorsed by several international awarding and regulatory bodies.', '1692221045.banner.jpg', '2023-08-16 15:24:05', '2023-08-16 15:24:05');

-- --------------------------------------------------------

--
-- Table structure for table `home_2nds`
--

CREATE TABLE `home_2nds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_title` varchar(191) NOT NULL,
  `s_title` varchar(191) NOT NULL,
  `t_title` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_2nds`
--

INSERT INTO `home_2nds` (`id`, `f_title`, `s_title`, `t_title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'For the very first time in Bangladesh!', 'Postgraduate Diploma in', 'Data Science & Business Analytics See More', '1692221131.meal.webp', '2023-08-16 15:25:31', '2023-08-16 15:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `home_3rds`
--

CREATE TABLE `home_3rds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `batch` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_4ths`
--

CREATE TABLE `home_4ths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `dis` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_4ths`
--

INSERT INTO `home_4ths` (`id`, `title`, `dis`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Live Online Class', 'State-of-the-art Student Portal', '1692221276.Artboard41.webp', '2023-08-16 15:27:56', '2023-08-16 15:27:56'),
(2, 'High Profile Trainers', 'Be equipped with Industry Knowledge and Best Practice', '1692221319.Artboard41.webp', '2023-08-16 15:28:39', '2023-08-16 15:28:39'),
(3, 'Global Certification', 'Get connected with ABP Professional network', '1692221346.Artboard41.webp', '2023-08-16 15:29:06', '2023-08-16 15:29:06'),
(4, 'Get connected', 'Be equipped with Industry Knowledge and Best Practice', '1692221776.Artboard41.webp', '2023-08-16 15:32:43', '2023-08-16 15:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `home_5ths`
--

CREATE TABLE `home_5ths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `iframe` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_5ths`
--

INSERT INTO `home_5ths` (`id`, `image`, `title`, `iframe`, `created_at`, `updated_at`) VALUES
(1, '1692223849.Video.webp', 'Build promising careers for ABP learners and staff by enhancing the network of professionals.', 'https://www.youtube.com/embed/wBxEIQ1io0Y', '2023-08-16 16:05:07', '2023-08-16 16:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `home_6ths`
--

CREATE TABLE `home_6ths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `dis` varchar(5000) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_6ths`
--

INSERT INTO `home_6ths` (`id`, `title`, `dis`, `image`, `created_at`, `updated_at`) VALUES
(1, 'সাধ্যের অতিরিক্ত Stress নিচ্ছেন নাতো ?', 'আমরা অনেকে জব স্ট্রেসের শিকার হয়ে থাকি। স্ট্রেস পুরোটা কন্ট্রোল না করা গেলেও স্ট্রেস ম্যানেজ করার কিছু পদ্ধতি আছে। যেসব চিন্তা ও কাজ স্ট্রেস ট্রিগার করে সেগুলির কিছু কিছু আছে যেগুলি থেকে বাঁচা যায়...', '1692224152.blog-1.webp', '2023-08-16 16:15:52', '2023-08-16 16:15:52'),
(2, 'Online Education Revolution in bangladesh', 'In recent years, Bangladesh has witnessed a notable rise in the adoption of online education. Numerous causes, notably the COVID-19 epidemic....', '1692224189.dorF.webp', '2023-08-16 16:16:29', '2023-08-16 16:16:29'),
(3, 'বিশ্ব সেরা HR ম্যানেজার হয়ে উঠার রহস্য!', 'তারা কি শুধুই ট্রান্সফার উইন্ডোতে বিশ্বসেরা প্লেয়ারদের সাইন করে এই আশা নিয়ে বসে থাকেন যে তাঁর টিম এই বছর ঘরে বাইরে সব ট্রফি জিতে নিবে? নাকি এর বাইরে গিয়েও তাদের হাতে থাকা রিসোর্স নিয়েই তারা ...', '1692224351.blog-one.webp', '2023-08-16 16:17:09', '2023-08-16 16:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_26_092111_create_files', 1),
(6, '2023_05_04_120018_create_contents', 1),
(7, '2023_05_10_085747_create_course_categories_table', 1),
(8, '2023_05_11_041148_create_course_infos_table', 1),
(9, '2023_05_11_101324_create_coursecontents_table', 1),
(10, '2023_05_16_111542_create_course_batches_table', 1),
(11, '2023_05_18_090836_create_custom_auth_users_table', 1),
(12, '2023_05_19_123805_create_admission_pending_lists_table', 1),
(13, '2023_05_20_111437_create_admission_acceptance_lists', 1),
(14, '2023_05_22_104245_create_assign_batches_table', 1),
(15, '2023_06_04_135342_home_1sts', 1),
(16, '2023_06_04_172535_create_home_2nds_table', 1),
(17, '2023_06_06_081733_home_3rd', 1),
(18, '2023_06_06_103201_create_home_4ths_table', 1),
(19, '2023_06_06_113055_create_home_5ths_table', 1),
(20, '2023_06_06_120947_create_home_6ths_table', 1),
(21, '2023_06_06_154101_create_gallery_views_table', 1),
(22, '2023_06_12_193040_create_trainer_adds_table', 1),
(23, '2023_06_13_093221_create_about_fasts_table', 1),
(24, '2023_07_30_183638_create_enrolls_table', 1),
(25, '2023_08_06_175552_create_contacts_table', 1),
(26, '2023_09_29_205508_create_paymants_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymants`
--

CREATE TABLE `paymants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) NOT NULL,
  `trx` varchar(191) NOT NULL,
  `course_id` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainer_adds`
--

CREATE TABLE `trainer_adds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `detail` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `role` varchar(191) NOT NULL DEFAULT '0',
  `apruv` varchar(191) NOT NULL DEFAULT 'notapruv',
  `course_infos_id` int(192) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `apruv`, `course_infos_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'seyam', 'seyam@gmail.com', '1', 'apruv', 0, NULL, '$2y$10$nz0x7gDJXRKP0hJmHy/5TuLGfUJnNty4oPXBtuJZcvN1kRlfmyJY6', NULL, NULL, NULL),
(3, 'user', 'user@gmail.com', '0', 'notapruv', 0, NULL, '$2y$10$eMRRFbJg7sXDDENhqcyROOvGyZY0bgDghf4/85oNksG1OAt51gDOe', NULL, '2023-09-29 14:39:34', '2023-09-29 14:39:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_fasts`
--
ALTER TABLE `about_fasts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_acceptance_lists`
--
ALTER TABLE `admission_acceptance_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admission_acceptance_lists_student_enroll_course_id_foreign` (`student_enroll_course_id`);

--
-- Indexes for table `admission_pending_lists`
--
ALTER TABLE `admission_pending_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admission_pending_lists_course_title_id_foreign` (`course_title_id`);

--
-- Indexes for table `assign_batches`
--
ALTER TABLE `assign_batches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assign_batches_accepted_student_id_foreign` (`accepted_student_id`),
  ADD KEY `assign_batches_course_batch_id_foreign` (`course_batch_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursecontents`
--
ALTER TABLE `coursecontents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coursecontents_course_title_id_foreign` (`course_title_id`);

--
-- Indexes for table `course_batches`
--
ALTER TABLE `course_batches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_batches_course_name_id_foreign` (`course_name_id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_infos`
--
ALTER TABLE `course_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_infos_course_category_id_foreign` (`course_category_id`);

--
-- Indexes for table `custom_auth_users`
--
ALTER TABLE `custom_auth_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolls`
--
ALTER TABLE `enrolls`
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
-- Indexes for table `gallery_views`
--
ALTER TABLE `gallery_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_1sts`
--
ALTER TABLE `home_1sts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_2nds`
--
ALTER TABLE `home_2nds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_3rds`
--
ALTER TABLE `home_3rds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_4ths`
--
ALTER TABLE `home_4ths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_5ths`
--
ALTER TABLE `home_5ths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_6ths`
--
ALTER TABLE `home_6ths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `paymants`
--
ALTER TABLE `paymants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `trainer_adds`
--
ALTER TABLE `trainer_adds`
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
-- AUTO_INCREMENT for table `about_fasts`
--
ALTER TABLE `about_fasts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_acceptance_lists`
--
ALTER TABLE `admission_acceptance_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admission_pending_lists`
--
ALTER TABLE `admission_pending_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_batches`
--
ALTER TABLE `assign_batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coursecontents`
--
ALTER TABLE `coursecontents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course_batches`
--
ALTER TABLE `course_batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_infos`
--
ALTER TABLE `course_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `custom_auth_users`
--
ALTER TABLE `custom_auth_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrolls`
--
ALTER TABLE `enrolls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_views`
--
ALTER TABLE `gallery_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home_1sts`
--
ALTER TABLE `home_1sts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_2nds`
--
ALTER TABLE `home_2nds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_3rds`
--
ALTER TABLE `home_3rds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_4ths`
--
ALTER TABLE `home_4ths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_5ths`
--
ALTER TABLE `home_5ths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_6ths`
--
ALTER TABLE `home_6ths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `paymants`
--
ALTER TABLE `paymants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainer_adds`
--
ALTER TABLE `trainer_adds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admission_acceptance_lists`
--
ALTER TABLE `admission_acceptance_lists`
  ADD CONSTRAINT `admission_acceptance_lists_student_enroll_course_id_foreign` FOREIGN KEY (`student_enroll_course_id`) REFERENCES `course_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admission_pending_lists`
--
ALTER TABLE `admission_pending_lists`
  ADD CONSTRAINT `admission_pending_lists_course_title_id_foreign` FOREIGN KEY (`course_title_id`) REFERENCES `course_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `assign_batches`
--
ALTER TABLE `assign_batches`
  ADD CONSTRAINT `assign_batches_accepted_student_id_foreign` FOREIGN KEY (`accepted_student_id`) REFERENCES `admission_acceptance_lists` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assign_batches_course_batch_id_foreign` FOREIGN KEY (`course_batch_id`) REFERENCES `course_batches` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coursecontents`
--
ALTER TABLE `coursecontents`
  ADD CONSTRAINT `coursecontents_course_title_id_foreign` FOREIGN KEY (`course_title_id`) REFERENCES `course_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_batches`
--
ALTER TABLE `course_batches`
  ADD CONSTRAINT `course_batches_course_name_id_foreign` FOREIGN KEY (`course_name_id`) REFERENCES `course_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_infos`
--
ALTER TABLE `course_infos`
  ADD CONSTRAINT `course_infos_course_category_id_foreign` FOREIGN KEY (`course_category_id`) REFERENCES `course_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
