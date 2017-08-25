<div class="container-fluid bg-primary">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center text-uppercase ">Inscription</h3>
		</div>
	</div>
</div>

<form method="POST" action="pages/traitementUsers.php">
	<div class="container marge-top">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="form-group">
					<label for="nom">Nom</label>
					<input id="nom" type="text" name="n" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="prenom">Prenom</label>
					<input id="prenom" type="text" name="p" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="age">Age</label>
					<input id="age" type="number" name="a" class="form-control" required>
				</div>

				
				<input class="btn btn-success" type="submit" value="submit"></input>

			</div>
		</div>
	</div>
</form>