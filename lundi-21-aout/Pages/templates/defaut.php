<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>templates</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<?php include(__DIR__.'/navbar.php'); ?>


	<?=
		$content 
	?>

	<div class="container-fluid">
		<div class="col-sm-12">
			<footer class="text-uppercase text-center">footer</footer>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>