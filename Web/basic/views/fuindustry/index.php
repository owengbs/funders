<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FuIndustrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fu Industries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fu-industry-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fu Industry', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pid',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
