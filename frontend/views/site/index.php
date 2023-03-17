<?php

/** @var yii\web\View $this */

use common\models\Product;

$this->title = 'e-commerce';
?>


<div class="row justify-content-left">
    <?php
    foreach ($allProducts as $product) {

    ?>
        <div class="col-md-3">
            <div class="card text-black">
                <i class="fa fa-shopping-cart fa-lg pt-3 pb-1 px-3"></i>
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/3.webp" class="card-img-top" alt="Apple Computer" />
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="card-title"><?=$product['name']?></h5>

                    </div>
                    <div>
                        <div class="d-flex justify-content-between">
                            <span>Category:</span><span><?=$product['category_id']?></span>
                        </div>

                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4">
                        <span>price</span><span><?=$product['price']?></span>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>