<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Detailkategori;

/**
 * DetailkategoriSearch represents the model behind the search form about `frontend\models\Detailkategori`.
 */
class DetailkategoriSearch extends Detailkategori
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_detail', 'id_kategori', 'id_produk'], 'integer'],
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
        $query = Detailkategori::find();

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
            'id_detail' => $this->id_detail,
            'id_kategori' => $this->id_kategori,
            'id_produk' => $this->id_produk,
        ]);

        return $dataProvider;
    }
}
