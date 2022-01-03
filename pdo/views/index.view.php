<html>
<head>
    <title>PDO in PHP</title>
</head>
<body>
    <!-- <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav> -->
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