<?php
use yii\bootstrap5\Breadcrumbs;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="container pt-1">
    <div class="row">
        <div class="col-12">
            <div class="bg-light p-3 rounded">
                <?= Breadcrumbs::widget([
                    'links' => isset($breadcrumbs) ? $breadcrumbs : [],
                ]); ?>
            </div>
        </div>
    </div>
</div>

<div class="container pt-1">
    <div class="row">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-body">
                    <h4 class="card-title"><?= $model->name ?></h4>
                    <p class="card-text"><?= $model->description ?></p>
                    <a href="<?=Url::to(['subcategory/update-category', 'category_id' => $model->id]) ?>" class="btn btn-primary">Edit this category</a>
                    <a href="<?=Url::to(['subcategory/delete-category', 'category_id' => $model->id]) ?>" class="btn btn-danger">Delete this category</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add sub category</h4>
                    <?= Html::a('Add sub category', ['subcategory/add-subcategory', 'parent_id' => $model->id], ['class' => 'btn btn-success']) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h4 class="my-4"><u>Category</u></h4>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $model->name ?></h5>
                    <p class="card-text"><?= $model->description ?></p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h4 class="my-4"><u>Sub categories</u></h4>
            <?php foreach ($subcategory as $sub) : ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $sub->name ?></h5>
                        <a href="<?= \yii\helpers\Url::to(['category/view', 'category_id' => $sub->id, 'parent_id' => $sub->parent_id]) ?>" class="btn btn-primary">View sub category</a>
                        <?= Html::a('Add sub category', ['subcategory/add-subcategory', 'parent_id' => $sub->id], ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
