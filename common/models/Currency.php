<?php

namespace common\models;


use yii\db\ActiveRecord;


/**
 * Currency model
 *
 * @property integer $id
 * @property integer $currency_country			
 * @property string $currency_name
 * @property string $price_in_dollar
 */

class Currency extends ActiveRecord
{
    public function rules()
    {

        return [
            [['currency_country', 'currency_name'], 'unique'],
            [['currency_country', 'currency_name', 'price_in_dollar'], 'required'],
            ['price_in_dollar','double']
        ];
    }
}
