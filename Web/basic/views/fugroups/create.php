<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FuGroups */

$this->title = 'Create Fu Groups';
$this->params['breadcrumbs'][] = ['label' => 'Fu Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fu-groups-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
