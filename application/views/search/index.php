<?php 
//Redirect user if not logged in
if(!isset($_SESSION["user"]))
    header('location:'.base_url().'login');
?>
<?php foreach ($users as $user): ?>
    <p>Nom : <?= $user['user_firstname']?></p>
<?php endforeach;?>
<a href="<?= base_url()?>"><button class="btn btn-primary">Home</button></a>