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
    float: right;
    margin: 0em 1em !important;
  }
  .komentar {
    color: #7f7f7f;
    float: right;
    margin: 0 0.5em;

  }
  .waktu-komen{
    color: #8c8c8c;
  }
  .komentar p {
    margin: 0;
  }
  .col-sm-12 textarea{
    resize: none;
    width: 100%;
    margin: 0.5em 0;
  }
  .col-sm-12 button {
    float: right;
    margin: 0 0 1em;
  }
</style>
<div class="col-lg-12">
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-body">
        <h4>Aduan Masyarakat</h4>
        <div class="col-sm-12">
          <textarea name="komentar" class="form-control" placeholder="Laporkan"></textarea>
          <button type="submit" class="btn btn-md btn-info">Kirim <i class="fa fa-paper-plane-o"></i></button>
        </div>
        <div class="col-md-12">
          <div class="alert alert-info" role="alert">
          <strong>John Thor</strong>
          <p>Aku luwe durung sarapan</p>
          <p class="waktu"> 19:20 31 Jan 2017</p>
        </div>
        <div class="alert alert-info" role="alert">
          <strong>Mrong Osh</strong>
          <p>Aku luwe durung sarapan</p>
          <p class="waktu"> 19:20 31 Jan 2017</p>
        </div>
        <div class="alert alert-info" role="alert">
          <strong>Uvuvwevwevwe Onyetenyevwe Ugwemubwem Osas</strong>
          <p>Aku luwe durung sarapan</p>
          <p class="waktu"> 19:20 31 Jan 2017</p>
        </div>
        <div class="alert alert-info" role="alert">
          <strong>Jholeasuna Lapuslamarekanaujbck Ugwemubwem Osassla</strong>
          <p>Aku luwe durung sarapan</p>
          <p class="waktu"> 19:20 31 Jan 2017</p>
        </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-body">
        <h4>Laporan</h4>
        <div class="alert alert-warning" role="alert">
          <h4><strong>John Thor</strong></h4>
          <p>Aku luwe durung sarapan</p>
          <p class="waktu"> 19:20 31 Jan 2017</p>
          <div class="col-sm-12 komentar">
            <strong>Uvuvwevwevwe Onyetenyevwe Ugwemubwem Osas</strong>
            <p>Podo aku yoo luwe</p>
            <p class="waktu waktu-komen"> 19:20 31 Jan 2017</p>
          </div>
          <div class="col-sm-12 komentar">
            <strong>Mrong Osh</strong>
            <p>Podo aku yoo luwe</p>
            <p class="waktu waktu-komen"> 19:20 31 Jan 2017</p>
          </div>
        </div>
        <div class="col-sm-12">
          <textarea name="komentar" class="form-control" placeholder="Komentari"></textarea>
          <button type="submit" class="btn btn-md btn-info">Komentari <i class="fa fa-paper-plane-o"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>
