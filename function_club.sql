-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 06:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `function_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `password`, `email`, `phone`, `address`) VALUES
(7, 'Thant Zin Nyan', '4297f44b13955235245b2497399d7a93', 'thanzinnyan@gamil.com', '09789282828', 'YGN'),
(8, 'Han Wai Htun', '4297f44b13955235245b2497399d7a93', 'hanwaihtun@gamil.com', '09767072571', 'YGN'),
(9, 'Aung Khant Kyaw', '4297f44b13955235245b2497399d7a93', 'aungkhantkyaw@gamil.com', '0926584627', 'YGN'),
(10, 'Hein Htet Aung', '4297f44b13955235245b2497399d7a93', 'heinhtetaung@gmail.com', '098689256858`', 'YGN'),
(11, 'Aung Min Htun', '4297f44b13955235245b2497399d7a93', 'aungminhtun@gmail.com', '094234532154', 'YGN\r\n'),
(12, 'Myat Bhone Kyaw', '4297f44b13955235245b2497399d7a93', 'myatbhonekyaw@gmail.com', '0982572876247', 'YGN');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Man'),
(2, 'Woman'),
(3, 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(2555) NOT NULL,
  `phone` int(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `delivery_name` varchar(30) NOT NULL,
  `delivery_phone` varchar(20) NOT NULL,
  `delivery_address` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `send_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `delivery_name`, `delivery_phone`, `delivery_address`, `order_date`, `status`, `send_date`) VALUES
(1, 4, 'Hein Htet AUmh', '0865675', 'Address', '2020-07-08', 0, '0000-00-00'),
(2, 4, 'Hein Htet AUmh', '0865675', 'Address', '2020-07-08', 0, '0000-00-00'),
(3, 4, 'Hein Htet AUmh', '0865675', 'Address', '2020-07-08', 0, '0000-00-00'),
(4, 4, 'Hein Htet AUmh', '0865675', 'Address', '2020-07-08', 0, '0000-00-00'),
(5, 4, 'Hein Htet AUmh', '0865675', 'Address', '2020-07-08', 0, '0000-00-00'),
(6, 12, 'Han Wai Htun', '09767072571', 'YGN', '2020-07-16', 0, '0000-00-00'),
(7, 16, 'Aung Min Htun', '09852475872648', 'YGN', '2020-07-22', 0, '0000-00-00'),
(8, 17, 'Han Wai Htun', '09767072571', 'YGN', '2020-07-22', 0, '0000-00-00'),
(9, 17, 'Han Wai Htun', '09767072571', 'YGN', '2020-07-22', 0, '0000-00-00'),
(10, 15, 'Aung Khant Kyaw', '097287582957', 'YGN', '2020-07-22', 0, '0000-00-00'),
(11, 13, 'Hein Htet Aung', '097574873648', 'YGN', '2020-07-28', 0, '0000-00-00'),
(12, 13, 'Hein Htet Aung', '097574873648', 'YGN', '2020-07-28', 0, '0000-00-00'),
(13, 13, 'Hein Htet Aung', '097574873648', 'YGN', '2020-07-28', 0, '0000-00-00'),
(14, 13, 'Hein Htet Aung', '097574873648', 'YGN', '2020-07-28', 0, '0000-00-00'),
(15, 13, 'Hein Htet Aung', '097574873648', 'YGN', '2020-07-28', 0, '0000-00-00'),
(16, 13, 'Hein Htet Aung', '097574873648', 'YGN', '2020-07-28', 0, '0000-00-00'),
(17, 13, 'Hein Htet Aung', '097574873648', 'YGN', '2020-07-28', 0, '0000-00-00'),
(18, 13, 'Hein Htet Aung', '097574873648', 'YGN', '2020-07-28', 0, '0000-00-00'),
(19, 13, 'Hein Htet Aung', '097574873648', 'YGN', '2020-07-30', 0, '0000-00-00'),
(20, 13, 'Hein Htet Aung', '097574873648', 'YGN', '2020-07-30', 0, '0000-00-00'),
(21, 13, 'Hein Htet Aung', '097574873648', 'YGN', '2020-07-30', 0, '0000-00-00'),
(22, 13, 'Hein Htet Aung', '097574873648', 'YGN', '2020-07-30', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `product_qty`, `amount`) VALUES
(3, 11, 1, 2345),
(4, 0, 2, 0),
(4, 9, 1, 1230),
(4, 8, 1, 1400),
(5, 11, 1, 2345),
(5, 9, 1, 1230),
(6, 17, 1, 160),
(7, 16, 1, 140),
(8, 19, 1, 200),
(9, 17, 1, 160),
(10, 17, 1, 160),
(11, 20, 1, 300),
(12, 29, 1, 40),
(14, 16, 1, 140),
(15, 33, 1, 40),
(15, 19, 1, 200),
(16, 20, 3, 900),
(16, 16, 1, 140),
(17, 17, 1, 160),
(17, 16, 1, 140),
(18, 69, 1, 60),
(19, 16, 1, 140),
(20, 19, 1, 200);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `category_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `category_id`, `type_id`, `price`, `qty`, `photo`) VALUES
(16, 'Air Boot', 1, 7, 140, 100, 'Air Boost.jpg'),
(17, 'Air Force1 Premium', 1, 7, 160, 100, 'Air Force 1 Premium.jpg'),
(18, 'Air Force1', 1, 7, 200, 100, 'AIr Force 1.jpg'),
(19, 'Air Huarache', 1, 7, 200, 100, 'AIr Huarache.jpg'),
(20, 'Air Jordan1 Low SE', 1, 7, 300, 100, 'Air Jordan 1 Low SE.jpg'),
(21, 'Air Jordan1 Mid', 1, 7, 400, 100, 'Air Jordan 1 Mid.jpg'),
(22, 'Dri Fit', 1, 4, 40, 100, 'Fit Tee.jpg'),
(23, 'Basket Ball Tee', 1, 4, 40, 100, 'Basket Ball Tee.jpg'),
(24, 'Dri Fit Miller', 1, 4, 40, 100, 'Dri Fit Miller.jpg'),
(25, 'Nike Tee', 1, 4, 27, 100, 'Men Tee.jpg'),
(26, 'Tiger Wood  Tee', 1, 4, 35, 100, 'Tiger Wood Tee.jpg'),
(27, 'Swoosh Tee', 1, 4, 30, 100, 'Swoosh Tee.jpg'),
(28, 'Alumni ', 1, 5, 50, 100, 'Alumni.jpg'),
(29, 'Flex Fit', 1, 5, 40, 100, 'Flex Fit.jpg'),
(30, 'Swingman Edition', 1, 5, 46, 100, 'Swingman Edition.jpg'),
(31, 'Alumini Short', 1, 5, 41, 100, 'Alumini Shorts.jpg'),
(32, 'Nike Flex', 1, 7, 30, 100, 'Nke Flex.jpg'),
(33, 'Cargo Shorts', 1, 5, 40, 100, 'Cargo Shorts.jpg'),
(34, 'Sleek Woman Tee', 2, 4, 40, 100, 'sportswear-betrue-womens-cropped-t-shirt-5fxwRD.jpg'),
(35, 'Kit T-shirt', 2, 4, 40, 100, 'sportswear-womens-knit-t-shirt-kCbC3P.jpg'),
(36, 'Short Sleeve', 2, 4, 40, 100, 'city-sleek-womens-short-sleeve-running-top-wBrbK8.jpg'),
(37, 'Dri Fit Woman', 2, 4, 30, 100, 'dri-fit-womens-basketball-t-shirt-ZBNsd7.jpg'),
(38, 'Sportwear', 2, 4, 30, 100, 'sportswear-essential-womens-cropped-t-shirt-891LTF.jpg'),
(39, 'Sportwear Short', 2, 4, 35, 100, 'sportswear-womens-short-sleeve-top-bf81GC.jpg'),
(40, 'Woman Essential Trousre', 2, 5, 30, 100, 'sportswear-essential-womens-fleece-pants-54QNq7.jpg'),
(41, 'Training Tousres', 2, 5, 60, 100, 'sportswear-womens-jersey-capris-4rbLpt.jpg'),
(42, 'Yoga Lux', 2, 5, 70, 100, 'yoga-luxe-womens-infinalon-ribbed-7-8-tights-K8PJv9.jpg'),
(43, 'Yoga Finalon', 2, 5, 65, 100, 'yoga-womens-infinalon-7-8-tights-GlZFqP.jpg'),
(44, 'Pro Woman Tigh', 2, 5, 66, 100, 'pro-womens-7-8-graphic-tights-Vq8VGJ.jpg'),
(45, 'Nike Woman Fit', 2, 5, 80, 100, 'sportswear-icon-clash-womens-pants-jtwWnx.jpg'),
(46, ' Air Max Woman', 2, 7, 150, 100, 'air-force-1-07-womens-shoe-s20PDf.jpg'),
(47, 'Air Force 1', 2, 7, 200, 100, 'air-force-1-big-kids-shoe-GGJ8pQ.jpg'),
(48, 'Air Max 2090', 2, 7, 200, 100, 'air-max-2090-womens-shoe-nk9ZbX.jpg'),
(49, 'Air Zoom', 2, 7, 200, 100, 'air-zoom-arcadia-big-kids-running-shoe-CLTGWC.jpg'),
(50, 'Air Max 270', 2, 7, 160, 100, 'Nike Air Max 270.jpg'),
(51, 'KD13', 2, 7, 200, 100, 'KD13.jpg'),
(52, 'AirZoom', 3, 7, 60, 100, 'air-zoom-speed-little-big-kids-running-shoe-bW4W4n.jpg'),
(53, 'Blazer Low', 3, 7, 70, 100, 'blazer-low-big-kids-shoe-gjWLDZ.jpg'),
(54, 'Air Zoom 1', 3, 7, 80, 100, 'AIr Zoom.jpg'),
(55, 'Blazer High', 3, 7, 100, 100, 'blazer-mid-big-kids-shoe-KLqCJq.jpg'),
(56, 'Jordan Neo', 3, 7, 100, 100, 'Jordan Neo.jpg'),
(57, 'Lebron 7', 3, 7, 150, 100, 'Lebron 17.jpg'),
(58, 'Sleeve Training', 3, 4, 30, 100, 'big-kids-boys-short-sleeve-training-top-bMj2bB.jpg'),
(59, 'Dri Fit Kid', 3, 4, 30, 100, 'dri-fit-boys-short-sleeve-training-top-ssRW3S.jpg'),
(60, 'Boy T-Shirt', 3, 4, 25, 100, 'sportswear-big-kids-boys-t-shirt-K6Qx4Z.jpg'),
(61, 'Kid Tee', 3, 4, 30, 100, 'sportswear-big-kids-boys-t-shirt-wmMDPz.jpg'),
(62, 'Little Kid JDI', 3, 4, 20, 100, 'little-kids-jdi-t-shirt-Nk8KhB.jpg'),
(63, 'Sportwear Kid', 3, 4, 40, 100, 'sportswear-big-kids-boys-t-shirt-XDHcDd.jpg'),
(64, 'Big Kid Boy', 3, 5, 50, 100, 'big-kids-boys-basketball-shorts-9jGdlQ.jpg'),
(65, 'Air Big Kid', 3, 5, 60, 100, 'air-big-kids-boys-shorts-cDB3zn.jpg'),
(66, 'Dri Fit Elite', 3, 5, 60, 100, 'dri-fit-elite-big-kids-boys-basketball-shorts-z4vrJX.jpg'),
(67, 'Dri Fit Premium', 3, 5, 70, 100, 'dri-fit-big-kids-boys-printed-training-shorts-9NnTvr.jpg'),
(68, 'Dri Fit  Little Kid', 3, 5, 55, 100, 'dri-fit-little-kids-shorts-1M6rRD (1).jpg'),
(69, 'Flex kid', 3, 5, 60, 100, 'Flex Sgride Wild.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(4, 'Shits'),
(5, 'Trousres');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(24) NOT NULL,
  `address` varchar(255) NOT NULL,
  `card` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `email`, `phone`, `address`, `card`) VALUES
(11, 'Thant Zin Nyan', '4297f44b13955235245b2497399d7a93', 'thanzinnyan@gamil.com', '09789282828', 'YGN', ''),
(13, 'Hein Htet Aung', '4297f44b13955235245b2497399d7a93', 'heinhtetaung@gmail.com', '097574873648', 'YGN', ''),
(14, 'Myat Bhone Kyaw', '4297f44b13955235245b2497399d7a93', 'myatbhonekyaw@gmail.com', '0975724762981', 'YGN\r\n', ''),
(15, 'Aung Khant Kyaw', '4297f44b13955235245b2497399d7a93', 'aungkhantkyaw@gamil.com', '097287582957', 'YGN', ''),
(16, 'Aung Min Htun', 'ed2b1f468c5f915f3f1cf75d7068baae', 'aungminhtun@gmail.com', '09852475872648', 'YGN', ''),
(17, 'Han Wai Htun', '4297f44b13955235245b2497399d7a93', 'hanwaihtun@gamil.com', '09767072571', 'YGN', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
