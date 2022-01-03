<?php

$task = $app['database']->selectAll('todos');

require 'views/index.view.php';