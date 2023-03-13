<?php

namespace backend\controllers;

use common\models\Category;
use Yii;
use yii\web\Controller;


/**
 * Subcategory controller
 */
class SubcategoryController extends Controller
{
    public function actionIndex()
    {
    }

    public function actionAddSubcategory($parent_id)
    {
        $model = new Category();
       
        if ($model->load(Yii::$app->request->post())) {

            $model->parent_id = $parent_id;
           
            if ($model->save()) {
                return $this->redirect(['category/index']);
            }
        }
        return $this->render('add_subcategory', [
            'model' => $model,
        ]);
    }
    

    public function actionUpdateSubCat()
    {
    }

    public function actionDeleteSubCat()
    {
    }
}
