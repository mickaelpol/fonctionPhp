<nav class="nav navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="?p=accueil" class="navbar-brand">Accueil</a>
		</div>

		<ul class="nav navbar-nav pull-left">
			<li><a href="?p=userForm">Inscription</a></li>
			<li><a href="?p=utilisateurs">Utilisateurs</a></li>
			<li><a href="?p=formulaire">Ajouter une annonce</a></li>
			<li><a href="?p=tableauAnnonce">Afficher les annonces</a></li>
		</ul>
		<form class="navbar-form navbar-right" action="index.php?p=traitementRecherche" method="post">
			<div class="form-group">
				<input name="R" placeholder="Recherche" class="form-control left-rounded" type="text">
			</div>
			<button type="submit" class="btn btn-inverse right-rounded">GO !</button>
		</form>

	</div>
</nav>