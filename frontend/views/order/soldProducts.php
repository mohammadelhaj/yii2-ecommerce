<?php

use yii\helpers\Url;
?>
<div class="container">

    <div class="row text-center py-3">
        <h3>
            sold products:
        </h3>
        <?php
        if (empty($model)) {
        ?>
            <div class="col-ms-3 col-md-4 col-lg-6 m-auto">
                <h1 class="h1">you havent sold any product</h1>
            </div>

            <?php
        } else {
            foreach ($model as $order) : ?>
                <div class="col-lg-4 col-md-5 col-sm-5 p-3 mt-3">
                    <div class="card">
                        <a href="<?= Url::to(['product/view', 'product_id' => $order->product->id]) ?>">
                            <img src="http://static.local/<?= $order->product->productImages[0]->image_name ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h2 class="card-title"><a href="<?= Url::to(['product/view', 'product_id' => $order->product->id]) ?>" class="text-decoration-none text-dark"><?= $order->product->name ?></a></h2>

                            </div>
                            <div class="d-flex justify-content-between align-items-center">

                                <span class="price">Sold for: <?= $order['total_cost'] ?> (<?= $order->product->currencyName->currency_name ?>)</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="card-text">Category: <?= $order->product->category->name ?></p>

                            </div>
                            <div class="d-flex justify-content-between align-items-center">

                                <p class="card-text">Sold to: <?= $order->buyer->username ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-5 p-3 mt-3">
                    <div class="card">
                        <a href="<?= Url::to(['product/view', 'product_id' => $order->product->id]) ?>">
                            <img src="http://static.local/<?= $order->product->productImages[0]->image_name ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h2 class="card-title"><a href="<?= Url::to(['product/view', 'product_id' => $order->product->id]) ?>" class="text-decoration-none text-dark"><?= $order->product->name ?></a></h2>

                            </div>
                            <div class="d-flex justify-content-between align-items-center">

                                <span class="price">Sold for: <?= $order['total_cost'] ?> (<?= $order->product->currencyName->currency_name ?>)</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="card-text">Category: <?= $order->product->category->name ?></p>

                            </div>
                            <div class="d-flex justify-content-between align-items-center">

                                <p class="card-text">Sold to: <?= $order->buyer->username ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-5 p-3 mt-3">
                    <div class="card">
                        <a href="<?= Url::to(['product/view', 'product_id' => $order->product->id]) ?>">
                            <img src="http://static.local/<?= $order->product->productImages[0]->image_name ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h2 class="card-title"><a href="<?= Url::to(['product/view', 'product_id' => $order->product->id]) ?>" class="text-decoration-none text-dark"><?= $order->product->name ?></a></h2>

                            </div>
                            <div class="d-flex justify-content-between align-items-center">

                                <span class="price">Sold for: <?= $order['total_cost'] ?> (<?= $order->product->currencyName->currency_name ?>)</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="card-text">Category: <?= $order->product->category->name ?></p>

                            </div>
                            <div class="d-flex justify-content-between align-items-center">

                                <p class="card-text">Sold to: <?= $order->buyer->username ?></p>
                            </div>
                        </div>
                    </div>
                </div>



        <?php endforeach;
        } ?>
    </div>
</div>