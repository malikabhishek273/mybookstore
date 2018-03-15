-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2018 at 11:48 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` blob NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'Introduction to Algorithms,<h5 style=\"font-size:150%;font-color:darkgrey; margin-top:15px;\"> 3Ed. (International Edition)<h5>', 729, 0x6974656d2d312e6a7067, '<br><br><p class=\'description\'>A new edition of the essential text and professional reference, with substantial new material on such topics as vEB trees, multithreaded algorithms, dynamic programming, and edge-based flow.Some books on algorithms are rigorous but incomplete; others cover masses of material but lack rigor. Introduction to Algorithms uniquely combines rigor and comprehensiveness. The book covers a broad range of algorithms in depth, yet makes their design and analysis accessible to all levels of readers. Each chapter is relatively self-contained and can be used as a unit of study. The algorithms are described in English and in a pseudocode designed to be readable by anyone who has done a little programming. The explanations have been kept elementary without sacrificing depth of coverage or mathematical rigor.The first edition became a widely used text in universities worldwide as well as the standard reference for professionals. The second edition featured new chapters on the role of algorithms, probabilistic analysis and randomized algorithms, and linear programming. The third edition has been revised and updated throughout. It includes two completely new chapters, on van Emde Boas trees and multithreaded algorithms, substantial additions to the chapter on recurrence (now called \"Divide-and-Conquer\"), and an appendix on matrices. It features improved treatment of dynamic programming and greedy algorithms and a new notion of edge-based flow in the material on flow networks. Many new exercises and problems have been added for this edition. The international paperback edition is no longer available; the hardcover is available worldwide.</p>'),
(2, 'Let Us C', 200, 0x6974656d2d322e6a7067, '<br><br><p class=\'description\'>For C language programmers, it is must to master the complexity of the language to deal with programming software in engineering, gaming and other fields. In order to understand each concept of the C language, it is necessary to follow a good reference book in easy-to-understand text.\r\n\r\nKeeping lucidity and simplicity in mind, Yashavant P Kanetkar, the author of the book, has compiled it to be one of the most interesting C programming books for C language learners. The book begins with the basic knowledge of different concepts and further leads to advanced levels. This means the book will provide complete knowledge to the readers from basic to complex programming parts.\r\n\r\nIt covers various topics that could be easily understood with the help of examples given with each programming concept. Besides, the book also features several descriptive details about console input, C preprocessor, arrays, functions, strings and pointers. Explained in comprehensive manner, the book aims to provide more brief information to all C programming beginners as well as established programmers.\r\n\r\nLet Us C can help the readers to prepare not only for the theoretical exams but for the practical exams as well. There is also a separate section in the book that includes most frequently asked questions in job interviews. Hence, it can be a good reference manual for preparing job interviews as well.</p>\r\n\r\n<p style=\"font-size:120%;\"><b><b>About the Author</b></b></p>\r\n<p class=\'description\'>Yashavant Kanetkar is a computer science author of Indian origin and is well known for his work on programming languages. He obtained his B.E. degree from VJTI, Mumbai and completed his M.Tech from IIT Kanpur. He was awarded the \'Microsoft Most Valuable Profession\' by Microsoft. He is currently the Director of KICIT and KSET. He also speaks on various technology subjects and has written columns for publications such as Developer 2.0 and Express Computers.</p>'),
(3, 'Electronic Devices and Circuits<br> <h5 style=\"color: darkgrey; font-size: 150%; margin-top: 12px;\">Paperback-23 Jun 2012</h5>', 128, 0x6974656d2d332e6a7067, '<br><br><p class=\'description\'>This book is meant for the undergraduate students of Electronics, Electrical, Instrumentation and Computer Science Engineering for the courses on Basic Electronics/Electronic Devices and Circuits. It gives detailed description of the operation and characteristics of modern active and passive electronic devices. Logical organization of the chapters, simple language, wide variety of problems with their step by step solutions for every concept makes this book a perfect offering on the subject.</p>'),
(4, '<h2 style=\"color: black;\">Digital Signal Processing: Second Edition </h2><br><h5 style=\"font-size:150%;font-color:darkgrey;margin-top:8px;\">Paperback  13 Aug 2009</h5>', 622, 0x6974656d2d342e6a7067, '<br><br><p class=\'description\'>This book is meant for the undergraduate students of Electronics, Electrical, Instrumentation and Computer Science Engineering for the courses on Basic Electronics/Electronic Devices and Circuits. It gives detailed description of the operation and characteristics of modern active and passive electronic devices. Logical organization of the chapters, simple language, wide variety of problems with their step by step solutions for every concept makes this book a perfect offering on the subject.</p>'),
(5, 'Playing It My Way<p> <h5 style=\"font-size:150%;font-color:darkgrey;margin-top:15px;\">Paperback  16 Dec 2015</h5></p>', 280, 0x6974656d2d352e6a7067, '<br><br><p class=\'description\'>This is the autobiography of legend and the renowned personality in cricket, Sachin Tendulkar. Sachin Tendulkar played for good 24 years and retired in 2013. In this book Sachin talks about his journey from his first Test match at the age of 16 to his 100th international century and the final farewell. He was awarded with India\'s highest civilian honor, Bharat Ratna Award, on the day of his retirement.\r\n\r\nThe book talks about how a young Mumbai school boy channeled his energies into the game. As a result of this he was the record breaker batsman in school. Sachin is the highest run scorer in the world’s history. He always scored more runs and made more centuries than any other player, in both Tests and one-day games. For him cricket was much more than scoring runs. Sachin Tendulkar has always remained a very private man, devoted to his family and his country. Now, for the first time, he provides a great kook through his personal life and gives a frank account of his sporting life.</p>\r\n\r\n<p style=\"font-size:120%;\"><b>About the author</b></p>\r\n<p class=\'description\'>Sachin Tendulkar is the former Indian cricketer and the captain who is known for as the greatest all time batsman. He took up cricket at the age of elevenTendulkar received the Arjuna Award in 1994 for his outstanding sporting achievement, the Rajiv Gandhi Khel Ratna award in 1997, India\'s highest sporting honour and the Padma Shri and Padma Vibhushan awards in 1999 and 2008, respectively, India\'s fourth and second highest civilian awards. After a few hours of his final match on 16 November 2013, the Prime Minister\'s Office announced the decision to award him the Bharat Ratna, India\'s highest civilian award. He is the youngest recipient to date and the first ever sportsperson to receive the award. He also won the 2010 Sir Garfield Sobers Trophy for cricketer of the year at the ICC awards.</p>'),
(6, 'Modern Architecture <p><h5 style=\"font-size:150%;font-color:darkgrey;margin-top:15px;\">A Z Hardcover  15 Aug 2010</h5></p>', 3009, 0x6974656d2d362e6a7067, '<br><br><p class=\'description\'>Taken seven years in the making, this title features 600 entries, 5,200 illustrations...This is an unprecedented architecture encyclopedia. Unlike most architecture encyclopedias, which tend to concentrate more on buildings and floor plans than their designers, this tome puts the architects in the spotlight, profiling individuals so that readers can get a clear overview of their bodies of work. Each architect\'s entry features a portrait, quote, and short biography as well as a description of important works, historical context, and general approach; illustrations include numerous drawings, photographs, and floor plans. The book\'s A to Z entries cover not only architects but also groups, movements, and styles from the 18th to the 21st centuries. With 600 entries and 5,200 illustrations, \"The A-Z of Modern Architecture\" is a comprehensive resource that no architecture professional, fan, or student should be without. It features: 566 architects from the 18th to the 21st century; architect portrait, quote, and short biography; description of important works, historical context, and general approach; and, numerous drawings, photographs, and plans.</p>'),
(7, 'Database System Concepts <p><h5 style=\"font-size:150%;font-color:darkgrey;margin-top:15px;\">Paperback 1 Dec 2013</h5></p>', 604, 0x6974656d2d372e6a706567, '<br><br><p class=\'description\'>The sixth edition of Database System Concepts is popularly considered to be one of the cornerstone texts of database education. The basic and fundamental concepts are presented in an intuitive manner, and is designed to help students begin working with databases as soon as possible.\r\n\r\nThe book commences with a basic introduction, which discusses fundamental topics like Database Languages, Database Users and Administrators, Database Design, and Data Storage and Querying. Then, the book is segregated into ten section. Relational Databases, System Architecture, Speciality Databases, and Transaction Management are a few. Chapters like Object-Relational Mapping, Relevance Ranking Using Terms, and Distributed Data Storage are discussed in detail. This edition also provides a revised coverage of SQL, with greater attention to variants of SQL in actual systems and SQL features. There is also new material on support vector machines, and validation of classifiers.\r\n\r\nThe text supplied in this book emphasises applications, practical issues, and implementation, coupled with a comprehensive coverage of the key theoretical concepts in a clear manner. Algorithms and concepts are presented in a general setting, while they is not tied to any database system in particular, annotations and variations specific to particular database systems are provided. The only prerequisites to getting the most out of the book are a familiarity with computer organisation, basic data structures, and a high-level programming language.\r\n\r\nThis sixth edition of Database System Concepts was published by Tata McGraw - Hill Education in 2013, and it is available in paperback.</p>\r\n\r\n<p style=\"font-size:120%;\"><b>Key Features:</b></p>\r\n\r\n<p class=\'description\'>This edition contains a new running example of a university database, which is more motivating and intuitive for students.\r\nMore complex design tradeoffs in the database-design chapters are illustrated in this edition.</p>\r\n<p style=\"font-size:120%;\"><b>About the authors:</b></p>\r\n<p class=\'description\'>Abraham Silberschatz is an Israeli computer scientist and author. He procured his PhD in computer science from the State University of New York (SUNY) at Stony Brook. Henry F Korth is a professor of computer science and engineering at Lehigh University. He procured his PhD from Princeton University. S Sudarshan is an Indian professor and head of the department of computer science and engineering at IIT, Bombay. His primary research area is database systems, and he is a member of the Board of Trustees of the VLDB Foundation.</p>'),
(8, 'Ratanlal & Dhirajlal The IPC <p><h5 style=\"font-size:150%;font-color:darkgrey;margin-top:15px;\">Paperback  27 Jun 2017<h5><p>', 693, 0x6974656d2d382e6a706567, '<br><br><p class=\'description\'>Ratanlal and Dhirajlal\'s The Indian Penal Code has served the legal profession and all those associated with it, for more than a century. An evergreen classic, this book is amongst the most authoritative and leading commentaries on the subject. It adopts an integrated approach and the provisions of the Code of Criminal Procedure, 1973 and the Indian Evidence Act 1872, are referred to wherever necessary for better understanding of the complex legal topics.\r\n\r\nThe predominant changes in criminality has led to the evolvement of various new criminal statutes concerning different subjects, yet the Indian Penal Code, the foremost statute in the field of criminal law stands resolute. The 35th edition of the work has been extensively and meticulously revised taking into account the changes brought about by recent legislative amendments as well as judgments of the higher courts. Apart from incorporating notable judgments of the Supreme Court and various High Courts, important topics such as the following have been discussed separately:\r\n Scope of application of general exceptions during investigation.\r\n Constitutionality of death penalty in the light of the Nirbhaya case.\r\n Application of men\'s rea to legal entities.\r\n\r\nAuthenticity, originality and reliability have always been the hallmarks of this publication and every possible care has been taken in this edition to maintain the original excellence, style and quality of the work. As has been the hallmark of previous editions, the current edition too offers a great help to students and professionals, when they require a quick overview, in the form of a summary at the end of the work. The book is an invaluable source of reference for the widest possible range of readers including students, academics, legal practitioners, judges, administrators, public prosecutors, police officers and police trainees. \r\nRevised by Justice K T Thomas and M A Rashid.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_ratings`
--

CREATE TABLE `tbl_products_ratings` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ratings_score` int(11) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products_ratings`
--

INSERT INTO `tbl_products_ratings` (`product_id`, `user_id`, `ratings_score`, `review`, `time`) VALUES
(1, 12, 5, 'aa', '2018-02-09 04:14:16'),
(1, 19, 1, 'aa', '0000-00-00 00:00:00'),
(2, 20, 5, 'yesn', '0000-00-00 00:00:00'),
(1, 9, 5, 'Done', '0000-00-00 00:00:00'),
(2, 21, 4, 'yesn', '0000-00-00 00:00:00'),
(8, 20, 5, 'YEs', '0000-00-00 00:00:00'),
(3, 5086, 4, 'mm', '0000-00-00 00:00:00'),
(1, 1679, 3, 'karade bhai!!!', '0000-00-00 00:00:00'),
(1, 167849, 4, 'a', '0000-00-00 00:00:00'),
(1, 16785, 1, 'sahi chal rha he', '0000-00-00 00:00:00'),
(1, 5785, 5, 'hih', '0000-00-00 00:00:00'),
(1, 101, 2, 'hi', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `firstname`, `lastname`, `email`, `password`) VALUES
(10, 'Shahrukh Khan', '', '', ''),
(30, '', '', 'ASASD', 'test'),
(29, 'D', 'S', 'root', 'test'),
(14, 'abhishek', 'malik', 'malik@g.c', 'divis hero'),
(28, 'sadsd', 'sadadsasdas', 'root', 'test'),
(26, 'D', 'S', 'malikchutiya@shweta.com', 'shweta'),
(27, '', '', 'root', 'test'),
(23, 'abhishek', 'malik', 'amalik123@gmail.com', 'test'),
(22, 'divyansh', 'singghal', 'abc@gmi.c', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products_ratings`
--
ALTER TABLE `tbl_products_ratings`
  ADD PRIMARY KEY (`product_id`,`user_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
