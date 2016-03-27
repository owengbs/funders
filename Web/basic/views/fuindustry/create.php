<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FuIndustry */

$this->title = 'Create Fu Industry';
$this->params['breadcrumbs'][] = ['label' => 'Fu Industries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fu-industry-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
