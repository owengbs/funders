<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FuCompany */

$this->title = 'Create Fu Company';
$this->params['breadcrumbs'][] = ['label' => 'Fu Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fu-company-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
