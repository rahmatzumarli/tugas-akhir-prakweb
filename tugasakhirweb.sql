-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2019 at 08:23 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhirweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `password`) VALUES
(1, 'rahmat', 'rzumarli', 'xxx'),
(2, 'xxx', 'xxx', 'xxx'),
(4, '123', '123', '123'),
(9, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(10, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(11, '$2y$10$TAvz53bgicJcK4LcRaECB.RsAQT./vXGfPGW0jNK6nKzsasMAbMOS', 'a', ''),
(12, 'b', 'b', ''),
(13, 'x', 'x', ''),
(14, 'v', 'v', '$2y$10$oQUftZCp7/iuJaPIcLW7eujvQI66SyKMKgKLCFbpx1PshscLjm2ym'),
(15, 'alert(&#39;hacked&#39;);', 'alert(&#39;hackeda&#39;);', '$2y$10$sBakpD0K0K0BMZOgrC931.UCZ1iTIXLNqRBl1V9NllHTWaIRPduVW'),
(18, 'Rahmat', 'test', '$2y$10$KtgNmf7NpuB2hX.JXs3zSePU9TLle16AK9nSqdBgyOoGmXzVxEDvS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
