<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FuProject */

$this->title = 'Create Fu Project';
$this->params['breadcrumbs'][] = ['label' => 'Fu Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fu-project-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'companynames' => $companynames,
        'industrynames' => $industrynames,
    ]) ?>

</div>
