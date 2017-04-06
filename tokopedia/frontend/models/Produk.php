<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property integer $id_produk
 * @property string $nama_produk
 * @property integer $kategori
 * @property string $harga
 * @property string $detail_produk
 * @property integer $stock
 * @property string $status_barang
 * @property string $foto
 */
class Produk extends \yii\db\ActiveRecord
{
	public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_produk', 'kategori', 'harga', 'detail_produk', 'stock', 'status_barang', 'foto'], 'required'],
            [['kategori', 'stock'], 'integer'],
            [['harga'], 'number'],
            [['status_barang'], 'string'],
            [['nama_produk'], 'string', 'max' => 25],
            [['detail_produk'], 'string', 'max' => 255],
            [['file'],'safe'],
            [['file'],'file','extensions'=>'jpg, jpeg, png'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_produk' => 'Id Produk',
            'nama_produk' => 'Nama Produk',
            'kategori' => 'Kategori',
            'harga' => 'Harga',
            'detail_produk' => 'Detail Produk',
            'stock' => 'Stock',
            'status_barang' => 'Status Barang',
            'file' => 'Foto',
        ];
    }
}
