<?php

namespace app\controllers;

use LiteMvc\Core\Controller\BaseController;

class SiteController extends BaseController
{
    public function actionIndex()
    {
        $this->view->title = 'Home';
        return $this->render('index');
    }
}
