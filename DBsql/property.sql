-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2019 at 11:53 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', '2019-08-15 14:24:46', '2019-08-15 14:24:46'),
(2, 'Office', 'office', '2019-08-21 08:56:24', '2019-08-21 08:56:24'),
(3, 'Shop', 'shop', '2019-08-24 08:41:53', '2019-08-24 08:41:53'),
(5, 'New test', 'new-test', '2019-08-24 15:36:49', '2019-08-24 15:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `publication_ststus` tinyint(4) NOT NULL DEFAULT 0,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `authorImage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commentBody` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `publication_ststus`, `author`, `authorImage`, `email`, `commentBody`, `created_at`, `updated_at`) VALUES
(1, 3, 0, 'Agent', 'profile.jpg', 'agent@agent.com', 'Nice house', '2019-08-19 15:53:18', '2019-08-19 15:53:18'),
(2, 3, 0, 'Sami', 'profile.jpg', 'agent@agent.com', 'I like it', '2019-08-19 15:53:39', '2019-08-19 15:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `comment_replies`
--

CREATE TABLE `comment_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `publication_ststus` tinyint(4) NOT NULL DEFAULT 0,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `authorImage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commentBody` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `post_title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `post_price` decimal(20,2) NOT NULL,
  `post_area` decimal(8,2) NOT NULL,
  `post_bedroom` int(11) NOT NULL,
  `post_bathroom` int(11) NOT NULL,
  `post_garage` int(11) NOT NULL,
  `post_description` text COLLATE utf8_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `user_id`, `post_id`, `post_title`, `post_price`, `post_area`, `post_bedroom`, `post_bathroom`, `post_garage`, `post_description`, `post_image`, `post_type`, `post_category`, `created_at`, `updated_at`) VALUES
(3, 1, 9, 'Visit This Flat For Rent In edit', '2000000.00', '1200.00', 3, 2, 1, 'Considering a suitable lifestyle, this is one of the best places to reside in. With bed and bath, it is wonderful and comfortable flat for a family to move in. The respective unit welcomes with a great floor plan. The flat has got amazing bedrooms with modish tiled flooring. All the washrooms are finished with the quality and durable fixtures. You will have an apt kitchen area to have your desired cookery essentials. A great number of groceries, school, colleges and bus stops are also located in the nearby area.', '1566378545-visit-this-flat-for-rent-in.jpg', 'Sale', 'Home', '2019-08-21 05:42:43', '2019-08-21 05:42:43'),
(11, 3, 3, 'Baitul Aman Housing Society', '30000.00', '2200.00', 4, 3, 1, 'You have landed yourself in the right listing if you are looking for one of the most picked and affordable properties in a congenial zone like Adabor. We got a flat at Adabor area. This nice looking building includes a nice looking entrance to take to this flat you can see in our enlisted photos. The flat comes complete with tiled flooring, bed, bath and a nice kitchen. Well-fitted washrooms will be there with durable fittings for the comfiest living for your family. The balconies would refill the happy time with your family', '1566244903-baitul-aman-housing-society.jpg', 'Rent', 'Home', '2019-08-21 10:10:29', '2019-08-21 10:10:29'),
(12, 3, 4, 'Gulshan  Near United Commercial Bank Limited', '28000.00', '2100.00', 3, 3, 2, 'This vacant property is an excellent opportunity for the investors or commercial property hunters. The tasteful outlook and spacious floor plan make it more lucrative for the buyers. The commercial space is located in the desirable location of Gulshan. The building provides you with good security and all time availability of utilities. \r\n\r\nAdvance BDT. 1,80,000\r\n\r\nDo not miss this affordable offer and we are just a call away to close the deal for you!', '1566245122-gulshan-near-united-commercial-bank-limited.jpg', 'Rent', 'Home', '2019-08-21 10:10:46', '2019-08-21 10:10:46'),
(13, 3, 6, 'For rent nice house in Guldhan', '32000.00', '2300.00', 3, 3, 1, 'This home situated in a great location which will give you easy access to everyday transportation. Many notable educational institutions are located in the area to provide and assure a good education for your children. The lovely apartment is with bed, bath, drawing, dining, balcony and a beautiful kitchen. All-time electricity, water and gas services are also available here. Also, you will be able to live in a pleasant locality. \r\n\r\nService charge BDT 6000.\r\n\r\nLiked this home? For more details feel free to contact us.', '1566245564-for-rent-nice-house-in-guldhan.jpg', 'Rent', 'Home', '2019-08-21 10:10:55', '2019-08-21 10:10:55'),
(14, 3, 1, 'This is the first post', '24999.00', '2200.00', 3, 2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently', '1565901454-this-is-the-first-post.jpg', 'Rent', 'Home', '2019-08-21 10:11:03', '2019-08-21 10:11:03'),
(15, 4, 1, 'This is the first post', '24999.00', '2200.00', 3, 2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently', '1565901454-this-is-the-first-post.jpg', 'Rent', 'Home', '2019-08-21 10:12:33', '2019-08-21 10:12:33'),
(16, 4, 4, 'Gulshan  Near United Commercial Bank Limited', '28000.00', '2100.00', 3, 3, 2, 'This vacant property is an excellent opportunity for the investors or commercial property hunters. The tasteful outlook and spacious floor plan make it more lucrative for the buyers. The commercial space is located in the desirable location of Gulshan. The building provides you with good security and all time availability of utilities. \r\n\r\nAdvance BDT. 1,80,000\r\n\r\nDo not miss this affordable offer and we are just a call away to close the deal for you!', '1566245122-gulshan-near-united-commercial-bank-limited.jpg', 'Rent', 'Home', '2019-08-21 10:12:43', '2019-08-21 10:12:43');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `action_by` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `action_for` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `action_by`, `action_for`, `action`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Home', 'Create Category', '2019-08-15 14:24:46', '2019-08-15 14:24:46'),
(2, 'Admin', 'Office', 'Create Category', '2019-08-21 08:56:24', '2019-08-21 08:56:24'),
(3, 'Admin', 'Shop', 'Create Category', '2019-08-24 08:41:53', '2019-08-24 08:41:53'),
(4, 'aGENT ONE', 'For test', 'Create Category', '2019-08-24 09:25:34', '2019-08-24 09:25:34'),
(5, 'aGENT ONE', 'For test edit', 'Update Category', '2019-08-24 09:31:37', '2019-08-24 09:31:37'),
(6, 'aGENT ONE', 'For test edit', 'Delete Category', '2019-08-24 11:35:56', '2019-08-24 11:35:56'),
(7, 'aGENT ONE', 'New test', 'Create Category', '2019-08-24 15:36:49', '2019-08-24 15:36:49'),
(8, 'aGENT ONE', 'This is the first post', 'Delete post', '2019-08-24 15:42:18', '2019-08-24 15:42:18'),
(9, 'aGENT ONE', 'Samiul Islam', 'Create user', '2019-08-24 09:51:04', '2019-08-24 09:51:04'),
(10, 'aGENT ONE', 'sf dsdf sgfds', 'Create post', '2019-08-24 10:02:17', '2019-08-24 10:02:17');

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
(5, '2019_07_03_151720_create_admin_post_controllers_table', 2),
(165, '2014_10_12_000000_create_users_table', 3),
(166, '2014_10_12_100000_create_password_resets_table', 3),
(167, '2019_06_28_151928_create_roles_table', 3),
(168, '2019_06_28_160521_create_categories_table', 3),
(169, '2019_07_03_153625_create_posts_table', 3),
(170, '2019_07_03_153659_create_post_images_table', 3),
(171, '2019_07_21_202425_create_profiles_table', 3),
(172, '2019_07_24_145650_create_types_table', 3),
(173, '2019_07_24_203738_create_comments_table', 3),
(174, '2019_07_24_203829_create_comment_replies_table', 3),
(175, '2019_08_08_210421_create_favourites_table', 3),
(176, '2019_08_13_205358_create_logs_table', 3),
(177, '2019_08_15_142907_create_region_area_cities_table', 3),
(178, '2019_08_24_204320_create_payments_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `post_id`, `amount`, `by`, `created_at`, `updated_at`) VALUES
(1, 12, '100.00', 'card', '2019-08-24 14:54:22', '2019-08-24 14:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `region_area` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_type` tinyint(4) NOT NULL DEFAULT 0,
  `slug` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(20,2) UNSIGNED NOT NULL,
  `area` decimal(8,2) NOT NULL,
  `phn_number` text COLLATE utf8_unicode_ci NOT NULL,
  `bedroom` int(10) UNSIGNED NOT NULL,
  `bathroom` int(10) UNSIGNED NOT NULL,
  `garage` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `floor` text COLLATE utf8_unicode_ci NOT NULL,
  `map` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `type_id`, `title`, `region`, `region_area`, `post_type`, `slug`, `price`, `area`, `phn_number`, `bedroom`, `bathroom`, `garage`, `description`, `address`, `floor`, `map`, `image`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 2, 'This is second post', '1', 'Uttara', 0, NULL, '22000.00', '1500.00', '01763151056', 3, 2, 1, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like', 'Sector 7 Road 8, House 11', '5th', NULL, '1565902806-this-is-second-post.jpg', 1, '2019-08-15 15:00:06', '2019-08-19 14:02:08'),
(3, 1, 1, 1, 'Baitul Aman Housing Society', '1', 'Dhaka', 1, NULL, '30000.00', '2200.00', '01781501769', 4, 3, 1, 'You have landed yourself in the right listing if you are looking for one of the most picked and affordable properties in a congenial zone like Adabor. We got a flat at Adabor area. This nice looking building includes a nice looking entrance to take to this flat you can see in our enlisted photos. The flat comes complete with tiled flooring, bed, bath and a nice kitchen. Well-fitted washrooms will be there with durable fittings for the comfiest living for your family. The balconies would refill the happy time with your family', 'Baitul Aman Housing Society', '3', NULL, '1566244903-baitul-aman-housing-society.jpg', 1, '2019-08-19 14:01:43', '2019-08-19 15:38:07'),
(4, 1, 1, 1, 'Gulshan  Near United Commercial Bank Limited', '1', 'Dhaka', 1, NULL, '28000.00', '2100.00', '01763151056', 3, 3, 2, 'This vacant property is an excellent opportunity for the investors or commercial property hunters. The tasteful outlook and spacious floor plan make it more lucrative for the buyers. The commercial space is located in the desirable location of Gulshan. The building provides you with good security and all time availability of utilities. \r\n\r\nAdvance BDT. 1,80,000\r\n\r\nDo not miss this affordable offer and we are just a call away to close the deal for you!', 'Gulshan 2, Gulshan, Dhaka', '5', NULL, '1566245122-gulshan-near-united-commercial-bank-limited.jpg', 1, '2019-08-19 14:05:22', '2019-08-19 14:05:22'),
(5, 1, 1, 2, 'New apartment for sale in dhanmondi', '1', 'Dhaka', 0, NULL, '80000.00', '3200.00', '01944516981', 5, 4, 2, 'This home situated in a great location which will give you easy access to everyday transportation. Many notable educational institutions are located in the area to provide and assure a good education for your children. The lovely apartment is with bed, bath, drawing, dining, balcony and a beautiful kitchen. All-time electricity, water and gas services are also available here. Also, you will be able to live in a pleasant locality. \r\n\r\nService charge BDT 6000.\r\n\r\nLiked this home? For more details feel free to contact us.', 'Road No 12A, Dhanmondi, Dhaka', '2', NULL, '1566245367-new-apartment-for-sale-in-dhanmondi.jpg', 1, '2019-08-19 14:09:27', '2019-08-19 14:09:27'),
(6, 1, 1, 1, 'For rent nice house in Guldhan', '1', 'Dhala', 0, NULL, '32000.00', '2300.00', '01944516981', 3, 3, 1, 'This home situated in a great location which will give you easy access to everyday transportation. Many notable educational institutions are located in the area to provide and assure a good education for your children. The lovely apartment is with bed, bath, drawing, dining, balcony and a beautiful kitchen. All-time electricity, water and gas services are also available here. Also, you will be able to live in a pleasant locality. \r\n\r\nService charge BDT 6000.\r\n\r\nLiked this home? For more details feel free to contact us.', 'dgulshan 2, road 9', '3', NULL, '1566245564-for-rent-nice-house-in-guldhan.jpg', 1, '2019-08-19 14:12:44', '2019-08-24 15:36:08'),
(8, 1, 1, 1, 'New home gor rent', '1', 'Dhaka', 0, NULL, '24000.00', '1800.00', '01785569851', 3, 2, 1, 'This home situated in a great location which will give you easy access to everyday transportation. Many notable educational institutions are located in the area to provide and assure a good education for your children. The lovely apartment is with bed, bath, drawing, dining, balcony and a beautiful kitchen. All-time electricity, water and gas services are also available here. Also, you will be able to live in a pleasant locality. \r\n\r\nService charge BDT 6000.\r\n\r\nLiked this home? For more details feel free to contact us.', 'Sector 9, road 7, house 10', '4', NULL, '1566246385-new-home-gor-rent.jpg', 1, '2019-08-19 14:26:25', '2019-08-19 14:26:25'),
(9, 4, 1, 2, 'Visit This Flat For Rent In edit', '1', 'Dhaka ni=orth', 1, NULL, '2000000.00', '1200.00', '01781501766', 3, 2, 1, 'Considering a suitable lifestyle, this is one of the best places to reside in. With bed and bath, it is wonderful and comfortable flat for a family to move in. The respective unit welcomes with a great floor plan. The flat has got amazing bedrooms with modish tiled flooring. All the washrooms are finished with the quality and durable fixtures. You will have an apt kitchen area to have your desired cookery essentials. A great number of groceries, school, colleges and bus stops are also located in the nearby area.', 'Mirpur 10, road 9', '4', NULL, '1566378545-visit-this-flat-for-rent-in.jpg', 0, '2019-08-21 03:09:05', '2019-08-24 15:36:16'),
(10, 2, 3, 2, 'sf dsdf sgfds', '3', 'werEWR', 0, NULL, '5241.00', '3543.00', '01781501769', 3, 1, 2, 'lorem', 'es fesafw', '5', NULL, '1566662537-sf-dsdf-sgfds.jpg', 1, '2019-08-24 10:02:17', '2019-08-24 14:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `post_images`
--

CREATE TABLE `post_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_images`
--

INSERT INTO `post_images` (`id`, `post_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 3, '7557431566248978.jpg', '2019-08-19 15:09:38', '2019-08-19 15:09:38'),
(2, 3, '5236731566249011.jpg', '2019-08-19 15:10:11', '2019-08-19 15:10:11'),
(4, 3, '2824641566249038.jpg', '2019-08-19 15:10:38', '2019-08-19 15:10:38'),
(5, 3, '3114221566249055.jpg', '2019-08-19 15:10:55', '2019-08-19 15:10:55');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `phone_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about_text` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `phone_no`, `image`, `address`, `about_text`, `created_at`, `updated_at`) VALUES
(1, 1, '01763151056', '1566249184-.jpg', NULL, NULL, '2019-08-15 14:24:34', '2019-08-19 15:13:45'),
(2, 2, NULL, 'profile.jpg', NULL, '', '2019-08-15 15:04:23', '2019-08-15 15:04:23'),
(3, 3, NULL, 'profile.jpg', NULL, '', '2019-08-19 15:18:46', '2019-08-19 15:18:46'),
(4, 4, '01781501556', 'profile.jpg', 'Sector 7, road 2, house 10', '', '2019-08-21 02:45:21', '2019-08-21 02:46:05'),
(5, 5, NULL, 'profile.jpg', NULL, '', '2019-08-24 09:51:04', '2019-08-24 09:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `region_area_cities`
--

CREATE TABLE `region_area_cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `region_area_cities`
--

INSERT INTO `region_area_cities` (`id`, `region`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', '2019-08-28 18:00:00', NULL),
(2, 'Barishal', '2019-08-11 18:00:00', NULL),
(3, 'Khulna', '2019-08-24 08:43:02', '2019-08-24 08:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Customer', 'Customer Role', '2019-08-15 14:24:34', '2019-08-15 14:24:34'),
(2, 'Agent', 'Agent Role', '2019-08-15 14:24:34', '2019-08-15 14:24:34'),
(3, 'Admin', 'Admin Role', '2019-08-15 14:24:34', '2019-08-15 14:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Rent', '2019-08-15 14:24:34', '2019-08-15 14:24:34'),
(2, 'Sale', '2019-08-15 14:24:34', '2019-08-15 14:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `is_active` bigint(20) NOT NULL DEFAULT 1,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `verify_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `is_active`, `name`, `email`, `email_verified_at`, `verify_token`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Admin', 'admin@admin.com', NULL, NULL, '$2y$10$rfyTvxt5SSfJtAyo.1/gLeIN0JOBX8jgeswjI3WhaF7Cwlar18Qr2', NULL, '2019-08-15 14:24:34', '2019-08-15 14:24:34'),
(2, 2, 1, 'aGENT ONE', 'agent@agent.com', NULL, NULL, '$2y$10$QSDT8M0r72.o521qBQi2Gu7nNrVf9jpa/BENXAW.3.PS2UwHz05PS', NULL, '2019-08-15 15:04:22', '2019-08-15 15:04:22'),
(3, 1, 1, 'Samiul islam', 'sami@gmail.com', NULL, NULL, '$2y$10$SnVEMZybt7EAsDnfHss2j.wUyZh3L/2krExnSzq9F/mdPjDK9r.ji', NULL, '2019-08-19 15:18:46', '2019-08-19 15:18:46'),
(4, 1, 1, 'New test user', 'test@gmail.com', NULL, NULL, '$2y$10$lqi/gkJHQCMDCmUGzY6RlOnm1GCEdH2R74p5Bs3hDRxWeRhaCeDrm', NULL, '2019-08-21 02:45:21', '2019-08-21 02:45:21'),
(5, 1, 1, 'Samiul Islam', 'sami12@gmail.com', NULL, NULL, '$2y$10$xEfjiEZKu5W38/mBO7JMWOf3eHD4eSaMORWxWLcT6QiwZRnhapDOe', NULL, '2019-08-24 09:51:04', '2019-08-24 09:51:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_replies_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region_area_cities`
--
ALTER TABLE `region_area_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment_replies`
--
ALTER TABLE `comment_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `region_area_cities`
--
ALTER TABLE `region_area_cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD CONSTRAINT `comment_replies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
