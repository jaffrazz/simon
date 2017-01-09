<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblLaporanAduan;

/**
 * TblLaporanAduanSearch represents the model behind the search form of `backend\models\TblLaporanAduan`.
 */
class TblLaporanAduanSearch extends TblLaporanAduan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_laporan_aduan', 'nik', 'id_admin'], 'integer'],
            [['laporan'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TblLaporanAduan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_laporan_aduan' => $this->id_laporan_aduan,
            'nik' => $this->nik,
            'id_admin' => $this->id_admin,
        ]);

        $query->andFilterWhere(['like', 'laporan', $this->laporan]);

        return $dataProvider;
    }
}
