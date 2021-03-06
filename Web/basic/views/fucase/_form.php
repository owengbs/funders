<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FuCase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fu-case-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'companyId')->dropDownList($companynames) ?>

    <?= $form->field($model, 'phaseId')->dropDownList($phasenames) ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'insititutionId')->dropDownList($insititutionnames) ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'lastmodified')->textInput() ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
