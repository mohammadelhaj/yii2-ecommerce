<?php

namespace frontend\controllers;

use common\models\Order;
use common\models\Product;
use common\models\User;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile;

class ProfileController extends Controller
{
    public function actionIndex()
    {
        $user = Yii::$app->user->id;
        $model = User::find()->where(['id' => $user])->one();
        $countSoldProducts = Order::find()->where(['seller_id' => $user, 'order_status' => 'confirmed'])->count();
        $myproductsCount = Product::find()->where(['created_by' => $user])->count();
        $boughtProductsCount = Order::find()->where(['user_id' => $user, 'order_status' => 'confirmed'])->count();
        $acceptOrdersCount = Order::find()->where(['seller_id' => $user, 'order_status' => 'pending'])->count();
        $waitingListCount = Order::find()->where(['user_id' => $user, 'order_status' => 'pending'])->count();

        return $this->render('index', [
            'model' => $model,
            'countSoldProducts' => $countSoldProducts,
            'myproductsCount' => $myproductsCount,
            'boughtProductsCount' => $boughtProductsCount,
            'acceptOrdersCount' => $acceptOrdersCount,
            'waitingListCount' => $waitingListCount,

        ]);
    }
}
