<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fonctionAddition</title>
</head>
<body>

	<p>
		<?php

//-----------------------------Declaration des variables ------------------------------------//

		$number1 = $_GET["number1"];
		$number2 = $_GET["number2"];
		$operateur = $_GET["operateur"];

//------------------------------Definition des fonction --------------------------------------//

		function Addition($number1, $operateur, $number2){
			//Declaration de la fonction addition

			if (is_numeric($number1) && (is_numeric($number2)))
				//je verifie d'abord que les valeurs entré dans number1 et number2 sont des valeurs numérique
			{
				if ($operateur === "A" || "a") {
					//je verifie que l'operateur est égal a la string "A"
					$result = $number1 + $number2;
					return $result;
				}
				else {
					// si l'operateur n'es aucun des deux alors j'affiche l'erreur
					return "tu t'es tromper d'opérateur";
				}
			}
			else 
			// si les valeurs entré ne sont pas numérique alors je renvoi l'erreur ici
			{
				return "Les valeurs entré dans number1 ou number2 ne sont pas des valeurs numérique";
			}
		}

		function Multiplication($number1, $operateur, $number2){
			if (is_numeric($number1) && (is_numeric($number2))) {
				if ($operateur === "M" || "m"){
					$result = $number1 * $number2;
					return $result;
				}
				else {
					return "tu t'es tromper d'opérateur";
				}
			}
			else {
				return "Les valeurs entré dans number1 ou number2 ne sont pas des valeurs numérique";
			}
		}

		function Soustraction($number1, $operateur, $number2){
			if (is_numeric($number1) && (is_numeric($number2))) {
				if ($operateur === "S" || "s") {
					$result = $number1 - $number2;
					return $result;
				}
				else {
					return "erreur d'opérateur";
				}
			}
			else {
				return "Les valeurs entré dans number1 ou number2 ne sont pas des valeurs numérique";
			}
		}

		function Division($number1, $operateur, $number2){
			if (is_numeric($number1) && (is_numeric($number2))) {
				if ($operateur === "D" || "d")  {
					$result = $number1 / $number2;
					return $result;
				}
			}
			else {
				return "Les valeurs entré dans number1 ou number2 ne sont pas des valeurs numérique";
			}
		}

//-------------------------------Stockage des fonction dans une variable -----------------------//

		$resultatAdd = Addition($number1, $operateur, $number2);
		//stockage de la fonction addition dans une variable
		$resultatMult = Multiplication($number1, $operateur, $number2);
		//stockage de la fonction multiplication dans une variable
		$resultatSous = Soustraction($number1, $operateur, $number2);
		//stockage de la fonction multiplication dans une variable
		$resultatDivide = Division($number1, $operateur, $number2);


//--------------------------------Contenu de la phrase réponse -----------------------------------//

		$phraseResultatAdd = "le resultat de" . " " . $number1 . " " . "+" . " " . $number2 . " " . "=" . " " . $resultatAdd . "<br>";
		//je stocke ma phrase resultat de l'addition dans une variable

		$phraseResultatMult = "le resultat de" . " " . $number1 . " " . "x" . " " . $number2 . " " . "=" . " " . $resultatMult. "<br>";
		//je stocke ma phrase resultat de la multiplication dans une variable

		$phraseResultatSous = "le resultat de" . " " . $number1 . " " . "-" . " " . $number2 . " " . "=" . " " . $resultatSous. "<br>";
		//je stocke ma phrase resultat de la soustraction dans une variable

		$phraseResultatDivide = "le resultat de" . " " . $number1 . " " . "/" . " " . $number2 . " " . "=" . " " . $resultatDivide. "<br>";
		//je stocke ma phrase resultat de la division dans une variable

//---------------------------------Affichage des fonctions --------------------------------------//
	
echo $phraseResultatAdd;
echo $phraseResultatSous;
echo $phraseResultatMult;
echo $phraseResultatDivide;

//------------------------------------------------------------------------------------------------//
		?>
	</p>

</body>
</html>