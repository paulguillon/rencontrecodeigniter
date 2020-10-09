<?php
session_start();
?>
<html>

<head>
    <title>Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="..\assets\css\style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-pink">
        <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url('assets/img/logo.png') ?>" width="50" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php if (isset($_SESSION["user"])) : ?>
                        <a class="nav-link" href="<?= base_url('home/profile') ?>">Profil</a>
                    <?php else : ?>
                        <a class="nav-link" href="<?= base_url('home/login') ?>">Connexion</a>
                    <?php endif; ?>
                </li>
                <?php if (isset($_SESSION["user"])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('search/index') ?>">Recherche</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home/disconnect') ?>">Deconnexion</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <header class="container jumbotron">
        <h1><?php echo $title; ?></h1>
    </header>
    <div class="container">