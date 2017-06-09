CREATE DATABASE IF NOT EXISTS `webshop`;
USE `webshop`;

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
	`category_id` int NOT NULL AUTO_INCREMENT,
	`category_description` varchar(99) NOT NULL,
	PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO `categories` (`category_id`, `category_description`) VALUES 
	(1, 'Jurken'),
	(2, 'Broeken'),
	(3, 'Tops'),
	(4, 'Rokken');

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
	`product_id` int NOT NULL AUTO_INCREMENT,
	`product_name` varchar(99) NOT NULL,
	`product_description` text,
	`product_price` decimal(15,5)NOT NULL,
	`category_id` int NOT NULL,
	PRIMARY KEY (`product_id`),
	FOREIGN KEY (`category_id`) REFERENCES `categories`(`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_price`, `category_id`) VALUES
	(1, 'Roze jurk', 'Een hele leuke roze prinsesen jurk.', 9.99, 1),
	(2, 'Joggins broek', 'Een hele comfortabelen broek!', 12.99, 2);