<?php

namespace backend\controllers;

use common\models\Slider;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\UploadedFile;

/**
 * Slider controller
 */
class SliderController extends Controller
{

    // public function actionIndex()
    // {
    //     $model = new Slider();
    //     return $this->render('index', ['model' => $model]);
    // }
    public function actionUpload()
    {
        $model = new Slider();
        $slider = Slider::find()->all();
        if ($model->load(Yii::$app->request->post())) {

            $model->name = UploadedFile::getInstances($model, 'name');


            if ($model->name && $model->validate()) {
                if (!file_exists(Yii::getAlias('@static'))) {
                    mkdir(Yii::getAlias('@static'), 0777, true);
                }
                $path = Yii::getAlias('@static') . DIRECTORY_SEPARATOR;

                foreach ($model->name as $image) {

                    $img = new Slider();
                    $img->name = time() . rand(100, 999) . '.' . $image->extension;
                    if ($img->save(false)) {
                        $image->saveAs($path . $img->name);
                    }
                }
                return $this->redirect('upload');
            }
        }
        return $this->render('upload', ['model' => $model, 'slider' => $slider]);
    }
}
