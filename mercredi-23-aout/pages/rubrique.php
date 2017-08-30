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
	<select id="rubrique" type="text" name="r" class="form-control" required>
	<?php 
		while ($donnees = $reponse->fetch()) {
			echo "<option value=" . $donnees['rub_oid'] . ">" . $donnees['rub_label'] . "</option>";
		}
		$reponse->closeCursor();

		?>

</select>
</div>