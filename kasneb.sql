-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 03:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasneb`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `image`) VALUES
(2, 'Value of KASNEB professional development', 'Tune In on Wednesday 6th July 2022, from 8am to 12 am', 0x696d6167652e6a7067),
(3, 'Verification', 'Our Facebook page is now verified! it is marked with a blue tick.', 0x3238393434343736355f3339363730383536393135303539365f343334303232363932353332373532303035305f6e2e6a7067),
(4, 'Deadline day', 'Today is the deadline... Do not miss out! Book for the August 2022 examinations', 0x696d6167652e6a7067),
(5, 'Come back', 'Be your own competition. Resume your studies and be a dynamic force in the market #kasnebComeBack', 0x3238393434343736355f3339363730383536393135303539365f343334303232363932353332373532303035305f6e2e6a7067),
(6, 'Deadline', 'If you have been inactive for over three (3) years, then resume your studies and benefit from the syllabus review.', 0x7265766965772e6a7067),
(7, 'Open', 'Welcome to the kasneb virtual open day.\r\nLog on and interact with us. ', 0x6f70656e6461792e6a7067),
(9, 'Resume', 'Have you been inactive for over three (3) years? Resume your studies with the revised kasneb qualifications.', 0x726573756d652e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`) VALUES
(1, 'dau', 'dau@gmail.com', 'Hello there'),
(2, 'dar', 'dar@gmail.com', 'Will there be alumni day?'),
(3, 'dos', 'dos@gmail.com', 'Hello there'),
(6, 'Paul Kimani', 'paul@gmail.com', 'When is Alumni meeting?');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `id` int(11) NOT NULL,
  `impact` mediumtext NOT NULL,
  `answer` varchar(10) NOT NULL,
  `recommendation` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`id`, `impact`, `answer`, `recommendation`) VALUES
(1, 'Theoretical work done on KASNEB course is now done practically in te career field', 'yes', 'They are more knowledgeable and more detailed'),
(5, 'It gave skills about writing financial statements which has made me outstanding in my workplace ', 'yes', 'Because they are comprehensive.');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `qualifications` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company`, `title`, `description`, `qualifications`) VALUES
(1, 'Straton Business Sytems', 'Sales personnels', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
(2, 'Straton Business Sytems', 'ICT assistant', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
(4, 'Straton Business Sytems', 'Accounts assistant', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
(6, 'Tex Ltd', 'ICT specialist', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
(7, 'Safaricom PLC', 'ICT consultant', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
(8, 'BrighterMonday Consulting', 'ICT assistant', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
(9, 'Straton Business Sytems', 'Finance officer', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
(10, 'Straton Business Sytems', 'Account assistant', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
(12, 'Tex', 'Account  assistant', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
(13, 'KCA University', 'ICT intern', 'Contribute to Great Valley Center technical documentation and participate in policy,\r\nprocedure, and standards development.\r\n• Consult with vendors, perform research and evaluate products to assist in the selection\r\nand purchase of equipment and installation or upgrade of systems.\r\n• Assist users in determining appropriate software solutions to meet needs.\r\n• Develop and provide user training for basic hardware and software use.\r\n• Provide backup technical support for network including router, firewall, and wireless\r\naccess point.\r\n• Maintains open communication and positive working relationship with staff.\r\n• Perform other duties/projects as assigned.', 'Minimum of six months paid or volunteer work experience with computer desktop\r\nsupport in a networked environment for a small to mid-sized organization.\r\n• Must be available to work a minimum of 10-16 hours per week.\r\n• Must be available and willing to commit at least six (6) months initially for an\r\ninternship.\r\n• Must be pursuing an undergraduate or graduate level degree in a business,\r\ncommunications or computer related field');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
