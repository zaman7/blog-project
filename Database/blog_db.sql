-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2019 at 03:09 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`id`, `name`) VALUES
(18, 'Web Development'),
(19, 'Graphic Design'),
(20, 'Logo Design'),
(21, 'Wordpress'),
(22, 'Mobile Phone'),
(23, 'HTMLTemplates'),
(24, 'Web Design');

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(255) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`id`, `name`, `email`, `message`, `status`, `date`) VALUES
(3, 'Zaman', 'zaman@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea', 0, '2018-06-27 14:39:36'),
(4, 'Kamruzzaman', 'zaman1z@gmail.com', 'If you have Google Chrome installed, you can try this out yourself. Click on the lightning bolt\r\n            icon in the top right corner of your Brackets window or hit &lt;kbd&gt;Cmd/Ctrl + Alt + P&lt;/kbd&gt;. When\r\n            Live Preview is enabled o', 0, '2018-06-27 16:41:26'),
(5, 'Kamruzzaman Mondol', 'kamruzzamaT@gmail.com', 'If you have Google Chrome installed, you can try this out yourself. Click on the lightning bolt\r\n            icon in the top right corner of your Brackets window or hit &lt;kbd&gt;Cmd/Ctrl + Alt + P&lt;/kbd&gt;. When\r\n            Live Preview is enabled o', 0, '2018-06-27 16:42:44'),
(6, 'Kamruzzaman', 'zaman1z@gmail.com', 'For those of us who haven\'t yet memorized the color equivalents for HEX or RGB values, Brackets makes it quick and easy to see exactly what color is being used. In either CSS or HTML, simply hover over any color value or gradient and Brackets will display', 0, '2018-06-27 16:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `footer_table`
--

CREATE TABLE `footer_table` (
  `id` int(11) NOT NULL DEFAULT '1',
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer_table`
--

INSERT INTO `footer_table` (`id`, `note`) VALUES
(1, 'Copyright 2018 Made by Zaman. All Rights Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `page_table`
--

CREATE TABLE `page_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pagebody` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_table`
--

INSERT INTO `page_table` (`id`, `name`, `pagebody`) VALUES
(1, 'Services', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>The requested URL was not found on this server.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>The requested URL was not found on this server.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n'),
(2, 'About Us', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>The requested URL was not found on this server.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>The requested URL was not found on this server.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `post_table`
--

CREATE TABLE `post_table` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_table`
--

INSERT INTO `post_table` (`id`, `cat`, `title`, `body`, `image`, `author`, `tags`, `date`, `userid`) VALUES
(29, 18, 'Web Development Tutorial', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p>', 'uploads/e8ae339182.png', 'zaman', 'HTML, CSS, JavaScript, jQuery, ReactJs', '2018-06-28 19:57:16', '10'),
(30, 19, 'Graphics Design Tutorial', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p>', 'uploads/posts/75539362ac.jpg', 'zaman', 'Adobe Photoshop, Adobe illistator, Adobe flash', '2018-06-28 20:01:15', '10'),
(31, 20, 'Graphics Design Tutorial', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p>', 'uploads/9d01ca9960.png', 'zaman', 'Adobe Photoshop, Adobe illistator, Adobe flash', '2018-06-28 20:01:54', '10'),
(32, 22, 'Samsung Gallaxy J3 2018', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p>', 'uploads/posts/a8a279912d.jpg', 'zaman', 'Samsung Mobile, Mobile', '2018-06-28 20:02:59', '10'),
(33, 22, 'Samsung J3 2018', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p>', 'uploads/posts/2828eaf8b7.jpg', 'zaman', 'Samsung Mobile, Mobile', '2018-06-28 20:03:57', '10'),
(34, 19, 'Picture Background Remove', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p>', 'uploads/posts/dfd1038af8.jpg', 'zaman', 'Adobe Photoshop, Adobe illistator, Adobe flash', '2018-06-28 20:05:29', '10'),
(35, 20, 'Image Edit with adobe Photoshop', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p>', 'uploads/c783d9d3b1.png', 'zaman', 'Adobe Photoshop', '2018-06-28 20:07:17', '10'),
(36, 18, 'Web Development Tutorial', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt animi perspiciatis veniam consectetur fugit quidem delectus temporibus, reiciendis quibusdam cupiditate dolores expedita, laborum, qui perferendis. Animi ullam impedit, expedita aliquid itaque veniam, iure perspiciatis placeat eligendi molestiae dolorum? Esse explicabo vel quae, repellat atque numquam quibusdam, labore eveniet commodi, nihil illo beatae. Suscipit officiis adipisci, impedit voluptas error officia, vel itaque saepe eum consequuntur odit. Totam dolorum beatae reprehenderit debitis perspiciatis libero consequuntur veniam sequi nisi, enim sint necessitatibus labore aliquam, maxime laborum explicabo ipsam fuga ducimus veritatis quae eveniet hic autem repellat velit optio? Maiores voluptatibus, magnam excepturi reiciendis.</p>', 'uploads/3358388c7d.png', 'zaman', 'PHP, C#, Pythone', '2018-06-28 20:08:13', '10');

-- --------------------------------------------------------

--
-- Table structure for table `sitetitle_table`
--

CREATE TABLE `sitetitle_table` (
  `id` int(11) NOT NULL DEFAULT '1',
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sitetitle_table`
--

INSERT INTO `sitetitle_table` (`id`, `title`, `slogan`, `logo`) VALUES
(1, 'Contemplative Creativity', 'zaman-io.blogspot.com', 'uploads/logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `social_table`
--

CREATE TABLE `social_table` (
  `id` int(11) NOT NULL DEFAULT '1',
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_table`
--

INSERT INTO `social_table` (`id`, `facebook`, `twitter`, `linkedin`, `google`) VALUES
(1, 'http://www.facebook.com/', 'http://www.twitter.com', 'http://www.linkedin.com', 'http://www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `theme_table`
--

CREATE TABLE `theme_table` (
  `id` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theme_table`
--

INSERT INTO `theme_table` (`id`, `name`) VALUES
(1, 'Green');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` int(255) NOT NULL DEFAULT '0',
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `email`, `username`, `password`, `role`, `details`) VALUES
(10, 'Kamruzzaman', 'zaman7u@gmail.com', 'zaman', '81dc9bdb52d04dc20036dbd8313ed055', 0, 'I am This website Admin.'),
(12, '', 'zaman@gmail.com', 'kamruzzaman', '81dc9bdb52d04dc20036dbd8313ed055', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_table`
--
ALTER TABLE `footer_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_table`
--
ALTER TABLE `page_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_table`
--
ALTER TABLE `post_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitetitle_table`
--
ALTER TABLE `sitetitle_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_table`
--
ALTER TABLE `social_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_table`
--
ALTER TABLE `theme_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `page_table`
--
ALTER TABLE `page_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_table`
--
ALTER TABLE `post_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
