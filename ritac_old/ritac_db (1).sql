-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2018 at 03:58 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ritac_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

DROP TABLE IF EXISTS `careers`;
CREATE TABLE IF NOT EXISTS `careers` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `left_date` text NOT NULL,
  `left_heading` text NOT NULL,
  `right_heading` text NOT NULL,
  `right_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `left_date`, `left_heading`, `right_heading`, `right_content`) VALUES
(1, 'April 15,2018', 'Sales Executive', 'Sales executive', 'We need sales executive'),
(2, 'APRIL 15,2018', 'JAVA Developer', 'Java Developer', 'We need JAVA Developer');

-- --------------------------------------------------------

--
-- Table structure for table `careers_application`
--

DROP TABLE IF EXISTS `careers_application`;
CREATE TABLE IF NOT EXISTS `careers_application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `position` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers_application`
--

INSERT INTO `careers_application` (`id`, `name`, `email`, `phone`, `position`, `description`, `image`, `date`) VALUES
(1, 'akku', 'info@ritactechnolabs.com', '+971582156831', 'JAVA DEVELOPER', 'dg', 'passportback.pdf,vishnuphoto.jpg', '2018-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, '', '', 'scdsc', 'asvcadv'),
(2, '', '', 'safdg', 'dsvsdbv');

-- --------------------------------------------------------

--
-- Table structure for table `higher`
--

DROP TABLE IF EXISTS `higher`;
CREATE TABLE IF NOT EXISTS `higher` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `institution` text NOT NULL,
  `course` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `higher`
--

INSERT INTO `higher` (`id`, `name`, `email`, `phone`, `institution`, `course`, `description`, `image`, `date`) VALUES
(0, 'akku', 'info@ritactechnolabs.com', '+971582156831', 'dfbfdb', 'engineering', 'ssssssssss', 'latestvisa.pdf,vishnuphoto.jpg', '2018-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `it`
--

DROP TABLE IF EXISTS `it`;
CREATE TABLE IF NOT EXISTS `it` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `institution` text NOT NULL,
  `course` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it`
--

INSERT INTO `it` (`id`, `name`, `email`, `phone`, `institution`, `course`, `description`, `image`, `date`) VALUES
(1, 'akku', 'royal.rahul@hotmail.com', '+971582156831', 'ehteh', 'php', 'xxxxxx', '3.jpg', '2018-04-16'),
(2, 'SEARCH KERALA', 'info@ritactecnolabs.com', '+971582156831', 'ritac', 'java', 'fffffffff', 'accounts_nair_sir.xlsx', '2018-04-16'),
(3, 'akku', 'info@ritactechnolabs.com', '+971582156831', 'ehteh', 'php', '', 'accounts_nair_sir.xlsx,educare_trans.png', '2018-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `email` text NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`email`, `name`) VALUES
('aaah@eeeh.com', 'vishnu');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `image`, `description`) VALUES
(1, 'AYUSH VEDA SPA', 'ayush.jpg', 'design and development'),
(2, 'SEARCH KERALA', 'beach.jpg', 'Online resort search engineApplication Design and development'),
(3, 'ECO WIDE', 'ecowide.jpg', 'Ecommerce\r\nDesign and Development'),
(4, 'ESCAPE', 'escape.jpg', 'Online Travel Application\r\nDesign and Development'),
(5, 'SAFWA', 'safwa.jpg', 'Online property Management\r\nDesign and Development');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `heading` varchar(200) NOT NULL,
  `client` varchar(200) NOT NULL,
  `categories` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `link` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `img2` varchar(200) NOT NULL,
  `shot_desc` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `slider_images` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `description`, `heading`, `client`, `categories`, `date`, `link`, `image`, `img2`, `shot_desc`, `class`, `slider_images`) VALUES
(1, 'Ayush veda spa', 'Ayurveda is a 5,000-year-old system of natural healing that has its origins in the Vedic culture of India. Although suppressed during years of foreign occupation, Ayurveda has been enjoying a major resurgence in both its native land and throughout the world. Tibetan medicine and Traditional Chinese Medicine both have their roots in Ayurveda. Early Greek medicine also embraced many concepts originally described in the classical ayurvedic medical texts dating back several thousands of years.', ' Ayush veda', ' Ayush veda', 'VideoWeb', '2017-12-20', ' http://www.ayushveda.com', 'ayush0.jpg\"', 'project2s.jpg', 'Passage to india', 'desktop', 'ayush0.jpg,ayush1.jpg,ayush2.jpg'),
(2, 'Qwave', 'QWave provides world class engineering and hardware design services and has strong expertise in handling Signal Integrity and Analog challenges in high speed board design. The company was founded by Mr. Gopakumar Parameswaran, who has in-depth expertise and proven track-record in hardware engineering architecture and design. His expertise dates back to his long stint at Cisco systems where he has been a key player in introducing various Core routers, Edge routers and Ethernet switches of different port densities into the market.', 'Qwave Signal Integrity and Power Integrity', ' Qwave', 'VideoWeb', '2017-12-13', ' http://www.qwave.com', 'qwave01.jpg', 'project1s.jpg', 'Signal Integrity and Power Integrity', 'web', 'qwave01.jpg,qwave02.jpg,qwave2.jpg'),
(3, 'Search kerala', 'Kerala’s Emerging Classifieds Portal\r\n\r\n', 'Kerala’s Emerging Classifieds Portal', 'Search kerala', 'VideoWeb', '2017-12-14', ' http://www.searchkerala.com', 'beach1.jpg', 'project3s.jpg', 'Kerala\'s Emerging Classified portal', 'web', 'beach1.jpg,beach2.jpg,beach3.jpg'),
(4, 'Ecowide', 'Ecowide group is the leading distributor of the ever best eco-friendly “CARIXER” Waterless Car Wash and other waterless car care products in GCC and India. Our company is based in UAE with the European originated product line with trade mark name as “CARIXER” and has a wide range of products like vehicle body wash, interior wash, engine degreaser, carpet cleaner and conditioner, marine cleaning concentrate, micro-fiber clothes, etc.', 'Ecowide', 'Ecowide', 'VideoWeb', '2017-12-20', 'http://www.ecowide.com', 'ecowide1.jpg', 'project4s.jpg', 'Products', 'web', 'ecowide1.jpg,ecowide2.jpg,ecowide3.jpg'),
(5, 'Ecowide Logistics', 'Eco Wide Logistics, is an International Freight Service provider to an ultimate solution for all your logistic’s requirements. We provide a total solution for your never-ending demand for international cargo movement. Based in Middle East, Eco Wide Logistics offers services in Freight Forwarding, Customs Clearances, Warehousing and Surface Transportation to all our valued Customers in Middle East as well as other parts of the world. With a strong global network of Eco Wide Logistics affiliated offices and experienced associates, Eco Wide Logistics is the ultimate freight expert you can rely for all your logistic needs in Middle East and across the World.', 'Ecowide Logistics', 'Ecowide Logistics', 'VideoWeb', '2017-12-18', ' http://www.ewl.com', 'ewl2.jpg', 'project5s.jpg', 'ECOWIDE Logistics', 'web', 'ewl1.jpg,ewl2.jpg,ewl3.jpg'),
(6, 'Escape Now', 'Our Escape began in a shabby September afternoon, when our lives were nothing but normal. Since being abnormal looked the only way to wander into ourselves, we decided to unpack our thrills, Hence our Escape. We means, a bunch of gypsy-footed travel addicts. Ask us who we are. We retort; we can be anything but a travel company. Yes. We don’t book you a family holiday or vacation-ritual-weekend trips. We just connect people, ardent travellers, who think we ought a right to “Go anywhere”. A rendezvous for woman travel folks, Escape is bridge to the other world, of sights, sounds and studiousness. Escape connects and shares the passion of every woman traveller through our packages. We wander landscapes, hike to our souls, and trek along the forbidden paths and trail our dreams.', 'Escape Now', 'Escape Now', 'VideoWeb', '2017-12-12', ' http://www.escapenow.com', 'escape1.jpg', 'project6s.jpg', 'Travel', 'application', 'escape1.jpg,escape2.jpg,escape3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `icon` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `name`, `description`, `icon`) VALUES
(1, 'alfawaq.jpg,alhamed.jpg,greendoor.jpg', 'WEB DEVELOPMENT', 'We are the pioneer in web development. We are providing web application online as well as offline. POS, Accounting, Management applications are providing at its best.', 'diamond'),
(2, 'eco.jpg,ewl.jpg,search.jpg', 'WEB DESIGN', 'Our creative and responsive designs are jaw-dropping. The \"more than expectation\"  is  our policy. Our static and dynamic designs are stand out of the crowd.', 'lightbulb'),
(3, '', 'DIGITAL MARKETING', 'Marketing Strategy, SEO, Paid Media,Content Marketing, Social Media Marketing, Digital Public Relation, Email Marketing & Automation...', 'beaker'),
(5, '', 'TRAINING ', '', 'star'),
(9, '', 'HIGHER EDUCATION ABROAD', 'We are growing as one among the leading Software development firm , where our software products are used by various companies across the world. We are striving to gain popularity on the web,social media and training solutions and tend to become one of the most reputed companies in the country or may be beyond ! No matter the size of your company,we’d love to help.', 'paper-plane');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `designation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `image`, `designation`) VALUES
(1, 'R NAIR P', 'nair1.jpg', 'Director'),
(2, 'PRINCE', 'prince1.jpg', 'Marketing Executive'),
(3, 'RAHUL R', 'rahul1.jpg', 'Developer'),
(4, 'VISHNU', 'vishnu1.jpg', 'Programmer');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

DROP TABLE IF EXISTS `training`;
CREATE TABLE IF NOT EXISTS `training` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `institution` text NOT NULL,
  `course` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `name`, `email`, `phone`, `institution`, `course`, `description`, `image`, `date`) VALUES
(0, 'akku', 'info@ritactechnolabs.com', '+971582156831', 'ritac', 'online_tution', 'ddddd', 'passportback.pdf,passportfront.pdf', '2018-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'royal', 'royal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
