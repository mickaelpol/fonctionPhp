<?php 

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$complementAdresse = $_POST["complementAdresse"];
$CP = $_POST["CP"];
$mail = $_POST["mail"];

if (empty($nom || $prenom || $adresse || $complementAdresse || $CP || $mail)) {
	$message = "Un ou plusieurs champ n'ont pas été remplis !!";
}
else {
	$message = "bonjour," . " " . $nom . " " . $prenom ." ".  "tu habite au" . " ". $adresse . " ". " " . $CP . " " . $complementAdresse . " " . "et ton adresse mail est : " . $mail;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Renvoi formulaire</title>
</head>
<body>

	<p>

	<span><?= $message ?></span>

	</p>
	
</body>
</html>