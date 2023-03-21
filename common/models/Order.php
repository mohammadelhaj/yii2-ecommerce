<?php

namespace common\models;


use yii\db\ActiveRecord;


/**
 * Currency model
 *
 * @property integer id	
 * @property integer $user_id		
 * @property integer $seller_id		
 * @property integer product_id	
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property double $total_cost
 * @property string $order_status
 */

class Order extends ActiveRecord
{
    public function rules()
    {

        return [

            [['first_name', 'last_name', 'address'], 'required'],
            [['user_id', 'total_cost', 'order_status'], 'safe'],

        ];
    }
    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'product_id']);
    }
}
