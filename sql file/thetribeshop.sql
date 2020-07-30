-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 12:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thetribeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `title`, `link`, `status`, `created_at`, `updated_at`) VALUES
(2, 'banners\\July2020\\R0vorkz5C8Y1Gygf9Hij.jpg', 'Apprael', 'hghghgh', 1, '2020-07-26 11:53:00', '2020-07-26 14:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `cart_storages`
--

CREATE TABLE `cart_storages` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_storages`
--

INSERT INTO `cart_storages` (`id`, `cart_data`, `created_at`, `updated_at`) VALUES
('1_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:188;}s:14:\"parsedRawValue\";N;}}}', '2020-07-25 13:29:32', '2020-07-29 12:04:36'),
('1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:3;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:16:\"App\\CartDatabase\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:7:{s:2:\"id\";i:3;s:4:\"name\";s:14:\"Ashish Kashyap\";s:5:\"price\";i:553;s:8:\"quantity\";i:4;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"image\";s:52:\"product-attributes\\July2020\\id06EfaqmuH41KuWMRxG.jpg\";}}s:10:\"conditions\";a:0:{}s:15:\"associatedModel\";s:7:\"Product\";}}}}', '2020-07-27 09:58:26', '2020-07-29 15:28:57'),
('123_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:2;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:16:\"App\\CartDatabase\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:7:{s:2:\"id\";i:2;s:4:\"name\";s:14:\"Manish Diwakar\";s:5:\"price\";i:646;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"image\";s:52:\"product-attributes\\July2020\\XCOWa2IY9OaLI7ydGQwJ.jpg\";}}s:10:\"conditions\";a:0:{}s:15:\"associatedModel\";s:7:\"Product\";}}}}', '2020-07-29 15:21:32', '2020-07-29 15:21:32'),
('14_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 13:20:07', '2020-07-29 13:20:07'),
('15_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 14:52:56', '2020-07-29 14:52:56'),
('19_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 15:27:06', '2020-07-29 15:27:06'),
('2_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:13;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 12:30:52', '2020-07-30 04:04:48'),
('2_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:0:{}}', '2020-07-30 02:33:00', '2020-07-30 02:34:05'),
('21_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 15:22:13', '2020-07-29 15:22:13'),
('30_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 13:12:19', '2020-07-29 13:12:19'),
('32_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 13:14:28', '2020-07-29 13:14:28'),
('36_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 15:13:45', '2020-07-29 15:13:45'),
('37_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 15:27:50', '2020-07-29 15:27:50'),
('55_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 15:10:02', '2020-07-29 15:10:02'),
('56_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 15:20:02', '2020-07-29 15:20:02'),
('57_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 13:17:14', '2020-07-29 13:17:14'),
('59_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 13:08:24', '2020-07-29 13:08:24'),
('62_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:2;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 13:16:35', '2020-07-29 15:12:34'),
('89_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 15:25:26', '2020-07-29 15:25:26'),
('90_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 13:18:49', '2020-07-29 13:18:49'),
('92_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 15:30:12', '2020-07-29 15:30:12'),
('97_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 13:21:39', '2020-07-29 13:21:39'),
('dhzqZcvE3FKz0uGRLaXCaEJMisqffHkoGm26uF2e_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 14:08:06', '2020-07-29 14:08:06'),
('hA7m9xXN1Ba62z2fmydUzQKjGBR1WxyilwetCww3_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:1;}s:14:\"parsedRawValue\";N;}}}', '2020-07-30 02:30:34', '2020-07-30 02:30:34'),
('hksdhsd_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:3;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 14:56:21', '2020-07-29 14:58:50'),
('lDCFwchY4LXj7w01IjRoaESVLvxyw5GVE1YskBXl_cart_conditions', 'O:41:\"Darryldecode\\Cart\\CartConditionCollection\":1:{s:8:\"\0*\0items\";a:1:{s:11:\"GST 18% tax\";O:31:\"Darryldecode\\Cart\\CartCondition\":2:{s:37:\"\0Darryldecode\\Cart\\CartCondition\0args\";a:6:{s:4:\"name\";s:11:\"GST 18% tax\";s:4:\"type\";s:3:\"tax\";s:6:\"target\";s:5:\"total\";s:5:\"value\";s:3:\"18%\";s:10:\"attributes\";a:1:{s:11:\"description\";s:56:\"This tax is apply on all product by indian govt. as GST.\";}s:5:\"order\";i:11;}s:14:\"parsedRawValue\";N;}}}', '2020-07-29 14:18:03', '2020-07-29 15:39:15'),
('lDCFwchY4LXj7w01IjRoaESVLvxyw5GVE1YskBXl_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:0:{}}', '2020-07-29 15:22:38', '2020-07-29 15:43:52');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Women Dresses', '<p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">ssddedsw</span></p>', 'categories\\July2020\\H0g2RYg9jkhLqJuu2p9U.jpg', 1, '2020-07-25 13:46:00', '2020-07-27 07:11:06'),
(2, NULL, 'Car shoroom', '<p>https://source.unsplash.com/random</p>', 'categories\\July2020\\MKZoFwE76L1EPQAcRFPF.jpg', 1, '2020-07-25 13:56:06', '2020-07-25 13:56:06'),
(3, NULL, 'boots', '<p>fwagggggggggggggggggggggggddddddddddddddd</p>', 'categories\\July2020\\HJJC0O62itWl8B2l6dWP.jpg', 1, '2020-07-25 13:56:49', '2020-07-25 13:56:49'),
(4, NULL, 'Anur', '<p>aaaaaaaaaaaasffffffffffffffffffff</p>', 'categories\\July2020\\BF156pEuwT9Q8NobGFa0.jpg', 1, '2020-07-25 14:04:54', '2020-07-25 14:04:54'),
(5, NULL, 'Tarun KAshyap', '<p>sdffffffffffffffffff</p>', 'categories\\July2020\\6slQtygjqedsfhPua0P8.jpg', 1, '2020-07-25 14:09:00', '2020-07-27 08:47:36'),
(6, NULL, 'Car shoroom', '<p>ddddddddddddddd</p>', 'categories\\July2020\\1CKx0hT8V6oP1BkGvyqp.jpg', 1, '2020-07-25 14:12:16', '2020-07-25 14:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_discounts`
--

CREATE TABLE `coupon_discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attributes` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupon_discounts`
--

INSERT INTO `coupon_discounts` (`id`, `name`, `type`, `target`, `value`, `attributes`, `order`, `created_at`, `updated_at`) VALUES
(1, 'anurag', 'promo', 'total', '-20', NULL, NULL, '2020-07-28 07:28:34', '2020-07-28 07:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '{}', 5),
(21, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 9),
(22, 4, 'id', 'hidden', 'Id', 1, 1, 1, 1, 1, 0, '{}', 1),
(23, 4, 'parent_id', 'hidden', 'Parent Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(24, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 4),
(25, 4, 'description', 'rich_text_box', 'Description', 1, 1, 1, 1, 1, 1, '{}', 5),
(26, 4, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 6),
(27, 4, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, '{}', 7),
(28, 4, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(29, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(30, 4, 'category_belongsto_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"parent_id\",\"key\":\"name\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"on\"}', 2),
(31, 5, 'id', 'hidden', 'Id', 1, 1, 1, 1, 1, 1, '{}', 1),
(32, 5, 'category_id', 'hidden', 'Category Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(33, 5, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 4),
(34, 5, 'description', 'rich_text_box', 'Description', 1, 1, 1, 1, 1, 1, '{}', 5),
(35, 5, 'stock', 'number', 'Stock', 1, 1, 1, 1, 1, 1, '{}', 6),
(36, 5, 'price', 'number', 'Price', 1, 1, 1, 1, 1, 1, '{}', 7),
(37, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 10),
(38, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(39, 5, 'product_belongsto_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"banners\",\"pivot\":\"0\",\"taggable\":\"0\"}', 2),
(40, 6, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 2),
(41, 6, 'product_id', 'hidden', 'Product Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(42, 6, 'size', 'number', 'Size', 1, 1, 1, 1, 1, 1, '{}', 4),
(43, 6, 'color', 'color', 'Color', 1, 1, 1, 1, 1, 1, '{}', 5),
(44, 6, 'images', 'multiple_images', 'Images', 0, 1, 1, 1, 1, 1, '{}', 7),
(45, 6, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(46, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(47, 6, 'product_attribute_belongsto_product_relationship', 'relationship', 'products', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Product\",\"table\":\"products\",\"type\":\"belongsTo\",\"column\":\"product_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"banners\",\"pivot\":\"0\",\"taggable\":\"0\"}', 1),
(48, 7, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(49, 7, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 2),
(50, 7, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
(51, 7, 'link', 'text', 'Link', 1, 1, 1, 1, 1, 1, '{}', 4),
(52, 7, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, '{}', 5),
(53, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(54, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(55, 5, 'featured', 'checkbox', 'Featured', 0, 1, 1, 1, 1, 1, '{}', 8),
(56, 5, 'popular', 'checkbox', 'Popular', 0, 1, 1, 1, 1, 1, '{}', 9),
(57, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 1, 1, 1, 1, 1, '{}', 6),
(58, 6, 'details', 'code_editor', 'Details', 1, 1, 1, 1, 1, 1, '{}', 6),
(59, 8, 'id', 'hidden', 'Id', 1, 1, 1, 1, 1, 1, '{}', 1),
(60, 8, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(61, 8, 'type', 'text', 'Type', 1, 1, 1, 1, 1, 1, '{}', 3),
(62, 8, 'target', 'text', 'Target', 0, 1, 1, 1, 1, 1, '{}', 4),
(63, 8, 'value', 'number', 'Value', 1, 1, 1, 1, 1, 1, '{}', 5),
(64, 8, 'attributes', 'hidden', 'Attributes', 0, 1, 1, 1, 1, 1, '{}', 6),
(65, 8, 'order', 'hidden', 'Order', 0, 1, 1, 1, 1, 1, '{}', 7),
(66, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(67, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-07-25 13:28:39', '2020-07-27 12:07:48'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-07-25 13:28:40', '2020-07-25 13:28:40'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-07-25 13:28:40', '2020-07-27 12:08:48'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'App\\Category', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":\"name\",\"order_direction\":\"desc\",\"default_search_key\":\"name\",\"scope\":null}', '2020-07-25 13:40:26', '2020-07-27 12:52:03'),
(5, 'products', 'products', 'Product', 'Products', 'voyager-bag', 'App\\Product', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-07-25 14:39:26', '2020-07-26 13:38:42'),
(6, 'product_attributes', 'product-attributes', 'Product Attribute', 'Product Attributes', NULL, 'App\\ProductAttribute', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-07-25 15:13:50', '2020-07-27 13:18:18'),
(7, 'banners', 'banners', 'Banner', 'Banners', NULL, 'App\\Banner', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-07-26 10:53:51', '2020-07-27 12:51:23'),
(8, 'coupon_discounts', 'coupon-discounts', 'Coupon Discount', 'Coupon Discounts', NULL, 'App\\CouponDiscount', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-07-28 07:26:35', '2020-07-28 07:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_addresses`
--

CREATE TABLE `delivery_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moblie` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-07-25 13:28:43', '2020-07-25 13:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-07-25 13:28:43', '2020-07-25 13:28:43', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2020-07-25 13:28:43', '2020-07-25 13:28:43', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2020-07-25 13:28:43', '2020-07-25 13:28:43', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2020-07-25 13:28:44', '2020-07-25 13:28:44', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2020-07-25 13:28:44', '2020-07-25 13:28:44', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2020-07-25 13:28:44', '2020-07-25 13:28:44', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2020-07-25 13:28:44', '2020-07-25 13:28:44', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2020-07-25 13:28:44', '2020-07-25 13:28:44', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2020-07-25 13:28:44', '2020-07-25 13:28:44', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2020-07-25 13:28:44', '2020-07-25 13:28:44', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 13, '2020-07-25 13:28:54', '2020-07-25 13:28:54', 'voyager.hooks', NULL),
(12, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 15, '2020-07-25 13:40:27', '2020-07-25 13:40:27', 'voyager.categories.index', NULL),
(13, 1, 'Products', '', '_self', 'voyager-bag', NULL, NULL, 16, '2020-07-25 14:39:27', '2020-07-25 14:39:27', 'voyager.products.index', NULL),
(14, 1, 'Product Attributes', '', '_self', NULL, NULL, NULL, 17, '2020-07-25 15:13:51', '2020-07-25 15:13:51', 'voyager.product-attributes.index', NULL),
(15, 1, 'Banners', '', '_self', NULL, NULL, NULL, 18, '2020-07-26 10:53:52', '2020-07-26 10:53:52', 'voyager.banners.index', NULL),
(16, 1, 'Coupon Discounts', '', '_self', NULL, NULL, NULL, 19, '2020-07-28 07:26:36', '2020-07-28 07:26:36', 'voyager.coupon-discounts.index', NULL);

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2020_06_22_185434_create_banners_table', 1),
(25, '2020_06_22_193700_create_categories_table', 1),
(26, '2020_06_23_183033_create_products_table', 1),
(27, '2020_06_23_190711_create_product_attributes_table', 1),
(28, '2020_06_23_191944_create_product_images_table', 1),
(29, '2020_07_01_182318_create_product_reviews_table', 1),
(30, '2020_07_06_195645_create_cart_storages_table', 1),
(31, '2020_07_07_181325_create_wishlist_storages_table', 1),
(32, '2020_07_17_184024_create_coupon_discounts_table', 1),
(33, '2020_07_28_201343_create_orders_table', 2),
(34, '2020_07_28_203235_create_delivery_addresses_table', 2),
(35, '2020_07_28_201312_create_order_products_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moblie` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `shipping_charges` double(8,2) NOT NULL,
  `coupon_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_amount` double(8,2) DEFAULT NULL,
  `order_sttatus` tinyint(1) DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-07-25 13:28:45', '2020-07-25 13:28:45'),
(2, 'browse_bread', NULL, '2020-07-25 13:28:45', '2020-07-25 13:28:45'),
(3, 'browse_database', NULL, '2020-07-25 13:28:45', '2020-07-25 13:28:45'),
(4, 'browse_media', NULL, '2020-07-25 13:28:45', '2020-07-25 13:28:45'),
(5, 'browse_compass', NULL, '2020-07-25 13:28:45', '2020-07-25 13:28:45'),
(6, 'browse_menus', 'menus', '2020-07-25 13:28:45', '2020-07-25 13:28:45'),
(7, 'read_menus', 'menus', '2020-07-25 13:28:45', '2020-07-25 13:28:45'),
(8, 'edit_menus', 'menus', '2020-07-25 13:28:45', '2020-07-25 13:28:45'),
(9, 'add_menus', 'menus', '2020-07-25 13:28:45', '2020-07-25 13:28:45'),
(10, 'delete_menus', 'menus', '2020-07-25 13:28:46', '2020-07-25 13:28:46'),
(11, 'browse_roles', 'roles', '2020-07-25 13:28:46', '2020-07-25 13:28:46'),
(12, 'read_roles', 'roles', '2020-07-25 13:28:46', '2020-07-25 13:28:46'),
(13, 'edit_roles', 'roles', '2020-07-25 13:28:46', '2020-07-25 13:28:46'),
(14, 'add_roles', 'roles', '2020-07-25 13:28:46', '2020-07-25 13:28:46'),
(15, 'delete_roles', 'roles', '2020-07-25 13:28:46', '2020-07-25 13:28:46'),
(16, 'browse_users', 'users', '2020-07-25 13:28:46', '2020-07-25 13:28:46'),
(17, 'read_users', 'users', '2020-07-25 13:28:47', '2020-07-25 13:28:47'),
(18, 'edit_users', 'users', '2020-07-25 13:28:47', '2020-07-25 13:28:47'),
(19, 'add_users', 'users', '2020-07-25 13:28:47', '2020-07-25 13:28:47'),
(20, 'delete_users', 'users', '2020-07-25 13:28:47', '2020-07-25 13:28:47'),
(21, 'browse_settings', 'settings', '2020-07-25 13:28:47', '2020-07-25 13:28:47'),
(22, 'read_settings', 'settings', '2020-07-25 13:28:47', '2020-07-25 13:28:47'),
(23, 'edit_settings', 'settings', '2020-07-25 13:28:47', '2020-07-25 13:28:47'),
(24, 'add_settings', 'settings', '2020-07-25 13:28:47', '2020-07-25 13:28:47'),
(25, 'delete_settings', 'settings', '2020-07-25 13:28:48', '2020-07-25 13:28:48'),
(26, 'browse_hooks', NULL, '2020-07-25 13:28:54', '2020-07-25 13:28:54'),
(27, 'browse_categories', 'categories', '2020-07-25 13:40:27', '2020-07-25 13:40:27'),
(28, 'read_categories', 'categories', '2020-07-25 13:40:27', '2020-07-25 13:40:27'),
(29, 'edit_categories', 'categories', '2020-07-25 13:40:27', '2020-07-25 13:40:27'),
(30, 'add_categories', 'categories', '2020-07-25 13:40:27', '2020-07-25 13:40:27'),
(31, 'delete_categories', 'categories', '2020-07-25 13:40:27', '2020-07-25 13:40:27'),
(32, 'browse_products', 'products', '2020-07-25 14:39:27', '2020-07-25 14:39:27'),
(33, 'read_products', 'products', '2020-07-25 14:39:27', '2020-07-25 14:39:27'),
(34, 'edit_products', 'products', '2020-07-25 14:39:27', '2020-07-25 14:39:27'),
(35, 'add_products', 'products', '2020-07-25 14:39:27', '2020-07-25 14:39:27'),
(36, 'delete_products', 'products', '2020-07-25 14:39:27', '2020-07-25 14:39:27'),
(37, 'browse_product_attributes', 'product_attributes', '2020-07-25 15:13:51', '2020-07-25 15:13:51'),
(38, 'read_product_attributes', 'product_attributes', '2020-07-25 15:13:51', '2020-07-25 15:13:51'),
(39, 'edit_product_attributes', 'product_attributes', '2020-07-25 15:13:51', '2020-07-25 15:13:51'),
(40, 'add_product_attributes', 'product_attributes', '2020-07-25 15:13:51', '2020-07-25 15:13:51'),
(41, 'delete_product_attributes', 'product_attributes', '2020-07-25 15:13:51', '2020-07-25 15:13:51'),
(42, 'browse_banners', 'banners', '2020-07-26 10:53:51', '2020-07-26 10:53:51'),
(43, 'read_banners', 'banners', '2020-07-26 10:53:51', '2020-07-26 10:53:51'),
(44, 'edit_banners', 'banners', '2020-07-26 10:53:52', '2020-07-26 10:53:52'),
(45, 'add_banners', 'banners', '2020-07-26 10:53:52', '2020-07-26 10:53:52'),
(46, 'delete_banners', 'banners', '2020-07-26 10:53:52', '2020-07-26 10:53:52'),
(47, 'browse_coupon_discounts', 'coupon_discounts', '2020-07-28 07:26:36', '2020-07-28 07:26:36'),
(48, 'read_coupon_discounts', 'coupon_discounts', '2020-07-28 07:26:36', '2020-07-28 07:26:36'),
(49, 'edit_coupon_discounts', 'coupon_discounts', '2020-07-28 07:26:36', '2020-07-28 07:26:36'),
(50, 'add_coupon_discounts', 'coupon_discounts', '2020-07-28 07:26:36', '2020-07-28 07:26:36'),
(51, 'delete_coupon_discounts', 'coupon_discounts', '2020-07-28 07:26:36', '2020-07-28 07:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `featured` tinyint(1) DEFAULT NULL,
  `popular` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `stock`, `price`, `featured`, `popular`, `created_at`, `updated_at`) VALUES
(2, 1, 'Manish Diwakar', '<p>eeeeeeeeeeeeedddd</p>', 7567, 646, 0, 1, '2020-07-26 12:14:00', '2020-07-27 07:52:07'),
(3, 1, 'Ashish Kashyap', '<p>44444ttt</p>', 44, 553, 1, 0, '2020-07-26 12:15:00', '2020-07-27 07:51:23'),
(4, 1, 'Tarun KAshyap', '<p>jjjjjjj</p>', 98, 887, 1, 1, '2020-07-26 13:02:00', '2020-07-26 13:39:14'),
(5, 1, 'Ashish Kashyap', '<p>ccdd</p>', 43, 776, 1, 0, '2020-07-27 06:30:11', '2020-07-27 06:30:11'),
(7, 1, 'anurag', '<p>ddsfdfdfdfdfdf</p>', 54545, 454, 0, 1, '2020-07-27 12:19:49', '2020-07-27 12:19:49'),
(8, 1, 'abhijeet', '<p>dfdf</p>', 4, 887, 1, 0, '2020-07-27 12:56:51', '2020-07-27 12:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `product_id`, `size`, `details`, `color`, `images`, `created_at`, `updated_at`) VALUES
(3, 3, '44', '', '#1eae4e', '[\"product-attributes\\\\July2020\\\\id06EfaqmuH41KuWMRxG.jpg\",\"product-attributes\\\\July2020\\\\2bDUOIYkkUXGyvuoGpri.jpg\",\"product-attributes\\\\July2020\\\\wVRzAukNrt22x7uzvJhl.jpg\",\"product-attributes\\\\July2020\\\\yL1UncehHf3rTu6hg3g6.jpg\"]', '2020-07-26 12:16:30', '2020-07-26 12:16:30'),
(4, 2, '545', '', '#c31d1d', '[\"product-attributes\\\\July2020\\\\XCOWa2IY9OaLI7ydGQwJ.jpg\",\"product-attributes\\\\July2020\\\\ciAE6jdv8Jho4mqJFlFA.jpg\",\"product-attributes\\\\July2020\\\\ZcneXiK35DHhazYbv1rc.jpg\",\"product-attributes\\\\July2020\\\\dJTTbuMEJhnG20YRaiJQ.jpg\"]', '2020-07-26 12:22:00', '2020-07-27 09:10:19'),
(5, 4, '87', '', '#723c3c', '[\"product-attributes\\\\July2020\\\\tCsfGqr1zknTCUtyTvWY.jpg\",\"product-attributes\\\\July2020\\\\86P9rrnUU8tocjXc7kyG.jpg\",\"product-attributes\\\\July2020\\\\i2NsU3zha8NL565wKsdp.jpg\",\"product-attributes\\\\July2020\\\\ChWoxznMs10yJxKSUXYc.jpg\"]', '2020-07-26 13:03:28', '2020-07-26 13:03:28'),
(6, 5, '65', '', '#000000', '[\"product-attributes\\\\July2020\\\\eTCHbyf3cRwS9FIbEzSp.jpg\",\"product-attributes\\\\July2020\\\\YxZFQXqNFwJl4VwlDZkL.jpg\",\"product-attributes\\\\July2020\\\\HkQ8ZnMb2vAffQIBwYdB.jpg\",\"product-attributes\\\\July2020\\\\fBKoWAUn5HQxYFCAqcKH.jpg\"]', '2020-07-27 06:32:00', '2020-07-27 12:11:39'),
(8, 7, '8887', '', '#000000', '[\"product-attributes\\\\July2020\\\\id0xwZbnPXH9joMxvXTG.jpg\",\"product-attributes\\\\July2020\\\\Lof4v9fOKdphBMg5rEtQ.jpg\",\"product-attributes\\\\July2020\\\\zJzvrhXfh8paeeEWuof3.jpg\",\"product-attributes\\\\July2020\\\\MujJiu8uQ3mt3nw5fNYY.jpg\"]', '2020-07-27 12:26:00', '2020-07-27 12:42:31'),
(9, 8, '44454', '<h1>hflkhfklf</h1>', '#000000', '[\"product-attributes\\\\July2020\\\\f5m1s78F92uEKd1Dcwdn.jpg\",\"product-attributes\\\\July2020\\\\5ybnFiYu4IwRyPFoeELa.jpg\",\"product-attributes\\\\July2020\\\\6JB7BsEXDc8r9oFmmwSQ.JPG\",\"product-attributes\\\\July2020\\\\sHFoGzdu5IOyFE1Xiycd.jpg\"]', '2020-07-27 12:59:00', '2020-07-27 13:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `product_id`, `user_id`, `message`, `rating`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'yyyhhhgg', 3, '2020-07-26 15:04:40', '2020-07-26 15:04:40'),
(2, 2, 1, 'dfdfd', 0, '2020-07-29 13:26:25', '2020-07-29 13:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-07-25 13:28:44', '2020-07-25 13:28:44'),
(2, 'user', 'Normal User', '2020-07-25 13:28:44', '2020-07-25 13:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin@admin', 'users/default.png', NULL, '$2y$10$jiyLdD7qS.kNaaXSzp2jzelQ36wjCQ0zR18YbGWao0xigS/dqNAsO', 'za7Ato1jOKpKZD8Aw5KDadNvsRoQ7YSTAU2KWoTR6m3lBFLBGrOU06Re17oC', NULL, '2020-07-25 13:34:16', '2020-07-25 13:34:17'),
(2, 2, 'Ashish Kashyap', 'kashyapashish272@gmail.com', 'users/default.png', NULL, '$2y$10$2JHQYPXKez1OMTBTJqxjCe6m47Uqdzet4YPt6GY130HOxGL7xZRni', NULL, NULL, '2020-07-29 11:47:19', '2020-07-29 11:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_storages`
--

CREATE TABLE `wishlist_storages` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlist_storages`
--

INSERT INTO `wishlist_storages` (`id`, `cart_data`, `created_at`, `updated_at`) VALUES
('1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:5:{i:2;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:16:\"App\\CartDatabase\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:7:{s:2:\"id\";i:2;s:4:\"name\";s:14:\"Manish Diwakar\";s:5:\"price\";i:646;s:8:\"quantity\";i:3;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"image\";s:52:\"product-attributes\\July2020\\XCOWa2IY9OaLI7ydGQwJ.jpg\";}}s:10:\"conditions\";a:0:{}s:15:\"associatedModel\";s:7:\"Product\";}}i:4;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:16:\"App\\CartDatabase\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:7:{s:2:\"id\";i:4;s:4:\"name\";s:13:\"Tarun KAshyap\";s:5:\"price\";i:887;s:8:\"quantity\";i:4;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"image\";s:52:\"product-attributes\\July2020\\tCsfGqr1zknTCUtyTvWY.jpg\";}}s:10:\"conditions\";a:0:{}s:15:\"associatedModel\";s:7:\"Product\";}}i:5;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:16:\"App\\CartDatabase\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:7:{s:2:\"id\";i:5;s:4:\"name\";s:14:\"Ashish Kashyap\";s:5:\"price\";i:776;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"image\";s:52:\"product-attributes\\July2020\\eTCHbyf3cRwS9FIbEzSp.jpg\";}}s:10:\"conditions\";a:0:{}s:15:\"associatedModel\";s:7:\"Product\";}}i:7;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:16:\"App\\CartDatabase\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:7:{s:2:\"id\";i:7;s:4:\"name\";s:6:\"anurag\";s:5:\"price\";i:454;s:8:\"quantity\";i:2;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"image\";s:52:\"product-attributes\\July2020\\id0xwZbnPXH9joMxvXTG.jpg\";}}s:10:\"conditions\";a:0:{}s:15:\"associatedModel\";s:7:\"Product\";}}i:8;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:16:\"App\\CartDatabase\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:7:{s:2:\"id\";i:8;s:4:\"name\";s:8:\"abhijeet\";s:5:\"price\";i:887;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"image\";s:52:\"product-attributes\\July2020\\f5m1s78F92uEKd1Dcwdn.jpg\";}}s:10:\"conditions\";a:0:{}s:15:\"associatedModel\";s:7:\"Product\";}}}}', '2020-07-27 09:58:53', '2020-07-29 15:29:13'),
('1234_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:2:{i:2;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:16:\"App\\CartDatabase\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:7:{s:2:\"id\";i:2;s:4:\"name\";s:14:\"Manish Diwakar\";s:5:\"price\";i:646;s:8:\"quantity\";s:1:\"1\";s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"image\";s:52:\"product-attributes\\July2020\\XCOWa2IY9OaLI7ydGQwJ.jpg\";}}s:10:\"conditions\";a:0:{}s:15:\"associatedModel\";s:7:\"Product\";}}i:3;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:16:\"App\\CartDatabase\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:7:{s:2:\"id\";i:3;s:4:\"name\";s:14:\"Ashish Kashyap\";s:5:\"price\";i:553;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"image\";s:52:\"product-attributes\\July2020\\id06EfaqmuH41KuWMRxG.jpg\";}}s:10:\"conditions\";a:0:{}s:15:\"associatedModel\";s:7:\"Product\";}}}}', '2020-07-29 15:18:21', '2020-07-29 15:23:58'),
('2_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:8;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:16:\"App\\CartDatabase\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:7:{s:2:\"id\";i:8;s:4:\"name\";s:8:\"abhijeet\";s:5:\"price\";i:887;s:8:\"quantity\";s:1:\"1\";s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"image\";s:52:\"product-attributes\\July2020\\f5m1s78F92uEKd1Dcwdn.jpg\";}}s:10:\"conditions\";a:0:{}s:15:\"associatedModel\";s:7:\"Product\";}}}}', '2020-07-30 02:34:05', '2020-07-30 02:34:05'),
('lDCFwchY4LXj7w01IjRoaESVLvxyw5GVE1YskBXl_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:0:{}}', '2020-07-29 15:14:49', '2020-07-29 15:43:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_storages`
--
ALTER TABLE `cart_storages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_storages_id_index` (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `coupon_discounts`
--
ALTER TABLE `coupon_discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_id_foreign` (`order_id`),
  ADD KEY `order_products_user_id_foreign` (`user_id`),
  ADD KEY `order_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_attributes_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_reviews_product_id_foreign` (`product_id`),
  ADD KEY `product_reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- Indexes for table `wishlist_storages`
--
ALTER TABLE `wishlist_storages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlist_storages_id_index` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coupon_discounts`
--
ALTER TABLE `coupon_discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  ADD CONSTRAINT `delivery_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `order_products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD CONSTRAINT `product_attributes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `product_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
