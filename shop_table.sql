-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 03:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop_table`
--

CREATE TABLE `shop_table` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_table`
--

INSERT INTO `shop_table` (`id`, `product_name`, `price`, `quantity`) VALUES
(1, 'Ace 24 oz Ball Pein Hammer Steel Head 14.96 in.', 33.99, 93),
(2, 'Ace 8 oz Ball Pein Hammer Steel Head 12.20 in.', 19.99, 23),
(3, 'Ace 16 oz Ball Pein Hammer Steel Head 13.98 in.', 28.99, 0),
(4, 'Ace 12 oz Ball Pein Hammer Steel Head 13.58 in.', 25.99, 42),
(6, 'Ace 32 oz Ball Pein Hammer Steel Head 15.94 in.', 41.99, 4),
(7, 'Ace 4 oz Ball Pein Hammer Steel Head 10.55 in.', 15.99, 11),
(8, 'Vaughan 24 oz Ball Pein Hammer High Carbon Steel Head 15 in.', 22.99, 77),
(9, 'Vaughan 16 oz Ball Pein Hammer High Carbon Steel Head 13.75 in.', 18.99, 39),
(10, 'Milwaukee 3 to 8 in. L Phillips/Slotted Screwdriver Set 10 pc', 42.99, 93),
(11, 'Milwaukee 3 to 8 in. L Phillips/Slotted Screwdriver Set 10 pc', 27.99, 66),
(12, 'Craftsman Multi-Bit Screwdriver Set 8 in. 8 pc', 22.99, 95),
(13, 'Milwaukee Assorted Screwdriver Set 6.0 in. 6 pc', 31.99, 67),
(14, 'Milwaukee Torx Multi-Bit Precision Screwdriver 6 in. 6 pc', 27.99, 29),
(15, 'Milwaukee Phillips/Slotted Screwdriver Kit 6 pc', 27.99, 56),
(16, 'Milwaukee\'s Assorted 11-in-1 Screwdriver/Nut Driver 10 in. 11 pc', 13.99, 52),
(17, 'Craftsman Phillips/Slotted Multi-Bit Screwdriver Set 8 in. 8 pc', 28.99, 19),
(18, 'DeWalt Screwdriver Set 2 in. 31 pc', 15.99, 10),
(19, 'DeWalt Screwdriver Set 2 in. 31 pc', 19.99, 70),
(20, 'Klein Tools Phillips Bits: #2; Slotted Bits: 1/4\" ; 2-in-1 Insulated Flip-Blade 8.2 in. 2 pc', 23.99, 67),
(21, 'Irwin Vise-Grip 6 & 7 in. Alloy Steel Locking Pliers Set', 32.99, 51),
(22, ' Steel Grip 10 in. Steel Straight Jaw Locking Pliers ', 15.99, 51),
(23, ' Milwaukee Torque Lock 10 in. Forged Alloy Steel Straight Jaw Locking Pliers ', 19.99, 93),
(24, ' Milwaukee Torque Lock 10 in. Forged Alloy Steel Curved Jaw Locking Pliers ', 15.99, 42),
(25, ' Milwaukee Torque Lock 7 in. Forged Alloy Steel Curved Jaw Locking Pliers ', 14.99, 10),
(26, ' Milwaukee Torque Lock 9 in. Forged Alloy Steel Long Nose Pliers ', 23.99, 58),
(27, ' Milwaukee Torque Lock 9 in. Forged Alloy Steel Long Nose Pliers ', 27.99, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop_table`
--
ALTER TABLE `shop_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop_table`
--
ALTER TABLE `shop_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
