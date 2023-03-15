<?php

namespace frontend\controllers;

use common\models\Category;
use common\models\Currency;
use common\models\Product;
use common\models\ProductImage;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile;

/**
 * Product controller
 */
class ProductController extends Controller
{
    public function actionAddProduct()
    {
        $user = Yii::$app->user->id;


        $model = new Product();
        $parent = Category::find()->where(['<', 'parent_id', 0])->all();

        $image = new ProductImage();

        $currency = Currency::find()->all();

        if ($model->load(Yii::$app->request->post())  && $image->load(Yii::$app->request->post())) {
            $model->created_by = $user;
            $image->image_name = UploadedFile::getInstances($image, 'image_name');
            if ($image->image_name && $image->validate()) {
                if (!file_exists(Yii::getAlias('@static'))) {
                    mkdir(Yii::getAlias('@static'), 0777, true);
                }
                $path = Yii::getAlias('@static') . DIRECTORY_SEPARATOR;
                $lastProduct = Product::find()->orderBy(['ID' => SORT_DESC])->limit(1)->one();
                foreach ($image->image_name as $image) {
                    $img = new ProductImage();
                    $img->image_name = time() . rand(100, 999) . '.' . $image->extension;
                    $img->product_id = $lastProduct->id + 1;
                    if ($img->save(false)) {
                        $image->saveAs($path . $img->image_name);
                    }
                }
            }
            if ($model->save()) {

                return $this->redirect(['add-product']);
            }
        }
        return $this->render('add_product', [
            'model' => $model,
            'parent' =>   ArrayHelper::map($parent, 'id', 'name'),
            'currency' =>   ArrayHelper::map($currency, 'id', 'currency_name'),

            'image' => $image,
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
    public function actionSearch()
    {
        $search = Product::find()->where(['like', 'name', $_GET['q'] . '%', false]);

        return $this->render('search', ['model' => $search]);
    }
}
