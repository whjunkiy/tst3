-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 03 2022 г., 23:25
-- Версия сервера: 10.4.12-MariaDB-log
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tst3`
--

-- --------------------------------------------------------

--
-- Структура таблицы `buildings`
--

CREATE TABLE `buildings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `builder` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jk_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jk_cede_date` date NOT NULL,
  `jk_ceiling_height` double(8,2) NOT NULL,
  `rating` double(8,2) NOT NULL,
  `descript` text COLLATE utf8_unicode_ci NOT NULL,
  `services` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `buildings`
--

INSERT INTO `buildings` (`id`, `title`, `pic`, `builder`, `address`, `jk_class`, `jk_cede_date`, `jk_ceiling_height`, `rating`, `descript`, `services`, `created_at`, `updated_at`) VALUES
(1, 'Расцветай на Маркса', 'img/image.jpg', 'ОАО Брусника', 'Новосибирск, Гоголя 14', 'Комфорт', '2022-06-01', 2.70, 8.80, 'Расположен в Октябрьском районе Новосибирска, в непосредственной близости от одной из крупнейших магистралей района — улицы Кирова. В нескольких метрах от новостройки находится остановка общественного транспорта «Дунайская», от которой за 10 минут можно добраться до станции метро «Октябрьская».', 1.10, '2022-06-03 12:33:39', '2022-06-03 13:11:32'),
(2, 'Расцветай на Маркса', 'img/image.jpg', 'ОАО Брусника', 'Новосибирск, Гоголя 14', 'Комфорт', '2022-06-10', 2.70, 8.80, 'Расположен в Октябрьском районе Новосибирска, в непосредственной близости от одной из крупнейших магистралей района — улицы Кирова. В нескольких метрах от новостройки находится остановка общественного транспорта «Дунайская», от которой за 10 минут можно добраться до станции метро «Октябрьская».', 1.10, '2022-06-03 12:33:39', '2022-06-03 13:11:32'),
(3, 'Расцветай на Маркса', 'img/image.jpg', 'ОАО Брусника', 'Новосибирск, Гоголя 14', 'Комфорт', '2022-06-10', 2.70, 8.80, 'Расположен в Октябрьском районе Новосибирска, в непосредственной близости от одной из крупнейших магистралей района — улицы Кирова. В нескольких метрах от новостройки находится остановка общественного транспорта «Дунайская», от которой за 10 минут можно добраться до станции метро «Октябрьская».', 1.10, '2022-06-03 12:33:39', '2022-06-03 13:11:32'),
(4, 'Расцветай на Маркса', 'img/image.jpg', 'ОАО Брусника', 'Новосибирск, Гоголя 14', 'Комфорт', '2022-06-10', 2.70, 8.80, 'Расположен в Октябрьском районе Новосибирска, в непосредственной близости от одной из крупнейших магистралей района — улицы Кирова. В нескольких метрах от новостройки находится остановка общественного транспорта «Дунайская», от которой за 10 минут можно добраться до станции метро «Октябрьская».', 1.10, '2022-06-03 12:33:39', '2022-06-03 13:11:32'),
(5, 'Расцветай на Маркса', 'img/image.jpg', 'ОАО Брусника', 'Новосибирск, Гоголя 14', 'Комфорт', '2022-06-10', 2.70, 8.80, 'Расположен в Октябрьском районе Новосибирска, в непосредственной близости от одной из крупнейших магистралей района — улицы Кирова. В нескольких метрах от новостройки находится остановка общественного транспорта «Дунайская», от которой за 10 минут можно добраться до станции метро «Октябрьская».', 1.10, '2022-06-03 12:33:39', '2022-06-03 13:11:32'),
(6, 'Расцветай на Маркса', 'img/image.jpg', 'ОАО Брусника', 'Новосибирск, Гоголя 14', 'Комфорт', '2022-06-10', 2.70, 8.80, 'Расположен в Октябрьском районе Новосибирска, в непосредственной близости от одной из крупнейших магистралей района — улицы Кирова. В нескольких метрах от новостройки находится остановка общественного транспорта «Дунайская», от которой за 10 минут можно добраться до станции метро «Октябрьская».', 1.10, '2022-06-03 12:33:39', '2022-06-03 13:11:32'),
(7, 'Расцветай на Маркса', 'img/image.jpg', 'ОАО Брусника', 'Новосибирск, Гоголя 14', 'Комфорт', '2022-06-10', 2.70, 8.80, 'Расположен в Октябрьском районе Новосибирска, в непосредственной близости от одной из крупнейших магистралей района — улицы Кирова. В нескольких метрах от новостройки находится остановка общественного транспорта «Дунайская», от которой за 10 минут можно добраться до станции метро «Октябрьская».', 1.10, '2022-06-03 12:33:39', '2022-06-03 13:11:32');

-- --------------------------------------------------------

--
-- Структура таблицы `building_metro`
--

CREATE TABLE `building_metro` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `drive_by` tinyint(4) NOT NULL,
  `togo_time` smallint(6) NOT NULL,
  `building_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `building_metro`
--

INSERT INTO `building_metro` (`id`, `title`, `drive_by`, `togo_time`, `building_id`, `created_at`, `updated_at`) VALUES
(1, 'Студенческая', 1, 5, 1, NULL, NULL),
(2, 'Сокол', 2, 25, 1, NULL, NULL),
(3, 'Китай-Город', 2, 15, 1, NULL, NULL),
(4, 'Студенческая', 1, 5, 2, NULL, NULL),
(5, 'Сокол', 2, 25, 2, NULL, NULL),
(6, 'Китай-Город', 2, 15, 2, NULL, NULL),
(7, 'Студенческая', 1, 5, 3, NULL, NULL),
(8, 'Сокол', 2, 25, 3, NULL, NULL),
(9, 'Китай-Город', 2, 15, 3, NULL, NULL),
(10, 'Студенческая', 1, 5, 4, NULL, NULL),
(11, 'Сокол', 2, 25, 4, NULL, NULL),
(12, 'Китай-Город', 2, 15, 4, NULL, NULL),
(13, 'Студенческая', 1, 5, 5, NULL, NULL),
(14, 'Сокол', 2, 25, 5, NULL, NULL),
(15, 'Китай-Город', 2, 15, 5, NULL, NULL),
(16, 'Студенческая', 1, 5, 6, NULL, NULL),
(17, 'Сокол', 2, 25, 6, NULL, NULL),
(18, 'Китай-Город', 2, 15, 6, NULL, NULL),
(19, 'Студенческая', 1, 5, 7, NULL, NULL),
(20, 'Сокол', 2, 45, 7, NULL, NULL),
(21, 'Китай-Город', 2, 15, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `building_options`
--

CREATE TABLE `building_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `building_id` int(10) UNSIGNED NOT NULL,
  `jk_constructive` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jk_garnish` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jk_underparking` tinyint(4) NOT NULL,
  `jk_min_floor` tinyint(4) NOT NULL,
  `jk_max_floor` tinyint(4) NOT NULL,
  `jk_price_group` tinyint(4) NOT NULL,
  `jk_good_yard` tinyint(1) NOT NULL,
  `jk_near_forest` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `building_options`
--

INSERT INTO `building_options` (`id`, `building_id`, `jk_constructive`, `jk_garnish`, `jk_underparking`, `jk_min_floor`, `jk_max_floor`, `jk_price_group`, `jk_good_yard`, `jk_near_forest`, `created_at`, `updated_at`) VALUES
(1, 1, 'Монолит-кирпич', 'Чистовая', 1, 10, 17, 1, 1, 1, '2022-06-03 13:18:35', NULL),
(2, 2, 'Монолит-кирпич', 'Чистовая', 1, 5, 8, 0, 1, 1, '2022-06-03 13:18:35', NULL),
(3, 3, 'Монолит-кирпич', 'Чистовая', 1, 5, 8, 0, 1, 1, '2022-06-03 13:18:35', NULL),
(4, 4, 'Монолит-кирпич', 'Чистовая', 1, 15, 18, 0, 1, 1, '2022-06-03 13:18:35', NULL),
(5, 5, 'Монолит-кирпич', 'Чистовая', 1, 15, 18, 0, 1, 1, '2022-06-03 13:18:35', NULL),
(6, 6, 'Монолит-кирпич', 'Чистовая', 1, 15, 18, 1, 0, 0, '2022-06-03 13:18:35', NULL),
(7, 7, 'Монолит-кирпич', 'Чистовая', 0, 4, 5, 0, 1, 1, '2022-06-03 13:18:35', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_10_27_141258_create_tasks_table', 1),
('2022_06_03_114215_create_buildings_table', 2),
('2022_06_03_120114_create_building_options_table', 3),
('2022_06_03_131605_create_building_metro_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdf', '2022-06-03 12:33:39', '2022-06-03 12:33:39');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `building_metro`
--
ALTER TABLE `building_metro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `building_metro_building_id_index` (`building_id`);

--
-- Индексы таблицы `building_options`
--
ALTER TABLE `building_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `building_options_building_id_index` (`building_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `building_metro`
--
ALTER TABLE `building_metro`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `building_options`
--
ALTER TABLE `building_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `building_metro`
--
ALTER TABLE `building_metro`
  ADD CONSTRAINT `building_metro_building_id_foreign` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `building_options`
--
ALTER TABLE `building_options`
  ADD CONSTRAINT `building_options_building_id_foreign` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
