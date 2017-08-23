<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tranche</title>
</head>
<body>
	
	<?php 

	$age = $_GET["age"];

	if (is_numeric($age)) {


		if ($age > 0 && $age <= 18){

			echo "tu est mineur";
		}
		elseif ($age >= 18 && $age < 65){
			echo "tu est majeur";
		}
		elseif ($age >= 65 && $age < 100) {
			echo "tu est retraité";
		}
		else {
			echo "YOU ARE DEAD";
		}
	}
	else {
		echo "ce n'est pas un entier";
	}

	?>

</body>
</html>