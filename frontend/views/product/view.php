<?php

use yii\helpers\Html; ?>
<div class="container my-5">
    <div class="row">
        <div class="col-md-5">
            <div class="main-img">
                <img class="img-fluid" src="http://static.local/<?= $model->productImages[0]->image_name ?>" width="510px" height="340px">
                <div class="row my-3 previews">
                    <?php



                    foreach ($model->productImages as $img) {
                    ?>
                        <div class="col-md-3">
                            <img class="w-100" src="http://static.local/<?= $img->image_name ?>" alt="Sale">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="px-2">
                <div class="mb-3">
                    <span class="text-muted me-2">Category:</span>
                    <span class="fw-bold"><?= $model->category->name ?></span>
                </div>
                <h2 class="my-3"><?= $model->name ?></h2>
                <div class="my-4">
                    <p class="mb-1 ">
                        <del><?= (int)($model->price + ((20 * $model->price) / 100)) ?> (<?= $model->currencyName->currency_name ?>)</del>
                        <span class="text-danger">(20% off)</span>
                    </p>
                    <p class="mb-1 display-6"><?= $model->price ?> (<?= $model->currencyName->currency_name ?>)</p>
                </div>

                <div class="my-4">
                    <h3 class="text-muted mb-3">Product Details</h3>
                    <p><?= $model->description ?></p>
                </div>
                <?php 
                if (!Yii::$app->user->id) {                
                
                ?>
                <div class="d-flex my-5">
                    <div class="me-3">
                        <?= Html::a('go to billing', ['order/checkout', 'product_id' => $model->id, 'owned_by' => $model->created_by], [
                            'class' => 'btn btn-primary shadow',
                        ]);
                        ?>


                    </div>

                </div>
                <?php } ?>
            </div>
        </div>

    </div>
</div>