-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2015 at 02:58 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminmst`
--

CREATE TABLE IF NOT EXISTS `adminmst` (
  `admin_name` varchar(30) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminmst`
--

INSERT INTO `adminmst` (`admin_name`, `password`) VALUES
('dilip', 'dilip'),
('dilip', 'dilip');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `Keyword` varchar(40) NOT NULL,
  `name_en` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`Keyword`, `name_en`) VALUES
('computer', 'ahmedabad'),
('computer', 'mumbai'),
('developer', 'ahmedabad'),
('developer', 'pune'),
('computer', 'ahmedabad'),
('computer', 'mumbai'),
('developer', 'ahmedabad'),
('developer', 'pune');

-- --------------------------------------------------------

--
-- Table structure for table `jobseekerdetail`
--

CREATE TABLE IF NOT EXISTS `jobseekerdetail` (
`id` int(5) NOT NULL,
  `sscspec` varchar(30) NOT NULL,
  `sscuniv` varchar(30) NOT NULL,
  `sscpass` int(10) DEFAULT NULL,
  `hscspec` varchar(30) NOT NULL,
  `hscuniv` varchar(30) NOT NULL,
  `hscpass` int(10) DEFAULT NULL,
  `bgspec` varchar(30) NOT NULL,
  `bguniv` varchar(30) NOT NULL,
  `bgpass` int(10) DEFAULT NULL,
  `pgspec` varchar(30) NOT NULL,
  `pguniv` varchar(30) NOT NULL,
  `pgpass` int(10) DEFAULT NULL,
  `phdspec` varchar(30) NOT NULL,
  `phduniv` varchar(30) NOT NULL,
  `phdpass` int(10) DEFAULT NULL,
  `employer` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `job_description` varchar(250) NOT NULL,
  `client` varchar(30) NOT NULL,
  `project_title` varchar(30) NOT NULL,
  `duration` varchar(40) NOT NULL,
  `location` varchar(30) NOT NULL,
  `project_details` varchar(250) NOT NULL,
  `role` varchar(30) NOT NULL,
  `skill_used` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseekerdetail`
--

INSERT INTO `jobseekerdetail` (`id`, `sscspec`, `sscuniv`, `sscpass`, `hscspec`, `hscuniv`, `hscpass`, `bgspec`, `bguniv`, `bgpass`, `pgspec`, `pguniv`, `pgpass`, `phdspec`, `phduniv`, `phdpass`, `employer`, `company`, `experience`, `designation`, `job_description`, `client`, `project_title`, `duration`, `location`, `project_details`, `role`, `skill_used`, `emailid`) VALUES
(3, 'gujarat university', 'commerce', 2005, 'gesb', 'commerce', 2002, 'gujarat university', 'commerce', 2005, 'GTU', 'MCA', 2005, '', '', NULL, 'abc', 'abc', 'One Year', 'abc', 'abc', 'abcdeac', 'asdg ahs', '6 months', 'sdagj', 'sjh sL D SHLds L ', 'asdg', 'basdj', 'devendrainfotech@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `recruiterlogin`
--

CREATE TABLE IF NOT EXISTS `recruiterlogin` (
`recid` int(7) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `companyaddress` varchar(250) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `mobilenumber` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruiterlogin`
--

INSERT INTO `recruiterlogin` (`recid`, `username`, `password`, `company`, `companyaddress`, `state`, `city`, `mobilenumber`) VALUES
(1, 'devendrainfotech1234@gmail.com', '1234567890', 'abc', 'default text', '1', '1', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `tblapplicationmst`
--

CREATE TABLE IF NOT EXISTS `tblapplicationmst` (
`applicationid` int(7) NOT NULL,
  `applieddate` date NOT NULL,
  `jobid` int(7) NOT NULL,
  `jobseekerid` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Job seeker application information table';

-- --------------------------------------------------------

--
-- Table structure for table `tblcitymst`
--

CREATE TABLE IF NOT EXISTS `tblcitymst` (
`cityid` int(7) NOT NULL,
  `name` varchar(30) NOT NULL,
  `stateid` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='city master table';

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactmst`
--

CREATE TABLE IF NOT EXISTS `tblcontactmst` (
`contact_id` int(7) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` int(7) NOT NULL,
  `pincode` char(6) NOT NULL,
  `category` char(10) NOT NULL,
  `nationality` char(10) NOT NULL,
  `marital_status` char(15) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `alternativeemailid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='contact master for storing contact information';

-- --------------------------------------------------------

--
-- Table structure for table `tbljobmst`
--

CREATE TABLE IF NOT EXISTS `tbljobmst` (
`jobid` int(7) NOT NULL,
  `recstatus` tinyint(1) NOT NULL,
  `jobcreatedate` date NOT NULL,
  `jobenddate` date NOT NULL,
  `jobdesignation` varchar(100) NOT NULL COMMENT 'job title',
  `jobdescription` varchar(500) NOT NULL,
  `jobskill` int(11) NOT NULL COMMENT 'Keyword',
  `workexpyear` int(11) NOT NULL,
  `workexpmonth` int(11) NOT NULL,
  `locationofhiring` varchar(50) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `start_package` decimal(5,0) NOT NULL,
  `end_package` decimal(5,0) NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  `No_vacanies` int(5) NOT NULL,
  `recrutierid` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbljobseekerdetails`
--

CREATE TABLE IF NOT EXISTS `tbljobseekerdetails` (
`Autoid` int(7) NOT NULL,
  `create_date` date NOT NULL,
  `rec_status` tinyint(1) NOT NULL,
  `detail_type` char(15) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `jobstart_date` date NOT NULL,
  `jobend_date` date NOT NULL,
  `salary` decimal(10,0) NOT NULL,
  `jobprofile` varchar(100) NOT NULL,
  `degreename` varchar(15) NOT NULL COMMENT 'Basic/Graduation/post graduation',
  `specialization` varchar(20) NOT NULL,
  `board_name` varchar(30) NOT NULL COMMENT 'Board/ universityname',
  `passing_year` char(4) NOT NULL,
  `jobseekerid` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tbljobseekerdetails table use for storing educational and pervious work details';

-- --------------------------------------------------------

--
-- Table structure for table `tbljobseekermst`
--

CREATE TABLE IF NOT EXISTS `tbljobseekermst` (
`jobseeker_id` int(7) NOT NULL,
  `create_date` date NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `mobilenumber` int(12) NOT NULL,
  `dateofbirth` date NOT NULL,
  `resume_headline` varchar(200) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `totalexpyear` smallint(6) NOT NULL,
  `totalexpmonth` smallint(6) NOT NULL,
  `functional_aera` varchar(40) NOT NULL COMMENT 'Or Industry ',
  `current_designation` varchar(40) NOT NULL COMMENT 'Role',
  `current_company` varchar(50) NOT NULL,
  `current_location` varchar(30) NOT NULL,
  `current_salary` decimal(10,0) NOT NULL COMMENT 'current CTC',
  `Preferred_designation` varchar(40) NOT NULL,
  `prefrred_location` varchar(30) NOT NULL,
  `key_skill` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `pincode` int(10) NOT NULL,
  `profile_summary` varchar(400) NOT NULL,
  `attachment` tinyint(1) NOT NULL,
  `job_type` char(10) NOT NULL,
  `employee_type` int(11) NOT NULL,
  `language1` char(15) NOT NULL,
  `language2` char(15) NOT NULL,
  `language3` char(15) NOT NULL,
  `contact_id` int(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Job seeker application information table';

--
-- Dumping data for table `tbljobseekermst`
--

INSERT INTO `tbljobseekermst` (`jobseeker_id`, `create_date`, `isactive`, `firstname`, `lastname`, `mobilenumber`, `dateofbirth`, `resume_headline`, `city`, `address`, `totalexpyear`, `totalexpmonth`, `functional_aera`, `current_designation`, `current_company`, `current_location`, `current_salary`, `Preferred_designation`, `prefrred_location`, `key_skill`, `role`, `emailid`, `pincode`, `profile_summary`, `attachment`, `job_type`, `employee_type`, `language1`, `language2`, `language3`, `contact_id`) VALUES
(1, '0000-00-00', 0, 'devendra', 'yadav', 1234567890, '0000-00-00', 'Your Resume Headline is the first thing Recruiter will see.', 'Hyderabad', 'Present address', 0, 0, '0', '', '', '', '0', '', '', 'developer', '0', 'devendrainfotech@gmail.com', 123456, '', 0, '', 0, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblloginmst`
--

CREATE TABLE IF NOT EXISTS `tblloginmst` (
`login_id` int(7) NOT NULL,
  `create_date` date NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_state` varchar(30) NOT NULL,
  `user_city` varchar(30) NOT NULL,
  `sec_question` varchar(100) NOT NULL,
  `sec_asnwer` varchar(50) NOT NULL,
  `rec_status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 COMMENT='login table information';

--
-- Dumping data for table `tblloginmst`
--

INSERT INTO `tblloginmst` (`login_id`, `create_date`, `fullname`, `username`, `user_password`, `user_state`, `user_city`, `sec_question`, `sec_asnwer`, `rec_status`) VALUES
(5, '0000-00-00', '', 'dalwadi.dilip@gmail.com', '1234567890', 'Daman and Diu', 'Vadodara', '', '', 0),
(6, '0000-00-00', '', 'dalwadi.dilip1@gmail.com', '1234567890', 'Andaman and Nicobar Islands', '', '', '', 0),
(7, '0000-00-00', '', 'dalwadi.dilip5@gmail.com', '1234567890', 'Andaman and Nicobar Islands', '', '', '', 0),
(8, '0000-00-00', '', 'dalwadi.dilipkl@gmail.com', 'asdfghjkl', 'Andaman and Nicobar Islands', '', '', '', 0),
(9, '0000-00-00', '', 'devendrainfotech@gmail.com', '1234567890', 'Andaman and Nicobar Islands', '', '', '', 0),
(10, '0000-00-00', '', 'ac@g.com', 'a1111111', 'Sikkim', 'Aurangabad', '', '', 0),
(11, '0000-00-00', '', 'devendrainfotech1@gmail.com', '1234567890', '', '', '', '', 0),
(12, '0000-00-00', '', 'devendrainfotech11@gmail.com', '1234567890', '', '', '', '', 0),
(13, '0000-00-00', '', 'devendrainfotech21@gmail.com', '123', '', '', '', '', 0),
(14, '0000-00-00', '', 'devendrainfotech123@gmail.com', '123', '', '', '', '', 0),
(15, '0000-00-00', '', 'devendraisnfotech@gmail.com', 's', '', '', '', '', 0),
(16, '0000-00-00', '', 'devendrainaotech@gmail.com', 'a', '', '', '', '', 0),
(17, '0000-00-00', '', 'devenddrainfotech@gmail.com', 'd', '', '', '', '', 0),
(18, '0000-00-00', '', 'devendrainfot1ech@gmail.com', '1234567890', 'Andaman and Nicobar Islands', '', '', '', 0),
(19, '0000-00-00', '', 'dev123@gmail.com', '1234567890', 'Goa', 'Pune', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblphotomst`
--

CREATE TABLE IF NOT EXISTS `tblphotomst` (
  `photo_id` int(7) NOT NULL DEFAULT '0',
  `photo` varchar(30) NOT NULL,
  `rec_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblrecruitermst`
--

CREATE TABLE IF NOT EXISTS `tblrecruitermst` (
`recruiterid` int(7) NOT NULL,
  `create_date` date NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `dateofbirth` date NOT NULL,
  `current_company` varchar(50) NOT NULL,
  `designation` varchar(20) NOT NULL COMMENT 'role',
  `current_location` varchar(30) NOT NULL,
  `hiringfor` int(11) NOT NULL COMMENT 'Hiring header information',
  `skill` int(11) NOT NULL COMMENT 'skill /specialist in perticular aera',
  `contact_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='recruiter information';

-- --------------------------------------------------------

--
-- Table structure for table `tblstatemst`
--

CREATE TABLE IF NOT EXISTS `tblstatemst` (
  `stateid` int(7) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='master table of the state information';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobseekerdetail`
--
ALTER TABLE `jobseekerdetail`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruiterlogin`
--
ALTER TABLE `recruiterlogin`
 ADD PRIMARY KEY (`recid`);

--
-- Indexes for table `tblapplicationmst`
--
ALTER TABLE `tblapplicationmst`
 ADD PRIMARY KEY (`applicationid`), ADD KEY `jobid` (`jobid`);

--
-- Indexes for table `tblcitymst`
--
ALTER TABLE `tblcitymst`
 ADD PRIMARY KEY (`cityid`);

--
-- Indexes for table `tblcontactmst`
--
ALTER TABLE `tblcontactmst`
 ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbljobmst`
--
ALTER TABLE `tbljobmst`
 ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `tbljobseekerdetails`
--
ALTER TABLE `tbljobseekerdetails`
 ADD PRIMARY KEY (`Autoid`), ADD KEY `Autoid` (`Autoid`);

--
-- Indexes for table `tbljobseekermst`
--
ALTER TABLE `tbljobseekermst`
 ADD PRIMARY KEY (`jobseeker_id`);

--
-- Indexes for table `tblloginmst`
--
ALTER TABLE `tblloginmst`
 ADD PRIMARY KEY (`login_id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tblphotomst`
--
ALTER TABLE `tblphotomst`
 ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `tblrecruitermst`
--
ALTER TABLE `tblrecruitermst`
 ADD PRIMARY KEY (`recruiterid`);

--
-- Indexes for table `tblstatemst`
--
ALTER TABLE `tblstatemst`
 ADD PRIMARY KEY (`stateid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobseekerdetail`
--
ALTER TABLE `jobseekerdetail`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `recruiterlogin`
--
ALTER TABLE `recruiterlogin`
MODIFY `recid` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblapplicationmst`
--
ALTER TABLE `tblapplicationmst`
MODIFY `applicationid` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblcitymst`
--
ALTER TABLE `tblcitymst`
MODIFY `cityid` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblcontactmst`
--
ALTER TABLE `tblcontactmst`
MODIFY `contact_id` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbljobmst`
--
ALTER TABLE `tbljobmst`
MODIFY `jobid` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbljobseekerdetails`
--
ALTER TABLE `tbljobseekerdetails`
MODIFY `Autoid` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbljobseekermst`
--
ALTER TABLE `tbljobseekermst`
MODIFY `jobseeker_id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblloginmst`
--
ALTER TABLE `tblloginmst`
MODIFY `login_id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tblrecruitermst`
--
ALTER TABLE `tblrecruitermst`
MODIFY `recruiterid` int(7) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
