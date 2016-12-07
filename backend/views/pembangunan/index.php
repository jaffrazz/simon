<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblPembangunanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Pembangunans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-pembangunan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Pembangunan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pembangunan',
            'id_dana_inf',
            'nama_pembanguna:ntext',
            'foto',
            'lat',
            // 'lng',
            // 'anggaran',
            // 'tgl_mulai',
            // 'tgl_selesai',
            // 'progres',
            // 'keterangan:ntext',
            // 'id_admin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
