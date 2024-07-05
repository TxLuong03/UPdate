SET SQL_MODE= "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time="+7";

CREATE TABLE `account` (
  `id` int(5)  NOT NULL;
  `name` nvarchar(50)  DEFAULT NULL;
  `pass` nvarchar(20)  DEFAULT NULL;
  `email` nvarchar(100) DEFAULT NULL;
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `account` (`id`, `username`, `password`, `email`,) VALUES
(1, 'Luong', '123', 'a@gmail.com', NULL, NULL);
