<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\admin\models\Favorikitap */

$this->title = 'Kitap Ekle';
$this->params['breadcrumbs'][] = ['label' => 'Favori Kitaplar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="favorikitap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
