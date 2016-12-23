<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblLaporanAduan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-laporan-aduan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_laporan_aduan')->hiddenInput(['value' => date('YmdHis')])->label(false) ?>

    <?= $form->field($model, 'nik')->textInput() ?>

    <?= $form->field($model, 'id_admin')->hiddenInput(['value' => Yii::$app->user->id])->label(false) ?>

    <?= $form->field($model, 'laporan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'waktu_tgl')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
