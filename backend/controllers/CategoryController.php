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
        $model = Category::find()->where(['<', 'parent_id', 0])->all();


        return $this->render('index', ['model' => $model]);
    }


    public function actionAddCategory()
    {
        $model = new Category();


        if ($model->load(Yii::$app->request->post())) {
            $model->parent_id = -1;
            if ($model->save()) {
                return $this->redirect('index');
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
    public function actionView($category_id, $parent_id = null)
    {
        $model = Category::findOne(['id' => $category_id]);
        $subcategory = Category::find()->where(['parent_id' => $model->id])->all();
      
    
        return $this->render('view_category', [
            'model' => $model,
            'subcategory' => $subcategory,
            // 'breadcrumbs' => $breadcrumbs,
        ]);
    }
    
//     private function getBreadcrumbs($model, $breadcrumbs = [])
// {
//     if (!$model->parent_id) {
//         return $breadcrumbs;
//     }

//     $parent = Category::findOne(['id' => $model->parent_id]);
//     if (!$parent) {
//         return $breadcrumbs;
//     }

//     array_unshift($breadcrumbs, [
//         'label' => $parent->name,
//         'url' => ['category/view', 'category_id' => $parent->id],
//     ]);

//     return $this->getBreadcrumbs($parent, $breadcrumbs);
// }

    public function actionDeleteCategory()
    {
    }
}
