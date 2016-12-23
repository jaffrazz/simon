<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblPembangunan */

$this->title = 'Tambah Pembangunan';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pembangunan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-pembangunan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
