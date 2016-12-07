<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblPembangunan;

/**
 * TblPembangunanSearch represents the model behind the search form of `backend\models\TblPembangunan`.
 */
class TblPembangunanSearch extends TblPembangunan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pembangunan', 'id_dana_inf', 'anggaran', 'progres', 'id_admin'], 'integer'],
            [['nama_pembanguna', 'foto', 'lat', 'lng', 'tgl_mulai', 'tgl_selesai', 'keterangan'], 'safe'],
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
        $query = TblPembangunan::find();

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
            'id_pembangunan' => $this->id_pembangunan,
            'id_dana_inf' => $this->id_dana_inf,
            'anggaran' => $this->anggaran,
            'tgl_mulai' => $this->tgl_mulai,
            'tgl_selesai' => $this->tgl_selesai,
            'progres' => $this->progres,
            'id_admin' => $this->id_admin,
        ]);

        $query->andFilterWhere(['like', 'nama_pembanguna', $this->nama_pembanguna])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'lat', $this->lat])
            ->andFilterWhere(['like', 'lng', $this->lng])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
