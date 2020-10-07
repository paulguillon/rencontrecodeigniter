<?php
var_dump($_POST);
?>
<form action="<?= base_url('home/register')?>" method="post">
	<div class="form-group">
		<label for="userFirstName">Prénom</label>
		<input type="text" name="userFirstName" id="userFirstName" class="form-control">
	</div>
	<div class="form-group">
		<label for="userLastName">Nom de famille</label>
		<input type="text" name="userLastName" id="userLastName" class="form-control">
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
		<label for="userBio">Biographie</label>
		<textarea type="text" name="userBio" id="userBio" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label for="userAge">Age</label>
		<input type="number" name="userAge" id="userAge" class="form-control">
	</div>
	<div class="form-group">
		<label for="userGender">Genre</label>
		<select class="form-control" name="userGender" id="userGender">
			<option>Masculin</option>
			<option>Féminin</option>
			<option>Non-binaire</option>
			<option>Autre</option>
		</select>
	</div>
	<div class="form-group">
		<label for="userSexuality">Sexualité</label>
		<select class="form-control" name="userSexuality" id="userSexuality">
			<option>Hétérosexuel</option>
			<option>Homosexuel</option>
			<option>Bisexuel</option>
			<option>Autre</option>
		</select>
	</div>
	<div class="form-group">
    <label for="userInterest">Centres d'interêts</label>
		<div class="form-check">
			<input class="form-check-input" type="checkbox" value="cinéma" name="userInterest[]">
			<label class="form-check-label" for="userInterest" >
				Cinéma
			</label>
        </div>
        <div class="form-check">
			<input class="form-check-input" type="checkbox" value="sport" name="userInterest[]">
			<label class="form-check-label" for="userInterest">
				Sport
			</label>
        </div>
        <div class="form-check">
			<input class="form-check-input" type="checkbox" value="politique" name="userInterest[]">
			<label class="form-check-label" for="userInterest">
				Politique
			</label>
        </div>
        <div class="form-check">
			<input class="form-check-input" type="checkbox" value="jeu video" name="userInterest[]">
			<label class="form-check-label" for="userInterest">
				Jeu vidéo
			</label>
        </div>
        <div class="form-check">
			<input class="form-check-input" type="checkbox" value="histoire" name="userInterest[]">
			<label class="form-check-label" for="userInterest">
				Histoire
			</label>
        </div>
        <div class="form-check">
			<input class="form-check-input" type="checkbox" value="littérature" name="userInterest[]">
			<label class="form-check-label" for="userInterest">
				Littérature
			</label>
        </div>
        <div class="form-check">
			<input class="form-check-input" type="checkbox" value="tourisme" name="userInterest[]">
			<label class="form-check-label" for="userInterest">
				Tourisme
			</label>
        </div>       
	</div>
	<div class="form-group">
		<label for="userPosition" name="userPosition">Ville</label>
		<input type="text" name="userPosition" id="userPosition" class="form-control">
	</div>
	<input type="submit" value="S'inscrire" class="btn btn-primary" name="registerButton">
</form>
<p>Déjà inscrit ? Connectez vous <a href="<?= base_url()?>login">Connexion</a></p>
