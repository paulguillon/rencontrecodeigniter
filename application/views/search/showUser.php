<div>
    <img src="<?= base_url('assets/uploads/profiles/' . $profilePic['picture_name']) ?>" alt="profile picture" width="200">
    <section class="infos">
        <p>Âge : <?= $user['user_age'] ?> ans</p>
        <p>Localisation : <?= $user['user_position'] ?></p>
        <p>Genre :
            <?php
            switch ($user['user_gender']) {
                case 0:
                    echo 'Femme';
                    break;
                case 1:
                    echo 'Homme';
                    break;
                case 2:
                    echo 'Non binaire';
                    break;
                case 3:
                    echo 'Autre';
                    break;
            }
            ?>
        </p>
        <p>Sexualité :
            <?php
            switch ($user['user_sexuality']) {
                case 0:
                    echo 'Hétérosexuel';
                    break;
                case 1:
                    echo 'Homosexuel';
                    break;
                case 2:
                    echo 'Bisexuel';
                    break;
                case 3:
                    echo 'Autre';
                    break;
            }
            ?>
        </p>
        <p>Mail : <?= $user['user_mail'] ?></p>
        <p>Résumé : <?= $user['user_bio'] ?></p>
    </section>
    <section class="pictures">
        <h2>Photos</h2>
        <hr>
        <?php if (count($userPictures) > 0) :
            foreach ($userPictures as $pic) : ?>
                <img src="<?= base_url('assets/uploads/pictures/') . $pic['picture_name'] ?>" alt="user_picture" width="100">
            <?php endforeach;
        else :
            ?>
            <p>Aucune photo</p>
        <?php endif; ?>
    </section>
</div>

<a href="<?= base_url('search/index') ?>"><button class="btn btn-primary">Retour</button></a>