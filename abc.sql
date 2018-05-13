-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 04:41 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ios', '9e304d4e8df1b74cfa009913198428ab'),
(1, 'ios', '9e304d4e8df1b74cfa009913198428ab'),
(0, 'abcd', 'abcd'),
(0, 'abcd', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `city` text NOT NULL,
  `pincode` int(6) NOT NULL,
  `address` text NOT NULL,
  `booked_time` int(11) NOT NULL,
  `dispatch_time` int(11) NOT NULL,
  `status` text NOT NULL,
  `status_code` int(1) NOT NULL,
  `product_stack` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `user_id`, `name`, `email`, `mobile`, `city`, `pincode`, `address`, `booked_time`, `dispatch_time`, `status`, `status_code`, `product_stack`) VALUES
(1, 1, 'husain saify', 'hsnsaify22@gmail.com', '8962239913', 'bhopal', 462001, '2 lakherapura bho[', 1440837817, 0, 'Shipped', 3, '7,'),
(1, 1, 'husain saify', 'hsnsaify22@gmail.com', '8962239913', 'bhopal', 462001, '2 lakherapura bho[', 1440837817, 0, 'Shipped', 3, '7,');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`) VALUES
(1, 'Mobile Phone', 'images/c71ebc0f910bcd807a3d3454d89e61f4/phone1.jpg'),
(2, 'Laptops', 'images/62f15fdd0cedbae7914d783e0945f25f/asus-n76.jpg'),
(3, 'Footwear', 'images/2bc03581595400210f9f7d2a3ba37af3/footware.jpeg'),
(5, 'Dresses', 'images/c791e95aafaf865ec7dcc764e0d75c99/dress2.jpg'),
(1, 'Mobile Phone', 'images/c71ebc0f910bcd807a3d3454d89e61f4/phone1.jpg'),
(2, 'Laptops', 'images/62f15fdd0cedbae7914d783e0945f25f/asus-n76.jpg'),
(3, 'Footwear', 'images/2bc03581595400210f9f7d2a3ba37af3/footware.jpeg'),
(5, 'Dresses', 'images/c791e95aafaf865ec7dcc764e0d75c99/dress2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `mp` varchar(255) NOT NULL,
  `sp` varchar(255) NOT NULL,
  `off` varchar(255) NOT NULL,
  `shipping` int(11) NOT NULL,
  `tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `image`, `description`, `mp`, `sp`, `off`, `shipping`, `tags`) VALUES
(3, 'female', 'Azara Khatun', 'images/b95b130a968c5a2c44b33d794cc122e8/main_900.jpg', 'Alhaj', 'Burma', 'Mayanmar', 'Muslim', 60, 'Average'),
(4, 'male', 'Md. Tawyob', 'images/0642316e5c88a2694e017dab0d444248/aa-Cover-gniijqtq2qgdkv6tq3lnf2ljl5-20171019063300.Medi.jpeg', 'Mir Hossain', 'Burma', 'Mayanmar', 'Muslim', 65, 'Diphtheria.Fever'),
(7, 'male', 'Kobir Ahmed', 'images/ab7ea6225a0b7b090ab88405c05e1fa7/rohingya-camp-sittwe-myanmar.jpg', 'Syed Alam', 'Burma', 'Mayanmar', 'Muslim', 50, 'Cholera'),
(8, 'male', 'Hamid', 'images/7f76bdc526c680aab57d7ad0743bf190/MyanmarBoxers-4.jpg', 'Syed Honon', 'Burma', 'Mayanmar', 'Muslim', 17, 'Fever'),
(9, 'female', 'Layla Bg', 'images/b20858e2693d3c486379280058813d31/images.jpg', 'Sodoron', 'Burma', 'Mayanmar', 'Muslim', 35, 'HIV,AIDS'),
(10, 'male', 'Hasan Barma', 'images/9f233180c646b5bf3b85e4fed2f335fc/bf77456a4211cbf3ca0e323f27efa14b071e84c858e65-SijPXo.jpg', 'Kasem Barma', 'Burma', 'Mayanmar', 'Muslim', 25, 'HIV,'),
(11, 'female', 'Fatema', 'images/35f382ff18f0c7b43c0513b89361f6c6/Laurel-Chor-Rohingya.jpg', 'Ajijul Hok', 'Burma', 'Mayanmar', 'Muslim', 28, 'Fever'),
(12, 'female', 'Rama Khatun', 'images/984fa313032831e4e51aa88be615c6c8/IMGP9026.jpg', 'Islam', 'Burma', 'Mayanmar', 'Muslim', 15, 'HIV,AIDS'),
(13, 'male', 'Ajimulla', 'images/37fb1164d46e60987e1604ca0a5b6731/170113211130-rohingya-refugees-hamid-hossain-super-169.jpg', 'Sirajul', 'Burma', 'Mayanmar', 'Muslim', 30, 'Diphtheria'),
(14, 'female', 'Layru', 'images/1b47c428191b0987486dba4fbcd368fb/gettyimages-853691434.jpg', 'Kadir', 'Burma', 'Mayanmar', 'Muslim', 55, 'Diphtheria'),
(15, 'male', 'shoriful', 'images/f2643046a649f7d594f5a706cdfc2735/rohingya-camp-sittwe-myanmar.jpg', 'cool', 'Noyakhali', 'Noyakhali', 'Noyakhailla', 18, 'pathetic'),
(16, 'male', 'sifat', 'images/05ab5554650e6f55194c5c8cd6efea60/rohingya-camp-sittwe-myanmar.jpg', 'khan sifat', 'Burma', 'Mayanmar', 'Muslim', 40, 'fever'),
(17, 'male', 'palash', 'images/235c5dee73b46ecee9d59a7d7eef65aa/170113211130-rohingya-refugees-hamid-hossain-super-169.jpg', 'cool', 'Burma', 'Mayanmar', 'Muslim', 22, 'average');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `phone`, `password`) VALUES
(1, 'test', 'test@test.com', '8962239913', '098f6bcd4621d373cade4e832627b4f6'),
(1, 'test', 'test@test.com', '8962239913', '098f6bcd4621d373cade4e832627b4f6'),
(0, 'qwe', 'qwe@gmail.com', '2345678909', '76d80224611fc919a5d54f0ff9fba446'),
(0, 'qwe', 'qwew@gmail.com', '1212121212', '202cb962ac59075b964b07152d234b70');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
