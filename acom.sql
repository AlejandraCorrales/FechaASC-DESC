SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `date` (
  `day` int(2) DEFAULT NULL,
  `month` int(2) DEFAULT NULL,
  `year` int(4) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

INSERT INTO `date` (`day`, `month`, `year`) VALUES
(1, 10, 2025),
(15, 3, 2024),
(7, 12, 2023);