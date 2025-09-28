<?= $this->extend('layout/base') ?>

<?= $this->section('content') ?>

<div class="p-5">
    <h2><?= esc($title) ?></h2>

    <?php if ($application_list !== []): ?>

        <?php foreach ($application_list as $application_item): ?>

            <div class="d-flex">
                <h3><?= esc($application_item['title']) ?></h3>
                <a href="<?= ('transferapplication/delete/' . $application_item['id']) ?>" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
            </div>

            <div class="main">
                <?= esc($application_item['body']) ?>
            </div>
            <p><a href="/transferapplication/<?= esc($application_item['id'], 'url') ?>">View application</a></p>

        <?php endforeach ?>

    <?php else: ?>

        <h3>No Application</h3>

        <p>Unable to find any application for you.</p>

    <?php endif ?>

</div>

<?= $this->endSection() ?>