<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\admin\models\Kitaponeri */

$this->title = 'Create Kitaponeri';
$this->params['breadcrumbs'][] = ['label' => 'Kitaponeris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kitaponeri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
