-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 07 2024 г., 02:55
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Tovar`
--

CREATE TABLE `Tovar` (
  `id` int NOT NULL,
  `name` varchar(535) NOT NULL,
  `opis` varchar(535) NOT NULL,
  `many` varchar(535) NOT NULL,
  `skidka` varchar(535) NOT NULL,
  `recomendaciya` varchar(535) NOT NULL,
  `png1` varchar(535) NOT NULL,
  `png2` varchar(535) NOT NULL,
  `png3` varchar(535) NOT NULL,
  `slidkazacerk` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Samtovar` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `Tovar`
--

INSERT INTO `Tovar` (`id`, `name`, `opis`, `many`, `skidka`, `recomendaciya`, `png1`, `png2`, `png3`, `slidkazacerk`, `Samtovar`) VALUES
(1, 'Bosstone LP-6 BK электрогитара 6-стр. LesPaul.', 'Она имеет корпус из липы, гриф из клена и накладку из палисандра. Гриф оснащен 20 ладами и имеет мензуру 34 дюйма. Бас-гитара оснащена двумя звукоснимателями типа J.', '7 490₽', '40%', 'Избегайте попадания влаги на гитару, так как это может вызвать коррозию металлических частей.<br>\nХраните гитару в чехле или кейсе, чтобы защитить ее от пыли и повреждений.<br>\nПроверяйте состояние струн и меняйте их при необходимости.<br>\nРегулярно проверяйте настройки гитары и корректируйте их при необходимости.<br>', 'https://www.muztorg.ru/files/5lh/b7e/cc9/9wc/oo8/800/o0c/g8g/o/5lhb7ecc99wcoo8800o0cg8go.jpg', 'https://www.muztorg.ru/files/fbj/u8u/e71/mo0/0o4/8w4/gow/s8c/fbju8ue71mo00o48w4gows8c.jpg', 'https://www.muztorg.ru/files/boc/on7/nnu/ugo/k4g/c04/og4/0g4/4/bocon7nnuugok4gc04og40g44.jpg', '8 490 р.', 'Gitara'),
(2, 'ROCKDALE Aurora D1 C BK\r\n', 'Акустическая гитара. Форма корпуса Dreadnought с вырезом. Цвет полупрозрачный черный. Матовое покрытие. Верхняя дека из агатиса. Нижняя дека и обечайка из сапеле. Гриф из красного дерева. Анкерный стержень. Накладка на гриф из древесно-полимерного композита. Закрытые колки.\r\n', '8 900 р', '\r\n-8%', 'Избегайте попадания влаги на гитару, так как это может вызвать коррозию металлических частей.<br>', 'https://www.muztorg.ru/files/elw/2e0/bf7/g8w/kkg/c04/ck4/cc0/c/elw2e0bf7g8wkkgc04ck4cc0c.jpg', 'https://www.muztorg.ru/files/b5y/ns9/ohu/u0c/s8g/co8/skw/gwc/k/b5yns9ohuu0cs8gco8skwgwck.jpg', 'https://www.muztorg.ru/files/53r/87p/a70/6ko/00w/wkk/owo/00g/4/53r87pa706ko00wwkkowo00g4.jpg', '9 700 р.', 'Gitara'),
(3, 'ROCKDALE Aurora D1 RB\r\n', 'Акустическая гитара. Форма корпуса Dreadnought. Цвет королевский коричневый. Матовое покрытие. Верхняя дека из агатиса. Нижняя дека и обечайка из сапеле. Гриф из красного дерева. Анкерный стержень. Накладка на гриф из древесно-полимерного композита. Закрытые колки.', '8 900 р.', '-8%', 'Избегайте попадания влаги на гитару, так как это может вызвать коррозию металлических частей.<br>', 'https://www.muztorg.ru/files/sized/f250x250/58a/lj7/1k2/gw0/w4c/g4w/sc0/kc8/c/58alj71k2gw0w4cg4wsc0kc8c.jpg', 'https://www.muztorg.ru/files/4yw/y8z/tdg/1s0/wk4/4go/08s/w04/c/4ywy8ztdg1s0wk44go08sw04c.jpg', 'https://www.muztorg.ru/files/9um/6ss/821/d8o/ogs/sg0/4w4/ssw/g/9um6ss821d8oogssg04w4sswg.jpg', '9 700 р.', 'Gitara'),
(4, 'ROCKDALE Aurora D1 C N\r\n', 'Акустическая гитара. Форма корпуса Dreadnought с вырезом. Цвет натуральный. Матовое покрытие. Верхняя дека из агатиса. Нижняя дека и обечайка из сапеле. Гриф из красного дерева. Анкерный стержень. Накладка на гриф из древесно-полимерного композита. Закрытые колки.', '8 899 р.', '-8%', 'Избегайте попадания влаги на гитару, так как это может вызвать коррозию металлических частей.<br>', 'https://www.muztorg.ru/files/4rf/8i2/evp/0g0/ck8/0oo/408/kkw/w/4rf8i2evp0g0ck80oo408kkww.jpg', 'https://www.muztorg.ru/files/c0x/irw/7le/2gw/c40/40s/4go/kck/4/c0xirw7le2gwc4040s4gokck4.jpg', 'https://www.muztorg.ru/files/5v1/pos/efr/f4s/sk8/wc0/4c4/sgo/5v1posefrf4ssk8wc04c4sgo0.jpg', '9 699 р.', 'Gitara'),
(5, 'KEPMA D1C Black', 'Акустическая гитара, цвет черный глянцевый, форма - дредноут, верхняя дека - ель, нижняя дека и обечайка - агатис, гриф - махагони, накладка грифа - палисандр, бридж - палисандр, 20 ладов, порожек - Bone Plastic, колки - Gotoh-style литые, фурнитура - никель', '13 900 р.', '-12%', 'Избегайте попадания влаги на гитару, так как это может вызвать коррозию металлических частей.<br>', 'https://www.muztorg.ru/files/aht/x7e/ymm/0gs/480/g4s/8c8/8s4/8/ahtx7eymm0gs480g4s8c88s48.jpg', 'https://www.muztorg.ru/files/dbw/u1e/z62/uos/4o8/s88/o8k/gcc/s/dbwu1ez62uos4o8s88o8kgccs.jpg', 'https://www.muztorg.ru/files/1mc/jnw/8im/880/gkg/c80/oo8/80s/s/1mcjnw8im880gkgc80oo880ss.jpg', '15 800 р.', 'Gitara'),
(6, 'BEHRINGER B115D', 'Активная 2-х полосная (15` + 1,35`) акустическая система 1000 Вт, 2 порта USB 3.0 для подключения мини-приемников радиомикрофонов, 2-канальный микшер, 45 - 20000 Гц, возможность установки на стойку и использования в качестве сценического монитора\r\n', '35 990 р.', '-18%', '', 'https://www.muztorg.ru/files/sized/f250x250/99w/6a3/m99/pss/s0w/8k8/kgc/s4o/4/99w6a3m99psss0w8k8kgcs4o4.jpg', 'https://www.muztorg.ru/files/6ad/mgy/yq9/l8o/c04/k4g/k4w/c8k/6admgyyq9l8oc04k4gk4wc8k0.jpg', 'https://www.muztorg.ru/files/8cu/irc/l9r/sow/gw4/s8k/w8c/4o8/8cuircl9rsowgw4s8kw8c4o80.jpg', '43 770 р.', 'Zvyk');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `avatar`, `pass`) VALUES
(1, '1', '1', NULL, '1'),
(4, '2', '2', NULL, '2'),
(8, '3', '3', NULL, '3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Tovar`
--
ALTER TABLE `Tovar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Tovar`
--
ALTER TABLE `Tovar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
