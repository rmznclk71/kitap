<?php

namespace rmznclk71\kitap\models;

use Yii;

/**
 * This is the model class for table "kitaplar".
 *
 * @property integer $kitap_id
 * @property string $yazar_adi
 * @property string $kitap_adi
 * @property string $yayinevi
 * @property integer $kategori_id
 * @property double $sayfa_sayisi
 * @property integer $kullanci_id
 *
 * @property FavoriKitap[] $favoriKitaps
 * @property KitapOneri[] $kitapOneris
 * @property User $kullanci
 * @property Kategori $kategori
 * @property OkunanKitap[] $okunanKitaps
 * @property OkuyacakKitap[] $okuyacakKitaps
 */
class Kitaplar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kitaplar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['yazar_adi', 'kitap_adi', 'yayinevi', 'kategori_id', 'sayfa_sayisi', 'kullanci_id'], 'required'],
            [['kategori_id', 'kullanci_id'], 'integer'],
            [['sayfa_sayisi'], 'number'],
            [['yazar_adi', 'kitap_adi', 'yayinevi'], 'string', 'max' => 100],
            [['kullanci_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['kullanci_id' => 'id']],
            [['kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['kategori_id' => 'id']],
            [['kitap_adi'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kitap_id' => 'Kitap ID',
            'yazar_adi' => 'Yazar Adi',
            'kitap_adi' => 'Kitap Adi',
            'yayinevi' => 'Yayinevi',
            'kategori_id' => 'Kategori ID',
            'sayfa_sayisi' => 'Sayfa Sayisi',
            'kullanci_id' => 'Kullanci ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFavoriKitaps()
    {
        return $this->hasMany(FavoriKitap::className(), ['kitap_id' => 'kitap_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKitapOneris()
    {
        return $this->hasMany(KitapOneri::className(), ['kitap_id' => 'kitap_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKullanci()
    {
        return $this->hasOne(User::className(), ['id' => 'kullanci_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(Kategori::className(), ['id' => 'kategori_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOkunanKitaps()
    {
        return $this->hasMany(OkunanKitap::className(), ['kitap_id' => 'kitap_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOkuyacakKitaps()
    {
        return $this->hasMany(OkuyacakKitap::className(), ['kitap_id' => 'kitap_id']);
    }
}
