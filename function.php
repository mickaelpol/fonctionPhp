<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fonction PHP</title>
</head>
<body>

	<?php 

	$number1 = $_GET["number1"]; 
	//super variable globale qui recupere la premiere valeurs
	$number2 = $_GET["number2"];
	//super variable globale qui recupere la deuxième valeurs
	$operateur = $_GET["operateur"];
	//super variable globale qui recupere l'operateur 

	function Operation ($number1, $operateur, $number2){ 
	//fonction qui va effectuer l'opération en fonction de l'opérateur qu'on y placera en valeurs

		if (is_numeric($number1) && (is_numeric($number2))) {
		 //je verifie si les valeurs entré sont des entiers
			
			switch ($operateur) { 
			//je verifie chaque valeurs de l'operateur

			case "a": 
			//si on entre la valeur 'a' en operateur
			$result = $number1 + $number2;
			//alors je fait mon addition stocké dans une variable $result
			return $result;
			break;

			case "s": 
			//si on entre la valeur 's' en operateur
			$result = $number1 - $number2;
			//alors je fait ma soustraction stocké dans une variable $result
			return$result;
			break;

			case "m": 
			//si on entre la valeur 'm' en operateur
			$result = $number1 * $number2;
			//alors je fait ma multiplication stocké dans une variable $result
			return $result;
			break;

			case "d":
			 //si on entre la valeur 'd' en operateur
			$result = $number1 / $number2;
			 //alors je fait ma division stocké dans une variable $result
			return $result;
			break;

			case !"a"||"s"||"m"||"d":
			 //si la valeur entré est autre que "a" "s" "m" "d" 
			return "tu n'a pas entrer le bon opérateur";
			 //alors je renvoi l'erreur
			break;
		}
	}

	else {
		echo "ceci n'est pas un entier";
		 //si les valeurs entré ne sont pas des entier alors j'afficher cette erreur
	}
}

$resultatOperation = Operation ($number1, $operateur, $number2); 
//je stocke ma fonctiond dans une variable

?>
<p>
	<?php
	echo "le resultat de " . $number1 ." ". $operateur ." ". $number2 ." ". "=" ." ". $resultatOperation;
	?> 
	<!-- j'affiche une string + le nombre1 + l'opérateur + le nombre2 + le égale en string et enfin le résultat grace a ma fonction stocké dans la variable  -->
</p>

</body>
</html>