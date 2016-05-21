<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\admin\models\Okuyacakkitap */

$this->title = 'Kitap Ekle';
$this->params['breadcrumbs'][] = ['label' => 'Okuyacak Kitap', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="okuyacakkitap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
