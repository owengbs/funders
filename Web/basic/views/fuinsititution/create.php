<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FuInsititution */

$this->title = 'Create Fu Insititution';
$this->params['breadcrumbs'][] = ['label' => 'Fu Insititutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fu-insititution-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
