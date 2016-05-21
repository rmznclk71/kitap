<?php

namespace rmznclk71\kitap\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use rmznclk71\kitap\models\Okuyacakkitap;

/**
 * OkuyacakkitapSearch represents the model behind the search form about `backend\modules\admin\models\Okuyacakkitap`.
 */
class OkuyacakkitapSearch extends Okuyacakkitap
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kitap_id', 'user_id'], 'integer'],
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
        $query = Okuyacakkitap::find();

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
            'kitap_id' => $this->kitap_id,
            'user_id' => $this->user_id,
        ]);

        return $dataProvider;
    }
}
