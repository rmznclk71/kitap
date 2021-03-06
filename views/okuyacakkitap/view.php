<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\admin\models\Okuyacakkitap */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Okuyacak Kitaplar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="okuyacakkitap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'kitap.kitap_adi',
        ],
    ]) ?>

</div>
