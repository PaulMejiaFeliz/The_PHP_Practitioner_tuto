<?php

require "core/database/Connection.php";
require "core/database/QueryBuilder.php";
require "models/task.php";

$config = require "config.php";


$pdo = Connection::make($config["database"]);

$qBuilder = new QueryBuilder($pdo);