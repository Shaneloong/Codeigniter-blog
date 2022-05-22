<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bulma.io -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title><?= $this->renderSection('title') ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-2">
        <div class="container">
            <a class="navbar-brand" href="<?= site_url('/') ?>">Codeigniter 4 Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 me-4 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= site_url('/') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('/about') ?>">About Us</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="<?= site_url('/blog/create') ?>" class="button is-primary text-decoration-none">Create Post</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-3">
        <?php if(session()->has('error')): ?>
            <div class="notification is-danger is-light">
                <button class="delete"></button>
                <?= session('error') ?>
                </div>
        <?php endif; ?>

        <?php if(session()->has('warning')): ?>
            <div class="notification is-warning is-light">
                <button class="delete"></button>
                <?= session('warning') ?>
            </div>
        <?php endif; ?>

        <?php if(session()->has('info')): ?>
            <div class="notification is-info is-light">
                <button class="delete"></button>
                <?= session('info')?>
            </div>
        <?php endif; ?>

    </div>
    <?= $this->renderSection('content') ?>

    