<!-- Formulaire de contact -->
<div class="container marge-top back-flou-xs">
	<div class="row">
		<div class="col-xs-offset-2 col-xs-8">
			<form class="form-horizontal marge-top-xs" method="POST" action="index.php?p=traitContact">
				
				<!-- input prénom name P -->
				<div class="form-group">
					<label class="control-label col-xs-2" for="prénom">Prénom</label>
					<div class="col-xs-8">
						<input name="P" class="form-control font-size-20" id="prénom" type="text">
					</div>
				</div>

				<!-- input nom name N -->
				<div class="form-group">
					<label class="control-label col-xs-2" for="nom">Nom</label>
					<div class="col-xs-8">
						<input name="N" class="form-control font-size-20" id="nom" type="text">
					</div>
				</div>

				<!-- input email name M -->
				<div class="form-group">
					<label class="control-label col-xs-2" for="email">Email</label>
					<div class="col-xs-8">
						<input name="M" class="form-control font-size-20" id="email" type="email">
					</div>
				</div>

				<!-- input téléphone name T -->
				<div class="form-group">
					<label class="control-label col-xs-2" for="téléphone">Tél</label>
					<div class="col-xs-8">
						<input name="T" class="form-control font-size-20" id="téléphone" type="tel">
					</div>
				</div>

				<!-- input textarea name A -->
				<div class="form-group">
					<div class="col-xs-2">
						<label for="area">Commentaire</label>
					</div>
					<div class="col-xs-8">
						<textarea placeholder="Entrez votre commentaire ici" class="form-control font-size-20" name="A" id="area" rows="5"></textarea>
					</div>
				</div>
				
				<!-- Bouton reset et validation du formulaire + loader caché -->
				<div class="row form-group">
					<div id="loader" class="col-xs-2 col-xs-offset-2 from-control">
						<img src="image/loading.GIF" alt="GIF de chargement">
					</div>
					<div class="col-xs-4 col-xs-offset-3">
						<input class="btn btn-md btn-danger" type="reset">
						<input id="valid" class="btn btn-md btn-success" type="submit">
					</div>
				</div>

			</form>
		</div>
	</div>
</div>
