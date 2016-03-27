<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FuInsititution */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fu-insititution-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'describe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastmodified')->textInput() ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
