<?php 


	$nom = $_GET['n'];
	$prenom = $_GET['p'];
	$titre = $_GET['t'];
	$prix = $_GET['P'];
	$description = $_GET['T'];


	$reponse = $nom . $prenom . $titre . $prix . $description;
	// try {

	// 	$bdd = new 
	// 	PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'admin');

	// }
	// catch (Exception $e) {

	// 	die('Erreur :' . $e->getMessage());

	// }

	// $reponse = $bdd->query("")
?>

<div>
	<p>
		<?= $reponse ?>
	</p>
</div>