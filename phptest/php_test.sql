-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-05-20 06:11:18
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `php_test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `account_info`
--

CREATE TABLE `account_info` (
  `帳號` varchar(12) NOT NULL,
  `姓名` varchar(20) NOT NULL,
  `性別` varchar(1) NOT NULL,
  `生日` date NOT NULL,
  `信箱` varchar(30) NOT NULL,
  `備註` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `account_info`
--

INSERT INTO `account_info` (`帳號`, `姓名`, `性別`, `生日`, `信箱`, `備註`) VALUES
('lily123', 'Lily', '女', '2020-05-20', 'lily123@gmail.com', '這裡是Lily備註'),
('marshell123', 'Marshell', '男', '2020-05-05', 'marshell123@gmail.com', '這裡是Marshell備註');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
