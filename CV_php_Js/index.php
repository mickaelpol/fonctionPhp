<?php 

if (isset($_GET['p'])) {
	$p = $_GET['p'];
}
else{
	$p = 'accueil';
}

ob_start();

if ($p === 'accueil') {
	include('./pages/accueil.php');
}
// if ($p === '') {
// 	# code...
// }

$content = ob_get_clean();
include('pages/templates/defaut.php');


?>