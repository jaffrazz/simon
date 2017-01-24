<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;



/* @var $this yii\web\View */
/* @var $model backend\models\TblPembangunan */


$this->title = $model->id_pembangunan;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pembangunan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


?>
<style>
  #map {
    bottom: 0;
    left: 0;
    position: absolute !important;
    right: 0;
    top: 0;
   }
</style>
<div class="tbl-pembangunan-view">

    

    <p>
        
    </p>

<div id="map"></div>
<div class="col-lg-4 well bs-example bs-example-bg-classes">
    <?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data'],
    'method' => 'get',
  ]); ?>
  <div class="panel panel-info">
      <div class="panel-heading">Data <strong><?= $model->nama_pembanguna;?></strong></div>
      <div class="panel-body col-sm-4" style="font-weight:bold">Id_pembangunan</div>
      <div class="panel-body col-sm-6"><?= $model->id_pembangunan;?></div>
      <div class="panel-body col-sm-4" style="font-weight:bold">Id Dana Infrastruktur</div>
      <div class="panel-body col-sm-6"><?= $model->id_dana_inf;?></div>
      <div class="panel-body col-sm-4" style="font-weight:bold">Nama Pembangunan</div>
      <div class="panel-body col-sm-6"><?= $model->nama_pembanguna;?></div>
      <div class="panel-body col-sm-4" style="font-weight:bold">Foto</div>
      <div class="panel-body col-sm-6"><img src="<?= Yii::$app->homeUrl.$model->foto ?>" style="max-width:300px;max-height:250px;"/></div>
      <div class="panel-body col-sm-4" style="font-weight:bold">Anggaran</div>
      <div class="panel-body col-sm-6"><?= $model->anggaran;?></div>
      <div class="panel-body col-sm-4" style="font-weight:bold">Tl Mulai / Tgl Selesai</div>
      <div class="panel-body col-sm-6"><?= $model->tgl_mulai;?> / <?= $model->tgl_selesai;?></div>
      <div class="panel-body col-sm-4" style="font-weight:bold">Progres</div>
      <div class="panel-body col-sm-6"><?= $model->progres;?></div>
      <div class="panel-body col-sm-4" style="font-weight:bold">Keterangan</div>
      <div class="panel-body col-sm-6"><?= $model->keterangan;?></div>
      <div class="panel-body col-sm-6">
        <?= Html::a('Update', ['update', 'id' => $model->id_pembangunan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pembangunan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
      </div>
  </div>
  <?php ActiveForm::end();?>
</div>
<script>
  function initMap() {
    
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: new google.maps.LatLng(<?= $model->lat;?>, <?= $model->lng;?>),
    });
    
    var url_icon = "http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=";
    marker = new google.maps.Marker({
        position: map.getCenter(),
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP
    });
    var isicontent = '<div class="col-sm-2"><?= $model->nama_pembanguna; ?></div>';
    var infowindow = new google.maps.InfoWindow({
        content: isicontent
    });
     marker.addListener('click', function(){
        infowindow.open(map, marker);
     });
     function toggleBounce() {
      if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
      } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
      }
    }
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwa1N13OXrwWlZ_RRA0nYqU0V2GWjN8aM&callback=initMap">
</script>

</div>
