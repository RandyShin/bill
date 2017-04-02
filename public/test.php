<?php

require 'task.php';
require 'function.php';


$pdo = DBcon();

$tasks = fetchAllTasks($pdo);




require 'test.view.php';



