<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FuContacts */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fu Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fu-contacts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'score',
            'en_name',
            'phone1',
            'phone2',
            'telphone1',
            'telphone2',
            'telphone3',
            'email1:email',
            'email2:email',
            'im',
            'weixin',
            'school',
            'birthdate',
            'comment',
            'position1',
            'position2',
            'position3',
            'position4',
            'industryId',
            'company1',
            'company2',
            'department1',
            'department2',
            'affiliatedcompany1',
            'affiliatedcompany2',
            'address1',
            'address2',
            'website',
            'fax',
            'groupId',
            'createtime',
            'lastmodified',
            'id',
        ],
    ]) ?>

</div>
