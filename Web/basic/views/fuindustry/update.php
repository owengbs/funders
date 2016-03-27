<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FuIndustry */

$this->title = 'Update Fu Industry: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fu Industries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fu-industry-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
