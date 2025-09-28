<?= $this->extend('layout/base') ?>

<?= $this->section('content') ?>

<div class="p-5">
    <h2><?= esc($title) ?></h2>

    <?= session()->getFlashdata('error') ?>
    <?= validation_list_errors() ?>

    <form action="/ejoining/transferapplication/new" method="post">
        <?= csrf_field() ?>

        <label for="title">Title</label>
        <input type="input" name="title" value="<?= set_value('title') ?>" required>
        <br>

        <label for="body">Text</label>
        <textarea name="body" cols="45" rows="4" required><?= set_value('body') ?></textarea>
        <br>

        <input type="submit" name="submit" value="Create new application">
    </form>

</div>

<?= $this->endSection() ?>