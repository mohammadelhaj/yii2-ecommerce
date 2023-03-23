<?php

/** @var yii\web\View $this */


use yii\bootstrap5\Carousel;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'e-commerce';
?>

<?php
echo $this->render('_carousel', ['slider' => $slider]);
?>

<section class="container">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Categories of The Month</h1>
            <p>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
    <div class="row">
        <?php
        foreach ($products as $product) {
        ?>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="http://static.local/<?= $product->productImages[0]->image_name ?>" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3"><?= $product->category->name ?></h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
        <?php } ?>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="/assets/img/category_img_02.jpg" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Shoes</h2>
            <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="/assets/img/category_img_03.jpg" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Accessories</h2>
            <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
        </div>

    </div>
</section>
<div class="row justify-content-left pt-3">
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            <div class="row">
                <?php
                foreach ($products as $product) {
                ?>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>">

                                <img src="http://static.local/<?= $product->productImages[0]->image_name ?>" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <p class="card-text d-flex justify-content-between">
                                    <span>
                                        <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>" class="h2 text-decoration-none text-dark"><?= $product->name ?></a>
                                    </span>

                                    <span> <?= $product->price ?> (<?= $product->currencyName->currency_name ?>)
                                        <del class="text-danger"><?= (int)($product->price + ((20 * $product->price) / 100)) ?> (<?= $product->currencyName->currency_name ?>)</del>

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