<?php

namespace rmznclk71\kitap\controllers;

use yii\web\Controller;
use Yii;
use yii\web\ForbiddenHttpException;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    	        return $this->render('index');
    	
}
}
