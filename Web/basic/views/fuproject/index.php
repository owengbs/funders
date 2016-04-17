<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FuProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '项目列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fu-project-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fu Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label' => '项目编号',
                'value' => 'id',
            ],
            [
                'label' => '项目名称',
                'attribute'=>'name',
            ],
            [
                'label'=>'公司名称',
                'format'=>'raw',
                'value'=>function($data){
                    return Html::a($data->fuCompany->name, ['fucompany/view','id'=>$data->fuCompany->id]);
                }
            ],
            [
                'label'=>'领域',
                'attribute'=>'fuCompany.fuIndustry.name',
            ],
            'meettime',
            // 'signtime',
            // 'amount',
            // 'estimatevalue',
            // 'news',
            // 'lastmodified',
            // 'author',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
