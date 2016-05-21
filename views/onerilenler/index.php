<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\admin\models\KitaponeriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Önerilen Kitaplar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kitaponeri-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'kitap.kitap_adi',
            'kitap.yazar_adi',
            'kitap.yayinevi',
            'kitap.kategori.isim',
            'kitap.sayfa_sayisi',

            
        ],
    ]); ?>
</div>
