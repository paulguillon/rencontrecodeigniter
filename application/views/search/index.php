<?php 
//Redirect user if not logged in
if(!isset($_SESSION["user"]))
    header('location:'.base_url().'login');
?>
<?php for ($i=0; $i < count($users); $i++): ?>
    <img src="<?= base_url('assets/uploads/'.$pictures[$i]['picture_name'])?>" width="200" alt="image profile">
    <p>Name : <?= $users[$i]['user_firstname'].' '.$users[$i]['user_lastname']?></p>
    <p>Age : <?= $users[$i]['user_age']?></p>
    <p>Gender : <?= $users[$i]['user_gender']?></p>
    <p>Sexuality : <?= $users[$i]['user_sexuality']?></p>
<?php endfor;?>
<a href="<?= base_url()?>"><button class="btn btn-primary">Home</button></a>