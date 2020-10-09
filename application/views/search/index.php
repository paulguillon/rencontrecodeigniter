<div class="flex-row">
    <?php for ($i = 0; $i < count($users); $i++) : ?>
        <div class="card flex-row flex-wrap">
            <div class="card-header border-0">
                <img src="<?= base_url('assets/uploads/profiles/' . $pictures[$i]['picture_name']) ?>" alt="profile picture" height="300">
            </div>
            <div class="card-block px-2">
                <h4 class="card-title"><?= ucfirst($users[$i]['user_firstname']) . ' ' . ucfirst($users[$i]['user_lastname']) ?></h4>
                <p class="card-text">Age : <?= $users[$i]['user_age'] ?></p>
                <p class="card-text">Genre :
                    <?php
                    switch ($users[$i]['user_gender']) {
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
                <p class="card-text">Sexualité :
                    <?php
                    switch ($users[$i]['user_sexuality']) {
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
                <p class="card-text">Localisation : <?= $users[$i]['user_position'] ?></p>
                <a href="<?= base_url('search/' . $users[$i]['user_id']) ?>" class="btn btn-primary">Voir profil</a>
            </div>
        </div>
    <?php endfor; ?>
</div>