<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FuProject */

$this->title = 'Update Fu Project: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fu Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fu-project-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'companynames' => $companynames,
        'industrynames' => $industrynames,
    ]) ?>

</div>
