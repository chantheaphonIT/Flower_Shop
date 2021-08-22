-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 06:03 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flower_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `name`, `phoneNumber`, `address`, `image`) VALUES
(37, 'Sara vey', '098889888', 'Phnom Penh', 'df07ebbf24514b8335d74a0b2bf39b45.jpg'),
(38, 'Phally', '093458294', 'Kompong chang', '61a0703f218eb18a842b8ccc5f9f4103.jpg'),
(39, 'Dyna', '09458237589', 'Kom pet', 'b47f53ae90514f80851e17f81fe433aa.jpg'),
(40, 'Sopheak Von', '0999988833', 'kompong sper', 'images.jpg'),
(44, 'Mom oun', '098291814', 'Prey Veng', '87c5d4e01116869aaf7c003556ce0b48.jpg'),
(45, 'chanthea ', '09876543', 'Keap', '9a6b0cb3bb348dc1578b5b1a81886488.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `flower`
--

CREATE TABLE `flower` (
  `flowerID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(400) NOT NULL,
  `dateTime` datetime DEFAULT NULL,
  `description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flower`
--

INSERT INTO `flower` (`flowerID`, `name`, `price`, `image`, `dateTime`, `description`) VALUES
(65, 'Rose', 10, 'https://content.jdmagicbox.com/comp/nashik/n9/0253px253.x253.180414112446.g1n9/catalogue/aher-fresh-flowers-makhmalabad-nashik-event-organisers-jaql4.jpg?clr=4a1c4a', '2021-08-19 05:42:38', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti Asperiores Laboriosam Praesentium Enim Maiores? Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt Eaque Nulla Dignissimos.'),
(67, 'Lilys', 30, 'https://www.flowersintheattic.co.uk/upload/mt/fita361/products/eFlorist/lg_202020002-pink-and-purple-tulips.jpg', '2021-08-19 05:58:39', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti Asperiores Laboriosam Praesentium Enim Maiores? Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt Eaque Nulla Dignissimos'),
(68, 'Sun Flower', 50, 'https://www.800florals.com/img/TW424.jpg', '2021-08-19 06:00:17', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti Asperiores Laboriosam Praesentium Enim Maiores? Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt Eaque Nulla Dignissimos'),
(69, 'ondon-Moyses', 7, 'https://cdn11.bigcommerce.com/s-3bp5t46z/content/img/home/birthday-flowers-uk-london-moyses.jpg', '2021-08-19 06:02:15', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti Asperiores Laboriosam Praesentium Enim Maiores? Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt Eaque Nulla Dignissimos'),
(70, 'Dutch-Flower', 9, 'https://www.floristsinindia.com/image/cache/catalog/products/Generic/FINF-076-800x800.jpg', '2021-08-19 06:06:58', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti Asperiores Laboriosam Praesentium Enim Maiores? Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt Eaque Nulla Dignissimos'),
(71, 'ball-size', 9, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCYd2OYEBI4XgtWEa1tKCjpnmoKR2JxuFE8tO4V7fpfkXJ-VdT9UZHQjUoZBmmYEZyhms&usqp=CAU', '2021-08-19 06:11:08', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti Asperiores Laboriosam Praesentium Enim Maiores? Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt Eaque Nulla Dignissimos'),
(72, 'White', 23, 'https://www.wholeblossoms.com/images/white-anemone-flower-wholesale.jpg', '2021-08-19 06:12:42', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti Asperiores Laboriosam Praesentium Enim Maiores? Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt Eaque Nulla Dignissimos'),
(80, 'Water-lili', 34, 'https://www.growerdirect.com/uploads/thumbnails/water%20lily.jpg.85a5d20a.jpg', '2021-08-20 12:21:07', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti Asperiores Laboriosam Praesentium Enim Maiores? Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt Eaque Nulla Dignissimos'),
(81, 'Rose', 24, 'https://i.pinimg.com/originals/1e/40/66/1e4066c66a225cc83671f207fa4d5bae.gif', '2021-08-20 01:00:40', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti Asperiores Laboriosam Praesentium Enim Maiores? Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt Eaque Nulla Dignissimos'),
(84, 'Okiday', 3, 'https://i.gifer.com/WVR7.gif', '2021-08-20 07:38:18', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti Asperiores Laboriosam Praesentium Enim Maiores? Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt Eaque Nulla Dignissimos'),
(85, 'Gif', 44, 'https://thumbs.gfycat.com/TimelyJovialBanteng-small.gif', '2021-08-20 07:39:35', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti Asperiores Laboriosam Praesentium Enim Maiores? Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt Eaque Nulla Dignissimos'),
(95, 'Soriya', 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKIB_tdE_Z1aufc3Ftaxb4RTFPPMENLnPDL7ZjWDleDizGB-4eSrNcm3e86fvUvRrcWTk&usqp=CAU', '2021-08-22 09:27:04', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti Asperiores Laboriosam Praesentium Enim Maiores? Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt Eaque Nulla Dignissimos.Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti Asperiores Laboriosam Praesentium Enim Maiores? Ad Repellat Voluptates Alias Facere Repudiandae Dolor');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderID` int(11) NOT NULL,
  `date` date NOT NULL,
  `flowerID` int(11) NOT NULL,
  `custmorID` int(11) NOT NULL,
  `discont` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` enum('user','admin') CHARACTER SET latin1 NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`, `name`) VALUES
(1, 'admin', 'chanthea', '81dc9bdb52d04dc20036dbd8313ed055', 'Chanthea Phon'),
(3, 'user', 'sona', 'e2fc714c4727ee9395f324cd2e7f331f', 'Sona Val');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `flower`
--
ALTER TABLE `flower`
  ADD PRIMARY KEY (`flowerID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `customerID` (`custmorID`),
  ADD KEY `flowerID` (`flowerID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `flower`
--
ALTER TABLE `flower`
  MODIFY `flowerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `flowerID` FOREIGN KEY (`flowerID`) REFERENCES `flower` (`flowerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
