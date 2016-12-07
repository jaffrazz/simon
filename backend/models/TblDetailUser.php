<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_detail_user".
 *
 * @property integer $nik
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property integer $jenis_kelamin
 * @property string $rt
 * @property string $rw
 * @property string $dusun
 * @property integer $desa
 * @property integer $agama
 * @property integer $status_perkawinan
 * @property integer $pekerjaan
 * @property integer $id_admin
 */
class TblDetailUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_detail_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nik', 'nama', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'rt', 'rw', 'dusun', 'desa', 'agama', 'status_perkawinan', 'pekerjaan', 'id_admin'], 'required'],
            [['nik', 'jenis_kelamin', 'desa', 'agama', 'status_perkawinan', 'pekerjaan', 'id_admin'], 'integer'],
            [['tgl_lahir'], 'safe'],
            [['nama'], 'string', 'max' => 64],
            [['tempat_lahir', 'dusun'], 'string', 'max' => 16],
            [['rt', 'rw'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nik' => 'Nik',
            'nama' => 'Nama',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'rt' => 'Rt',
            'rw' => 'Rw',
            'dusun' => 'Dusun',
            'desa' => 'Desa',
            'agama' => 'Agama',
            'status_perkawinan' => 'Status Perkawinan',
            'pekerjaan' => 'Pekerjaan',
            'id_admin' => 'Id Admin',
        ];
    }
}
