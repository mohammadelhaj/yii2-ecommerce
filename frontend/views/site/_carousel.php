<?php

use yii\bootstrap5\Carousel;

$items = [];
foreach ($slider as $slider) {
    $items[] = [
        'content' => '<img src="http://static.local/' . $slider->name . '" class="d-block w-100" alt="' . $slider->title . '" height="300" width="500">',
    ];
}
?>

<?= Carousel::widget([
    'items' => $items,
    'options' => ['class' => 'carousel slide shadow'],
    'showIndicators' => true,
]); ?>