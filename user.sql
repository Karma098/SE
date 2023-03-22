-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 04:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(100) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `verification_code` varchar(255) NOT NULL,
  `is_verified` int(10) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `mobile` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Full_Name`, `Email`, `Password`, `verification_code`, `is_verified`, `image`, `mobile`) VALUES
('Karma', 'akabane_karma', 'akabanek193@gmail.com', '$2y$10$2dfNROwEEtQz.UFr0f5t.OTizcp4IhMd182XkLV0IxLHkr1UoQhym', 'ac52e8b78780c10ac69615adfb2dabfc', 1, 'https://pps.whatsapp.net/v/t61.24694-24/205011384_911579646630614_725418706047132797_n.jpg?ccb=11-4&oh=01_AdS3G3R82OCEta8xX5iEz4d-cXtfwOGbswL8O1Yl96jxCQ&oe=642446DA', 7081923694),
('deepak', 'qwerty', 'dragonsh139@gmail.com', '$2y$10$hU5FXjhGXbl9k8sTH3C9mewhYgYFie0tz5fC3s1wLjtTXl6JZD9lS', 'e8733eb07253b6fe8df3a85079f98584', 0, '', 0),
('hvbnvnvn', 'bmbmnbnbm', 'ea@sunmnm', '$2y$10$6Z/9JstN.V.4NXmsnz6Je.fbdF.n0Mk5JLOynZdc6qqmJzCXKmEPu', '2c6104e314c350784db8bf3a2f82a7f1', 0, 'https://pps.whatsapp.net/v/t61.24694-24/205011384_911579646630614_725418706047132797_n.jpg?ccb=11-4&oh=01_AdS3G3R82OCEta8xX5iEz4d-cXtfwOGbswL8O1Yl96jxCQ&oe=642446DA', 2147483647),
('qwerty', 'aqwer', 'gameof180@gmail.com', '$2y$10$4/tOSyejFDVCJAhkXM1yGubGQuBbum8jdn.dsaIKl2OKdmeqRgg9u', 'edb828986c51225d103ccc49c8e30820', 0, '', 0),
('aasasasa', 'sadadada', 'kumarhrithik804@gmail.com', '$2y$10$GAlX6CDzmmyPWf5P5EgEJeLnbHxhzSmdbr99PkHj.nQVvKj0bsfSi', '4ef00a58ea7e0f40f0bc5ed48acd0e9a', 0, '', 0),
('asdasd', 'asdadada', 'mohit7282kumar@gmail.com', '$2y$10$CyYRC3lJXgm3dIf7O2oGQOZFIXHa2CJjQ.JfWoiEjnGa4xuIHZnM2', 'cba90ca71e107d02e681a27ef0ae7093', 0, '', 0),
('aaa', 'bbb', 'mohit@deepak', '$2y$10$7rpodmj5XDjevUJ89k2GZuV01JyLs5ZQ0CPJbWeWD0Y3aYsPIhQ56', '53aa59df3243dc61a302832e3344828b', 0, '', 0),
('assasasa', 'asasasas', 'startupkorean234@gmail.com', '$2y$10$kaS.4XtE0bNiKqtFUE5IWe2dozzcSKz295oKJIQQRM6p91srst6/C', '9d76c0a95cc6afcd59f727f8ed0c441f', 0, 'https://pps.whatsapp.net/v/t61.24694-24/205011384_911579646630614_725418706047132797_n.jpg?ccb=11-4&oh=01_AdS3G3R82OCEta8xX5iEz4d-cXtfwOGbswL8O1Yl96jxCQ&oe=642446DA', 7081923694);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Username` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
