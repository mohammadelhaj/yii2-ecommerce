<h3>
   waiting list:
</h3>
<div class="row justify-content-left pt-3">
    <?php
    if (empty($model)) {
        echo "<h4>you dont have any products in the waiting list</h4>";
    } else {
        foreach ($model as $order) : ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4" >
                                <img src="http://static.local/<?= $order->product->productImages[0]->image_name ?>" height="200px" class="card-img-top ">
                            </div>
                            <div class="col-md-8">
                                <h5 class="card-title mb-3">waiting <u><?= $order->seller->username ?></u> to accept your order</h5>
                                <p class="card-text mb-3">address: <?= $order['address'] ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">price: <?= $order['total_cost'] ?> (<?= $order->product->currencyName->currency_name ?>)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php endforeach;
    } ?>
</div>