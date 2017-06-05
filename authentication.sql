-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2017 at 07:11 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(10) NOT NULL,
  `adminUsername` varchar(30) NOT NULL,
  `adminPass` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminUsername`, `adminPass`) VALUES
(1, 'denteeth_admin', 'bfb7198ea67d3622b201bc4bcb17aeeb');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `ID` int(11) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `reservationDateTime` varchar(30) NOT NULL,
  `schedDate` varchar(20) NOT NULL,
  `schedTime` varchar(15) NOT NULL,
  `service` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`ID`, `userID`, `reservationDateTime`, `schedDate`, `schedTime`, `service`, `status`) VALUES
(76, '25', '2017-06-04 23:06 pm', '2017-06-22', '11:00 AM', 'Crowns', ''),
(77, '25', '2017-06-04 23:06 pm', '2017-06-28', '11:00 AM', 'Root Canal', ''),
(79, '25', '2017-06-05 00:06 am', '2017-09-01', '5:00 PM', 'Implants', ''),
(78, '25', '2017-06-04 23:06 pm', '2017-06-28', '4:00 PM', 'Root Canal', ''),
(75, '25', '2017-06-04 23:06 pm', '2017-07-08', '10:00 AM', 'Implants', ''),
(73, '25', '2017-06-04 21:06 pm', '2017-06-21', '10:00 AM', 'Veneers', ''),
(74, '25', '2017-06-04 22:06 pm', '2017-06-07', '10:00 AM', 'Bridges', ''),
(80, '25', '2017-06-05 17:06 pm', '2017-06-10', '8:00 AM', 'Tooth Extraction', '');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `search_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`search_id`, `title`, `description`, `keyword`, `link`) VALUES
(1, 'Tooth Extraction', 'If a tooth has been broken or damaged by decay, your dentist will try to fix it with a filling, crown or other treatment. Sometimes, though, there\'s too much damage for the tooth to be repaired. In this case, the tooth needs to be extracted. A very loose tooth also will require extraction if it can\'t be saved, even with bone replacement surgery (bone graft).', 'broken damaged decay extract extraction', 'http://localhost/web/denteeth/web/extraction.php'),
(2, 'Tooth Whitening', 'Tooth whitening lightens teeth and helps to remove stains and discoloration. Whitening is among the most popular cosmetic dental procedures because it can greatly improve how your teeth look. Most dentists perform tooth whitening.\r\nWhitening is not a one-time procedure. It will need to be repeated from time to time if you want to maintain the brighter color.', 'tooth, whitening, stains, discoloration', 'http://localhost/web/denteeth/web/whitening.php'),
(3, 'Implants', 'A dental implant is a titanium post (like a tooth root) that is surgically positioned into the jawbone beneath the gum line that allows your dentist to mount replacement teeth or a bridge into that area. An implant doesn\'t come loose like a denture can. Dental implants also benefit general oral health because they do not have to be anchored to other teeth, like bridges.', 'implants, jawbone, implant, tooth root', 'http://localhost/web/denteeth/web/implants.php'),
(4, 'Veneers', 'Veneers is a type of restorative material , that is placed on teeth to improve the esthetics in case of stained or discolored teeth or to protect damaged tooth surface, like a chip or crack. Porcelain material is like glass and give a very natural appearance to your teeth by reflecting light like a natural enamel. The teeth marked for porcelain veneers are minimally reduced thereby preserving maximum tooth structure. \r\n\r\nAn impression of the teeth preparation is taken and sent to the lab for processing. Porcelain veneers are bonded to the tooth structure with a resin cement. \r\n\r\nPorcelain veneers are known for providing brighter, whiter and beautiful smiles!', 'restorative, stained, discolored, porcelain,enamel', 'http://localhost/web/denteeth/web/veneers.php'),
(5, 'Bridges', 'Dental Bridges gap the space between one or more missing teeth. Generally they are made of two or more crowns on either side of the missing teeth. These teeth that support the gap on either end are called abutment or anchoring teeth. The false teeth on the gap are made of special alloy, gold or porcelain. Bridges can be supported by both natural teeth as well as the dental implant teeth.', 'gap bridges space bridge abutment', 'http://localhost/web/denteeth/web/bridge.php'),
(6, 'Crowns', 'Crowns are generally used on teeth that are weak because of large fillings or had a fracture of the tooth or if the tooth had a root canal treatment. It is also used to improve the appearance of your smile.Porcelain crowns can be easily matched to your natural teeth color thereby preserving the natural appearance of your smile.', 'crown crowns', 'http://localhost/web/denteeth/web/crown.php'),
(7, 'Root Canal', 'Dental Root Canal is a Dental Procedure, which saves the Tooth by performing a simple repair procedure. Often the Pulp of the Tooth suggested for this procedure is badly infected or decayed. Pulp of the tooth is composed of blood vessels and Nerves.', 'root canal repair pulp', 'http://localhost/web/denteeth/web/rootcanal.php'),
(8, 'Dentures', 'Dentures are custom-made replacements for missing teeth and can be taken out and put back into your mouth. While dentures take some getting used to, and will never feel exactly the same as natural teeth, today\'s dentures are natural looking and more comfortable than ever.', 'denture dentures custom made missing teeth', 'http://localhost/web/denteeth/web/dentures.php'),
(9, 'Braces', 'Braces for Orthodontic treatment, also known as Conventional Braces is an appliance for Teeth Straightening. All Kids, Young Adults and Adults undergo this Orthodontic procedure. Orthodontics is the branch of Dentistry that corrects improperly positioned Teeth and Jaws.', 'brace braces conventional teeth straightening', 'http://localhost/web/denteeth/web/braces.php');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(20) NOT NULL,
  `givenName` text NOT NULL,
  `lastName` text NOT NULL,
  `gender` char(1) NOT NULL,
  `birthDate` date NOT NULL,
  `contactNumber` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `emailAddress` varchar(30) NOT NULL,
  `password` char(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `givenName`, `lastName`, `gender`, `birthDate`, `contactNumber`, `address`, `username`, `emailAddress`, `password`) VALUES
(28, 'shey', 'reynaldo', 'F', '1994-08-30', '12345678', 'Chicayab', 'xhei_xhei', 'xhei_xhei22@yahoo.com', '728f1833e9d46643c7341111a913e3a2'),
(25, 'liezel grace', 'reynaldo', 'F', '1994-08-30', '09462717118', 'Sicayab, Dipolog City', 'xhei22', 'xhei_xhei2@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(29, 'aaa', 'aaa', 'F', '2017-06-08', '12233', 'dsada', 'aaa', 'asdfghjg@y.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(30, 'bbb', 'bbb', 'M', '2017-06-14', 'bf ', 'ff', 'bbb', 'bbb', '08f8e0260c64418510cefb2b06eee5cd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`search_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `search_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
