<?php

// php LiteMvc.php consoleController options/arguments

require __DIR__ . '/vendor/autoload.php';

try {
    $config = require __DIR__ . "/config/web.php";

    $app = new \LiteMvc\Core\Application($config);
    \LiteMvc\Core\Mvc::$app = $app;
    $app->runConsole();
} catch (\Throwable $th) {
    echo $th->getMessage() . "";
}
