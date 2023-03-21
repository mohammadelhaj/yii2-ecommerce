<?php

namespace frontend\controllers;

use common\models\Order;
use common\models\Product;
use Yii;
use yii\web\Controller;


/**
 * Order controller
 */
class OrderController extends Controller
{
    public function actionCheckout($product_id, $owned_by)
    {
        $user = Yii::$app->user->id;
        $order = new Order();
        $product = Product::find()->where(['id' => $product_id, 'created_by' => $owned_by])->one();


        if ($order->load(Yii::$app->request->post())) {
            $order->user_id = $user;
            $order->seller_id = $_GET['owned_by'];
            $order->product_id = $product_id;
            $order->order_status = "pending";
            $order->total_cost = $product->price;
            if ($order->save()) {
                return $this->redirect(['site/index']);
            }
        }

        return $this->render('checkout', [
            'order' => $order,
            'product' => $product,
        ]);
    }
    public function actionBoughtProducts()
    {

        $user = Yii::$app->user->id;
        $model = Order::find()->where(['user_id' => $user, 'order_status' => 'confirmed'])->all();
        return $this->render('boughtProducts', [
            'model' => $model,
        ]);
    }
    public function actionSoldProducts()
    {
        $user = Yii::$app->user->id;
        $model = Order::find()->where(['seller_id' => $user, 'order_status' => 'confirmed'])->all();
        return $this->render('soldProducts', [
            'model' => $model,
        ]);
    }
    public function actionAcceptOrders()
    {
        $user = Yii::$app->user->id;
        $model = Order::find()->where(['seller_id' => $user, 'order_status' => 'pending'])->orderBy('product_id ASC')->all();
        return $this->render('acceptOrders', [
            'model' => $model,
        ]);
    }
    public function actionWaitingList()
    {
        $user = Yii::$app->user->id;
        $model = Order::find()->where(['user_id' => $user, 'order_status' => 'pending'])->all();
        return $this->render('waitingList', [
            'model' => $model,
        ]);
    }
}
