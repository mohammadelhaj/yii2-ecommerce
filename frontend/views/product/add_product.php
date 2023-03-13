<?php

use common\models\Category;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

?>
<div class="container">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'category_id')->dropDownList(
        ArrayHelper::map(Category::find()->where(['<', 'parent_id', 0])->all(), 'id', 'name'),
        ['prompt' => 'Select a category', 'id' => 'select']
    ); ?>
  
    <?php $form = ActiveForm::end(); ?>
    
</div>