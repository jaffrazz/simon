<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_dana_infrastruktur".
 *
 * @property integer $id_dana_inf
 * @property string $nama_dana
 * @property string $jumlah
 * @property string $rencana_penggunaan
 * @property integer $id_admin
 */
class TblDanaInfrastruktur extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_dana_infrastruktur';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_dana_inf', 'nama_dana', 'jumlah', 'rencana_penggunaan', 'id_admin'], 'required'],
            [['jumlah', 'id_admin'], 'integer'],
            [['id_dana_inf', 'nama_dana', 'rencana_penggunaan'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_dana_inf' => 'Id Dana Inf',
            'nama_dana' => 'Nama Dana',
            'jumlah' => 'Jumlah',
            'rencana_penggunaan' => 'Rencana Penggunaan',
            'id_admin' => 'Id Admin',
        ];
    }
}
