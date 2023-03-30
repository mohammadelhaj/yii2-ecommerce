<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img" src="/assets/img/24436387_0.webp" alt="Card image cap" id="main-image-cadre">
                </div>
                <div class="row">
                    <div class="col-1 align-self-center">
                        <a href="#multi-item-example" role="button" data-bs-slide="prev">
                            <i class="text-dark fa fa-chevron-left"></i>
                        </a>
                    </div>

                    <div id="multi-item-example" class="col-10 carousel slide carousel-wrapper" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="/assets/img/36637840_0.webp" alt="Product Image 1">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="/assets/img/chris-mustang-12-pro-max.webp" alt="Product Image 2">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="/assets/img/5028362_0.webp" alt="Product Image 3">
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="/assets/img/a8317870-7eb0-4214-bc9e-7107e7732ff2-600x600.png" alt="Product Image 4">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="/assets/img/10466454_0.webp" alt="Product Image 5">
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="/assets/img/images.jpg" alt="Product Image 6">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 align-self-center">
                        <a href="#multi-item-example" role="button" data-bs-slide="next">
                            <i class="text-dark fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2">Active Wear</h1>
                        <span class="h3 py-2">$25.00</span> <span class="h3 py-2 text-danger"><del> 50$</del></span>


                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Brand:</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>Easy Wear</strong></p>
                            </li>
                        </ul>

                        <h6>Description:</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>
                        <ul class="list-inline">

                        </ul>

                        <h6>Specification:</h6>
                        <ul class="list-unstyled pb-3">
                            <li>Lorem ipsum dolor sit</li>
                            <li>Amet, consectetur</li>
                            <li>Adipiscing elit,set</li>
                            <li>Duis aute irure</li>
                            <li>Ut enim ad minim</li>
                            <li>Dolore magna aliqua</li>
                            <li>Excepteur sint</li>
                        </ul>
                        <div class="row pb-3">

                            <div class="col d-grid">
                                <?php
                                if (!Yii::$app->user->id) {


                                ?>
                                    <?= Html::a('go to billing', ['order/checkout', 'product_id' => $model->id, 'owned_by' => $model->created_by], [
                                        'class' => 'btn btn-success btn-lg',
                                    ]);
                                    ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<div class="row">
    <section class="bg-light ">
        <div class="container container_slider ">

            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Related products</h1>
                </div>
            </div>
            <button class="slider-prev slider-prev-rel" type="button">
                <i class="fa fa-chevron-left"></i>
            </button>
            <button class="slider-next slider-next-rel" type="button">
                <i class="fa fa-chevron-right"></i>
            </button>
            <div class="row slider">
                <?php
                foreach ($products as $product) {
                ?>
                    <div class="col-md-4 mx-3 mb-4">
                        <div class="card">
                            <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>">
                                <img src="http://static.local/<?= $product->productImages[0]->image_name ?>" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <p class="card-text d-flex justify-content-between">
                                    <span>
                                        <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>" class="h2 text-decoration-none text-dark"><?= $product->name ?></a>
                                    </span>
                                    <span> <?= $product->price ?><?= $product->currencyName->currency_name ?>
                                        <del class="text-danger"><?= (int)($product->price + ((20 * $product->price) / 100)) ?><?= $product->currencyName->currency_name ?></del>
                                    </span>
                                </p>
                                <p class="card-text d-flex justify-content-between">
                                    <span>Category: <?= $product->category->name ?></span> <span>added by: <?= $product->createdby->username ?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mx-3 mb-4">
                        <div class="card">
                            <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>">
                                <img src="http://static.local/<?= $product->productImages[0]->image_name ?>" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <p class="card-text d-flex justify-content-between">
                                    <span>
                                        <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>" class="h2 text-decoration-none text-dark"><?= $product->name ?></a>
                                    </span>
                                    <span> <?= $product->price ?><?= $product->currencyName->currency_name ?>
                                        <del class="text-danger"><?= (int)($product->price + ((20 * $product->price) / 100)) ?><?= $product->currencyName->currency_name ?></del>
                                    </span>
                                </p>
                                <p class="card-text d-flex justify-content-between">
                                    <span>Category: <?= $product->category->name ?></span> <span>added by: <?= $product->createdby->username ?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mx-3 mb-4">
                        <div class="card">
                            <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>">
                                <img src="http://static.local/<?= $product->productImages[0]->image_name ?>" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <p class="card-text d-flex justify-content-between">
                                    <span>
                                        <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>" class="h2 text-decoration-none text-dark"><?= $product->name ?></a>
                                    </span>
                                    <span> <?= $product->price ?><?= $product->currencyName->currency_name ?>
                                        <del class="text-danger"><?= (int)($product->price + ((20 * $product->price) / 100)) ?><?= $product->currencyName->currency_name ?></del>
                                    </span>
                                </p>
                                <p class="card-text d-flex justify-content-between">
                                    <span>Category: <?= $product->category->name ?></span> <span>added by: <?= $product->createdby->username ?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mx-3 mb-4">
                        <div class="card">
                            <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>">
                                <img src="http://static.local/<?= $product->productImages[0]->image_name ?>" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <p class="card-text d-flex justify-content-between">
                                    <span>
                                        <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>" class="h2 text-decoration-none text-dark"><?= $product->name ?></a>
                                    </span>
                                    <span> <?= $product->price ?><?= $product->currencyName->currency_name ?>
                                        <del class="text-danger"><?= (int)($product->price + ((20 * $product->price) / 100)) ?><?= $product->currencyName->currency_name ?></del>
                                    </span>
                                </p>
                                <p class="card-text d-flex justify-content-between">
                                    <span>Category: <?= $product->category->name ?></span> <span>added by: <?= $product->createdby->username ?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

    </section>
</div>