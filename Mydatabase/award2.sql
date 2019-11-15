-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-11-15 13:48:32
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ticket`
--

-- --------------------------------------------------------

--
-- 資料表結構 `award2`
--

CREATE TABLE `award2` (
  `id` int(15) UNSIGNED NOT NULL COMMENT '序列',
  `year` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '年份',
  `month` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '月份',
  `special_award` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '特別獎',
  `first_award` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '特獎',
  `second_award` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '頭獎',
  `sec_2` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '頭獎2',
  `sec_3` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '頭獎3',
  `six_award` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '六獎',
  `six_2` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '六獎2',
  `six_3` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '六獎3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `award2`
--

INSERT INTO `award2` (`id`, `year`, `month`, `special_award`, `first_award`, `second_award`, `sec_2`, `sec_3`, `six_award`, `six_2`, `six_3`) VALUES
(1, '2019', '2', '45678901', '13456784', '54123654', '46462613', '87642125', '78954654', '52715812', '34581133');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `award2`
--
ALTER TABLE `award2`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `award2`
--
ALTER TABLE `award2`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序列', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
