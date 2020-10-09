<?php 
//Redirect user if logged in
if(isset($_SESSION['user']))
    header('location:'.base_url().'search/index');
?>
<p>Bienvenue ! Connectez-vous pour accéder au site.</p>
<a href="<?= base_url('home/login')?>"><button class="btn btn-primary bg-pink">Connexion</button></a>
<a href="<?= base_url('home/register')?>"><button class="btn btn-primary bg-pink">Inscription</button></a>