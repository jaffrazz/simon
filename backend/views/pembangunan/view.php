<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TblPembangunan */

$this->title = $model->id_pembangunan;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pembangunan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-pembangunan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pembangunan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pembangunan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pembangunan',
            'id_dana_inf',
            'nama_pembanguna:ntext',
            [
                'attribute'=>'foto',
                'format' => 'raw',
                'value' => '<img src="'.Yii::$app->homeUrl.$model->foto.'" style="max-width:400px;max-height:350px;"/>'
            ],
            'lat',
            'lng',
            'anggaran',
            'tgl_mulai',
            'tgl_selesai',
            'progres',
            'keterangan:ntext',
            'id_admin',
        ],
    ]) ?>

</div>
