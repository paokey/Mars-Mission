-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 05:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mars_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `base`
--

CREATE TABLE `base` (
  `base_id` int(11) NOT NULL,
  `base_name` varchar(30) DEFAULT NULL,
  `founded` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `base`
--

INSERT INTO `base` (`base_id`, `base_name`, `founded`) VALUES
(1, 'Tharsisland', '2037-06-03'),
(2, 'Valles Marineris 2.0', '2040-12-01'),
(3, 'Gale Cratertown', '2041-08-16'),
(4, 'New New New York', '2042-02-10'),
(5, 'Olympus Mons Spa & Casino', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `base_id` int(11) DEFAULT NULL,
  `supply_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`base_id`, `supply_id`, `quantity`) VALUES
(1, 1, 8),
(1, 3, 5),
(1, 5, 1),
(1, 6, 2),
(1, 8, 12),
(1, 9, 1),
(2, 4, 5),
(2, 8, 62),
(2, 10, 37),
(3, 2, 11),
(3, 7, 2),
(4, 10, 91);

-- --------------------------------------------------------

--
-- Table structure for table `martian`
--

CREATE TABLE `martian` (
  `martian_id` int(11) NOT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `base_id` int(11) DEFAULT NULL,
  `super_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `martian`
--

INSERT INTO `martian` (`martian_id`, `first_name`, `last_name`, `base_id`, `super_id`) VALUES
(2, 'John', 'Black', 4, 10),
(3, 'Samuel', 'Hinkston', 4, 2),
(5, 'Sam', 'Parkhill', 2, 12),
(6, 'Elma', 'Parkhill', 3, 8),
(8, 'Mark', 'Watney', 3, 12),
(10, 'Chris', 'Beck', 4, NULL),
(11, 'Nathaniel', 'York', 4, 2),
(12, 'Elon', 'Musk', 2, NULL),
(25, 'Paolo', 'Pacaldo', 1, 10);

-- --------------------------------------------------------

--
-- Stand-in structure for view `martian information`
-- (See below for the actual view)
--
CREATE TABLE `martian information` (
`Martian_ID` int(11)
,`Martians` varchar(51)
,`Martian Leader` varchar(51)
,`Base Name` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `martian_confidential`
--

CREATE TABLE `martian_confidential` (
  `martian_id` int(11) NOT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `base_id` int(11) DEFAULT NULL,
  `super_id` int(11) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `dna_id` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `martian_confidential`
--

INSERT INTO `martian_confidential` (`martian_id`, `first_name`, `last_name`, `base_id`, `super_id`, `salary`, `dna_id`) VALUES
(1, 'Ray', 'Bradbury', 1, NULL, 155900, 'gctaggaatgtagaatctcctgttg'),
(2, 'John', 'Black', 4, 10, 120100, 'cagttaatggttgaagctggggatt'),
(3, 'Samuel', 'Hinkston', 4, 2, 110000, 'cgaagcgctagatgctgtgttgtag'),
(4, 'Jeff', 'Spender', 1, 9, 10000, 'gactaatgtcttcgtggattgcaga'),
(5, 'Sam', 'Parkhill', 2, 12, 125000, 'gttactttgcgaaagccgtggctac'),
(6, 'Elma', 'Parkhill', 3, 8, 137000, 'gcaggaatggaagcaactgccatat'),
(7, 'Melissa', 'Lewis', 1, 1, 145250, 'cttcgatcgtcaatggagttccggac'),
(8, 'Mark', 'Watney', 3, NULL, 121100, 'gacacgaggcgaactatgtcgcggc'),
(9, 'Beth', 'Johanssen', 1, 1, 130000, 'cttagactaggtgtgaaacccgtta'),
(10, 'Chris', 'Beck', 4, NULL, 125000, 'gggggggttacgacgaggaatccat'),
(11, 'Nathaniel', 'York', 4, 2, 105000, 'ggtctccctgggcgggatattggatg'),
(12, 'Elon', 'Musk', 2, NULL, 155800, 'atctgcttggatcaatagcgctgcg'),
(13, 'John', 'Carter', NULL, 8, 129500, 'ccaatcgtgcgagtcgcgatagtct');

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `supply_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`supply_id`, `name`, `description`, `quantity`) VALUES
(1, 'Solar Panel', 'Standard 1x1 meter cell', 912),
(2, 'Water Filter', 'This takes things out of your water so it\'s drinkable.', 6),
(3, 'Duct Tape', 'A 10 meeter roll of duct tape for ALL your repairs', 951),
(4, 'Ketchup', 'It\'s ketchup', 206),
(5, 'Battery Cell', 'Standard 1000 kAH battery cell for power grid (heavy item).', 17),
(6, 'USB 6.0 Cable', 'Carbon fiber cooated / 10 TBps spool', 42),
(7, 'Fuzzy Duster', 'It gets dusty around here. Be prepared!', 19),
(8, 'Mars Bars', 'The ORIGINAL nutirent bar made with the finest bioengineered ingredients.', 3801),
(9, 'Air Filter', 'Removes 99% of all Martian dust from your ventilation unit', 23),
(10, 'Famous Ray\'s Frozen Pizza', 'This Martian favourite is covered in all your favourite toppings. 1 flavour only.', 823);

-- --------------------------------------------------------

--
-- Stand-in structure for view `supply per base`
-- (See below for the actual view)
--
CREATE TABLE `supply per base` (
`Martian_ID` int(11)
,`Martians Fullname` varchar(51)
,`IFNULL(base.base_name,"Top Supervisor")` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `visitor_id` int(11) NOT NULL,
  `host_id` int(11) DEFAULT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`visitor_id`, `host_id`, `first_name`, `last_name`) VALUES
(4, 11, 'Jane', 'Thornton'),
(5, NULL, 'Doug', 'Stavenger'),
(6, NULL, 'Jamie', 'Waterman'),
(7, 8, 'Martin', 'Humphries');

-- --------------------------------------------------------

--
-- Structure for view `martian information`
--
DROP TABLE IF EXISTS `martian information`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `martian information`  AS SELECT `e`.`martian_id` AS `Martian_ID`, concat(`e`.`first_name`,' ',`e`.`last_name`) AS `Martians`, ifnull(concat(`m`.`first_name`,' ',`m`.`last_name`),'Top Supervisor') AS `Martian Leader`, `base`.`base_name` AS `Base Name` FROM ((`martian` `e` join `martian` `m` on(`m`.`martian_id` = `e`.`super_id`)) join `base` on(`m`.`base_id` = `base`.`base_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `supply per base`
--
DROP TABLE IF EXISTS `supply per base`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `supply per base`  AS SELECT `martian`.`martian_id` AS `Martian_ID`, concat(`martian`.`first_name`,' ',`martian`.`last_name`) AS `Martians Fullname`, ifnull(`base`.`base_name`,'Top Supervisor') AS `IFNULL(base.base_name,"Top Supervisor")` FROM (`martian` left join `base` on(`martian`.`base_id` = `base`.`base_id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `base`
--
ALTER TABLE `base`
  ADD PRIMARY KEY (`base_id`);

--
-- Indexes for table `martian`
--
ALTER TABLE `martian`
  ADD PRIMARY KEY (`martian_id`),
  ADD KEY `base_id` (`base_id`,`super_id`),
  ADD KEY `super_id` (`super_id`);

--
-- Indexes for table `martian_confidential`
--
ALTER TABLE `martian_confidential`
  ADD PRIMARY KEY (`martian_id`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`supply_id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`visitor_id`),
  ADD KEY `host_id` (`host_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `base`
--
ALTER TABLE `base`
  MODIFY `base_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `martian`
--
ALTER TABLE `martian`
  MODIFY `martian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `martian_confidential`
--
ALTER TABLE `martian_confidential`
  MODIFY `martian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `supply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `martian`
--
ALTER TABLE `martian`
  ADD CONSTRAINT `martian_ibfk_1` FOREIGN KEY (`base_id`) REFERENCES `base` (`base_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `martian_ibfk_2` FOREIGN KEY (`super_id`) REFERENCES `martian` (`martian_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visitor`
--
ALTER TABLE `visitor`
  ADD CONSTRAINT `visitor_ibfk_1` FOREIGN KEY (`host_id`) REFERENCES `martian` (`martian_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
