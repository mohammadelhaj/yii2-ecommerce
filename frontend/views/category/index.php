<?php

use yii\helpers\Url;

?>
<div class="container my-2">
    <div class="row">
        <?php

        foreach ($model as $product) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6 p-3 mt-3">
                <div class="card">
                    <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>">

                        <img src="http://static.local/<?= $product->productImages[0]->image_name ?>" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <p class="card-text d-flex justify-content-between">
                            <span>
                                <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>" class="h4 text-decoration-none text-dark"><?= $product->name ?></a>
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
        <?php endforeach; ?>
    </div>
</div>