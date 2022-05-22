<?= $this->extend('templates/header') ?>

<?= $this->section('title') ?> Post <?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container my-5">
    <div class="p-5 mb-3 bg-light rounded-3">
        <div class="container py-5">
            <h1 class="display-5 fw-bold">
                <?= $post->title ?>
            </h1>
            <p class="col-md-7 fs-4">
                <?= $post->body ?>
            </p>
            <a class="btn btn-primary btn-lg" href="<?= site_url('/blog/edit/' . $post->id) ?>">
                Edit Post
            </a>
        </div>
    </div>
</div>

<?= $this->include('templates/footer') ?>

<?= $this->endSection() ?>

