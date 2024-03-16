<?php

namespace app\controllers;

use LiteMvc\Core\ApiController as BaseApiController;

class ApiController extends BaseApiController
{
    public function actionIndex()
    {
        return 'index';
    }
}
