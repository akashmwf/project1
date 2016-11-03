-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2016 at 12:22 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` int(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `language` varchar(255) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_type` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user`, `dob`, `gender`, `email`, `mobile`, `state`, `city`, `pincode`, `language`, `password`, `user_type`) VALUES
(4, 'kij', '10/20/2016', 'male', 'kij@gmail.com', 2147483647, 'dl', 'delhi', 287365, '', '098c42728caa22bfebfe4e30a9d1c695', 0),
(5, 'SUKIRTI_ADMIN', '09/26/2016', 'female', 'sukirti@gmail.com', 2147483647, 'gj', 'delhi', 110007, '', '21232f297a57a5a743894a0e4a801fc3', 1),
(720, 'hghgfhgfhg', '09/29/2016', 'male', '', 0, 'ap', 'aaaa', 152365, '', NULL, 0),
(722, 'cmxzl', '11/08/2016', '', '', 0, '', '', 0, '', NULL, 0),
(724, 'YOYOFE', '11/14/2016', 'female', '', 0, 'dl', '', 123615, '', NULL, 0),
(765, 'snow', '11/08/2016', 'male', 'jon@gail.com', 2147483647, 'dl', 'snp', 123654, 'hindi,eng,pun,ger', 'e6be89666f4bac395808583b899df772', 0),
(766, 'snow', '11/08/2016', 'male', 'jon@gail.com', 2147483647, 'dl', 'snp', 123654, 'hindi,eng,pun,ger', 'e6be89666f4bac395808583b899df772', 0),
(767, 'snow', '11/08/2016', 'male', 'jon@gail.com', 2147483647, 'dl', 'snp', 123654, 'hindi,eng,pun,ger', 'e6be89666f4bac395808583b899df772', 0),
(768, '', '', '', '', 0, 'dl', '', 0, 'eng,ger', NULL, 0),
(769, 'green', '11/22/2016', 'male', 'green@gmail.com', 1236547895, 'dl', 'asdfasdf', 121212, 'hindi', NULL, 0),
(770, 'pk', '', 'male', '', 0, 'dl', '', 0, 'eng', NULL, 0),
(771, 'blue', '11/21/2016', 'male', 'blue@gmail.com', 0, 'dl', '', 0, 'pun', NULL, 0),
(772, 'black', '11/22/2016', 'female', '', 0, 'dl', '', 0, 'pun', NULL, 0),
(773, 'purple', '11/22/2016', 'male', 'purple@gmail.com', 1234467890, 'dl', 'Delhi', 654321, 'eng', 'dd25527dfca3b6248dca5b38b85dbc0a', 0),
(774, 'purple', '11/22/2016', 'male', 'purple@gmail.com', 1234467890, 'dl', 'Delhi', 654321, 'eng', 'dd25527dfca3b6248dca5b38b85dbc0a', 0),
(775, 'purple', '11/22/2016', 'male', 'purple@gmail.com', 1234467890, 'dl', 'Delhi', 654321, 'eng', 'dd25527dfca3b6248dca5b38b85dbc0a', 0),
(776, 'purple', '11/22/2016', 'male', 'purple@gmail.com', 1234467890, 'dl', 'Delhi', 654321, 'eng', 'dd25527dfca3b6248dca5b38b85dbc0a', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=777;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
