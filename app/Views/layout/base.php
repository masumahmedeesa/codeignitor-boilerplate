<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="ejoining" content="HRD-I, Bangladesh Bank" />
    <title><?= esc($title ?? 'E-Joining') ?></title>

    <link rel="stylesheet" href="<?= asset_url('/assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= asset_url('/assets/css/style.css'); ?>" />
    <link rel="stylesheet" href="<?= asset_url('/assets/bootstrap-icons/bootstrap-icons.min.css') ?>">

<body>
    <div class="container-xxl container-style">
        <?= view('layout/header') ?>

        <div class="body-section row">
            <?= view('layout/appbar') ?>

            <div class="body-right col-md-9 px-0">
                <?= $this->renderSection('content') ?>
                <?= view('layout/footer') ?>
            </div>
        </div>
    </div>

    <script src="<?= asset_url('/assets/js/jquery-3.7.1.min.js') ?>"></script>
    <script src="<?= asset_url('/assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>