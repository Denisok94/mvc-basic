<?php

namespace app\commands;

use LiteMvc\Core\Mvc;
use LiteMvc\Core\Controller\BaseConsoleController;

/**
 * php LiteMvc.php {name controller} {options} {arguments}
 * php LiteMvc.php commands -a -b2 --c=12 arg=123
 */
class CommandsController extends BaseConsoleController
{
    public function execute(): void
    {
        $params = ['arguments' => $this->getArguments(), 'options' => $this->getOptions()];
        Mvc::$app->log->info('init CommandsController', $params);
        print_r($params);
    }
}
