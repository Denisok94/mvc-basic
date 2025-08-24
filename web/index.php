<?php

require __DIR__ . '/../vendor/autoload.php';

try {
    $config = require __DIR__ . "/../config/web.php";
    
    (new \LiteMvc\Core\Core($config))->run();
} catch (\Throwable $th) {
    echo $th->getMessage() . "";
}

?>