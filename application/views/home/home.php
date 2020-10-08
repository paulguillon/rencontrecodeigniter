<?php 
//Redirect user if logged in
if(isset($_SESSION['user']))
    header('location:'.base_url().'search/index');
?>
<a href="<?= base_url('login')?>"><button class="btn btn-primary">Login</button></a>
<a href="<?= base_url('register')?>"><button class="btn btn-primary">Register</button></a>