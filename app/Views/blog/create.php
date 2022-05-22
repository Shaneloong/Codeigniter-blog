<?= $this->extend('templates/header') ?>

<?= $this->section('title') ?> Create Post <?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container my-4">

    <h1 class="mb-4">Create New Post</h1>

    <?php if(session()->has('errors')): ?>
        <ul class="notification is-danger is-light">
            <button class="delete"></button>
            <?php foreach(session('errors') as $error): ?>
                <li class="text-danger"><?= $error ?></li>
            <?php endforeach; ?>
            </ul>
    <?php endif; ?>

    <?= form_open('/blog/create') ?>

        <?= $this->include('blog/form') ?>

        <div class="mb-4">
            <button class="btn btn-primary">Create Post</button>
        </div>
    
    </form>
</div>

<?= $this->include('templates/footer') ?>

<?= $this->endSection() ?>

