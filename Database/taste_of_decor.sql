-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 06:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taste_of_decor`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `CATEGORY_ID` int(15) NOT NULL,
  `CATEGORY_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`CATEGORY_ID`, `CATEGORY_NAME`) VALUES
(1, 'chair'),
(2, 'sofa'),
(3, 'bed'),
(4, 'lamp'),
(7, 'Dinning Table');

-- --------------------------------------------------------

--
-- Table structure for table `contact_exp_table`
--

CREATE TABLE `contact_exp_table` (
  `CONTACT_ID` int(10) NOT NULL,
  `EXPERT_ID` int(10) NOT NULL,
  `EMAIL_ID` varchar(20) NOT NULL,
  `CONTACT_NO` int(10) NOT NULL,
  `MESSAGE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_exp_table`
--

INSERT INTO `contact_exp_table` (`CONTACT_ID`, `EXPERT_ID`, `EMAIL_ID`, `CONTACT_NO`, `MESSAGE`) VALUES
(1, 2, 'eiza@gmail.com', 2147483647, 'i want to you to make designs for my home'),
(2, 1, 'zoya@gmail.com', 2147483647, 'i want you to design my house.'),
(3, 1, 'suhana@gmail.com', 2147483647, 'mam plz reply my mails');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `sr_no` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `message` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`sr_no`, `name`, `email`, `phone`, `message`, `date`, `answer`) VALUES
(1, 'Rosina Collen', 'rosi@gmail.com', 9856365485, 'nsdccnjdjd', '2022-03-21', ''),
(2, 'zoya', 'zoya@gmail.com', 8562365412, 'want to contact you', '2022-04-03', '');

-- --------------------------------------------------------

--
-- Table structure for table `design_table`
--

CREATE TABLE `design_table` (
  `DESIGN_ID` int(15) NOT NULL,
  `EXPERT_ID` int(15) NOT NULL,
  `DESIGN_NAME` varchar(30) NOT NULL,
  `DESIGN_IMAGE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `design_table`
--

INSERT INTO `design_table` (`DESIGN_ID`, `EXPERT_ID`, `DESIGN_NAME`, `DESIGN_IMAGE`) VALUES
(2, 2, 'marq', '20220319094056.jpg'),
(5, 1, 'Tibros', '20220404091322.jpg'),
(6, 1, 'Master Bedroom', '20220408094114.jpg'),
(7, 1, 'Dinning Room', '20220408094248.jpg'),
(8, 1, 'Living Room', '20220408094415.jpg'),
(9, 1, 'Living Room', '20220408094634.jpg'),
(10, 1, 'Wash Room', '20220408094748.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `expert_table`
--

CREATE TABLE `expert_table` (
  `EXPERT_ID` int(15) NOT NULL,
  `LOGIN_ID` int(15) NOT NULL,
  `WORK_EXPERIENCE` int(5) NOT NULL,
  `EXPERT_NAME` varchar(50) NOT NULL,
  `EXPERT_WORK` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expert_table`
--

INSERT INTO `expert_table` (`EXPERT_ID`, `LOGIN_ID`, `WORK_EXPERIENCE`, `EXPERT_NAME`, `EXPERT_WORK`) VALUES
(1, 4, 5, 'Elizabeth ', '20220313161653.jpg'),
(2, 5, 9, 'Alexandra ', '20220313161827.jpeg'),
(3, 6, 11, 'Carl', '20220313161922.jpg'),
(4, 10, 16, 'Andraw', '20220314171722.jpg'),
(8, 11, 5, 'zoya', '20220404091106.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_table`
--

CREATE TABLE `feedback_table` (
  `REVIEWS_ID` int(15) NOT NULL,
  `EXPERT_ID` int(15) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `REVIEW_DESCRIPTION` longtext NOT NULL,
  `RATINGS` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_table`
--

INSERT INTO `feedback_table` (`REVIEWS_ID`, `EXPERT_ID`, `NAME`, `REVIEW_DESCRIPTION`, `RATINGS`) VALUES
(1, 2, 'Eiza Belli', 'its just amazing!!!\r\n', 4),
(2, 1, 'zoya', 'your designs are the best', 4),
(7, 1, 'jfhjbvbn', 'wsssssd', 5),
(8, 1, 'zoya', 'm mmmmmm', 5);

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `LOGIN_ID` int(15) NOT NULL,
  `EMAIL_ID` varchar(25) NOT NULL,
  `CONTACT_NO` bigint(10) NOT NULL,
  `PASSWORD` varchar(25) NOT NULL,
  `ROLE` int(10) NOT NULL,
  `STATUS` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`LOGIN_ID`, `EMAIL_ID`, `CONTACT_NO`, `PASSWORD`, `ROLE`, `STATUS`) VALUES
(1, 'admin@gmail.com', 9429302350, 'admin', 1, 1),
(2, 'admin1@gmail.com', 9537075175, 'Admin1', 1, 1),
(4, 'expert1@gmail.com', 7859625489, 'expert1', 4, 1),
(5, 'expert2@gmail.com', 8563254896, 'expert2', 4, 1),
(6, 'expert3@gmail.com', 9547862575, 'expert3', 4, 1),
(7, 'ret1@gmail.com', 7859625489, 'retailer1', 3, 1),
(8, 'ret2@gmail.com', 8596324586, 'retailer2', 3, 1),
(10, 'expert4@gmail.com', 9856325698, 'Expert4', 4, 1),
(11, 'expert5@gmail.com', 852365489, 'Expert5', 4, 1),
(12, 'user@gmail.com', 1234567890, '12345', 2, 2),
(13, 'user1@gmail.com', 1234567890, 'user1', 2, 1),
(18, 'expert6@gmail.com', 8596471235, 'expert6', 4, 1),
(21, 'expert7@gmail.com', 8562365478, 'expert7', 4, 1),
(23, 'admin3@gmail.com', 8569741235, 'admin3', 1, 1),
(24, 'expert5@gmail.com', 7589641256, 'expert5', 4, 1),
(25, 'ret3@gmail.com', 7589642589, 'retailer3', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `ORDER_ID` int(15) NOT NULL,
  `EMAIL_ID` varchar(50) NOT NULL,
  `QUANTITY` int(50) NOT NULL,
  `ORDER_STATUS` varchar(20) NOT NULL,
  `ORDER_DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ADDRESS` varchar(50) NOT NULL,
  `PRODUCT_ID` int(15) NOT NULL,
  `LOGIN_ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`ORDER_ID`, `EMAIL_ID`, `QUANTITY`, `ORDER_STATUS`, `ORDER_DATE`, `ADDRESS`, `PRODUCT_ID`, `LOGIN_ID`) VALUES
(12, 'user1@gmail.com', 1, '0', '2022-04-07 15:11:52', 'California ', 1, 7),
(13, 'user1@gmail.com', 1, '0', '2022-04-07 15:11:52', 'California ', 2, 7),
(15, 'user1@gmail.com', 1, '0', '2022-04-07 15:12:24', 'California ', 1, 7),
(16, 'user1@gmail.com', 2, '0', '2022-04-07 15:12:24', 'California ', 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `payment_table`
--

CREATE TABLE `payment_table` (
  `PAYMENT_ID` int(15) NOT NULL,
  `PAYER_TO_ID` int(15) NOT NULL,
  `PAYER_FROM_ID` varchar(15) NOT NULL,
  `PAYMENT_DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_table`
--

INSERT INTO `payment_table` (`PAYMENT_ID`, `PAYER_TO_ID`, `PAYER_FROM_ID`, `PAYMENT_DATE`) VALUES
(1, 7, 'user1@gmail.com', '2022-03-19 09:42:55'),
(2, 7, 'user1@gmail.com', '2022-03-19 09:50:16'),
(3, 7, 'user1@gmail.com', '2022-04-03 05:58:19'),
(4, 7, 'user1@gmail.com', '2022-04-03 06:32:12'),
(5, 7, 'user1@gmail.com', '2022-04-03 06:35:21'),
(6, 7, 'user1@gmail.com', '2022-04-03 17:21:25'),
(7, 7, 'user1@gmail.com', '2022-04-04 01:22:48'),
(8, 7, 'user1@gmail.com', '2022-04-04 03:51:24'),
(9, 7, 'user1@gmail.com', '2022-04-04 04:41:17'),
(10, 7, 'user1@gmail.com', '2022-04-07 15:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `products_table`
--

CREATE TABLE `products_table` (
  `PRODUCT_ID` int(10) NOT NULL,
  `LOGIN_ID` int(11) NOT NULL,
  `PRODUCT_MANUFACTURING_DATE` date NOT NULL,
  `PRODUCT_NAME` varchar(50) NOT NULL,
  `PRODUCT_IMAGE` varchar(50) NOT NULL,
  `PRODUCT_PRICE` int(100) NOT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  `CATEGORY_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_table`
--

INSERT INTO `products_table` (`PRODUCT_ID`, `LOGIN_ID`, `PRODUCT_MANUFACTURING_DATE`, `PRODUCT_NAME`, `PRODUCT_IMAGE`, `PRODUCT_PRICE`, `DESCRIPTION`, `CATEGORY_NAME`) VALUES
(1, 7, '2022-03-14', 'Silver King Box Bed', '20220314180536.jpeg', 30000, ' Perfect Homes Opus Engineered Silver King Box Bed  (Finish Color - Silver, Delivery Condition - Kno', 'bed'),
(2, 7, '2022-03-08', 'Black Sofa Set', '20220314180934.jpeg', 25000, ' Bharat Lifestyle Lexus Fabric 3 + 1 + 1 Dark Black Sofa Set  (Delivery condition - DIY(Do-It-Yourse', 'sofa'),
(5, 8, '2022-02-14', 'Red Velvet Bed', '20220314182002.jpeg', 35000, ' Wakefit Taurus Engineered Red Velvet  Bed  (Finish Color - Red, Delivery Condition - Knock Down)', 'bed'),
(6, 8, '2022-03-02', 'Foam Chair', '20220314182216.jpeg', 4000, ' uberlyfe EPE Foam 1 Chair Jute Fabric Washable Cover Perfect for Guests (Dark Grey; 3 X 6 ft)', 'chair'),
(7, 8, '2022-01-19', 'Modern Floor Lamp', '20220314182357.jpeg', 2600, ' Modern LED Floor Lamp, Eye Care Corner Reading Standing Lamps Rotatable Floor Light, Trunk-Shaped C', 'lamp'),
(17, 7, '2022-04-06', 'cambridge sofa', '20220408081912.jpg', 10000, ' cambridge three seater sofa in blue color', 'sofa'),
(18, 7, '2022-04-06', 'Herbert bed', '20220408082050.jpg', 20000, ' herbert bed with gray color with ', 'bed'),
(19, 7, '2022-03-31', 'Yelin ', '20220408082200.jpg', 5600, ' yelin green color wooden chair', 'chair'),
(20, 7, '0000-00-00', 'vovlien', '20220408082406.jpg', 25000, ' vovlien 8 seater dinning table ', 'Dinning Table'),
(21, 7, '2022-03-28', 'ketie', '20220408082529.jpg', 3200, ' ketie brown table lamp with string surface', 'lamp'),
(22, 7, '2022-03-28', 'wave sofa', '20220408082734.jpg', 29000, ' wave sofa set of combination of blueshish green color ', 'sofa'),
(23, 7, '2022-04-04', 'refro bed', '20220408082904.jpg', 18000, ' refro wooden bed in brown color', 'bed');

-- --------------------------------------------------------

--
-- Table structure for table `tips_and_tricks_table`
--

CREATE TABLE `tips_and_tricks_table` (
  `QUESTION` varchar(100) NOT NULL,
  `TIP_TRICK_ID` int(15) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `TIP_DESCRIPTION` varchar(50) NOT NULL,
  `TRICK_DESCRIPTION` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tips_and_tricks_table`
--

INSERT INTO `tips_and_tricks_table` (`QUESTION`, `TIP_TRICK_ID`, `NAME`, `TIP_DESCRIPTION`, `TRICK_DESCRIPTION`) VALUES
('how to decorate kitchen', 1, 'Eiza Belli', ' contact my team', ' it is very simple'),
('want some ideas for decoration of my bed room', 2, 'zoya', ' its so easy just make it helpfull by uploading ph', ' use necessary wooden furniture'),
('how to decorate interior of office', 3, 'suhana', ' depends on the area size and wall colours', ' use less things only spend on storage of files');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`CATEGORY_ID`);

--
-- Indexes for table `contact_exp_table`
--
ALTER TABLE `contact_exp_table`
  ADD PRIMARY KEY (`CONTACT_ID`),
  ADD KEY `EXPERT_ID` (`EXPERT_ID`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `design_table`
--
ALTER TABLE `design_table`
  ADD PRIMARY KEY (`DESIGN_ID`),
  ADD KEY `EXPERT_ID` (`EXPERT_ID`);

--
-- Indexes for table `expert_table`
--
ALTER TABLE `expert_table`
  ADD PRIMARY KEY (`EXPERT_ID`),
  ADD KEY `LOGIN_ID` (`LOGIN_ID`);

--
-- Indexes for table `feedback_table`
--
ALTER TABLE `feedback_table`
  ADD PRIMARY KEY (`REVIEWS_ID`),
  ADD KEY `EXPERT_ID` (`EXPERT_ID`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`LOGIN_ID`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`ORDER_ID`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`),
  ADD KEY `LOGIN_ID` (`LOGIN_ID`);

--
-- Indexes for table `payment_table`
--
ALTER TABLE `payment_table`
  ADD PRIMARY KEY (`PAYMENT_ID`);

--
-- Indexes for table `products_table`
--
ALTER TABLE `products_table`
  ADD PRIMARY KEY (`PRODUCT_ID`),
  ADD KEY `LOGIN_ID` (`LOGIN_ID`);

--
-- Indexes for table `tips_and_tricks_table`
--
ALTER TABLE `tips_and_tricks_table`
  ADD PRIMARY KEY (`TIP_TRICK_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `CATEGORY_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_exp_table`
--
ALTER TABLE `contact_exp_table`
  MODIFY `CONTACT_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `sr_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `design_table`
--
ALTER TABLE `design_table`
  MODIFY `DESIGN_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expert_table`
--
ALTER TABLE `expert_table`
  MODIFY `EXPERT_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback_table`
--
ALTER TABLE `feedback_table`
  MODIFY `REVIEWS_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `LOGIN_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `ORDER_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payment_table`
--
ALTER TABLE `payment_table`
  MODIFY `PAYMENT_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products_table`
--
ALTER TABLE `products_table`
  MODIFY `PRODUCT_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tips_and_tricks_table`
--
ALTER TABLE `tips_and_tricks_table`
  MODIFY `TIP_TRICK_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_exp_table`
--
ALTER TABLE `contact_exp_table`
  ADD CONSTRAINT `contact_exp_table_ibfk_1` FOREIGN KEY (`EXPERT_ID`) REFERENCES `expert_table` (`EXPERT_ID`);

--
-- Constraints for table `design_table`
--
ALTER TABLE `design_table`
  ADD CONSTRAINT `design_table_ibfk_1` FOREIGN KEY (`EXPERT_ID`) REFERENCES `expert_table` (`EXPERT_ID`);

--
-- Constraints for table `expert_table`
--
ALTER TABLE `expert_table`
  ADD CONSTRAINT `expert_table_ibfk_1` FOREIGN KEY (`LOGIN_ID`) REFERENCES `login_table` (`LOGIN_ID`);

--
-- Constraints for table `feedback_table`
--
ALTER TABLE `feedback_table`
  ADD CONSTRAINT `feedback_table_ibfk_1` FOREIGN KEY (`EXPERT_ID`) REFERENCES `expert_table` (`EXPERT_ID`);

--
-- Constraints for table `order_table`
--
ALTER TABLE `order_table`
  ADD CONSTRAINT `order_table_ibfk_1` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `products_table` (`PRODUCT_ID`),
  ADD CONSTRAINT `order_table_ibfk_2` FOREIGN KEY (`LOGIN_ID`) REFERENCES `login_table` (`LOGIN_ID`);

--
-- Constraints for table `products_table`
--
ALTER TABLE `products_table`
  ADD CONSTRAINT `products_table_ibfk_1` FOREIGN KEY (`LOGIN_ID`) REFERENCES `login_table` (`LOGIN_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
