<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TblDetailUser */

$this->title = $model->nik;
$this->params['breadcrumbs'][] = ['label' => 'Detail Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-detail-user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nik], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nik], [
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
            'nik',
            'nama',
            'tempat_lahir',
            'tgl_lahir',
            'jenis_kelamin',
            'rt',
            'rw',
            'dusun',
            'desa',
            'agama',
            'status_perkawinan',
            'pekerjaan',
            'id_admin',
        ],
    ]) ?>

</div>
