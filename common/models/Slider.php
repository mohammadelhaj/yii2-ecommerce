<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * Slider model
 *
 * @property integer $id
 * @property string $name
 * @property string $title

 */
class Slider extends ActiveRecord
{


    public static function tableName()
    {
        return '{{%homepage_slider}}';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
        
            [['name'], 'file', 'extensions' => 'png, jpg, jpeg, gif,webp','maxFiles' => 5,'skipOnEmpty' => false],
          
        ];
    }
    
}
