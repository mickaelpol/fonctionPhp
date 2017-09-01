<?php 

try {

	$bdd = new 
	PDO('mysql:host=localhost;dbname=contact;charset=utf8', "root", "admin");
	
} catch (Exception $e) {

	die('Erreur :' . $e->getMessage());
	
}


if (isset($_POST['validez'])) {
	if ($_POST['P'] === "") {
		$message = "Veuillez saisir votre prénom";
	}
	elseif ($_POST['N'] === "") {
		$message = "Veuillez saisir votre nom";
	}
	elseif ($_POST['M'] === "") {
		$message = "Veuillez saisir votre adresse mail";
	}
	elseif ($_POST['T'] === "") {
		$message = "Veuillez saisir votre numéro de téléphone";
	}
	elseif ($_POST['A'] === "") {
		$message = "Veuillez saisir du texte dans le champ commentaire";
	}
	else {

		$message="Votre formulaire à été soumis avec succés je vous recontacterais au plus vite, Merci";

		$prenom = htmlspecialchars($_POST['P']);
		$nom = htmlspecialchars($_POST['N']);
		$mail = htmlspecialchars($_POST['M']);
		$telephone = htmlspecialchars($_POST['T']);
		$area = htmlspecialchars($_POST['A']);

		$sql = sprintf('INSERT INTO users (nom, prenom, email, telephone, commentaire) VALUES ("'.$nom.'", "'.$prenom.'", "'.$mail.'", "'.$telephone.'", "'.$area.'") ');

		$bdd->query($sql);
	}
}

?>

<div class="container  back-flou-xs marge-top">
	<div class="row">
		<div class="col-xs-12 text-center">
			<h1><?= $message ?></h1>
		</div>
	</div>

	<div class="row marge-top-xs">
		<div id="loader" class="text-center marge-bot-xs col-xs-4 col-xs-offset-4 from-control">
			<img src="image/loading.GIF" alt="GIF de chargement">
		</div>
	</div>
</div>

<?php header("refresh:7;url=index.php?p=contact");?>
