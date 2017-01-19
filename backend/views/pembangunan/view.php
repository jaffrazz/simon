<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\services\DirectionsWayPoint;
use dosamigos\google\maps\services\TravelMode;
use dosamigos\google\maps\overlays\PolylineOptions;
use dosamigos\google\maps\services\DirectionsRenderer;
use dosamigos\google\maps\services\DirectionsService;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;
use dosamigos\google\maps\services\DirectionsRequest;
use dosamigos\google\maps\overlays\Polygon;
use dosamigos\google\maps\layers\BicyclingLayer;

/* @var $this yii\web\View */
/* @var $model backend\models\TblPembangunan */


$this->title = $model->id_pembangunan;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pembangunan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$coord = new LatLng(['lat' => 39.720089311812094, 'lng' => 2.91165944519042]);
$map = new Map([
    'center' => $coord,
    'zoom' => 14,
]);
?>
<div class="tbl-pembangunan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pembangunan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pembangunan], [
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
            'id_pembangunan',
            'id_dana_inf',
            'nama_pembanguna:ntext',
            [
                'attribute'=>'foto',
                'format' => 'raw',
                'value' => '<img src="'.Yii::$app->homeUrl.$model->foto.'" style="max-width:400px;max-height:350px;"/>'
            ],
            [
                'attribute'=>'lat',
                'format' => 'raw',
                'value' => '<div class="col-md-6">
                                '.$map->display().'
                            </div>'
            ],



            // $coord = new LatLng(['lat' => $lat, 'lng' => $lng]),
            // $marker = new Marker([
            //             'position' => $coord,
            //             'title' => 'My Home Town',
            //         ]),
            // [
            //     'attribute' => ['lat','lng'],
            //     'format'    => 'raw',
            //     'value'     => 
            //     '<div id="map"></div>

            //     <script>
            //       var customLabel = {
            //         restaurant: {
            //           label: "R"
            //         },
            //         bar: {
            //           label: "B"
            //         }
            //       };

            //         function initMap() {
            //         var map = new google.maps.Map(document.getElementById("map"), {
            //           center: new google.maps.LatLng(-33.863276, 151.207977),
            //           zoom: 12
            //         });
            //         var infoWindow = new google.maps.InfoWindow;

            //           // Change this depending on the name of your PHP or XML file
            //           downloadUrl("https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml", function(data) {
            //             var xml = data.responseXML;
            //             var markers = xml.documentElement.getElementsByTagName("marker");
            //             Array.prototype.forEach.call(markers, function(markerElem) {
            //               var name = markerElem.getAttribute("name");
            //               var address = markerElem.getAttribute("address");
            //               var type = markerElem.getAttribute("type");
            //               var point = new google.maps.LatLng(
            //                   parseFloat(markerElem.getAttribute("lat")),
            //                   parseFloat(markerElem.getAttribute("lng")));

            //               var infowincontent = document.createElement("div");
            //               var strong = document.createElement("strong");
            //               strong.textContent = name
            //               infowincontent.appendChild(strong);
            //               infowincontent.appendChild(document.createElement("br"));

            //               var text = document.createElement("text");
            //               text.textContent = address
            //               infowincontent.appendChild(text);
            //               var icon = customLabel[type] || {};
            //               var marker = new google.maps.Marker({
            //                 map: map,
            //                 position: point,
            //                 label: icon.label
            //               });
            //               marker.addListener("click", function() {
            //                 infoWindow.setContent(infowincontent);
            //                 infoWindow.open(map, marker);
            //               });
            //             });
            //           });
            //         }



            //       function downloadUrl(url, callback) {
            //         var request = window.ActiveXObject ?
            //             new ActiveXObject("Microsoft.XMLHTTP") :
            //             new XMLHttpRequest;

            //         request.onreadystatechange = function() {
            //           if (request.readyState == 4) {
            //             request.onreadystatechange = doNothing;
            //             callback(request, request.status);
            //           }
            //         };

            //         request.open("GET", url, true);
            //         request.send(null);
            //       }

            //       function doNothing() {}
            //     </script>'
            // ],
            'anggaran',
            'tgl_mulai',
            'tgl_selesai',
            'progres',
            'keterangan:ntext',
            'id_admin',
        ],
    ]) ?>

</div>
