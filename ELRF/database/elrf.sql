-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2025 at 06:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elrf`
--

-- --------------------------------------------------------

--
-- Table structure for table `annualmembers`
--

CREATE TABLE `annualmembers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mid` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `affiliation` varchar(100) DEFAULT NULL,
  `hq` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `utr` bigint(20) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `annualmembers`
--

INSERT INTO `annualmembers` (`id`, `name`, `mid`, `date`, `email`, `mobile`, `designation`, `affiliation`, `hq`, `photo`, `utr`, `status`) VALUES
(1, 'K. SHIRIN BANU', 'AM/01/2024', '2025-03-02 05:27:57', '', 0, '', NULL, '', '', NULL, 1),
(2, 'K. PARVEEN BANU', 'AM/02/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1),
(3, 'MANISHA RANI', 'AM/03/2024', '2025-03-02 05:28:00', '', 0, '', NULL, '', '', NULL, 1),
(4, 'Dr. M. SURESH', 'AM/04/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1),
(5, 'N. SARAVANAN', 'AM/05/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1),
(6, 'S. SRINIVASAN', 'AM/06/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1),
(7, 'Dr. SHALINI SHARMA', 'AM/07/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1),
(8, 'Dr. Rajalakshmi. R', 'AM/08/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1),
(9, 'Dr. D.N.P. Prema Ponmani', 'AM/09/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1),
(10, 'Dr.TAIYABA NAZLI', 'AM/10/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1),
(11, 'HARITHA. S', 'AM/11/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1),
(12, 'Dr K V Lakshmi', 'AM/12/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1),
(13, 'BANUPRIYA. A', 'AM/13/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1),
(14, 'Dr. Md. Shahzad Manzar', 'AM/14/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `name`, `details`) VALUES
(1, 'Eklavya Literary Award', NULL),
(2, 'Research Excellence Award', NULL),
(3, 'Young Researcher Award', NULL),
(4, 'Best Author Award', NULL),
(5, 'Best Editor Award', NULL),
(6, 'Best Writer Award', NULL),
(7, 'Best Publication Award', NULL),
(8, 'Innovative Article Award', NULL),
(9, 'Outstanding Learner Award', NULL),
(10, 'Inspiring Teacher of English Award', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `editor` varchar(100) NOT NULL,
  `star` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `editor`, `star`, `photo`) VALUES
(1, 'Feminisam Matters', 'Unknow', 5, '1.jpg'),
(2, 'Historical', 'Unknow', 5, '2.jpg'),
(3, 'Subaltern struggels', 'Unknow', 5, '3.jpg'),
(4, 'Soft skills for efeective communication', 'Unknow', 5, '4.jpg'),
(5, 'TRIBAL LITERATURE', 'Unknow', 5, '5.png'),
(6, 'SUSTAINABLE FUTURE LITERARY ECHOES OF ANTHROPOCENE', 'Unknow', 5, '6.png');

-- --------------------------------------------------------

--
-- Table structure for table `lifemembers`
--

CREATE TABLE `lifemembers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mid` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(100) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `affiliation` varchar(100) DEFAULT NULL,
  `hq` varchar(50) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `utr` bigint(20) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lifemembers`
--

INSERT INTO `lifemembers` (`id`, `name`, `mid`, `date`, `email`, `mobile`, `designation`, `affiliation`, `hq`, `photo`, `utr`, `status`) VALUES
(1, 'Dr. K. Shaheen', 'LM/01/2024', '2025-03-02 05:23:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 'Dr. P. Basheer Khan', 'LM/02/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 'Dr. Viju MJ', 'LM/03/202', '2025-03-02 05:25:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 'Dyva krupa Nemmadi', 'LM/04/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 'Rajeswari Surisetty', 'LM/05/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 'Dr. Venkata Swetha', 'LM/06/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 'Dr. V. Marreeswari', 'LM/07/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, 'P. Sankav', 'LM/08/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, 'Blessy.R', 'LM/09/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(10, 'Ms. Indu Peter', 'LM/10/202', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, 'Chinchu Rose George', 'LM/11/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(12, 'Gogula. Jayaram Pavan', 'LM/12/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(13, 'Ms. H. Kalaivani', 'LM/13/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(14, 'Dr B R Lakshmi', 'LM/14/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(15, 'Ms. Sindhu. R', 'LM/15/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(16, 'Poornima Devi.A', 'LM/16/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(17, 'Dr. Tarannum Khan', 'LM/17/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(18, 'Dr Asha Arora', 'LM/18/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(19, 'M Varun Chowhan', 'LM/19/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(20, 'Dr. Bellamkonda Krishna Chandra Keerthi', 'LM/20/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(21, 'Rakesh Kurupati', 'LM/21/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(22, 'Dr. Roman Motiram Janbandhu', 'LM/22/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(23, 'S S SHALINI', 'LM/23/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(24, 'Mrs.M.Rajeswari', 'LM/24/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(25, 'Dr. B. Alamelu', 'LM/25/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(26, 'Mr. Prabhakar Poloju', 'LM/26/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(27, 'Prof. Rahul Thakare', 'LM/27/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(28, 'Dr. Syed Mujahid', 'LM/28/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(29, 'Dr. Najma Pathan', 'LM/29/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$8n3O9WUn45d.N8F9HGk7NueIvgqYAHpbNVYCNA/0yJs0N1VpiLcDO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annualmembers`
--
ALTER TABLE `annualmembers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `utr` (`utr`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lifemembers`
--
ALTER TABLE `lifemembers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `utr` (`utr`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annualmembers`
--
ALTER TABLE `annualmembers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lifemembers`
--
ALTER TABLE `lifemembers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
