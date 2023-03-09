<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

?>
<div style="border:1px solid red; float:right;">
    <?= Html::a('add category', ['category/add-category'], ['class' => 'btn btn-link logout text-decoration-none']) ?>
</div>
<div class="sub" style="border: 1px solid red;height: 100%;width: 100%;">

    <div style="border:1px solid blue;width: 20%;height: 100%;">
        <?php
        foreach ($model as $model) : ?>
            <span>
                <?= $model->description ?>
                </br>
            </span>
        <?php endforeach; ?>
    </div>
</div>