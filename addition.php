<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>addition</title>
</head>
<body>
	
	<p>
		<?php 
		$numero1 = $_GET["nbr1"];
		$numero2 = $_GET["nbr2"];

		echo $numero1 + $numero2;
		?>

	</p>

	<p>
		<?php
		echo $numero1 - $numero2;
		?>
	</p>

	<p>
		<?php
		echo $numero1 * $numero2;
		?>
	</p>

	<p>
		<?php
		echo $numero1 / $numero2;
		?>
	</p>


</body>
</html>