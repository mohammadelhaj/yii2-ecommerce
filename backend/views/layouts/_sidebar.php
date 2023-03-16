<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>



<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Ecommerce</a>


    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <?php

            use yii\helpers\Html;

            if (!Yii::$app->user->isGuest) {

            ?>
                <?= Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout text-decoration-none nav-link px-3']
                    )
                    . Html::endForm(); ?>

            <?php
            } else ?>
            <?php
            if (Yii::$app->user->isGuest) {
            ?>
                <?= Html::a('sign in', ['site/login'], ['class' => 'nav-link nav-link px-3']); ?>

            <?php
            } ?>
        </div>
    </div>
</header>


<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar ">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">

                    <i class="fa fa-home"></i>
                    Dashboard
                </a>

            </li>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>manage website</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                    <i class="fa fa-plus-circle"></i>
                </a>
            </h6>
            <li class="nav-item">

                <?= Html::a('<i class="fa fa-file"></i>
                    manage home page', ['slider/upload'], ['class' => 'nav-link nav-link px-3']); ?>
            </li>
            <li class="nav-item">

                <?= Html::a('<i class="fa fa-file"></i>
                    manage categories', ['category/index'], ['class' => 'nav-link nav-link px-3']); ?>
            </li>

        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Manage users</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <i class="fa fa-plus-circle"></i>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">

                <?= Html::a('<i class="fa fa-file-text"></i>
                    Manage seller', ['slider/upload'], ['class' => 'nav-link nav-link px-3']);
                ?>
            </li>
            <li class="nav-item">
            <?= Html::a('<i class="fa fa-file-text"></i>
                    Manage buyers', ['slider/upload'], ['class' => 'nav-link nav-link px-3']);
                ?>
            </li>
            
        </ul>
    </div>
</nav>