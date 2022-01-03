<?php require('partials/head.php') ?>

    <ul>
        <?php foreach ($task as $tasks) : ?>
            <li>
                <?php if($tasks->completed) : ?>
                    <s><?= $tasks->description; ?></s>
                <?php else: ?>
                    <?= $tasks->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach ?>
    </ul>

<?php require('partials/footer.php') ?>
