<?php

namespace backend\controllers;

use common\models\Admin;
use common\models\Category;
use Yii;
use yii\web\Controller;


/**
 * Category controller
 */
class CategoryController extends Controller
{

    public function actionIndex()
    {
        $model = Category::find()->all();
      
        
        return $this->render('index', ['model' => $model]);
    }

    public function actionAddCategory()
    {
        $model = new Category();


        if ($model->load(Yii::$app->request->post())) {
            $model->parent_id = -1;
            if ($model->save()) {
                return $this->render(
                    'index',
                    [
                        'model' => $model
                    ]
                );
            } else {
                echo "not saved";
            }
        }
        return $this->render('add_category', [
            'model' => $model,
        ]);
    }
    public function actionUpdateCategory()
    {

    }

    public function actionManageSubCategories()
    {
    }
    public function actionDeleteCategory()
    {
    }
}
