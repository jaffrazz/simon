<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\TblDanaInfrastruktur;
use ibrarturi\latlngfinder\LatLngFinder;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\TblPembangunan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-pembangunan-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'id_pembangunan')->hiddenInput(['value' => '4'.date('YmdHis')])->label(false) ?>

    <?= $form->field($model, 'id_dana_inf')->dropDownList(
        ArrayHelper::map(TblDanaInfrastruktur::find()->all(),'id_dana_inf', 'nama_dana'),
        ['prompt'=>'-Pilih Nama Dana-']) ?>

    <?= $form->field($model, 'nama_pembanguna')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'gambar')->fileInput() ?>

    <?= $form->field($model, 'lat') ?>
    <?= $form->field($model, 'lng') ?>
     
    <?php
        if ($model->lat!= null && $model->lng != null) {
            $lat = $model->lat;
            $lng = $model->lng;
        }else{
            $lat = -7.8815254;
            $lng = 111.4164468;
        }
        echo    \ibrarturi\latlngfinder\LatLngFinder::widget([
                    'model' => $model,              // model object
                    'latAttribute' => 'lat',        // Latitude attribute
                    'lngAttribute' => 'lng',        // Longitude attribute
                    'zoomAttribute' => 'zoom',      // Zoom text attribute
                    'mapCanvasId' => 'map',         // Map Canvas id
                    'mapWidth' => 650,              // Map Canvas width
                    'mapHeight' => 300,             // Map Canvas mapHeight
                    'defaultLat' => $lat,        // Default latitude for the map
                    'defaultLng' => $lng,         // Default Longitude for the map
                    'defaultZoom' => 13,             // Default zoom for the map
                    'enableZoomField' => true,
                    'marker' =>true,      // True: for assigning zoom values to the zoom field, False: Do not assign zoom value to the zoom field
                ]); 
    ?>

    <?= $form->field($model, 'anggaran')->textInput() ?>

    <?= $form->field($model, 'tgl_mulai')->widget(
        DatePicker::className(), [
        'model' => $model,
        'attribute' => 'tgl_mulai',
        'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]]) ?>

    <?= $form->field($model, 'tgl_selesai')->widget(
        DatePicker::className(), [
        'model' => $model,
        'attribute' => 'tgl_selesai',
        'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]]) ?>

    <?= $form->field($model, 'progres')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_admin')->hiddenInput(['value' => Yii::$app->user->id])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
