<?php 
try {

	$bdd = new 
	PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'admin');

} catch (Exception $e) {
	
	die('Erreur :'. $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM uti_utilisateur');


?>
<div class="container-fluid bg-primary">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center text-uppercase page-header">categorie utilisateurs</h3>
		</div>
	</div>
</div>

<div class="container marge-top">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
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
					<td><?= $donnees['uti_oid'] ?></td>
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