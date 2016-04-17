<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FuProject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fu-project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'companyId')->dropDownList($companynames)->label('公司名称')  ?>

    <?= $form->field($model, 'industryId')->dropDownList($industrynames)->label('领域')  ?>

    <?= $form->field($model, 'meettime')->textInput() ?>

    <?= $form->field($model, 'signtime')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'estimatevalue')->textInput() ?>

    <?= $form->field($model, 'news')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastmodified')->textInput() ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
