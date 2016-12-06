<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblDanaInfrastrukturSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Dana Infrastrukturs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-dana-infrastruktur-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Dana Infrastruktur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_dana_inf',
            'nama_dana:ntext',
            'jumlah',
            'rencana_penggunaan:ntext',
            'id_admin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
