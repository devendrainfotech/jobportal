-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2015 at 10:31 PM
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
  `password` varchar(30) NOT NULL,
  `email_id` varchar(35) NOT NULL,
  `contact_no` varchar(13) NOT NULL,
  `img` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminmst`
--

INSERT INTO `adminmst` (`admin_name`, `password`, `email_id`, `contact_no`, `img`, `location`) VALUES
('Dilip', 'dilip', 'dalwadi.dilip12@gmail.com', '8866120701', 'img/dilip.jpg', 'Morbi');

-- --------------------------------------------------------

--
-- Table structure for table `tblcitymst`
--

CREATE TABLE IF NOT EXISTS `tblcitymst` (
`cityid` int(7) NOT NULL,
  `name` varchar(30) NOT NULL,
  `stateid` int(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='city master table';

--
-- Dumping data for table `tblcitymst`
--

INSERT INTO `tblcitymst` (`cityid`, `name`, `stateid`) VALUES
(1, 'Ahmedabad', 1),
(2, 'Delhi', 10),
(3, 'Mumbai', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactmst`
--

CREATE TABLE IF NOT EXISTS `tblcontactmst` (
`contact_id` int(7) NOT NULL,
  `address` varchar(200) NOT NULL,
  `state` int(5) NOT NULL,
  `city` int(7) NOT NULL,
  `pincode` char(6) NOT NULL,
  `category` char(10) NOT NULL,
  `nationality` char(10) NOT NULL,
  `marital_status` char(15) NOT NULL,
  `emailid` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='contact master for storing contact information';

--
-- Dumping data for table `tblcontactmst`
--

INSERT INTO `tblcontactmst` (`contact_id`, `address`, `state`, `city`, `pincode`, `category`, `nationality`, `marital_status`, `emailid`) VALUES
(1, '', 0, 0, '', '', '', '', '');

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
  `jobskill` varchar(100) NOT NULL COMMENT 'Keyword',
  `workexp` int(11) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `locationofhiring` varchar(50) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `start_package` decimal(5,0) NOT NULL,
  `end_package` decimal(5,0) NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  `No_vacanies` int(5) NOT NULL,
  `recruiterid` int(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljobmst`
--

INSERT INTO `tbljobmst` (`jobid`, `recstatus`, `jobcreatedate`, `jobenddate`, `jobdesignation`, `jobdescription`, `jobskill`, `workexp`, `qualification`, `locationofhiring`, `companyname`, `start_package`, `end_package`, `isactive`, `No_vacanies`, `recruiterid`) VALUES
(1, 0, '0000-00-00', '0000-00-00', 'Web developer', 'We want web developer for part time hiring the solution and for work around the around the clock and see that he manages time as well as employee..', 'c++, JAVA, PHP', 5, 'MCA', 'Ahmedabad', 'Krishana Texpa Techonlogy Pvt. Ltd.', '1', '5', 0, 0, 0),
(2, 0, '0000-00-00', '0000-00-00', 'Web Developer', 'sdf  vd vasf asas fvas va va v advcdacvzcv  zvz vz vzv v dzvzdvz z vdvdvd vd  vdd vdv dv ', 'JAVA, C++', 7, 'BCA', 'mumbai', 'apana sony pvt ltd', '0', '0', 0, 0, 0),
(3, 0, '0000-00-00', '0000-00-00', 'Web Master', 'sdf  vd vasf asas fvas va va v advcdacvzcv  zvz vz vzv v dzvzdvz z vdvdvd vd  vdd vdv dv ', 'JAVA, C++', 10, 'Bcom', 'ahmedabad', 'apana sony pvt ltd', '0', '0', 0, 0, 0),
(4, 0, '0000-00-00', '0000-00-00', 'Web developer', 'We want web developer for part time hiring the solution and for work around the around the clock and see that he manages time as well as employee..', 'c++, JAVA, PHP', 5, 'MCA', 'Ahmedabad', 'Krishana Texpa Techonlogy Pvt. Ltd.', '0', '0', 0, 0, 0),
(5, 0, '0000-00-00', '0000-00-00', 'asdasd', 'Entire Description about job', 'adasd', 2, 'dasdasd', 'asdasd', 'asdasd', '0', '0', 0, 0, 0),
(6, 0, '0000-00-00', '0000-00-00', 'asdasd', 'Entire Description about job', 'adasd', 0, 'dasdasd', 'asdasd', 'asdasd', '1', '1', 0, 0, 0),
(7, 0, '0000-00-00', '0000-00-00', 'asdasd', 'Entire Description about job', 'adasd', 0, 'dasdasd', 'asdasd', 'asdasd', '0', '0', 0, 0, 0),
(8, 0, '0000-00-00', '0000-00-00', 'asdasd', 'Entire Description about job', 'adasd', 0, 'dasdasd', 'asdasd', 'asdasd', '0', '0', 0, 0, 0),
(9, 0, '0000-00-00', '0000-00-00', 'asdasd', 'Entire Description about job', 'adasd', 0, 'dasdasd', 'asdasd', 'asdasd', '0', '0', 0, 0, 0),
(10, 0, '0000-00-00', '0000-00-00', 'asdasd', 'Entire Description about job', 'adasd', 0, 'dasdasd', 'asdasd', 'asdasd', '0', '0', 0, 0, 0),
(11, 0, '0000-00-00', '0000-00-00', 'asdasd', 'Entire Description about job', 'adasd', 0, 'dasdasd', 'asdasd', 'asdasd', '0', '0', 0, 0, 0),
(13, 0, '0000-00-00', '0000-00-00', 'asdasd', 'Entire Description about job', 'adasd', 0, 'dasdasd', 'asdasd', 'asdasd', '0', '0', 0, 0, 0),
(14, 0, '0000-00-00', '0000-00-00', 'asdasd', 'Entire Description about job', 'adasd', 1, 'dasdasd', 'asdasd', 'abc', '2', '1', 0, 0, 0),
(15, 0, '0000-00-00', '0000-00-00', 'software dev', 'aDADAHDKAJS', 'JAVA,PHP', 2, 'MCA', 'Ahmedabad', 'devinfotech', '1', '3', 0, 0, 0),
(19, 0, '0000-00-00', '0000-00-00', 'Web Developer', 'as', 'Accountant', 1, 'M.com', 'Ahmedabad', 'Infosis', '2', '2', 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbljobseekermst`
--

CREATE TABLE IF NOT EXISTS `tbljobseekermst` (
`jobseeker_id` int(5) NOT NULL,
  `create_date` date NOT NULL,
  `username` varchar(30) NOT NULL COMMENT 'username',
  `user_password` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `Mobileno` bigint(12) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `dateofbirth` date NOT NULL,
  `resume_headline` varchar(200) NOT NULL,
  `cityid` int(11) NOT NULL,
  `totalexpyear` smallint(6) NOT NULL,
  `functional_area` int(11) NOT NULL COMMENT 'Or Industry ',
  `key_skill` varchar(50) NOT NULL,
  `role` varchar(30) NOT NULL,
  `user_state` varchar(40) NOT NULL,
  `user_city` varchar(30) NOT NULL,
  `profile_summary` varchar(400) NOT NULL,
  `Gender` char(1) NOT NULL,
  `contact_id` int(7) NOT NULL,
  `sec_que` varchar(100) NOT NULL,
  `sec_ans` varchar(50) NOT NULL,
  `photopath` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pincode` varchar(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COMMENT='Job seeker application information table';

--
-- Dumping data for table `tbljobseekermst`
--

INSERT INTO `tbljobseekermst` (`jobseeker_id`, `create_date`, `username`, `user_password`, `firstname`, `lastname`, `Mobileno`, `emailid`, `dateofbirth`, `resume_headline`, `cityid`, `totalexpyear`, `functional_area`, `key_skill`, `role`, `user_state`, `user_city`, `profile_summary`, `Gender`, `contact_id`, `sec_que`, `sec_ans`, `photopath`, `address`, `pincode`) VALUES
(1, '0000-00-00', 'devendrainfotech@gmail.com', '1234567890', 'Devendra', 'Yadav', 1234567890, ' devendrainfotech@gmail.com', '1993-09-03', '                  I have 5 Year Exp in Software Development                  ', 1, 5, 1, 'ASP.NET , JAVA , Sql Sever, C#', '6', '', '', 'Profile Summary', 'M', 1, '', '', 'Design/Images/user/vlcsnap-2015-09-15-18h46m44s186.png', '', ''),
(2, '0000-00-00', 'dev1234@gmail.com', '1234567890', '', '', 0, '', '0000-00-00', '', 0, 0, 0, '', '', 'Andaman and Nicobar Islands', 'Mumbai', '', '', 0, '', '', '', '', ''),
(3, '0000-00-00', 'devendrainfotech1@gmail.com', '1234567890', '', '', 0, '', '0000-00-00', '', 0, 0, 0, '', '', 'Andaman and Nicobar Islands', 'Mumbai', '', '', 0, '', '', '', '', ''),
(4, '0000-00-00', 'dalwadi.dilip123@gmail.com', '1234567890', '', '', 0, '', '0000-00-00', '', 0, 0, 0, '', '', 'Andaman and Nicobar Islands', 'Mumbai', '', '', 0, '', '', '', '', ''),
(5, '0000-00-00', '123@gmail.com', '1234567890', '', '', 0, '', '0000-00-00', '', 0, 0, 0, '', '', 'Andaman and Nicobar Islands', 'Mumbai', '', '', 0, '', '', '', '', ''),
(6, '0000-00-00', '1234@gmail.com', '1234567890', '', '', 0, '', '0000-00-00', '', 0, 0, 0, '', '', 'Andaman and Nicobar Islands', 'Mumbai', '', '', 0, '', '', '', '', ''),
(7, '0000-00-00', 'dalwadi.dilip12345@gmail.com', '1234567890', '', '', 2147483647, '', '0000-00-00', '', 0, 0, 0, '', '', 'Gujarat', 'Ahmedabad', '', '', 0, '', '', '', '', ''),
(8, '0000-00-00', 'darshak@gmail.com', '1234567890', 'Darshak', 'Gajjar', 9724069180, 'darshak@gmail.com', '1970-01-01', 'want to be                                    ', 1, 0, 1, 'C++', '6', 'Gujarat', 'Bangalore', '', 'M', 0, '', '', '', '', ''),
(9, '0000-00-00', 'darshak123@gmail.com', '12345678', '', '', 1234567890, '', '0000-00-00', '', 0, 0, 0, '', '', 'Gujarat', 'Ahmedabad', '', '', 0, '', '', '', '', ''),
(10, '0000-00-00', 'darshak12345@gmail.com', '12345678', '', '', 9988765477, '', '0000-00-00', '', 0, 0, 0, '', '', 'Gujarat', 'Ahmedabad', '', '', 0, '', '', '', '', ''),
(11, '0000-00-00', 'darshak1@gmail.com', '12345678', 'Darshak', 'Gajjar', 9988765477, '    darshak1@gmail.com', '2000-12-12', '                  asdasjkdaskdj                  ', 1, 0, 1, 'asdjaksdjalkdsjkal', '6', '1', '1', '', 'M', 0, '', '', 'Design/Images/user/vlcsnap-2015-09-15-18h46m44s186.png', 'abc', '230023'),
(12, '0000-00-00', 'dev123@gmail.com', '12345678', '', '', 9724069187, '', '0000-00-00', '', 0, 0, 0, '', '', 'Gujarat', 'Ahmedabad', '', '', 0, '', '', 'Design/Images/user/12vlcsnap-2015-09-15-19h13m49s715.png', '', ''),
(13, '0000-00-00', 'deva@gmail.com', 'devendra.123', '', '', 9724069187, '', '0000-00-00', '', 0, 0, 0, '', '', 'Gujarat', 'Mumbai', '', '', 0, '2', 'new', 'Design/Images/user/13vlcsnap-2015-09-15-18h46m44s186.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblrecruitermst`
--

CREATE TABLE IF NOT EXISTS `tblrecruitermst` (
`recruiterid` int(7) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `create_date` date NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `dateofbirth` date NOT NULL,
  `company` varchar(50) NOT NULL,
  `companyaddress` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `mobilenumber` bigint(12) NOT NULL,
  `designation` int(11) NOT NULL COMMENT 'role',
  `companyemailid` varchar(30) NOT NULL,
  `sec_que` varchar(30) NOT NULL,
  `sec_ans` varchar(50) NOT NULL,
  `photopath` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='recruiter information';

--
-- Dumping data for table `tblrecruitermst`
--

INSERT INTO `tblrecruitermst` (`recruiterid`, `username`, `password`, `create_date`, `firstname`, `middlename`, `lastname`, `dateofbirth`, `company`, `companyaddress`, `state`, `city`, `mobilenumber`, `designation`, `companyemailid`, `sec_que`, `sec_ans`, `photopath`) VALUES
(2, 'devendrainfotech12@gmail.com', '12345678', '0000-00-00', 'Dev', '', 'Patel', '1994-05-04', 'IBM ', ' \r\n                      Ami Appartment, Naranpura                                                  ', 'Gujarat', 'Ahmedabad', 8844666301, 8, '  Devinfo@gmail.com', '', '', 'Design/Images/user/vlcsnap-2015-09-15-19h51m47s383.png'),
(3, 'deva@gmail.com', '12345678', '0000-00-00', '', '', '', '0000-00-00', 'Infosis', 'valid address must be long', 'Gujarat', 'Ahmedabad', 9724069187, 0, '', '4', 'ahmedabad', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblstatemst`
--

CREATE TABLE IF NOT EXISTS `tblstatemst` (
  `stateid` int(7) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='master table of the state information';

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobseeker_exp_details`
--

CREATE TABLE IF NOT EXISTS `tbl_jobseeker_exp_details` (
`autoid` int(5) NOT NULL COMMENT 'PK',
  `CompanyName` varchar(100) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Job_StartDate` date NOT NULL,
  `Job_EndDate` date NOT NULL,
  `JobDetails` varchar(500) NOT NULL,
  `IsCurrentJob` tinyint(1) NOT NULL,
  `Jobseekerid` int(5) NOT NULL COMMENT 'FK'
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COMMENT='tbl_JobSeeker_Exp_Details is Child Table of Job Seeker master who store Exp dtl';

--
-- Dumping data for table `tbl_jobseeker_exp_details`
--

INSERT INTO `tbl_jobseeker_exp_details` (`autoid`, `CompanyName`, `Designation`, `Job_StartDate`, `Job_EndDate`, `JobDetails`, `IsCurrentJob`, `Jobseekerid`) VALUES
(14, 'Abc infotech pvt ltd', 'Software developer', '2010-07-01', '2012-08-10', 'asadasd                                                    ', 1, 1),
(15, 'new', 'start', '2010-07-01', '2012-07-01', 'new', 0, 1),
(16, 'sub', 'start', '2010-07-01', '2013-07-01', '                          asdasd', 0, 1),
(17, 'new', 'start', '2010-07-01', '2012-07-01', 'Hell', 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_seeker_edu_details`
--

CREATE TABLE IF NOT EXISTS `tbl_job_seeker_edu_details` (
`autoid` int(5) NOT NULL,
  `Degree` int(11) NOT NULL COMMENT 'Basic/Graduation/post graduation',
  `specialization` varchar(20) NOT NULL,
  `board_name` varchar(30) NOT NULL COMMENT 'Board/ universityname',
  `passing_year` char(4) NOT NULL,
  `jobseekerid` int(5) NOT NULL,
  `Percentage` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COMMENT='tbljobseekerdetails table use for storing educational and pervious work details';

--
-- Dumping data for table `tbl_job_seeker_edu_details`
--

INSERT INTO `tbl_job_seeker_edu_details` (`autoid`, `Degree`, `specialization`, `board_name`, `passing_year`, `jobseekerid`, `Percentage`) VALUES
(15, 10, 'commerce', 'gujarat university', '11', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_seeker_proj_details`
--

CREATE TABLE IF NOT EXISTS `tbl_job_seeker_proj_details` (
`autoid` int(5) NOT NULL,
  `client` varchar(100) NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `duration` int(11) NOT NULL COMMENT 'Duration Start',
  `location` varchar(30) NOT NULL COMMENT 'Duration_End',
  `project_details` varchar(200) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `skill_used` varchar(50) NOT NULL,
  `jobseekerid` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='tbl_job_seeker_proj_details stores project details of JS';

--
-- Dumping data for table `tbl_job_seeker_proj_details`
--

INSERT INTO `tbl_job_seeker_proj_details` (`autoid`, `client`, `project_title`, `duration`, `location`, `project_details`, `Role`, `skill_used`, `jobseekerid`) VALUES
(8, 'Abc Company', 'aaaaa dfsfsd', 30, 'Ahmedabad', 'adassadasds"sfsf dsfsads asd ads asdasda', 'Team Leader', 'Java, C#', 1),
(9, 'Abc Company', 'ONline shopping with inventory', 27, 'Ahmedabad', 'saadad', 'Team Leader', 'sdfsd', 1),
(11, 'abcdeac', 'asd', 0, 'sdagj', '', 'asdg', 'asd', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_list_mst`
--

CREATE TABLE IF NOT EXISTS `tbl_list_mst` (
  `autoid` int(5) NOT NULL,
  `Type` varchar(50) NOT NULL COMMENT 'type like Degree,Designation,Category etc',
  `Value` varchar(100) NOT NULL COMMENT 'if type=degree thn value add Bcom,Bca, Mca'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Use for bind Many dropdown Dynamically';

--
-- Dumping data for table `tbl_list_mst`
--

INSERT INTO `tbl_list_mst` (`autoid`, `Type`, `Value`) VALUES
(1, 'Function_Area', 'IT-Software Development & Services'),
(2, 'Function_Area', 'IT-Hardware & Networking'),
(3, 'Function_Area', 'Banking Sector/Financial Services/Broking'),
(4, 'Function_Area', 'Hotel/Restaurants/Airlines/Travel'),
(5, 'Function_Area', 'Medical/Health Care/Hospital'),
(6, 'Designation', 'Software Developer'),
(7, 'Designation', 'Database administrator'),
(8, 'Designation', 'Software Analyst'),
(9, 'Degree', 'SSC'),
(10, 'Degree', 'HSC'),
(11, 'Year', '2001'),
(12, 'Year', '2002'),
(13, 'Project_Duration', 'more than 3'),
(14, 'Project_Duration', '6 month'),
(15, 'Project_Duration', '9 month'),
(16, 'Project_Duration', '1 year'),
(17, 'Project_Duration', 'more than 2 year');

-- --------------------------------------------------------

--
-- Table structure for table `userjobapplication`
--

CREATE TABLE IF NOT EXISTS `userjobapplication` (
`appid` int(7) NOT NULL,
  `jobid` int(11) NOT NULL,
  `jobdesignation` varchar(100) NOT NULL,
  `jobskill` varchar(50) NOT NULL,
  `workexp` int(7) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `locationofhiring` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `AScon` int(1) NOT NULL,
  `jobseekerid` int(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userjobapplication`
--

INSERT INTO `userjobapplication` (`appid`, `jobid`, `jobdesignation`, `jobskill`, `workexp`, `qualification`, `locationofhiring`, `company`, `AScon`, `jobseekerid`) VALUES
(36, 1, 'Web developer', 'c++, JAVA, PHP', 5, 'MCA', 'Ahmedabad', 'Krishana Texpa Techonlogy Pvt. Ltd.', 1, 1),
(37, 2, 'Web Developer', 'JAVA, C++', 7, 'BCA', 'mumbai', 'apana sony pvt ltd', 1, 1),
(38, 17, 'Web Developer and Designer', 'Accountant', 2, 'MCA', 'Ahmedabad', 'Infosis pvt ltd', 1, 1);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tbljobseekermst`
--
ALTER TABLE `tbljobseekermst`
 ADD PRIMARY KEY (`jobseeker_id`), ADD UNIQUE KEY `emailid` (`username`);

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
-- Indexes for table `tbl_jobseeker_exp_details`
--
ALTER TABLE `tbl_jobseeker_exp_details`
 ADD PRIMARY KEY (`autoid`);

--
-- Indexes for table `tbl_job_seeker_edu_details`
--
ALTER TABLE `tbl_job_seeker_edu_details`
 ADD PRIMARY KEY (`autoid`);

--
-- Indexes for table `tbl_job_seeker_proj_details`
--
ALTER TABLE `tbl_job_seeker_proj_details`
 ADD PRIMARY KEY (`autoid`);

--
-- Indexes for table `tbl_list_mst`
--
ALTER TABLE `tbl_list_mst`
 ADD PRIMARY KEY (`autoid`);

--
-- Indexes for table `userjobapplication`
--
ALTER TABLE `userjobapplication`
 ADD PRIMARY KEY (`appid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcitymst`
--
ALTER TABLE `tblcitymst`
MODIFY `cityid` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblcontactmst`
--
ALTER TABLE `tblcontactmst`
MODIFY `contact_id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbljobmst`
--
ALTER TABLE `tbljobmst`
MODIFY `jobid` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbljobseekermst`
--
ALTER TABLE `tbljobseekermst`
MODIFY `jobseeker_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tblrecruitermst`
--
ALTER TABLE `tblrecruitermst`
MODIFY `recruiterid` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_jobseeker_exp_details`
--
ALTER TABLE `tbl_jobseeker_exp_details`
MODIFY `autoid` int(5) NOT NULL AUTO_INCREMENT COMMENT 'PK',AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_job_seeker_edu_details`
--
ALTER TABLE `tbl_job_seeker_edu_details`
MODIFY `autoid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_job_seeker_proj_details`
--
ALTER TABLE `tbl_job_seeker_proj_details`
MODIFY `autoid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `userjobapplication`
--
ALTER TABLE `userjobapplication`
MODIFY `appid` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
