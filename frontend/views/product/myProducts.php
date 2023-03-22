<?php

use yii\helpers\Html;

$this->title = 'my product';
?>
<h1>
    here all your products:
</h1>
<div class="row justify-content-left pt-3">

    <?php
    if (empty($model)) {
        echo "<h4>you didnt add any products yet</h4>";
    } else {
        foreach ($model as $product) {


    ?>

            <div class="col-md-3 mb-3">
                <div class="card text-black">

                    <img src="http://static.local/<?= $product->productImages[0]->image_name ?>" class="card-img-top" alt="" height="160" />
                    <!-- <?php #print_r($product->productImages[0]);
                            ?> -->
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title"><?= $product->name ?></h5>

                        </div>
                        <div>
                            <div class="d-flex justify-content-between">
                                <span>Category: <?= $product->category->name ?></span> <span>added by you</span>
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