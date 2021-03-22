-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 05:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogexercise`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `desc`, `userid`, `created_at`, `updated_at`) VALUES
(1, 'Requirements Exercises', 'You may generate various other types of classes when generating a model, such as factories, seeders, and controllers. In addition, these options may be combined to create multiple classes at once:', '1', '2021-03-15 06:46:27', '2021-03-15 06:46:27'),
(2, 'Database Connection & Table Options', 'Models generated by the make:model command will be placed in the app/Models directory. Let\'s examine a basic model class and discuss some of Eloquent\'s key conventions', '123', '2021-03-15 06:46:49', '2021-03-15 06:46:49'),
(3, 'Welcome to XAMPP for Windows 8.0.1', 'Eloquent which database table corresponds to our Flight model. By convention, the \"snake case\", plural name of the class will be used as the table name unless another name is explicitly specified. So, in this case, Eloquent will assume the Flight model stores records in the flights table, while an AirTrafficController model would store records in an air_traffic_controllers table.\r\n\r\nIf your model\'s corresponding database table does not fit this convention, you may manually specify the model\'s table name by defining a table property on the model:\r\n\r\n<?php', '123', '2021-03-15 06:47:06', '2021-03-15 06:47:06'),
(4, 'Available Column Types', 'Eloquent will also assume that each model\'s corresponding database table has a primary key column named id. If necessary, you may define a protected $primaryKey property on your model to specify a different column that serves as your model\'s primary key:', '123', '2021-03-15 07:09:12', '2021-03-15 07:09:12'),
(5, 'Roll Back & Migrate Using A Single Command', 'If you need to customize the names of the columns used to store the timestamps, you may define CREATED_AT and UPDATED_AT constants on your model:', '123', '2021-03-15 07:09:33', '2021-03-15 07:09:33'),
(6, 'Creating Tables', 'By default, all Eloquent models will use the default database connection that is configured for your application. If you would like to specify a different connection that should be used when interacting with a particular model, you should define a $connection property on the model:', '123', '2021-03-15 07:10:58', '2021-03-15 07:10:58'),
(7, 'It can access cookies variable and also set cookies.', 'It helps to encrypt the data and apply validation.\r\nPHP supports several protocols such as HTTP, POP3, SNMP, LDAP, IMAP, and many more.\r\nUsing PHP language, you can control the user to access some pages of your website.\r\nAs PHP is easy to install and set up, this is the main reason why PHP is the best language to learn.\r\nPHP can handle the forms, such as - collect the data from users using forms, save it into the database, and return useful information to the user. For example - Registration form.', '123', '2021-03-15 08:37:40', '2021-03-15 08:37:40'),
(8, 'PHP Features', 'HP source code and software are freely available on the web. You can develop all the versions of PHP according to your requirement without paying any cost. All its components are free to download and use.\r\n\r\nFamiliarity with syntax:\r\n\r\nPHP has easily understandable syntax. Programmers are comfortable coding with it.\r\n\r\nEmbedded:\r\n\r\nPHP code can be easily embedded within HTML tags and script.\r\n\r\nPlatform Independent:\r\n\r\nPHP is available for WINDOWS, MAC, LINUX & UNIX operating system. A PHP appl', '123', '2021-03-15 08:38:06', '2021-03-15 08:38:06'),
(9, 'um control over the websites like you can make changes easily whenever you want.  A Helpful PHP Community:', 'PHP is widely used in web development nowadays. PHP can develop dynamic websites easily. But you must have the basic the knowledge of following technologies for web development as well.\r\n\r\nHTML\r\nCSS\r\nJavaScript\r\nAjax\r\nXML and JSON\r\njQuery', '1', '2021-03-15 08:38:38', '2021-03-15 08:38:38');

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
(1, '2021_03_15_103802_create_users_table', 1),
(2, '2021_03_15_103857_create_blogs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'rajni', 'raj@gmail.com', '$2y$10$T3iBVR/I0KUADO2OpDGgVuhr9s1goi81.4hPksrBLI/syxS1xg2PG', '2021-03-15 06:06:51', '2021-03-15 06:06:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;