-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2018 at 07:00 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE IF NOT EXISTS `category_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`id`, `name`) VALUES
(1, 'Web Design'),
(2, 'Web Development'),
(3, 'Graphic Design'),
(4, 'Logo Design'),
(5, 'Ui & UX'),
(6, 'Wordpress'),
(7, 'Html Templates'),
(8, 'Joomla'),
(9, 'Freebie');

-- --------------------------------------------------------

--
-- Table structure for table `post_table`
--

CREATE TABLE IF NOT EXISTS `post_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `post_table`
--

INSERT INTO `post_table` (`id`, `cat`, `title`, `body`, `image`, `author`, `tags`, `date`) VALUES
(1, 1, 'Web Design', 'To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European anguages. t will be as simple as Occidental; in fact, it will be Occidental.European anguages are members of the same family. Their separate existence is a myth. Forcience, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most.\r\n\r\nsit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.\r\n\r\nTo achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European anguages. t will be as simple as Occidental; in fact, it will be Occidental.European anguages are members of the same family. Their separate existence is a myth. Forcience, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most.\r\n\r\nsit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.\r\n\r\nTo achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European anguages. t will be as simple as Occidental; in fact, it will be Occidental.European anguages are members of the same family. Their separate existence is a myth. Forcience, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most.\r\n\r\nsit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.', 'post_image_4.jpg', 'Zaman', 'JAVA, Programming', '2018-06-19 22:59:34'),
(2, 2, 'Web Development', 'I am excited to apply to the Web Developer position at _____ Technologies in New York, New York. My background as a Web Developer, along with my education in Computer Science, have allowed me to attain a strong foundation of technical skills. In addition to my Web Development skills, I also possess a great eye for design, and this is what I believe separates me from the rest of the competition.\r\n\r\nI am highly skilled with HTML, CSS, and Javascript. I have over three years of experience with each of these technologies, and I am eager to learn even more technologies to sharpen my skillset. In addition to web technologies, I do have a passion for mobile technologies as well. I''ve worked on a few mobile side projects using Objective-C and Swift.\r\n\r\nIn addition to the skills I have acquired, and the extensive computer science education I have possess, I also have a great track record of success. I''ve been selected three times for the company trip for the top 10% of employees.\r\n\r\nI''m confident I can be a great addition to your company, and I would love the opportunity to discuss the opportunity with you further. If you have any questions about my background, please do not hesitate to reach out to me at sample@gmail.com or 555-555-5555. I look forward to hearing from you!\r\n\r\nI am excited to apply to the Web Developer position at _____ Technologies in New York, New York. My background as a Web Developer, along with my education in Computer Science, have allowed me to attain a strong foundation of technical skills. In addition to my Web Development skills, I also possess a great eye for design, and this is what I believe separates me from the rest of the competition.\r\n\r\nI am highly skilled with HTML, CSS, and Javascript. I have over three years of experience with each of these technologies, and I am eager to learn even more technologies to sharpen my skillset. In addition to web technologies, I do have a passion for mobile technologies as well. I''ve worked on a few mobile side projects using Objective-C and Swift.\r\n\r\nIn addition to the skills I have acquired, and the extensive computer science education I have possess, I also have a great track record of success. I''ve been selected three times for the company trip for the top 10% of employees.\r\n\r\nI''m confident I can be a great addition to your company, and I would love the opportunity to discuss the opportunity with you further. If you have any questions about my background, please do not hesitate to reach out to me at sample@gmail.com or 555-555-5555. I look forward to hearing from you!', 'post_image_6.jpg', 'Zaman', 'PHP, Programming', '2018-06-19 22:59:34'),
(3, 3, 'Graphic Design', 'Since earning my bachelor’s degree in internet and web development from XYZ University, I have served as a web developer at ABC Agency, one of NYC’s premier digital marketing and web development firms. In this position, I have led web development projects for clients in diverse industries including technology, manufacturing, pharmaceutical, hospitality, F&B, retail and financial services.\r\n\r\nKnown for creating robust, high-speed web and mobile apps, my web development work has helped grow revenues, accelerate customer acquisition, increase web traffic and deliver an industry-leading competitive advantage.\r\n\r\nPlease review my résumé, which provides details of these projects and examples of skills in:\r\n\r\nWeb development using HTML5, CSS3, JavaScript, jQuery, PHP and Adobe Creative Cloud\r\nTranslation of wireframes and rapid prototyping tools to accurate, working code\r\nDesign of interactives and mobile apps in an agile development environment\r\nUX and UI design projects improving load time, site stickiness and user engagement\r\nSEO initiatives elevating rankings on Google and other search engines to top 5 results\r\nAs a web developer focused on customer satisfaction, I manage all aspects of web development¾from concept to requirements definition, design, development, launch, maintenance and user support. I enjoy the client-facing role and working closely with team members to produce high-quality deliverables.\r\n\r\nI look forward to learning more about the web developer position. If my skills match your requirements, please contact me at (555) 555-5555 or cs@somedomain.com to schedule a meeting. Thank you.', 'post_image_9.jpg', 'Zaman', 'HTML', '2018-06-19 22:59:47'),
(4, 2, 'Web Development', 'To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European anguages. t will be as simple as Occidental; in fact, it will be Occidental.European anguages are members of the same family. Their separate existence is a myth. Forcience, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most.\r\n\r\nsit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maece\r\n\r\nTo achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European anguages. t will be as simple as Occidental; in fact, it will be Occidental.European anguages are members of the same family. Their separate existence is a myth. Forcience, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most.\r\n\r\nsit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.nas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.', 'post_image_3.jpg', 'Zaman', 'PHP, Programming', '2018-06-19 22:59:47'),
(5, 1, 'Web Design', 'I am excited to apply to the Web Developer position at Technologies in New York, New York. My background as a Web Developer, along with my education in Computer Science, have allowed me to attain a strong foundation of technical skills. In addition to my Web Development skills, I also possess a great eye for design, and this is what I believe separates me from the rest of the competition.\r\n\r\nI am highly skilled with HTML, CSS, and Javascript. I have over three years of experience with each of these technologies, and I am eager to learn even more technologies to sharpen my skillset. In addition to web technologies, I do have a passion for mobile technologies as well. I''ve worked on a few mobile side projects using Objective-C and Swift.\r\n\r\nIn addition to the skills I have acquired, and the extensive computer science education I have possess, I also have a great track record of success. I''ve been selected three times for the company trip for the top 10% of employees.\r\n\r\nI''m confident I can be a great addition to your company, and I would love the opportunity to discuss the opportunity with you further. If you have any questions about my background, please do not hesitate to reach out to me at sample@gmail.com or 555-555-5555. I look forward to hearing from you!\r\n\r\nI am excited to apply to the Web Developer position at _____ Technologies in New York, New York. My background as a Web Developer, along with my education in Computer Science, have allowed me to attain a strong foundation of technical skills. In addition to my Web Development skills, I also possess a great eye for design, and this is what I believe separates me from the rest of the competition.\r\n\r\nI am highly skilled with HTML, CSS, and Javascript. I have over three years of experience with each of these technologies, and I am eager to learn even more technologies to sharpen my skillset. In addition to web technologies, I do have a passion for mobile technologies as well. I''ve worked on a few mobile side projects using Objective-C and Swift.\r\n\r\nIn addition to the skills I have acquired, and the extensive computer science education I have possess, I also have a great track record of success. I''ve been selected three times for the company trip for the top 10% of employees.\r\n\r\nI''m confident I can be a great addition to your company, and I would love the opportunity to discuss the opportunity with you further. If you have any questions about my background, please do not hesitate to reach out to me at sample@gmail.com or 555-555-5555. I look forward to hearing from you!', 'post_image_8.jpg', 'Zaman', 'JAVA, Programming', '2018-06-21 01:35:30'),
(6, 3, 'Graphic Design', 'To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European anguages. t will be as simple as Occidental; in fact, it will be Occidental.European anguages are members of the same family. Their separate existence is a myth. Forcience, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most.\r\n\r\nsit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.\r\n\r\nTo achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European anguages. t will be as simple as Occidental; in fact, it will be Occidental.European anguages are members of the same family. Their separate existence is a myth. Forcience, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most.\r\n\r\nsit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.', 'post_image_7.jpg', 'Zaman', 'HTML', '2018-06-21 01:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(55) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `username`, `password`) VALUES
(2, 'zaman', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'admin', '81dc9bdb52d04dc20036dbd8313ed055');
