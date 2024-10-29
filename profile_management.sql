-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2024 at 10:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `label`, `text`, `time`) VALUES
(2, 'UPJ BINTARO', 'Informatics Engineering', '2022 - Present'),
(3, 'SMAN 2 TANGSEL', 'high school majoring in science', '2019 - 2022');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `label`, `text`, `time`) VALUES
(2, ' International Online Selling Business', 'Carry out product sales planning and make complete bookkeeping related to income.', '06/2021 - Present'),
(4, 'Data Entry ', 'Entering many data into a data management account and perform data checks if duplicate data occurs', '06/2023 - 07/2023'),
(14, 'Social Media Manager', 'Mark up on customer products and make customer posts get lots of likes', ' 08/2022 - 02/2023');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `name`, `email`, `phone`, `message`, `time`) VALUES
(10, 'gemasajaa', 'superadmin@gmail.com', '082280994738', 'Saya ingin mendiskusikan project lebih lanjut, tolong hubungi aku kembali', '2024-10-27 20:18:22'),
(11, 'Muhammad Bayu WIjaya Putra', 'hebigamers30@outlook.com', '0895372810540', 'halo', '2024-10-27 23:23:23'),
(12, 'Muhammad Bayu WIjaya Putra', 'hebigamers30@outlook.com', '0895372810540', 'woy ', '2024-10-27 23:51:23'),
(13, 'muhammad bayu', 'bayu@asdas.com', '0895372810540', 'asdasdasdsa', '2024-10-28 13:32:21'),
(14, 'muhammad bayu', 'hebitiktok01@gmail.com', '0895372810540', 'adsa', '2024-10-28 13:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `text`, `banner`) VALUES
(1, 'STOCK PREDICTIONS', 'Creating Machine Learning on Stock Predictions Using Python', 'PROJEK 1.png'),
(3, 'CAR RENTAL MANAGEMENT SYSTEM', 'Creating a simple app using Java to create an app that can be used to manage car rentals', 'PROJEK 2.png'),
(4, 'FAB BAKERY', 'Create a simple program from Python to create an application that makes it easier for cashiers to input cookies', 'PROJEK 3.png');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikasi`
--

CREATE TABLE `sertifikasi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sertifikasi`
--

INSERT INTO `sertifikasi` (`id`, `name`, `text`, `banner`) VALUES
(4, 'CISCO Networking Academy', 'Introduction to Cybersecurity ', 'Introduction_to_Cybersecurity.png'),
(5, 'CISCO Networking Academy', ' Cybersecurity Essentials', 'Cybersecurity_Essentials.png');

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE `web` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `label1` text DEFAULT NULL,
  `label2` text DEFAULT NULL,
  `label3` text DEFAULT NULL,
  `about1` text DEFAULT NULL,
  `about2` text DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `language` text DEFAULT NULL,
  `home_profile` varchar(255) NOT NULL,
  `resume_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`id`, `title`, `label1`, `label2`, `label3`, `about1`, `about2`, `copyright`, `instagram`, `linkedin`, `github`, `skills`, `language`, `home_profile`, `resume_pdf`) VALUES
(1, 'HEBI', 'Game Development * Software Engineering * Web Development', 'PROGRAMMER', 'BAYU WIJAYA', 'Software Engineer', 'I am a fifth semester Informatics student with a strong foundation in software development, data analysis, and the web technology. My academic journey has equipped me with practical skills in programming languages ​​like Python, Java, and JavaScript, as well as experience in database management and cloud computing. In addition to my technical expertise, I am an aspiring entrepreneur with direct experience in running a small scale e-commerce business. This effort has been honed My expertise is in digital marketing, customer relationship management, and financial planning. I am passionate about integration \r\ntechnology solutions to drive business growth and efficiency. My goal is to utilize technical knowledge and \r\nentrepreneurial spirit to innovate and contribute meaningfully to the technology industry.', 'Copyright © Your Website 2024', 'https://www.instagram.com/mhmd_bayu_w/?next=%2F', 'https://www.linkedin.com/in/bayu-wijaya-6a2a15314/', 'https://github.com/bayu1707', 'Cyper Security,Professional Database,Developing game,3d Modeling,Web Developer,UI/UX Designer', 'C,Python,C++,Javascript,PHP,Java', 'WhatsApp_Image_2024-10-26_at_22.01.00_9a2bd00c-removebg-preview.png', 'CV_Muhammad Bayu WIjaya Putra.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `web`
--
ALTER TABLE `web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
