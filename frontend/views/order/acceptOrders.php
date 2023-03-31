<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="container">
    <div class="row">
        <?php
        if (empty($model)) {
        ?>
            <div class="col-ms-3 col-md-4 col-lg-6 ">
                <h1 class="h1">no product to accept</h1>
            </div>

            <?php
        } else {
            foreach ($model as $order) : ?>
                <div class="col-lg-4 col-md-5 col-sm-6  mt-3">
                    <div class="card">
                        <a href="<?= Url::to(['product/view', 'product_id' => $order->product->id]) ?>">
                            <img src="http://static.local/<?= $order->product->productImages[0]->image_name ?>"  class="card-img-top ">
                        </a>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h2 class="card-title">
                                    <a href="<?= Url::to(['product/view', 'product_id' => $order->product->id]) ?>" class="text-decoration-none text-dark">
                                        <h5>buyer name: <?= $order['first_name'] ?> <?= $order['last_name'] ?></h5>
                            </div>
                            <div class="d-flex justify-content-between ">
                                <p class="card-text">address: <?= $order['address'] ?></p>
                            </div>
                            <div class="d-flex justify-content-between ">
                                <span class="price">price: <?= $order['total_cost'] ?> (<?= $order->product->currencyName->currency_name ?>)</span>
                            </div>
                            <div class="d-flex justify-content-between  mt-2">    
                                <div class="m-1">
                                    <?= Html::a(
                                        'accept order',
                                        ['order/accept-order', 'buyer_id' => $order['user_id'], 'product_id' => $order['product_id']],
                                        [
                                            'class' => 'text-decoration-none btn btn-success',
                                            'onclick' => 'return confirm("Are you sure you want to accept this order?");',
                                        ]
                                    );
                                    ?>
                                </div> 
                                <div class="m-1">
                                     <?= Html::a(
                                        'reject order',
                                        ['order/reject-order', 'buyer_id' => $order['user_id'], 'product_id' => $order['product_id']],
                                        [
                                            'class' => 'text-decoration-none btn btn-danger',
                                            'onclick' => 'return confirm("Are you sure you want to reject this order?");',
                                        ]
                                    );
                                    ?>        
                                </div>                     
                                    
                                                          
                            </div>

                        </div>
                    </div>
                </div>
        <?php endforeach;
        } ?>
    </div>
</div>