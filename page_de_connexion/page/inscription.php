<?php 


	function testInputRemplis($input){
		if (empty($_POST[$input])) {
			return "<span> Le champ ". $input . " est vide </span>";
		}
	}
	
	
	if (isset($_POST['validInscription'])) {
		$message ="";
		$erreur = "";

		//verif de la longueur du mot de passe 
		if strlen($_POST['mdp']) < 8 {
			$erreur .= "La longueur du mot de passe doit être supérieur a 8 caractères";
		}
		// verif des mot de passe identiques
		if ($_POST['mdp']) != $_POST['verifMdp'] {
			$erreur .= "Les deux mots de passe ne sont pas identiques";
		}

		$erreurPseudo = " : ". testInputRemplis('pseudo');
		$erreurMdp = " : ". testInputRemplis('mdp'); 
		$erreurMail = " : ". testInputRemplis('email'); 

		//condition de validation du formulaire 
		if (empty($erreur)) {
			try {
				$bdd = new
				//connection a la bdd
				PDO('mysql:host=localhost;dbname=membres;charset=utf8', 'root', 'admin');

				//si erreur affiche l'erreur et stoppe tout 
			} catch (Exception $e) {
				die('Erreur : ' . $erreur->getMessage());
			}

			//preparation des valeurs a insérer (inputs) + cryptage du mot de passe 
			$pseudo = 
			$mdp =
			$mail =
		}

	}

?>

<form method="post" action="page/inscription.php">
	<label for="pseudo">Pseudo</label>
	<input name="pseudo" type="text"> <br>
	
	<label for="mdp">Mot de passe</label>
	<input name="mdp" type="password">

	<label for="verifMdp">verification du mot de passe</label>
	<input name="verifMdp" type="password"> <br>

	<label for="email">Adresse mail</label>
	<input name="email" type="email"> <br>

	<input name="validInscription" type="submit">
</form>