<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

?>

<h1>
    here to add cateogries:
</h1>
<div class="container-fluid">

</div>
<?php
$form = ActiveForm::begin() ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'description') ?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('add', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end() ?>