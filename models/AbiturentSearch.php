<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Abiturent;

/**
 * AbiturentSearch represents the model behind the search form of `app\models\Abiturent`.
 */
class AbiturentSearch extends Abiturent
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_kod'], 'integer'],
            [['fio', 'passport', 'telefon', 'image', 'manzil', 'dtm_varaqi', 'payment_file'], 'safe'],
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
        $query = Abiturent::find();

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
            'id' => $this->id,
            'id_kod' => $this->id_kod,
        ]);

        $query->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'passport', $this->passport])
            ->andFilterWhere(['like', 'telefon', $this->telefon])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'manzil', $this->manzil])
            ->andFilterWhere(['like', 'dtm_varaqi', $this->dtm_varaqi])
            ->andFilterWhere(['like', 'payment_file', $this->payment_file]);

        return $dataProvider;
    }
}
