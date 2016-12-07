<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblUser */

$this->title = 'Update Tbl User: ' . $model->pin;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pin, 'url' => ['view', 'id' => $model->pin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
