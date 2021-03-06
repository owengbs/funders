<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FuCase */

$this->title = 'Update Fu Case: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fu Cases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fu-case-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'companynames' => $companynames,
        'insititutionnames' => $insititutionnames,
        'phasenames' => $phasenames        
    ]) ?>

</div>
