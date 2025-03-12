-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 12, 2025 at 06:44 PM
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
(1, 'K. SHIRIN BANU', 'AM/20/2024', '2025-03-12 17:04:00', 'test@gmail.com', 1233, 'test', 'hi', 'pg', '', 1234, 1),
(2, 'K. PARVEEN BANU', 'AM/02/2024', '2025-03-08 06:04:35', 'test@gmail.com', 123, 'test', 'asdf', 'asdf', '', 1238394132234, 0),
(4, 'Dr. M. SURESH', 'AM/04/2024', '2025-03-08 06:17:54', 'test@gmail.com', 123123, 'asdf', 'asdf', 'asdf', '', 12383941, 0),
(8, 'Dr. Rajalakshmi. R', 'AM/08/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1),
(9, 'Dr. D.N.P. Prema Ponmani', 'AM/09/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1),
(10, 'Dr.TAIYABA NAZLI', 'AM/10/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1),
(11, 'HARITHA. S', 'AM/11/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1),
(12, 'Dr K V Lakshmi', 'AM/12/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1),
(13, 'BANUPRIYA. A', 'AM/13/2024', '2025-03-02 05:29:58', '', 0, '', NULL, '', '', NULL, 1),
(14, 'Dr. Md. Shahzad Manzar', 'AM/14/2024', '2025-03-03 14:15:34', '', 0, '', NULL, '', '', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `awardmem`
--

CREATE TABLE `awardmem` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `name` varchar(100) DEFAULT NULL,
  `mid` varchar(50) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `utr` bigint(20) DEFAULT NULL,
  `details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `awardmem`
--

INSERT INTO `awardmem` (`id`, `date`, `name`, `mid`, `type`, `status`, `utr`, `details`) VALUES
(1, '2025-03-09 10:24:17', 'Naga shankar', 'AM/02/2024', 'Eklavya Literary Award', 1, NULL, 'Dr. K. Shaheen, a distinguished personality from Andhra Pradesh, has recently awarded the esteemed Eklavya Literary Award 2024 by Eklavya Literary Research Foundation (ELRF). This recognition celebrates her remarkable accomplishments in English Literature and her impactful contributions to the field of academic literature. Her works are notable for its profound aesthetic quality and its thoughtful engagement with critical social themes, establishing her as a significant voice in the landscape of contemporary literature.\nCurrently, Dr. K. Shaheen holds the position of Assistant Professor in the Department of English & Foriegn languages at Madanapalle Institute of Technology & Science, Madanapalle. She is an Author, Editor, and Reviewer. She obtained her M.A. from S.V. University Tirupathi and Ph.D. from Jawaharlal Nehru Technological University Anantapur. She has 12+ years of teaching experience. She has qualified UGC NET, Telangana State Eligibility Test (TSSET), Andhra Pradesh State Eligibility Test (APSET) and also Andhra Pradesh Teacher Eligibility Test (APTET). She has presented many research papers in National and International Conferences, Seminars and published a number of research papers in National and International Journals including Scopus, and UGC Care list etc. She published edited books of international repute and also serving as an editor and reviewer for many national and international peer-reviewed journals. She filed and published seven patents and also published eight book chapters. Her research interests include British Literature, Indian writing in English, Feminism and Gender studies, with a special emphasis on human relationships. \nDr. K. Shaheen’s literary contributions not only enhance the richness of the literary world but also create a vital connection between academic research and creative writing. As she continues to motivate her students and fellow writers, the honour of the Eklavya Literary Award further cements her status as a leading authority in both literature and education.'),
(2, '2025-03-09 10:38:05', 'shankar', 'id', 'Eklavya Literary Award', 2, NULL, NULL),
(3, '2025-03-09 11:13:50', 'shankar', 'asdf', 'Eklavya Literary Award', 2, 123456, NULL),
(4, '2025-03-09 11:15:36', 'shankar', 'sharr', 'Research Excellence Award', 1, 234567, NULL),
(6, '2025-03-09 11:17:13', 'shankar', 'sharr', 'Research Excellence Award', 2, 23456723, NULL),
(16, '2025-03-11 13:59:49', 'M Shankar2', 'asdk', 'Research Excellence Award', 0, 45678987, NULL),
(17, '2025-03-12 22:58:38', 'test', 'asdf', 'Eklavya Literary Award', 0, NULL, 'sdsfjkllkjhg\nasdfsdg'),
(18, '2025-03-12 23:00:07', 'test', 'asdf', 'Eklavya Literary Award', 0, NULL, '\r\n\r\n  sdsfjkllkjhg\r\nasdfsdg'),
(19, '2025-03-12 23:01:42', 'test', 'asdf', 'Eklavya Literary Award', 0, NULL, '\r\n\r\n  sdsfjkllkjhg\r\nasdfsdg'),
(20, '2025-03-12 23:05:05', 'test', 'asdfghjlkj', 'Eklavya Literary Award', 1, NULL, '\r\n\r\n  sdsfjkllkjhg\r\nasdfsdg');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `req` text DEFAULT NULL,
  `doc_req` text DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `name`, `req`, `doc_req`, `photo`) VALUES
(1, 'Eklavya Literary Award', 'Publications in high Impact Journals/Patents/Projects ongoing or completed, Academic and Research achievements. Books authored or edited. Minimum 5 years of experience in Teaching in Higher Education or School Education.', 'Publication details (List of publications in Journals with title, journal name, vol.no., issn.no., year. Patent published details or grant certificate/Project sanction lr. and status. Experience certificate from head of the institute. Title of the Edited/authored book (s), ISBN number. Proof of the book publication (s).', NULL),
(2, 'Research Excellence Award', 'Publications in high Impact Journals/Patents/Projects ongoing or completed', 'Publication details (List of publications in Journals with title, journal name, vol.no., iss.no., year/Patent published details or grant certificate/Project sanction lr. and status.', NULL),
(3, 'Young Researcher Award', 'Age:below 35', 'List of publications with proof.', NULL);

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
  `name` varchar(100) DEFAULT NULL,
  `mid` varchar(50) DEFAULT NULL,
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
(1, 'Dr. P. Basheer Khan', 'LM/01/2024', '2025-03-11 08:27:36', 'test@gmail.com', 1234234, 'dad', 'asdf', 'dasfs', NULL, 1238394132234, 1),
(2, 'Dr. P. Basheer Khan', 'LM/02/2024', '2025-03-08 06:13:23', 'test@gmail.com', 123432, 'eqw', 'asdf', 'asdf', NULL, 1238394132234122, 0),
(4, 'Dyva krupa Nemmadi', 'LM/04/2024', '2025-03-08 06:21:23', 'sdff@test.com', 12345678, 'asdf', 'asdf', 'adfdsf', NULL, 12383941, 0),
(5, 'Rajeswari Surisetty', 'LM/05/2024', '2025-03-11 08:26:45', 'tset@gmail.com', 9989253549, 'prof', 'JNTU', 'pg', NULL, 123456789, 0),
(6, 'Dr. Venkata Swetha', 'LM/06/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 'Dr. V. Marreeswari', 'LM/07/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, 'P. Sankav', 'LM/02/2024', '2025-03-12 17:09:21', 'tset@gmail.com', 3456789, 'fghj', 'sdfgh', 'dfghj', NULL, NULL, 1),
(10, 'Ms. Indu Peter', 'LM/10/202', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, 'Chinchu Rose George', 'LM/11/2024', '2025-03-02 05:30:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
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
(25, 'Dr. B. Alamelu', 'LM/25/2024', '2025-03-03 14:13:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
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
(1, 'admin', '$2y$10$K0Kuuim3y1LdvEYhqVBgH.q95kQpovh/1ITo2x0va579L2MP2ROyi');

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
-- Indexes for table `awardmem`
--
ALTER TABLE `awardmem`
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
-- AUTO_INCREMENT for table `awardmem`
--
ALTER TABLE `awardmem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
