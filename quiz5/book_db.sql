CREATE DATABASE IF NOT EXISTS `book_db`;
USE `book_db`;

CREATE TABLE `books` (
  `book_id` int NOT NULL AUTO_INCREMENT,
  `book_name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `stock` int NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL UNIQUE,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`username`, `password`, `fullname`) VALUES
('admin', 'AAABBB', 'Administrator');