<?php 

try {

	$bdd = new
	PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', "root", "admin");
	
} catch (Exception $e) {
	
	die('Erreur :' .$e->getMessage());
}

	if (isset($_POST['valid'])) {
		if ($prenom === "") {
			$message = "Veuillez renseigner le champ Prénom";
		}
		elseif ($nom === "") {
			$message = "Veuillez renseigner le champ Nom";
		}
		elseif ($age === "") {
			$message = "Veuillez renseigner le champ Age";
		}
		elseif ($pseudo === "") {
			$message = "Veuillez renseigner le champ Pseudo";
		}
		elseif ($mdp === "") {
			$message = "Veuillez renseigner le champ Mot de passe";
		}
		elseif ($verifMdp === "") {
			$message = "Veuillez renseigner le champ verifMdp";
		}
		elseif ($email === "") {
			$message = "Veuillez renseigner le champ Adresse mail";
		}
		else {
			$message = "Le formulaire à été soumis avec succès";

			$prenom = htmlspecialchars($_POST['prenom']);
			$nom = htmlspecialchars($_POST['nom']);
			$age = htmlspecialchars($_POST['age']);
			$pseudo = htmlspecialchars($_POST['pseudo']);
			$mdp = htmlspecialchars($_POST['mdp']);
			$verifMdp = htmlspecialchars($_POST['VerifMdp']);
			$email = htmlspecialchars($_POST['email']);

			$sql = sprintf('INSERT  INTO uti_utilisateurs (uti_prenom, uti_nom, uti_age, uti_pseudo, uti_password, uti_email) VALUES ("'.$prenom.'", "'.$nom.'", "'.$age.'", "'.$pseudo.'", "'.$mdp.'", "'.$email.'"');
		}
	}

?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 text-center text-uppercase">
			<h1 class="page-header"> <?= $message ?></h1>
		</div>
	</div>
</div>

<?php header("refresh:7;url=index.php?p=accueil");?>