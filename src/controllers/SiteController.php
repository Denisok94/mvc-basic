<?php

namespace app\controllers;

use LiteMvc\Core\Controller\BaseController;

class SiteController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
