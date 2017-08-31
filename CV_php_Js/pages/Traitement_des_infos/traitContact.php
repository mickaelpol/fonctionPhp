<?php 

$prenom = htmlspecialchars($_POST['P']);
$nom = htmlspecialchars($_POST['N']);
$mail = htmlspecialchars($_POST['M']);
$telephone = htmlspecialchars($_POST['T']);
$area = htmlspecialchars($_POST['A']);

if (empty($prenom || $nom|| $mail || $telephone || $area )) {
	$message = "Veuillez entrez vos informations";
} else {
	$message = "Votre formulaire à été envoyé avec succés";
}

?>

<div class="container  back-flou-xs marge-top">
	<div class="row">
		<div class="col-xs-12 text-center">
			<h1><?= $message ?></h1>
		</div>
	</div>
</div>
