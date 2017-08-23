<?php

	try

	{
		$bdd = new 
		PDO('mysql:host=localhost;dbname=immo;charset=utf8','root', 'admin');//se connecter a ma BDD
		//en suivant le nom de l'hote de la BDD , le nom de la BDD la personne qui se co sur la BDD
		//et pour finir le mot de passe du serveur
	}

	catch (Exception $e)
	{
		die('Erreur :' .  $e->getMessage());
			//si il y a une erreur dans la BDD 
			//ce bout de code empechera que la personne qui se co
			//a la page vois le message d'erreur et en passant qu'il vois le mot de passe de la BDD!!
	}

	$reponse = $bdd->query('SELECT * FROM  annonce');

?>


<div class="container-fluid">
	<h1 class="bg-primary text-center text-uppercase">Petite annonces</h1>
</div>
<div class="container">
	<table class="table table-hover">
		<thead>
			<tr>
				<th><strong>#</strong></th>
				<th><strong>Titre</strong></th>
				<th><strong>Description</strong></th>
				<th><strong>prix</strong></th>
			</tr>
			<?php 
				while($donnees = $reponse->fetch()){

					?>
				<tr>
					<td><?= $donnees['id_annonce'] ?></td>
					<td><?= $donnees['title'] ?></td>
					<td><?= $donnees['description'] ?></td>
					<td><?= $donnees['price'] ?> €</td>
				</tr>
			<?php 
				}
				$reponse->closeCursor(); // termine le traitement de la requête !?>

		</thead>
	</table>
</div>