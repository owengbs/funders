<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FuContacts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fu-contacts-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'score')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'en_name')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'groupId')->dropDownList($groupnames, ['prompt' => '']) ?>

    <?= $form->field($model, 'phone1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telphone1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telphone2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telphone3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'im')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weixin')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthdate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'industryId')->textInput() ?>

    <?= $form->field($model, 'company1')->widget(\yii\jui\AutoComplete::classname(), [
    'clientOptions' => [
        'source' => $instinames,
        ], 
    ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company2')->widget(\yii\jui\AutoComplete::classname(), [
    'clientOptions' => [
        'source' => $instinames,
        ], 
    ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'affiliatedcompany1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'affiliatedcompany2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    

    <?= $form->field($model, 'createtime')->textInput() ?>

    <?= $form->field($model, 'lastmodified')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
