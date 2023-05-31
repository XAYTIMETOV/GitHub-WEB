CREATE TABLE `addcard` (
  `id` int(255) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `card_number` int(255) NOT NULL,
  `cvv` int(255) NOT NULL,
  `card_name` varchar(255) NOT NULL
)