<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tableau</title>
</head>
<body>

	<?php 

// $tab[0] = "jean";
// $tab[1] = "michel";
// $tab[2] = "groot";
// $tab[3] = "mikcael";
// $tab[4] = "mickey";

//for ($i=0; $i < count($tab) ; $i++) { 
// 	echo $tab[$i] . "</br>";
// }

	$tab = array (
		"prenom" => "mickael",
		"nom" => "pol",
		"age" => 28,
		"location" => "toulouse",
		);

	foreach ($tab as $key => $value) {
		echo $key . "<br />";
	}

	?>
	
</body>
</html>