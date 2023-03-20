<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

?>
<div style="border:1px solid red; float:right;">
    <?= Html::a('add category', ['category/add-category'], ['class' => 'btn btn-link logout text-decoration-none']) ?>
</div>

<div class="container">
    <h1 class="text-center">all Categories</h1>

    <ul class="list-group">
        <?php foreach ($model as $model) : ?>
            <li class="list-group-item ">
                <div class="row">
                    <div class="col-md-10" style="display: inline-block;">
                        <h5 class="mb-1"><?= $model->name ?></h5>
                        <p class="mb-0"><?= $model->description ?></p>
                    </div>
                    <div class="col-md-2 text-danger" style="font-size: 30px;display: inline-block;">
                        <?= Html::a(Html::tag('i', '', ['class' => 'fa fa-eye']), ['category/view', 'category_id' => $model->id], ['class' => 'me-3 text-decoration-none', 'title' => 'View']) ?>
                        <?= Html::a(Html::tag('i', '', ['class' => 'fa fa-pencil']), ['category/update', 'category_id' => $model->id], ['class' => 'me-3 text-decoration-none', 'title' => 'update']) ?>
                        <?= Html::a(Html::tag('i', '', ['class' => 'fa fa-trash']), ['category/delete', 'category_id' => $model->id], ['class' => 'me-3 text-decoration-none', 'title' => 'view']) ?>
                    </div>
                </div>

            </li>
        <?php endforeach; ?>
    </ul>
</div>




</div>