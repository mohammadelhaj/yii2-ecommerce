<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

?>

<h1>
    here to add currencies:
</h1>
<div class="container">

</div>
<?php
    $form = ActiveForm::begin() ?>
    <?= $form->field($model, 'currency_country') ?>
    <?= $form->field($model, 'currency_name') ?>
    <?= $form->field($model, 'price_in_dollar')?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('add', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>