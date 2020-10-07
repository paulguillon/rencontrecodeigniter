<form action="" method="post">
	<div class="form-group">
		<label for="userFirstName">Prénom</label>
		<input type="text" name="userFirstName" id="userFirstName" class="form-control">
	</div>
	<div class="form-group">
		<label for="userLastName">Nom de famille</label>
		<input type="text" name="userLastName" id="userLastName" class="form-control">
	</div>
	<div class="form-group">
		<label for="userGender">Genre</label>
		<select class="form-control" id="userGender">
			<option>Masculin</option>
			<option>Féminin</option>
			<option>Non-binaire</option>
			<option>Autre</option>
		</select>
	</div>
	<div class="form-group">
		<label for="userGender">Sexualité</label>
		<select class="form-control" id="userSexuality">
			<option>Hétérosexuel</option>
			<option>Homosexuel</option>
			<option>Bisexuel</option>
			<option>Autre</option>
		</select>
	</div>
	<div class="form-group">
		<label for="userMail">Adresse email</label>
		<input type="email" name="userMail" id="userMail" class="form-control">
	</div>
	<div class="form-group">
		<label for="userPassword">Mot de passe</label>
		<input type="password" name="userPassword" id="userPassword" class="form-control">
	</div>
	<div class="form-group">
		<label for="userConfirm">Confirmer votre mot de passe</label>
		<input type="password" name="userConfirm" id="userConfirm" class="form-control">
	</div>
	<div class="form-group">
		<label for="userProfilePic">Photo de profil</label>
		<input type="file" class="form-control-file" id="userProfilePic">
	</div>
	<input type="submit" value="S'inscrire" class="btn btn-primary" name="registerButton">
</form>
<p>Déjà inscrit ? Connectez vous <a href="<?= base_url()?>login">Connexion</a></p>
