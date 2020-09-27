<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Berobat;

/**
 * BerobatSearch represents the model behind the search form of `common\models\Berobat`.
 */
class BerobatSearch extends Berobat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Berobat', 'id_Pasien', 'id_dokter'], 'integer'],
            [['tgl_berobat', 'keluhan_pasien', 'hasil_diagnosa', 'status_pasien'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Berobat::find();

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
            'id_Berobat' => $this->id_Berobat,
            'id_Pasien' => $this->id_Pasien,
            'id_dokter' => $this->id_dokter,
            'tgl_berobat' => $this->tgl_berobat,
        ]);

        $query->andFilterWhere(['like', 'keluhan_pasien', $this->keluhan_pasien])
            ->andFilterWhere(['like', 'hasil_diagnosa', $this->hasil_diagnosa])
            ->andFilterWhere(['like', 'status_pasien', $this->status_pasien]);

        return $dataProvider;
    }
}
