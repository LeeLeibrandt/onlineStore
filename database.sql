-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 26, 2020 at 05:51 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ecommercewebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'name', 'email', 'phone', 'message');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `firstname`, `lastname`, `email`) VALUES
(5, 'Lee', ' Leibrandt', 'leeleibrandt@gmail.com');


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `quantity`, `img`, `date_added`) VALUES
(6, 'MSFTS ERYS HOODIE', '<p>MSTFS black erys hoodie.</p>\r\n\r\n<h3>Features</h3>\r\n\r\n<ul>\r\n\r\n<li>Adjustable to fit most\r\n</li>\r\n\r\n<li>Lightweight design</li>\r\n</ul>', '450.00', 10, 'h1.png', '2020-05-13 13:19:21'),
(7, 'MSFTS SYRE HOODIE', '<p>MSTFS black syre hoodie.</p>\r\n\r\n<h3>Features</h3>\r\n\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '450.00', 10, 'h2.png', '2020-05-13 13:19:21'),
(8, 'MSFTS PINK HOODIE', '<p>MSTFS trippy pink hoodie.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '450.00', 10, 'h3.jpg', '2020-05-13 13:22:47'),
(9, 'MSFTS BLUE HOODIE', '<p>MSTFS trippy blue hoodie.</p>\r\n<h3>Features</h3>\r\n\\r\\n\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '450.00', 10, 'h4.jpg', '2020-05-13 13:22:47'),
(10, 'MSFTS RED HOODIE', '<p>MSTFS red hoodie.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '300.00', 10, 'h5.jpg', '2020-05-13 13:26:15'),
(11, 'MSFTS BLACK MUSHROOM HOODIE', '<p>MSTFS mushroom hoodie.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '300.00', 10, 'h6.jpg', '2020-05-13 13:26:15'),
(12, 'MSFTS ELECTRIC HOODIE', '<p>MSTFS black electric hoodie.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '350.00', 10, 'h7.jpg', '2020-05-13 13:50:08'),
(13, 'MSFTS COLOR TRIPPY T-SHIRT', '<p>MSTFS trippy t-shirt.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '300.00', 10, 't1.jpg', '2020-05-13 13:50:08'),
(14, 'MSFTS DYED TRIPPY T-SHIRT', '<p>MSTFS trippy t-shirt.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '300.00', 10, 't2.jpg', '2020-05-13 13:50:08'),
(15, 'MSFTS WHITE TRIPPY T-SHIRT', '<p>MSTFS trippy t-shirt.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '250.00', 10, 't3.png', '2020-05-13 13:50:08'),
(16, 'MSFTS black TRIPPY T-SHIRT', '<p>MSTFS trippy t-shirt.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '250.00', 10, 't4.png', '2020-05-13 13:50:08'),
(17, 'MSFTS ONE-WORLD-PINK T-SHIRT', '<p>MSTFS ONE WORLD t-shirt.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '200.00', 10, 't5.jpg', '2020-05-13 13:50:08'),
(18, 'MSFTS ONE-WORLD-WHITE T-SHIRT', '<p>MSTFS ONE WORLD t-shirt.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '200.00', 10, 't6.jpg', '2020-05-13 13:50:08'),
(19, 'MSFTS ONE-WORLD-BLACK T-SHIRT', '<p>MSTFS ONE WORLD t-shirt.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '200.00', 10, 't7.jpg', '2020-05-13 13:50:08'),
(20, 'MSFTS PLAIN LOADING T-SHIRT', '<p>MSTFS ONE WORLD t-shirt.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '200.00', 10, 't8.jpg', '2020-05-13 13:50:08'),
(21, 'MSFTS PLAIN PINK T-SHIRT', '<p>MSTFS ONE WORLD t-shirt.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '200.00', 10, 't9.jpg', '2020-05-13 13:50:08'),
(22, 'MSFTS BLACK JOGGER', '<p>MSTFS jogger</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '350.00', 10, 'p1.jpg', '2020-05-13 13:50:08'),
(23, 'MSFTS WHITE CHINO', '<p>MSTFS white chino</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '400.00', 10, 'p2.png', '2020-05-13 13:50:08'),
(24, 'MSFTS ERYS-BLACK CHINO', '<p>MSTFS erys chino</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '400.00', 10, 'p3.jpg', '2020-05-13 13:50:08'),
(25, 'MSFTS ELECTRIC CHINO', '<p>MSTFS electric chino</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Adjustable to fit most\r\n</li>\r\n<li>Lightweight design</li>\r\n</ul>', '400.00', 10, 'p4.jpg', '2020-05-13 13:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$lEi2z6FOTbnwbdnpZUo78.8Cvi9mVt0gyshKhJvGU8GqxLczzfD2S', '2020-05-18 15:34:26'),
(2, 'BobbyBoy', '$2y$10$rLMoreDA9HyVheliVuEBBe8avEaSjkZTV4qk6J8GkkdIwrwDsHBrK', '2020-05-18 18:17:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
