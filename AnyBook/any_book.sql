-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 10:23 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `any_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `writer_name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `book_price` double NOT NULL,
  `on_sale` int(11) DEFAULT NULL,
  `best_seller` int(11) DEFAULT NULL,
  `book_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `writer_name`, `path`, `book_price`, `on_sale`, `best_seller`, `book_description`) VALUES
(1, 'Teach yourself c', 'Herbert Schildt', 'img/programming/c.jpg', 34.99, 0, 0, 'One of the most best book to learn c programming'),
(2, 'C plus plus', 'Herbert Schildt', 'img/programming/c++.jpg', 49.99, 0, 0, 'one of the best book to learn c++'),
(3, 'C sharp ', 'Herbert Schildt', 'img/programming/c-sharp.jpeg', 39.99, 0, 0, 'one of the best book to learn c sharp'),
(4, 'java the complete ref', 'Herbert Schildt', 'img/programming/java.jpg', 49.99, 0, 0, 'one of the best book to learn java'),
(5, 'Body Language', 'Allan & Pease', 'img/body-langulage.jpeg', 29.99, 0, 1, 'alkdjf akdjfakl fakjdlkajdklfjaldskfj'),
(6, 'Harry Potter 1', 'J. K. Rowling', 'img/hp-1.png', 29.99, 0, 0, 'Best seller book'),
(7, 'Harry Potter 2', 'J. K. Rowling', 'img/hp-2.png', 29.99, 0, 0, 'Best seller book'),
(8, 'Harry Potter 3', 'J. K. Rowling', 'img/HP-3.png', 29.99, 0, 0, 'Best seller book'),
(9, 'Harry Potter 4', 'J. K. Rowling', 'img/HP-4.png', 29.99, 0, 0, ''),
(10, 'Motivate Others', 'steve chandler', 'img/100-ways-motivate-others.jpg', 25.99, 1, 1, ''),
(11, 'Subconscious Mind', 'DR. Jospeh Murphy', 'img/subconscious-mind.jpeg', 25.5, 1, 1, ''),
(12, 'The Power of Habit', 'Charles Duhigg', 'img/the-power-of-habit.jpg', 29.99, 0, 1, ''),
(14, 'Harry Potter 5', 'J. K. Rowling', 'img/HP-5.png', 25, 0, 0, 'some description about the book'),
(15, 'Harry Potter 6', 'J. K. Rowling', 'img/HP-6.png', 26.99, 0, 0, 'some description about the book'),
(16, 'Harry Potter 7', 'J. K. Rowling', 'img/HP-7.png', 25.99, 0, 0, 'some description about the book'),
(17, 'Harry Potter 8', 'J. K. Rowling', 'img/HP-8.png', 25.99, 0, 0, 'some description about the book'),
(18, '???????? ???? ???????????', '????? ??????', 'img/hablu.jpg', 25.99, 0, 0, 'something about the book'),
(19, 'How to Win Friends and Influence People', '??? ???????? ', 'img/how-to-win.jpg', 39.55, 0, 1, 'something about the book');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `message`, `date`) VALUES
(6, 'Shahriar Moin', 'shahriarmoin.aust@gmail.com', '01719313097', 'this is working', '2019-10-11 02:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `user_ID` int(30) NOT NULL,
  `username` int(255) NOT NULL,
  `order_json` text NOT NULL,
  `order_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` double NOT NULL,
  `order_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `userID`, `username`, `book_id`, `book_name`, `book_price`, `quantity`, `total_price`, `order_time`) VALUES
(1, 13, 'shahriar_moin', 2, 'c++', 49.99, 2, 99.98, '2019-10-12 03:51:02'),
(2, 13, 'shahriar_moin', 3, 'c-sharp ', 39.99, 2, 79.98, '2019-10-12 03:51:02'),
(3, 13, 'shahriar_moin', 4, 'java', 49.99, 2, 99.98, '2019-10-12 03:51:02'),
(4, 13, 'shahriar_moin', 7, 'Harry Potter 2', 29.99, 1, 29.99, '2019-10-12 03:51:02'),
(5, 13, 'shahriar_moin', 10, 'Motivate Others', 25.99, 3, 77.97, '2019-10-12 03:51:02'),
(6, 0, 'rishad', 3, 'c-sharp ', 39.99, 1, 39.99, '2019-10-12 04:45:51'),
(7, 0, 'rishad', 4, 'java', 49.99, 1, 49.99, '2019-10-12 04:45:51'),
(8, 0, 'rishad', 2, 'c++', 49.99, 1, 49.99, '2019-10-12 04:45:51'),
(9, 0, 'rishad', 1, 'c', 34.99, 1, 34.99, '2019-10-12 04:45:51'),
(10, 0, 'rishad', 9, 'Harry Potter 4', 29.99, 1, 29.99, '2019-10-12 04:45:51'),
(11, 0, 'rishad', 8, 'Harry Potter 3', 29.99, 1, 29.99, '2019-10-12 04:45:51'),
(12, 0, 'rishad', 7, 'Harry Potter 2', 29.99, 1, 29.99, '2019-10-12 04:45:51'),
(13, 0, 'rishad', 6, 'Harry Potter 1', 29.99, 1, 29.99, '2019-10-12 04:45:51'),
(14, 0, 'rishad', 11, 'subconscious mind', 25.5, 1, 25.5, '2019-10-12 04:45:51'),
(15, 0, 'rishad', 12, 'the-power of habit', 29.99, 1, 29.99, '2019-10-12 04:45:51'),
(16, 0, 'rishad', 5, 'body-langulage', 29.99, 2, 59.98, '2019-10-12 04:45:51'),
(17, 0, 'rishad', 3, 'c-sharp ', 39.99, 1, 39.99, '2019-10-12 04:47:36'),
(18, 0, 'rishad', 4, 'java', 49.99, 1, 49.99, '2019-10-12 04:47:36'),
(19, 0, 'rishad', 2, 'c++', 49.99, 1, 49.99, '2019-10-12 04:47:36'),
(20, 0, 'rishad', 1, 'c', 34.99, 1, 34.99, '2019-10-12 04:47:36'),
(21, 0, 'rishad', 9, 'Harry Potter 4', 29.99, 1, 29.99, '2019-10-12 04:47:36'),
(22, 0, 'rishad', 8, 'Harry Potter 3', 29.99, 1, 29.99, '2019-10-12 04:47:36'),
(23, 0, 'rishad', 7, 'Harry Potter 2', 29.99, 1, 29.99, '2019-10-12 04:47:36'),
(24, 0, 'rishad', 6, 'Harry Potter 1', 29.99, 1, 29.99, '2019-10-12 04:47:36'),
(25, 0, 'rishad', 11, 'subconscious mind', 25.5, 1, 25.5, '2019-10-12 04:47:36'),
(26, 0, 'rishad', 12, 'the-power of habit', 29.99, 1, 29.99, '2019-10-12 04:47:36'),
(27, 0, 'rishad', 5, 'body-langulage', 29.99, 2, 59.98, '2019-10-12 04:47:36'),
(28, 14, 'tisha', 5, 'body-langulage', 29.99, 2, 59.98, '2019-10-12 04:56:04'),
(29, 14, 'tisha', 12, 'the-power of habit', 29.99, 2, 59.98, '2019-10-12 04:56:04'),
(30, 14, 'tisha', 11, 'subconscious mind', 25.5, 2, 51, '2019-10-12 04:56:04'),
(31, 14, 'tisha', 5, 'body-langulage', 29.99, 2, 59.98, '2019-10-12 04:59:16'),
(32, 14, 'tisha', 5, 'body-langulage', 29.99, 1, 29.99, '2019-10-12 05:00:48'),
(33, 14, 'tisha', 12, 'the-power of habit', 29.99, 1, 29.99, '2019-10-12 05:02:06'),
(34, 13, 'shahriar_moin', 5, 'body-langulage', 29.99, 1, 29.99, '2019-10-12 05:03:14'),
(35, 13, 'shahriar_moin', 7, 'Harry Potter 2', 29.99, 1, 29.99, '2019-10-12 05:04:48'),
(36, 13, 'shahriar_moin', 12, 'the-power of habit', 29.99, 1, 29.99, '2019-10-12 05:04:48'),
(37, 13, 'shahriar_moin', 1, 'c', 34.99, 1, 34.99, '2019-10-12 05:04:48'),
(38, 13, 'shahriar_moin', 2, 'c++', 49.99, 1, 49.99, '2019-10-12 05:06:14'),
(39, 13, 'shahriar_moin', 4, 'java', 49.99, 1, 49.99, '2019-10-12 05:06:14'),
(40, 13, 'shahriar_moin', 1, 'c', 34.99, 1, 34.99, '2019-10-12 05:09:03'),
(41, 11, 'moin', 19, 'How to Win Friends and Influence People', 39.55, 1, 39.55, '2019-10-12 17:49:28'),
(42, 0, 'tasmiyah_tisha', 2, 'C plus plus', 49.99, 1, 49.99, '2019-10-13 01:00:50'),
(43, 0, 'tasmiyah_tisha', 3, 'C sharp ', 39.99, 1, 39.99, '2019-10-13 01:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `order_table1`
--

CREATE TABLE `order_table1` (
  `order_id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `order_json` text NOT NULL,
  `order_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_table1`
--

INSERT INTO `order_table1` (`order_id`, `userID`, `username`, `order_json`, `order_time`) VALUES
(1, 13, 'shahriar_moin', '[{\"id\":\"2\",\"name\":\"c++\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"3\",\"name\":\"c-sharp \",\"price\":\"39.99\",\"quantity\":2},{\"id\":\"4\",\"name\":\"java\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"7\",\"name\":\"Harry Potter 2\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"10\",\"name\":\"Motivate Others\",\"price\":\"25.99\",\"quantity\":3}]', '2019-10-12 03:45:34'),
(2, 13, 'shahriar_moin', '[{\"id\":\"2\",\"name\":\"c++\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"3\",\"name\":\"c-sharp \",\"price\":\"39.99\",\"quantity\":2},{\"id\":\"4\",\"name\":\"java\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"7\",\"name\":\"Harry Potter 2\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"10\",\"name\":\"Motivate Others\",\"price\":\"25.99\",\"quantity\":3}]', '2019-10-12 03:45:37'),
(3, 13, 'shahriar_moin', '[{\"id\":\"2\",\"name\":\"c++\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"3\",\"name\":\"c-sharp \",\"price\":\"39.99\",\"quantity\":2},{\"id\":\"4\",\"name\":\"java\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"7\",\"name\":\"Harry Potter 2\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"10\",\"name\":\"Motivate Others\",\"price\":\"25.99\",\"quantity\":3}]', '2019-10-12 03:45:40'),
(4, 13, 'shahriar_moin', '[{\"id\":\"2\",\"name\":\"c++\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"3\",\"name\":\"c-sharp \",\"price\":\"39.99\",\"quantity\":2},{\"id\":\"4\",\"name\":\"java\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"7\",\"name\":\"Harry Potter 2\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"10\",\"name\":\"Motivate Others\",\"price\":\"25.99\",\"quantity\":3}]', '2019-10-12 03:45:46'),
(5, 13, 'shahriar_moin', '[{\"id\":\"2\",\"name\":\"c++\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"3\",\"name\":\"c-sharp \",\"price\":\"39.99\",\"quantity\":2},{\"id\":\"4\",\"name\":\"java\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"7\",\"name\":\"Harry Potter 2\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"10\",\"name\":\"Motivate Others\",\"price\":\"25.99\",\"quantity\":3}]', '2019-10-12 03:45:54'),
(6, 13, 'shahriar_moin', '[{\"id\":\"2\",\"name\":\"c++\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"3\",\"name\":\"c-sharp \",\"price\":\"39.99\",\"quantity\":2},{\"id\":\"4\",\"name\":\"java\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"7\",\"name\":\"Harry Potter 2\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"10\",\"name\":\"Motivate Others\",\"price\":\"25.99\",\"quantity\":3}]', '2019-10-12 03:47:16'),
(7, 13, 'shahriar_moin', '[{\"id\":\"2\",\"name\":\"c++\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"3\",\"name\":\"c-sharp \",\"price\":\"39.99\",\"quantity\":2},{\"id\":\"4\",\"name\":\"java\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"7\",\"name\":\"Harry Potter 2\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"10\",\"name\":\"Motivate Others\",\"price\":\"25.99\",\"quantity\":3}]', '2019-10-12 03:48:52'),
(8, 13, 'shahriar_moin', '[{\"id\":\"2\",\"name\":\"c++\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"3\",\"name\":\"c-sharp \",\"price\":\"39.99\",\"quantity\":2},{\"id\":\"4\",\"name\":\"java\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"7\",\"name\":\"Harry Potter 2\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"10\",\"name\":\"Motivate Others\",\"price\":\"25.99\",\"quantity\":3}]', '2019-10-12 03:50:37'),
(9, 13, 'shahriar_moin', '[{\"id\":\"2\",\"name\":\"c++\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"3\",\"name\":\"c-sharp \",\"price\":\"39.99\",\"quantity\":2},{\"id\":\"4\",\"name\":\"java\",\"price\":\"49.99\",\"quantity\":2},{\"id\":\"7\",\"name\":\"Harry Potter 2\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"10\",\"name\":\"Motivate Others\",\"price\":\"25.99\",\"quantity\":3}]', '2019-10-12 03:51:02'),
(10, 0, 'rishad', '[{\"id\":\"3\",\"name\":\"c-sharp \",\"price\":\"39.99\",\"quantity\":\"1\"},{\"id\":\"4\",\"name\":\"java\",\"price\":\"49.99\",\"quantity\":\"1\"},{\"id\":\"2\",\"name\":\"c++\",\"price\":\"49.99\",\"quantity\":\"1\"},{\"id\":\"1\",\"name\":\"c\",\"price\":\"34.99\",\"quantity\":\"1\"},{\"id\":\"9\",\"name\":\"Harry Potter 4\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"8\",\"name\":\"Harry Potter 3\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"7\",\"name\":\"Harry Potter 2\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"6\",\"name\":\"Harry Potter 1\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"11\",\"name\":\"subconscious mind\",\"price\":\"25.5\",\"quantity\":\"1\"},{\"id\":\"12\",\"name\":\"the-power of habit\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"5\",\"name\":\"body-langulage\",\"price\":\"29.99\",\"quantity\":2}]', '2019-10-12 04:45:51'),
(11, 0, 'rishad', '[{\"id\":\"3\",\"name\":\"c-sharp \",\"price\":\"39.99\",\"quantity\":\"1\"},{\"id\":\"4\",\"name\":\"java\",\"price\":\"49.99\",\"quantity\":\"1\"},{\"id\":\"2\",\"name\":\"c++\",\"price\":\"49.99\",\"quantity\":\"1\"},{\"id\":\"1\",\"name\":\"c\",\"price\":\"34.99\",\"quantity\":\"1\"},{\"id\":\"9\",\"name\":\"Harry Potter 4\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"8\",\"name\":\"Harry Potter 3\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"7\",\"name\":\"Harry Potter 2\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"6\",\"name\":\"Harry Potter 1\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"11\",\"name\":\"subconscious mind\",\"price\":\"25.5\",\"quantity\":\"1\"},{\"id\":\"12\",\"name\":\"the-power of habit\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"5\",\"name\":\"body-langulage\",\"price\":\"29.99\",\"quantity\":2}]', '2019-10-12 04:47:36'),
(12, 14, 'tisha', '[{\"id\":\"5\",\"name\":\"body-langulage\",\"price\":\"29.99\",\"quantity\":2},{\"id\":\"12\",\"name\":\"the-power of habit\",\"price\":\"29.99\",\"quantity\":2},{\"id\":\"11\",\"name\":\"subconscious mind\",\"price\":\"25.5\",\"quantity\":2}]', '2019-10-12 04:56:04'),
(13, 14, 'tisha', '[{\"id\":\"5\",\"name\":\"body-langulage\",\"price\":\"29.99\",\"quantity\":2},{\"id\":\"12\",\"name\":\"the-power of habit\",\"price\":\"29.99\",\"quantity\":2},{\"id\":\"11\",\"name\":\"subconscious mind\",\"price\":\"25.5\",\"quantity\":2}]', '2019-10-12 04:59:16'),
(14, 14, 'tisha', 'null', '2019-10-12 04:59:53'),
(15, 14, 'tisha', '[{\"id\":\"5\",\"name\":\"body-langulage\",\"price\":\"29.99\",\"quantity\":\"1\"}]', '2019-10-12 05:00:48'),
(16, 14, 'tisha', '[{\"id\":\"12\",\"name\":\"the-power of habit\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"11\",\"name\":\"subconscious mind\",\"price\":\"25.5\",\"quantity\":\"1\"},{\"id\":\"7\",\"name\":\"Harry Potter 2\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"8\",\"name\":\"Harry Potter 3\",\"price\":\"29.99\",\"quantity\":\"1\"}]', '2019-10-12 05:02:06'),
(17, 13, 'shahriar_moin', '[{\"id\":\"5\",\"name\":\"body-langulage\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"12\",\"name\":\"the-power of habit\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"11\",\"name\":\"subconscious mind\",\"price\":\"25.5\",\"quantity\":\"1\"}]', '2019-10-12 05:03:14'),
(18, 13, 'shahriar_moin', '[{\"id\":\"7\",\"name\":\"Harry Potter 2\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"12\",\"name\":\"the-power of habit\",\"price\":\"29.99\",\"quantity\":\"1\"},{\"id\":\"1\",\"name\":\"c\",\"price\":\"34.99\",\"quantity\":\"1\"}]', '2019-10-12 05:04:48'),
(19, 13, 'shahriar_moin', '[{\"id\":\"2\",\"name\":\"c++\",\"price\":\"49.99\",\"quantity\":\"1\"},{\"id\":\"4\",\"name\":\"java\",\"price\":\"49.99\",\"quantity\":\"1\"}]', '2019-10-12 05:06:14'),
(20, 13, 'shahriar_moin', '[{\"id\":\"1\",\"name\":\"c\",\"price\":\"34.99\",\"quantity\":\"1\"}]', '2019-10-12 05:09:03'),
(21, 11, 'moin', '[{\"id\":\"19\",\"name\":\"How to Win Friends and Influence People\",\"price\":\"39.55\",\"quantity\":\"1\"}]', '2019-10-12 17:49:28'),
(22, 0, 'tasmiyah_tisha', '[{\"id\":\"2\",\"name\":\"C plus plus\",\"price\":\"49.99\",\"quantity\":\"1\"},{\"id\":\"3\",\"name\":\"C sharp \",\"price\":\"39.99\",\"quantity\":\"1\"}]', '2019-10-13 01:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL,
  `created_date` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `phone`, `password`, `created_date`, `status`) VALUES
(24, 'shahriar_moin', 'shahriarmoin.aust@gmail.com', '1521429409', '1f7f356811c769a4c073eee05731a474', '2019-10-12 22:09:17', 1),
(25, 'moin', 'moin@gmail.com', '1521429409', '06a998cdd13c50b7875775d4e7e9fa74', '2019-10-12 23:36:20', 1),
(32, 'moin', 'moin@gmail.com', '1521429409', '6f8f57715090da2632453988d9a1501b', '2019-10-12 23:46:51', 1),
(33, 'tasmiyah_tisha', 'tisha@gmail.com', '1620233917', '05e1ae75ec96e66511116a280ddee34e', '2019-10-12 23:49:07', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_table1`
--
ALTER TABLE `order_table1`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `order_table1`
--
ALTER TABLE `order_table1`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
