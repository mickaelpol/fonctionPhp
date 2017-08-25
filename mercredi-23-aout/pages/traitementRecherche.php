<?php 

$nom = $_GET['R'];
$prenom = $_GET['R'];



try {

	$bdd = new 
	PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'admin', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}

catch (Exception $e) {

	die('Erreur :' . $e->getMessage());

}

$sql = sprintf("SELECT * FROM uti_utilisateur WHERE uti_nom = '%s' OR uti_prenom = '%s'", $nom, $prenom);

$reponse = $bdd->query($sql);


?>

<div class="container marge-top bg-primary">
	<div class="row">
		<div class="col-xs-12">
			<h3 class="text-center text-uppercase page-header">
				users
			</h3>
			<blockquote>
				Resultat pour votre recherche : 
				<strong>
					" <?= $nom ?> "
				</strong>
			</blockquote>

			<div class="container">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Prenom</th>
							<th>Nom</th>
							<th>Age</th>
						</tr>
					</thead>
					<tbody>

						<?php 
						while ($donnees = $reponse->fetch()) {
							?>

							<tr>
								<td><?= $donnees['uti_prenom'] ?></td>
								<td><?= $donnees['uti_nom'] ?></td>
								<td><?= $donnees['uti_age'] ?></td>
							</tr>
							<?php 
						}
						$reponse->closeCursor();
						?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>