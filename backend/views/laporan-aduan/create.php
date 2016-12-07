<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblLaporanAduan */

$this->title = 'Create Tbl Laporan Aduan';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Laporan Aduans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-laporan-aduan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
