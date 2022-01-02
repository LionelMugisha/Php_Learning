<?php

require 'functions.php';

require 'Task.php';

$pdo = connectToDb();

$task = fetchAllTasks($pdo);

require 'index.view.php';
