<?php

namespace frontend\controllers;

use common\models\Category;
use common\models\Product;
use Yii;
use yii\web\Controller;


/**
 * Product controller
 */
class ProductController extends Controller
{
    public function actionAddProduct()
    {
        $model = new Product();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Product added successfully.');
            return $this->redirect(['index']);
        }

        return $this->render('add_product', [
            'model' => $model,
        ]);
    }
    public function GetSubcategories($category_id)
    {
    }
}
