<?php

namespace common\models;


use yii\db\ActiveRecord;


/**
 * Category model
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 * @property string $description
 */
class Category extends ActiveRecord
{
    public function rules()
    {
        return [
            ['name', 'required'],
            [['title','description'], 'safe']
        ];
    }
    public function getParent()
    {
        return $this->hasOne(Category::class, ['id' => 'parent_id']);
    }
    public function getProduct(){
        return $this->hasMany(Product::class,['category_id' => 'id']);
    }
    public function getProductImages(){
        return $this->hasMany(ProductImage::class,['product_id' => 'id'])
        ->via('product');
    }

    public function getSubcategories()
    {
        return $this->hasOne(Category::class, ['parent_id' => 'id']);
    }
}
