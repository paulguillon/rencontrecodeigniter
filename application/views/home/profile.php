<?php
//Redirected if user isn't logged in
if(!isset($_SESSION["user"])) header('location:'.base_url('home/login'))
?>
<p>profile</p>
<a href="<?= base_url()?>"><button class="btn btn-primary">Home</button></a>