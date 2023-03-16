<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Carousel;
use yii\helpers\Html;

?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);

?>

<h3>upload for the silder 5 image max!</h3>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8 ">
            <?php $this->title = 'Add Employee';
            $this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
            $this->params['breadcrumbs'][] = $this->title; ?>
            <h1>Multiple Image File Upload with Preview</h1>

            <?= $form->field($model, 'name[]')->label('Image')->fileInput(['multiple' => true]) ?>
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>

            <div class="mt-3" id="img_list">

            </div>
        </div>


    </div>
</div>

<?php ActiveForm::end(); ?>

<!--
<label for="exampleFileUpload" class="button">Upload File</label>
<input type="file" id="exampleFileUpload" class="show-for-sr">
-->

<h5>how it should look like in the home page:</h5>
<?= $this->render('_carousel', ['slider' => $slider]); ?>