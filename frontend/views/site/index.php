<?php

/** @var yii\web\View $this */

use common\models\Product;

$this->title = 'e-commerce';
?>


<div class="row justify-content-left">
    <?php
    foreach ($products as $product) {

    ?>
        <div class="col-md-3">
            <div class="card text-black">
                <i class="fa fa-shopping-cart fa-lg pt-3 pb-1 px-3"></i>
                <img src="http://static.local/<?= $product->productImages[0]->image_name ?>" class="card-img-top" alt="Apple Computer" />
                <!-- <?php #print_r($product->productImages[0]);
                        ?> -->
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="card-title"><?= $product->name ?></h5>

                    </div>
                    <div>
                        <div class="d-flex justify-content-between">
                            <span>Category: <?= $product->category->name ?></span>
                        </div>

                    </div>
                    <div class="d-flex justify-content-left total font-weight-bold mt-4">
                        <span>price: <?= $product->price ?> (<?= $product->currencyName->currency_name ?>)</span>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>
</div>