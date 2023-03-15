<?php

namespace backend\controllers;

use common\models\Currency;
use Yii;
use yii\web\Controller;


/**
 * Currency controller
 */
class CurrencyController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionAddCurrency()
    {
        $model = new Currency();


        if ($model->load(Yii::$app->request->post())) {
            
            if ($model->save()) {
                return $this->redirect(['add-currency']);
            } else {
                echo "not saved";
            }
        }
        return $this->render('add_currency', [
            'model' => $model,
        ]);
    }
}
