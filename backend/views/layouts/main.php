<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use yii\helpers\Html;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark border border-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Dashbord</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>

                        <?php
                        if (!Yii::$app->user->isGuest) {

                        ?>
                            <li class="nav-item">
                                <?= Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
                                    . Html::submitButton(
                                        'Logout (' . Yii::$app->user->identity->username . ')',
                                        ['class' => 'btn btn-link logout text-decoration-none']
                                    )
                                    . Html::endForm(); ?>
                            </li>
                        <?php
                        } else?>
                        <?php
                        if (Yii::$app->user->isGuest) {

                        ?>
                            <li class="nav-item">
                                <?= Html::a('sign in', ['site/login'], ['class' => 'nav-link']); ?>
                            </li>
                        <?php
                        } ?>

                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="container-fluid">
            <div class="row">
                <?php echo $this->render('_sidebar'); ?>
                <div class="col-md-10">
                    <?= $content ?>

                </div>

            </div>
    </main>

   

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
