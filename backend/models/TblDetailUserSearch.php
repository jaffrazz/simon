<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblDetailUser;

/**
 * TblDetailUserSearch represents the model behind the search form of `backend\models\TblDetailUser`.
 */
class TblDetailUserSearch extends TblDetailUser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nik', 'jenis_kelamin', 'desa', 'agama', 'status_perkawinan', 'pekerjaan', 'id_admin'], 'integer'],
            [['nama', 'tempat_lahir', 'tgl_lahir', 'rt', 'rw', 'dusun'], 'safe'],
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
        $query = TblDetailUser::find();

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
            'nik' => $this->nik,
            'tgl_lahir' => $this->tgl_lahir,
            'jenis_kelamin' => $this->jenis_kelamin,
            'desa' => $this->desa,
            'agama' => $this->agama,
            'status_perkawinan' => $this->status_perkawinan,
            'pekerjaan' => $this->pekerjaan,
            'id_admin' => $this->id_admin,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'rt', $this->rt])
            ->andFilterWhere(['like', 'rw', $this->rw])
            ->andFilterWhere(['like', 'dusun', $this->dusun]);

        return $dataProvider;
    }
}
