<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

?>
<div class="container my-2">
    <h3>
       here to update your profile:
    </h3>

    <?php $form = ActiveForm::begin(); ?>

    <div>
        <?= $form->field($model, 'username')->textInput() ?>
        <?= $form->field($model, 'profile_pic')->fileInput() ?>

    </div>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>