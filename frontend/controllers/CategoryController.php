<?php

namespace frontend\controllers;

use common\models\Category;
use common\models\Product;
use yii\web\Controller;


/**
 * Category controller
 */
class CategoryController extends Controller
{
    public function actionIndex($category_id)
    {
        
        $product = Product::find()->where(['category_id' => $category_id])->all();

        return $this->render('index', [
            'model' => $product,
        ]);
    }
}
