<?php

// php LiteMvc.php consoleController options/arguments

require __DIR__ . '/vendor/autoload.php';

try {
    $config = require __DIR__ . "/config/web.php";

    (new \LiteMvc\Core\Application($config))->runConsole();
} catch (\Throwable $th) {
    echo $th->getMessage() . "";
}
