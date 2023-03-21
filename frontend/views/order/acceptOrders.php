<div class="row justify-content-center g-4">
    <?php foreach ($model as $order) : ?>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="#" alt="Product Image" class="card-img-top img-fluid">
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title mb-3">buyer name: <?= $order['first_name'] ?> <?= $order['last_name'] ?></h5>
                            <p class="card-text mb-3">address: <?= $order['address'] ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">price: <?= $order['total_cost'] ?></span>
                                <button class="btn btn-success">accept order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>