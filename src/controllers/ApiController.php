<?php

namespace app\controllers;

use LiteMvc\Core\Controller\ApiController as BaseApiController;

class ApiController extends BaseApiController
{
    public function actionIndex()
    {
        return 'index';
    }
}
