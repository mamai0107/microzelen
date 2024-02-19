-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 19 2024 г., 10:39
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `microzelen`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accesories`
--

CREATE TABLE `accesories` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `img` text NOT NULL,
  `quantity` int NOT NULL
) ;

--
-- Дамп данных таблицы `accesories`
--

INSERT INTO `accesories` (`id`, `name`, `description`, `price`, `img`, `quantity`) VALUES
(1, 'подставка', 'крутая', '1000.00', 'подставка.jpg', 1),
(2, 'удобрение', 'круть', '500.00', 'удобрение.webp', 1),
(3, 'лоток', 'супер', '10.00', 'лоток.webp', 10),
(4, 'пулевизатор', 'ващее', '300.00', 'пулевизатор.png', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id_cart` int NOT NULL,
  `users_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` int DEFAULT '1'
) ;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id_cart`, `users_id`, `product_id`, `quantity`) VALUES
(1, NULL, 1, 1),
(2, NULL, 3, 1),
(3, NULL, 3, 1),
(4, NULL, 3, 1),
(5, NULL, 3, 1),
(6, NULL, 9, 1),
(7, NULL, 3, 1),
(8, NULL, 3, 1),
(9, NULL, 3, 1),
(10, NULL, 7, 1),
(11, NULL, 2, 1),
(12, NULL, 2, 1),
(13, NULL, 2, 1),
(14, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `quantity` int DEFAULT NULL,
  `img` text NOT NULL,
  `date_added` varchar(200) NOT NULL
) ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `quantity`, `img`, `date_added`) VALUES
(1, 'базилик', 'лалалал', '100.00', 1, 'горчица.png', '2024-02-12'),
(2, 'горох', 'kfkfk', '10.00', 1, 'горох.png', '2024-02-13'),
(3, 'дайкон', 'дадда', '15.00', 2, 'дайкон.png', '2024-02-13'),
(4, 'рукола', 'вапро', '100.00', 2, 'рукола.png', '2024-02-13'),
(5, 'редис', 'апро', '101.00', 3, 'редис.png', '2024-02-13'),
(6, 'мицуна', 'апрол', '106.00', 1, 'мицуна.png', '2024-02-13');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_users` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Is_admin` int NOT NULL DEFAULT '0'
) ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_users`, `email`, `password`, `Is_admin`) VALUES
(1, 'isip_k.d.mamaeva@mpt.ru', '123123', 0),
(2, 'isip_k.d.mamaeva@mpt.ru', '123123', 0),
(3, 'mamaeva@mpt.ru', '123123', 0),
(4, 'isip_k.d.mamaeva@mpt.ru', '123123', 0),
(5, 'mamaeva@mpt.ru', '123123', 0),
(6, 'mamaeva@mpt.ru', '123123', 0),
(7, 'mama@mail.ru', '$2y$10$3DcdjhQ7.jhj.OdsJpQAMurwsJM3NkrGelXapf68A1kd2DpM6JH7a', 0),
(8, 'admin1', '$2y$10$jXcdj.mQplpOZ3VGPf.6JOiHhUbCh3CZSrkWbulrITFfraTJcSgRC', 0),
(9, 'adminn', '$2y$10$M.Jey5xhA0d6A0Qpk68SJu574S.CQHaE06AJMlXfqC/SAXmtkdhe2', 1),
(10, 'kkk', '$2y$10$1.nQ2E7BnVMzBY9L6TK1ieCkMBYJoz/b7sY7sbj2GtwmTF.mucSaO', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accesories`
--
ALTER TABLE `accesories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id_users`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accesories`
--
ALTER TABLE `accesories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
