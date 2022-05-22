<div class="form-floating mb-3">
    <input type="text" name="title" id="title" placeholder="Title" class="form-control" value="<?= old('title', esc($post->title)) ?>">
    <label for="title">Title</label>
</div>

<div class="form-floating mb-4">
    <textarea name="body" placeholder="Your content goes here" id="body" style="height: 100px;" class="form-control"><?= old('body', esc($post->body)) ?></textarea>
    <label for="body">Post Body</label>
</div>

