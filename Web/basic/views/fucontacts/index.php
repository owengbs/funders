<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel app\models\FuContactsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '投资人列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fu-contacts-index">

    <h1><?= Html::encode($this->title) ?></h1>
   
    <p>
        <?= Html::a('创建投资人', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            
//            'company1',
            'position1',
            'email1',
            // 'author',
            [
                'content' => function($model, $key, $index, $column) {
                if($model->fuInsititution != null)
                    return Html::a($model->fuInsititution->name,  ['fuinsititution/view','id'=>$model->fuInsititution->id]);
                else
                    return Html::encode($model->company1);
                    }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                   'update' => function ($url, $model, $key) {
                        return  Html::a('Update', $url, ['target'=>'_blank']);
                },]
            ],
        ],
//        'itemOptions' => ['class' => 'item'],
//        'itemView' => '_item',
//        'itemView' => function ($model, $key, $index, $widget) {
//            return Html::a(Html::encode($model->name), ['view', 'id' => $model->id]);
//        },
    ]) ?>

</div>
