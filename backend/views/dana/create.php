<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblDanaInfrastruktur */

$this->title = 'Create Tbl Dana Infrastruktur';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Dana Infrastrukturs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-dana-infrastruktur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
