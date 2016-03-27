<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FuCase */

$this->title = 'Create Fu Case';
$this->params['breadcrumbs'][] = ['label' => 'Fu Cases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fu-case-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'companynames' => $companynames,
        'insititutionnames' => $insititutionnames,
        'phasenames' => $phasenames,
    ]) ?>

</div>
