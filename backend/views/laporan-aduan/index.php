<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblLaporanAduanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Aduan';
$this->params['breadcrumbs'][] = $this->title;
?>
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


<?php


use yii\widgets\ActiveForm;

$this->registerJsFile('@web/css/dist/js/Konsultasi-Pesan.js',['depends' => [\backend\assets\AppAsset::className()]]);

 ?>
 <!-- <div class="FixedHeightContainer">
   <h2>Title</h2>
   <div class="messages-list">
    blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah... ..blah blah blah...
   </div>
 </div> -->
<div class="row">

  <div class="col-md-4">
    <div class="box box-primary FixedHeightContainer">
      <div class="box-header with-border">
        <h3 class="box-title">Pesan</h3>
        <div class="box-tools pull-right">
          <div class="has-feedback">
            <input type="text" class="form-control input-sm" placeholder="Cari Pesan">
            <span class="glyphicon glyphicon-search form-control-feedback"></span>
          </div>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body no-padding messages-list">
        <div class="table-responsive">
          <table class="table table-hover bordered">
            <tbody id="tbody-message-list">
              <!-- <?php foreach ($message_list as $data): ?>
                <tr <?php echo (($data['seen']==1) ? "class='clickable-row'" : "class='clickable-row unred-message'") ?> id="message-tr" data-href='javascript:getIsiKonsultasi(<?=$data['id_konsultasi']?>)'>
                  <td class="mailbox-name"><a href="read-mail.html"><?=$data['nama_pasien']?></a><br><b><?=$data['judul']?></b></td>
                  <td class="mailbox-date"><?=$data['tanggal']?></td>
                </tr>
              <?php endforeach; ?> -->
            </tbody>
          </table><!-- /.table -->
        </div><!-- /.mail-box-messages -->
      </div><!-- /.box-body -->
      <div class="box-footer">

      </div>
    </div><!-- /. box -->
  </div><!-- /.col -->

  <div class="col-md-8">
    <div class="box box-primary direct-chat direct-chat-success FixedHeightContainer">
      <div class="box-header with-border">
        <h3 class="box-title" id="judul">Judul Konsultasi</h3>
        <div class="box-tools pull-right">
          <div class="has-feedback">
            <button class="btn btn-primary btn-sm replyButton" data-toggle="modal" data-target="#reply-modal" id="btn-jawab-pesan"><i class="fa fa-commenting"></i> Jawab</button>
            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-confirm" id="btn-hapus-pesan"><i class="fa fa-trash-o"></i> Hapus</button>
          </div>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body no-padding messages-value">
        <div class="direct-chat-messages">
          <img src=<?php echo Yii::$app->homeUrl."/img/loading.svg"; ?> id="loading-isi-pesan" />
        </div>
      </div><!-- /.box-body -->
      <div class="box-footer">
      </div>
    </div><!-- /. box -->
  </div><!-- /.col -->
</div>

<!-- Modal -->
<div class="modal modal-primary fade" id="reply-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <?php ActiveForm::begin(['action'=>['jawab'],'options' => ['id' => 'id_laporan_aduan', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']]) ?>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><i class="fa fa-commenting"></i> Jawab Konsultasi</h4>
      </div>
      <div class="modal-body">
        <div class="textarea-container">
          <input type="hidden" name="IsiKonsultasi[id_konsultasi]" value="" id="id_konsultasi">
          <textarea name="IsiKonsultasi[isi]" rows="10" cols="89" class="replyTextArea" required></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline btn-sm pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline"><li class="fa fa-send-o"></li> Kirim</button>
      </div>
    </div>
  </div>
  <?php ActiveForm::end(); ?>
</div>

<!-- Modal-Confirm -->
<div class="modal modal-danger fade" id="modal-confirm" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Perhatian</h4>
      </div>
      <div class="modal-body">
        <p>
          Anda yakin ingin menghapus pesan ini ?
        </p>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-outline" id="btn-delete-ya">Ya</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
      </div>
    </div>
  </div>
</div>

