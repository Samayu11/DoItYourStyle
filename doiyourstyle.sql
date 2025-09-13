-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2025 at 10:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doiyourstyle`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `price` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `image1`, `image2`, `image3`, `product`, `Description`, `price`, `quantity`, `category`) VALUES
(1, 'productIMG/hat1/ha1-front.png', 'productIMG/hat1/ha1-top.png', 'productIMG/hat1/ha1-bottom.png', 'productIMG/hat1/ha1-side.png', 'Bowl Hat', 'Bowl Hat like mafia', '4', 4, 'Top'),
(2, 'productIMG/flannel/flannel-front.png', 'productIMG/flannel/flannel-side.png', 'productIMG/flannel/flannel-bck.png', '', 'Flannel', 'female Flannel', '10', 50, 'Outwear'),
(3, 'productIMG/pants/pants-front.jpg', 'productIMG/pants/pants-back.jpg', '', '', 'Boxer', 'Short Pants (not stink)', '50', 20, 'Bottom'),
(4, 'productIMG/jacket/jacket-front.png', 'productIMG/jacket/jacket-side.png', 'productIMG/jacket/jacket-back.png', '', 'Bubble Jacket', 'Rich Dripp for Rich dude', '20', 12, 'Outwear'),
(5, 'productIMG/jeans/jeans-front.jpg', 'productIMG/jeans/jeans-side.jpg', 'productIMG/jeans/jeans-backk.jpg', '', 'New Jeanz', 'OMG OMG NJZ songs', '30', 10, 'Bottom'),
(6, 'productIMG/shoes/shoes-front.png', 'productIMG/shoes/shoes-side.png', 'productIMG/shoes/shoes-up.png', 'productIMG/shoes/shoes-bottom.png', 'Sneaker', 'Clean senaker for you', '15', 45, 'Shoes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
