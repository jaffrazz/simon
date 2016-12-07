<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblPembangunan */

$this->title = 'Update Tbl Pembangunan: ' . $model->id_pembangunan;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pembangunan, 'url' => ['view', 'id' => $model->id_pembangunan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-pembangunan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
