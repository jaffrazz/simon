<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblDanaInfrastrukturSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-dana-infrastruktur-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_dana_inf') ?>

    <?= $form->field($model, 'nama_dana') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?= $form->field($model, 'rencana_penggunaan') ?>

    <?= $form->field($model, 'id_admin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
