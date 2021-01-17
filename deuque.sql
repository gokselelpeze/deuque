-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Oca 2021, 15:41:46
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `deuque`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `answers`
--

CREATE TABLE `answers` (
  `user_id` int(11) NOT NULL,
  `questionnaire_id` varchar(10) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `answers`
--

INSERT INTO `answers` (`user_id`, `questionnaire_id`, `question_id`, `answer`) VALUES
(2, '17dd3a9f-4', 1, 'Tofaş'),
(2, '17dd3a9f-4', 2, 'renksiz'),
(3, '17dd3a9f-4', 1, 'Mercedes'),
(3, '17dd3a9f-4', 2, 'siyah');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `questionnaires`
--

CREATE TABLE `questionnaires` (
  `questionnaire_id` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `questionnaire_type` tinyint(1) NOT NULL DEFAULT 0,
  `questionnaire_name` varchar(40) NOT NULL,
  `questionnaire_subtext` varchar(400) DEFAULT NULL,
  `participant_count` int(11) NOT NULL,
  `publish_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `questionnaires`
--

INSERT INTO `questionnaires` (`questionnaire_id`, `user_id`, `questionnaire_type`, `questionnaire_name`, `questionnaire_subtext`, `participant_count`, `publish_status`) VALUES
('12334123', 1, 0, 'Deneme Anketi', 'asfkjsafl', 0, 0),
('17dd3a9f-4', 1, 0, 'aknetinci anket', 'ilk anketimiz', 0, 0),
('333ce993-4', 1, 0, 'anket iki', 'ikinci anketimiz', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `questionnaire_id` varchar(10) NOT NULL,
  `question_name` varchar(255) NOT NULL,
  `question_subtext` varchar(400) NOT NULL,
  `option_1` varchar(255) DEFAULT NULL,
  `option_2` varchar(255) DEFAULT NULL,
  `option_3` varchar(255) DEFAULT NULL,
  `option_4` varchar(255) DEFAULT NULL,
  `option_5` varchar(255) DEFAULT NULL,
  `option_6` varchar(255) DEFAULT NULL,
  `option_7` varchar(255) DEFAULT NULL,
  `option_8` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `questions`
--

INSERT INTO `questions` (`question_id`, `questionnaire_id`, `question_name`, `question_subtext`, `option_1`, `option_2`, `option_3`, `option_4`, `option_5`, `option_6`, `option_7`, `option_8`) VALUES
(1, '17dd3a9f-4', 'Hangisini tercih ederdin?', 'Araba sorusu', 'Mercedes', 'Audi', 'Tofaş', NULL, NULL, NULL, NULL, NULL),
(2, '17dd3a9f-4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras scelerisque, libero mattis dignissim ullamcorper, ex dolor laoreet tortor, in consectetur libero lacus ut mi.', 'aşağıdan seçin', 'kırmızı', 'mavi', 'pembe', 'yeşil', 'mor', 'beyaz', 'siyah', 'renksiz'),
(3, '17dd3a9f-4', 'Elpezenin adı nedir', 'göksel bence', 'gökhan', 'göksel', NULL, NULL, NULL, NULL, NULL, NULL),
(4, '333ce993-4', 'Berhanı seviyor musunuz', '', 'evet', 'hayır', 'belki', NULL, NULL, NULL, NULL, NULL),
(5, '333ce993-4', 'Hangisini tercih edersiniz?', 'Boya markalarından seçin', 'filli boya', 'dyo', 'marshall', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT 0,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `user_mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `user_name`, `user_password`, `name`, `surname`, `user_mail`) VALUES
(1, 1, 'TheLastKedi', '7520', 'Halil İbrahim', 'ÇAĞIRKAN', 'hicagirkan@gmail.com'),
(2, 0, 'berhanay', '1', 'Berhan Türkü', 'AY', 'yok'),
(3, 0, 'elpeze', '123461fsdajf__?=safk', 'Gökhan Göksel', 'ELPEZE', 'gokselelpeze@gmail.com'),
(4, 0, 'deneme', 'a', '', '', 'a@a.com'),
(5, 0, 'johndoe', '1', 'John', 'Doe', 'johndoe@gmail.com'),
(6, 0, 'userdeneme', '1', 'deneme', 'denemeoğlu', 'abc@a.co'),
(7, 0, 'asd', '123', 'abc', 'abc', 'sadf'),
(8, 0, 'asdasd', '123', 'asd', 'asd', 'asddsa'),
(9, 0, 'asdasd', 'asd', 'asd', 'asdasd', 'sadasdsa'),
(10, 0, 'bismillah', '123', 'bismillah', 'bismillahoğlu', 'bismillah@bism.com'),
(11, 0, 'asdasd', '12', 'abc', 'abcd', 'fadsfas'),
(12, 0, 'sadsad', '123', 'asdsad', 'sdasad', 'asdqsda@dsaşd.com');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`user_id`,`questionnaire_id`,`question_id`),
  ADD KEY `questionnaire_id` (`questionnaire_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Tablo için indeksler `questionnaires`
--
ALTER TABLE `questionnaires`
  ADD PRIMARY KEY (`questionnaire_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Tablo için indeksler `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `questionnaire_id` (`questionnaire_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`questionnaire_id`) REFERENCES `questionnaires` (`questionnaire_id`),
  ADD CONSTRAINT `answers_ibfk_3` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`);

--
-- Tablo kısıtlamaları `questionnaires`
--
ALTER TABLE `questionnaires`
  ADD CONSTRAINT `questionnaires_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Tablo kısıtlamaları `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`questionnaire_id`) REFERENCES `questionnaires` (`questionnaire_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
