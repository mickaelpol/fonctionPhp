<?php

try {

	$bdd = new 
	PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'admin');

}
catch (Exception $e) {

	die('Erreur :' . $e->getMessage());

}

$reponse = $bdd->query('SELECT * FROM  uti_utilisateur');


?>


<div class="form-group">
	<label for="nom">Nom/Prenom</label>
	<select id="nom" type="text" name="n" class="form-control" required>
		<?php while ($donnees = $reponse->fetch()) { ?>

		<option><?= $donnees['uti_nom'] . " ". $donnees['uti_prenom'] ?></option>	

		<?php 
	}
	$reponse->closeCursor();
	?>

</select>
</div>