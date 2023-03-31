<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'my product';
?>

<div class="container">


    <div class="row justify-content-left pt-3">
<h1>
    here all your products:
</h1>
        <?php
        if (empty($model)) {
            echo "<h4>you didnt add any products yet</h4>";
        } else {
            foreach ($model as $product) {


        ?>
                <div class="col-lg-3 col-md-4 col-sm-5 p-3 mt-3">
                    <div class="card text-black">

                        <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>">
                            <img src="http://static.local/<?= $product->productImages[0]->image_name ?>" class="card-img-top" alt="...">
                        </a>
                        <!-- <?php #print_r($product->productImages[0]);
                                ?> -->
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h2 class="card-title"><a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>" class="text-decoration-none text-dark"><?= $product->name ?></a></h2>

                            </div>
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="card-text">Category: <?= $product->category->name ?></p>

                                </div>
                            </div>
                            <div class="d-flex justify-content-between font-weight-bold mt-1">
                                <span>price: <?= $product->price ?> (<?= $product->currencyName->currency_name ?>)</span>
                                <?php
                                if ($product->status ==  "pending") {
                                ?>
                                    <span class="badge bg-warning rounded-pill">pending</span>
                                <?php } else if ($product->status ==  "sold") { ?>
                                    <span class="badge bg-success rounded-pill">sold</span>
                                <?php } else { ?>
                                    <span class="badge bg-danger rounded-pill">error</span>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 p-3 mt-3">
                    <div class="card text-black">

                        <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>">
                            <img src="http://static.local/<?= $product->productImages[0]->image_name ?>" class="card-img-top" alt="...">
                        </a>
                        <!-- <?php #print_r($product->productImages[0]);
                                ?> -->
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h2 class="card-title"><a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>" class="text-decoration-none text-dark"><?= $product->name ?></a></h2>

                            </div>
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="card-text">Category: <?= $product->category->name ?></p>

                                </div>
                            </div>
                            <div class="d-flex justify-content-between font-weight-bold mt-1">
                                <span>price: <?= $product->price ?> (<?= $product->currencyName->currency_name ?>)</span>
                                <?php
                                if ($product->status ==  "pending") {
                                ?>
                                    <span class="badge bg-warning rounded-pill">pending</span>
                                <?php } else if ($product->status ==  "sold") { ?>
                                    <span class="badge bg-success rounded-pill">sold</span>
                                <?php } else { ?>
                                    <span class="badge bg-danger rounded-pill">error</span>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                </div><div class="col-lg-3 col-md-4 col-sm-5 p-3 mt-3">
                    <div class="card text-black">

                        <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>">
                            <img src="http://static.local/<?= $product->productImages[0]->image_name ?>" class="card-img-top" alt="...">
                        </a>
                        <!-- <?php #print_r($product->productImages[0]);
                                ?> -->
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h2 class="card-title"><a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>" class="text-decoration-none text-dark"><?= $product->name ?></a></h2>

                            </div>
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="card-text">Category: <?= $product->category->name ?></p>

                                </div>
                            </div>
                            <div class="d-flex justify-content-between font-weight-bold mt-1">
                                <span>price: <?= $product->price ?> (<?= $product->currencyName->currency_name ?>)</span>
                                <?php
                                if ($product->status ==  "pending") {
                                ?>
                                    <span class="badge bg-warning rounded-pill">pending</span>
                                <?php } else if ($product->status ==  "sold") { ?>
                                    <span class="badge bg-success rounded-pill">sold</span>
                                <?php } else { ?>
                                    <span class="badge bg-danger rounded-pill">error</span>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                </div><div class="col-lg-3 col-md-4 col-sm-5 p-3 mt-3">
                    <div class="card text-black">

                        <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>">
                            <img src="http://static.local/<?= $product->productImages[0]->image_name ?>" class="card-img-top" alt="...">
                        </a>
                        <!-- <?php #print_r($product->productImages[0]);
                                ?> -->
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h2 class="card-title"><a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>" class="text-decoration-none text-dark"><?= $product->name ?></a></h2>

                            </div>
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="card-text">Category: <?= $product->category->name ?></p>

                                </div>
                            </div>
                            <div class="d-flex justify-content-between font-weight-bold mt-1">
                                <span>price: <?= $product->price ?> (<?= $product->currencyName->currency_name ?>)</span>
                                <?php
                                if ($product->status ==  "pending") {
                                ?>
                                    <span class="badge bg-warning rounded-pill">pending</span>
                                <?php } else if ($product->status ==  "sold") { ?>
                                    <span class="badge bg-success rounded-pill">sold</span>
                                <?php } else { ?>
                                    <span class="badge bg-danger rounded-pill">error</span>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                </div>
                

        <?php }
        } ?>
    </div>
</div>