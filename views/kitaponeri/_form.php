<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use rmznclk71\kitap\models\Kitaplar;
use rmznclk71\kitap\models\User;

/* @var $this yii\web\View */
/* @var $model backend\modules\admin\models\Kitaponeri */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kitaponeri-form">

    <?php $form = ActiveForm::begin(); ?>

    

    <?= $form->field($model, 'kitap_id')->dropDownList(
    	ArrayHelper::map(Kitaplar::find()->all(),'kitap_id','kitap_adi'), ['prompt'=> 'Kitap Seçiniz..']) ?>


    <?= $form->field($model, 'user_id')->dropDownList(
    	ArrayHelper::map(User::find()->all(),'id','username'), ['prompt'=> 'Kullanıcı Seçiniz..']) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Öner' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
