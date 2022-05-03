CREATE TABLE `guests` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `surname` varchar(255),
  `name` varchar(255),
  `email` varchar(255),
  `phone_number` varchar(255),
  `message` varchar(255),
  `package_id` int
);

CREATE TABLE `destinations` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `img` varchar(300),
  `title` varchar(100),
  `icon` varchar(300),
  `text` varchar(300),
  `package` varchar(300)
);

CREATE TABLE `packages` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `img` varchar(300),
  `icon` varchar(300),
  `title` varchar(100),
  `location` varchar(50),
  `type` varchar(100),
  `oldPrice` float,
  `newPrice` float,
  `description` varchar(500),
  `destination_id` int
);

ALTER TABLE `guests` ADD FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`);

ALTER TABLE `packages` ADD FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`);
