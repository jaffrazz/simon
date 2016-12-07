<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblUser */

$this->title = 'Create Tbl User';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
