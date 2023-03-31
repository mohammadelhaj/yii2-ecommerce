<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

$this->title = 'add product';

?>


<div class="container my-3">
    <?php
    if (Yii::$app->user->isGuest) {
        echo "<h1>please log in to add product";
    } else {
        $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        <?= $form->field($model, 'category_id')->dropDownList(
            $parent,
            ['prompt' => 'Select a category', 'id' => 'select', 'data-lvl' => '1']
        ); ?>

        <div id="selectContainer">

        </div>
        <div id="showForm" style="display: none;">
            <hr>
            <h3>product info: </h3>
            <?= $form->field($model, 'name')->textInput() ?>
            <div style="display: inline-block;">
                <div style="display: inline-block;">
                    <?= $form->field($model, 'price')->input('number') ?>
                </div>
                <div style="display: inline-block;vertical-align: top;">
                    <?= $form->field($model, 'currency')->dropDownList(
                        $currency,
                        ['prompt' => 'Select a currency']
                    ); ?>
                </div>
            </div>

            <?= $form->field($model, 'description')->textInput() ?>

            <?= $form->field($image, 'image_name[]')->label('Image')->fileInput(['multiple' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            </div>

        </div>
    <?php $form = ActiveForm::end();
    } ?>
</div>