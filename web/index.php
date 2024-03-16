<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../core/Core.php';
$config = require __DIR__ . "/../config/web.php";

(new \LiteMvc\Core\Core($config))->run();

?>