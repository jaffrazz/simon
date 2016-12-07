<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblDetailUser */

$this->title = 'Update Tbl Detail User: ' . $model->nik;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Detail Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nik, 'url' => ['view', 'id' => $model->nik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-detail-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
