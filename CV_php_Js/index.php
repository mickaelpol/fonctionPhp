<?php 

if (isset($_GET['p'])) {
	$p = $_GET['p'];
}
else{
	$p = 'accueil';
}

ob_start();

if ($p === 'accueil') { //pages accueil 
	include('./pages/accueil.php');
}
if ($p === 'competences') { // pages compétences
	include('./pages/competences.php');
}
if ($p === 'xpPro') { // pages experience Pro
	include('./pages/xpPro.php');
}
if ($p === 'diplomes') { // pages diplomes
	include('./pages/diplomes.php');
}
if ($p === 'loisirs') { // pages loisirs
	include('./pages/loisirs.php');
}
if ($p === 'contact') { // pages contact
	include('./pages/contact.php');
}
if ($p === 'localiser') { // pages me situer
	include('./pages/localiser.php');
}
if ($p === 'traitContact') {
	include('./pages/Traitement_des_infos/traitContact.php');
}

$content = ob_get_clean();
include('pages/templates/defaut.php');


?>