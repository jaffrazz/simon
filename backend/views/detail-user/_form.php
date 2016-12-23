<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\TblDetailUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-detail-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nik')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->widget(
    DatePicker::className(), [
        'model' => $model,
        'attribute' => 'tgl_lahir',
        'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]]) ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList(
            ['0'=>'Laki - laki','1'=>'Perempuan'],
            ['prompt'=>'-Pilih Jenis Kelamin-','onchange'=>'$("input#target").val($(this).val())']
            ); ?>                 

    <?= $form->field($model, 'rt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dusun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desa')->textInput() ?>

    <?= $form->field($model, 'agama')->textInput() ?>

    <?= $form->field($model, 'status_perkawinan')->textInput() ?>

    <?= $form->field($model, 'pekerjaan')->textInput() ?>

    <?= $form->field($model, 'id_admin')->hiddenInput(['value' => Yii::$app->user->id])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script type="text/javascript">
     $('.datepicker').datepicker({
    format: 'dd/mm/yyyy'
 });
</script>