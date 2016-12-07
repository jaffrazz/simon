<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblDetailUser */

$this->title = 'Create Tbl Detail User';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Detail Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-detail-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
