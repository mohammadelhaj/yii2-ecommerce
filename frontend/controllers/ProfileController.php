<?php

namespace frontend\controllers;

use common\models\User;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile;

class ProfileController extends Controller
{
    public function actionIndex()
    {
        $user = Yii::$app->user->id;
        $model = User::find()->where(['id' => $user])->one();
        return $this->render('index', [
            'model' => $model,
        ]);
    }
}
