<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\admin\models\FavorikitapSerach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Favori Kitaplar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="favorikitap-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Kitap Ekle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php  Pjax::begin() ?>
    <?= GridView::widget([
       'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kitap.kitap_adi',
            'kitap.yazar_adi',
            'kitap.yayinevi',
            'kitap.kategori.isim',
            'kitap.sayfa_sayisi',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{view}, {delete}'],
        ],
    ]); ?>
    <?php Pjax::end() ?>
</div>
