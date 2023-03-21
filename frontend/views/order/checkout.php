<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

?>

<div class="row g-5 pt-2">

    <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">product details:</span>
          
        </h4>
        <ul class="list-group mb-3">
            <?php
            ?>
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                    <h6 class="my-0"><?=$product->name?></h6>
                    <small class="text-muted">asfd safd er wd sdf </small>
                </div>
                <span class="text-muted"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span>price</span>
                <strong>(<?=$product->currencyName->currency_name?>)<?=$product->price?></strong>
            </li>
            <?php

            ?>

        </ul>

    </div>
    <div class="col-md-7 col-lg-8">
        <?php $form = ActiveForm::begin(); ?>

        <h4 class="mb-3">Billing address :</h4>
        <hr class="my-4">
        <div class="row g-3">

            <div class="col-sm-6">

                <?= $form->field($order, 'first_name')->textInput(['class' => 'form-control'])->label('first name'); ?>
            </div>

            <div class="col-sm-6">
                <?= $form->field($order, 'last_name')->textInput(['class' => 'form-control'])->label('last name'); ?>

            </div>
            <div class="col-12">
                <?= $form->field($order, 'address')->textInput(['placeholder' => 'Your address', 'class' => 'form-control'])->label('Address'); ?>
            </div>

        </div>
        <hr class="my-4">

        <?= Html::submitButton('Place your order', ['class' => 'w-100 btn btn-primary btn-lg']) ?>


        <?php ActiveForm::end(); ?>
    </div>
</div>