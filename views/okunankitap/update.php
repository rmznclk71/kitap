<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\admin\models\Okunankitap */

$this->title = 'Update Okunankitap: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Okunankitaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="okunankitap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
