<?php

session_start();

if (empty($_SESSION['pseudo'])) {
	$_SESSION['pseudo'] = 1;
}
else {
	$_SESSION['pseudo']++;
};


?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>templates</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	
	<p>vous avez visité : <strong><?= $_SESSION['pseudo']; ?></strong> fois mon site</p>
	
</body>
</html>
