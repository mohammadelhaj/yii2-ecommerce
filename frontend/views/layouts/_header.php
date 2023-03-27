<?php

use common\models\Category;
use common\models\Product;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;


$categories = Category::find()->all();
// print_r($categories);
// exit;

function getCategories($categories, $parent_id = -1)
{
    $result = '';

    foreach ($categories as $category) {
        if ($category->parent_id == $parent_id) {
            if ($parent_id == -1) {
                $result .= '<li class="nav-item dropdown">';
            } else {
                $result .= '<li class="nav-item dropdown dropend">';
            }


            if ($category->getSubcategories()->count() > 0) {

                $result .= '<a class="nav-link dropdown-toggle dropdown-item" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">'
                    . $category->name .
                    '</a>';
                $result .= '<ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown">';
                $result .= getCategories($category->getSubcategories()->all(), $category->id);
                $result .= '</ul>';
            } else {

                $result .= '<a class="nav-link" href="' . Url::to(['product/all', 'category_id' => $category->id]) . '">' . $category->name . '</a>';
            }

            $result .= '</li>';
        }
    }

    return $result;
}
?>

<header class="section-header">
    <!-- header-top-light.// -->

    <section class="header-main border-bottom bg-white">
        <div class="container-fluid">
            <div class="row p-2 pt-3 pb-3 d-flex align-items-center">
                <div class="col-md-2">
                    <?= Html::a('<h3>Ecommerce</h3>', ['site/index'], ['class' => 'nav-link d-flex align-items-center']); ?>
                </div>
                <div class="col-md-7">
                    <?php
                    $model = new Product();
                    $form = ActiveForm::begin(['method' => 'get', 'action' => ['search/search']]); ?>
                    <div class="d-flex form-inputs">
                        <input class="form-control" id="product-id" name="Product[name]" type="text" placeholder="Search any product...">
                        <button style="display: none;" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        <i class="fa fa-search"></i>
                    </div>
                    <?php $form = ActiveForm::end(); ?>
                </div>
                <div class="col-md-3">
                    <a href=<?= Url::to(['product/add-product']) ?> class="text-decoration-none">
                        <div class="d-flex d-none d-md-flex flex-row align-items-center">
                            <span class="shop-bag">
                                <i class='fa fa-plus'>
                                </i>
                            </span>
                            <div class="d-flex flex-column ms-2">
                                <span class="fw-bold">add a product</span>

                            </div>
                        </div>
                    </a>

                </div>

            </div>
        </div>
    </section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <?php
                        echo '<ul class="navbar-nav">';
                        echo getCategories($categories);
                        echo '</ul>';
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   
</header>