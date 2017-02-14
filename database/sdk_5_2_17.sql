-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2017 at 07:18 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdk`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_details`
--

CREATE TABLE `category_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(120) NOT NULL,
  `category_description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_details`
--

INSERT INTO `category_details` (`id`, `category_name`, `category_description`) VALUES
(20, 'electronic', ''),
(21, 'computer', 'CricleClock'),
(22, 'education', 'Note Book'),
(23, 'parts', 'HB Pencil'),
(25, 'clothes', 'Rubber Ball'),
(26, 'Tobacco', ''),
(27, 'Books', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_address` varchar(500) NOT NULL,
  `customer_contact1` varchar(100) NOT NULL,
  `customer_contact2` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `customer_name`, `customer_address`, `customer_contact1`, `customer_contact2`, `created_at`) VALUES
(8, 'Shorfuddin', 'ecb', '66666666', '88888888', '2017-01-26 04:53:11'),
(10, 'dipa', 'mirpur', '7787876786', '989898988', '2017-01-26 04:53:11'),
(11, 'babu uddin', 'chitagong', '7787876786', '989898988', '2017-01-26 04:53:11'),
(12, 'rofik', 'dhaka', '7787876786', '989898988', '2017-01-26 04:53:11'),
(13, 'jabed', 'dhaka', '7787876786', '989898988', '2017-01-26 04:53:11'),
(14, 'rasel', 'dhaka', '7787876786', '989898988', '2017-01-26 04:53:11'),
(15, 'shorif', 'dhaka', '7787876786', '989898988', '2017-01-26 04:53:11'),
(16, 'jerin', 'mirpur', '7787876786', '989898988', '2017-01-26 04:53:11'),
(17, 'zahid', 'mirpur', '7787876786', '989898988', '2017-01-26 04:53:11'),
(18, 'Shorfuddin Babu', 'mirpur', '654654', '65454', '2017-01-26 04:53:11'),
(19, 'Emtiaz', 'Mirpur, Dhaka 1216', '0154654', '01654654', '2017-01-26 04:56:03'),
(20, '', '', '', NULL, '2017-02-05 05:59:15'),
(21, 'asasdasd', 'asdasd', '54354', NULL, '2017-02-05 06:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `stock_avail`
--

CREATE TABLE `stock_avail` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(120) NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_avail`
--

INSERT INTO `stock_avail` (`id`, `name`, `quantity`) VALUES
(22, 'Pen', 290),
(23, 'Mobile', 898),
(24, 'T shirt', 500),
(25, 'Book', 200),
(26, 'Money bag', 50),
(27, 'Mouse', 30);

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE `stock_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `stock_id` varchar(120) NOT NULL,
  `stock_name` varchar(120) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `supplier_id` varchar(250) NOT NULL,
  `company_price` decimal(10,2) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `category` varchar(120) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `expire_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_details`
--

INSERT INTO `stock_details` (`id`, `stock_id`, `stock_name`, `stock_quantity`, `supplier_id`, `company_price`, `selling_price`, `category`, `date`, `expire_date`) VALUES
(34, 'SD1', 'Pen', 50, 'babu', '9.00', '11.00', 'educations', '2017-01-26 09:20:06', '0000-00-00 00:00:00'),
(35, 'SD35', 'Book', 40, 'babu', '200.00', '250.00', 'education', '2017-01-26 09:20:10', '0000-00-00 00:00:00'),
(36, 'SD36', 'Money Bag', 30, 'saddam', '7.00', '101.00', 'parts', '2017-01-26 09:20:13', '0000-00-00 00:00:00'),
(37, 'SD37', 'Mobile', 20, 'saddam', '1000.00', '1100.00', 'electronics', '2017-01-26 09:20:16', '0000-00-00 00:00:00'),
(38, 'SD38', 'Mouse', 70, 'saddam', '500.00', '550.00', 'computer', '2017-01-26 09:20:18', '0000-00-00 00:00:00'),
(39, 'SD12', 'Keyboard', 0, '', '250.00', '300.00', 'computer', '2017-01-25 05:56:27', '2017-01-25 00:00:00'),
(40, 'SD45', 'Mouse', 40, 'labib', '300.00', '350.00', 'computer', '2017-01-25 06:02:36', '0000-00-00 00:00:00'),
(41, 'SD', '', 0, '', '0.00', '0.00', '', '2017-01-26 10:55:48', '0000-00-00 00:00:00'),
(42, 'SD', '', 0, '', '0.00', '0.00', '', '2017-01-30 07:47:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stock_entries`
--

CREATE TABLE `stock_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `stock_id` varchar(120) NOT NULL,
  `stock_name` varchar(260) NOT NULL,
  `stock_supplier_name` varchar(200) NOT NULL,
  `category` varchar(120) NOT NULL,
  `quantity` int(11) NOT NULL,
  `company_price` decimal(10,2) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `opening_stock` int(11) NOT NULL,
  `closing_stock` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `username` varchar(120) NOT NULL,
  `type` varchar(50) NOT NULL,
  `salesid` varchar(120) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `mode` varchar(150) NOT NULL,
  `description` varchar(500) NOT NULL,
  `due` datetime NOT NULL,
  `subtotal` int(11) NOT NULL,
  `count1` int(11) NOT NULL,
  `billnumber` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_entries`
--

INSERT INTO `stock_entries` (`id`, `stock_id`, `stock_name`, `stock_supplier_name`, `category`, `quantity`, `company_price`, `selling_price`, `opening_stock`, `closing_stock`, `date`, `username`, `type`, `salesid`, `total`, `payment`, `balance`, `mode`, `description`, `due`, `subtotal`, `count1`, `billnumber`) VALUES
(261, 'PR3', 'Pen', 'babu', 'education', 1000, '9.00', '10.00', 0, 1000, '2013-08-15 00:00:00', 'admin', 'entry', '', '9000.00', '9000.00', '0.00', 'cheque', 'uouo', '0000-00-00 00:00:00', 9000, 1, 'BILL-126'),
(262, 'PR264', 'Book', 'babu', 'education', 1000, '8.00', '10.00', 0, 1000, '2013-08-15 00:00:00', 'admin', 'entry', '', '8000.00', '8000.00', '0.00', 'cheque', '768768', '0000-00-00 00:00:00', 8000, 1, 'BILL-126'),
(263, 'SD263', 'Mobile', 'saddam', 'electronics', 10, '0.00', '10.00', 1000, 990, '2013-08-15 00:00:00', 'admin', 'sales', 'SD263', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'BILL-126'),
(264, 'SD264', 'Money Bag', 'saddam', 'parts', 100, '0.00', '10.00', 990, 890, '2013-08-15 00:00:00', 'admin', 'sales', 'SD264', '1000.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'BILL-127'),
(265, 'SD265', 'Mouse', 'saddam', 'computer', 100, '0.00', '10.00', 890, 790, '2013-08-15 00:00:00', 'admin', 'sales', 'SD265', '1000.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'BILL-127'),
(266, 'SD266', 'Pen', 'babu', 'education', 100, '0.00', '10.00', 790, 690, '2013-08-15 00:00:00', 'admin', 'sales', 'SD266', '1000.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'BILL-127');

-- --------------------------------------------------------

--
-- Table structure for table `stock_sales`
--

CREATE TABLE `stock_sales` (
  `id` int(10) UNSIGNED NOT NULL,
  `transactionid` varchar(250) NOT NULL,
  `sales_date` varchar(100) NOT NULL,
  `selling_price` varchar(200) NOT NULL,
  `product` varchar(300) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `customer` varchar(120) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact` varchar(150) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `dis_amount` decimal(10,0) DEFAULT NULL,
  `grand_total` decimal(10,0) DEFAULT NULL,
  `due_amount` varchar(200) DEFAULT NULL,
  `due` varchar(100) DEFAULT NULL,
  `payment_method` varchar(250) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `billnumber` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_sales`
--

INSERT INTO `stock_sales` (`id`, `transactionid`, `sales_date`, `selling_price`, `product`, `quantity`, `amount`, `customer`, `address`, `contact`, `payment`, `dis_amount`, `grand_total`, `due_amount`, `due`, `payment_method`, `description`, `billnumber`) VALUES
(20, 'SD2635', '', '10.00', '', '10.00', '100.00', 'Shorfuddin', '', '', '10.00', '10', '100', '', '1970-01-01', 'cheque', 'uuuoiuo', 'BILL-126'),
(21, 'SD264', '', '10.00', '', '100.00', '1000.00', 'babu', '', '', '100.00', '10', '1000', '', '1970-01-01', 'cheque', 'iyiuy', 'BILL-127'),
(22, 'SD265', '', '10.00', '', '100.00', '1000.00', 'dipa', '', '', '100.00', '10', '1000', '', '1970-01-01', 'cheque', 'iyiuy', 'BILL-127'),
(23, 'SD450', '', '0.00', '', '5.00', '10.00', 'babu', '', '', '50.00', NULL, '0', '', '0000-00-00', '', '', 'BILL-123'),
(24, 'SD555', '', '10.00', '', '5.00', '50.00', 'babu', '', '', '50.00', NULL, '0', '', '0000-00-00', '', '', 'BILL-123'),
(25, 'SD11111', '', '10.00', '', '5.00', '50.00', 'babu', '', '', '50.00', NULL, NULL, '', NULL, NULL, NULL, 'BILL-456'),
(27, 'ST-9047', '02/05/2017', '1100.00,250.00,550.00,,', 'SD37,SD35,SD38,,', '5,7,2,,', '5500,1750,1100,0,0', 'Shorfuddin Babu', '654654', 'mirpur', '8000.00', '300', '8050', '50', '02/26/2017', 'cash', 'nothing', 'BILL-05022017617'),
(28, 'ST-1563', '02/05/2017', '101.00,,,,', 'SD36,,,,', '4,,,,', '404,0,0,0,0', 'babu uddin', '7787876786', 'chitagong', '400.00', '0', '404', '4', '02/06/2017', 'cash', 'nothing', 'BILL-05022017777'),
(29, 'ST-8451', '02/05/2017', ',,,,', ',,,,', ',,,,', '0,0,0,0,0', 'jabed', '7787876786', 'dhaka', '0.00', '0', '0', '', '', 'cash', '', 'BILL-05022017724'),
(41, 'ST-5513', '02/05/2017', '101.00,1100.00,,,', 'SD36,SD37,,,', '8,4,,,', '808,4400,0,0,0', 'Abid ', 'Komlapur', '0654654', '5000.00', '200', '5008', '8', '02/06/2017', 'cash', 'nothing', 'BILL-05022017573'),
(42, 'ST-7361', '02/05/2017', '550.00,550.00,,,', 'SD38,SD38,,,', '5,3,,,', '2750,1650,0,0,0', 'Abid Vai', 'Motijheel', '6546545', '4200.00', '100', '4300', '100', '02/07/2017', 'cash', 'nothing', 'BILL-05022017671');

-- --------------------------------------------------------

--
-- Table structure for table `stock_user`
--

CREATE TABLE `stock_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_user`
--

INSERT INTO `stock_user` (`id`, `username`, `password`, `user_type`, `answer`) VALUES
(1, 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `store_details`
--

CREATE TABLE `store_details` (
  `name` varchar(100) NOT NULL,
  `log` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `web` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_details`
--

INSERT INTO `store_details` (`name`, `log`, `type`, `address`, `place`, `city`, `phone`, `email`, `web`, `pin`) VALUES
('Posnic', 'geobram -frnt.png', 'image/png', '133', 'HSR layout', 'bangalore', '7779897878', 'info@posnic.com', 'ponic.com', '60080');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_details`
--

CREATE TABLE `supplier_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier_name` varchar(200) NOT NULL,
  `supplier_address` varchar(500) NOT NULL,
  `supplier_contact1` varchar(100) NOT NULL,
  `supplier_contact2` varchar(100) DEFAULT NULL,
  `balance` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_details`
--

INSERT INTO `supplier_details` (`id`, `supplier_name`, `supplier_address`, `supplier_contact1`, `supplier_contact2`, `balance`) VALUES
(37, 'Rahul', '#123, dhaka', '7787876786', '89798', 3000),
(38, 'labib', '#124, mirpur, bangladesh ', '7787876786', '9539126325', 2500),
(39, 'jidan', '#126, ECB , Mipur , Dhaka', '7787876786', '9539126325', 1500),
(44, 'saddam', '#126, Dhaka', '7787876786', '9539126325', 2000),
(49, 'saddam', '#125, Dhaka 1216', '777777777777', '6463468465465', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(50) NOT NULL,
  `customer` varchar(250) NOT NULL,
  `supplier` varchar(250) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `due` datetime NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rid` varchar(120) NOT NULL,
  `receiptid` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uom_details`
--

CREATE TABLE `uom_details` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(120) NOT NULL,
  `spec` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uom_details`
--

INSERT INTO `uom_details` (`id`, `name`, `spec`) VALUES
(0000000006, 'UOM1', 'UOM1 Specification'),
(0000000007, 'UOM2', 'UOM2 Specification'),
(0000000008, 'UOM3', 'UOM3 Specification'),
(0000000009, 'UOM4', 'UOM4 Specification');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_details`
--
ALTER TABLE `category_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_avail`
--
ALTER TABLE `stock_avail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_details`
--
ALTER TABLE `stock_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_entries`
--
ALTER TABLE `stock_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_sales`
--
ALTER TABLE `stock_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_user`
--
ALTER TABLE `stock_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_details`
--
ALTER TABLE `supplier_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uom_details`
--
ALTER TABLE `uom_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_details`
--
ALTER TABLE `category_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `stock_avail`
--
ALTER TABLE `stock_avail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `stock_details`
--
ALTER TABLE `stock_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `stock_entries`
--
ALTER TABLE `stock_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;
--
-- AUTO_INCREMENT for table `stock_sales`
--
ALTER TABLE `stock_sales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `stock_user`
--
ALTER TABLE `stock_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `supplier_details`
--
ALTER TABLE `supplier_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `uom_details`
--
ALTER TABLE `uom_details`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
