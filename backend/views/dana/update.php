<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblDanaInfrastruktur */

$this->title = 'Update Dana Infrastruktur: ' . $model->id_dana_inf;
$this->params['breadcrumbs'][] = ['label' => 'Dana Infrastrukturs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_dana_inf, 'url' => ['view', 'id' => $model->id_dana_inf]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-dana-infrastruktur-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
