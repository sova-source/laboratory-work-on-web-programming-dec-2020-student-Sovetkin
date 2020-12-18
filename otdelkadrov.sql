-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 18 2020 г., 06:23
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `otdelkadrov`
--

-- --------------------------------------------------------

--
-- Структура таблицы `rabotniki`
--

CREATE TABLE `rabotniki` (
  `id` int(11) NOT NULL,
  `familia` varchar(255) NOT NULL,
  `imya` varchar(255) NOT NULL,
  `otchestvo` varchar(255) NOT NULL,
  `datar` date NOT NULL,
  `mestor` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `obrazovanie` varchar(255) NOT NULL,
  `dolgnost` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `sraspisanie`
--

CREATE TABLE `sraspisanie` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `dolgnost` varchar(255) NOT NULL,
  `tarif` float NOT NULL,
  `prim` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `t_knigka`
--

CREATE TABLE `t_knigka` (
  `id` int(11) NOT NULL,
  `ser_nom` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL,
  `svedenia` text NOT NULL,
  `osnovanie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `t_stag`
--

CREATE TABLE `t_stag` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_s` date NOT NULL,
  `date_po` date NOT NULL,
  `koef` float NOT NULL,
  `itog` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `rabotniki`
--
ALTER TABLE `rabotniki`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sraspisanie`
--
ALTER TABLE `sraspisanie`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t_knigka`
--
ALTER TABLE `t_knigka`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `t_stag`
--
ALTER TABLE `t_stag`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `rabotniki`
--
ALTER TABLE `rabotniki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sraspisanie`
--
ALTER TABLE `sraspisanie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `t_knigka`
--
ALTER TABLE `t_knigka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `t_stag`
--
ALTER TABLE `t_stag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
