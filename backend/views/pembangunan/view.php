<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;



/* @var $this yii\web\View */
/* @var $model backend\models\TblPembangunan */


$this->title = $model->id_pembangunan;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pembangunan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile("/simon/admin/css/modalImg.css");


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
<div class="col-lg-7"></div>
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
                  <td>
                    <div class="col-sm-12">
                        <img id="myImg" alt="<?= $model->nama_pembanguna;?>" src="<?= Yii::$app->homeUrl.$model->foto ?>" style="max-width:200px;max-height:150px;"/>
                    </div>
                    <div class="col-sm-12">
                        Klik gambar Untuk Perbesar
                    </div>
                    
                    
                  </td>
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
                  <td>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?= $model->progres;?>"
                      aria-valuemin="0" aria-valuemax="100" style="width:<?= $model->progres;?>%">
                        <?= $model->progres;?>% Complete
                      </div>
                    </div>
                  </td>
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
<div id="myModal" class="modal">

    <!-- The Close Button -->
    <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="img01">

    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
</div>
<!-- <div class="modal fade modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?= $model->nama_pembanguna;?></h4>
      </div>
      <div class="modal-body">
        <img src="<?= Yii::$app->homeUrl.$model->foto ?>" style="max-width:870px;max-height:700px;"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div -->
<script>
    //Map
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
    var isicontent = '<div><?= $model->nama_pembanguna; ?></div>';
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

  //Modal Image
  // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwa1N13OXrwWlZ_RRA0nYqU0V2GWjN8aM&callback=initMap">
</script>

</div>
