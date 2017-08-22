<?php 
if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'accueil';
}

$content = ob_start();
if($p === 'accueil'){
    include('./Pages/accueil.php');
    
}
if($p === 'Rubriques'){
    include('./Pages/rubriques.php');
}
if($p === 'users'){
    include('./Pages/users.php');
}

if ($p === 'annonce') {
	include('./Pages/annonce.php');
}

if ($p === 'trieAnnonce') {
	include('./Pages/annonce_users.php');
}

$content = ob_get_clean();
include('./Pages/accueil.php');
?>