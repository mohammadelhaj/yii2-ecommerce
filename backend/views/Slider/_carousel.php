<?php


use yii\bootstrap5\Carousel;
use yii\helpers\Html;

$items = [
];
foreach ($slider as $slider) {
    $items[] = [
        'content' => '<img src="http://static.local/'.$slider->name.'" class="d-block w-100" alt="..." height="300" width="500">',
    ];
}

?>

<?= Carousel::widget([
    'items' => $items,
    'options' => ['class' => 'carousel slide border border-danger', 'data-interval' => 'false'],
    'showIndicators' => true,
]); ?>