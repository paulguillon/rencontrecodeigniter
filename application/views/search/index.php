<?php 
//Redirect user if not logged in
if(!isset($_SESSION["user"]))
    header('location:'.base_url().'login');
?>
<p>Search content</p>
<a href="<?= base_url()?>"><button class="btn btn-primary">Home</button></a>