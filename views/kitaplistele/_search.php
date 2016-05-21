<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\admin\models\KitaplarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kitaplar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kitap_id') ?>

    <?= $form->field($model, 'yazar_adi') ?>

    <?= $form->field($model, 'kitap_adi') ?>

    <?= $form->field($model, 'yayinevi') ?>

    <?= $form->field($model, 'kategori_id') ?>

    <?php // echo $form->field($model, 'sayfa_sayisi') ?>

    <?php // echo $form->field($model, 'kullanci_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
