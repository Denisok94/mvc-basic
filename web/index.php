<?php

// ini_set('session.save_path', 'tmp');
session_start();
session_write_close();
require __DIR__ . '/../vendor/autoload.php';

try {
    $config = require __DIR__ . "/../config/web.php";

    $app = new \LiteMvc\Core\Application($config);
    \LiteMvc\Core\Mvc::$app = $app;
    $app->run();
} catch (\Throwable $th) {
    echo $th->getMessage() . "";
}
