<?php

namespace app\controllers;

use LiteMvc\Core\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
