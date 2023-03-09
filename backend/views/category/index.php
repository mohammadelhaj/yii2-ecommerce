<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

?>
<div style="border:1px solid red; float:right;">
    <?= Html::a('add category', ['category/add-category'], ['class' => 'btn btn-link logout text-decoration-none']) ?>
</div>
<div class="container">
    <h1 class="text-center">Hello Index Category</h1>
    <div class="list-group list-group-flush">
        <?php foreach ($model as $model) : ?>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex justify-content-between align-items-center">
                    <div style="width: 85%;">
                        <h5 class="mb-1"><?= $model->name ?></h5>
                        <p class="mb-0"><?= $model->description ?></p>
                    </div>
                    <div class="text-danger d-flex align-items-center" style="font-size: 30px;">
                        <a href="#" class="me-3" title="View">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="#" class="me-3" title="Edit">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="#" title="Delete">
                            <i class="fa fa-trash"></i>
                        </a>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>

