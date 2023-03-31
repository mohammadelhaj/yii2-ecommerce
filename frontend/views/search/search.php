<?php

/** @var yii\web\View $this */

use yii\bootstrap5\ActiveForm;
use yii\helpers\Url;

$this->title = 'search';
?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php

    ?>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <?php $form = ActiveForm::begin(['method' => 'get']); ?>
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">choose filter setting</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= $form->field($model, 'currency')->dropDownList(
                    $currency,
                    ['prompt' => 'Select a currency']
                ); ?>
                <label for="customRange3" class="form-label">min price</label>
                <div class="input-group mb-3">

                <input class="form-control" id="product-id" name="min_price" type="number" placeholder="minimum price">
                </div>
                <label for="customRange3" class="form-label">max price</label>
                <div class="input-group mb-3">

                <input class="form-control" id="product-id" name="max_price" type="number" placeholder="minimum price">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">filter</button>
           
            </div>
            <?php $form = ActiveForm::end(); ?>
        </div>
    </div>
</div>
<div class="container">
    <div class=" row mt-3">
        <a href="" role="button" class="text-decoration-none text-black" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <h3>
                <i class="fa fa-filter"></i> filter search
            </h3>
        </a>
    </div>

    <div class="row justify-content-left pt-3">

        <?php
        if ($query == null) {
            echo '<h3>no product found</h3>';
        } else {
            foreach ($query as $product) {
        ?>
                <div class="col-lg-3 col-md-5 col-sm-5 p-3 mt-3">
                    <div class="card">

                        <a href="<?= Url::to(['product/view', 'product_id' => $product->id]) ?>">
                            <img src="http://static.local/<?= $product->productImages[0]->image_name ?>" class="card-img-top" alt="...">
                        </a>
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

                        </div>
                    </div>
                </div>
                
        <?php }
        }
        ?>
    </div>
</div>