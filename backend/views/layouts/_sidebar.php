<?php

use yii\helpers\Html;
?>
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark" >
    <div class="pt-3">
        <ul class="nav flex-column">
            
        <li class="nav-item">
            <?=Html::a('manage slider', ['slider/upload'], ['class' => 'nav-link active']);?>
            </li>
            <li class="nav-item">
            <?=Html::a('manage categories', ['category/index'], ['class' => 'nav-link active']);?>
            </li>
            <li class="nav-item">
            <?=Html::a('manage buyers', ['site/bu'], ['class' => 'nav-link']);?>
            </li>
            <li class="nav-item">
            <?=Html::a('manage sellers', ['site/se'], ['class' => 'nav-link']);?>
            </li>
        </ul>

    </div>
</nav>