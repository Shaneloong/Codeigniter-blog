<?= $this->extend('templates/header') ?>
<?= $this->section('title') ?>Home Page<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section>
    <div class="px-5 pb-5 mb-4 bg-light rounded-3">
        <div class="container py-5">
            <h1 class="display-5 fw-bold">
                Codeigniter 4 Blog
            </h1>
            <p class="col-md-7 fs-4">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam est doloremque deserunt quibusdam. Quas dolor rerum modi excepturi dicta nemo?
            </p>
            <hr>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odit perspiciatis corrupti necessitatibus ab. Libero sunt pariatur quae quibusdam voluptatem!
            </p>
            <a class="btn btn-primary btn-lg" href="<?= site_url('/blog') ?>">
                Read More
            </a>
        </div>
    </div>
</section>
<section class="blog-section">
    <div class="container">
        <?php if($news): ?>
            <?php foreach($news as $newsitem): ?>
                <h3><?= $newsitem->title ?></h3>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">No posts have been found</p>
        <?php endif; ?>
    </div>
</section>

<?= $this->include('templates/footer'); ?>

<?= $this->endSection() ?>
