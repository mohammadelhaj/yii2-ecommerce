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
<nav class="navbar bg-dark navbar-light d-none d-lg-block d-md-block">
    <div class="container text-light">
        <div class="w-100 d-flex justify-content-between">
            <div>
                <i class="fa fa-user mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">contact us</a>
                |
                <i class="fa fa-sign-in mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">signup</a>
            </div>
            <div>
                <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fa fa-facebook-f fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin fa-sm fa-fw"></i></a>
            </div>
        </div>
    </div>
</nav>
<header class="section-header">
    <div class="contianer-fluid border-bottom border-dark">


        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-3 ">
                    <a href=<?= Url::to(['site/index']) ?> class="text-decoration-none text-dark">
                        <div class="logo d-flex justify-content-center">
                            <img src="http://static.local/logo1.png" class="" alt="site logo" style="max-height: 110px; max-width: 100%;">
                        </div>
                        <div class="logo d-flex justify-content-center">
                            <h3>
                                Ecommerce
                            </h3>
                        </div>
                    </a>

                </div>
                <div class="col-md-6 ">
                    <?php $form = ActiveForm::begin(['method' => 'get', 'action' => ['search/search']]); ?>
                    <div class=" form-inputs">
                        <input class="form-control" id="product-id" name="Product[name]" type="text" placeholder="Search any product...">
                        <button style="display: none;" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        <i class="fa fa-search"></i>
                    </div>
                    <?php $form = ActiveForm::end(); ?>
                </div>
                <div class="col-md-3 d-flex justify-content-between">

                    <div class="d-flex d-md-flex flex-row align-items-center">
                        <div class="d-flex flex-column ms-2 d-lg-block">
                            <span class="fw-bold"><u>english</u></span>
                        </div>
                        <div class="d-flex flex-column ms-3 d-lg-block">
                            <span class="fw-bold"><u>login</u></span>
                        </div>
                        <a href=<?= Url::to(['product/add-product']) ?> class="text-decoration-none text-dark">
                            <div class="d-flex d-md-flex flex-row align-items-center">
                                <span class="shop-bag ms-4">
                                    <i class='fa fa-plus'>
                                    </i>
                                </span>
                                <div class="d-flex flex-column ms-1 d-lg-block">
                                    <span class="fw-bold">Sell</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-3 border bg-success text-white categories_dropdown p-2" style="font-size: 20px;">
                <div class="title">
                    <i class="fa fa-bars"></i>
                    <span>Categories</span>
                </div>
                <div class="dropdown_menu">
                    <div class="row ms-3 dropdown_item text-dark">asd >
                        <div class="side_dropdown">

                        </div>
                    </div>
                    <div class="row ms-3 dropdown_item text-dark">asd >
                        <div class="side_dropdown">

                        </div>
                    </div>
                    <div class="row ms-3 dropdown_item text-dark">asd >
                        <div class="side_dropdown">

                        </div>
                    </div>



                </div>


            </div>

            <div class="col-md-6">qwdqweq</div>
            <div class="col-md-3">qwdqweq</div>
        </div>

    </div>

</header>