<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FuPhase */

$this->title = 'Create Fu Phase';
$this->params['breadcrumbs'][] = ['label' => 'Fu Phases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fu-phase-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
