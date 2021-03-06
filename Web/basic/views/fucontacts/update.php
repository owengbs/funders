<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FuContacts */

$this->title = 'Update Fu Contacts: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fu Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fu-contacts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'instinames'=>$instinames,
        'groupnames'=>$groupnames,
    ]) ?>

</div>
