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

            $result .= '<div class="row ms-1 parent dropdown_item ">
                    <a href="" class="menuTitle text-decoration-none text-dark">'
                . $category->name .
                '</a>';
            if ($category->getSubcategories()->count() > 0) {

                $result .= '<div class="side_dropdown"><div class="row dropdown_item text-dark ">';
                $result .= getCategories($category->getSubcategories()->all(), $category->id);
                $result .= '</div> </div>';
            }

            $result .= '</div>';
        }
    }

    return $result;
}
function getCategoriesOffcanvas($categories, $parent_id = -1)
{
    $result = '';

    foreach ($categories as $category) {
        if ($category->parent_id == $parent_id) {

            $result .= ' <div class="itemContainer col-md-12" style="font-size: 18px;">
            <span class="firstCatItem">'
                . $category->name .
                ' </span>
            <i class="chev fa fa-chevron-up float-end"></i>';

            if ($category->getSubcategories()->count() > 0) {

                $result .= '<div class="continer">
                <div class="row">
                    <div class="cateItems col-md-12">
                        <span>' . $category->name . '</span> <i class="chev fa fa-chevron-up float-end"></i>';
                $result .= getCategoriesOffcanvas($category->getSubcategories()->all(), $category->id);
                $result .= '</div> </div> </div>';
            }

            $result .= '</div>';
        }
    }

    return $result;
}
function getNestedSubs($categories)
{
    $result = '';
    foreach ($categories as $category) {
        if ($category->getSubcategories()->count() > 0) {


            $result .= '<div class="continer">
        <div class="row">
            <div class="cateItems col-md-12">
                <span>' . $category->name . '</span> <i class="chev fa fa-chevron-up float-end"></i>';
            $result .= getNestedSubs($category->getSubcategories()->all());
            $result .= '</div> </div> </div>';
        }
    }
}
?>

<div class=" text-center sellBtn">
    <a href=<?= Url::to(['product/add-product']) ?> class="text-decoration-none text-dark">
        <span class="shop-bag">
            <i class='fa fa-plus'>
            </i>
        </span>

        <span class="fw-bold">Sell</span>

    </a>
</div>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h3 class="text-white text-center">
        categories
    </h3>
    <div class="container text-white border borde-white">
        <div class="row p-2">
            <div class="itemContainer col-md-12" style="font-size: 18px;">
                <span class="firstCatItem">1 </span>
                <i class="chev fa fa-chevron-up float-end"></i>
                <div class="continer">
                    <div class="row">
                        <div class="cateItems col-md-12">
                            <span>2</span> <i class="chev fa fa-chevron-up float-end"></i>
                            <div class="continer">
                                <div class="row">
                                    <div class="cateItems col-md-12">
                                        <span>3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itemContainer col-md-12" style="font-size: 18px;">
                <span class="firstCatItem">1 </span>
                <i class="chev fa fa-chevron-up float-end"></i>
                <div class="continer">
                    <div class="row">
                        <div class="cateItems col-md-12">
                            <span>2</span> <i class="chev fa fa-chevron-up float-end"></i>
                            <div class="continer">
                                <div class="row">
                                    <div class="cateItems col-md-12">
                                        <span>3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itemContainer col-md-12" style="font-size: 18px;">
                <span class="firstCatItem">1 </span>
                <i class="chev fa fa-chevron-up float-end"></i>
                <div class="continer">
                    <div class="row">
                        <div class="cateItems col-md-12">
                            <span>2</span> <i class="chev fa fa-chevron-up float-end"></i>
                            <div class="continer">
                                <div class="row">
                                    <div class="cateItems col-md-12">
                                        <span>3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<nav class="navbar bg-dark navbar-light  d-lg-block d-md-block">
    <div class="container text-light">
        <div class="w-100 d-flex justify-content-between">
            <div>
                <i class="fa fa-user mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">contact us</a>
                |
                <i class="fa fa-truck mx-2"></i>
                free shipping
            </div>
            <div>
                <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fa fa-facebook-f fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin fa-sm fa-fw"></i></a>
            </div>
            <div>
            <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">logout</a>
            </div>
        </div>
    </div>
</nav>
<header class="section-header">
    <div class="contianer-fluid border-bottom border-dark">


        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-3 ">
                    <div class="ms-md-6 ms-lg-1 ms-sm-5">
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


                </div>
                <div class="col-md-6 mb-sm-2 search_container">
                    <?php $form = ActiveForm::begin(['method' => 'get', 'action' => ['search/search']]); ?>
                    <div class=" form-inputs">
                        <input class="form-control" id="product-id" name="Product[name]" type="text" placeholder="Search any product...">
                        <button style="display: none;" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        <i class="fa fa-search"></i>
                    </div>
                    <?php $form = ActiveForm::end(); ?>
                </div>
                <div class="col-md-3 headerContent ">

                    <div class="d-flex d-md-flex flex-row align-items-center">
                        
                        <div class="d-flex flex-column ms-3 d-lg-block">
                            <?php
                            if (Yii::$app->user->isGuest) {


                            ?>
                                <span class="fw-bold"><u>login</u></span>
                            <?php } else {
                            ?>
                            <?php
                            } ?>
                        </div>
                        <a href=<?= Url::to(['product/add-product']) ?> class="text-decoration-none text-dark">
                            <div class="d-flex d-md-flex flex-row align-items-center">
                                <span class="shop-bag ms-4">
                                    <i class='fa fa-plus'>
                                    </i>
                                </span>
                                <div class=" d-flex flex-column ms-1 d-lg-block">
                                    <span class="fw-bold">Sell</span>
                                </div>
                            </div>
                        </a>
                        <a href=<?= Url::to(['profile/index']) ?> class="text-decoration-none text-dark">
                            <div class="d-flex d-md-flex flex-row align-items-center">
                              
                                    <span class="shop-bag ms-4">
                                        <i class='fa fa-user'>
                                        </i>
                                    </span>
                              
                                <div class=" d-flex flex-column ms-1 d-lg-block">
                                    <span class="fw-bold">profile</span>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container navi">
        <div class="row d-flex align-items-center">
            <div class="col-md-1 navCol burger_menu">
                <i class="fa fa-bars" onclick="openNav()"></i>
            </div>
            <div class="col-md-3 col-lg-2 col-sm-2 d-lg-block d-md-block  bg-success text-white categories_dropdown p-3 navColCat navCol " style="font-size: 20px;">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="title">
                        <i class="fa fa-bars"></i>
                        <span>Categories</span>
                    </div>
                </div>
                <div class="dropdown_menu container ">
                    <?php
                    echo getCategories($categories, -1);
                    ?>
                </div>
            </div>
            <div class="col-md-2 p-2 text-center navCol">
                <a href=<?= Url::to(['site/index']) ?> class=" greenHover">Home</a>
            </div>
            <div class="col-md-2 p-2 text-center navCol">
                <a href=<?= Url::to(['site/about']) ?> class=" greenHover">about us</a>
            </div>
            <div class="col-md-2 p-2 text-center navCol">
                <a href=<?= Url::to(['site/contact']) ?> class=" greenHover">contact</a>
            </div>
            <div class="col-md-2 p-2 text-center navCol border-start border-dark">
                <a href=<?= Url::to(['site/index']) ?> class=" greenHover"><i class="fa fa-whatsapp" style="font-size: 40px;vertical-align: middle;"></i> whatsapp</a>
            </div>

        </div>
    </div>


</header>