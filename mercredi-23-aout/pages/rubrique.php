<?php 

try {

	$bdd = new 
	PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'admin');

}
catch (Exception $e) {

	die('Erreur :' . $e->getMessage());

}

$reponse = $bdd->query('SELECT * FROM  rub_rubrique');

?>

<div class="form-group">
	<label for="rubrique">Rubrique</label>
	<select id="rubrique" type="text" name="n" class="form-control" required>
		<?php while ($donnees = $reponse->fetch()) { ?>

		<option><?= $donnees['rub_label']?></option>	

		<?php 
	}
	$reponse->closeCursor();
	?>

</select>
</div>