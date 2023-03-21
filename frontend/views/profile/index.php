<?php

use yii\helpers\Html;
?>
<section style="background-color: #eee;">
    <div class="container py-3">

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3"><?= $model->username ?></h5>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-outline-primary ms-1">Edit profile</button>
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
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4">
                                    <span class="text-primary font-italic me-1">
                                        <?= Html::a(
                                            'Sold products',
                                            ['order/sold-products'],
                                            [
                                                'class' => 'text-decoration-none',
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
                                    <span class="text-primary font-italic me-1">
                                        <?= Html::a(
                                            'bought products:',
                                            ['order/bought-products'],
                                            [
                                                'class' => 'text-decoration-none',
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
                                    <span class="text-primary font-italic me-1">
                                        <?= Html::a(
                                            'accept to sell your product',
                                            ['order/accept-orders'],
                                            [
                                                'class' => 'text-decoration-none',
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
                                <p class="mb-4"><span class="text-primary font-italic me-1">
                                        <?= Html::a(
                                            'your waiting list:',
                                            ['order/waiting-list'],
                                            [
                                                'class' => 'text-decoration-none',
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