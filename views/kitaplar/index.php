<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\admin\models\KitaplarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kitaplar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kitaplar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Kitap Ekle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kitap_adi',
            'yazar_adi',
            'yayinevi',
            'kategori.isim',
             'sayfa_sayisi',
            // 'kullanci_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
