-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for kasneb
DROP DATABASE IF EXISTS `kasneb`;
CREATE DATABASE IF NOT EXISTS `kasneb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `kasneb`;

-- Dumping structure for table kasneb.articles
DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table kasneb.articles: ~9 rows (approximately)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
REPLACE INTO `articles` (`id`, `title`, `description`, `image`) VALUES
	(2, 'Value of KASNEB professional development', 'Tune In on Wednesday 6th July 2022, from 8am to 12 am', ''),
	(3, 'Verification', 'Our Facebook page is now verified! it is marked with a blue tick.', ''),
	(4, 'Deadline day', 'Today is the deadline... Do not miss out! Book for the August 2022 examinations', ''),
	(5, 'Come back', 'Be your own competition. Resume your studies and be a dynamic force in the market #kasnebComeBack', ''),
	(6, 'Deadline', 'If you have been inactive for over three (3) years, then resume your studies and benefit from the syllabus review.', ''),
	(7, 'Open', 'Welcome to the kasneb virtual open day.\r\nLog on and interact with us. ', ''),
	(9, 'Resume', 'Have you been inactive for over three (3) years? Resume your studies with the revised kasneb qualifications.', ''),
	(10, 'Hello', 'Hello', '1658825747.png'),
	(11, 'This is a test', 'Hello test', '1658837967.png');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Dumping structure for table kasneb.comments
DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `userId` varchar(255) DEFAULT NULL,
  `comment` text NOT NULL,
  `status` varchar(50) DEFAULT 'unread',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table kasneb.comments: ~6 rows (approximately)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
REPLACE INTO `comments` (`id`, `name`, `email`, `userId`, `comment`, `status`) VALUES
	(1, 'dau', 'dau@gmail.com', NULL, 'Hello there', 'unread'),
	(2, 'dar', 'dar@gmail.com', NULL, 'Will there be alumni day?', 'unread'),
	(3, 'dos', 'dos@gmail.com', NULL, 'Hello there', 'unread'),
	(6, 'Paul Kimani', 'paul@gmail.com', NULL, 'When is Alumni meeting?', 'unread'),
	(8, 'Name', 'name@email.com', '0', 'Prity', 'unread'),
	(9, NULL, NULL, '0', 'Hello Prity', 'unread');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Dumping structure for table kasneb.evaluation
DROP TABLE IF EXISTS `evaluation`;
CREATE TABLE IF NOT EXISTS `evaluation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `impact` mediumtext NOT NULL,
  `answer` varchar(10) NOT NULL,
  `recommendation` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table kasneb.evaluation: ~2 rows (approximately)
/*!40000 ALTER TABLE `evaluation` DISABLE KEYS */;
REPLACE INTO `evaluation` (`id`, `impact`, `answer`, `recommendation`) VALUES
	(1, 'Theoretical work done on KASNEB course is now done practically in te career field', 'yes', 'They are more knowledgeable and more detailed'),
	(5, 'It gave skills about writing financial statements which has made me outstanding in my workplace ', 'yes', 'Because they are comprehensive.');
/*!40000 ALTER TABLE `evaluation` ENABLE KEYS */;

-- Dumping structure for table kasneb.jobs
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `qualifications` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table kasneb.jobs: ~10 rows (approximately)
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
REPLACE INTO `jobs` (`id`, `company`, `title`, `description`, `qualifications`) VALUES
	(1, 'Stratoni Business Sytems', 'Sales personnels', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
	(2, 'Straton Business Sytems', 'ICT assistant', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
	(4, 'Straton Business Sytems', 'Accounts assistant', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
	(6, 'Tex Ltd', 'ICT specialist', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
	(7, 'Safaricom PLC', 'ICT consultant', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
	(8, 'BrighterMonday Consulting', 'ICT assistant', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
	(9, 'Straton Business Sytems', 'Finance officer', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
	(10, 'Straton Business Sytems', 'Account assistant', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
	(12, 'Tex', 'Account  assistant', 'Job Description/Requirements\r\nRESPONSIBILITIES.\r\n\r\nProspect and contact potential customers using the leads that come into the CRM from our website\r\nSet up sales calls with potential clients\r\nCreate amazing itineraries to present to potential clients using the Wetu itinerary writing Software\r\nClose Safaris in full using our suppliers on the ground for driving and flying Safaris.', 'QUALIFICATIONS.\r\n\r\nPrevious experience in Safari Sales is a MUST\r\nPostsecondary education\r\n5 years + Minimum with a safari operator in Kenya or East Africa\r\nMust be able to work nights online calling leads in the USA and Canada\r\nInternational safari sales experience is a must (must know routes, safari types and how to sell them to the client)\r\nAble to perform under pressure\r\nFamiliarity with CRM platforms( THIS IS A MUST)\r\nExperience in the travel industry.\r\nExperience with social media platforms\r\nAbility to build rapport with clients\r\nStrong negotiation skills\r\nDeadline and detail-oriented\r\n\r\nFollow this link to apply https://www.brightermonday.co.ke/listings/sales-travel-consultantspecialist-q7n8qv'),
	(13, 'KCA University', 'ICT intern', 'Contribute to Great Valley Center technical documentation and participate in policy,\r\nprocedure, and standards development.\r\n• Consult with vendors, perform research and evaluate products to assist in the selection\r\nand purchase of equipment and installation or upgrade of systems.\r\n• Assist users in determining appropriate software solutions to meet needs.\r\n• Develop and provide user training for basic hardware and software use.\r\n• Provide backup technical support for network including router, firewall, and wireless\r\naccess point.\r\n• Maintains open communication and positive working relationship with staff.\r\n• Perform other duties/projects as assigned.', 'Minimum of six months paid or volunteer work experience with computer desktop\r\nsupport in a networked environment for a small to mid-sized organization.\r\n• Must be available to work a minimum of 10-16 hours per week.\r\n• Must be available and willing to commit at least six (6) months initially for an\r\ninternship.\r\n• Must be pursuing an undergraduate or graduate level degree in a business,\r\ncommunications or computer related field');
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

-- Dumping structure for table kasneb.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `regno` varchar(200) NOT NULL,
  `examination` varchar(200) NOT NULL,
  `lastsitting` varchar(200) NOT NULL,
  `phoneNumber` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `company` varchar(200) DEFAULT NULL,
  `occupation` varchar(200) DEFAULT NULL,
  `officePhone` varchar(200) DEFAULT NULL,
  `companyEmail` varchar(200) DEFAULT NULL,
  `proffesionalBody` varchar(200) DEFAULT NULL,
  `membershipType` varchar(200) DEFAULT NULL,
  `approved` varchar(10) DEFAULT 'no',
  `userType` varchar(20) DEFAULT 'alumni',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table kasneb.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `regno`, `examination`, `lastsitting`, `phoneNumber`, `email`, `password`, `company`, `occupation`, `officePhone`, `companyEmail`, `proffesionalBody`, `membershipType`, `approved`, `userType`) VALUES
	(0, 'Collins', '312456', 'CICT', '2020-10', '0712345678', 'paul@gmail.com', '$2y$10$rutqJ00lUXrDF7/6NQbrauD6Ipl1.QMl.FLcGqtZtKmrro2O1I0rC', 'Safaricom', 'IT', '7894561230', 'company@email.com', 'ICPAK', '', 'no', 'admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
