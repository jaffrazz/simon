<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblDanaInfrastruktur;

/**
 * TblDanaInfrastrukturSearch represents the model behind the search form of `backend\models\TblDanaInfrastruktur`.
 */
class TblDanaInfrastrukturSearch extends TblDanaInfrastruktur
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_dana_inf', 'jumlah', 'id_admin'], 'integer'],
            [['nama_dana', 'rencana_penggunaan'], 'safe'],
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
        $query = TblDanaInfrastruktur::find();

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
            'id_dana_inf' => $this->id_dana_inf,
            'jumlah' => $this->jumlah,
            'id_admin' => $this->id_admin,
        ]);

        $query->andFilterWhere(['like', 'nama_dana', $this->nama_dana])
            ->andFilterWhere(['like', 'rencana_penggunaan', $this->rencana_penggunaan]);

        return $dataProvider;
    }
}
