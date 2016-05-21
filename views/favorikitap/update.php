<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\admin\models\Favorikitap */

$this->title = 'Update Favorikitap: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Favorikitaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="favorikitap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
