-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 05:51 AM
-- Server version: 5.7.31-0ubuntu0.16.04.1
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `preference` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fullname`, `username`, `password`, `email`, `contact`, `address`, `preference`) VALUES
('qwerty', '123456', '2687420aeef41673049c2e180ec2dae65cb6b495', 'xyz@gmail.com', '8696069059', 'CO SURENDRA KUMAR,ASHOK NAGAR ROAD NO 5, KANKARBAGH ,PATNA', 'Veg'),
('Anju Sinha', 'anjudevi001', '687656f6a192ef9c9bfa94ddd4d7ec3d513529d3', 'piyushpranjal27@gmail.com', '9006375952', 'CO SURENDRA KUMAR,ASHOK NAGAR ROAD NO 5, KANKARBAGH ,PATNA', 'Non-veg'),
('fbfbg', 'ehfkgn', '7c91440a7e05f6604bf4c7c15f2f6b22c7dd2e85', 'sklcsklc@gmail.com', '7765991486', 'CO SURENDRA KUMAR,ASHOK NAGAR ROAD NO 5, KANKARBAGH ,PATNA', 'Veg'),
('Piyush Pranjal', 'piyush@008', '7076c0d62662e2e9be39eeb01105d0b2f554dd9f', 'piyushpranjal27@gmail.com', '7765991486', 'CO SURENDRA KUMAR,ASHOK NAGAR ROAD NO 5, KANKARBAGH ,PATNA', 'Non-veg'),
('Rahul Kumar ', 'rahul@123', 'e53fcde5b60889071303ed98dca4d80523824dde', 'abc@gmail.com', '9874637362', 'new town kolkata', 'Non-veg'),
('Shriyanshi Shiwangi', 'shri009', '9608d51fd70b1b33178b53ed55ed1f56e0b13bec', 'shri9087@gmail.com', '8768648380', 'Rajkumari sadan ,ashok nagar,patna', 'Non-veg');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `R_ID` int(30) NOT NULL,
  `food_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`F_ID`, `name`, `price`, `description`, `image_path`, `R_ID`, `food_type`) VALUES
(1, 'Biryani', '200', 'A Rich and Flavorful Layered Indian Dish', 'images/biryani.jpg', 2, 'Non-veg'),
(2, 'egg roll', '45', 'mouth watery rolls at the cheapest price', 'images/egg_roll.jpg', 2, 'Non-veg'),
(3, 'chicken kassa', '180', 'Delicious chicken made in Indian style with rich flavours.', 'images/Chicken-Kassa.jpg', 2, 'Non-veg'),
(4, 'Paneer butter masala', '169', 'Delicious paneer blended with butter and cheese', 'images/paneer-butter-masala.jpg', 2, 'Veg'),
(5, 'Hyderabadi Biryani', '250', 'Tasty biryani Hyderabad style with an egg', 'images/hyderabadi-biryani.jpg', 1, 'Non-veg'),
(6, 'Samosa', '15', 'Tasty samosas with chutney', 'images/samosa.jpg', 1, 'Veg'),
(7, 'Veg Burger', '50', 'Delicious burger at the cheapest price', 'images/burger.jpg', 3, 'Veg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `O_ID` int(30) NOT NULL,
  `F_ID` int(30) NOT NULL,
  `R_ID` int(30) NOT NULL,
  `foodname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`O_ID`, `F_ID`, `R_ID`, `foodname`, `price`, `username`, `quantity`) VALUES
(1, 1, 2, 'Biryani', '200', 'piyush@008', 1),
(2, 3, 2, 'chicken kassa', '180', 'piyush@008', 1),
(3, 5, 1, 'Hyderabadi Biryani', '250', 'piyush@008', 1),
(4, 5, 1, 'Hyderabadi Biryani', '250', 'piyush@008', 1),
(5, 6, 1, 'Samosa', '15', 'piyush@008', 4),
(6, 5, 1, 'Hyderabadi Biryani', '250', 'shri009', 1),
(7, 3, 2, 'chicken kassa', '180', 'shri009', 1),
(8, 2, 2, 'egg roll', '45', 'piyush@008', 1),
(9, 3, 2, 'chicken kassa', '180', 'anjudevi001', 1),
(10, 6, 1, 'Samosa', '15', 'anjudevi001', 2),
(11, 4, 2, 'Paneer butter masala', '169', 'anjudevi001', 1),
(12, 7, 3, 'Veg Burger', '50', 'anjudevi001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `R_ID` int(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`R_ID`, `name`, `email`, `contact`, `address`, `password`) VALUES
(1, 'Biryani Mahal', 'xyz@gmail.com', '9854904950', 'NEAR DWARKA COLLEGE,KOLKATA', '95bce394d432997231e7ea96a978a6533b65e97a'),
(2, 'Mom\'s Kitchen ', 'sklcsklc@gmail.com', '7765991486', 'CO SURENDRA KUMAR,ASHOK NAGAR ROAD NO 5, KANKARBAGH ,PATNA', '605a975716360e440e0a5306bf89722242b53fe9'),
(3, 'Burger KIng', 'burger123@gmail.com', '9085763859', 'NEAR DWARKA COLLEGE', '503f702c2b44c91c9a1742433627d47ec14a9a7d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`F_ID`,`R_ID`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`O_ID`),
  ADD KEY `R_ID` (`R_ID`),
  ADD KEY `username` (`username`),
  ADD KEY `F_ID` (`F_ID`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`R_ID`,`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `O_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `R_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`F_ID`) REFERENCES `food` (`F_ID`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`username`) REFERENCES `customer` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
