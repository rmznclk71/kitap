<?php

namespace rmznclk71\kitap\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use rmznclk71\kitap\models\Kitaplar;

/**
 * KitaplarSearch represents the model behind the search form about `backend\modules\admin\models\Kitaplar`.
 */
class KitaplarSearch extends Kitaplar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kitap_id', 'kategori_id', 'kullanci_id'], 'integer'],
            [['yazar_adi', 'kitap_adi', 'yayinevi'], 'safe'],
            [['sayfa_sayisi'], 'number'],
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
        $query = Kitaplar::find();

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
            'kitap_id' => $this->kitap_id,
            'kategori_id' => $this->kategori_id,
            'sayfa_sayisi' => $this->sayfa_sayisi,
            'kullanci_id' => $this->kullanci_id,
        ]);

        $query->andFilterWhere(['like', 'yazar_adi', $this->yazar_adi])
            ->andFilterWhere(['like', 'kitap_adi', $this->kitap_adi])
            ->andFilterWhere(['like', 'yayinevi', $this->yayinevi]);

        return $dataProvider;
    }
}
