<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use rmznclk71\kitap\models\Kategori;

/* @var $this yii\web\View */
/* @var $model backend\modules\admin\models\Kitaplar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kitaplar-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'kitap_adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yazar_adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yayinevi')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'kategori_id')->dropDownList(
        ArrayHelper::map(Kategori::find()->all(),'id','isim'), ['prompt'=> 'Kategori Seçiniz..']) ?>


    <?= $form->field($model, 'sayfa_sayisi')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
