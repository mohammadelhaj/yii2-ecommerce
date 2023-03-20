<?php

namespace frontend\controllers;


use common\models\Product;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;


/**
 * Search controller
 */
class SearchController extends Controller
{
    public function actionSearch()
    {
        $model = new Product();
        if ($model->load(Yii::$app->request->post())) {
            $query = Product::find()->where(['like', 'name', $model->name])->all();
            return $this->render('search', [
                'model' => $model,
                'query' => $query,
            ]);
        }
    }
}
