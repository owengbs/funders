<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FuCaseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fu-case-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'companyId') ?>

    <?= $form->field($model, 'phaseId') ?>

    <?= $form->field($model, 'amount') ?>

    <?= $form->field($model, 'institutionId') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'lastmodified') ?>

    <?php // echo $form->field($model, 'author') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
