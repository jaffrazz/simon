<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblLaporanAduanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-laporan-aduan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_laporan_aduan') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'id_admin') ?>

    <?= $form->field($model, 'laporan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
