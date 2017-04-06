<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property integer $id_kategori
 * @property string $nama
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kategori', 'nama'], 'required'],
            [['id_kategori'], 'integer'],
            [['nama'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kategori' => 'Id Kategori',
            'nama' => 'Nama',
        ];
    }
}
