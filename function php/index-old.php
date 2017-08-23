<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>
	
<p>Ceci est une ligne écrite en HTML </p>
<p> <?php echo "ceci est une ligne en php"; ?> </p>
<?php 
$date = date("d-m-y");
$heure = date("H:i:s");
print("nous sommes le $date et il est $heure");

for($nombre_de_lignes = 1; $nombre_de_lignes <=10; $nombre_de_lignes++){
	echo '<br />' . 'ceci est a la ligne n°' . $nombre_de_lignes . '<br />';
}

?>



</body>
</html>