<?php 
try {

	$bdd = new 
	PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'admin');

} catch (Exception $e) {
	
	die('Erreur :'. $e->getMessage());
}

$reponse = $bdd->query('SELECT ann_oid, ann_titre, ann_prix, uti_prenom, uti_nom FROM ann_annonce as a, uti_utilisateur as u WHERE a.uti_oid=u.uti_oid');


?>
<div class="container-fluid bg-primary">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center text-uppercase page-header">categories annonces</h3>
		</div>
	</div>
</div>

<div class="container marge-top">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Id-annonce</th>
				<th>Titre</th>
				<th>Prix</th>
				<th>Prenom</th>
				<th>Nom</th>
			</tr>
		</thead>
		<tbody>

			<?php 
			while ($donnees = $reponse->fetch()) {
				?>

				<tr>
					<td><?= $donnees['ann_oid'] ?></td>
					<td><?= $donnees['ann_titre'] ?></td>
					<td><?= $donnees['ann_prix'] ?></td>
					<td><?= $donnees['uti_prenom'] ?></td>
					<td><?= $donnees['uti_nom'] ?></td>
				</tr>
				<?php 
			}
			$reponse->closeCursor();
			?>

		</tbody>
	</table>
</div>