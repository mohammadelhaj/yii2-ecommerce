<?php

namespace common\models;

use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;


/**
 * Product model
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $name
 * @property double $price
 * @property string $description 
 */
class Product extends ActiveRecord
{
    public function rules()
    {
        return [
            [['name', 'price', 'currency'], 'required'],
            [['description', 'category_id',], 'safe'],


        ];
    }
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }
    public function getImages()
    {
        return $this->hasMany(Product::class, ['product_id' => 'id']);
    }

    // public function getSubcategories()
    // {
    //     return $this->hasMany(Category::class, ['parent_id' => 'id']);
    // }
}
