<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_laporan_aduan".
 *
 * @property integer $id_laporan_aduan
 * @property integer $nik
 * @property integer $id_admin
 * @property string $laporan
 * @property string $waktu_tgl
 */
class TblLaporanAduan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_laporan_aduan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_laporan_aduan', 'nik', 'id_admin', 'laporan', 'waktu_tgl'], 'required'],
            [['id_laporan_aduan', 'nik', 'id_admin'], 'integer'],
            [['laporan'], 'string'],
            [['waktu_tgl'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_laporan_aduan' => 'Id Laporan Aduan',
            'nik' => 'Nik',
            'id_admin' => 'Id Admin',
            'laporan' => 'Laporan',
            'waktu_tgl' => 'Waktu Tgl',
        ];
    }
}
