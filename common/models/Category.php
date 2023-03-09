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
            [['name', 'description'], 'required'],
        ];
    }
}
