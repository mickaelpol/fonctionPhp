<?php 


	$nom = htmlspecialchars($_POST['n']);
	$prenom = htmlspecialchars($_POST['p']);
	$age = htmlspecialchars($_POST['a']);


	// $reponse = $nom . $prenom . $titre .  $description;
	try {

		$bdd = new 
		PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'admin');

	}
	catch (Exception $e) {

		die('Erreur :' . $e->getMessage());

	}

	$sql = sprintf('INSERT INTO uti_utilisateur (uti_prenom, uti_nom, uti_age) VALUES ("'.$prenom.'", "'.$nom.'", "'.$age.'")');

	$bdd->query($sql);



	header('location: ../index.php?p=utilisateurs');

?>
