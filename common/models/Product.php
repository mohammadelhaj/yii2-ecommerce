<?php

namespace common\models;


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
            [['name','price'], 'required'],
          
        ];
    }
    // public function getParent()
    // {
    //     return $this->hasOne(Category::class, ['id' => 'parent_id']);
    // }

    // public function getSubcategories()
    // {
    //     return $this->hasMany(Category::class, ['parent_id' => 'id']);
    // }
}
