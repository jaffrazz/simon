<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblLaporanAduan */

$this->title = 'Update Laporan Aduan: ' . $model->id_laporan_aduan;
$this->params['breadcrumbs'][] = ['label' => 'Laporan Aduan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_laporan_aduan, 'url' => ['view', 'id' => $model->id_laporan_aduan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-laporan-aduan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
