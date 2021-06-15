-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 15 2021 г., 16:25
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `number1` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `number2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `number3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `cname`, `position`, `number1`, `number2`, `number3`) VALUES
(1, 'Lilia', 'Predko', 'l.predko@list.ru', 'NSTU', 'Student', '8-999-459-73-38', '8-999-459-73-38', '-'),
(2, 'Lilia', 'Predko', 'l.predko@list.ru', 'NSTU', 'Student', '8-999-459-73-38', '-', '-'),
(3, 'Lilia', 'Predko', 'l.predko@list.ru', 'NSTU', 'Student', '8-999-457-73-38', '8-999-458-73-38', '8-999-459-73-38'),
(4, 'Lilia', 'Predko', 'l.predko@list.ru', 'NSTU', 'Student', '8-999-459-73-38', '-', '-'),
(5, 'Lilia', 'Predko', 'l.predko@list.ru', 'NSTU', 'Student', '8-999-457-73-38', '8-999-458-73-38', '8-999-459-73-38'),
(6, 'Lilia', 'Predko', 'l.predko@list.ru', 'NSTU', 'Student', '8-999-457-73-38', '-', '-'),
(7, 'Lilia', 'Predko', 'l.predko@list.ru', 'NSTU', 'Student', '8-999-459-73-38', '-', '-'),
(8, 'Lilia', 'Predko', 'l.predko@list.ru', 'NSTU', 'Student', '8-999-459-73-38', '-', '-'),
(9, 'Lilia', 'Predko', 'l.predko@list.ru', 'NSTU', 'Student', '8-999-457-73-38', '8-999-458-73-38', '8-999-459-73-38'),
(10, 'Lilia', 'Predko', 'l.predko@list.ru', 'NSTU', 'Student', '8-999-457-73-38', '8-999-458-73-38', '-'),
(12, 'Lilia', 'Predko', 'l.predko@list.ru', 'NSTU', 'Student', '', '', ''),
(13, 'Lilia', 'Predko', 'l.predko@list.ru', '', '', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
