PHPLearning

Run this project by creating server using the terminal or shell 
	>php -S localhost:8080

You can choose any port number you want.

Everything is controlled by index.php
All the required files are in core/bootstrap.php 
All the front files are located in views folder and is controlled by controller folder, every files has its own controller files in controllers folder.

Database structure: 
	CREATE TABLE IF NOT EXISTS `test`.`users` (
  	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
	) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

