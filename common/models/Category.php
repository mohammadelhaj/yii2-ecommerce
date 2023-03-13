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

    public function getSubcategories()
    {
        return $this->hasMany(Category::class, ['parent_id' => 'id']);
    }
}
