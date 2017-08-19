<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello PHP</title>
</head>
<body>
	
	<p><?php

	$prenom = $_GET["prenom"];
	$nom = $_GET["nom"];
	$age = $_GET["age"];


	echo "bonjour " . $prenom . " " . $nom . " " . $age ;

	?></p>

	<p><?php
	
	$prenom = $_GET["prenom"];
	$nom = $_GET["nom"];
	$age = $_GET["age"];


	echo "bonjour " . $prenom . " " . $nom . " " . $age;

	?></p>


</body>
</html>