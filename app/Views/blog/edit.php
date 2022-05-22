<?= $this->extend('templates/header') ?>

<?= $this->section('title') ?> Create Post <?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container my-4">

    <h1 class="mb-4">Create New Post</h1>



    <?= form_open('/blog/update/' . $post->id) ?>

        <?= $this->include('blog/form') ?>
        <div class="mb-4">
            <button class="btn btn-primary">Update</button>
        </div>
    </form>
</div>

<?= $this->include('templates/footer') ?>

<?= $this->endSection() ?>

