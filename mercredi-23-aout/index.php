	<?php 
	
	if (isset($_GET['p'])) {
		$p = $_GET['p'];
	}
	else {
		$p = "accueil";
	}

	$content = ob_start();

	if ($p === "accueil") {
		include('pages/accueil.php');
	}

	if ($p === "utilisateurs") {
		include('pages/utilisateurs.php');
	}

	if ($p === "formulaire") {
		include('pages/formulaire.php');
	}

	if ($p === "tableauAnnonce") {
		include('pages/tableauAnnonce.php');
	}

	if ($p === "traitementForm") {
		include('pages/traitementForm.php');
	}

	if ($p === "userForm") {
		include('pages/userForm.php');
	}

	if ($p === "traitementRecherche") {
		include('pages/traitementRecherche.php');
	}


	$content = ob_get_clean();
	include('pages/templates/defaut.php');

?>