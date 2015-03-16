-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2014 at 12:57 PM
-- Server version: 5.5.40-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seosmopp_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminuser` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `phoneNo1` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `phoneNo2` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `Address1` tinytext COLLATE latin1_general_ci NOT NULL,
  `Address2` tinytext COLLATE latin1_general_ci NOT NULL,
  `status` varchar(11) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminuser`, `password`, `email`, `phoneNo1`, `phoneNo2`, `Address1`, `Address2`, `status`) VALUES
(1, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'firstlookinteriors@gmail.com', '011 41622733', '4123', 'FIRST LOOK INTERIORS\r\nK – 55/A, Kalkaji,\r\nNew Delhi 110 019\r\nIndia', 'H-50, Street No. 4\r\nAram Park, Shastri Nagar\r\nNew Delhi 110 035\r\nIndia', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Sports'),
(2, 'HTML'),
(3, 'PHP'),
(4, 'CSS');

-- --------------------------------------------------------

--
-- Table structure for table `cipltech_category`
--

CREATE TABLE IF NOT EXISTS `cipltech_category` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(250) NOT NULL,
  `cat_prt_id` int(10) NOT NULL,
  `cat_desc` text NOT NULL,
  `cat_img` varchar(250) NOT NULL,
  `meta_title` mediumtext NOT NULL,
  `meta_keyword` mediumtext NOT NULL,
  `meta_desc` longtext NOT NULL,
  `cat_status` enum('Active','Inactive') NOT NULL,
  `cat_updated_on` int(10) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cipltech_category`
--

INSERT INTO `cipltech_category` (`cat_id`, `cat_name`, `cat_prt_id`, `cat_desc`, `cat_img`, `meta_title`, `meta_keyword`, `meta_desc`, `cat_status`, `cat_updated_on`) VALUES
(1, 'Mobile accessories', 0, '<p><a href=\\"http://mobile-668.en.made-in-china.com/product/mvqJPLjchQWs/China-Mobile-Phone-LCD-Touch-Screen-for-Apple-iPhone-5-Display-with-Digitizer-with-Frame-Assembly.html\\" target=\\"_blank\\">Professional Supplier of&nbsp;<strong>Mobile</strong>&nbsp;<strong>Phone</strong>&nbsp;<strong>Accessory</strong></a></p>\r\n\r\n<p><img alt=\\"TopRank - Priority Search Results Ranking\\" src=\\"http://img.made-in-china.com/sources/logo/toprank_s.gif\\" /></p>\r\n\r\n<p>Topmind Trading Limited is mainly engaged in wholesale of&nbsp;<strong>mobile</strong><strong>phone</strong>&nbsp;parts and accessories. as a professional foreign trade company, we provide excellent service to every overseas customers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>With daqin&nbsp;<strong>mobile</strong>&nbsp;<strong>phone</strong>&nbsp;skin system, you can design any image for any&nbsp;<strong>phone</strong>, and software and cutter, printer, laminator and materials are all you need to start the business. Any design, any<strong>phone</strong>!</p>', '726howtobuythebestmobileac.jpg', 'Mobile phone Accessories', 'Mobile Phone Accessories', 'Mobile Phone Accessories,Charger,Headphone', 'Active', 1383028160),
(2, 'Mobile charger', 1, '<p>The charging protocol depends on the size and type of the battery being charged. Some battery types have high tolerance for overcharging and can be recharged by connection to a constant voltage source or a constant current source; simple chargers of this type require manual disconnection at the end of the charge cycle, or may have a timer to cut off charging current at a fixed time. Other battery types cannot withstand long high-rate over-charging; the charger may have temperature or voltage sensing circuits and a microprocessor controller to adjust the charging current, and cut off at the end of charge. A trickle charger provides a relatively small amount of current, only enough to counteract self-discharge of a battery that is idle for a long time. Slow battery chargers may take several hours to complete a charge; high-rate chargers may restore most capacity within minutes or less than an hour, but generally require monitoring of the battery to protect it from overcharge. Electric vehicles need high-rate chargers for public access; installation of such chargers and the distribution support for them is an issue in the proposed adoption of electric cars.</p>', '290universal-mobile-charger.jpg', 'Mobile charger', 'Mobile charger', 'Mobile charger', 'Active', 1383037145),
(3, 'Mobile phone', 0, '<p>mobile store</p>', '364mobile-phone_0.png', 'Mobile phone store', 'Mobile phone store', 'Mobile phone store', 'Active', 1383039105);

-- --------------------------------------------------------

--
-- Table structure for table `cipltech_customer`
--

CREATE TABLE IF NOT EXISTS `cipltech_customer` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_fname` varchar(50) NOT NULL,
  `cust_lname` varchar(50) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_password` varchar(50) NOT NULL,
  `cust_contact` varchar(20) NOT NULL,
  `cust_address` tinytext NOT NULL,
  `cust_state` varchar(50) NOT NULL,
  `cust_city` varchar(50) NOT NULL,
  `cust_country` varchar(50) NOT NULL,
  `cust_reg_on` int(10) NOT NULL,
  `cust_status` enum('0','1') NOT NULL COMMENT '0 is inactive,1 is active',
  PRIMARY KEY (`cust_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cipltech_customer`
--

INSERT INTO `cipltech_customer` (`cust_id`, `cust_fname`, `cust_lname`, `cust_email`, `cust_password`, `cust_contact`, `cust_address`, `cust_state`, `cust_city`, `cust_country`, `cust_reg_on`, `cust_status`) VALUES
(1, 'Sonu', 'Kumar', 'sonu@cipltech.com', '371ab955fdc11c44c980779c3135b155', '8826330850', '16/393 kalyanpuri new delhi -110091', 'Delhi', 'New Delhi', 'India', 1386068753, '1');

-- --------------------------------------------------------

--
-- Table structure for table `cipl_tech_prod`
--

CREATE TABLE IF NOT EXISTS `cipl_tech_prod` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(250) NOT NULL,
  `prod_img1` varchar(250) NOT NULL,
  `prod_img2` varchar(250) NOT NULL,
  `prod_img3` varchar(250) NOT NULL,
  `prod_catg_id` int(10) NOT NULL,
  `prod_desc` text NOT NULL,
  `meta_title` mediumtext NOT NULL,
  `meta_keyword` mediumtext NOT NULL,
  `meta_desc` mediumtext NOT NULL,
  `prod_status` enum('Active','Inactive') NOT NULL,
  `prod_updated_on` int(10) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cipl_tech_prod`
--

INSERT INTO `cipl_tech_prod` (`prod_id`, `prod_name`, `prod_img1`, `prod_img2`, `prod_img3`, `prod_catg_id`, `prod_desc`, `meta_title`, `meta_keyword`, `meta_desc`, `prod_status`, `prod_updated_on`) VALUES
(1, 'Blackberry z11', '464bb-10-lede.jpg', '629BlackBerry_Z10_front_and_back.png', '919blackberry-z10-16.jpg', 3, '<h3>BLACKBERRY Z11 (WHITE) PRICE: RS.27500</h3>\r\n\r\n<h3><strong>Key Features</strong></h3>\r\n\r\n<ul>\r\n	<li>BlackBerry 10 OS</li>\r\n	<li>1.5 GHz Dual Core Processor</li>\r\n	<li>2 MP Secondary Camera</li>\r\n	<li>8 MP Primary Camera</li>\r\n	<li>Full HD Recording</li>\r\n	<li>4.2-inch Capacitive Touchscreen</li>\r\n	<li>Expandable Storage Capacity of 32 GB</li>\r\n	<li>Wi-Fi Enabled</li>\r\n</ul>\r\n\r\n<p>BlackBerry is taking on a new avatar by saying goodbye to its QWERTY keypad and bringing an all-new touch experience to users. The&nbsp;<strong>BlackBerry Z10</strong>&nbsp;is the first of the brand&rsquo;s new range of phones running on the BlackBerry 10 operating system that offers fast and compelling user experience. The<strong>&nbsp;1.5 GHz Dual Core processor</strong>&nbsp;with 2 GB RAM offers impressive support that ensures there are no lags and that the phone runs smoothly. But what you really have to love is the&nbsp;<strong>4.2 inch touchscreen</strong>&nbsp;that doesn&rsquo;t miss a beat. The WXGA&nbsp;<strong>capacitive touchscreen&nbsp;</strong>supports 1280 x 768 pixel resolution and gives you great display and gesture support delivers satisfying navigation.</p>\r\n\r\n<p>A major highlight of the Z10 is its<strong>&nbsp;8 MP camera</strong>. With<strong>&nbsp;5x zoom</strong>&nbsp;and a host of nifty camera features, taking pictures on this smartphone is a true joy. The 2 MP secondary camera and<strong>&nbsp;full HD video recording&nbsp;</strong>capabilities add to the appeal of the Z10.</p>\r\n\r\n<p>Keeping up with times and user needs, the BlackBerry Z10 brings you the seamless possibilities of two features which are&nbsp;<strong>BlackBerry Hub&nbsp;</strong>and BlackBerry Flow. The Hub feature allows you to keep all your incoming messages in one place and keep track of all your meetings and calendar events. The Flow feature refers to the BlackBerry&rsquo;s ability to switch between applications quickly and flawlessly.</p>\r\n\r\n<p><strong>Design</strong></p>\r\n\r\n<p>The Z10 has a simple yet appealing design with a bold bar-shaped rectangular body and rounded edges. The phone has done away with navigational buttons, the only physical buttons you will find are the volume rocker and mute button on the right and the power button on top which sits next to the&nbsp;<strong>3.5 mm audio jack</strong>. The USB and micro HDMI ports are on the left.&nbsp;</p>\r\n\r\n<p><strong>Storage and Battery</strong></p>\r\n\r\n<p>With a big internal memory of&nbsp;<strong>16 GB</strong>&nbsp;and an expandable memory of up to 64 GB (using micro SD), you can store music, movies and data on the phone with ease. The 1800 mAh battery supports up to&nbsp;<strong>10 hours of talktime</strong>&nbsp;on 2G and 11 hours on 3G. You enjoy up to 397 hours of standby time on 2G and 408 hours on 3G.</p>\r\n\r\n<p><strong>Connectivity and Features</strong></p>\r\n\r\n<p>Networking and staying connected with the world are made simpler with&nbsp;<strong>EDGE, 3G and Wi-Fi&nbsp;</strong>that ensure uninterrupted internet connectivity. With pre-installed apps like<strong>&nbsp;Facebook, Twitter and LinkedIn</strong>&nbsp;you can keep your personal and professional contacts close and updated. The&nbsp;<strong>Bluetooth</strong>&nbsp;feature lets you share music, videos and other data wirelessly and with complete ease. To sum up, the BlackBerry Z10 presents a host of features and advanced technology that make your user-experience fun and easy.</p>', 'blackberry z11 mobile phone', 'blackberry z11 mobile phone', 'blackberry z11 mobile phone', 'Active', 1383043903),
(2, 'IPhone 5S', '22iphone-5s-champagne-03.jpg', '796grey_iphone5s.png', '171iphone-5s-xl.jpg', 3, '<p>The iPhone 5S: a phone that looks like the&nbsp;iPhone 5, but goes so much further under the hood. Is that going to be enough to impress the baying hoardes?</p>\r\n\r\n<p>We&#39;ve been here before: the iPhone &#39;S&#39; conundrum. The new phone comes along, taking the shell of the previous model, adds some new bits and pieces, and then claims to be an entirely new phone.</p>\r\n\r\n<p>Which it is, of course. But also it isn&#39;t. Well, mostly is. To be sure, it&#39;s the kind of move that only Apple can pull off with any kind of conviction: the notion that it can take the same chassis, have a little tinker, throw in a new CPU, slightly better battery and camera, and call it an all-conquering device.</p>\r\n\r\n<p>But then again, such is the clamour to know all about it, is that such a bad move? There are literally millions of people the world over who can&#39;t wait to see what the next handset from Apple will be, and there was no surprise with the iPhone 5S.</p>\r\n\r\n<p>There are a few who question whether it&#39;s &#39;fair&#39; to launch a phone and then append an &#39;S&#39; to the same thing a year later - Apple&#39;s response would likely be that nobody is forcing you to buy the new hardware. And that&#39;s a fair point. Yes, this is a phone that bears far too many hallmarks of its predecessor. And yes, this is the third time Apple has done this.</p>\r\n\r\n<p>It&#39;s also managed to try to pop it onto the market complete as one of the most expensive smartphones out there, even on 3G plans. You&#39;ll be looking at post &pound;50 a month to get one without an upfront fee in the UK, and &pound;549 will be the price if you want the low end model, pushing all the way up to over &pound;700 for the 64GB variant.</p>', 'Iphone 5S', 'IPhone 5S', 'IPhone 5S', 'Active', 1383043971);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_name` text NOT NULL,
  `answer1` varchar(250) NOT NULL,
  `answer2` varchar(250) NOT NULL,
  `answer3` varchar(250) NOT NULL,
  `answer4` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_name`, `answer1`, `answer2`, `answer3`, `answer4`, `answer`, `category_id`) VALUES
(1, 'Where did India play its 1st one day international match?', 'Lords', 'Headingley', 'Taunton', 'The Oval', '2', 1),
(2, 'Who was the 1st ODI captain for India?\r\n', 'Ajit Wadekar ', 'Bishen Singh Bedi', 'Nawab Pataudi', 'Vinoo Mankad ', '1', 1),
(3, 'Who has made the Fastest Test century in Test Cricket ?\r\n\r\n\r\n\r\n', 'Sachin Tendulkar', ' Sahid Afridi', ' Virender Sehwag', 'Vivian Richards', '4', 1),
(4, 'Which Bowler had the Best figures in a Test Match ?\r\n\r\n\r\n\r\n\r\n', 'Muttiah Muralitharan', 'Bob Massie', 'Jim Laker', 'George Lohmann', '3', 1),
(5, 'Which team has the Largest successful run chase record in ODIs ?\r\n\r\n\r\n\r\n\r\n', 'England', 'South Africa', 'Australia', 'India', '2', 1),
(6, 'What does HTML stand for?\r\n\r\n	\r\n	\r\n	', 'Hyper Text Markup Language', 'Hyperlinks and Text Markup Language', 'Home Tool Markup Language', 'Highly Text Markup Language', '1', 2),
(7, 'Who is making the Web standards?\r\n\r\n	\r\n	\r\n	\r\n	\r\n', 'Microsoft', 'Google', 'The World Wide Web Consortium', 'Mozilla', '3', 2),
(8, 'What is the correct HTML for creating a hyperlink?\r\n\r\n	\r\n	\r\n	\r\n	', '&lt;a name=&quot;http://smarttutorials.net&quot;&gt;Smart Tutorials&lt;/a&gt;', '&lt;a&gt;http://smarttutorials.net&lt;/a&gt;', '&lt;a url=&quot;http://smarttutorials.net&quot;&gt;Smart Tutorials&lt;/a&gt;', '&lt;a href=&quot;http://smarttutorials.net&quot;&gt;Smart Tutorials&lt;/a&gt;', '4', 2),
(9, 'What is the HTML element to bold a text?\r\n\r\n\r\n\r\n\r\n', '&lt;b&gt;', '&lt;bold&gt;', '&lt;wide&gt;', '&lt;big&gt;', '1', 2),
(10, 'What is the HTML tag for a link?\r\n\r\n\r\n\r\n\r\n', '&lt;link&gt;', '&lt;ref&gt;', '&lt;a&gt;', '&lt;hper&gt;', '3', 2),
(11, 'What does CSS stand for?\r\n\r\n	\r\n	\r\n	\r\n	', 'Creative Style Sheets', 'Colorful Style Sheets', 'Computer Style Sheets', 'Cascading Style Sheets', '4', 4),
(12, 'Where in an HTML document is the correct place to refer to an external style sheet?\r\n\r\n	\r\n	\r\n	\r\n	', 'In the &lt;body&gt; section ', 'At the end of the document', 'At the top of the document', 'In the &lt;head&gt; section ', '4', 4),
(13, 'Which HTML tag is used to define an internal style sheet?\r\n\r\n	\r\n	\r\n	', '&lt;script&gt;', '&lt;css&gt;', '&lt;style&gt;', '&lt;link&gt;', '3', 4),
(14, 'Which is the correct CSS syntax?\r\n\r\n	\r\n	\r\n	\r\n	', 'body:color=black;', '{body;color:black;}', 'body {color: black;}', '{body:color=black;}', '3', 4),
(15, 'Which property is used to change the background color?\r\n\r\n	\r\n	\r\n	', 'background-color', 'color', 'bgcolor', 'bg-color', '1', 4),
(16, 'What does PHP stand for?\r\n\r\n	\r\n	\r\n	', ' PHP: Hypertext Preprocessor', 'Personal Hypertext Processor', 'Personal Home Page', 'Private Home Page', '1', 3),
(17, 'PHP server scripts are surrounded by delimiters, which?\r\n\r\n	\r\n	\r\n	\r\n	', '&lt;?php&gt;...&lt;/?&gt;', '&lt;?php ... ?&gt;', '&lt;script&gt;...&lt;/script&gt;', '&lt;&amp;&gt;...&lt;/&amp;&gt;', '2', 3),
(18, 'How do you write "Hello World" in PHP\r\n\r\n	\r\n	\r\n	', '&quot;Hello World&quot;', 'echo &quot;Hello World&quot;', 'Document.Write(&quot;Hello World&quot;);', 'print_f(&quot;Hello World&quot;);', '2', 3),
(19, ' Which of the following is the way to create comments in PHP?\r\n\r\n\r\n	\r\n	\r\n	', '// commented code to end of line', '/* commented code here */', '# commented code to end of line', 'all of the above - correct', '4', 3),
(20, 'What is the correct way to end a PHP statement?\r\n\r\n	\r\n	\r\n	\r\n	', '&lt;/php&gt;', '.', ';', 'New line', '3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_course`
--

CREATE TABLE IF NOT EXISTS `quiz_course` (
  `course_id` int(10) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(100) NOT NULL,
  `course_icon` varchar(250) NOT NULL,
  `course_banner` varchar(250) NOT NULL,
  `course_prt_id` int(10) NOT NULL,
  `course_description` text NOT NULL,
  `meta_title` mediumtext NOT NULL,
  `meta_keyword` mediumtext NOT NULL,
  `meta_desc` longtext NOT NULL,
  `course_updated_on` int(10) NOT NULL,
  `course_status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `quiz_course`
--

INSERT INTO `quiz_course` (`course_id`, `course_name`, `course_icon`, `course_banner`, `course_prt_id`, `course_description`, `meta_title`, `meta_keyword`, `meta_desc`, `course_updated_on`, `course_status`) VALUES
(1, 'CS Foundation', '1415081795cs-foundation.jpg', '1415081795cs-foundation (1).jpg', 0, '<h1>FOUNDATION PROGRAMME</h1>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:672px">\r\n	<tbody>\r\n		<tr>\r\n			<td>ELIGIBILITY</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Candidates who have passed Senior Secondary (10+2) examination of a Board/University constituted by law inIndia&nbsp;or any examination recognised by the Central Government as equivalent thereto are eligible.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Provisional admission is allowed to a candidate who has appeared or enrolled for appearing in Senior Secondary (10+2 or equivalent)&nbsp;examination ,&nbsp;provided proof of passing the examination is produced within 6 months of making the application.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Admission is open throughout the year by making an application in the prescribed Form FC-1 together with documentary evidence in support of date of birth and educational qualification.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Duration of Foundation&nbsp;Programme&nbsp;is 8 months, excluding the months of admission and the examination. Foundation&nbsp;Programme&nbsp;students are required to pass the Foundation examination within 3 years from the date of their admission</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>SUBJECTS:</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<ul style="list-style-type:none">\r\n				<li>English and Business Communication</li>\r\n				<li>Economics and Statistics</li>\r\n				<li>Financial Accounting</li>\r\n				<li>Elements of Business Laws and Management</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>EXEMPTION FROM FOUNDATION EXAMINATION</td>\r\n		</tr>\r\n		<tr>\r\n			<td>A candidate possessing any of the following qualifications or any other qualifications recognised by the Council of the ICSI with the approval of the Central Government as equivalent thereto, is exempted from passing the Foundation examination</td>\r\n		</tr>\r\n		<tr>\r\n			<td>A Degree or master&#39;s degree in Corporate Secretaryship or Commerce Pass in the Final examination of the Institute of Cost and Works Accounts of India(ICWAI) or the Institute of Chartered Accountants(ICAI) of India or any other Accountancy Institution in India or abroad recognised as&nbsp; equivalent thereto by the Council:&nbsp;&nbsp;<br />\r\n			<br />\r\n			<strong>Or</strong><br />\r\n			<br />\r\n			A degree or master&#39;s degree in any discipline other than Fine Arts.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>A candidate who is eligible for exemption from the Foundation examination under clause (iii) stated above can seek registration as student. Such a candidate before becoming eligible for undergoing coaching for the Intermediate examination is required to undergo satisfactorily a course of postal or oral tuition for those subjects of the foundation examination which he had not studied at the graduate or post graduate level, after registration as a student.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'csattack CS Foundation Course', 'csattack CS Foundation Course', 'csattack CS Foundation Course', 1415081795, 'Active'),
(2, 'CS Executive', '1415082298CS-Executive.png', '1415082298cs-executive2.jpg', 0, '<div style="background:rgb(248, 248, 255); border:1px dashed silver; padding:0px 25px 10px">\r\n<h3>EP &raquo; Executive Programme</h3>\r\nFor those students who are pursuing the course through Foundation Programme i.e. after passing Foundation Programme level, this would be the second level course relating to the CS (Company Secretaries - Professional Accounting) Course.\r\n\r\n<p>For those students who are taking up the course after their Graduation this is the primary/first level course.</p>\r\n\r\n<h3>Course Duration</h3>\r\nThe minimum course duration as per the regulations of the institution is\r\n\r\n<h3>CS_EP &raquo; 10 months</h3>\r\nThe course duration is the minimum time that a student has to spend on taking up the course at this level. It is the period starting from, the time the student gets registered, to the time the student completes the course.\r\n\r\n<p>The actual time that a student has to spend on the course would be dependent on the actual date of registration.</p>\r\n\r\n<h3>When are the Examinations Conducted?</h3>\r\nThe main/final examinations for the course at this level are conducted twice every year generally on specified dates which do not change except under extraordinary circumstances.\r\n\r\n<h3>June Examination</h3>\r\nFirst Week of June [2nd&nbsp;to 7&nbsp;th&nbsp;&ndash; 9.30 a.m. to 12.30 a.m.]\r\n\r\n<h3>December Examination</h3>\r\nLast Week of December [26th&nbsp;to 31st&nbsp;&ndash; 9.30 a.m. to 12.30 am]</div>\r\n\r\n<h2><a href="http://www.futureaccountant.com/almanac/cs-executive-programme-eligibility-supplementary-candidates/f2/">Eligibility of Supplementary Candidates to Pursue the Courses at this Level</a></h2>\r\n\r\n<div style="background:rgb(248, 248, 255); border:1px dashed silver; padding:0px 25px 10px">With regard to a student being a supplementary passed candidate, there is no restriction of any sort on the eligibility to do these courses.\r\n<p>One can pursue the course even if he/she is a supplementary passed candidate at the graduation examinations.</p>\r\n\r\n<p>The minimum academic qualification required is a pass at the 10 + 2 +3 level or at the foundation level examinations.</p>\r\n\r\n<p>Therefore, a supplementary passed candidate is placed on the same footing as the regular candidate.</p>\r\n</div>\r\n\r\n<h2><a href="http://www.futureaccountant.com/almanac/cs-executive-programme-pursuing-with-post-graduation-courses/f3/">Pursuing Executive Programme along with Graduation/Post-Graduation Courses</a></h2>\r\n\r\n<div style="background:rgb(248, 248, 255); border:1px dashed silver; padding:0px 25px 10px">\r\n<h3>Pursuing along with Graduation/Post-Graduation</h3>\r\nThe course can be pursued along with graduation or Post Graduation Courses.\r\n\r\n<p>There is no restriction with regard to pursuance of this course along with any other course i.e. any graduation course or post graduation course.</p>\r\n\r\n<p>A candidate would be purusing this level along with</p>\r\n\r\n<h3>Graduation</h3>\r\nIf he/she is taking up this level after getting through his/her Foundation Programme Level\r\n\r\n<h3>Post Graduation</h3>\r\nIf he/she is taking up this level after getting his/her Foundation Programme level and has not yet completed the course\r\n\r\n<p>(Or)</p>\r\nIf he/she is taking up the course after his/her graduation.\r\n\r\n<h3>Pursuing the courses along with | B.Sc | B. Tech | M.B.B.S | ...!!!!</h3>\r\nSince the course is basically commerce oriented, the best bet is a student doing this course along with formal B. Com/M.Com courses of any university. However this is not a requirement/compulsion.\r\n\r\n<p>Even students doing their Graduation course in the science stream, can pursue this course along with their graduation (i.e. B.Sc) or Post Graduation (i.e. M.Sc).</p>\r\n\r\n<p>For that matter even students doing their engineering, medicine etc can also pursue this course along with their graduation or post graduation courses.</p>\r\n\r\n<p>There are specialised streams like Cost Engineering, Energy Auditing, etc., which can be pursued on doing professional accounting courses along with professional courses in science stream.</p>\r\n</div>', 'csattack CSExective Course', 'csattack CSExective Course', 'csattack CSExective Course', 1415082785, 'Active'),
(3, 'CS Professional', '1415082767CS-foundation.jpg', '1415082767cs-professional.jpg', 0, '<h2><strong>CS_PP :: Professional Programme&nbsp;<br />\r\nPaper 1 : Company Secretarial Practice<br />\r\n[One paper: Three Hours &ndash; 100 marks]</strong></h2>\r\n\r\n<h3>Level of Knowledge:</h3>\r\n\r\n<p>Expert knowledge</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h3>Objectives:</h3>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>To provide an in-depth understanding of the procedures under the Companies Act, Rules and Regulations made thereunder including understanding of international dimensions of company law</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>Detailed contents:</h3>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>1.</th>\r\n			<th>1. E-governance (MCA &ndash; 21)</th>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Important Features of MCA-21 &ndash; CIN, DIN, DSC, CFC, SRN, etc; Eforms and on-line filing and inspection of documents.</td>\r\n		</tr>\r\n		<tr>\r\n			<th>2.</th>\r\n			<th>Company Formation and Conversion</th>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Choice of form of business entity; conversion/ re-conversion of one form of business entity into another.&nbsp;<br />\r\n			Procedure for incorporation of private/public companies, companies limited by guarantee and unlimited companies and their conversions/ re-conversion/re-registration; obtaining certificate of commencement of business; obtaining certification of re-registration; commencementof new business and certification; filing of agreements with managerial personnel;&nbsp;<br />\r\n			Formation of associations not for profit and non profit companies; procedure relating to foreign companies carrying on business in India.</td>\r\n		</tr>\r\n		<tr>\r\n			<th>3.</th>\r\n			<th>Alteration of Memorandum and Articles</th>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Procedure for alteration of various clauses of memorandum: name clause, situation of registered office clause, objects clause, capital clause and liability clause; procedure for alteration of articles; effect of alteration.</td>\r\n		</tr>\r\n		<tr>\r\n			<th>4.</th>\r\n			<th>Issue and Allotment of Securities</th>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Procedure for public issue, rights issue and bonus shares; procedure for issue of securities at par/premium/discount; procedure for calls on shares; Issue of sweat equity shares, employees stock option scheme, shares with differential voting rights; issue and redemption of preference shares; issue of shares on preferential basis/private placement.&nbsp;<br />\r\n			Return of allotment and effect of irregular allotment; issue of certificates; alteration of share capital; procedure for forfeiture of shares and reissue of forfeited shares; cancellation of shares; surrender of shares; conversion and re-conversion of shares into stock.&nbsp;<br />\r\n			Procedure for issue of debentures including creation of security and debenture redemption reserve; drafting of debenture trust deed; conversion of and redemption of debentures.</td>\r\n		</tr>\r\n		<tr>\r\n			<th>5.</th>\r\n			<th>Membership and Transfer/Transmission</th>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Procedure for induction of members; nomination of shares; variation of shareholders&rsquo; rights; cessation of membership including dispute resolution.&nbsp;<br />\r\n			Transfer/transmission/transposition ; dematerialization/ rematerialisation of securities.</td>\r\n		</tr>\r\n		<tr>\r\n			<th>6.</th>\r\n			<th>Directors and Managerial Personnel</th>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Procedure for appointment, reappointment, resignation, removal and varying terms of appointment/ re-appointment of directors and managerial personnel.&nbsp;<br />\r\n			Procedure for payment of remuneration to directors and managerial personnel and disclosures thereof; compensation for loss of office; waiver of recovery of remuneration; directors and officers liability insurance.&nbsp;<br />\r\n			Procedure for making loans to directors, disclosure of interest by a director, holding of office or place of profit by a director/relative, etc. of a director.&nbsp;<br />\r\n			<strong>Company Secretary</strong>&mdash;Appointment, resignation and removal of Company Secretary; role of the Company Secretary; functions and duties; relationship with chairman and directors; secretary as advisoro the chairman and the board.&nbsp;<br />\r\n			Company Secretary in Practice &ndash; Functions ; procedure for appointment, resignation and removal of company secretary in practice.&nbsp;<br />\r\n			Auditors&nbsp;<br />\r\n			Procedure for appointment/reappointment, resignation and removal of statutory auditors and branch auditors; appointment of cost auditors; special auditors; CAG audit.</td>\r\n		</tr>\r\n		<tr>\r\n			<th>7.</th>\r\n			<th>Decision-making Forums and Meetings</th>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Collective decision making forums - authority, accountability, delegation and responsibility.&nbsp;<br />\r\n			Board Meetings - Convening and management of Board and Committee Meetings.&nbsp;<br />\r\n			General Meetings - convening and management of statutory meeting, annual and extra-ordinary general meetings, class meetings; preparation of notices and agenda papers.&nbsp;<br />\r\n			Procedure for passing of resolutions by postal ballot, conducting a poll and adjournment of a meeting.&nbsp;<br />\r\n			Post-meeting formalities including preparation of minutes and dissemination of information and decisions including filing thereof.</td>\r\n		</tr>\r\n		<tr>\r\n			<th>8.</th>\r\n			<th>Preparation &amp; Presentation of Reports</th>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Preparation of financial statements, auditors&rsquo; report, directors&rsquo; report and report on corporate governance.</td>\r\n		</tr>\r\n		<tr>\r\n			<th>9.</th>\r\n			<th>Distribution of Profit</th>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Procedure for ascertainment of divisible profits and declaration of dividend; payment of dividend; claiming of unclaimed/unpaid dividend; transfer of unpaid/unclaimed dividend to Investor Education and Protection Fund.</td>\r\n		</tr>\r\n		<tr>\r\n			<th>10.</th>\r\n			<th>Charges</th>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Procedure for creation/modification/satisfaction of charges and registration thereof; register of charges; inspection of charges.</td>\r\n		</tr>\r\n		<tr>\r\n			<th>11.</th>\r\n			<th>Inter-corporate Loans, Investments, Guarantees and Security</th>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Procedure for making inter-corporate loans, investments, giving of guarantees and providing of security.</td>\r\n		</tr>\r\n		<tr>\r\n			<th>12.</th>\r\n			<th>Filling and Filing of Returns and Documents, etc.</th>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Procedure for filling and filing of returns and documents :\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td>(a)</td>\r\n						<td>Annual filing, i.e., annual accounts, compliance certificate, annual return, etc.</td>\r\n					</tr>\r\n					<tr>\r\n						<td>(b)</td>\r\n						<td>Event based filing</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>13.</strong></td>\r\n			<td><strong>Striking off Names of Companies</strong>&nbsp;&ndash; Law and Procedure.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>14.</strong></td>\r\n			<td><strong>Best Practices</strong>&ndash;Secretarial Standards&nbsp;<br />\r\n			Concept, scope and advantages; Secretarial Standards issued by the ICSI; Compliance of secretarial standards for good governance.</td>\r\n		</tr>\r\n		<tr>\r\n			<th>15.</th>\r\n			<th>Insider Trading</th>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Concept and rationale behind prohibition of insider trading; SEBI&rsquo;s Insider Trading Regulations; major actions taken by SEBI so far; Role of Company Secretary in compliance requirements.</td>\r\n		</tr>\r\n		<tr>\r\n			<th>16.</th>\r\n			<th>Global Developments in Company Law</th>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Contemporary developments, distinguishing and evolving features of company law in other jurisdictions.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'CS Professional Course', 'CS Professional Course', 'CS Professional Course', 1415100997, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

CREATE TABLE IF NOT EXISTS `quiz_question` (
  `quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_course_id` int(10) NOT NULL,
  `quiz_qust` text NOT NULL,
  `quiz_ans1` text NOT NULL,
  `quiz_ans2` text NOT NULL,
  `quiz_ans3` text NOT NULL,
  `quiz_ans4` varchar(250) NOT NULL,
  `corr_answer` int(11) NOT NULL,
  `examination_year` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `updated_on` int(10) NOT NULL,
  PRIMARY KEY (`quiz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `quiz_question`
--

INSERT INTO `quiz_question` (`quiz_id`, `quiz_course_id`, `quiz_qust`, `quiz_ans1`, `quiz_ans2`, `quiz_ans3`, `quiz_ans4`, `corr_answer`, `examination_year`, `status`, `updated_on`) VALUES
(1, 3, '<p>Which one of the following is the oldest&nbsp;and simplest form of organisation ?</p>', 'Functional organisation', 'Committee organisation', 'Line and staff organisation', 'Line organisation', 3, '2014', 'Active', 1415084868),
(2, 3, '<p>Which one of the following shows a big&nbsp;picture of what a company wants to achieve&nbsp;in future ?</p>', 'Vision statement', 'Mission statement', 'Value statement', 'Quality statement', 4, '2014', 'Active', 1415085978),
(3, 3, '<p>Which among the following is one of the&nbsp;largest &#145;Job providers&#146; in India ?</p>', 'Network marketing', 'Business process outsourcing', 'Medical tourism', 'Film industry.', 2, '2014', 'Active', 1415086056),
(4, 3, '<p>Which one of the following is treated as a&nbsp;separate legal entity different from its&nbsp;members ?</p>', 'Sole proprietorship', 'Hindu undivided family', 'Partnership', 'Limited liability partnership', 1, '2014', 'Active', 1415086161),
(5, 3, '<p>Which one of the following is a great&nbsp;concern for E-COMMERCE ?</p>', 'Speed', 'Quality', 'Security risk', 'Maintenance cost', 4, '2014', 'Active', 1415086314),
(6, 3, '<p>Why co-operative marketing society is&nbsp;formed?</p>', 'To protect the interest of general consumers', 'To sell the product of small farmers and producers', 'To protect the interest of small producers', 'To provide financial support to the members.', 2, '2013', 'Active', 1415099511),
(7, 3, '<p>The definition of Micro, Small and&nbsp;Medium Enterprises (MSMEs) in India&nbsp;is based on</p>', 'Total sales of the unit', 'Investment in machines and equipments', 'Market coverage', 'Export turnover', 2, '2013', 'Active', 1415086697),
(8, 3, '<p>Which one of the following is not a part of&nbsp;Porter&#39;s generic strategy ?</p>', 'Focus', 'Cost leadership', 'Differentiation strategy', 'Market segmentation', 3, '2013', 'Active', 1415086806),
(9, 3, '<p>Which one of the following is not a part of&nbsp;&#39;marketing mix&#39;?</p>', 'Planning', 'Product', 'Price', 'Place', 2, '2013', 'Active', 1415086891),
(10, 3, '<p>In marketing, a distinctive group of&nbsp;consumers is known as</p>', 'A class', 'A segment', 'An emerging market', 'None of the above', 2, '2013', 'Active', 1415100271),
(11, 1, '<p>What is the meaning of maxim ultra vires ?</p>', 'An accomplished act', 'Within the powers', 'Beyond the powers', 'With the guilty mind', 2, '2014', 'Active', 1415090598),
(12, 1, '<p>Which kind of precedent from the following&nbsp;creates and applies a new rule of law ?</p>', 'Declaratory', 'Persuasive', 'Absolutely authoritative', 'Original.', 2, '2014', 'Active', 1415090687),
(13, 1, '<p>In a company maximum time difference&nbsp;between two board meetings is</p>', '3 months', '6 months', '4 months', '5 months', 1, '2014', 'Active', 1415090766),
(14, 1, '<p>Which one of the following company must&nbsp;hold statutory meeting ?</p>', 'Private company', 'Public company having share capital', 'Government company', 'Public company not having share capital', 4, '2014', 'Active', 1415090881),
(15, 1, '<p>For acceptance to be considered as valid it must</p>', 'Be absolute', 'Be unqualified', 'Be both absolute and unqualified', 'Be conditional', 3, '2014', 'Active', 1415091044),
(16, 3, '<p>In a business environment, which one of&nbsp;the following is not a political factor?</p>', 'Tax policy', 'Employment laws', 'Environment regulations', 'Exchange rate', 3, '2013', 'Active', 1415095586),
(17, 2, 'what is c', 'programimg', 'computer', 'laptop', 'Book', 0, '2003', 'Active', 1415264755);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
