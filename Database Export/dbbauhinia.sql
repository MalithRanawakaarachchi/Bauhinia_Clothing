-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 04:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbauhinia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(4) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `lName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `hotline` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `fName`, `lName`, `email`, `address`, `mobile`, `hotline`, `password`) VALUES
(1, 'Malith', 'Madhushankha', 'mranawakaarachchi@gmail.com', '70150, Endana, Kahawatta, Ratnapura', '0719793009', '0457389287', 'Malith@123');

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

CREATE TABLE `tblcart` (
  `id` int(4) NOT NULL,
  `itemCode` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `qty` int(4) NOT NULL,
  `tprice` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblcolors`
--

CREATE TABLE `tblcolors` (
  `id` int(4) NOT NULL,
  `color` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

CREATE TABLE `tblcustomers` (
  `id` int(4) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `lName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `hotline` int(10) NOT NULL,
  `mobile` int(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcustomers`
--

INSERT INTO `tblcustomers` (`id`, `fName`, `lName`, `email`, `address`, `hotline`, `mobile`, `password`) VALUES
(0, 'Chalani', 'Nimesha', 'chalanijayarathna72@gmail.com', 'malwala, ratnapura', 458472204, 702663508, 'Chalani@123');

-- --------------------------------------------------------

--
-- Table structure for table `tblincome`
--

CREATE TABLE `tblincome` (
  `id` int(4) NOT NULL,
  `date` varchar(20) NOT NULL,
  `itemCode` varchar(20) NOT NULL,
  `customer` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblitems`
--

CREATE TABLE `tblitems` (
  `id` int(4) NOT NULL,
  `itemCode` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `size` varchar(4) NOT NULL,
  `color` varchar(15) NOT NULL,
  `qty` int(4) NOT NULL,
  `price` decimal(5,0) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblitems`
--

INSERT INTO `tblitems` (`id`, `itemCode`, `category`, `size`, `color`, `qty`, `price`, `image`) VALUES
(48, 'Frock F34JH-23K', 'Other', 'L', 'Green', 177, '7800', 'frock 01.jpg'),
(49, 'SK3- GSU65', 'skirts', 'XL', 'Red', 399, '2600', 'Red Skirt.jpg'),
(50, 'T-Shirt IDTY56K', 'T shirts', 'S', 'Black', 698, '1250', 'reebok_t_shirt.jpg'),
(51, 'Jeans KD675-H78', 'Denim', 'M', 'Black', 997, '4399', 'jeans 2.jpg'),
(52, 'Blouse YL4666-KH', 'blouse', 'M', 'Yellow', 396, '1890', 'yellow blouse.jpg'),
(53, 'Jeans M466GFF-77H', 'Denim', 'S', 'Blue', 399, '2400', 'jeans 1.jpg'),
(54, 'Denim FH8344-AET466', 'Denim', 'XL', 'Blue', 457, '5350', 'denim 2.jpg'),
(55, 'Frock KDH-566HH', 'Other', 'M', 'Pink', 599, '5500', 'frock 2.jpg'),
(56, 'Denim HFJ746-JD', 'Denim', 'L', 'Blue', 399, '4800', 'denim 1.jpg'),
(58, 'Shirt HJ488', 'shirts', 'M', 'Free Colour', 698, '2400', 'shirt-purplr.jpg'),
(59, 'Crop T -HS677', 'skirts', 'S', 'Brown', 547, '800', 'top.jpg'),
(60, 'Shirt B577-SR3', 'shirts', 'M', 'Black', 498, '2100', 'shirt black.jpg'),
(61, 'abcd', 'T shirts', 'XS', 'Yellow', 0, '4333', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblorders`
--

CREATE TABLE `tblorders` (
  `id` int(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `hotline` varchar(10) NOT NULL,
  `itemCode` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `size` varchar(3) NOT NULL,
  `price` int(6) NOT NULL,
  `qty` int(5) NOT NULL,
  `paymentMethod` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblorders`
--

INSERT INTO `tblorders` (`id`, `date`, `firstName`, `lastName`, `email`, `address`, `mobile`, `hotline`, `itemCode`, `color`, `size`, `price`, `qty`, `paymentMethod`) VALUES
(3, '2022/09/17', 'Chalani', 'Nimesha', 'chalanijayarathna72@gmail.com', 'Malwala,Ratnapura', '0702663508', '0456672290', 'Blouse YL4666-KH', 'Yellow', 'M', 1890, 1, 'cash'),
(5, '2022/09/17', 'Chalani', 'Nimesha', 'mranawakaarachchi@gmail.com', 'Willambiya, Mandalagama, Kahawatta, Ratnapura', '0719783009', '0458472204', 'Jeans KD675-H78', 'Black', 'S', 4399, 1, 'card'),
(6, '2022/10/01', 'Dasun', 'Bhathiya Perera', 'dasunperera23@gmail.com', 'Galahitiyawa, Pelmadulla, Ratnapura', '0763552815', '0458376757', 'Jeans KD675-H78', 'Black', 'M', 4399, 2, 'cash'),
(7, '2022/10/01', 'H K Sahan', 'Awishka ', 'edirisinghesahan8@gmail.com', '123/B, Polhengoda, Nivithigala, Ratnapura', '0774883725', '0776455325', 'T-Shirt IDTY56K', 'Black', 'L', 1250, 2, 'cash'),
(8, '2022/10/01', 'Sanduni', 'Himaya', 'sanduhimaya23@gmail.com', 'Mirisketiya, Yakdehiwatta, Kalawana', '0713673454', '0457725526', 'Jeans M466GFF-77H', 'Blue', 'L', 2400, 1, 'cash'),
(9, '2022/10/01', 'Nipuni', 'S Bhagya', 'sbnipuni007@gmail.com', 'No.23, Ketethenna, Kahawatta, Ratnapura', '0756300985', '0458736467', 'Crop T -HS677', 'Brown', 'S', 800, 2, 'card'),
(10, '2022/10/01', 'Aravinda', 'Prabhashwara', 'aravindap34@gmail.com', 'getahetta, minuloya, kalawana', '0787345665', '0777346552', 'Denim FH8344-AET466', 'Blue', 'XL', 5350, 1, 'cash'),
(11, '2022/10/01', 'Tharusha', 'nimesh Atakalampanna', 'nimeshrocky1@gmail.com', 'gawaragiriya, ayagama', '0708476262', '0456375573', 'Shirt HJ488', 'Free Colour', 'L', 2400, 1, 'cash'),
(12, '2022/10/01', 'W G H I Sithara', 'Ranasinghe', 'ishinisithara1995@gmail.com', 'No.56/2, colombo rd, ratnapura', '0788746562', '0457628385', 'Blouse YL4666-KH', 'Yellow', 'M', 1890, 1, 'card'),
(13, '2022/10/01', 'S Tharaka', 'Sachin Jayathilaka', 'sjayathilaka2@gmail.com', 'kandewatta rd, madampe, kahawatta, ratnapura', '0757836653', '0773554652', 'Denim HFJ746-JD', 'Blue', 'M', 4800, 1, 'card'),
(14, '2022/10/01', 'Hansi Sandamali', 'Dasanayaka', 'hansidasanayaka5@gmail.com', 'No.76 horaketiya, kiriella, ratnapura', '0773554765', '0716577868', 'Frock KDH-566HH', 'Pink', 'XL', 5500, 1, 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `tblsizes`
--

CREATE TABLE `tblsizes` (
  `id` int(4) NOT NULL,
  `sizes` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblitems`
--
ALTER TABLE `tblitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblorders`
--
ALTER TABLE `tblorders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblitems`
--
ALTER TABLE `tblitems`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tblorders`
--
ALTER TABLE `tblorders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
