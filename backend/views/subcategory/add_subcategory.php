<h1>
    hello to sub cat
</h1>
<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

    $form = ActiveForm::begin() ?>
    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'title') ?>
    <?= $form->field($model, 'description') ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('add', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>