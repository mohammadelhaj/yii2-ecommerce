<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';

?>
<div class="container my-3 px-5">
    <div class="row ">
        <div class=" col-lg-12 col-md-12">
            <div class="card mt-0">
                <div class="card-body">

                    <h1 class="card-title text-center"><?= Html::encode($this->title) ?></h1>
                    <p class="card-text text-center">Please fill out the following fields to login:</p>
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                        <?= $form->field($model, 'username')->textInput(['class' => 'form-control', 'autofocus' => true]) ?>
                        <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control']) ?>
                        <?= $form->field($model, 'rememberMe')->checkbox(['class' => 'form-check-input']) ?>
                        <div class="text-center mt-3">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>
                    <?php ActiveForm::end(); ?>
                    <div class="mt-3 text-center">
                        If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                        <br>
                        Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

