<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Carousel;
use yii\helpers\Html;

?>

<div class="container">
    <div class="row justify-content-left">
        <div class="col-12 col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

                    <h3 class="mb-4">Upload up to 5 images for the slider:</h3>

                    <?= $form->field($model, 'name[]')->fileInput(['multiple' => true, 'class' => '']) ?>

                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary btn-md w-100']) ?>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col shadow">
            <?= $this->render('_carousel', [
                'slider' => $slider,
            ]); ?>
        </div>
    </div>
</div>
