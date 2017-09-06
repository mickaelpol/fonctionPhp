<?php 

if (isset($_POST['reload'])) {
	header("refresh:0;url=index.php?p=Inscription");
}

//fonction qui verifie que les inputs soit remplis !
function testInputRemplis($fichier){
	if (empty($_POST[$fichier])) {
		return "<span class='text-danger'>" ."Le champ " .$fichier. " est vide <br>" . "</span>";
	}
}

if (isset($_POST['valid'])) {

	$message= "";
	$erreur = "";
		//verification de la longueur et de la correspondance des deux mots de passe
	if (strlen($_POST['mdp']) < 8 ) {
		$erreur .= "La longueur du mot de passe doit être supérieur à 8 caractère <br>";
	}

	if ($_POST['mdp'] != $_POST['VerifMdp']) {
		$erreur .= "Les deux mots de passe ne sont pas identiques <br>";
	}
	$erreurPrenom = ": " .testInputRemplis('prenom');
	$erreurNom =  ": " . testInputRemplis('nom');
	$erreurAge =  ": " .testInputRemplis('age');
	$erreurPseudo = ": " . testInputRemplis('pseudo');
	$erreurEmail = ": " . testInputRemplis('email');

	// condition de validations du formulaire 
	if ( empty($erreur)) {
		
		try {
			$bdd = new 
			//connection a la BDD
			PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', "root", "admin");
		} 
		catch (Exception $e) {
			//si erreur lance l'affichage de l'erreur et stoppe la suite
			die('Erreur: ' .$e->getMessage());
		}

		//préparation des valeurs a insérer (inputs) + cryptage du password
		$prenom = htmlspecialchars($_POST['prenom']);
		$nom = htmlspecialchars($_POST['nom']);
		$age = htmlspecialchars($_POST['age']);
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$email = htmlspecialchars($_POST['email']);
		$password = htmlspecialchars(password_hash($_POST['mdp'], PASSWORD_DEFAULT));

		// preparation de la requete 
		$sql = sprintf('INSERT  INTO uti_utilisateur(uti_prenom, uti_nom, uti_age, uti_pseudo, uti_password, uti_email) VALUES ("%s", "%s", "%s", "%s", "%s", "%s");', $prenom, $nom, $age, $pseudo, $password, $email);

		//execution et verification 
		if ($bdd->exec($sql) ==1 ) {

			$message = "<div class='container-fluid text-center'" . "<p><span class='text-success text-uppercase'> inscription validé </span></p>" . "<br>" . "<div class='loader center-block marge-bot'></div>" . "</div>";

			header("refresh:5;url=index.php?p=Inscription");
		} 
		else {
			$message = "<div class='container-fluid text-center'" . "<p><span class='text-danger text-uppercase'> le pseudo ou l'email est déjà utilisé </span></p>"."</div>";
		}
	}

}


?>
<div class="container-fluid bg-primary">
	<div class="row">
		<div class="col-xs-12 text-center text-uppercase page-header">
			<h1>inscription</h1>
		</div>
	</div>
</div>


<div class="container">
	<form class="form-horizontal" method="POST" action="index.php?p=Inscription">
		<div class="form-group">

			<!-- prenom -->
			<div class="col-xs-6 text-center">
				<label for="prenom">Prénom <?= isset($erreurPrenom) ? $erreurPrenom : "" ?></label>
				<input name="prenom" title="" autofocus="autofocus" class="form-control" id="prenom" type="text" value="<?= isset($_POST['prenom']) ? $_POST['prenom'] : "" ?>">
			</div>

			<!-- Nom -->
			<div class="col-xs-6 text-center">
				<label for="nom">Nom <?= isset($erreurNom) ? $erreurNom : ""?></label>
				<input name="nom" class="form-control" type="text" id="nom" value="<?= isset($_POST['nom']) ? $_POST['nom'] : "" ?>">
			</div>

			<!-- age -->
			<div class="col-xs-6 text-center">
				<label for="age">Age <?= isset($erreurAge) ? $erreurAge : ""?></label>
				<input name="age" class="form-control" type="number" min="1" max="150" id="age" value="<?= isset($_POST['age']) ? $_POST['age'] : "" ?>">
			</div>

			<!-- pseudo -->
			<div class="col-xs-6 text-center">
				<label for="pseudo">Pseudo <?= isset($erreurPseudo) ? $erreurPseudo : ""?></label>
				<input name="pseudo" class="form-control" type="text" id="pseudo" value="<?= isset($_POST['pseudo']) ? $_POST['pseudo'] : "" ?>">
			</div>

			<!-- MDP -->
			<div class="col-xs-6 text-center">
				<label for="mdp">Mot de passe</label>
				<input name="mdp" class="form-control" type="password" id="mdp" value="<?= isset($_POST['mdp']) ? $_POST['mdp'] : "" ?>">
			</div>

			<!-- Verif MDP -->
			<div class="col-xs-6 text-center">
				<label for="VerifMdp">(Verification) Mot de passe</label>
				<input name="VerifMdp" class="form-control" type="password" id="VerifMdp" value="<?= isset($_POST['VerifMdp']) ? $_POST['VerifMdp'] : "" ?>">
			</div>

			<!-- Email -->
			<div class="col-xs-6 text-center">
				<label for="email">Adresse mail <?= isset($erreurEmail) ? $erreurEmail : ""?></label>
				<input name="email" class="form-control" type="text" id="email"
				value="<?= isset($_POST['email']) ? $_POST['email'] : "" ?>"
				pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
			</div>

		</div>
		<div class="modal-footer">
			<div class="row">
				<div class="col-xs-2">
					<input type="submit" name="reload" class="btn btn-danger" value="Recharger la page" >
				</div>
				<div class="col-xs-6 col-xs-offset-4">
					<input type="reset" class="btn btn-md btn-warning">
					<input type="submit" name="valid" class="btn btn-md btn-success">
				</div>
			</div>
		</div>
	</form>
</div>

<div class="container">
	<div class="row">
		<div class="col-xs-12 text-uppercase text-center text-danger">
			<p><span><?= isset($erreur) ? $erreur : "" ?></span></p>
		</div>
	</div>
</div>

<?= isset($message) ? $message : "" ?>