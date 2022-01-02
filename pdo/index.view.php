<html>
<head>
    <title>PDO in PHP</title>
</head>
<body>

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

</body>
</html>