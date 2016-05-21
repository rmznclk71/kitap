<?php

namespace rmznclk71\kitap\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property integer $id
 * @property string $isim
 *
 * @property Kitaplar[] $kitaplars
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
            [['isim'], 'required'],
            [['isim'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isim' => 'Isim',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKitaplars()
    {
        return $this->hasMany(Kitaplar::className(), ['kategori_id' => 'id']);
    }

    public function getKategori()
    {
        return $this->hasMany(Kategori::className(), ['id' => 'kategori_id']);
    }
}
