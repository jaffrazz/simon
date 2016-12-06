<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblDanaInfrastruktur */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-dana-infrastruktur-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_dana_inf')->textInput() ?>

    <?= $form->field($model, 'nama_dana')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jumlah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rencana_penggunaan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_admin')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
