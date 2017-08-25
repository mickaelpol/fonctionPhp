<?php 


	$nom = $_POST['n'];
	$prenom = $_POST['p'];
	$age = $_POST['a'];


	// $reponse = $nom . $prenom . $titre .  $description;
	try {

		$bdd = new 
		PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'admin');

	}
	catch (Exception $e) {

		die('Erreur :' . $e->getMessage());

	}

	$bdd->query('INSERT INTO uti_utilisateur (uti_prenom, uti_nom, uti_age) VALUES ("'.$prenom.'", "'.$nom.'", "'.$age.'")');



	header('location: ../index.php?p=utilisateurs');

?>
