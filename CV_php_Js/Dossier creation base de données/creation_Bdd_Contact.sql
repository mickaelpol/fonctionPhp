CREATE DATABASE contact;
USE contact;

CREATE TABLE users (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nom VARCHAR(50),
	prenom VARCHAR(50),
	email VARCHAR(50),
	telephone INT(10),
	commentaire VARCHAR(250)
); 