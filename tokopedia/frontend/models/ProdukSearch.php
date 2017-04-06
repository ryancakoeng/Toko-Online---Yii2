<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Produk;

/**
 * ProdukSearch represents the model behind the search form about `frontend\models\Produk`.
 */
class ProdukSearch extends Produk
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_produk', 'kategori', 'stock'], 'integer'],
            [['nama_produk', 'detail_produk', 'status_barang', 'foto'], 'safe'],
            [['harga'], 'number'],
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
        $query = Produk::find();

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
            'id_produk' => $this->id_produk,
            'kategori' => $this->kategori,
            'harga' => $this->harga,
            'stock' => $this->stock,
        ]);

        $query->andFilterWhere(['like', 'nama_produk', $this->nama_produk])
            ->andFilterWhere(['like', 'detail_produk', $this->detail_produk])
            ->andFilterWhere(['like', 'status_barang', $this->status_barang])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
