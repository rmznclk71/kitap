<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\admin\models\Kitaplar */

$this->title = 'Update Kitaplar: ' . $model->kitap_id;
$this->params['breadcrumbs'][] = ['label' => 'Kitaplars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kitap_id, 'url' => ['view', 'id' => $model->kitap_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kitaplar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
