<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detailkategori".
 *
 * @property integer $id_detail
 * @property integer $id_kategori
 * @property integer $id_produk
 */
class Detailkategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detailkategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kategori', 'id_produk'], 'required'],
            [['id_kategori', 'id_produk'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_detail' => 'Id Detail',
            'id_kategori' => 'Id Kategori',
            'id_produk' => 'Id Produk',
        ];
    }
}
