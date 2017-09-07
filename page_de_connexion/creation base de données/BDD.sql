CREATE DATABASE membres;
USE membres;

CREATE TABLE inscription_membres (

	in_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	in_pseudo VARCHAR(55),
	in_pass VARCHAR(255),
	in_email VARCHAR(255),
	in_date_inscription DATETIME
);