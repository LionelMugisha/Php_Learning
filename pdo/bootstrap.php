<?php

require 'db/Connection.php';

require 'db/QueryBuilder.php';

return new QueryBuilder(
    Connection::make()
);