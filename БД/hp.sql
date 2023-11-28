-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 11 2023 г., 15:11
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pet`
--

CREATE TABLE `pet` (
  `id` int(11) NOT NULL,
  `nickname` text NOT NULL,
  `date` date NOT NULL,
  `view_id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `pet`
--

INSERT INTO `pet` (`id`, `nickname`, `date`, `view_id`, `price`) VALUES
(1, 'dtymdtym', '2009-09-09', 3, 1000);

-- --------------------------------------------------------

--
-- Структура таблицы `pet_1`
--

CREATE TABLE `pet_1` (
  `id` int(11) NOT NULL,
  `pet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `pet_1`
--

INSERT INTO `pet_1` (`id`, `pet`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`id`, `name`, `user`) VALUES
(1, 'Happy Pet', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `supplier`
--

INSERT INTO `supplier` (`id`, `name`) VALUES
(1, 'NoName');

-- --------------------------------------------------------

--
-- Структура таблицы `supplier_1`
--

CREATE TABLE `supplier_1` (
  `id` int(11) NOT NULL,
  `supplier` int(11) NOT NULL,
  `shop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `supplier_1`
--

INSERT INTO `supplier_1` (`id`, `supplier`, `shop`) VALUES
(1, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `log_in` text NOT NULL,
  `password` text NOT NULL,
  `FIO` text NOT NULL,
  `date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `nickname_pet` varchar(255) NOT NULL,
  `vid_pet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `log_in`, `password`, `FIO`, `date`, `email`, `nickname_pet`, `vid_pet`) VALUES
(1, 'admin1', 'password1', 'Leon zohisb', '2009-09-09', 'HappyPet@mail.com', '', ''),
(2, 'log', '123', '', '0000-00-00', '', '', ''),
(3, 'log11', '123', '', '0000-00-00', '', '', ''),
(4, 'admin2', 'oziodh', '', '0000-00-00', 'HP@hghgh.l', '', ''),
(5, 'admin1', 'aergaerg', '', '0000-00-00', 'eragerg@k', '', ''),
(6, 'admin2', 'oziodh', '', '0000-00-00', 'HP@hghgh.l', '', ''),
(7, 'a', '1234', 'Ñ†ÐºÐµÑ€Ñ†ÐºÐµÑ€', '2023-09-06', 'sds@mail.ru', 'Ñ†ÐºÑ€', 'ÐºÐµÑ€'),
(8, 'll', 'non', '', '0000-00-00', 'non@gmail.com', '', ''),
(9, 'log', 'pas', '', '0000-00-00', 'email', '', ''),
(10, 'log', 'pas', '', '0000-00-00', 'email', '', ''),
(11, 'aa', '123', '', '0000-00-00', 'aa@mail.ru', '', ''),
(12, 'long', '1234', '', '0000-00-00', 'nn@ff', '', ''),
(13, 'aaa', '123', '', '0000-00-00', 'aaa@wee', '', ''),
(14, 'Admin', 'Password', '', '0000-00-00', 'Email@gmail.com', '', ''),
(15, 'lock', 'None', '', '0000-00-00', 'tt@awef.dv', '', ''),
(16, 'gfgfgdf', 'fgfgf', 'ghmdtghm', '2023-05-13', 'fgfdgfg', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `vied`
--

CREATE TABLE `vied` (
  `id` int(11) NOT NULL,
  `vied` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `vied`
--

INSERT INTO `vied` (`id`, `vied`) VALUES
(1, 'cat'),
(2, 'dog'),
(3, 'dmdtym'),
(4, 'turtle'),
(5, 'snail'),
(6, '-');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pet_1`
--
ALTER TABLE `pet_1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `supplier_1`
--
ALTER TABLE `supplier_1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vied`
--
ALTER TABLE `vied`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pet`
--
ALTER TABLE `pet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `pet_1`
--
ALTER TABLE `pet_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `supplier_1`
--
ALTER TABLE `supplier_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `vied`
--
ALTER TABLE `vied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
