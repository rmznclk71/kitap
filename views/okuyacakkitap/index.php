<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\admin\models\OkuyacakkitapSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Okuyacak Kitaplar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="okuyacakkitap-index">

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

            //'id',
            //'user_id',
            'kitap.kitap_adi',
            'kitap.yazar_adi',
            'kitap.yayinevi',
            'kitap.kategori.isim',
            'kitap.sayfa_sayisi',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{view}, {delete}'],
        ],
    ]); ?>
</div>
