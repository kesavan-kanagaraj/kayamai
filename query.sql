CREATE TABLE `quizz` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `q_question` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
 `q_description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
 `q_img` blob,
 `created` datetime NOT NULL,
 `modified` datetime NOT NULL,
 `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;