<?php

$config = require 'Config.php';

require 'db/Connection.php';

require 'db/QueryBuilder.php';

return new QueryBuilder(
    Connection::make($config['database'])
);