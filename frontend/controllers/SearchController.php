<?php

namespace frontend\controllers;

use common\models\Currency;
use common\models\Product;
use PhpParser\Node\Expr\Print_;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\web\Controller;


/**
 * Search controller
 */
class SearchController extends Controller
{
    public function actionSearch()
    {
        $model = new Product();
        $currency = Currency::find()->all();
        $minPrice = Yii::$app->request->get('min_price');
        $maxPrice = Yii::$app->request->get('max_price');
        $currencyId = null;
        if (isset(Yii::$app->request->get('Product')['currency'])) {
            $currencyId = Yii::$app->request->get('Product')['currency'];
        }

        if ($model->load(Yii::$app->request->get())) {

            $query = Product::find()->where(['like', 'name', $model->name]);

            if (!empty($minPrice)) {
                $query->andWhere(['>=', 'price', $minPrice]);
            }
            if (!empty($maxPrice)) {
                $query->andWhere(['<=', 'price', $maxPrice]);
            }
            if (!empty($currencyId)) {
                $query->andWhere(['currency' => $currencyId]);
            }
            $results = $query->all();
            return $this->render('search', [
                'model' => $model,
                'query' => $results,
                'currency' => ArrayHelper::map($currency, 'id', 'currency_name'),
            ]);
        }
    }
}
