<?php

namespace rmznclk71\kitap\models;

use Yii;

/**
 * This is the model class for table "favori_kitap".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $kitap_id
 *
 * @property User $user
 * @property Kitaplar $kitap
 */
class Favorikitap extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'favori_kitap';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'kitap_id'], 'required'],
            [['user_id', 'kitap_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['kitap_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kitaplar::className(), 'targetAttribute' => ['kitap_id' => 'kitap_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'kitap_id' => 'Kitap Adı',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKitap()
    {
        return $this->hasOne(Kitaplar::className(), ['kitap_id' => 'kitap_id']);
    }
}
