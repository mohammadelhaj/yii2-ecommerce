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
        foreach ($category as $category) {
        ?>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="http://static.local/<?= $category->image ?>" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3"><?= $category->name ?></h5>
                <p class="text-center"><a href=<?= Url::to(['category/index', 'category_id' => $category->id]) ?> class="btn btn-success">Go Shop</a></p>
            </div>
        <?php
        }
        ?>



    </div>
</section>

<section class="bg-light container">

    <div class="row text-center py-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Featured Product</h1>
            <p>
                Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident.
            </p>
        </div>
    </div>
    <div class="row ">
        <?php
        foreach ($products as $product) {
        ?>
            <div class="col-lg-4 col-md-4 col-sm-6 p-3 mt-3">
                <div class="card">
                    <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>">

                        <img src="http://static.local/<?= $product->productImages[0]->image_name ?>" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text d-flex justify-content-between">
                            <span>
                                <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>" class="h2 text-decoration-none text-dark"><?= $product->name ?></a>
                            </span>
                            <span> <?= $product->price ?> (<?= $product->currencyName->currency_name ?>)

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

<section class="bg-light container my-3">

    <div class="row text-center py-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Trending products <i class="fa fa-line-chart"></i></h1>

        </div>
    </div>
    <div class="row sliderr">
        <?php
        foreach ($trending as $product) {
        ?>
            <div class="col-md-3 mx-3">
                <div class="card">
                    <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>">

                        <img src="http://static.local/<?= $product->productImages[0]->image_name ?>" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text d-flex justify-content-between">
                            <span>
                                <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>" class="h2 text-decoration-none text-dark"><?= $product->name ?></a>
                            </span>

                            <span> <?= $product->price ?> (<?= $product->currencyName->currency_name ?>)


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