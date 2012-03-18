<?php

//autoload
require __DIR__ . '/Autoloader.php';
Autoloader::register();

//execute action
$client = new Controller\Client();
$client->action();