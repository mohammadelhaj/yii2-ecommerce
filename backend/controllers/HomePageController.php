<?php

namespace backend\controllers;

use yii\web\Controller;


/**
 * HomePage controller
 */
class HomePageController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionUploadPic(){
        
    }
}
