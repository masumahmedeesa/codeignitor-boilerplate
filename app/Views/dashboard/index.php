<?= $this->extend('layout/base') ?>

<?= $this->section('content') ?>

<div class="p-5">
    <h2>ড্যাশবোর্ড</h2>

    <?= view('dashboard/user_info') ?>

</div>

<?= $this->endSection() ?>