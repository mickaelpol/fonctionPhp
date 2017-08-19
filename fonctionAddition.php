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
				if ($operateur === "A") {
					//je verifie que l'operateur est égal a la string "A"
					
					$result = $number1 + $number2;
					return $result;
				}
				elseif ($operateur === "a"){
					//je verifie que l'operateur soit égale a la string "a"
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
				echo "Les valeurs entré dans number1 ou number2 ne sont pas des valeurs numérique";
			}

		}

		function Multiplication($number1, $operateur, $number2){
			if (is_numeric($number1) && (is_numeric($number2))) {

				if ($operateur === "M") {
					$result = $number1 * $number2;
					return $result;
				}

				elseif ($operateur === "m"){
					$result = $number1 * $number2;
					return $result;
				}
			}
			else {
				echo "Les valeurs entré dans number1 ou number2 ne sont pas des valeurs numérique";
			}
		}

//-------------------------------Stockage des fonction dans une variable -----------------------//

		$resultatAdd = Addition($number1, $operateur, $number2);
		//stockage de la fonction addition dans une variable
		$resultatmult = Multiplication($number1, $operateur, $number2);

//--------------------------------Contenu de la phrase réponse ---------------------------------//

		$phraseResultatAdd = "le resultat de" . " " . $number1 . " " . "+" . " " . $number2 . " " . "=" . " " . $resultatAdd . "<br>";
		//je stocke ma phrase resultat de l'addition dans une variable

		$phraseResultatMult = "le resultat de" . " " . $number1 . " " . "x" . " " . $number2 . " " . "=" . " " . $resultatmult. "<br>";

//---------------------------------Affichage des fonctions --------------------------------------//
		
		switch ($operateur){

			case "A" || "a":
			echo $phraseResultatAdd;
			break;

			case "M" || "m":
			echo $phraseResultatMult;
			break;
		}

//------------------------------------------------------------------------------------------//
		?>
	</p>

</body>
</html>