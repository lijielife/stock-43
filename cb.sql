#App sql generated on: 2011-01-11 22:02:40 : 1294776160

DROP TABLE IF EXISTS `companies`;
DROP TABLE IF EXISTS `invoices`;
DROP TABLE IF EXISTS `products`;
DROP TABLE IF EXISTS `sales`;
DROP TABLE IF EXISTS `users`;


CREATE TABLE `companies` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,	PRIMARY KEY  (`id`))	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `invoices` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`date` datetime NOT NULL,
	`description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`company_id` int(11) NOT NULL,
	`total` float NOT NULL,	PRIMARY KEY  (`id`))	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `products` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`invoice_id` int(11) NOT NULL,
	`name` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,	PRIMARY KEY  (`id`))	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `sales` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`product_id` int(11) NOT NULL,
	`invoice_id` int(11) NOT NULL,
	`price` float NOT NULL,
	`unit_product` float NOT NULL,	PRIMARY KEY  (`id`))	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`username` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`password` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,	PRIMARY KEY  (`id`))	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

