<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Url;


?>


<div class="container">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'category_id')->dropDownList(
        $parent,
        ['prompt' => 'Select a category', 'id' => 'select', 'data-lvl' => '1']
    ); ?>

    <div id="selectContainer">

    </div>
    <?php $form = ActiveForm::end(); ?>
</div>