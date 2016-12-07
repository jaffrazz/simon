<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_user".
 *
 * @property integer $nik
 * @property integer $pin
 */
class TblUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nik', 'pin'], 'required'],
            [['nik', 'pin'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nik' => 'Nik',
            'pin' => 'Pin',
        ];
    }
}
