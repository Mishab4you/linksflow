-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql306.epizy.com
-- Generation Time: Jan 02, 2022 at 12:58 AM
-- Server version: 5.7.35-38
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_29363476_linksflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id`, `users_id`, `name`, `email`, `mobile`, `date`) VALUES
(14, 0, 'Sanas', 'saaaa@g.c', 'sdfsdfdsfds', '2021-08-05 11:21:59'),
(15, 0, 'sanatre', 'sanaaaa', 'wq', '2021-08-05 11:21:59'),
(17, 0, '1122', 'msb12221@g.c22', '222', '2021-08-05 11:21:59'),
(18, 0, 'Thisewe', 'ewqew', 'ewqeqw', '2021-08-05 11:21:59'),
(19, 0, 'tertrtgfdg', 'tretetret', 'tret', '2021-08-05 11:21:59'),
(21, 0, 'fsdfsdffsdfffdfdsfrerwe', 'sfdsfsdfewrer', 'sfdfdssdsdewrer', '2021-08-05 11:21:59'),
(23, 0, 'gfgdggdgfdgffsddf', 'fgdfgdfgfsdfdfsd', 'ggdfgdffdfs', '2021-08-05 11:21:59'),
(24, 0, 'Thisfdsfddsf', 'yryty', 'yrytry', '2021-08-05 11:21:59'),
(26, 30, 'This is sana', 'msb.com001@gmail.com', 'This is sana', '2021-08-05 11:21:59'),
(27, 30, 'This is sana22222', 'msb12221@g.c22222', '222222', '2021-08-05 11:21:59'),
(28, 24, 'fdgdfggdfggdg', 'fdggf', 'gdfgfgdgddd', '2021-08-05 12:04:41'),
(29, 24, 'fgfgdg', 'dfgfgfgfdgdfg', 'gfgdfdf', '2021-08-05 12:19:36'),
(31, 24, 'fdsfsfs', 'fsdfdffsd', 'fsdfsdfdf', '2021-08-05 12:23:21'),
(32, 24, 'gfdgdfgfd', 'ggfdgdgfdg', 'gdfggd', '2021-08-05 12:24:21'),
(33, 24, 'fsdfsf', 'fsdfsfsdfsfsfs', 'fsdfds', '2021-08-05 12:26:27'),
(34, 30, 'gfdfd', 'gdfgd', 'gdfgfgdgf', '2021-08-06 05:05:18'),
(36, 33, 'Rdd', 'Ddd', 'Xddd', '2021-08-09 14:50:23'),
(37, 23, 'fffdsf', 'fdfsfsdfsdfsdfsdf', 'sdfsdff', '2021-11-17 12:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `cat` text NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `cat`, `body`, `published`, `created_at`) VALUES
(1, 23, 9, 'Dribbble', 'Image Gallery', 'https://dribbble.com/tags', 1, '2021-08-19 08:52:01'),
(2, 23, 10, 'Dribbble Design', 'Design Assets', 'https://dribbble.com/', 1, '2021-08-19 08:52:27'),
(3, 23, 10, 'Mockup World HQ', 'Design Assets', 'https://www.mockupworldhq.com/', 1, '2021-08-21 06:24:01'),
(4, 23, 13, 'Slidev', 'Coding Assets', 'https://sli.dev/', 1, '2021-08-21 06:27:03'),
(5, 23, 11, 'Rotato', 'Mockup', 'https://www.rotato.app/', 1, '2021-08-21 06:28:03'),
(6, 23, 9, 'Tjh', 'Hdy', 'Thj', 1, '2021-12-21 00:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(4) UNSIGNED NOT NULL,
  `user_id` int(4) UNSIGNED DEFAULT NULL,
  `title` varchar(20) NOT NULL,
  `cat` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `user_id`, `title`, `cat`, `description`, `date`) VALUES
(4, NULL, ']', 0, '', '2021-08-03 12:40:52'),
(5, NULL, 'hgfhhhgfh', 0, 'hfghgfhf', '2021-08-03 12:40:58'),
(6, NULL, 'gfdgdfgfdfg', 0, 'gfdg', '2021-08-03 12:41:41'),
(7, NULL, 'gfgdgffgdg', 0, 'gfgdgf', '2021-08-03 12:43:28'),
(8, NULL, 'dfgfgd', 0, 'dfgfgfdg', '2021-08-03 12:44:12'),
(9, NULL, 'fdsgfgfdgdf', 0, 'gfgdfgf', '2021-08-03 12:45:20'),
(10, 11, 'fdsfssdfsf', 0, 'fdsfdsf', '2021-08-03 12:47:50'),
(11, 11, 'gfgdggdf', 0, 'gdfgf', '2021-08-03 12:51:58'),
(12, NULL, 'gfdgfgfdgdf', 0, 'fgdgdfgfg', '2021-08-03 12:53:57'),
(13, NULL, 'fdsffdfsdsfs', 0, 'sdffdsfsdfsdfds', '2021-08-03 12:54:27'),
(14, NULL, 'fghfgh', 0, 'ghgfhfgfhf', '2021-08-03 12:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(11, 'Mockup', 'Mockup'),
(10, 'Design Assets', 'Design Assets'),
(9, 'Images', 'Images'),
(12, 'Videograpy', 'Videograpy'),
(13, 'Coding Assets', 'Code Assets');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(21, 1, 'Melvine', 'melvineawa@gmail.com', '$2y$10$.KTfxbvgxwtQF8pKXsJ9UeiyL7BiuJpEYRzhWuJo1aDlaBPm4pe6G', '2019-11-23 14:23:30'),
(22, 1, 'Awa Melvine', 'melvine@d.com', '$2y$10$oiKQ31vuUWlPSghDQJliceQJidPBnLt3X/ggEkaoR.lGAHkYBZ7Qu', '2019-11-27 07:08:45'),
(23, 1, 'msb', 'msb.com001@gmail.com', '$2y$10$ryOD4TSyIb7w9iS2uDpck.WbPbCzu9em3a8orMZ8eEMrSFZGrcqc2', '2021-08-03 07:54:58'),
(24, 0, 'msbe', 'msbee@g.c', '$2y$10$tcC7gF7hvvNh.E3NuXd5Ce2VsWwWV0V7PDLE0Pd4TONvLN/WBOD7q', '2021-08-03 08:46:48'),
(25, 0, 'msba', 'msbsaa@g.c', '$2y$10$qwgCoOB0qtW36EGJLZvvMe3pQ5z1DyJjkq4AMbEsxxAjCwouaNtKa', '2021-08-03 08:52:46'),
(26, 0, 'admin123', 'msb12221@g.c', '$2y$10$IwMtWAByemkSRqMMfRGZzekZUUtFEY6surRyhFKeSgLtI6xc6DuB6', '2021-08-03 08:53:15'),
(27, 0, 'adminee', 'msbew@g.c', '$2y$10$lR92aCrPuxBHOKoMFrb55.vnxsU876uJN7zUQI.xR7ehgaQY3DyhO', '2021-08-03 08:55:07'),
(28, 0, 'tryrttyyt', 'msbyrtytyt@g.c', '$2y$10$ag8oh7G8pURbsEU6P45R6eUZ22KMK19JwZ420fhCWJVuX5u.YUl2e', '2021-08-03 08:56:02'),
(29, 0, 'adminsdsa', 'msdsadssdasb@g.c', '$2y$10$kUo4y7Aga5Jyut9.HTLNmuzyLAUvwtS1JeRwm96By8Omy37xINvaC', '2021-08-03 08:57:57'),
(30, 0, 'sana', 'msb1@g.c', '$2y$10$xC1Y5lxkkhG3X3av4XtE9ueadmcblGxo6gUaxStS7bISlLDKt2xv.', '2021-08-03 09:35:14'),
(31, 0, 'fdsfdfsfsd', 'msb.fsdfsdfdcom001@gmail.com', '$2y$10$L6tjoxyroZGDAOO2BhbPju1lfhJzQ21y94kksOtvxcDfxwoRuJ3ia', '2021-08-03 11:19:09'),
(32, 0, 'msb', '123@g.c1', '$2y$10$R08RSxvGf4z818cYCzSLjOQjAWUJRu0L7y8qfKgrmB3PwI2Mm68g.', '2021-08-03 12:53:05'),
(33, 0, 'Sana Fathima', 'sanaa@g.c', '$2y$10$Kzwwl1gCETiPDQNXFFwyS..OXGpcRrw/2C8DtqWEfNgDwTirsgVNK', '2021-08-09 05:44:45'),
(34, 0, 'msb', 'msb@g.c', '$2y$10$Sra0t9ilgfJohx0dyXwEkOjgMH2VSm6jHy2q3s0TbMtuFBNKXwvR6', '2021-08-21 10:38:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
