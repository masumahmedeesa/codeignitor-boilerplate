<h2><?= "Employee List" ?></h2>

<?php if ($employee_list !== []): ?>

    <?php foreach ($employee_list as $employee): ?>

        <h3><?= esc($employee['sapID']) ?></h3>

        <div class="main">
            <?= esc($employee['name']) ?>
        </div>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Employee</h3>

    <p>Unable to find any employee for you.</p>

<?php endif ?>