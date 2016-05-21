<?php

namespace rmznclk71\kitap\models;

use Yii;

/**
 * This is the model class for table "kitap_oneri".
 *
 * @property integer $id
 * @property integer $kitap_id
 * @property integer $user_id
 *
 * @property Kitaplar $kitap
 * @property User $user
 */
class Kitaponeri extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kitap_oneri';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kitap_id', 'user_id'], 'required'],
            [['kitap_id', 'user_id'], 'integer'],
            [['kitap_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kitaplar::className(), 'targetAttribute' => ['kitap_id' => 'kitap_id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kitap_id' => 'Kitap Adı',
            'user_id' => 'Kullanıcı',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKitap()
    {
        return $this->hasOne(Kitaplar::className(), ['kitap_id' => 'kitap_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
