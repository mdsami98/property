-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2019 at 07:22 AM
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
(2, 'Home', 'home', '2019-08-24 22:38:36', '2019-08-24 22:38:36'),
(3, 'Office', 'office', '2019-08-25 04:39:37', '2019-08-25 04:39:37'),
(4, 'Shop', 'shop', '2019-08-25 04:42:11', '2019-08-25 04:42:11');

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
  `post_price` decimal(20,20) NOT NULL,
  `post_area` int(11) NOT NULL,
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
(1, 'Agent', 'Home', 'Create Category', '2019-08-24 22:36:34', '2019-08-24 22:36:34'),
(2, 'Agent', 'Home', 'Delete Category', '2019-08-25 04:37:45', '2019-08-25 04:37:45'),
(3, 'Agent', 'Home', 'Create Category', '2019-08-24 22:38:36', '2019-08-24 22:38:36'),
(4, 'Agent', 'Office', 'Create Category', '2019-08-25 04:39:37', '2019-08-25 04:39:37'),
(5, 'Agent', 'Shop', 'Create Category', '2019-08-25 04:42:12', '2019-08-25 04:42:12'),
(6, 'Agent', 'Duplex', 'Create Category', '2019-08-24 22:42:47', '2019-08-24 22:42:47'),
(7, 'Agent', 'Duplex', 'Delete Category', '2019-08-25 04:47:46', '2019-08-25 04:47:46'),
(8, 'Agent', 'Mohakhali Near To Al Madina Jame Mosjid', 'Create post', '2019-08-25 04:55:42', '2019-08-25 04:55:42'),
(9, 'Agent', 'East Goran, Near Shahi Jame Masjid', 'Create post', '2019-08-25 04:58:00', '2019-08-25 04:58:00'),
(10, 'Agent', 'This Exclusive Commercial Space Up For Rent', 'Create post', '2019-08-25 05:00:45', '2019-08-25 05:00:45'),
(11, 'Admin', 'Motijheel Near To National Bank Limited', 'Approve post', '2019-08-25 05:04:46', '2019-08-25 05:04:46'),
(12, 'Admin', 'New shop for rent', 'Approve post', '2019-08-25 05:18:38', '2019-08-25 05:18:38'),
(13, 'Agent', 'New home demo input', 'Approve post', '2019-08-25 05:21:07', '2019-08-25 05:21:07');

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
(193, '2014_10_12_000000_create_users_table', 3),
(194, '2014_10_12_100000_create_password_resets_table', 3),
(195, '2019_06_28_151928_create_roles_table', 3),
(196, '2019_06_28_160521_create_categories_table', 3),
(197, '2019_07_03_153625_create_posts_table', 3),
(198, '2019_07_03_153659_create_post_images_table', 3),
(199, '2019_07_21_202425_create_profiles_table', 3),
(200, '2019_07_24_145650_create_types_table', 3),
(201, '2019_07_24_203738_create_comments_table', 3),
(202, '2019_07_24_203829_create_comment_replies_table', 3),
(203, '2019_08_08_210421_create_favourites_table', 3),
(204, '2019_08_13_205358_create_logs_table', 3),
(205, '2019_08_15_142907_create_region_area_cities_table', 3),
(206, '2019_08_24_204320_create_payments_table', 3);

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
(1, 5, '100.00', 'bikash', '2019-08-25 05:18:09', '2019-08-25 05:18:09');

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
  `area` int(11) NOT NULL,
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
(1, 2, 2, 1, 'Mohakhali Near To Al Madina Jame Mosjid', '1', 'Dhaka', 1, NULL, '23000.00', 1800, '01781501769', 3, 2, 1, 'If you are looking for more spacious commercial office space, visit this office space located in Mohakhali up for rent. This space is well planned and tastefully designed besides you will stay relaxed concentrated on running your business as utilities and other services for this building is readily available.', 'School Road, Mohakhali, Dhaka', '3', NULL, '1566708942-mohakhali-near-to-al-madina-jame-mosjid.jpg', 1, '2019-08-25 04:55:42', '2019-08-25 04:55:42'),
(2, 2, 2, 1, 'East Goran, Near Shahi Jame Masjid', '1', 'Dhaka', 0, NULL, '11000.00', 1200, '01763151056', 3, 2, 1, 'The place Khilgaon comes to our mind and what we can picture is the area holding the most inhabitant friendly and green atmosphere. Now Khilgaon is proposing one of the best deals for your new home. The corresponding unit having the most outstanding amenities that come along with this splendid building. A well-maintained Elevator takes to this most beautiful house. You would get a taste of elite as soon as you enter the drawing room for your leisure hours. The kitchen room is nicely planned for any occupant who seeks for a spacious cooking area. The house got bed with bath with best quality fittings for guaranteeing healthy hygiene. You are getting an open parking space allotted for this significant flat to make sure your car is all safe with the support of well-trained security guards. A good amount of school, colleges and groceries are also located in the nearby area. \r\n\r\n1 months advance required. \r\n\r\nService charge BDT. 2000', 'Goran, Khilgaon, Dhaka', '5', NULL, '1566709080-east-goran-near-shahi-jame-masjid.jpg', 1, '2019-08-25 04:58:00', '2019-08-25 04:58:00'),
(3, 2, 3, 1, 'This Exclusive Commercial Space Up For Rent', '1', 'Dhaka', 1, NULL, '80000.00', 3500, '01944516981', 4, 1, 2, 'This commercial property situated in a great location that will provide you the convenience to run your business to its success. Beside located in a suitable location the property also assures all time water, gas and electricity. The property is created with a great floor plan. \r\n\r\nAdvance BDT 1548000.', 'Topkhana Road, Shegunbagicha, Dhaka', '9', NULL, '1566709245-this-exclusive-commercial-space-up-for-rent.jpg', 1, '2019-08-25 05:00:45', '2019-08-25 05:00:45'),
(4, 3, 2, 2, 'Motijheel Near To National Bank Limited', '1', 'Dhaka', 1, NULL, '1600000.00', 2400, '01912922537', 4, 4, 2, 'Do you aspire to grow your business? see this vacant commercial space in Motijheel comes complete with all utility supplies, electricity and other important facilities. This space can be a perfect opportunity to grow your business. This space is located in one of the lucrative locations to endure your business.', 'DIT Avenue, Motijheel, Dhaka', '3', NULL, '1566709470-motijheel-near-to-national-bank-limited.jpg', 1, '2019-08-25 05:04:30', '2019-08-25 05:04:46'),
(5, 3, 4, 1, 'New shop for rent', '1', 'Dhaka', 1, NULL, '7000.00', 1100, '01781501769', 1, 1, 1, 'In the desirable location of Khilgaon a beautiful apartment is located for you to make it your new home. The house comes complete with bed, a welcoming kitchen/dining area and bath. All time availability of water, gas and electricity will make your life even smooth while living in this flat. You would also have refreshing balconies for a chill out in your morning and evening hours with your family.', 'Uttara sector 7, road 23, house 2', '1', NULL, '1566710283-new-shop-for-rent.jpg', 1, '2019-08-25 05:18:09', '2019-08-25 05:18:38'),
(6, 3, 2, 2, 'New home demo input', '1', 'Dhaka', 0, NULL, '230000.00', 1800, '01763151056', 4, 3, 1, 'Do you aspire to grow your business? see this vacant commercial space in Motijheel comes complete with all utility supplies, electricity and other important facilities. This space can be a perfect opportunity to grow your business. This space is located in one of the lucrative locations to endure your business.', 'Sector 10, Road 11, House 33', '6', NULL, '1566710427-new-home-demo-input.jpg', 1, '2019-08-25 05:20:27', '2019-08-25 05:21:07');

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
(1, 1, NULL, 'profile.jpg', NULL, NULL, '2019-08-24 22:34:45', '2019-08-24 22:34:45'),
(2, 2, NULL, 'profile.jpg', NULL, '', '2019-08-24 22:35:54', '2019-08-24 22:35:54'),
(3, 3, NULL, 'profile.jpg', NULL, '', '2019-08-25 04:50:57', '2019-08-25 04:50:57');

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
(1, 'Dhaka', '2019-08-25 04:53:26', '2019-08-25 04:53:26'),
(2, 'Khulna', '2019-08-25 04:53:33', '2019-08-25 04:53:33'),
(3, 'Barishal', '2019-08-25 04:53:41', '2019-08-25 04:53:41'),
(4, 'Rajshahi', '2019-08-25 04:53:49', '2019-08-25 04:53:49');

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
(1, 'Customer', 'Customer Role', '2019-08-24 22:34:45', '2019-08-24 22:34:45'),
(2, 'Agent', 'Agent Role', '2019-08-24 22:34:45', '2019-08-24 22:34:45'),
(3, 'Admin', 'Admin Role', '2019-08-24 22:34:45', '2019-08-24 22:34:45');

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
(1, 'Rent', '2019-08-24 22:34:44', '2019-08-24 22:34:44'),
(2, 'Sale', '2019-08-24 22:34:45', '2019-08-24 22:34:45');

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
(1, 3, 1, 'Admin', 'admin@admin.com', NULL, NULL, '$2y$10$pMdrWEyrY6GqycVB1gtVSORqFQwi4/i9dfcPEcopUfWtzTgW4mgi.', NULL, '2019-08-24 22:34:45', '2019-08-24 22:34:45'),
(2, 2, 1, 'Agent', 'agent@agent.com', NULL, NULL, '$2y$10$wFxtP0LoDTZ6ewGt6e61..bK08Hlx595YuIFIwq7demMbUvY/uexG', NULL, '2019-08-24 22:35:54', '2019-08-24 22:35:54'),
(3, 1, 1, 'Samiul Islam', 'sami@gmail.com', NULL, NULL, '$2y$10$e7zXwxpDwSLhnVf6DyAY4urAFS5DEGpg6nCsO.T7F8SaMg2lyeCpy', NULL, '2019-08-25 04:50:57', '2019-08-25 04:50:57');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_replies`
--
ALTER TABLE `comment_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
