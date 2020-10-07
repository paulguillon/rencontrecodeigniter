<?php
//Redirect user if not logged in
if (!isset($_SESSION["user"]))
    header('location:' . base_url() . 'login');
?>
<div class="flex-row">
    <?php for ($i = 0; $i < count($users); $i++) : ?>
        <div class="card flex-row flex-wrap">
            <div class="card-header border-0">
                <img src="<?= base_url('assets/uploads/' . $pictures[$i]['picture_name']) ?>" alt="profile picture">
            </div>
            <div class="card-block px-2">
                <h4 class="card-title"><?= $users[$i]['user_firstname'] . ' ' . $users[$i]['user_lastname'] ?></h4>
                <p class="card-text">Age : <?= $users[$i]['user_age'] ?></p>
                <p class="card-text">Gender : <?= $users[$i]['user_gender'] ?></p>
                <p class="card-text">Sexuality : <?= $users[$i]['user_sexuality'] ?></p>
                <a href="#" class="btn btn-primary">See profile</a>
            </div>
        </div>
    <?php endfor; ?>
</div>