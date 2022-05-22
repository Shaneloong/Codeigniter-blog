<?= $this->extend('templates/header') ?>

<?= $this->section('title') ?> Post <?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container my-5">
    <?php foreach ($posts as $post): ?>
        <div class="card my-4">
            <div class="card-content">
                <h2 class="card-title"><?= $post->title ?></h2>
                <div class="content">
                    <?= $post->body ?>
                </div>
            </div>
            <div class="card-footer">
                <a href="<?= site_url('/blog/show/' . $post->id) ?>" class="card-footer-item">Read More</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->include('templates/footer') ?>

<?= $this->endSection() ?>
