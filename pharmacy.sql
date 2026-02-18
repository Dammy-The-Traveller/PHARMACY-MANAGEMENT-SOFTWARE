-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2025 at 03:09 PM
-- Server version: 8.3.0
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `frequent_links`
--

DROP TABLE IF EXISTS `frequent_links`;
CREATE TABLE IF NOT EXISTS `frequent_links` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `page_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `count` int NOT NULL DEFAULT '1',
  `last_visited` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','pharmacist','HR','manager','accountant','guest') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pharmacist',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Demo', 'Admin', 'demo_admin', 'admin@pharmacy.com', '$2y$10$.7OKXo/EcYTO.ZyvIjIsseP6zrmDOSDjkD3nLUSGQvyoEnpDvwcyy', 'admin', 1, '2025-06-16 14:16:40', '2025-06-20 14:25:12'),
(10, 'Pharma', 'Cist', 'pharma', 'pharmacist@pharmacy.com', '$2y$10$.7OKXo/EcYTO.ZyvIjIsseP6zrmDOSDjkD3nLUSGQvyoEnpDvwcyy', 'pharmacist', 1, '2025-06-20 14:21:46', '2025-06-20 14:21:46'),
(11, 'Mana', 'Ger', 'manager', 'manager@pharmacy.com', '$2y$10$NubzGCGph6OkI67SQc2M1urbjoXu5n30IrwH0mtDMZfMAE0Zb5flO', 'manager', 1, '2025-06-20 14:21:46', '2025-06-20 14:21:46'),
(12, 'Ac', 'Countant', 'accountant', 'accountant@pharmacy.com', '$2y$10$OFjqsw/KdDrVKQLCEQjEK./3WVfNgyS/D/N43l1mkDdenziRWbp/C', 'accountant', 1, '2025-06-20 14:21:46', '2025-06-20 14:21:46'),
(13, 'Hu', 'Manresource', 'hr', 'hr@pharmacy.com', '$2y$10$kvbxiROZao5.xzPNf.NKLOdk8nTG6zcdXCcTNf.7oS0.GIbomjSwa', 'HR', 1, '2025-06-20 14:21:46', '2025-06-20 14:21:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
