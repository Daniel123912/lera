-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 14 2024 г., 00:24
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `regbd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `flights`
--

CREATE TABLE `flights` (
  `id` int NOT NULL,
  `flight_number` varchar(10) NOT NULL,
  `departure` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `departure_date` date NOT NULL,
  `departure_time` time NOT NULL,
  `price` varchar(255) NOT NULL,
  `num_cars` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `flights`
--

INSERT INTO `flights` (`id`, `flight_number`, `departure`, `destination`, `category`, `departure_date`, `departure_time`, `price`, `num_cars`) VALUES
(3, '1234', 'москва', 'казань', 'Плацкарт', '2024-06-06', '04:41:00', '655', 1),
(4, '123', 'Казань', 'Нальчик', 'Купе', '2023-06-15', '23:54:00', '5000', 1),
(5, '1234е', 'Казань', 'Москва', 'СВ', '2023-06-07', '23:17:00', '120', 1),
(6, '33', 'высв', 'вссвс', 'Купе', '3333-03-31', '03:03:00', '333', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Дпниил Дпниил', 'admin@gmail.com', 'dsfsdfsdfdsf', '2023-06-28 18:58:24'),
(2, 'Слава Рустамович Понаморев', 'slava22@gmail.com', 'Каждый раз заказываю тут билеты, Спасибо огромное!', '2023-06-28 21:40:03'),
(3, 'Андрей', 'LataAndry@gmail.com', 'Мне очень понравилось обслуживание и уровень профессионализма, которые я обнаружил во время всего процесса.', '2023-06-28 21:42:29'),
(4, 'fdfdf', 'goes@mail.ru', 'ffff', '2024-06-10 19:05:47');

-- --------------------------------------------------------

--
-- Структура таблицы `tickets`
--

CREATE TABLE `tickets` (
  `id` int UNSIGNED NOT NULL,
  `fio` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mesto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tickets`
--

INSERT INTO `tickets` (`id`, `fio`, `email`, `mesto`) VALUES
(1, 'Ганиев', 'admineee@gmail.com', '44'),
(2, 'Ганиев', 'admineee@gmail.com', '44'),
(3, 'Ганиев', 'admineee@gmail.com', '44'),
(4, 'Ганиев', 'admin@gmail.com', '44'),
(5, 'Ганиев', 'admin@gmail.com', '44'),
(6, 'Ганиев', 'jfjfj@gmail.com', '44'),
(7, 'Ганиев', 'admin@gmail.com', '44'),
(8, 'Аделина Васина ', 'goes@mail.ru', '66');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `login` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `pass`, `role`) VALUES
(1, 'ААААА ппппП ПППП', 'qwerty', 'goes@mail.ru', '123', 'admin'),
(2, '777555', 'qwerty2', 'goes@mail.ru', '123456789', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
