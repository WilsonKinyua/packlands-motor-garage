-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 01, 2021 at 04:35 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `packlands-motor`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us_pages`
--

CREATE TABLE `about_us_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us_pages`
--

INSERT INTO `about_us_pages` (`id`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing eliter. Corporis voluptatibu suscipit perferend dolor sit amet, consectetur adipisicing elit. Corporis voluptati buneque,assumenda maxime aspernatur porro.<br>suscipit perferend aspernatur porro, quam suscipit quibusdam. Commodi eum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing eliter. Corporis voluptatibu suscipit perferend dolor sit amet, consectetur adipisicing elit. Corporis voluptati buneque,assumenda maxime aspernatur porro.<br>suscipit perferend aspernatur porro, quam suscipit quibusdam. Commodi eum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing eliter. Corporis voluptatibu suscipit perferend dolor sit amet, consectetur adipisicing elit. Corporis voluptati buneque,assumenda maxime aspernatur porro.<br>suscipit perferend aspernatur porro, quam suscipit quibusdam. Commodi eum.</p>', '2021-09-01 09:47:32', '2021-09-01 09:47:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `audit_logs`
--

CREATE TABLE `audit_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `host` varchar(46) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `audit_logs`
--

INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES
(1, 'audit:created', 1, 'App\\Models\\Service#1', 1, '{\"name\":\"ENGINE DIAGNOSTIC\",\"price\":\"6000\",\"description\":\"<p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.<\\/p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.<\\/p>\",\"updated_at\":\"2021-09-01 10:41:30\",\"created_at\":\"2021-09-01 10:41:30\",\"id\":1,\"service_photo\":null,\"media\":[]}', '127.0.0.1', '2021-09-01 07:41:31', '2021-09-01 07:41:31'),
(2, 'audit:created', 1, 'App\\Models\\ServiceOfferedBy#1', 1, '{\"expert_id\":\"2\",\"updated_at\":\"2021-09-01 11:38:20\",\"created_at\":\"2021-09-01 11:38:20\",\"id\":1}', '127.0.0.1', '2021-09-01 08:38:20', '2021-09-01 08:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'News title here it is', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloribus facere perferendis eveniet ipsam reiciendis cumque aspernatur natus! Voluptatem laudantium totam, quia reiciendis quibusdam voluptate architecto impedit id iste rem mollitia enim reprehenderit fugit exercitationem ab placeat debitis vel excepturi molestiae laboriosam aut. Possimus expedita sint neque voluptatibus, odio, architecto, excepturi corrupti magnam sunt ipsa voluptatem consequuntur iusto quo, molestiae dolorem repudiandae. Consectetur dolorem placeat ratione eum quasi delectus, corrupti.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloribus facere perferendis eveniet ipsam reiciendis cumque aspernatur natus! Voluptatem laudantium totam, quia reiciendis quibusdam voluptate architecto impedit id iste rem mollitia enim reprehenderit fugit exercitationem ab placeat debitis vel excepturi molestiae laboriosam aut. Possimus expedita sint neque voluptatibus, odio, architecto, excepturi corrupti magnam sunt ipsa voluptatem consequuntur iusto quo, molestiae dolorem repudiandae. Consectetur dolorem placeat ratione eum quasi delectus, corrupti.</p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.', '2021-09-01 08:41:13', '2021-09-01 08:41:13', NULL),
(2, 'News title here it is', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloribus facere perferendis eveniet ipsam reiciendis cumque aspernatur natus! Voluptatem laudantium totam, quia reiciendis quibusdam voluptate architecto impedit id iste rem mollitia enim reprehenderit fugit exercitationem ab placeat debitis vel excepturi molestiae laboriosam aut. Possimus expedita sint neque voluptatibus, odio, architecto, excepturi corrupti magnam sunt ipsa voluptatem consequuntur iusto quo, molestiae dolorem repudiandae. Consectetur dolorem placeat ratione eum quasi delectus, corrupti.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloribus facere perferendis eveniet ipsam reiciendis cumque aspernatur natus! Voluptatem laudantium totam, quia reiciendis quibusdam voluptate architecto impedit id iste rem mollitia enim reprehenderit fugit exercitationem ab placeat debitis vel excepturi molestiae laboriosam aut. Possimus expedita sint neque voluptatibus, odio, architecto, excepturi corrupti magnam sunt ipsa voluptatem consequuntur iusto quo, molestiae dolorem repudiandae. Consectetur dolorem placeat ratione eum quasi delectus, corrupti.</p>', '2021-09-01 08:41:13', '2021-09-01 08:41:13', NULL),
(3, 'News title here it is', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloribus facere perferendis eveniet ipsam reiciendis cumque aspernatur natus! Voluptatem laudantium totam, quia reiciendis quibusdam voluptate architecto impedit id iste rem mollitia enim reprehenderit fugit exercitationem ab placeat debitis vel excepturi molestiae laboriosam aut. Possimus expedita sint neque voluptatibus, odio, architecto, excepturi corrupti magnam sunt ipsa voluptatem consequuntur iusto quo, molestiae dolorem repudiandae. Consectetur dolorem placeat ratione eum quasi delectus, corrupti.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloribus facere perferendis eveniet ipsam reiciendis cumque aspernatur natus! Voluptatem laudantium totam, quia reiciendis quibusdam voluptate architecto impedit id iste rem mollitia enim reprehenderit fugit exercitationem ab placeat debitis vel excepturi molestiae laboriosam aut. Possimus expedita sint neque voluptatibus, odio, architecto, excepturi corrupti magnam sunt ipsa voluptatem consequuntur iusto quo, molestiae dolorem repudiandae. Consectetur dolorem placeat ratione eum quasi delectus, corrupti.</p>', '2021-09-01 08:41:13', '2021-09-01 08:41:13', NULL),
(4, 'News title here it is', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloribus facere perferendis eveniet ipsam reiciendis cumque aspernatur natus! Voluptatem laudantium totam, quia reiciendis quibusdam voluptate architecto impedit id iste rem mollitia enim reprehenderit fugit exercitationem ab placeat debitis vel excepturi molestiae laboriosam aut. Possimus expedita sint neque voluptatibus, odio, architecto, excepturi corrupti magnam sunt ipsa voluptatem consequuntur iusto quo, molestiae dolorem repudiandae. Consectetur dolorem placeat ratione eum quasi delectus, corrupti.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloribus facere perferendis eveniet ipsam reiciendis cumque aspernatur natus! Voluptatem laudantium totam, quia reiciendis quibusdam voluptate architecto impedit id iste rem mollitia enim reprehenderit fugit exercitationem ab placeat debitis vel excepturi molestiae laboriosam aut. Possimus expedita sint neque voluptatibus, odio, architecto, excepturi corrupti magnam sunt ipsa voluptatem consequuntur iusto quo, molestiae dolorem repudiandae. Consectetur dolorem placeat ratione eum quasi delectus, corrupti.</p>', '2021-09-01 08:41:13', '2021-09-01 08:41:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_year` int(11) NOT NULL,
  `car_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_wheels` int(11) NOT NULL,
  `extra_services` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preffered_date_time_of_booking` date NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `type_of_service_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `car_name`, `car_type`, `car_year`, `car_model`, `number_of_wheels`, `extra_services`, `preffered_date_time_of_booking`, `name`, `email`, `phone`, `address`, `message`, `created_at`, `updated_at`, `deleted_at`, `type_of_service_id`) VALUES
(1, 'Violet Levine', 'Raven Hartman', 2005, 'Libby Huber', 558, NULL, '2020-08-20', 'Herman Wise', 'zysucit@mailinator.com', 'Quemby Stanton', 'moluqe@mailinator.com', 'Fugiat aspernatur au', '2021-09-01 08:16:53', '2021-09-01 08:16:53', NULL, 5),
(2, 'Violet Levine', 'Raven Hartman', 2005, 'Libby Huber', 558, NULL, '2020-08-20', 'Herman Wise', 'zysucit@mailinator.com', 'Quemby Stanton', 'moluqe@mailinator.com', 'Fugiat aspernatur au', '2021-09-01 08:18:31', '2021-09-01 08:18:31', NULL, 5),
(3, 'Violet Levine', 'Raven Hartman', 2005, 'Libby Huber', 558, NULL, '2020-08-20', 'Herman Wise', 'zysucit@mailinator.com', 'Quemby Stanton', 'moluqe@mailinator.com', 'Fugiat aspernatur au', '2021-09-01 08:19:42', '2021-09-01 08:19:42', NULL, 5),
(4, 'Violet Levine', 'Raven Hartman', 2005, 'Libby Huber', 558, NULL, '2020-08-20', 'Herman Wise', 'zysucit@mailinator.com', 'Quemby Stanton', 'moluqe@mailinator.com', 'Fugiat aspernatur au', '2021-09-01 08:20:08', '2021-09-01 08:20:08', NULL, 5),
(5, 'Macey Saunders', 'Emerson Velazquez', 1974, 'Marsden Mcdowell', 480, NULL, '1974-09-06', 'Doris Chandler', 'cybiqas@mailinator.com', 'Reed Best', 'himuco@mailinator.com', 'Delectus placeat c', '2021-09-01 08:23:25', '2021-09-01 08:23:25', NULL, 7),
(6, 'Hillary Marshall', 'Porter Spence', 2016, 'Hayfa Shepherd', 61, NULL, '2019-11-05', 'Chester Mccall', 'hari@mailinator.com', 'Marah Valdez', 'xapo@mailinator.com', 'Mollitia ullam eu si', '2021-09-01 08:23:50', '2021-09-01 08:23:50', NULL, 4),
(7, 'Talon Stark', 'Kay Wynn', 2010, 'Zane Cameron', 196, NULL, '2008-06-22', 'Timon Blair', 'bobavon@mailinator.com', 'Margaret Hutchinson', 'jodajala@mailinator.com', 'Natus qui magni veni', '2021-09-01 08:24:02', '2021-09-01 08:24:02', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `crm_customers`
--

CREATE TABLE `crm_customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_documents`
--

CREATE TABLE `crm_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_notes`
--

CREATE TABLE `crm_notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_statuses`
--

CREATE TABLE `crm_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crm_statuses`
--

INSERT INTO `crm_statuses` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Lead', '2021-08-23 17:08:02', '2021-08-23 17:08:02', NULL),
(2, 'Customer', '2021-08-23 17:08:02', '2021-08-23 17:08:02', NULL),
(3, 'Partner', '2021-08-23 17:08:02', '2021-08-23 17:08:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `worked_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `worked_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'WHEEL ALIGNMENT', 'John Doe', '2021-09-01 10:06:26', '2021-09-01 10:06:26', NULL),
(2, 'WHEEL ALIGNMENT', 'John Doe', '2021-09-01 10:06:26', '2021-09-01 10:06:26', NULL),
(3, 'WHEEL ALIGNMENT', 'John Doe', '2021-09-01 10:06:26', '2021-09-01 10:06:26', NULL),
(4, 'WHEEL ALIGNMENT', 'John Doe', '2021-09-01 10:06:26', '2021-09-01 10:06:26', NULL),
(5, 'WHEEL ALIGNMENT', 'John Doe', '2021-09-01 10:06:26', '2021-09-01 10:06:26', NULL),
(6, 'WHEEL ALIGNMENT', 'John Doe', '2021-09-01 10:06:26', '2021-09-01 10:06:26', NULL),
(7, 'WHEEL ALIGNMENT', 'John Doe', '2021-09-01 10:06:26', '2021-09-01 10:06:26', NULL),
(8, 'WHEEL ALIGNMENT', 'John Doe', '2021-09-01 10:06:26', '2021-09-01 10:06:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Slider', 1, '88f3cd48-ad2a-4d19-8d14-a61dc18d6bad', 'image', '612f5517d5609_bg21', '612f5517d5609_bg21.jpg', 'image/jpeg', 'public', 'public', 175491, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 1, '2021-09-01 07:25:30', '2021-09-01 07:25:32'),
(2, 'App\\Models\\Slider', 2, 'd812c9b2-6f4a-4dfd-a4f4-93d3a7c951ec', 'image', '612f55988d8a7_bg22', '612f55988d8a7_bg22.jpg', 'image/jpeg', 'public', 'public', 183481, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 2, '2021-09-01 07:27:38', '2021-09-01 07:27:38'),
(3, 'App\\Models\\Slider', 3, 'edde3679-c246-462a-b4ef-cfe4950c8d3c', 'image', '612f55f711579_bg23', '612f55f711579_bg23.jpg', 'image/jpeg', 'public', 'public', 219450, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 3, '2021-09-01 07:29:12', '2021-09-01 07:29:13'),
(4, 'App\\Models\\Service', 1, '87b861d1-c8bf-46f8-85d4-f66ce7a6289b', 'service_photo', '612f58c211794_1', '612f58c211794_1.jpg', 'image/jpeg', 'public', 'public', 52379, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 4, '2021-09-01 07:41:31', '2021-09-01 07:41:31'),
(5, 'App\\Models\\Service', 3, '16175df5-a4be-459b-b6b3-f1b1a827fb50', 'service_photo', '612f591ac20b6_2', '612f591ac20b6_2.jpg', 'image/jpeg', 'public', 'public', 42216, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 5, '2021-09-01 07:42:37', '2021-09-01 07:42:37'),
(6, 'App\\Models\\Service', 4, 'f751cb35-a2dd-4e6c-9e94-1768980177c1', 'service_photo', '612f592379844_3', '612f592379844_3.jpg', 'image/jpeg', 'public', 'public', 31918, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 6, '2021-09-01 07:42:44', '2021-09-01 07:42:45'),
(7, 'App\\Models\\Service', 5, '5f27b50a-68e5-417c-bd05-20b305716388', 'service_photo', '612f592b50195_4', '612f592b50195_4.jpg', 'image/jpeg', 'public', 'public', 40003, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 7, '2021-09-01 07:42:52', '2021-09-01 07:42:52'),
(8, 'App\\Models\\Service', 6, '9bd2363a-0295-43e3-9dd5-b6622c716b77', 'service_photo', '612f59328f66a_5', '612f59328f66a_5.jpg', 'image/jpeg', 'public', 'public', 32355, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 8, '2021-09-01 07:42:59', '2021-09-01 07:43:00'),
(9, 'App\\Models\\Service', 7, 'f503939b-531c-4b89-8bd5-e30d831b4068', 'service_photo', '612f593a31b89_6', '612f593a31b89_6.jpg', 'image/jpeg', 'public', 'public', 59803, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 9, '2021-09-01 07:43:07', '2021-09-01 07:43:07'),
(10, 'App\\Models\\User', 2, 'ae86028e-8974-477b-a239-ce20bc62577b', 'avatar', '612f6383a29db_1', '612f6383a29db_1.jpg', 'image/jpeg', 'public', 'public', 50177, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 10, '2021-09-01 08:27:20', '2021-09-01 08:27:20'),
(11, 'App\\Models\\User', 3, '83d5762f-5a40-4b72-bf19-5d31bcb865e8', 'avatar', '612f642bb2407_2', '612f642bb2407_2.jpg', 'image/jpeg', 'public', 'public', 40916, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 11, '2021-09-01 08:29:53', '2021-09-01 08:29:53'),
(12, 'App\\Models\\User', 4, 'eb7a1f52-6111-4aa3-99b6-3029c215ef13', 'avatar', '612f643762ca4_4', '612f643762ca4_4.jpg', 'image/jpeg', 'public', 'public', 45899, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 12, '2021-09-01 08:30:03', '2021-09-01 08:30:03'),
(13, 'App\\Models\\User', 5, '7014847b-32dc-4239-9d4b-88394f2033bd', 'avatar', '612f64417d709_12', '612f64417d709_12.jpg', 'image/jpeg', 'public', 'public', 22442, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 13, '2021-09-01 08:30:13', '2021-09-01 08:30:13'),
(14, 'App\\Models\\User', 6, 'e1cc840c-7f76-4f96-a147-95186dbb4c25', 'avatar', '612f64520dfa5_13', '612f64520dfa5_13.jpg', 'image/jpeg', 'public', 'public', 25399, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 14, '2021-09-01 08:30:29', '2021-09-01 08:30:30'),
(15, 'App\\Models\\User', 7, '9c1f6b1e-a03b-4be0-b1be-b5e9a997e9c7', 'avatar', '612f645f59372_5', '612f645f59372_5.jpg', 'image/jpeg', 'public', 'public', 43028, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 15, '2021-09-01 08:30:42', '2021-09-01 08:30:43'),
(16, 'App\\Models\\User', 1, '37ef497a-175c-411b-ab2f-57d5679a6498', 'avatar', '612f6473d08bf_sm-8', '612f6473d08bf_sm-8.jpg', 'image/jpeg', 'public', 'public', 28812, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 16, '2021-09-01 08:31:02', '2021-09-01 08:31:02'),
(17, 'App\\Models\\Blog', 1, 'f64688a5-3a44-4829-be8b-500f8b030e44', 'photo', '612f66d7ae64e_1', '612f66d7ae64e_1.jpg', 'image/jpeg', 'public', 'public', 39735, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 17, '2021-09-01 08:41:13', '2021-09-01 08:41:13'),
(18, 'App\\Models\\Blog', 2, 'e835db1e-a254-4091-ba31-ff6f484cafec', 'photo', '612f66f950daf_2', '612f66f950daf_2.jpg', 'image/jpeg', 'public', 'public', 45461, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 18, '2021-09-01 08:41:46', '2021-09-01 08:41:47'),
(19, 'App\\Models\\Blog', 3, 'e240b63e-338a-411b-aaed-2c6e0717817f', 'photo', '612f66fff13f2_3', '612f66fff13f2_3.jpg', 'image/jpeg', 'public', 'public', 24777, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 19, '2021-09-01 08:41:53', '2021-09-01 08:41:53'),
(20, 'App\\Models\\Blog', 4, 'b388ef5a-fd4b-47ae-b18e-6ddf86b56bc1', 'photo', '612f67078ae62_4', '612f67078ae62_4.jpg', 'image/jpeg', 'public', 'public', 19162, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 20, '2021-09-01 08:42:00', '2021-09-01 08:42:00'),
(21, 'App\\Models\\Gallery', 1, '5593aab1-f815-46e6-87bc-6cffa0496893', 'image', '612f7ad022260_2', '612f7ad022260_2.jpg', 'image/jpeg', 'public', 'public', 31031, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 21, '2021-09-01 10:06:26', '2021-09-01 10:06:26'),
(22, 'App\\Models\\Gallery', 2, '8c1872b6-dd53-4d58-a26f-a466ae118c0a', 'image', '612f7b0b296c7_2', '612f7b0b296c7_2.jpg', 'image/jpeg', 'public', 'public', 31031, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 22, '2021-09-01 10:07:23', '2021-09-01 10:07:24'),
(23, 'App\\Models\\Gallery', 3, '00afe0a7-6d25-4215-a21b-8217bab04063', 'image', '612f7b135a212_3', '612f7b135a212_3.jpg', 'image/jpeg', 'public', 'public', 33414, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 23, '2021-09-01 10:07:32', '2021-09-01 10:07:32'),
(24, 'App\\Models\\Gallery', 4, '886c8397-fe6b-480f-8bb0-05a24fbf00a4', 'image', '612f7b1ae0b6b_4', '612f7b1ae0b6b_4.jpg', 'image/jpeg', 'public', 'public', 35357, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 24, '2021-09-01 10:07:40', '2021-09-01 10:07:41'),
(25, 'App\\Models\\Gallery', 5, '004e826f-9f78-483c-9d05-52a881246d42', 'image', '612f7b237fb1c_5', '612f7b237fb1c_5.jpg', 'image/jpeg', 'public', 'public', 18713, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 25, '2021-09-01 10:07:48', '2021-09-01 10:07:48'),
(26, 'App\\Models\\Gallery', 6, '368c77e6-263f-4cf4-ba22-d8637a972063', 'image', '612f7b2aba8ea_6', '612f7b2aba8ea_6.jpg', 'image/jpeg', 'public', 'public', 20682, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 26, '2021-09-01 10:07:55', '2021-09-01 10:07:56'),
(27, 'App\\Models\\Gallery', 7, 'c6971836-7e36-426d-940a-fa6dc541b6b0', 'image', '612f7b33c101b_gallery-lg1', '612f7b33c101b_gallery-lg1.jpg', 'image/jpeg', 'public', 'public', 71386, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 27, '2021-09-01 10:08:05', '2021-09-01 10:08:05'),
(28, 'App\\Models\\Gallery', 8, '033399e8-e55f-4400-8fd9-1d57ab242fc4', 'image', '612f7b3e8c8df_gallery-lg4', '612f7b3e8c8df_gallery-lg4.jpg', 'image/jpeg', 'public', 'public', 53127, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 28, '2021-09-01 10:08:16', '2021-09-01 10:08:16');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2021_09_01_000001_create_audit_logs_table', 1),
(4, '2021_09_01_000002_create_media_table', 1),
(5, '2021_09_01_000003_create_sliders_table', 1),
(6, '2021_09_01_000004_create_galleries_table', 1),
(7, '2021_09_01_000005_create_blogs_table', 1),
(8, '2021_09_01_000006_create_bookings_table', 1),
(9, '2021_09_01_000007_create_about_us_pages_table', 1),
(10, '2021_09_01_000008_create_service_offered_bies_table', 1),
(11, '2021_09_01_000009_create_services_table', 1),
(12, '2021_09_01_000010_create_crm_documents_table', 1),
(13, '2021_09_01_000011_create_crm_notes_table', 1),
(14, '2021_09_01_000012_create_crm_customers_table', 1),
(15, '2021_09_01_000013_create_crm_statuses_table', 1),
(16, '2021_09_01_000014_create_users_table', 1),
(17, '2021_09_01_000015_create_roles_table', 1),
(18, '2021_09_01_000016_create_permissions_table', 1),
(19, '2021_09_01_000017_create_service_service_offered_by_pivot_table', 1),
(20, '2021_09_01_000018_create_role_user_pivot_table', 1),
(21, '2021_09_01_000019_create_permission_role_pivot_table', 1),
(22, '2021_09_01_000020_add_relationship_fields_to_crm_notes_table', 1),
(23, '2021_09_01_000021_add_relationship_fields_to_crm_customers_table', 1),
(24, '2021_09_01_000022_add_relationship_fields_to_crm_documents_table', 1),
(25, '2021_09_01_000023_add_relationship_fields_to_service_offered_bies_table', 1),
(26, '2021_09_01_000024_add_relationship_fields_to_bookings_table', 1),
(27, '2021_09_01_000025_add_approval_fields', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'basic_c_r_m_access', NULL, NULL, NULL),
(18, 'crm_status_create', NULL, NULL, NULL),
(19, 'crm_status_edit', NULL, NULL, NULL),
(20, 'crm_status_show', NULL, NULL, NULL),
(21, 'crm_status_delete', NULL, NULL, NULL),
(22, 'crm_status_access', NULL, NULL, NULL),
(23, 'crm_customer_create', NULL, NULL, NULL),
(24, 'crm_customer_edit', NULL, NULL, NULL),
(25, 'crm_customer_show', NULL, NULL, NULL),
(26, 'crm_customer_delete', NULL, NULL, NULL),
(27, 'crm_customer_access', NULL, NULL, NULL),
(28, 'crm_note_create', NULL, NULL, NULL),
(29, 'crm_note_edit', NULL, NULL, NULL),
(30, 'crm_note_show', NULL, NULL, NULL),
(31, 'crm_note_delete', NULL, NULL, NULL),
(32, 'crm_note_access', NULL, NULL, NULL),
(33, 'crm_document_create', NULL, NULL, NULL),
(34, 'crm_document_edit', NULL, NULL, NULL),
(35, 'crm_document_show', NULL, NULL, NULL),
(36, 'crm_document_delete', NULL, NULL, NULL),
(37, 'crm_document_access', NULL, NULL, NULL),
(38, 'audit_log_show', NULL, NULL, NULL),
(39, 'audit_log_access', NULL, NULL, NULL),
(40, 'services_management_access', NULL, NULL, NULL),
(41, 'service_create', NULL, NULL, NULL),
(42, 'service_edit', NULL, NULL, NULL),
(43, 'service_show', NULL, NULL, NULL),
(44, 'service_delete', NULL, NULL, NULL),
(45, 'service_access', NULL, NULL, NULL),
(46, 'service_offered_by_create', NULL, NULL, NULL),
(47, 'service_offered_by_edit', NULL, NULL, NULL),
(48, 'service_offered_by_show', NULL, NULL, NULL),
(49, 'service_offered_by_delete', NULL, NULL, NULL),
(50, 'service_offered_by_access', NULL, NULL, NULL),
(51, 'system_setting_access', NULL, NULL, NULL),
(52, 'about_us_page_create', NULL, NULL, NULL),
(53, 'about_us_page_edit', NULL, NULL, NULL),
(54, 'about_us_page_show', NULL, NULL, NULL),
(55, 'about_us_page_delete', NULL, NULL, NULL),
(56, 'about_us_page_access', NULL, NULL, NULL),
(57, 'booking_show', NULL, NULL, NULL),
(58, 'booking_access', NULL, NULL, NULL),
(59, 'blog_create', NULL, NULL, NULL),
(60, 'blog_edit', NULL, NULL, NULL),
(61, 'blog_show', NULL, NULL, NULL),
(62, 'blog_delete', NULL, NULL, NULL),
(63, 'blog_access', NULL, NULL, NULL),
(64, 'gallery_create', NULL, NULL, NULL),
(65, 'gallery_edit', NULL, NULL, NULL),
(66, 'gallery_show', NULL, NULL, NULL),
(67, 'gallery_delete', NULL, NULL, NULL),
(68, 'gallery_access', NULL, NULL, NULL),
(69, 'slider_create', NULL, NULL, NULL),
(70, 'slider_edit', NULL, NULL, NULL),
(71, 'slider_show', NULL, NULL, NULL),
(72, 'slider_delete', NULL, NULL, NULL),
(73, 'slider_access', NULL, NULL, NULL),
(74, 'profile_password_edit', NULL, NULL, NULL),
(75, 'no-role', '2021-09-01 08:27:38', '2021-09-01 08:27:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 63),
(1, 64),
(1, 65),
(1, 66),
(1, 67),
(1, 68),
(1, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(2, 47),
(2, 48),
(2, 49),
(2, 50),
(2, 51),
(2, 52),
(2, 53),
(2, 54),
(2, 55),
(2, 56),
(2, 57),
(2, 58),
(2, 59),
(2, 60),
(2, 61),
(2, 62),
(2, 63),
(2, 64),
(2, 65),
(2, 66),
(2, 67),
(2, 68),
(2, 69),
(2, 70),
(2, 71),
(2, 72),
(2, 73),
(2, 74),
(3, 75);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL),
(3, 'experts', '2021-09-01 08:27:50', '2021-09-01 08:27:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `price`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Car Repair & inspection', '6000.00', '<p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>', '2021-09-01 07:41:30', '2021-09-01 07:41:30', NULL),
(3, 'Security inspection', '6000.00', '<p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>', '2021-09-01 07:41:30', '2021-09-01 07:41:30', NULL),
(4, 'Mordern Workshop', '6000.00', '<p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>', '2021-09-01 07:41:30', '2021-09-01 07:41:30', NULL),
(5, 'Car Cleaning & Washing', '6000.00', '<p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>', '2021-09-01 07:41:30', '2021-09-01 07:41:30', NULL),
(6, 'Selling car materials', '6000.00', '<p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>', '2021-09-01 07:41:30', '2021-09-01 07:41:30', NULL),
(7, 'Low Cost Services', '6000.00', '<p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>', '2021-09-01 07:41:30', '2021-09-01 07:41:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_offered_bies`
--

CREATE TABLE `service_offered_bies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `expert_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_offered_bies`
--

INSERT INTO `service_offered_bies` (`id`, `created_at`, `updated_at`, `deleted_at`, `expert_id`) VALUES
(1, '2021-09-01 08:38:20', '2021-09-01 08:38:20', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `service_service_offered_by`
--

CREATE TABLE `service_service_offered_by` (
  `service_offered_by_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_service_offered_by`
--

INSERT INTO `service_service_offered_by` (`service_offered_by_id`, `service_id`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `caption`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Workshop', 'The Best Car Workshop', 'We provides always our best services for our clients and always<br> try to achieve our client\'s trust and satisfaction.', '2021-09-01 07:25:29', '2021-09-01 07:25:29', NULL),
(2, 'Workshop', 'The Best Car Workshop', 'We provides always our best services for our clients and always<br> try to achieve our client\'s trust and satisfaction.', '2021-09-01 07:25:29', '2021-09-01 07:25:29', NULL),
(3, 'Workshop', 'The Best Car Workshop', 'We provides always our best services for our clients and always<br> try to achieve our client\'s trust and satisfaction.', '2021-09-01 07:25:29', '2021-09-01 07:25:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved` tinyint(1) DEFAULT 0,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `professional`, `facebook`, `twitter`, `instagram`, `skype`, `email_verified_at`, `password`, `approved`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'John Doe', NULL, 'admin@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$V.bmQ6T8vF.f8x66Ae9Ay.nObHxv0irJl3EG86.FZFY9dBdASQKDy', 1, NULL, NULL, '2021-09-01 11:34:23', NULL),
(2, 'Herman Pierce', '+1 (593) 636-4867', 'qorepowowe@mailinator.com', 'Doctor', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', NULL, '$2y$10$L4oOj1qQvkUT97DQWXH0cOhCJZJab5jgoA8a48cWbQ.og5/LSO8vm', 0, NULL, '2021-09-01 08:27:19', '2021-09-01 08:27:19', NULL),
(3, 'Herman Pierce', '+1 (593) 636-4867', 'qorepowowe@mailinsator.com', 'Doctor', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', NULL, '$2y$10$L4oOj1qQvkUT97DQWXH0cOhCJZJab5jgoA8a48cWbQ.og5/LSO8vm', 0, NULL, '2021-09-01 08:27:19', '2021-09-01 08:27:19', NULL),
(4, 'Herman Pierce', '+1 (593) 636-4867', 'qoreqpowowe@mailinator.com', 'Doctor', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', NULL, '$2y$10$L4oOj1qQvkUT97DQWXH0cOhCJZJab5jgoA8a48cWbQ.og5/LSO8vm', 0, NULL, '2021-09-01 08:27:19', '2021-09-01 08:27:19', NULL),
(5, 'Herman Pierce', '+1 (593) 636-4867', 'qorepoewowe@mailinsator.com', 'Doctor', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', NULL, '$2y$10$L4oOj1qQvkUT97DQWXH0cOhCJZJab5jgoA8a48cWbQ.og5/LSO8vm', 0, NULL, '2021-09-01 08:27:19', '2021-09-01 08:27:19', NULL),
(6, 'Herman Pierce', '+1 (593) 636-4867', 'qoqreqpowowe@mailinator.com', 'Doctor', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', NULL, '$2y$10$L4oOj1qQvkUT97DQWXH0cOhCJZJab5jgoA8a48cWbQ.og5/LSO8vm', 0, NULL, '2021-09-01 08:27:19', '2021-09-01 08:27:19', NULL),
(7, 'Herman Pierce', '+1 (593) 636-4867', 'qorepoexwowe@mailinsator.com', 'Doctor', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', 'http://localhost:8000/admin/users/create', NULL, '$2y$10$L4oOj1qQvkUT97DQWXH0cOhCJZJab5jgoA8a48cWbQ.og5/LSO8vm', 0, NULL, '2021-09-01 08:27:19', '2021-09-01 08:27:19', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us_pages`
--
ALTER TABLE `about_us_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_of_service_fk_4759809` (`type_of_service_id`);

--
-- Indexes for table `crm_customers`
--
ALTER TABLE `crm_customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_fk_4706169` (`status_id`);

--
-- Indexes for table `crm_documents`
--
ALTER TABLE `crm_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_fk_4706186` (`customer_id`);

--
-- Indexes for table `crm_notes`
--
ALTER TABLE `crm_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_fk_4706180` (`customer_id`);

--
-- Indexes for table `crm_statuses`
--
ALTER TABLE `crm_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_4706147` (`role_id`),
  ADD KEY `permission_id_fk_4706147` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_4706156` (`user_id`),
  ADD KEY `role_id_fk_4706156` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_name_unique` (`name`);

--
-- Indexes for table `service_offered_bies`
--
ALTER TABLE `service_offered_bies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expert_fk_4759780` (`expert_id`);

--
-- Indexes for table `service_service_offered_by`
--
ALTER TABLE `service_service_offered_by`
  ADD KEY `service_offered_by_id_fk_4759781` (`service_offered_by_id`),
  ADD KEY `service_id_fk_4759781` (`service_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `about_us_pages`
--
ALTER TABLE `about_us_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `crm_customers`
--
ALTER TABLE `crm_customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_documents`
--
ALTER TABLE `crm_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_notes`
--
ALTER TABLE `crm_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_statuses`
--
ALTER TABLE `crm_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service_offered_bies`
--
ALTER TABLE `service_offered_bies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `type_of_service_fk_4759809` FOREIGN KEY (`type_of_service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `crm_customers`
--
ALTER TABLE `crm_customers`
  ADD CONSTRAINT `status_fk_4706169` FOREIGN KEY (`status_id`) REFERENCES `crm_statuses` (`id`);

--
-- Constraints for table `crm_documents`
--
ALTER TABLE `crm_documents`
  ADD CONSTRAINT `customer_fk_4706186` FOREIGN KEY (`customer_id`) REFERENCES `crm_customers` (`id`);

--
-- Constraints for table `crm_notes`
--
ALTER TABLE `crm_notes`
  ADD CONSTRAINT `customer_fk_4706180` FOREIGN KEY (`customer_id`) REFERENCES `crm_customers` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_4706147` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_4706147` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_4706156` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_4706156` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_offered_bies`
--
ALTER TABLE `service_offered_bies`
  ADD CONSTRAINT `expert_fk_4759780` FOREIGN KEY (`expert_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `service_service_offered_by`
--
ALTER TABLE `service_service_offered_by`
  ADD CONSTRAINT `service_id_fk_4759781` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `service_offered_by_id_fk_4759781` FOREIGN KEY (`service_offered_by_id`) REFERENCES `service_offered_bies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
