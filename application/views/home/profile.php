<?php
//Redirected if user isn't logged in
if (!isset($_SESSION["user"])) header('location:' . base_url('home/login'))
?>
<?= isset($error) ? "<div class='alert alert-danger' role='alert'>".$error."</div>" : ""; ?>

<?php echo form_open_multipart('upload/' . $_SESSION['user']['user_id']); ?>

<label for="userfile">Photo de profil</label>
<input type="file" class="form-control-file" name="userfile" id="userfile" size="20" />

<input type="submit" value="Upload" class="btn btn-primary mt-3" />

</form>
<a href="<?= base_url() ?>"><button class="btn btn-primary">Accueil</button></a>