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
<div class="col-lg-5 well bs-example bs-example-bg-classes">
    <?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data'],
    'method' => 'get',
  ]); ?>
  <div class="panel panel-info">
      <div class="panel-heading">Data <strong><?= $model->nama_pembanguna;?></strong></div>
      <div class="panel-body">
          <table class="table table-hover">
              <tr>
                  <th>Id Pembangunan</th>
                  <td><?= $model->id_pembangunan;?></td>
              </tr>
              <tr>
                  <th>Id Dana Infrastruktur</th>
                  <td><?= $model->id_dana_inf;?></td>
              </tr>
              <tr>
                  <th>Nama Pembangunan</th>
                  <td><?= $model->nama_pembanguna;?></td>
              </tr>
              <tr>
                  <th>Foto</th>
                  <td><img src="<?= Yii::$app->homeUrl.$model->foto ?>" style="max-width:300px;max-height:250px;"/></td>
              </tr>
              <tr>
                  <th>Anggaran</th>
                  <td><?= $model->anggaran;?></td>
              </tr>
              <tr>
                  <th>Tgl Mulai / Tgl Selesai</th>
                  <td><?= $model->tgl_mulai;?> / <?= $model->tgl_selesai;?></td>
              </tr>
              <tr>
                  <th>Progres</th>
                  <td><?= $model->progres;?></td>
              </tr>
              <tr>
                  <th>Keterangan</th>
                  <td><?= $model->keterangan;?></td>
              </tr>
          </table>
      </div>
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
