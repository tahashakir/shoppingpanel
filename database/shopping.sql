-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 05:20 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcati`
--

CREATE TABLE `addcati` (
  `id` int(11) NOT NULL,
  `name` varchar(565) NOT NULL,
  `categoryes` varchar(300) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcati`
--

INSERT INTO `addcati` (`id`, `name`, `categoryes`) VALUES
(35, '', 'Class name'),
(46, '', 'BIRTHDAY'),
(47, '', 'FLOWERS'),
(52, '', 'MOTHER\'S DAY GIFTS'),
(53, '', 'RAMZAN GIFTS'),
(54, '', 'JEWELLERY'),
(55, '', 'PERFUMES'),
(56, '', 'MITHAI & CHOCOLATES'),
(57, '', 'WATCHES');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(250) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mobile`, `email`, `password`, `city`, `address`) VALUES
(1, 'admin', '7896541258', 'admin@gmail.com', 'danishraja', '', ''),
(2, 'awais', '', 'abcd@gmail.com', '$2y$10$/2xrm6x5o6ReMZQa8bFIgOD', '', ''),
(3, 'ami', '', 'danishraja176@gmail.com', '$2y$10$hjE8/rNtxGoqqa9GJXyL7ex', '', ''),
(4, 'awais', '', 'dan7@gmail.com', '$2y$10$ypGYheA873XD/eXHZwYXqu2', '', ''),
(5, 'charmi', '', 'Charmi@gmail.com', '$2y$10$hK7xzC70oDLlgELEySyzae7', '', ''),
(6, 'osama', '', 'sum@gmail.com', '$2y$10$syu22gixDuO9aHhqwRdG..w/5B/KQ2XcBAsRqLSUB/CzU.x/gc9ya', '', ''),
(7, 'kaki', '', 'ami@gmail.com', '$2y$10$H5cp.yWW37DVogw59ANXHehOfCni5lPPx.QwtJQwJkY0THmAd3RoK', '', ''),
(8, 'kjkl', '03359552456', 'abcdd@gmail.com', '437a3cd1392ea3a4f48abca75350b2c5', 'gujrat', 'fg'),
(9, 'junaid', '03359552456', 'junaid@gmail.com', '437a3cd1392ea3a4f48abca75350b2c5', 'gujrat', 'gujrat');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(6) NOT NULL,
  `elecid` int(6) NOT NULL,
  `userid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `elecid`, `userid`) VALUES
(4, 34, 1),
(5, 3, 1),
(7, 15, 1),
(8, 9, 5),
(15, 5, 16),
(27, 5, 28),
(34, 15, 16),
(89, 51, 28),
(90, 52, 28),
(91, 51, 28),
(92, 49, 28),
(93, 51, 28),
(94, 75, 28);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comments` text NOT NULL,
  `date_publish` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comments`, `date_publish`) VALUES
(19, 'awais', 'ffr', '2020-03-26 02:32:26'),
(21, 'gf', 'gfdsd', '2020-03-26 02:49:44'),
(22, 'gf', 'gfdsd', '2020-03-26 02:49:44'),
(23, 'gf', 'gfdsd', '2020-03-26 02:49:44'),
(24, 'gf', 'gfdsd', '2020-03-26 02:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `elecid` int(9) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL,
  `elec_rating` int(3) NOT NULL,
  `image` varchar(90) NOT NULL,
  `discription` varchar(800) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`elecid`, `Title`, `category`, `elec_rating`, `image`, `discription`, `price`) VALUES
(49, 'Blue 3 Piece Summer Dress For Women', 'EthnicWear', 4, '81Fw1rQ3hHL._UL1500_.jpg', 'Neck Embroideprinted Lawn Back & SaleevesLawn Trousers90/70 Air Jet LawnA+ Quality FabricPrinted Chiffon Duppata\r\n2.5 Meters90/70 Air Jet Lawn shirt, 2.5 Meters90/70 Air Jet Lawn Trousers,2.5 Chiffon Duppata A+ quality Fabric', ' 2075'),
(50, 'Imported Branded Dress Shirt For Office ', 'ManShirtPolos', 4, '71+9gwUldZL._UL1500_.jpg', 'Product details of Imported Branded Dress Shirt For Office Wear Shirt - Light-Pink Slim-Fit Cotton-Poplin Shirt', '699'),
(51, 'Cut price Power Stretch Jeans for Men Pl', 'ManJeans', 4, '81beRbokdAL._UL1500_.jpg', 'CUT PRICE STORE Est 1992, has been serving the people of Karachi since 1992 . Always striving to serve our customers with Premium Quality Apparel at the BEST possible price. We specialize in Men Suits , Shirts , Trousers , Shalwar Kameez and all kind of Children Garments.\r\n\r\n Prices You can Trust , Everyday.\r\n\r\n \r\n\r\nPlease note : Please look at the size chart before confirming purchase , also there might be a slight variance in color of actual product and its picture due to brightness and contrast settings on consumer screens .', '895'),
(52, 'Rashid Textile Women Marvi Lawn Collecti', 'SuitsBlazers', 4, '91Ih5mLheLL._UL1500_.jpg', 'Product details of Rashid Textile Women Marvi Lawn Collection Vol 4 3PC -Unstitched Brown Printed Lawn Suit 767-C.Shirt: High Quality Printed lawn+ Lawn Dupatta:+ trouser:plain with 7.5 Mtrs', '889'),
(73, 'Full Chocolate Birthday Cake', 'BIRTHDAY', 5, 'Full-Chocolate-Birthday-Cake-510x537.jpg', 'Weight	5 lbs\r\nFlavor	\r\nKitKat Chocolate, Nutella Chocolate Cake (Rs. 200/pound), Mars Chocolate, Snickers Chocolate, Cadbury Dairy Milk Chocolate, Black Forest (Cream with Cherry), Death by Chocolate, Caramel Crunch, Coffee Cake, Fruity Delight (Mix Fruits), Red Velvet (Rs. 250/pound), Strawberry Cake, Toblerone Chocolate (200/pound), Vanilla Crunch, Vanilla Sponge', '1200'),
(74, '1st Birthday Digit Cake', 'BIRTHDAY', 5, '1st-Birthday-Digit-Cake-510x455.jpg', 'Weight    	6 lbs\r\n\r\n\r\n   Flavor	\r\nKitKat Chocolate, Nutella Chocolate Cake (Rs. 200/pound), Mars Chocolate, Snickers Chocolate, Cadbury Dairy Milk Chocolate, Black Forest (Cream with Cherry), Chocolate Chip, Death by Chocolate, Caramel, Caramel Crunch, Coffee Cake, Fresh Strawberry, Fruity Delight (Mix Fruits), Pineapple, Red Velvet (Rs. 250/pound), Strawberry Cake, Toblerone Chocolate (200/pound), Vanilla Crunch, Vanilla Sponge, White Forest (Cherry with Mix Fruits)', '1200'),
(75, '2 Tiers Anniversary Cake', 'BIRTHDAY', 5, '2-Tiers-Anniversay-Cake.jpg', 'Weight    	12 lbs\r\n\r\nFlavor	\r\n\r\nKitKat Chocolate, Nutella Chocolate Cake (Rs. 200/pound), Mars Chocolate, Snickers Chocolate, Cadbury Dairy Milk Chocolate, Black Forest (Cream with Cherry), Chocolate Chip, Death by Chocolate, Caramel, Caramel Crunch, Coffee Cake, Fresh Strawberry, Fruity Delight (Mix Fruits), Pineapple, Red Velvet (Rs. 250/pound), Strawberry Cake, Toblerone Chocolate (200/pound), Vanilla Crunch, Vanilla Sponge, White Forest (Cherry with Mix Fruits)', '1200'),
(77, '2 Tier Gold White Theme Cake', 'BIRTHDAY', 5, '2-Tier-Gold-White-Theme-Cake-510x531.jpg', 'Weight	   8 lbs\r\n\r\n\r\nFlavor	\r\nKitKat Chocolate, Nutella Chocolate Cake (Rs. 200/pound), Mars Chocolate, Snickers Chocolate, Cadbury Dairy Milk Chocolate, Black Forest (Cream with Cherry), Death by Chocolate, Caramel Crunch, Coffee Cake, Fruity Delight (Mix Fruits), Red Velvet (Rs. 250/pound), Strawberry Cake, Toblerone Chocolate (200/pound), Vanilla Crunch, Vanilla Sponge', '1200'),
(78, 'Couple Anniversary Theme Cake', 'BIRTHDAY', 3, 'Couple-Anniversary-Theme-Cake.jpg', 'Weight	4 lbs\r\nFlavor	\r\nKitKat Chocolate, Nutella Chocolate Cake (Rs. 200/pound), Mars Chocolate, Snickers Chocolate, Cadbury Dairy Milk Chocolate, Black Forest (Cream with Cherry), Chocolate Chip, Death by Chocolate, Caramel, Caramel Crunch, Coffee Cake, Fresh Strawberry, Fruity Delight (Mix Fruits), Pineapple, Red Velvet (Rs. 250/pound), Strawberry Cake, Toblerone Chocolate (200/pound), Vanilla Crunch, Vanilla Sponge, White Forest (Cherry with Mix Fruits)', '1200');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `province` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `amount` varchar(250) NOT NULL,
  `status` varchar(100) NOT NULL,
  `userid` int(30) NOT NULL,
  `elecid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `f_name`, `phone_number`, `province`, `city`, `address`, `c_address`, `amount`, `status`, `userid`, `elecid`) VALUES
(25, 'dani', '03359552456', 'punjab', 'gujrat', 'gujrat', 'gujrat', '6849', '', 28, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(3) NOT NULL,
  `cardnumber` int(10) NOT NULL,
  `card_expairy` varchar(60) NOT NULL,
  `cvc_code` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `userid` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `cardnumber`, `card_expairy`, `cvc_code`, `amount`, `userid`) VALUES
(1, 2147483647, '6/23/203', 656, 718, 5),
(2, 676, '66778', 7667, 0, 5),
(3, 2147483647, '6546', 64654, 0, 16),
(4, 566576, '67', 67, 359, 16);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'danish', 'Danish', '2020-03-26 18:46:07'),
(2, 0, 'sda', 'Danish', '2020-03-26 18:49:47'),
(3, 0, 'fsd', 'Danish', '2020-03-26 19:05:14'),
(4, 0, 'fdsdf', 'dfsfsd', '2020-03-26 19:05:20'),
(5, 0, 'sdf', 'dsf', '2020-03-26 19:05:26'),
(6, 5, 'dads', 'amir', '2020-03-26 19:15:37'),
(7, 5, 'please send me product no ', 'admin', '2020-03-26 19:16:01'),
(8, 0, 'da', 'Danish', '2020-03-26 22:52:53'),
(9, 5, 'g', 'f', '2020-03-26 23:14:46'),
(10, 0, 'hgr', 'Danish', '2020-03-26 23:16:48'),
(11, 0, 'fda', 'amir', '2020-03-26 23:17:33'),
(12, 0, 'sad', 'ami', '2020-03-26 23:19:04'),
(13, 0, 'fg', 'amir', '2020-03-27 00:09:48'),
(14, 8, 'fgg', 'f', '2020-03-27 00:27:30'),
(15, 1, 'jkjkjk', 'jhh', '2020-03-30 06:08:16'),
(16, 12, 'fdsfsdfsd', 'das', '2020-04-29 01:50:33'),
(17, 13, 'gdfgdfgdgdf', 'das', '2020-04-29 01:50:46'),
(18, 13, 'dasdasdas', 'das', '2020-04-29 01:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(150) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `mobile`, `email`, `password`, `city`, `address`) VALUES
(27, 'Ditta', '03359552456', 'ditta@gmail.com', '7f07dee029f94724dd304f4c3d9265d2', 'gujrat', 'gujrat'),
(28, 'abcd', '000000000', 'abcd@gmail.com', '14e1b600b1fd579f47433b88e8d85291', 'gujrat', 'gujrat'),
(30, 'osama', '455445454545', 'd@gmail.com', '14e1b600b1fd579f47433b88e8d85291', 'gujrat', 'kjhu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, '', '', '$2y$10$4XkvryjrDDch.31jtMSrou/jJz6IOmAuAgIKIRJ94D3KeXZdHHHFq'),
(2, '', '', '$2y$10$oHjVf5yLucJoRlohXtSCfeMjVoexjDLPYRP21fW7JCox57u1TL74a'),
(3, 'kjkl', 'admin@gmail.com', '$2y$10$ZPhHXdtR9Xr3qpP53tifM.sschhN2thdFeyNPj21j4t7BPH2Aafee'),
(4, 'danishraja', 'danishraja176@gmail.com', '$2y$10$7Tx/jQsHk5VQXjOKsTbHre8j9peGc78hE5Pi5XOEy1oxx4Vsitw.K');

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `w_id` int(100) NOT NULL,
  `elecid` int(100) NOT NULL,
  `userid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wish_list`
--

INSERT INTO `wish_list` (`w_id`, `elecid`, `userid`) VALUES
(12, 52, 28),
(16, 51, 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcati`
--
ALTER TABLE `addcati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`elecid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcati`
--
ALTER TABLE `addcati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `elecid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `w_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
