<?= $this->extend('templates/header'); ?>

<?= $this->section('title'); ?> About <?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section>
    <div class="container my-3">
        <h1>About Us</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni eius aspernatur asperiores debitis nemo tempore unde nobis facilis excepturi vel!</p>
        <h2>Learn More</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nam sapiente fuga incidunt quo ipsam assumenda excepturi unde necessitatibus ab.</p>
    </div>
</section>

<?= $this->include('templates/footer'); ?>

<?= $this->endSection(); ?>
