<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FuProjectSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fu-project-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'companyId') ?>

    <?= $form->field($model, 'industryId') ?>

    <?= $form->field($model, 'meettime') ?>

    <?php // echo $form->field($model, 'signtime') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'estimatevalue') ?>

    <?php // echo $form->field($model, 'news') ?>

    <?php // echo $form->field($model, 'lastmodified') ?>

    <?php // echo $form->field($model, 'author') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
