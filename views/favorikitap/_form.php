<?php

use rmznclk71\kitap\models\Kitaplar;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\admin\models\Favorikitap */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="favorikitap-form">

    <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($model, 'kitap_id')->dropDownList(
    	ArrayHelper::map(Kitaplar::find()->all(),'kitap_id','kitap_adi'), ['prompt'=> 'Kitap Seçiniz ..']) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Ekle' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
