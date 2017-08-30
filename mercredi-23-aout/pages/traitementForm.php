<?php 


	$nom = $_POST['n'];
	$prenom = $_POST['p'];
	$titre = $_POST['t'];
	$prix = $_POST['P'];
	$description = $_POST['T'];
	var_dump($nom);


	// $reponse = $nom . $prenom . $titre .  $description;
	try {

		$bdd = new 
		PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'admin');

	}
	catch (Exception $e) {

		die('Erreur :' . $e->getMessage());

	}

	$bdd->query('INSERT INTO ann_annonce, uti_utilisateur (ann_titre, ann_description) VALUES ("'.$titre.'", "'.$description.'", "'.$prix.'")');




?>

