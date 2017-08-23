<?php 


	$nom = $_POST['n'];
	$prenom = $_POST['p'];
	$titre = $_POST['t'];
	$prix = $_POST['P'];
	$description = $_POST['T'];


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