<?php 

if (isset($_GET['p'])) {
	$p = $_GET['p'];
}
else {
	$p = 'home';
}

ob_start();

if ($p === 'home') {
	include('page/connexion.php');
}

if ($p === 'inscription') {
	include('page/inscription.php');
}

$content = ob_get_clean();
include('page/templates/default.php');

?>