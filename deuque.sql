-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Oca 2021, 21:48:42
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

DELIMITER $$
--
-- Yordamlar
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `IncreaseParticipantCountByOne` (IN `qnId` VARCHAR(10))  BEGIN
   DECLARE FIRST int;
   SET FIRST = (SELECT participant_count FROM questionnaires WHERE questionnaire_id = qnId);
   UPDATE questionnaires SET participant_count = FIRST+1 WHERE questionnaire_id = qnId;
   END$$

DELIMITER ;

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
(63781848, '12A45da15u', 1, 'Poor'),
(63781848, '12A45da15u', 2, 'Satisfactory'),
(63781848, '12A45da15u', 3, 'Poor'),
(63781848, '12A45da15u', 4, 'Excellent'),
(63781848, '12A45da15u', 5, 'Very good'),
(63781848, '12A45da15u', 6, 'Strongly disagree'),
(63781848, '12A45da15u', 7, 'Disagree'),
(63781848, '12A45da15u', 8, 'Agree'),
(63781848, '12A45da15u', 9, 'Strongly Agree'),
(63781848, '12A45da15u', 10, 'Neutral'),
(63781848, '12A45da15u', 11, 'Strongly Agree'),
(63781848, '12A45da15u', 12, 'Time offered'),
(723396609, 'PGc2QZ1ewp', 16, 'Tofaş'),
(723396609, 'PGc2QZ1ewp', 17, 'Hayır'),
(723396609, 'PGc2QZ1ewp', 18, 'Hayır'),
(1723326401, 'PGc2QZ1ewp', 16, 'Citroen'),
(1723326401, 'PGc2QZ1ewp', 17, 'Evet'),
(1723326401, 'PGc2QZ1ewp', 18, 'Belki'),
(2125140880, 'PGc2QZ1ewp', 16, 'Mercedes'),
(2125140880, 'PGc2QZ1ewp', 17, 'Evet'),
(2125140880, 'PGc2QZ1ewp', 18, 'Hayır');

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
  `publish_status` tinyint(1) NOT NULL DEFAULT 0,
  `datetime_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `questionnaires`
--

INSERT INTO `questionnaires` (`questionnaire_id`, `user_id`, `questionnaire_type`, `questionnaire_name`, `questionnaire_subtext`, `participant_count`, `publish_status`, `datetime_created`) VALUES
('12A45da15u', 1, 0, 'Course evaluation', 'Please submit feedback regarding the course you have just completed', 1, 1, '2021-01-19 23:24:11'),
('45sdpP-3Ih', 1, 0, 'Event Registiration', 'Event Timing: January 4th-6th, 2016 Event Address: 123 Your Street Your City, ST 12345', 0, 0, '2021-01-19 23:27:11'),
('kfg547-sdp', 2, 0, 'Assesments', 'Lorem Ipsum Lorem ipsum dolor sit amet, consectetur.', 0, 0, '2021-01-19 23:25:45'),
('PGc2QZ1ewp', 2125140880, 0, 'Araba Anketi', 'Arabalar hakkında bir anket', 3, 1, '2021-01-19 21:32:12');

--
-- Tetikleyiciler `questionnaires`
--
DELIMITER $$
CREATE TRIGGER `before_questionnaires_delete` BEFORE DELETE ON `questionnaires` FOR EACH ROW BEGIN
    INSERT INTO questionnaires_archive(questionnaire_id,questionnaire_name,questionnaire_subtext,questionnaire_type,participant_count,datetime_created,publish_status,user_id)
    VALUES(OLD.questionnaire_id,OLD.questionnaire_name,OLD.questionnaire_subtext,OLD.questionnaire_type,OLD.participant_count,OLD.datetime_created,OLD.publish_status,OLD.user_id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `questionnaires_archive`
--

CREATE TABLE `questionnaires_archive` (
  `questionnaire_id` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `questionnaire_type` tinyint(1) NOT NULL DEFAULT 0,
  `questionnaire_name` varchar(40) NOT NULL,
  `questionnaire_subtext` varchar(400) DEFAULT NULL,
  `participant_count` int(11) NOT NULL,
  `publish_status` tinyint(1) NOT NULL DEFAULT 0,
  `datetime_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `questionnaires_archive`
--

INSERT INTO `questionnaires_archive` (`questionnaire_id`, `user_id`, `questionnaire_type`, `questionnaire_name`, `questionnaire_subtext`, `participant_count`, `publish_status`, `datetime_created`) VALUES
('AOC-785BV1', 1, 0, 'Course evaluation', 'Please submit feedback regarding the course you have just completed', 0, 0, '2021-01-19 23:22:13');

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
(1, '12A45da15u', 'Level of effort', 'Level of effort you put into the course', 'Poor', 'Fair', 'Satisfactory', 'Very good', 'Excellent', NULL, NULL, NULL),
(2, '12A45da15u', 'Contribution to learning', 'Level of skill/knowledge at start of course', 'Poor', 'Fair', 'Satisfactory', 'Very good', 'Excellent', NULL, NULL, NULL),
(3, '12A45da15u', 'Contribution to learning', 'Level of skill/knowledge at end of course', 'Poor', 'Fair', 'Satisfactory', 'Very good', 'Excellent', NULL, NULL, NULL),
(4, '12A45da15u', 'Contribution to learning', 'Level of skill/knowledge required to complete the course', 'Poor', 'Fair', 'Satisfactory', 'Very good', 'Excellent', NULL, NULL, NULL),
(5, '12A45da15u', 'Contribution to learning', 'Contribution of course to your skill/knowledge', 'Poor', 'Fair', 'Satisfactory', 'Very good', 'Excellent', NULL, NULL, NULL),
(6, '12A45da15u', 'Skill and responsiveness of the instructor', 'Instructor was an effective lecturer/demonstrator', 'Strongly disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree', NULL, NULL, NULL),
(7, '12A45da15u', 'Skill and responsiveness of the instructor', 'Presentations were clear and organized', 'Strongly disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree', NULL, NULL, NULL),
(8, '12A45da15u', 'Skill and responsiveness of the instructor', 'Instructor stimulated student interest', 'Strongly disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree', NULL, NULL, NULL),
(9, '12A45da15u', 'Skill and responsiveness of the instructor', 'Instructor effectively used time during class periods', 'Strongly disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree', NULL, NULL, NULL),
(10, '12A45da15u', 'Course content', 'Learning objectives were clear', 'Strongly disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree', NULL, NULL, NULL),
(11, '12A45da15u', 'Course content', 'Course content was organized and well planned', 'Strongly disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree', NULL, NULL, NULL),
(12, '12A45da15u', 'Why did you choose this course', '', 'Degree requirement', 'Time offered', 'Interest', NULL, NULL, NULL, NULL, NULL),
(13, '45sdpP-3Ih', 'What days will you attend', '', 'Day 1', 'Day 2', 'Day 3', NULL, NULL, NULL, NULL, NULL),
(14, '45sdpP-3Ih', 'Dietary restrictions', 'Choose for yourself', 'None', 'Vegatarian', 'Vegan', 'Kosher', 'Gluten-free', 'Other', NULL, NULL),
(15, '45sdpP-3Ih', 'I understand that I will have to pay $$ upon arrival', 'Choose if you understand', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'PGc2QZ1ewp', 'Hangi marka size daha yakın?', 'Araba markalarından seçin', 'Mercedes', 'Tofaş', 'Audi', 'Citroen', NULL, NULL, NULL, NULL),
(17, 'PGc2QZ1ewp', 'Arabanız var mı?', '', 'Evet', 'Hayır', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'PGc2QZ1ewp', 'Araba Almayı düşünür müsünüz?', '', 'Evet', 'Hayır', 'Belki', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Görünüm yapısı durumu `searchquestion_view`
-- (Asıl görünüm için aşağıya bakın)
--
CREATE TABLE `searchquestion_view` (
`questionnaire_id` varchar(10)
,`questionnaire_name` varchar(40)
,`questionnaire_subtext` varchar(400)
,`question_id` int(11)
,`question_name` varchar(255)
,`question_subtext` varchar(400)
);

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
  `user_mail` varchar(50) NOT NULL,
  `user_joinDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `user_name`, `user_password`, `name`, `surname`, `user_mail`, `user_joinDate`) VALUES
(1, 1, 'TheLastKedi', '7520', 'Halil İbrahim', 'ÇAĞIRKAN', 'hicagirkan@gmail.com', '2021-01-18 00:00:00'),
(2, 1, 'berhanay', '1', 'Berhan Türkü', 'AY', 'yok', '2021-01-18 00:00:00'),
(3, 1, 'elpeze', '2', 'Gökhan Göksel', 'ELPEZE', 'gokselelpeze@gmail.com', '2021-01-18 00:00:00'),
(4, 1, 'admin', '1', 'admin', 'admin', 'admin@admin.com', '2021-01-19 21:35:45'),
(63781848, 0, 'anonymous', '16541fs5d4d1s1654sdf', 'anonymous', 'anonymous', 'anonymous@anonymous.com', '2021-01-19 21:34:58'),
(723396609, 0, 'anonymous', '16541fs5d4d1s1654sdf', 'anonymous', 'anonymous', 'anonymous@anonymous.com', '2021-01-19 21:34:23'),
(1723326401, 0, 'anonymous', '16541fs5d4d1s1654sdf', 'anonymous', 'anonymous', 'anonymous@anonymous.com', '2021-01-19 21:34:36'),
(2125140880, 0, 'johndoe', '0', 'John', 'Doe', 'john@example.com', '2021-01-19 21:31:13'),
(2125140881, 0, 'jane_awesome', '0', 'Jane', 'Someone', 'jane@example.com', '2021-01-19 21:31:43');

-- --------------------------------------------------------

--
-- Görünüm yapısı `searchquestion_view`
--
DROP TABLE IF EXISTS `searchquestion_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `searchquestion_view`  AS SELECT `qn`.`questionnaire_id` AS `questionnaire_id`, `qn`.`questionnaire_name` AS `questionnaire_name`, `qn`.`questionnaire_subtext` AS `questionnaire_subtext`, `q`.`question_id` AS `question_id`, `q`.`question_name` AS `question_name`, `q`.`question_subtext` AS `question_subtext` FROM (`questionnaires` `qn` join `questions` `q`) WHERE `qn`.`questionnaire_id` = `q`.`questionnaire_id` ;

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
-- Tablo için indeksler `questionnaires_archive`
--
ALTER TABLE `questionnaires_archive`
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
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2125140883;

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
