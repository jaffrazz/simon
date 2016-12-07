<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblDetailUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Detail Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-detail-user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Detail User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nik',
            'nama',
            'tempat_lahir',
            'tgl_lahir',
            'jenis_kelamin',
            // 'rt',
            // 'rw',
            // 'dusun',
            // 'desa',
            // 'agama',
            // 'status_perkawinan',
            // 'pekerjaan',
            // 'id_admin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
