<?php

namespace frontend\controllers;

use common\models\Category;
use common\models\Product;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\Response;

/**
 * Product controller
 */
class ProductController extends Controller
{
    public function actionAddProduct()
    {
        $model = new Product();
        $parent = Category::find()->where(['<', 'parent_id', 0])->all();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Product added successfully.');
            return $this->redirect(['index']);
        }
        return $this->render('add_product', [
            'model' => $model,
            'parent' =>   ArrayHelper::map($parent, 'id', 'name'),
            ['prompt' => 'Select a category', 'id' => 'select']
        ]);
    }
    public function actionGetSubs($category_id)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $model = Category::find()->where(['parent_id' => $category_id])->all();
        $subs = [];

        foreach ($model as $category) {
            $subs[] = $category;
            $subs = array_merge($subs);
        }

        return  $subs;
    }
}
