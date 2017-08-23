<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>calculatrice</title>
</head>
<body>
	
	<p>
		<?php 
		echo "operande=m (pour multiplier)</br>";
		echo "operande=a (pour additionner)</br>";
		echo "operande=s (pour soustraire)</br>";
		echo "operande=d (pour diviser)</br>";
		?>
	</p>

	<?php 

	$nbr1 =$_GET["nbr1"];
	$nbr2 = $_GET["nbr2"];
	$operande = $_GET["operande"];

	// if (is_numeric($nbr1) && is_numeric($nbr2)) {


	// 	if ($operande === "a") {
	// 		$resultat = $nbr1 + $nbr2;
	// 		echo "le resultat de votre addition". " " . $nbr1 . "+" . $nbr2 . " " . "est égal a " . $resultat;
	// 	}

	// 	elseif ($operande === "m"){
	// 		$resultat = $nbr1 * $nbr2;
	// 		echo "le resultat de votre multiplication". " " . $nbr1 . "x" . $nbr2 . " " . "est égal a " . $resultat;
	// 	}

	// 	elseif ($operande === "s"){
	// 		$resultat = $nbr1 - $nbr2;
	// 		echo "le resultat de votre soustraction". " " . $nbr1 . "-" . $nbr2 . " " . "est égal a " . $resultat;
	// 	}

	// 	elseif ($operande === "d"){
	// 		$resultat = $nbr1 / $nbr2;
	// 		echo "le resultat de votre division". " " . $nbr1 . "/" . $nbr2 . " " . "est égal a " . $resultat;
	// 	}

	// 	else {
	// 		echo "tu n'a pas saisie le bon opérateur";
	// 	}

	// }

	// else {
	// 	echo "tu n'a pas entrer deux entier";
	// };

	if(is_numeric($nbr1) && is_numeric($nbr2)){
		
		switch ($operande) {


			case "a":
			$resultat = $nbr1 + $nbr2;
			echo "le resultat de votre addition". " " . $nbr1 . "+" . $nbr2 . " " . "est égal a " . $resultat;
			break;

			case "s":
			$resultat = $nbr1 - $nbr2;
			echo "le resultat de votre soustraction". " " . $nbr1 . "-" . $nbr2 . " " . "est égal a " . $resultat;
			break;

			case "m":
			$resultat = $nbr1 * $nbr2;
			echo "le resultat de votre multiplication". " " . $nbr1 . "x" . $nbr2 . " " . "est égal a " . $resultat;
			break;

			case "d":
			$resultat = $nbr1 / $nbr2;
			echo "le resultat de votre division". " " . $nbr1 . "/" . $nbr2 . " " . "est égal a " . $resultat;
			break;

			case !"a"||"s"||"m"||"d":
			echo "tu fait chier";
		}
	}
	else {
		echo "julien me fait chier a coter wallah";
	}
	?>

</body>
</html>