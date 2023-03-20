<?php

/** @var yii\web\View $this */


use yii\bootstrap5\Carousel;
use yii\helpers\Html;

$this->title = 'e-commerce';
?>
<div class="container">

</div>
<?php
echo $this->render('_carousel', ['slider' => $slider]);
?>

<h3>all products</h3>
<div class="row justify-content-left pt-3">

    <?php
    foreach ($products as $product) {

    ?>
        <div class="col-md-3 mb-3">
            <div class="card text-black">
                <i class="fa fa-heart-o fa-lg pt-3 pb-1 px-3"></i>
                <img src="http://static.local/<?= $product->productImages[0]->image_name ?>" class="card-img-top" alt="" height="160" />
                <!-- <?php #print_r($product->productImages[0]);
                        ?> -->
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="card-title"><?= $product->name ?></h5>

                    </div>
                    <div>
                        <div class="d-flex justify-content-between">
                            <span>Category: <?= $product->category->name ?></span> <span>added by: <?= $product->createdby->username ?></span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-left font-weight-bold mt-1">
                        <span>price: <?= $product->price ?> (<?= $product->currencyName->currency_name ?>)</span>
                    </div>
                    <div class="d-flex justify-content-left font-weight-bold mt-4">
                        <?= Html::a('<i class="fa fa-eye"></i> view product', ['product/view', 'product_id' => $product->id], ['class' => 'btn btn-danger flex-fill ms-1']); ?>

                    </div>
                </div>
            </div>
        </div>

    <?php } ?>
</div>