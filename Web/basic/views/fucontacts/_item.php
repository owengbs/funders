<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<div class="post">
    <h2><?= Html::a(Html::encode($model->name), ['view', 'id' => $model->id]) ?></h2>
    <h4>
        <?php if($model->fuInsititution != null): ?>
        <?=Html::a($model->fuInsititution->name,  ['fuinsititution/view','id'=>$model->fuInsititution->id])?>
        <?php else: ?>
        <?=Html::encode($model->company1)?>
        <?php endif; ?>
    <?= Html::encode($model->position1)?></h4>
    <?= Html::encode($model->telphone1)?>
    <?= Html::encode($model->email1)?>
</div>