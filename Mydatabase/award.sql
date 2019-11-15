-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-11-15 13:48:38
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
-- 資料表結構 `award`
--

CREATE TABLE `award` (
  `id` int(10) UNSIGNED NOT NULL,
  `year` year(4) NOT NULL COMMENT '年份',
  `month` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '月份',
  `special_award` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '特別獎',
  `first_award` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '特獎',
  `second_award` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '頭獎',
  `sec_2` int(10) NOT NULL COMMENT '頭獎2',
  `sec_3` int(10) NOT NULL COMMENT '頭獎3',
  `six_award` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '六獎',
  `six_2` int(10) NOT NULL COMMENT '六獎2',
  `six_3` int(10) NOT NULL COMMENT '六獎3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `award`
--

INSERT INTO `award` (`id`, `year`, `month`, `special_award`, `first_award`, `second_award`, `sec_2`, `sec_3`, `six_award`, `six_2`, `six_3`) VALUES
(1, 2019, '1', '38521280', '53279366', '64019782', 71241250, 39678122, '26481782', 45687250, 54941122),
(2, 2019, '2', '45678901', '13456784', '54123654', 46467812, 87642133, '78954654', 52715812, 34581133),
(3, 2019, '3', '72136458', '95421563', '32654123', 25987431, 45687152, '64523123', 84652431, 15896152),
(4, 2019, '4', '35621369', '45821564', '89482236', 48715259, 74859822, '61849236', 48124259, 59813822),
(5, 2019, '5', '48736126', '23687593', '78459368', 34581297, 62584612, '56982368', 23648297, 28749612),
(6, 2019, '6', '31586924', '94823618', '65842371', 28452123, 49485698, '32187371', 48643123, 78656371);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `award`
--
ALTER TABLE `award`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
