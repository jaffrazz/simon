<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblLaporanAduanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Aduan';
$this->params['breadcrumbs'][] = $this->title;
?>
<style type="text/css">
  .waktu {
    font-size: x-small;
    color: #ecf0f5;
    v-align: right !important;
}
</style>
<!-- <div class="tbl-laporan-aduan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Laporan Aduan', ['create'], ['class' => 'btn btn-success']) ?>
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div> -->
<div class="col-lg-12">
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-body">
        <h4>Laporan Masyarakat</h4>
        <div class="alert alert-info" role="alert">
          <strong>John Thor</strong>
          <p>Aku luwe durung sarapan</p>
          <div class="col-sm-4 waktu"> 19:20 31 Jan 2017</div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="alert alert-warning" role="alert"> <h4>Changing the icon font location</h4> <p>Bootstrap assumes icon font files will be located in the <code>../fonts/</code> directory, relative to the compiled CSS files. Moving or renaming those font files means updating the CSS in one of three ways:</p> <ul> <li>Change the <code>@icon-font-path</code> and/or <code>@icon-font-name</code> variables in the source Less files.</li> <li>Utilize the <a href="http://lesscss.org/usage/#command-line-usage-relative-urls">relative URLs option</a> provided by the Less compiler.</li> <li>Change the <code>url()</code> paths in the compiled CSS.</li> </ul> <p>Use whatever option best suits your specific development setup.</p> </div>
      </div>
    </div>
  </div>
</div>
