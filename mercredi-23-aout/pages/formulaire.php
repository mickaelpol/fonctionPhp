<div class="container-fluid bg-primary">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center text-uppercase ">Ajouter une annonce</h3>
		</div>
	</div>
</div>

<form method="POST" action="pages/traitementForm.php">
	<div class="container marge-top">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				
				<?php include('users.php'); ?>

				<?php include('rubrique.php'); ?>

				<div class="form-group">
					<label for="titre">titre de l'annonce</label>
					<input id="titre" type="text" name="t" class="form-control" >
				</div>

				<div class="form-group">
					<label for="prix">Prix</label>
					<input id="prix" type="number" name="P" class="form-control" ></input>
				</div>

				<div class="form-group">
					<label for="description">Description</label>
					<textarea rows="5" id="description" type="text" name="T" class="form-control"  ></textarea>
				</div>


				
				<input class="btn btn-success" type="submit" value="submit"></input>

			</div>
		</div>
	</div>
</form>