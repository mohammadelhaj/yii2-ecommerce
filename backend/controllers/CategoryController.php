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

    //check if a sub exist for a category or for another sub
    public function subExist($id)
    {
        $subcategories = Category::find()->where(['parent_id' => $id])->all();

        if (!empty($subcategories)) {
            return true;
        }

        return false;
    }
    public function actionUpdateCategory()
    {
    }
    public function actionView($category_id, $parent_id = null)
    {
        $breadcrumbs = [];
        $model = Category::findOne(['id' => $category_id]);
        if ($model->parent_id != -1) {
            $parentModel = Category::findOne(['id' => $model->parent_id]);
            $breadcrumbs[] = ['label' => $parentModel->name, 'url' => ['category/view', 'category_id' => $parentModel->id]];
        }else {
        }
        $breadcrumbs[] = ['label' => $model->name];
        $subcategory = Category::find()->where(['parent_id' => $model->id])->all();
        return $this->render('view_category', [
            'model' => $model,
            'subcategory' => $subcategory,
            'breadcrumbs' => $breadcrumbs
        ]);
    }



    public function actionDeleteCategory()
    {
    }
}
