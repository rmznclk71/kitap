<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

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
        
    </p>
    <?php  Pjax::begin() ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kitap_adi',
            'yazar_adi',
            'yayinevi',
            'kategori.isim',
            // 'sayfa_sayisi',
            // 'kullanci_id',
        ],
    ]); ?>
    <?php Pjax::end() ?>
</div>
