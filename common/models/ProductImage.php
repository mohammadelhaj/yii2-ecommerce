<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * ProductImage model
 *
 * @property integer $id 
 * @property integer $product_id
 * @property string $image_name
 * @property string $title
 */
class ProductImage extends Product
{


    public static function tableName()
    {
        return '{{%product_image}}';
    }

    public function rules()
    {
        return [
            [['image_name'], 'required'],
            [['image_name'], 'file', 'extensions' => 'png, jpg, jpeg, gif,webp','maxFiles' => 5,'skipOnEmpty' => false],
          
        ];
    }
    
}
