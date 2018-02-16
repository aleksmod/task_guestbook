-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 16 2018 г., 15:07
-- Версия сервера: 10.1.30-MariaDB
-- Версия PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `guestbook`
--

-- --------------------------------------------------------

--
-- Структура таблицы `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `author` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `homepage` varchar(30) NOT NULL,
  `text` text NOT NULL,
  `ip` varchar(30) NOT NULL,
  `browser` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `notes`
--

INSERT INTO `notes` (`id`, `author`, `email`, `homepage`, `text`, `ip`, `browser`, `date`) VALUES
(7, 'test111', 'test@dsd222', 'https://translate.google.com.u', 'sdsdsd', '::1', 'Mozilla/5.0 (Windows NT 6.1) A', '2018-02-21 02:07:00'),
(8, 'aaa222', 'test@dsd32323', 'https://google.com.ua', 'asdasdsf dsf sdf 445 sdf 45 f ', '::1', 'Mozilla/5.0 (Windows NT 6.1) A', '2018-01-16 03:00:00'),
(9, '112sddsd', 'test@we.fefd', 'https://stackoverflow.com', 'asdasdsf dsf sdf 445 sdf 45 f ', '::1', 'Mozilla/5.0 (Windows NT 6.1) A', '2018-02-05 04:00:00'),
(10, 'sdsd', 'sds@dsdsd', 'http://php.net', 'sdsd dds d', '', 'Mozilla/5.0 (Windows NT 6.1) A', '2018-02-16 15:54:31'),
(11, 'sdsd', 'sds@dsdsd', 'http://php.net', 'sdsd dds d', '::1', 'Mozilla/5.0 (Windows NT 6.1) A', '2018-02-16 15:55:13'),
(12, 'sdasd', 'sadsad@sddsd', 'http://php.net/', 'asdsad', '::1', 'Mozilla/5.0 (Windows NT 6.1) A', '2018-02-16 15:56:01'),
(13, 'sdad', 'adasd@sdsd', 'http://www.mysql.ru', 'sdsd dsd ', '::1', 'Mozilla/5.0 (Windows NT 6.1) A', '2018-02-16 16:00:16'),
(14, 'asdasd', 'asda@dssds', 'http://www.mysql.ru', 'sdsds', '::1', 'Mozilla/5.0 (Windows NT 6.1) A', '2018-02-16 16:01:04'),
(15, 'sdsd', 'sd@sdsd', 'https://www.ukr.net/', 'sdsdsd', '::1', 'Mozilla/5.0 (Windows NT 6.1) A', '2018-02-16 16:02:42');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
