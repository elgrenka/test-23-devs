-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 07 2023 г., 20:24
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
-- База данных: `messages_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int UNSIGNED NOT NULL,
  `messageId` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `messageId`, `name`, `email`, `body`) VALUES
(1, 1, 'id labore ex et quam laborum', 'Eliseo@gardner.biz', 'laudantium enim quasi est quidem magnam voluptate ipsam eos\ntempora quo necessitatibus\ndolor quam autem quasi\nreiciendis et nam sapiente accusantium'),
(2, 1, 'id labore ex et quam laborum', 'Eliseo@gardner.biz', 'laudantium enim quasi est quidem magnam voluptate ipsam eos\ntempora quo necessitatibus\ndolor quam autem quasi\nreiciendis et nam sapiente accusantium'),
(3, 2, 'quo vero reiciendis velit similique earum', 'Jayne_Kuhic@sydney.com', 'est natus enim nihil est dolore omnis voluptatem numquam\net omnis occaecati quod ullam at\nvoluptatem error expedita pariatur\nnihil sint nostrum voluptatem reiciendis et'),
(4, 2, 'quo vero reiciendis velit similique earum', 'Jayne_Kuhic@sydney.com', 'est natus enim nihil est dolore omnis voluptatem numquam\net omnis occaecati quod ullam at\nvoluptatem error expedita pariatur\nnihil sint nostrum voluptatem reiciendis et'),
(5, 3, 'odio adipisci rerum aut animi', 'Nikita@garfield.biz', 'quia molestiae reprehenderit quasi aspernatur\naut expedita occaecati aliquam eveniet laudantium\nomnis quibusdam delectus saepe quia accusamus maiores nam est\ncum et ducimus et vero voluptates excepturi deleniti ratione'),
(6, 3, 'odio adipisci rerum aut animi', 'Nikita@garfield.biz', 'quia molestiae reprehenderit quasi aspernatur\naut expedita occaecati aliquam eveniet laudantium\nomnis quibusdam delectus saepe quia accusamus maiores nam est\ncum et ducimus et vero voluptates excepturi deleniti ratione'),
(7, 4, 'alias odio sit', 'Lew@alysha.tv', 'non et atque\noccaecati deserunt quas accusantium unde odit nobis qui voluptatem\nquia voluptas consequuntur itaque dolor\net qui rerum deleniti ut occaecati'),
(8, 4, 'alias odio sit', 'Lew@alysha.tv', 'non et atque\noccaecati deserunt quas accusantium unde odit nobis qui voluptatem\nquia voluptas consequuntur itaque dolor\net qui rerum deleniti ut occaecati'),
(9, 5, 'vero eaque aliquid doloribus et culpa', 'Hayden@althea.biz', 'harum non quasi et ratione\ntempore iure ex voluptates in ratione\nharum architecto fugit inventore cupiditate\nvoluptates magni quo et'),
(10, 5, 'vero eaque aliquid doloribus et culpa', 'Hayden@althea.biz', 'harum non quasi et ratione\ntempore iure ex voluptates in ratione\nharum architecto fugit inventore cupiditate\nvoluptates magni quo et'),
(11, 6, 'et fugit eligendi deleniti quidem qui sint nihil autem', 'Presley.Mueller@myrl.com', 'doloribus at sed quis culpa deserunt consectetur qui praesentium\naccusamus fugiat dicta\nvoluptatem rerum ut voluptate autem\nvoluptatem repellendus aspernatur dolorem in'),
(12, 6, 'et fugit eligendi deleniti quidem qui sint nihil autem', 'Presley.Mueller@myrl.com', 'doloribus at sed quis culpa deserunt consectetur qui praesentium\naccusamus fugiat dicta\nvoluptatem rerum ut voluptate autem\nvoluptatem repellendus aspernatur dolorem in'),
(13, 7, 'repellat consequatur praesentium vel minus molestias voluptatum', 'Dallas@ole.me', 'maiores sed dolores similique labore et inventore et\nquasi temporibus esse sunt id et\neos voluptatem aliquam\naliquid ratione corporis molestiae mollitia quia et magnam dolor'),
(14, 7, 'repellat consequatur praesentium vel minus molestias voluptatum', 'Dallas@ole.me', 'maiores sed dolores similique labore et inventore et\nquasi temporibus esse sunt id et\neos voluptatem aliquam\naliquid ratione corporis molestiae mollitia quia et magnam dolor'),
(15, 8, 'et omnis dolorem', 'Mallory_Kunze@marie.org', 'ut voluptatem corrupti velit\nad voluptatem maiores\net nisi velit vero accusamus maiores\nvoluptates quia aliquid ullam eaque'),
(16, 8, 'et omnis dolorem', 'Mallory_Kunze@marie.org', 'ut voluptatem corrupti velit\nad voluptatem maiores\net nisi velit vero accusamus maiores\nvoluptates quia aliquid ullam eaque'),
(17, 9, 'provident id voluptas', 'Meghan_Littel@rene.us', 'sapiente assumenda molestiae atque\nadipisci laborum distinctio aperiam et ab ut omnis\net occaecati aspernatur odit sit rem expedita\nquas enim ipsam minus'),
(18, 9, 'provident id voluptas', 'Meghan_Littel@rene.us', 'sapiente assumenda molestiae atque\nadipisci laborum distinctio aperiam et ab ut omnis\net occaecati aspernatur odit sit rem expedita\nquas enim ipsam minus'),
(19, 10, 'eaque et deleniti atque tenetur ut quo ut', 'Carmen_Keeling@caroline.name', 'voluptate iusto quis nobis reprehenderit ipsum amet nulla\nquia quas dolores velit et non\naut quia necessitatibus\nnostrum quaerat nulla et accusamus nisi facilis'),
(20, 10, 'eaque et deleniti atque tenetur ut quo ut', 'Carmen_Keeling@caroline.name', 'voluptate iusto quis nobis reprehenderit ipsum amet nulla\nquia quas dolores velit et non\naut quia necessitatibus\nnostrum quaerat nulla et accusamus nisi facilis');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `author` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `author`, `title`, `body`) VALUES
(1, 'John', 'sunt aut facere repellat provident', 'quia et suscipit\r\nsuscipit recusandae consequuntur expedita et cum\r\nreprehenderit molestiae ut ut quas totam\r\nnostrum rerum est autem sunt rem eveniet architecto'),
(2, 'John', 'qui est esse', 'est rerum tempore vitae\r\nsequi sint nihil reprehenderit dolor beatae ea dolores neque\r\nfugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis\r\nqui aperiam non debitis possimus qui neque nisi nulla'),
(3, 'Bob', 'ea molestias quasi exercitationem repellat qui ipsa sit aut', 'et iusto sed quo iure\r\nvoluptatem occaecati omnis eligendi aut ad\r\nvoluptatem doloribus vel accusantium quis pariatur\r\nmolestiae porro eius odio et labore et velit aut'),
(4, 'Bob', 'eum et est occaecatii', 'ullam et saepe reiciendis voluptatem adipisci\r\nsit amet autem assumenda provident rerum culpa\r\nquis hic commodi nesciunt rem tenetur doloremque ipsam iure\r\nquis sunt voluptatem rerum illo velit'),
(5, 'Daniel', 'nesciunt quas odio', 'repudiandae veniam quaerat sunt sed\r\nalias aut fugiat sit autem sed est\r\nvoluptatem omnis possimus esse voluptatibus quis\r\nest aut tenetur dolor neque'),
(6, 'Daniel', 'dolorem eum magni eos aperiam quia', 'ut aspernatur corporis harum nihil quis provident sequi\nmollitia nobis aliquid molestiae\nperspiciatis et ea nemo ab reprehenderit accusantium quas\nvoluptate dolores velit et doloremque molestiae'),
(7, 'Dylan', 'magnam facilis autem', 'dolore placeat quibusdam ea quo vitae\nmagni quis enim qui quis quo nemo aut saepe\nquidem repellat excepturi ut quia\nsunt ut sequi eos ea sed quas'),
(8, 'Dylan', 'dolorem dolore est ipsam', 'dignissimos aperiam dolorem qui eum\r\nfacilis quibusdam animi sint suscipit qui sint possimus cum\r\nquaerat magni maiores excepturi\r\nipsam ut commodi dolor voluptatum modi aut vitae'),
(9, 'Ethan', 'nesciunt iure omnis dolorem tempora et accusantium', 'consectetur animi nesciunt iure dolore\nenim quia ad\nveniam autem ut quam aut nobis\net est aut quod aut provident voluptas autem voluptas'),
(10, 'Ethan', 'optio molestias id quia eum', 'quo et expedita modi cum officia vel magni\r\ndoloribus qui repudiandae\r\nvero nisi sit\r\nquos veniam quod sed accusamus veritatis error');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messageId` (`messageId`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`messageId`) REFERENCES `messages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
