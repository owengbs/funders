<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FuContactsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fu-contacts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'name') ?>

    <?php //<?= $form->field($model, 'score') ?>

    <?php  //<?= $form->field($model, 'en_name') ?>

    <?php  //<?= $form->field($model, 'phone1') ?>

    <?php  // <?= $form->field($model, 'phone2') ?>

    <?php // echo $form->field($model, 'telphone1') ?>

    <?php // echo $form->field($model, 'telphone2') ?>

    <?php // echo $form->field($model, 'telphone3') ?>

    <?php // echo $form->field($model, 'email1') ?>

    <?php // echo $form->field($model, 'email2') ?>

    <?php // echo $form->field($model, 'im') ?>

    <?php // echo $form->field($model, 'weixin') ?>

    <?php // echo $form->field($model, 'school') ?>

    <?php // echo $form->field($model, 'birthdate') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'position1') ?>

    <?php // echo $form->field($model, 'position2') ?>

    <?php // echo $form->field($model, 'position3') ?>

    <?php // echo $form->field($model, 'position4') ?>

    <?php // echo $form->field($model, 'industryId') ?>

    <?php // echo $form->field($model, 'company1') ?>

    <?php // echo $form->field($model, 'company2') ?>

    <?php // echo $form->field($model, 'department1') ?>

    <?php // echo $form->field($model, 'department2') ?>

    <?php // echo $form->field($model, 'affiliatedcompany1') ?>

    <?php // echo $form->field($model, 'affiliatedcompany2') ?>

    <?php // echo $form->field($model, 'address1') ?>

    <?php // echo $form->field($model, 'address2') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'groupId') ?>

    <?php // echo $form->field($model, 'createtime') ?>

    <?php // echo $form->field($model, 'lastmodified') ?>

    <?php // echo $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php  //<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
