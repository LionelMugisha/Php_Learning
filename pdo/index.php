<?php

$query = require 'bootstrap.php';

// require 'Task.php';

$task = $query->selectAll('todos');

require 'index.view.php';
