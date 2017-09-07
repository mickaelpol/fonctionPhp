<?php 

if (isset($_GET['p'])) {
	$p = $_GET['p'];
}
else {
	$p = 'home';
}

ob_start();

if ($p === 'home') {
	include('page/accueil.php');
}

if ($p === 'inscription') {
	include('page/inscription.php');
}

if ($p === 'chat') {
	include('page/chat.php');
}

$content = ob_get_clean();
include('page/templates/default.php');

?>