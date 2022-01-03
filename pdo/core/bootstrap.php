<?php

$app = [];

$app['config'] = require 'Config.php';

require 'core/Router.php';

require 'core/Request.php';

require 'core/db/Connection.php';

require 'core/db/QueryBuilder.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);