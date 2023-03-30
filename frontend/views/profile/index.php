<?php

use yii\helpers\Html;
?>
<section style="background-color: #f8f9fa;">
    <div class="container py-3">

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3"><?= $model->username ?></h5>
                        <div class="d-flex justify-content-center mb-2">
                            <?= Html::a('Update profile', ['profile/update-profile'], ['class' => 'btn btn-outline-success ms-1 text-decoration-none']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Username</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $model->username ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $model->email ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">(097) 234-5678</p>
                            </div>
                        </div>
                        
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4 mb-1">
                            <div class="card-body">
                                <p class="mb-4">
                                    <span class="position-relative top-0 start-100 translate-middle badge rounded-pill bg-success">
                                        <?= $myproductsCount ?>

                                    </span>
                                    <span class="text-success font-italic me-1">
                                        <?= Html::a(
                                            'all listed products',
                                            ['product/my-products'],
                                            [
                                                'class' => 'text-decoration-none  text-success',
                                            ]
                                        );
                                        ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4">
                                    <span class="position-relative top-0 start-100 translate-middle badge rounded-pill bg-success">
                                        <?= $countSoldProducts ?>

                                    </span>
                                    <span class="text-success font-italic me-1">
                                        <?= Html::a(
                                            'Sold products',
                                            ['order/sold-products'],
                                            [
                                                'class' => 'text-decoration-none  text-success',
                                            ]
                                        );
                                        ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 mb-md-1">
                            <div class="card-body">
                                <p class="mb-4">
                                    <span class="position-relative top-0 start-100 translate-middle badge rounded-pill bg-success">
                                        <?= $boughtProductsCount ?>

                                    </span>
                                    <span class="text-success font-italic me-1">
                                        <?= Html::a(
                                            'bought products:',
                                            ['order/bought-products'],
                                            [
                                                'class' => 'text-decoration-none text-success',
                                            ]
                                        );
                                        ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 ">
                            <div class="card-body">
                                <p class="mb-4">
                                    <span class="position-relative top-0 start-100 translate-middle badge rounded-pill bg-success">
                                        <?= $acceptOrdersCount ?>

                                    </span>
                                    <span class="text-success font-italic ">
                                        <?= Html::a(
                                            'accept to sell your product',
                                            ['order/accept-orders'],
                                            [
                                                'class' => 'text-decoration-none text-success',
                                            ]
                                        );
                                        ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4">
                                    <span class="position-relative top-0 start-100 translate-middle badge rounded-pill bg-success">
                                        <?= $waitingListCount ?>

                                    </span>
                                    <span class="text-success font-italic me-1">
                                        <?= Html::a(
                                            'your waiting list:',
                                            ['order/waiting-list'],
                                            [
                                                'class' => 'text-decoration-none  text-success',
                                            ]
                                        );
                                        ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>