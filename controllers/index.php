<?php

$tasks = $qBuilder->selectAll("task", "Task");

require "views/index.view.php";