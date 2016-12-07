<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblLaporanAduanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Laporan Aduans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-laporan-aduan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Laporan Aduan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_laporan_aduan',
            'nik',
            'id_admin',
            'laporan:ntext',
            'waktu_tgl',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
