<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FuCompanySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fu Companies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fu-company-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fu Company', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'label' => '公司名称',
                'attribute' => 'name',
            ],
//            'industryId',
            [
                'label' => '领域',
                'attribute'=>'fuIndustry.name',
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
