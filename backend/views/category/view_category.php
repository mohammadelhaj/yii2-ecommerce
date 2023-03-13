<?php

use yii\bootstrap5\Breadcrumbs;
use yii\helpers\Html;
?>


<div class="border border-danger">
    <div style="border:1px solid red; float:right;">
        <?= Html::a('add sub category', ['subcategory/add-subcategory', 'parent_id' => $model->id], ['class' => 'btn btn-link logout text-decoration-none']) ?>
    </div>
    <div style="border:1px solid red; float:right;">
        <?= Html::a('delete this sub category', ['subcategory/delete-subcategory', 'parent_id' => $model->id], ['class' => 'btn btn-link logout text-decoration-none']) ?>
    </div>
    <h1>
        add a sub category to <u><?= $model->name ?></u>
    </h1>
</div>

<h3>
    drop down title: <u><?= $model->title ?></u>
</h3>
<div class="row text-center">
    <div class="col-md-6 border border-danger ">

        <h3>
            <u>
                Category:
            </u>
            <?= $model->name ?>
        </h3>

    </div>
    <div class="col-md-6 border border-danger">

        <h3>
            Sub categories
        </h3>
    </div>
  
</div>
<div class="row">
    <div class="col-md-6 border border-danger">
        name: <?= $model->name ?></br>
        description: <?= $model->description ?>
        <button>edit this category</button>
    </div>
    <div class="col-md-6 border border-danger">
        <?php foreach ($subcategory as $sub) : ?>
            <?= $sub->name ?></br>
            <?= Html::a('view sub cat for this sub', ['category/view', 'category_id' => $sub->id, 'parent_id' => $sub->parent_id], ['class' => 'btn btn-link logout text-decoration-none']) ?>
            <?= Html::a('add a sub to this categ', ['subcategory/add-subcategory', 'parent_id' => $sub->id], ['class' => 'btn btn-link logout text-decoration-none']) ?>
            <hr>
        <?php endforeach ?>
    </div>
    
</div>


</div>