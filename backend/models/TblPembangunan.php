<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_pembangunan".
 *
 * @property integer $id_pembangunan
 * @property integer $id_dana_inf
 * @property string $nama_pembanguna
 * @property resource $foto
 * @property string $lat
 * @property string $lng
 * @property integer $anggaran
 * @property string $tgl_mulai
 * @property string $tgl_selesai
 * @property integer $progres
 * @property string $keterangan
 * @property integer $id_admin
 */
class TblPembangunan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_pembangunan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pembangunan', 'id_dana_inf', 'nama_pembanguna', 'foto', 'lat', 'lng', 'anggaran', 'tgl_mulai', 'tgl_selesai', 'progres', 'keterangan', 'id_admin'], 'required'],
            [['id_pembangunan', 'id_dana_inf', 'anggaran', 'progres', 'id_admin'], 'integer'],
            [['nama_pembanguna', 'foto', 'keterangan'], 'string'],
            [['tgl_mulai', 'tgl_selesai'], 'safe'],
            [['lat', 'lng'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pembangunan' => 'Id Pembangunan',
            'id_dana_inf' => 'Id Dana Inf',
            'nama_pembanguna' => 'Nama Pembanguna',
            'foto' => 'Foto',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'anggaran' => 'Anggaran',
            'tgl_mulai' => 'Tgl Mulai',
            'tgl_selesai' => 'Tgl Selesai',
            'progres' => 'Progres',
            'keterangan' => 'Keterangan',
            'id_admin' => 'Id Admin',
        ];
    }
}
