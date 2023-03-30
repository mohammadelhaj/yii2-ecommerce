<div class="row justify-content-center g-4">
    <?php

    use yii\helpers\Html;

    if (empty($model)) {
        echo "<h3>no products to accept</h3>";
    } else {
        foreach ($model as $order) : ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div>
                                    <img src="http://static.local/<?= $order->product->productImages[0]->image_name ?>" style="height: 200px;" alt="Product Image" class="card-img-top img-fluid">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h5 class="card-title mb-3">buyer name: <?= $order['first_name'] ?> <?= $order['last_name'] ?></h5>
                                <p class="card-text mb-3">address: <?= $order['address'] ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">price: <?= $order['total_cost'] ?> (<?= $order->product->currencyName->currency_name ?>)</span>
                                    <div>
                                        <?= Html::a(
                                            'accept order',
                                            ['order/accept-order', 'buyer_id' => $order['user_id'], 'product_id' => $order['product_id']],
                                            [
                                                'class' => 'text-decoration-none btn btn-success',
                                                'onclick' => 'return confirm("Are you sure you want to accept this order?");',
                                            ]
                                        );
                                        ?>
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
                </div>
            </div>
    <?php endforeach;
    } ?>
</div>