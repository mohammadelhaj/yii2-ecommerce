<?php

use yii\bootstrap5\Carousel;
?>


<h3>upload for the silder 5 image max!</h3>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <h1>Multiple Image File Upload with Preview</h1>
            <form action="upload_file.php"  method="post">
                <div class="mb-3">
                    <label for="upload_imgs" class="btn btn-outline-primary">Select Your Images +</label>
                    <input class="form-control" type="file" id="upload_imgs" name="upload_imgs[]" multiple />
                </div>
                <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview" aria-live="polite">
                    <button type="button" id="cancel_btn" class="btn btn-outline-danger">Cancel</button>
                </div>
                <div class="mt-3">
                    <input class="btn btn-primary" type="submit" name="submit" value="Upload Images" />
                </div>
            </form>
            <div class="mt-3" id="img_list">
                asdasd
            </div>
        </div>
    </div>
</div>



<!--
<label for="exampleFileUpload" class="button">Upload File</label>
<input type="file" id="exampleFileUpload" class="show-for-sr">
-->

<h5>how it should look like in the home page:</h5>

<?php
$items = [
    [
        'content' => '<img src="../car.jpg" class="d-block w-100" alt="..." height="300" width="500">',
    ],
    [
        'content' => '<img src="../camera.jpg" class="d-block w-100" alt="..." height="300" width="500">',
    ],
    [
        'content' => '<img src="../banana.jpg" class="d-block w-100" alt="..." height="300" width="500">',
    ],
];
?>

<?= Carousel::widget([
    'items' => $items,
    'options' => ['class' => 'carousel slide border border-danger', 'data-interval' => 'false'],
    'controls' => [
        '<span class="carousel-control-prev-icon" aria-hidden="true"></span>',
        '<span class="carousel-control-next-icon" aria-hidden="true"></span>',
    ],
    'showIndicators' => true,
]); ?>